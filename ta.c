#ifdef HAVE_CONFIG_H
#include "config.h"
#endif

#include "php.h"
#include "ext/standard/info.h"
#include "php_ta.h"

#include "ta_arginfo.h"
#include "ta_common.h"
#include "ta_defs.h"
#include "ta_func.h"

typedef TA_RetCode (*ta_ma_fn)(int, int, const double[], int, int*, int*, double[]);

static void ta_fill_output_array(zval *return_value, int out_beg, int out_nb, double *out_real)
{
  int i = 0;
  array_init(return_value);
  for (i = 0; i < out_beg; i++) {
    add_index_null(return_value, i);
  }
  for (i = 0; i < out_nb; i++) {
    add_index_double(return_value, out_beg + i, out_real[i]);
  }
}

static void ta_fill_three_outputs(zval *return_value, int out_beg, int out_nb, double *out_upper, double *out_middle, double *out_lower)
{
  zval upper;
  zval middle;
  zval lower;

  ta_fill_output_array(&upper, out_beg, out_nb, out_upper);
  ta_fill_output_array(&middle, out_beg, out_nb, out_middle);
  ta_fill_output_array(&lower, out_beg, out_nb, out_lower);

  array_init(return_value);
  add_assoc_zval(return_value, "upper", &upper);
  add_assoc_zval(return_value, "middle", &middle);
  add_assoc_zval(return_value, "lower", &lower);
}

static void ta_ma_period_common(INTERNAL_FUNCTION_PARAMETERS, const char *fn_name, ta_ma_fn fn)
{
  zval *input = NULL;
  zend_long period = 0;

  ZEND_PARSE_PARAMETERS_START(2, 2)
    Z_PARAM_ARRAY(input)
    Z_PARAM_LONG(period)
  ZEND_PARSE_PARAMETERS_END();

#ifdef HAVE_TA
  if (period < 2 || period > 100000) {
    zend_throw_error(NULL, "Period must be between 2 and 100000");
    RETURN_THROWS();
  }

  int input_len = (int) zend_hash_num_elements(Z_ARRVAL_P(input));
  if (input_len <= 0) {
    array_init(return_value);
    return;
  }

  if (period > input_len) {
    zend_throw_error(NULL, "Period must be <= number of input values");
    RETURN_THROWS();
  }

  double *in_real = emalloc(sizeof(double) * input_len);
  double *out_real = emalloc(sizeof(double) * input_len);

  int i = 0;
  zval *val = NULL;
  ZEND_HASH_FOREACH_VAL(Z_ARRVAL_P(input), val) {
    if (Z_TYPE_P(val) == IS_LONG || Z_TYPE_P(val) == IS_DOUBLE) {
      in_real[i] = zval_get_double(val);
    } else {
      efree(in_real);
      efree(out_real);
      zend_throw_error(NULL, "%s expects array of numeric values", fn_name);
      RETURN_THROWS();
    }
    i++;
  } ZEND_HASH_FOREACH_END();

  int out_beg = 0;
  int out_nb = 0;
  TA_RetCode rc = fn(0, input_len - 1, in_real, (int) period, &out_beg, &out_nb, out_real);

  if (rc != TA_SUCCESS) {
    efree(in_real);
    efree(out_real);
    zend_throw_error(NULL, "%s failed (code %d)", fn_name, rc);
    RETURN_THROWS();
  }

  ta_fill_output_array(return_value, out_beg, out_nb, out_real);

  efree(in_real);
  efree(out_real);
#else
  zend_throw_error(NULL, "TA-Lib not available");
  RETURN_THROWS();
#endif
}

PHP_FUNCTION(ta_version)
{
#ifdef HAVE_TA
  RETURN_STRING(PHP_TA_VERSION);
#else
  RETURN_STRING("no-ta-lib");
#endif
}

PHP_FUNCTION(ta_sma)
{
  ta_ma_period_common(INTERNAL_FUNCTION_PARAM_PASSTHRU, "ta_sma", TA_SMA);
}

PHP_FUNCTION(ta_ema)
{
  ta_ma_period_common(INTERNAL_FUNCTION_PARAM_PASSTHRU, "ta_ema", TA_EMA);
}

PHP_FUNCTION(ta_wma)
{
  ta_ma_period_common(INTERNAL_FUNCTION_PARAM_PASSTHRU, "ta_wma", TA_WMA);
}

