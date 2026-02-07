<?php
/** @generate-arginfo */
/**
 * @return string
 */
function ta_version(): string {}

/**
 * Simple Moving Average (SMA).
 *
 * @param float[] $values
 * @param int $period
 * @return array<int, float|null> Values aligned to input indexes (leading nulls).
 */
function ta_sma(array $values, int $period): array {}

/**
 * Exponential Moving Average (EMA).
 *
 * @param float[] $values
 * @param int $period
 * @return array<int, float|null> Values aligned to input indexes (leading nulls).
 */
function ta_ema(array $values, int $period): array {}

/**
 * Weighted Moving Average (WMA).
 *
 * @param float[] $values
 * @param int $period
 * @return array<int, float|null> Values aligned to input indexes (leading nulls).
 */
function ta_wma(array $values, int $period): array {}

/**
 * Double Exponential Moving Average (DEMA).
 *
 * @param float[] $values
 * @param int $period
 * @return array<int, float|null> Values aligned to input indexes (leading nulls).
 */
function ta_dema(array $values, int $period): array {}

/**
 * Triple Exponential Moving Average (TEMA).
 *
 * @param float[] $values
 * @param int $period
 * @return array<int, float|null> Values aligned to input indexes (leading nulls).
 */
function ta_tema(array $values, int $period): array {}

/**
 * Triangular Moving Average (TRIMA).
 *
 * @param float[] $values
 * @param int $period
 * @return array<int, float|null> Values aligned to input indexes (leading nulls).
 */
function ta_trima(array $values, int $period): array {}

/**
 * Kaufman Adaptive Moving Average (KAMA).
 *
 * @param float[] $values
 * @param int $period
 * @return array<int, float|null> Values aligned to input indexes (leading nulls).
 */
function ta_kama(array $values, int $period): array {}

/**
 * MESA Adaptive Moving Average (MAMA).
 *
 * @param float[] $values
 * @param float $fastLimit Default 0.5
 * @param float $slowLimit Default 0.05
 * @return array<int, float|null> Values aligned to input indexes (leading nulls).
 */
function ta_mama(array $values, float $fastLimit = 0.5, float $slowLimit = 0.05): array {}

/**
 * Triple Exponential Moving Average (T3).
 *
 * @param float[] $values
 * @param int $period
 * @param float $vFactor Default 0.7
 * @return array<int, float|null> Values aligned to input indexes (leading nulls).
 */
function ta_t3(array $values, int $period, float $vFactor = 0.7): array {}

/**
 * Acceleration Bands (ACCBANDS).
 *
 * @param float[] $high
 * @param float[] $low
 * @param float[] $close
 * @param int $period Default 20
 * @return array{upper: array<int, float|null>, middle: array<int, float|null>, lower: array<int, float|null>}
 */
function ta_accbands(array $high, array $low, array $close, int $period = 20): array {}

/**
 * Hilbert Transform - Instantaneous Trendline (HT_TRENDLINE).
 *
 * @param float[] $values
 * @return array<int, float|null> Values aligned to input indexes (leading nulls).
 */
function ta_ht_trendline(array $values): array {}

/**
 * Moving Average (MA).
 *
 * @param float[] $values
 * @param int $period Default 30
 * @param int $maType Default TA_MA_TYPE_SMA
 * @return array<int, float|null> Values aligned to input indexes (leading nulls).
 */
function ta_ma(array $values, int $period = 30, int $maType = TA_MA_TYPE_SMA): array {}

/**
 * Moving Average with Variable Period (MAVP).
 *
 * @param float[] $values
 * @param float[] $periods
 * @param int $minPeriod Default 2
 * @param int $maxPeriod Default 30
 * @param int $maType Default TA_MA_TYPE_SMA
 * @return array<int, float|null> Values aligned to input indexes (leading nulls).
 */
function ta_mavp(array $values, array $periods, int $minPeriod = 2, int $maxPeriod = 30, int $maType = TA_MA_TYPE_SMA): array {}

/**
 * MidPoint over period (MIDPOINT).
 *
 * @param float[] $values
 * @param int $period Default 14
 * @return array<int, float|null> Values aligned to input indexes (leading nulls).
 */
