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
 * Hilbert Transform - Dominant Cycle Period (HT_DCPERIOD).
 *
 * @param float[] $values
 * @return array<int, float|null>
 */
function ta_ht_dcperiod(array $values): array {}

/**
 * Hilbert Transform - Dominant Cycle Phase (HT_DCPHASE).
 *
 * @param float[] $values
 * @return array<int, float|null>
 */
function ta_ht_dcphase(array $values): array {}

/**
 * Hilbert Transform - Phasor Components (HT_PHASOR).
 *
 * @param float[] $values
 * @return array{inphase: array<int, float|null>, quadrature: array<int, float|null>}
 */
function ta_ht_phasor(array $values): array {}

/**
 * Hilbert Transform - SineWave (HT_SINE).
 *
 * @param float[] $values
 * @return array{sine: array<int, float|null>, leadsine: array<int, float|null>}
 */
function ta_ht_sine(array $values): array {}

/**
 * Hilbert Transform - Trend vs Cycle Mode (HT_TRENDMODE).
 *
 * @param float[] $values
 * @return array<int, int|null>
 */
function ta_ht_trendmode(array $values): array {}

/**
 * Chande Momentum Oscillator (CMO).
 *
 * @param float[] $values
 * @param int $period Default 14
 * @return array<int, float|null>
 */
function ta_cmo(array $values, int $period = 14): array {}


/**
 * Moving Average Convergence/Divergence (MACD).
 *
 * @param float[] $values
 * @param int $fastPeriod Default 12
 * @param int $slowPeriod Default 26
 * @param int $signalPeriod Default 9
 * @return array{macd: array<int, float|null>, signal: array<int, float|null>, hist: array<int, float|null>}
 */
function ta_macd(array $values, int $fastPeriod = 12, int $slowPeriod = 26, int $signalPeriod = 9): array {}

/**
 * MACD with controllable MA type (MACDEXT).
 *
 * @param float[] $values
 * @param int $fastPeriod Default 12
 * @param int $fastMaType Default TA_MA_TYPE_SMA
 * @param int $slowPeriod Default 26
 * @param int $slowMaType Default TA_MA_TYPE_SMA
 * @param int $signalPeriod Default 9
 * @param int $signalMaType Default TA_MA_TYPE_SMA
 * @return array{macd: array<int, float|null>, signal: array<int, float|null>, hist: array<int, float|null>}
 */
function ta_macdext(
    array $values,
    int $fastPeriod = 12,
    int $fastMaType = TA_MA_TYPE_SMA,
    int $slowPeriod = 26,
    int $slowMaType = TA_MA_TYPE_SMA,
    int $signalPeriod = 9,
    int $signalMaType = TA_MA_TYPE_SMA
): array {}

/**
 * MACD Fix 12/26 (MACDFIX).
 *
 * @param float[] $values
 * @param int $signalPeriod Default 9
 * @return array{macd: array<int, float|null>, signal: array<int, float|null>, hist: array<int, float|null>}
 */
function ta_macdfix(array $values, int $signalPeriod = 9): array {}


/**
 * Stochastic Oscillator (STOCH).
 *
 * @param float[] $high
 * @param float[] $low
 * @param float[] $close
 * @param int $fastKPeriod Default 5
 * @param int $slowKPeriod Default 3
 * @param int $slowKMaType Default TA_MA_TYPE_SMA
 * @param int $slowDPeriod Default 3
 * @param int $slowDMaType Default TA_MA_TYPE_SMA
 * @return array{slowk: array<int, float|null>, slowd: array<int, float|null>}
 */
function ta_stoch(
    array $high,
    array $low,
    array $close,
    int $fastKPeriod = 5,
    int $slowKPeriod = 3,
    int $slowKMaType = TA_MA_TYPE_SMA,
    int $slowDPeriod = 3,
    int $slowDMaType = TA_MA_TYPE_SMA
): array {}

/**
 * Stochastic Fast (STOCHF).
 *
 * @param float[] $high
 * @param float[] $low
 * @param float[] $close
 * @param int $fastKPeriod Default 5
 * @param int $fastDPeriod Default 3
 * @param int $fastDMaType Default TA_MA_TYPE_SMA
 * @return array{fastk: array<int, float|null>, fastd: array<int, float|null>}
 */
function ta_stochf(
    array $high,
    array $low,
    array $close,
    int $fastKPeriod = 5,
    int $fastDPeriod = 3,
    int $fastDMaType = TA_MA_TYPE_SMA
): array {}