PHP_FUNCTION(ta_dema)
{
  ta_ma_period_common(INTERNAL_FUNCTION_PARAM_PASSTHRU, "ta_dema", TA_DEMA);
}

PHP_FUNCTION(ta_tema)
{
  ta_ma_period_common(INTERNAL_FUNCTION_PARAM_PASSTHRU, "ta_tema", TA_TEMA);
}

PHP_FUNCTION(ta_trima)
{
  ta_ma_period_common(INTERNAL_FUNCTION_PARAM_PASSTHRU, "ta_trima", TA_TRIMA);
}

PHP_FUNCTION(ta_kama)
{
  ta_ma_period_common(INTERNAL_FUNCTION_PARAM_PASSTHRU, "ta_kama", TA_KAMA);
}

PHP_FUNCTION(ta_t3)
{
  zval *input = NULL;
  zend_long period = 0;
  double vfactor = 0.7;

  ZEND_PARSE_PARAMETERS_START(2, 3)
    Z_PARAM_ARRAY(input)
    Z_PARAM_LONG(period)
    Z_PARAM_OPTIONAL
    Z_PARAM_DOUBLE(vfactor)
  ZEND_PARSE_PARAMETERS_END();

#ifdef HAVE_TA
  if (period < 2 || period > 100000) {
    zend_throw_error(NULL, "Period must be between 2 and 100000");
    RETURN_THROWS();
  }
  if (vfactor < 0.0 || vfactor > 1.0) {
    zend_throw_error(NULL, "VFactor must be between 0 and 1");
    RETURN_THROWS();
  }

  int input_len = (int) zend_hash_num_elements(Z_ARRVAL_P(input));
  if (input_len <= 0) {
    array_init(return_value);
    return;
  }
  if (period > input_len) {
    zend_throw_error(NULL, "Period must be <= number of input values");
    RETURN_THROWS();
  }

  double *in_real = emalloc(sizeof(double) * input_len);
  double *out_real = emalloc(sizeof(double) * input_len);

  int i = 0;
  zval *val = NULL;
  ZEND_HASH_FOREACH_VAL(Z_ARRVAL_P(input), val) {
    if (Z_TYPE_P(val) == IS_LONG || Z_TYPE_P(val) == IS_DOUBLE) {
      in_real[i] = zval_get_double(val);
    } else {
      efree(in_real);
      efree(out_real);
      zend_throw_error(NULL, "ta_t3 expects array of numeric values");
      RETURN_THROWS();
    }
    i++;
  } ZEND_HASH_FOREACH_END();

  int out_beg = 0;
  int out_nb = 0;
  TA_RetCode rc = TA_T3(0, input_len - 1, in_real, (int) period, vfactor, &out_beg, &out_nb, out_real);

  if (rc != TA_SUCCESS) {
    efree(in_real);
    efree(out_real);
    zend_throw_error(NULL, "TA_T3 failed (code %d)", rc);
    RETURN_THROWS();
  }

  ta_fill_output_array(return_value, out_beg, out_nb, out_real);

  efree(in_real);
  efree(out_real);
#else
  zend_throw_error(NULL, "TA-Lib not available");
  RETURN_THROWS();
#endif
}