function ta_midpoint(array $values, int $period = 14): array {}

/**
 * Midpoint Price over period (MIDPRICE).
 *
 * @param float[] $high
 * @param float[] $low
 * @param int $period Default 14
 * @return array<int, float|null> Values aligned to input indexes (leading nulls).
 */
function ta_midprice(array $high, array $low, int $period = 14): array {}

/**
 * Parabolic SAR (SAR).
 *
 * @param float[] $high
 * @param float[] $low
 * @param float $acceleration Default 0.02
 * @param float $maximum Default 0.20
 * @return array<int, float|null> Values aligned to input indexes (leading nulls).
 */
function ta_sar(array $high, array $low, float $acceleration = 0.02, float $maximum = 0.20): array {}

/**
 * Parabolic SAR - Extended (SAREXT).
 *
 * @param float[] $high
 * @param float[] $low
 * @param float $startValue Default 0.0
 * @param float $offsetOnReverse Default 0.0
 * @param float $accelerationInitLong Default 0.02
 * @param float $accelerationLong Default 0.02
 * @param float $accelerationMaxLong Default 0.20
 * @param float $accelerationInitShort Default 0.02
 * @param float $accelerationShort Default 0.02
 * @param float $accelerationMaxShort Default 0.20
 * @return array<int, float|null> Values aligned to input indexes (leading nulls).
 */
function ta_sarext(
    array $high,
    array $low,
    float $startValue = 0.0,
    float $offsetOnReverse = 0.0,
    float $accelerationInitLong = 0.02,
    float $accelerationLong = 0.02,
    float $accelerationMaxLong = 0.20,
    float $accelerationInitShort = 0.02,
    float $accelerationShort = 0.02,
    float $accelerationMaxShort = 0.20
): array {}

/**
 * Average True Range (ATR).
 *
 * @param float[] $high
 * @param float[] $low
 * @param float[] $close
 * @param int $period Default 14
 * @return array<int, float|null> Values aligned to input indexes (leading nulls).
 */
function ta_atr(array $high, array $low, array $close, int $period = 14): array {}

/**
 * Normalized Average True Range (NATR).
 *
 * @param float[] $high
 * @param float[] $low
 * @param float[] $close
 * @param int $period Default 14
 * @return array<int, float|null> Values aligned to input indexes (leading nulls).
 */
function ta_natr(array $high, array $low, array $close, int $period = 14): array {}

/**
 * True Range (TRANGE).
 *
 * @param float[] $high
 * @param float[] $low
 * @param float[] $close
 * @return array<int, float|null> Values aligned to input indexes (leading nulls).
 */
function ta_trange(array $high, array $low, array $close): array {}

/**
 * Vector Arithmetic Add (ADD).
 *
 * @param float[] $valuesA
 * @param float[] $valuesB
 * @return array<int, float|null>
 */
function ta_add(array $valuesA, array $valuesB): array {}

/**
 * Vector Arithmetic Subtraction (SUB).
 *
 * @param float[] $valuesA
 * @param float[] $valuesB
 * @return array<int, float|null>
 */
function ta_sub(array $valuesA, array $valuesB): array {}

/**
 * Vector Arithmetic Mult (MULT).
 *
 * @param float[] $valuesA
 * @param float[] $valuesB
 * @return array<int, float|null>
 */
function ta_mult(array $valuesA, array $valuesB): array {}

/**
 * Vector Arithmetic Div (DIV).
 *
 * @param float[] $valuesA
 * @param float[] $valuesB
 * @return array<int, float|null>
 */
function ta_div(array $valuesA, array $valuesB): array {}

/**
 * Summation (SUM).
 *
 * @param float[] $values
 * @param int $period Default 30
 * @return array<int, float|null>
 */
function ta_sum(array $values, int $period = 30): array {}

/**
 * Highest value over a specified period (MAX).
 *
 * @param float[] $values
 * @param int $period Default 30
 * @return array<int, float|null>
 */
function ta_max(array $values, int $period = 30): array {}