/**
 * Stochastic Relative Strength Index (STOCHRSI).
 *
 * @param float[] $values
 * @param int $period Default 14
 * @param int $fastKPeriod Default 5
 * @param int $fastDPeriod Default 3
 * @param int $fastDMaType Default TA_MA_TYPE_SMA
 * @return array{fastk: array<int, float|null>, fastd: array<int, float|null>}
 */
function ta_stochrsi(
    array $values,
    int $period = 14,
    int $fastKPeriod = 5,
    int $fastDPeriod = 3,
    int $fastDMaType = TA_MA_TYPE_SMA
): array {}



/**
 * Average Directional Movement Index (ADX).
 *
 * @param float[] $high
 * @param float[] $low
 * @param float[] $close
 * @param int $period Default 14
 * @return array<int, float|null>
 */
function ta_adx(array $high, array $low, array $close, int $period = 14): array {}

/**
 * Average Directional Movement Index Rating (ADXR).
 *
 * @param float[] $high
 * @param float[] $low
 * @param float[] $close
 * @param int $period Default 14
 * @return array<int, float|null>
 */
function ta_adxr(array $high, array $low, array $close, int $period = 14): array {}

/**
 * Absolute Price Oscillator (APO).
 *
 * @param float[] $values
 * @param int $fastPeriod Default 12
 * @param int $slowPeriod Default 26
 * @param int $maType Default TA_MA_TYPE_SMA
 * @return array<int, float|null>
 */
function ta_apo(array $values, int $fastPeriod = 12, int $slowPeriod = 26, int $maType = TA_MA_TYPE_SMA): array {}

/**
 * Aroon (AROON).
 *
 * @param float[] $high
 * @param float[] $low
 * @param int $period Default 14
 * @return array{down: array<int, float|null>, up: array<int, float|null>}
 */
function ta_aroon(array $high, array $low, int $period = 14): array {}

/**
 * Aroon Oscillator (AROONOSC).
 *
 * @param float[] $high
 * @param float[] $low
 * @param int $period Default 14
 * @return array<int, float|null>
 */
function ta_aroonosc(array $high, array $low, int $period = 14): array {}

/**
 * Balance Of Power (BOP).
 *
 * @param float[] $open
 * @param float[] $high
 * @param float[] $low
 * @param float[] $close
 * @return array<int, float|null>
 */
function ta_bop(array $open, array $high, array $low, array $close): array {}

/**
 * Commodity Channel Index (CCI).
 *
 * @param float[] $high
 * @param float[] $low
 * @param float[] $close
 * @param int $period Default 14
 * @return array<int, float|null>
 */
function ta_cci(array $high, array $low, array $close, int $period = 14): array {}

/**
 * Directional Movement Index (DX).
 *
 * @param float[] $high
 * @param float[] $low
 * @param float[] $close
 * @param int $period Default 14
 * @return array<int, float|null>
 */
function ta_dx(array $high, array $low, array $close, int $period = 14): array {}

/**
 * Intraday Momentum Index (IMI).
 *
 * @param float[] $open
 * @param float[] $close
 * @param int $period Default 14
 * @return array<int, float|null>
 */
function ta_imi(array $open, array $close, int $period = 14): array {}

/**
 * Money Flow Index (MFI).
 *
 * @param float[] $high
 * @param float[] $low
 * @param float[] $close
 * @param float[] $volume
 * @param int $period Default 14
 * @return array<int, float|null>
 */
function ta_mfi(array $high, array $low, array $close, array $volume, int $period = 14): array {}

/**
 * Minus Directional Indicator (MINUS_DI).
 *
 * @param float[] $high
 * @param float[] $low
 * @param float[] $close
 * @param int $period Default 14
 * @return array<int, float|null>
 */
function ta_minus_di(array $high, array $low, array $close, int $period = 14): array {}

/**
 * Minus Directional Movement (MINUS_DM).
 *
 * @param float[] $high
 * @param float[] $low
 * @param int $period Default 14
 * @return array<int, float|null>
 */
function ta_minus_dm(array $high, array $low, int $period = 14): array {}

/**
 * Plus Directional Indicator (PLUS_DI).
 *
 * @param float[] $high
 * @param float[] $low
 * @param float[] $close
 * @param int $period Default 14
 * @return array<int, float|null>
 */
function ta_plus_di(array $high, array $low, array $close, int $period = 14): array {}

/**
 * Plus Directional Movement (PLUS_DM).
 *
 * @param float[] $high
 * @param float[] $low
 * @param int $period Default 14
 * @return array<int, float|null>
 */
function ta_plus_dm(array $high, array $low, int $period = 14): array {}

