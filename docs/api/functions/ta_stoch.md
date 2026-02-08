
Stochastic Oscillator (STOCH).

***

* Full name: `ta_stoch`
* Defined in: `ta.stub.php`

## Parameters

| Parameter      | Type        | Description            |
|----------------|-------------|------------------------|
| `$high`        | **float[]** |                        |
| `$low`         | **float[]** |                        |
| `$close`       | **float[]** |                        |
| `$fastKPeriod` | **int**     | Default 5              |
| `$slowKPeriod` | **int**     | Default 3              |
| `$slowKMaType` | **int**     | Default TA_MA_TYPE_SMA |
| `$slowDPeriod` | **int**     | Default 3              |
| `$slowDMaType` | **int**     | Default TA_MA_TYPE_SMA |

## Return Value

**array{slowk: array<int,float|null>, slowd: array<int,float|null>}**
