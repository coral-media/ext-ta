
MACD with controllable MA type (MACDEXT).

***

* Full name: `ta_macdext`
* Defined in: `ta.stub.php`

## Parameters

| Parameter       | Type        | Description            |
|-----------------|-------------|------------------------|
| `$values`       | **float[]** |                        |
| `$fastPeriod`   | **int**     | Default 12             |
| `$fastMaType`   | **int**     | Default TA_MA_TYPE_SMA |
| `$slowPeriod`   | **int**     | Default 26             |
| `$slowMaType`   | **int**     | Default TA_MA_TYPE_SMA |
| `$signalPeriod` | **int**     | Default 9              |
| `$signalMaType` | **int**     | Default TA_MA_TYPE_SMA |

## Return Value

**array{macd: array<int,float|null>, signal: array<int,float|null>, hist: array<int,float|null>}**