/**
 * Percentage Price Oscillator (PPO).
 *
 * @param float[] $values
 * @param int $fastPeriod Default 12
 * @param int $slowPeriod Default 26
 * @param int $maType Default TA_MA_TYPE_SMA
 * @return array<int, float|null>
 */
function ta_ppo(array $values, int $fastPeriod = 12, int $slowPeriod = 26, int $maType = TA_MA_TYPE_SMA): array {}

/**
 * Rate of Change (ROC).
 *
 * @param float[] $values
 * @param int $period Default 10
 * @return array<int, float|null>
 */
function ta_roc(array $values, int $period = 10): array {}

/**
 * Rate of Change Percentage (ROCP).
 *
 * @param float[] $values
 * @param int $period Default 10
 * @return array<int, float|null>
 */
function ta_rocp(array $values, int $period = 10): array {}

/**
 * Rate of Change Ratio (ROCR).
 *
 * @param float[] $values
 * @param int $period Default 10
 * @return array<int, float|null>
 */
function ta_rocr(array $values, int $period = 10): array {}

/**
 * Rate of Change Ratio 100 scale (ROCR100).
 *
 * @param float[] $values
 * @param int $period Default 10
 * @return array<int, float|null>
 */
function ta_rocr100(array $values, int $period = 10): array {}

/**
 * Relative Strength Index (RSI).
 *
 * @param float[] $values
 * @param int $period Default 14
 * @return array<int, float|null>
 */
function ta_rsi(array $values, int $period = 14): array {}

/**
 * Triple Exponential Moving Average (TRIX).
 *
 * @param float[] $values
 * @param int $period Default 30
 * @return array<int, float|null>
 */
function ta_trix(array $values, int $period = 30): array {}

/**
 * Ultimate Oscillator (ULTOSC).
 *
 * @param float[] $high
 * @param float[] $low
 * @param float[] $close
 * @param int $period1 Default 7
 * @param int $period2 Default 14
 * @param int $period3 Default 28
 * @return array<int, float|null>
 */
function ta_ultosc(array $high, array $low, array $close, int $period1 = 7, int $period2 = 14, int $period3 = 28): array {}

/**
 * Williams %R (WILLR).
 *
 * @param float[] $high
 * @param float[] $low
 * @param float[] $close
 * @param int $period Default 14
 * @return array<int, float|null>
 */
function ta_willr(array $high, array $low, array $close, int $period = 14): array {}

/**
 * Beta (BETA).
 *
 * @param float[] $valuesA
 * @param float[] $valuesB
 * @param int $period Default 5
 * @return array<int, float|null>
 */
function ta_beta(array $valuesA, array $valuesB, int $period = 5): array {}

/**
 * Pearson's Correlation Coefficient (CORREL).
 *
 * @param float[] $valuesA
 * @param float[] $valuesB
 * @param int $period Default 30
 * @return array<int, float|null>
 */
function ta_correl(array $valuesA, array $valuesB, int $period = 30): array {}

/**
 * Linear Regression (LINEARREG).
 *
 * @param float[] $values
 * @param int $period Default 14
 * @return array<int, float|null>
 */
function ta_linearreg(array $values, int $period = 14): array {}

/**
 * Linear Regression Angle (LINEARREG_ANGLE).
 *
 * @param float[] $values
 * @param int $period Default 14
 * @return array<int, float|null>
 */
function ta_linearreg_angle(array $values, int $period = 14): array {}

/**
 * Linear Regression Intercept (LINEARREG_INTERCEPT).
 *
 * @param float[] $values
 * @param int $period Default 14
 * @return array<int, float|null>
 */
function ta_linearreg_intercept(array $values, int $period = 14): array {}

/**
 * Linear Regression Slope (LINEARREG_SLOPE).
 *
 * @param float[] $values
 * @param int $period Default 14
 * @return array<int, float|null>
 */
function ta_linearreg_slope(array $values, int $period = 14): array {}

/**
 * Standard Deviation (STDDEV).
 *
 * @param float[] $values
 * @param int $period Default 5
 * @param float $nbDev Default 1.0
 * @return array<int, float|null>
 */
function ta_stddev(array $values, int $period = 5, float $nbDev = 1.0): array {}

/**
 * Time Series Forecast (TSF).
 *
 * @param float[] $values
 * @param int $period Default 14
 * @return array<int, float|null>
 */
function ta_tsf(array $values, int $period = 14): array {}

/**
 * Variance (VAR).
 *
 * @param float[] $values
 * @param int $period Default 5
 * @param float $nbDev Default 1.0
 * @return array<int, float|null>
 */
function ta_var(array $values, int $period = 5, float $nbDev = 1.0): array {}

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