/**
 * Lowest value over a specified period (MIN).
 *
 * @param float[] $values
 * @param int $period Default 30
 * @return array<int, float|null>
 */
function ta_min(array $values, int $period = 30): array {}

/**
 * Index of highest value over a specified period (MAXINDEX).
 *
 * @param float[] $values
 * @param int $period Default 30
 * @return array<int, int|null>
 */
function ta_maxindex(array $values, int $period = 30): array {}

/**
 * Index of lowest value over a specified period (MININDEX).
 *
 * @param float[] $values
 * @param int $period Default 30
 * @return array<int, int|null>
 */
function ta_minindex(array $values, int $period = 30): array {}

/**
 * Lowest and highest values over a specified period (MINMAX).
 *
 * @param float[] $values
 * @param int $period Default 30
 * @return array{min: array<int, float|null>, max: array<int, float|null>}
 */
function ta_minmax(array $values, int $period = 30): array {}

/**
 * Indexes of lowest and highest values over a specified period (MINMAXINDEX).
 *
 * @param float[] $values
 * @param int $period Default 30
 * @return array{min: array<int, int|null>, max: array<int, int|null>}
 */
function ta_minmaxindex(array $values, int $period = 30): array {}

/**
 * Chaikin A/D Line (AD).
 *
 * @param float[] $high
 * @param float[] $low
 * @param float[] $close
 * @param float[] $volume
 * @return array<int, float|null>
 */
function ta_ad(array $high, array $low, array $close, array $volume): array {}

/**
 * Chaikin A/D Oscillator (ADOSC).
 *
 * @param float[] $high
 * @param float[] $low
 * @param float[] $close
 * @param float[] $volume
 * @param int $fastPeriod Default 3
 * @param int $slowPeriod Default 10
 * @return array<int, float|null>
 */
function ta_adosc(array $high, array $low, array $close, array $volume, int $fastPeriod = 3, int $slowPeriod = 10): array {}

/**
 * On Balance Volume (OBV).
 *
 * @param float[] $values
 * @param float[] $volume
 * @return array<int, float|null>
 */
function ta_obv(array $values, array $volume): array {}

/**
 * Vector Trigonometric ACos (ACOS).
 *
 * @param float[] $values
 * @return array<int, float|null>
 */
function ta_acos(array $values): array {}

/**
 * Vector Trigonometric ASin (ASIN).
 *
 * @param float[] $values
 * @return array<int, float|null>
 */
function ta_asin(array $values): array {}

/**
 * Vector Trigonometric ATan (ATAN).
 *
 * @param float[] $values
 * @return array<int, float|null>
 */
function ta_atan(array $values): array {}

/**
 * Vector Ceil (CEIL).
 *
 * @param float[] $values
 * @return array<int, float|null>
 */
function ta_ceil(array $values): array {}

/**
 * Vector Trigonometric Cos (COS).
 *
 * @param float[] $values
 * @return array<int, float|null>
 */
function ta_cos(array $values): array {}

/**
 * Vector Trigonometric Cosh (COSH).
 *
 * @param float[] $values
 * @return array<int, float|null>
 */
function ta_cosh(array $values): array {}

/**
 * Vector Exp (EXP).
 *
 * @param float[] $values
 * @return array<int, float|null>
 */
function ta_exp(array $values): array {}

/**
 * Vector Floor (FLOOR).
 *
 * @param float[] $values
 * @return array<int, float|null>
 */
function ta_floor(array $values): array {}

/**
 * Vector Log Natural (LN).
 *
 * @param float[] $values
 * @return array<int, float|null>
 */
function ta_ln(array $values): array {}

/**
 * Vector Log10 (LOG10).
 *
 * @param float[] $values
 * @return array<int, float|null>
 */
function ta_log10(array $values): array {}

/**
 * Vector Trigonometric Sin (SIN).
 *
 * @param float[] $values
 * @return array<int, float|null>
 */
function ta_sin(array $values): array {}

/**
 * Vector Trigonometric Sinh (SINH).
 *
 * @param float[] $values
 * @return array<int, float|null>
 */
function ta_sinh(array $values): array {}

