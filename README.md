# ta-lib/ext-ta-lib (PHP extension)

PIE-ready TA-Lib extension for PHP, bundling the TA-Lib sources and exposing a set of technical analysis functions.

## Install using PIE

From sources

```sh
pie install --with-ta-lib
```

Also run `make test` to make sure everything is OK.

## Build (from source)

```sh
phpize
./configure --with-ta-lib
make -j"$(nproc)"
make install
```

From [packagist.org](https://packagist.org/packages/ta-lib/ext-ta-lib)

```sh
pie install --with-ta-lib --no-cache -j2
```

Use `--no-cache` and `-jx` if needed.

## TA-Lib Functions

Check the full [API docs](https://ta-lib.github.io/ext-ta-lib/docs/api/Home).

### Overlap Studies
Trend-following averages and bands that overlay price series.

[ACCBANDS](docs/api/functions/ta_accbands.md), [BBANDS](docs/api/functions/ta_bbands.md), [DEMA](docs/api/functions/ta_dema.md), [EMA](docs/api/functions/ta_ema.md), [HT_TRENDLINE](docs/api/functions/ta_ht_trendline.md), [KAMA](docs/api/functions/ta_kama.md), [MA](docs/api/functions/ta_ma.md), [MAMA](docs/api/functions/ta_mama.md), [MAVP](docs/api/functions/ta_mavp.md), [MIDPOINT](docs/api/functions/ta_midpoint.md), [MIDPRICE](docs/api/functions/ta_midprice.md), [SAR](docs/api/functions/ta_sar.md), [SAREXT](docs/api/functions/ta_sarext.md), [SMA](docs/api/functions/ta_sma.md), [T3](docs/api/functions/ta_t3.md), [TEMA](docs/api/functions/ta_tema.md), [TRIMA](docs/api/functions/ta_trima.md), [WMA](docs/api/functions/ta_wma.md)

### Volatility Indicators
Measures of price range and volatility over time.

[ATR](docs/api/functions/ta_atr.md), [NATR](docs/api/functions/ta_natr.md), [TRANGE](docs/api/functions/ta_trange.md)

### Momentum Indicators
Oscillators and momentum measures that quantify speed and direction.

[ADX](docs/api/functions/ta_adx.md), [ADXR](docs/api/functions/ta_adxr.md), [APO](docs/api/functions/ta_apo.md), [AROON](docs/api/functions/ta_aroon.md), [AROONOSC](docs/api/functions/ta_aroonosc.md), [BOP](docs/api/functions/ta_bop.md), [CCI](docs/api/functions/ta_cci.md), [CMO](docs/api/functions/ta_cmo.md), [DX](docs/api/functions/ta_dx.md), [IMI](docs/api/functions/ta_imi.md), [MACD](docs/api/functions/ta_macd.md), [MACDEXT](docs/api/functions/ta_macdext.md), [MACDFIX](docs/api/functions/ta_macdfix.md), [MFI](docs/api/functions/ta_mfi.md), [MINUS_DI](docs/api/functions/ta_minus_di.md), [MINUS_DM](docs/api/functions/ta_minus_dm.md), [MOM](docs/api/functions/ta_mom.md), [PLUS_DI](docs/api/functions/ta_plus_di.md), [PLUS_DM](docs/api/functions/ta_plus_dm.md), [PPO](docs/api/functions/ta_ppo.md), [ROC](docs/api/functions/ta_roc.md), [ROCP](docs/api/functions/ta_rocp.md), [ROCR](docs/api/functions/ta_rocr.md), [ROCR100](docs/api/functions/ta_rocr100.md), [RSI](docs/api/functions/ta_rsi.md), [STOCH](docs/api/functions/ta_stoch.md), [STOCHF](docs/api/functions/ta_stochf.md), [STOCHRSI](docs/api/functions/ta_stochrsi.md), [TRIX](docs/api/functions/ta_trix.md), [ULTOSC](docs/api/functions/ta_ultosc.md), [WILLR](docs/api/functions/ta_willr.md)

### Cycle Indicators
Hilbert Transform-based cycle and phase estimates.

[HT_DCPERIOD](docs/api/functions/ta_ht_dcperiod.md), [HT_DCPHASE](docs/api/functions/ta_ht_dcphase.md), [HT_PHASOR](docs/api/functions/ta_ht_phasor.md), [HT_SINE](docs/api/functions/ta_ht_sine.md), [HT_TRENDMODE](docs/api/functions/ta_ht_trendmode.md)

### Volume Indicators
Volume-driven indicators that combine price and volume flows.

[AD](docs/api/functions/ta_ad.md), [ADOSC](docs/api/functions/ta_adosc.md), [OBV](docs/api/functions/ta_obv.md)

### Pattern Recognition
Candlestick pattern detectors returning integer pattern signals.

[CDL2CROWS](docs/api/functions/ta_cdl2crows.md), [CDL3BLACKCROWS](docs/api/functions/ta_cdl3blackcrows.md), [CDL3INSIDE](docs/api/functions/ta_cdl3inside.md), [CDL3LINESTRIKE](docs/api/functions/ta_cdl3linestrike.md), [CDL3OUTSIDE](docs/api/functions/ta_cdl3outside.md), [CDL3STARSINSOUTH](docs/api/functions/ta_cdl3starsinsouth.md), [CDL3WHITESOLDIERS](docs/api/functions/ta_cdl3whitesoldiers.md), [CDLABANDONEDBABY](docs/api/functions/ta_cdlabandonedbaby.md), [CDLADVANCEBLOCK](docs/api/functions/ta_cdladvanceblock.md), [CDLBELTHOLD](docs/api/functions/ta_cdlbelthold.md), [CDLBREAKAWAY](docs/api/functions/ta_cdlbreakaway.md), [CDLCLOSINGMARUBOZU](docs/api/functions/ta_cdlclosingmarubozu.md), [CDLCONCEALBABYSWALL](docs/api/functions/ta_cdlconcealbabyswall.md), [CDLCOUNTERATTACK](docs/api/functions/ta_cdlcounterattack.md), [CDLDARKCLOUDCOVER](docs/api/functions/ta_cdldarkcloudcover.md), [CDLDOJI](docs/api/functions/ta_cdldoji.md), [CDLDOJISTAR](docs/api/functions/ta_cdldojistar.md), [CDLDRAGONFLYDOJI](docs/api/functions/ta_cdldragonflydoji.md), [CDLENGULFING](docs/api/functions/ta_cdlengulfing.md), [CDLEVENINGDOJISTAR](docs/api/functions/ta_cdleveningdojistar.md), [CDLEVENINGSTAR](docs/api/functions/ta_cdleveningstar.md), [CDLGAPSIDESIDEWHITE](docs/api/functions/ta_cdlgapsidesidewhite.md), [CDLGRAVESTONEDOJI](docs/api/functions/ta_cdlgravestonedoji.md), [CDLHAMMER](docs/api/functions/ta_cdlhammer.md), [CDLHANGINGMAN](docs/api/functions/ta_cdlhangingman.md), [CDLHARAMI](docs/api/functions/ta_cdlharami.md), [CDLHARAMICROSS](docs/api/functions/ta_cdlharamicross.md), [CDLHIGHWAVE](docs/api/functions/ta_cdlhighwave.md), [CDLHIKKAKE](docs/api/functions/ta_cdlhikkake.md), [CDLHIKKAKEMOD](docs/api/functions/ta_cdlhikkakemod.md), [CDLHOMINGPIGEON](docs/api/functions/ta_cdlhomingpigeon.md), [CDLIDENTICAL3CROWS](docs/api/functions/ta_cdlidentical3crows.md), [CDLINNECK](docs/api/functions/ta_cdlinneck.md), [CDLINVERTEDHAMMER](docs/api/functions/ta_cdlinvertedhammer.md), [CDLKICKING](docs/api/functions/ta_cdlkicking.md), [CDLKICKINGBYLENGTH](docs/api/functions/ta_cdlkickingbylength.md), [CDLLADDERBOTTOM](docs/api/functions/ta_cdlladderbottom.md), [CDLLONGLEGGEDDOJI](docs/api/functions/ta_cdllongleggeddoji.md), [CDLLONGLINE](docs/api/functions/ta_cdllongline.md), [CDLMARUBOZU](docs/api/functions/ta_cdlmarubozu.md), [CDLMATCHINGLOW](docs/api/functions/ta_cdlmatchinglow.md), [CDLMATHOLD](docs/api/functions/ta_cdlmathold.md), [CDLMORNINGDOJISTAR](docs/api/functions/ta_cdlmorningdojistar.md), [CDLMORNINGSTAR](docs/api/functions/ta_cdlmorningstar.md), [CDLONNECK](docs/api/functions/ta_cdlonneck.md), [CDLPIERCING](docs/api/functions/ta_cdlpiercing.md), [CDLRICKSHAWMAN](docs/api/functions/ta_cdlrickshawman.md), [CDLRISEFALL3METHODS](docs/api/functions/ta_cdlrisefall3methods.md), [CDLSEPARATINGLINES](docs/api/functions/ta_cdlseparatinglines.md), [CDLSHOOTINGSTAR](docs/api/functions/ta_cdlshootingstar.md), [CDLSHORTLINE](docs/api/functions/ta_cdlshortline.md), [CDLSPINNINGTOP](docs/api/functions/ta_cdlspinningtop.md), [CDLSTALLEDPATTERN](docs/api/functions/ta_cdlstalledpattern.md), [CDLSTICKSANDWICH](docs/api/functions/ta_cdlsticksandwich.md), [CDLTAKURI](docs/api/functions/ta_cdltakuri.md), [CDLTASUKIGAP](docs/api/functions/ta_cdltasukigap.md), [CDLTHRUSTING](docs/api/functions/ta_cdlthrusting.md), [CDLTRISTAR](docs/api/functions/ta_cdltristar.md), [CDLUNIQUE3RIVER](docs/api/functions/ta_cdlunique3river.md), [CDLUPSIDEGAP2CROWS](docs/api/functions/ta_cdlupsidegap2crows.md), [CDLXSIDEGAP3METHODS](docs/api/functions/ta_cdlxsidegap3methods.md)

### Statistic Functions
Statistical relationships and regressions over a data series.

[BETA](docs/api/functions/ta_beta.md), [CORREL](docs/api/functions/ta_correl.md), [LINEARREG](docs/api/functions/ta_linearreg.md), [LINEARREG_ANGLE](docs/api/functions/ta_linearreg_angle.md), [LINEARREG_INTERCEPT](docs/api/functions/ta_linearreg_intercept.md), [LINEARREG_SLOPE](docs/api/functions/ta_linearreg_slope.md), [STDDEV](docs/api/functions/ta_stddev.md), [TSF](docs/api/functions/ta_tsf.md), [VAR](docs/api/functions/ta_var.md)

### Price Transform
Derived price series from OHLC inputs (typical, median, weighted, etc).

[AVGPRICE](docs/api/functions/ta_avgprice.md), [AVGDEV](docs/api/functions/ta_avgdev.md), [MEDPRICE](docs/api/functions/ta_medprice.md), [TYPPRICE](docs/api/functions/ta_typprice.md), [WCLPRICE](docs/api/functions/ta_wclprice.md)

### Math Transform
Element-wise math transforms applied to a series.

[ACOS](docs/api/functions/ta_acos.md), [ASIN](docs/api/functions/ta_asin.md), [ATAN](docs/api/functions/ta_atan.md), [CEIL](docs/api/functions/ta_ceil.md), [COS](docs/api/functions/ta_cos.md), [COSH](docs/api/functions/ta_cosh.md), [EXP](docs/api/functions/ta_exp.md), [FLOOR](docs/api/functions/ta_floor.md), [LN](docs/api/functions/ta_ln.md), [LOG10](docs/api/functions/ta_log10.md), [SIN](docs/api/functions/ta_sin.md), [SINH](docs/api/functions/ta_sinh.md), [SQRT](docs/api/functions/ta_sqrt.md), [TAN](docs/api/functions/ta_tan.md), [TANH](docs/api/functions/ta_tanh.md)

### Math Operators
Element-wise arithmetic and min/max operations on series.

[ADD](docs/api/functions/ta_add.md), [DIV](docs/api/functions/ta_div.md), [MAX](docs/api/functions/ta_max.md), [MAXINDEX](docs/api/functions/ta_maxindex.md), [MIN](docs/api/functions/ta_min.md), [MININDEX](docs/api/functions/ta_minindex.md), [MINMAX](docs/api/functions/ta_minmax.md), [MINMAXINDEX](docs/api/functions/ta_minmaxindex.md), [MULT](docs/api/functions/ta_mult.md), [SUB](docs/api/functions/ta_sub.md), [SUM](docs/api/functions/ta_sum.md)

## Note On Function Counts

The list above is derived from the vendored TA-Lib source (`ta_group_idx.c`) and contains 161 functions. The public list at `https://ta-lib.org/functions/` shows 137 functions and omits the following 24 that are present in the source:

ACCBANDS, ACOS, ADD, ASIN, ATAN, AVGDEV, CDL3OUTSIDE, CEIL, COS, COSH, DIV, EXP, FLOOR, IMI, LN, LOG10, MAVP, MULT, SIN, SINH, SQRT, SUB, TAN, TANH

This is why our README count is higher: it includes math operators/transforms and a few additional indicators that are not listed on the website.

## Notes

- Vendored TA-Lib sources live under `lib/ta-lib`.