PHP_FUNCTION(ta_mama)
{
  zval *input = NULL;
  double fast_limit = 0.5;
  double slow_limit = 0.05;

  ZEND_PARSE_PARAMETERS_START(1, 3)
    Z_PARAM_ARRAY(input)
    Z_PARAM_OPTIONAL
    Z_PARAM_DOUBLE(fast_limit)
    Z_PARAM_DOUBLE(slow_limit)
  ZEND_PARSE_PARAMETERS_END();

#ifdef HAVE_TA
  if (fast_limit < 0.01 || fast_limit > 0.99 || slow_limit < 0.01 || slow_limit > 0.99) {
    zend_throw_error(NULL, "Fast/Slow limits must be between 0.01 and 0.99");
    RETURN_THROWS();
  }

  int input_len = (int) zend_hash_num_elements(Z_ARRVAL_P(input));
  if (input_len <= 0) {
    array_init(return_value);
    return;
  }

  double *in_real = emalloc(sizeof(double) * input_len);
  double *out_mama = emalloc(sizeof(double) * input_len);
  double *out_fama = emalloc(sizeof(double) * input_len);

  int i = 0;
  zval *val = NULL;
  ZEND_HASH_FOREACH_VAL(Z_ARRVAL_P(input), val) {
    if (Z_TYPE_P(val) == IS_LONG || Z_TYPE_P(val) == IS_DOUBLE) {
      in_real[i] = zval_get_double(val);
    } else {
      efree(in_real);
      efree(out_mama);
      efree(out_fama);
      zend_throw_error(NULL, "ta_mama expects array of numeric values");
      RETURN_THROWS();
    }
    i++;
  } ZEND_HASH_FOREACH_END();

  int out_beg = 0;
  int out_nb = 0;
  TA_RetCode rc = TA_MAMA(0, input_len - 1, in_real, fast_limit, slow_limit, &out_beg, &out_nb, out_mama, out_fama);

  if (rc != TA_SUCCESS) {
    efree(in_real);
    efree(out_mama);
    efree(out_fama);
    zend_throw_error(NULL, "TA_MAMA failed (code %d)", rc);
    RETURN_THROWS();
  }

  ta_fill_output_array(return_value, out_beg, out_nb, out_mama);

  efree(in_real);
  efree(out_mama);
  efree(out_fama);
#else
  zend_throw_error(NULL, "TA-Lib not available");
  RETURN_THROWS();
#endif
}

PHP_FUNCTION(ta_bbands)
{
  zval *input = NULL;
  zend_long period = 5;
  double nb_dev_up = 2.0;
  double nb_dev_dn = 2.0;
  zend_long ma_type = TA_MAType_SMA;

  ZEND_PARSE_PARAMETERS_START(1, 5)
    Z_PARAM_ARRAY(input)
    Z_PARAM_OPTIONAL
    Z_PARAM_LONG(period)
    Z_PARAM_DOUBLE(nb_dev_up)
    Z_PARAM_DOUBLE(nb_dev_dn)
    Z_PARAM_LONG(ma_type)
  ZEND_PARSE_PARAMETERS_END();

#ifdef HAVE_TA
  if (period < 2 || period > 100000) {
    zend_throw_error(NULL, "Period must be between 2 and 100000");
    RETURN_THROWS();
  }
  if (nb_dev_up < TA_REAL_MIN || nb_dev_up > TA_REAL_MAX || nb_dev_dn < TA_REAL_MIN || nb_dev_dn > TA_REAL_MAX) {
    zend_throw_error(NULL, "Deviation must be between TA_REAL_MIN and TA_REAL_MAX");
    RETURN_THROWS();
  }
  if (ma_type < 0 || ma_type > TA_MAType_T3) {
    zend_throw_error(NULL, "MA type must be between TA_MA_TYPE_SMA and TA_MA_TYPE_T3");
    RETURN_THROWS();
  }

  int input_len = (int) zend_hash_num_elements(Z_ARRVAL_P(input));
  if (input_len <= 0) {
    zval upper;
    zval middle;
    zval lower;
    array_init(&upper);
    array_init(&middle);
    array_init(&lower);
    array_init(return_value);
    add_assoc_zval(return_value, "upper", &upper);
    add_assoc_zval(return_value, "middle", &middle);
    add_assoc_zval(return_value, "lower", &lower);
    return;
  }

  if (period > input_len) {
    zend_throw_error(NULL, "Period must be <= number of input values");
    RETURN_THROWS();
  }

  double *in_real = emalloc(sizeof(double) * input_len);
  double *out_upper = emalloc(sizeof(double) * input_len);
  double *out_middle = emalloc(sizeof(double) * input_len);
  double *out_lower = emalloc(sizeof(double) * input_len);

  int i = 0;
  zval *val = NULL;
  ZEND_HASH_FOREACH_VAL(Z_ARRVAL_P(input), val) {
    if (Z_TYPE_P(val) == IS_LONG || Z_TYPE_P(val) == IS_DOUBLE) {
      in_real[i] = zval_get_double(val);
    } else {
      efree(in_real);
      efree(out_upper);
      efree(out_middle);
      efree(out_lower);
      zend_throw_error(NULL, "ta_bbands expects array of numeric values");
      RETURN_THROWS();
    }
    i++;
  } ZEND_HASH_FOREACH_END();

  int out_beg = 0;
  int out_nb = 0;
  TA_RetCode rc = TA_BBANDS(0, input_len - 1, in_real, (int) period, nb_dev_up, nb_dev_dn, (TA_MAType) ma_type, &out_beg, &out_nb, out_upper, out_middle, out_lower);

  if (rc != TA_SUCCESS) {
    efree(in_real);
    efree(out_upper);
    efree(out_middle);
    efree(out_lower);
    zend_throw_error(NULL, "TA_BBANDS failed (code %d)", rc);
    RETURN_THROWS();
  }

  ta_fill_three_outputs(return_value, out_beg, out_nb, out_upper, out_middle, out_lower);

  efree(in_real);
  efree(out_upper);
  efree(out_middle);
  efree(out_lower);
#else
  zend_throw_error(NULL, "TA-Lib not available");
  RETURN_THROWS();
#endif
}

