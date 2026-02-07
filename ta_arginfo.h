/* This is a generated file, edit the .stub.php file instead.
 * Stub hash: 096de5a07ed853758a59b14f052b950d27b0bac0 */

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

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_ta_accbands, 0, 3, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, high, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, low, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, close, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, period, IS_LONG, 0, "20")
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_ta_ht_trendline, 0, 1, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, values, IS_ARRAY, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_ta_ma, 0, 1, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, values, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, period, IS_LONG, 0, "30")
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, maType, IS_LONG, 0, "TA_MA_TYPE_SMA")
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_ta_mavp, 0, 2, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, values, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, periods, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, minPeriod, IS_LONG, 0, "2")
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, maxPeriod, IS_LONG, 0, "30")
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, maType, IS_LONG, 0, "TA_MA_TYPE_SMA")
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_ta_midpoint, 0, 1, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, values, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, period, IS_LONG, 0, "14")
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_ta_midprice, 0, 2, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, high, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, low, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, period, IS_LONG, 0, "14")
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_ta_sar, 0, 2, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, high, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, low, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, acceleration, IS_DOUBLE, 0, "0.02")
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, maximum, IS_DOUBLE, 0, "0.2")
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_ta_sarext, 0, 2, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, high, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, low, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, startValue, IS_DOUBLE, 0, "0.0")
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, offsetOnReverse, IS_DOUBLE, 0, "0.0")
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, accelerationInitLong, IS_DOUBLE, 0, "0.02")
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, accelerationLong, IS_DOUBLE, 0, "0.02")
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, accelerationMaxLong, IS_DOUBLE, 0, "0.2")
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, accelerationInitShort, IS_DOUBLE, 0, "0.02")
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, accelerationShort, IS_DOUBLE, 0, "0.02")
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, accelerationMaxShort, IS_DOUBLE, 0, "0.2")
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_ta_atr, 0, 3, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, high, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, low, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, close, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, period, IS_LONG, 0, "14")
ZEND_END_ARG_INFO()

#define arginfo_ta_natr arginfo_ta_atr

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_ta_trange, 0, 3, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, high, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, low, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, close, IS_ARRAY, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_ta_add, 0, 2, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, valuesA, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, valuesB, IS_ARRAY, 0)
ZEND_END_ARG_INFO()

#define arginfo_ta_sub arginfo_ta_add

#define arginfo_ta_mult arginfo_ta_add

#define arginfo_ta_div arginfo_ta_add

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_ta_sum, 0, 1, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, values, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, period, IS_LONG, 0, "30")
ZEND_END_ARG_INFO()

#define arginfo_ta_max arginfo_ta_sum

#define arginfo_ta_min arginfo_ta_sum

#define arginfo_ta_maxindex arginfo_ta_sum

#define arginfo_ta_minindex arginfo_ta_sum

#define arginfo_ta_minmax arginfo_ta_sum

#define arginfo_ta_minmaxindex arginfo_ta_sum

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_ta_ad, 0, 4, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, high, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, low, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, close, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, volume, IS_ARRAY, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_ta_adosc, 0, 4, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, high, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, low, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, close, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, volume, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, fastPeriod, IS_LONG, 0, "3")
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, slowPeriod, IS_LONG, 0, "10")
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_ta_obv, 0, 2, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, values, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, volume, IS_ARRAY, 0)
ZEND_END_ARG_INFO()

#define arginfo_ta_acos arginfo_ta_ht_trendline

#define arginfo_ta_asin arginfo_ta_ht_trendline

#define arginfo_ta_atan arginfo_ta_ht_trendline

#define arginfo_ta_ceil arginfo_ta_ht_trendline

#define arginfo_ta_cos arginfo_ta_ht_trendline

#define arginfo_ta_cosh arginfo_ta_ht_trendline

#define arginfo_ta_exp arginfo_ta_ht_trendline

#define arginfo_ta_floor arginfo_ta_ht_trendline

#define arginfo_ta_ln arginfo_ta_ht_trendline

#define arginfo_ta_log10 arginfo_ta_ht_trendline

#define arginfo_ta_sin arginfo_ta_ht_trendline

#define arginfo_ta_sinh arginfo_ta_ht_trendline

#define arginfo_ta_sqrt arginfo_ta_ht_trendline

#define arginfo_ta_tan arginfo_ta_ht_trendline

#define arginfo_ta_tanh arginfo_ta_ht_trendline

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_ta_avgprice, 0, 4, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, open, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, high, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, low, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, close, IS_ARRAY, 0)
ZEND_END_ARG_INFO()

#define arginfo_ta_avgdev arginfo_ta_midpoint

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_ta_medprice, 0, 2, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, high, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, low, IS_ARRAY, 0)
ZEND_END_ARG_INFO()

#define arginfo_ta_typprice arginfo_ta_trange

#define arginfo_ta_wclprice arginfo_ta_trange

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_ta_bbands, 0, 1, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, values, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, period, IS_LONG, 0, "5")
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, nbDevUp, IS_DOUBLE, 0, "2.0")
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, nbDevDn, IS_DOUBLE, 0, "2.0")
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, maType, IS_LONG, 0, "TA_MA_TYPE_SMA")
ZEND_END_ARG_INFO()