/**
 * Vector Square Root (SQRT).
 *
 * @param float[] $values
 * @return array<int, float|null>
 */
function ta_sqrt(array $values): array {}

/**
 * Vector Trigonometric Tan (TAN).
 *
 * @param float[] $values
 * @return array<int, float|null>
 */
function ta_tan(array $values): array {}

/**
 * Vector Trigonometric Tanh (TANH).
 *
 * @param float[] $values
 * @return array<int, float|null>
 */
function ta_tanh(array $values): array {}

/**
 * Average Price (AVGPRICE).
 *
 * @param float[] $open
 * @param float[] $high
 * @param float[] $low
 * @param float[] $close
 * @return array<int, float|null>
 */
function ta_avgprice(array $open, array $high, array $low, array $close): array {}

/**
 * Average Deviation (AVGDEV).
 *
 * @param float[] $values
 * @param int $period Default 14
 * @return array<int, float|null>
 */
function ta_avgdev(array $values, int $period = 14): array {}

/**
 * Median Price (MEDPRICE).
 *
 * @param float[] $high
 * @param float[] $low
 * @return array<int, float|null>
 */
function ta_medprice(array $high, array $low): array {}

/**
 * Typical Price (TYPPRICE).
 *
 * @param float[] $high
 * @param float[] $low
 * @param float[] $close
 * @return array<int, float|null>
 */
function ta_typprice(array $high, array $low, array $close): array {}

/**
 * Weighted Close Price (WCLPRICE).
 *
 * @param float[] $high
 * @param float[] $low
 * @param float[] $close
 * @return array<int, float|null>
 */
function ta_wclprice(array $high, array $low, array $close): array {}

/**
 * Bollinger Bands (BBANDS).
 *
 * @param float[] $values
 * @param int $period Default 5
 * @param float $nbDevUp Default 2.0
 * @param float $nbDevDn Default 2.0
 * @param int $maType Default TA_MA_TYPE_SMA
 * @return array{upper: array<int, float|null>, middle: array<int, float|null>, lower: array<int, float|null>}
 */
function ta_bbands(array $values, int $period = 5, float $nbDevUp = 2.0, float $nbDevDn = 2.0, int $maType = TA_MA_TYPE_SMA): array {}

/**
 * Moving average type constants.
 */
/**
 * Simple Moving Average (SMA).
 *
 * @var int
 */
const TA_MA_TYPE_SMA = 0;
/**
 * Exponential Moving Average (EMA).
 *
 * @var int
 */
const TA_MA_TYPE_EMA = 1;
/**
 * Weighted Moving Average (WMA).
 *
 * @var int
 */
const TA_MA_TYPE_WMA = 2;
/**
 * Double Exponential Moving Average (DEMA).
 *
 * @var int
 */
const TA_MA_TYPE_DEMA = 3;
/**
 * Triple Exponential Moving Average (TEMA).
 *
 * @var int
 */
const TA_MA_TYPE_TEMA = 4;
/**
 * Triangular Moving Average (TRIMA).
 *
 * @var int
 */
const TA_MA_TYPE_TRIMA = 5;
/**
 * Kaufman Adaptive Moving Average (KAMA).
 *
 * @var int
 */
const TA_MA_TYPE_KAMA = 6;
/**
 * MESA Adaptive Moving Average (MAMA).
 *
 * @var int
 */
const TA_MA_TYPE_MAMA = 7;
/**
 * Triple Exponential Moving Average (T3).
 *
 * @var int
 */
const TA_MA_TYPE_T3 = 8;

/**
 * TA-Lib real range constants.
 */
/**
 * Minimum TA-Lib real value (-3e+37).
 *
 * @var float
 */
const TA_REAL_MIN = 0.0;
/**
 * Maximum TA-Lib real value (3e+37).
 *
 * @var float
 */
const TA_REAL_MAX = 0.0;

/**
 * Lookback constants.
 */
/**
 * Lookback for HT_TRENDLINE (TA_HT_TRENDLINE_Lookback() from TA-Lib).
 *
 * @var int
 */
const TA_HT_TRENDLINE_LOOKBACK = 0;
