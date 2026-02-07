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
/** @var int */
const TA_MA_TYPE_SMA = 0;
/** @var int */
const TA_MA_TYPE_EMA = 1;
/** @var int */
const TA_MA_TYPE_WMA = 2;
/** @var int */
const TA_MA_TYPE_DEMA = 3;
/** @var int */
const TA_MA_TYPE_TEMA = 4;
/** @var int */
const TA_MA_TYPE_TRIMA = 5;
/** @var int */
const TA_MA_TYPE_KAMA = 6;
/** @var int */
const TA_MA_TYPE_MAMA = 7;
/** @var int */
const TA_MA_TYPE_T3 = 8;

/**
 * TA-Lib real range constants.
 */
/**
 * @var float Runtime value is TA_REAL_MIN from TA-Lib (-3e+37).
 */
const TA_REAL_MIN = 0.0;
/**
 * @var float Runtime value is TA_REAL_MAX from TA-Lib (3e+37).
 */
const TA_REAL_MAX = 0.0;

/**
 * Lookback constants.
 */
/**
 * @var int Runtime value is TA_HT_TRENDLINE_Lookback().
 */
const TA_HT_TRENDLINE_LOOKBACK = 0;
