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
