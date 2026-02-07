/* This is a generated file, edit the .stub.php file instead.
 * Stub hash: b59b34077f4f86441a7bf27a62e093fe509ee6be */

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_ta_version, 0, 0, IS_STRING, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_ta_sma, 0, 2, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, values, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, period, IS_LONG, 0)
ZEND_END_ARG_INFO()

#define arginfo_ta_ema arginfo_ta_sma

#define arginfo_ta_wma arginfo_ta_sma

#define arginfo_ta_dema arginfo_ta_sma

#define arginfo_ta_tema arginfo_ta_sma

#define arginfo_ta_trima arginfo_ta_sma

#define arginfo_ta_kama arginfo_ta_sma

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_ta_mama, 0, 1, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, values, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, fastLimit, IS_DOUBLE, 0, "0.5")
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, slowLimit, IS_DOUBLE, 0, "0.05")
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_ta_t3, 0, 2, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, values, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, period, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, vFactor, IS_DOUBLE, 0, "0.7")
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_ta_bbands, 0, 1, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, values, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, period, IS_LONG, 0, "5")
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, nbDevUp, IS_DOUBLE, 0, "2.0")
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, nbDevDn, IS_DOUBLE, 0, "2.0")
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, maType, IS_LONG, 0, "TA_MA_TYPE_SMA")
ZEND_END_ARG_INFO()
