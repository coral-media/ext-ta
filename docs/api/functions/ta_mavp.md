
Moving Average with Variable Period (MAVP).

***

* Full name: `ta_mavp`
* Defined in: `ta.stub.php`

## Parameters

| Parameter    | Type        | Description            |
|--------------|-------------|------------------------|
| `$values`    | **float[]** |                        |
| `$periods`   | **float[]** |                        |
| `$minPeriod` | **int**     | Default 2              |
| `$maxPeriod` | **int**     | Default 30             |
| `$maType`    | **int**     | Default TA_MA_TYPE_SMA |

## Return Value

**array<int,float|null>**

Values aligned to input indexes (leading nulls).