static const zend_function_entry ta_functions[] = {
  PHP_FE(ta_version, arginfo_ta_version)
  PHP_FE(ta_sma, arginfo_ta_sma)
  PHP_FE(ta_ema, arginfo_ta_ema)
  PHP_FE(ta_wma, arginfo_ta_wma)
  PHP_FE(ta_dema, arginfo_ta_dema)
  PHP_FE(ta_tema, arginfo_ta_tema)
  PHP_FE(ta_trima, arginfo_ta_trima)
  PHP_FE(ta_kama, arginfo_ta_kama)
  PHP_FE(ta_mama, arginfo_ta_mama)
  PHP_FE(ta_t3, arginfo_ta_t3)
  PHP_FE(ta_bbands, arginfo_ta_bbands)
  PHP_FE_END
};

PHP_MINIT_FUNCTION(ta)
{
#ifdef HAVE_TA
  TA_Initialize();

  REGISTER_LONG_CONSTANT("TA_MA_TYPE_SMA", TA_MAType_SMA, CONST_CS | CONST_PERSISTENT);
  REGISTER_LONG_CONSTANT("TA_MA_TYPE_EMA", TA_MAType_EMA, CONST_CS | CONST_PERSISTENT);
  REGISTER_LONG_CONSTANT("TA_MA_TYPE_WMA", TA_MAType_WMA, CONST_CS | CONST_PERSISTENT);
  REGISTER_LONG_CONSTANT("TA_MA_TYPE_DEMA", TA_MAType_DEMA, CONST_CS | CONST_PERSISTENT);
  REGISTER_LONG_CONSTANT("TA_MA_TYPE_TEMA", TA_MAType_TEMA, CONST_CS | CONST_PERSISTENT);
  REGISTER_LONG_CONSTANT("TA_MA_TYPE_TRIMA", TA_MAType_TRIMA, CONST_CS | CONST_PERSISTENT);
  REGISTER_LONG_CONSTANT("TA_MA_TYPE_KAMA", TA_MAType_KAMA, CONST_CS | CONST_PERSISTENT);
  REGISTER_LONG_CONSTANT("TA_MA_TYPE_MAMA", TA_MAType_MAMA, CONST_CS | CONST_PERSISTENT);
  REGISTER_LONG_CONSTANT("TA_MA_TYPE_T3", TA_MAType_T3, CONST_CS | CONST_PERSISTENT);
#endif
  return SUCCESS;
}

PHP_MSHUTDOWN_FUNCTION(ta)
{
#ifdef HAVE_TA
  TA_Shutdown();
#endif
  return SUCCESS;
}

PHP_MINFO_FUNCTION(ta)
{
  php_info_print_table_start();
  php_info_print_table_header(2, "ta support", "enabled");
#ifdef HAVE_TA
  php_info_print_table_row(2, "ta-lib", "available");
#else
  php_info_print_table_row(2, "ta-lib", "not available");
#endif
  php_info_print_table_end();
}

zend_module_entry ta_module_entry = {
  STANDARD_MODULE_HEADER,
  "ta",
  ta_functions,
  PHP_MINIT(ta),
  PHP_MSHUTDOWN(ta),
  NULL,
  NULL,
  PHP_MINFO(ta),
  PHP_TA_VERSION,
  STANDARD_MODULE_PROPERTIES
};

#ifdef COMPILE_DL_TA
ZEND_GET_MODULE(ta)
#endif
