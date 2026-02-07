<?php
// Usage: php av_json_to_array.php /path/to/av_*.json [field]
// Default field: adjusted_close (fallback to close if missing)

if ($argc < 2) {
    fwrite(STDERR, "Usage: php av_json_to_array.php /path/to/av_*.json [field]\n");
    exit(1);
}

$path = $argv[1];
$field = $argv[2] ?? 'adjusted_close';

if (!is_file($path)) {
    fwrite(STDERR, "File not found: {$path}\n");
    exit(1);
}

$json = file_get_contents($path);
$data = json_decode($json, true);
if (!is_array($data)) {
    fwrite(STDERR, "Invalid JSON: {$path}\n");
    exit(1);
}

// Find the first key that looks like time series data
$series = null;
foreach ($data as $k => $v) {
    if (stripos($k, 'Time Series') !== false && is_array($v)) {
        $series = $v;
        break;
    }
}

if ($series === null) {
    fwrite(STDERR, "No time series found in JSON\n");
    exit(1);
}

// Sort by date ascending
$dates = array_keys($series);
rsort($dates); // most recent first
$dates = array_reverse($dates); // oldest first

$values = [];
foreach ($dates as $date) {
    $row = $series[$date];
    if (!is_array($row)) {
        continue;
    }
    // Alpha Vantage uses keys like "5. adjusted close" or "4. close"
    $value = null;
    foreach ($row as $key => $val) {
        $normalized = strtolower(preg_replace('/^\d+\.\s*/', '', $key));
        if ($normalized === str_replace('_', ' ', strtolower($field))) {
            $value = $val;
            break;
        }
    }

    if ($value === null && $field === 'adjusted_close') {
        // Fallback to close
        foreach ($row as $key => $val) {
            $normalized = strtolower(preg_replace('/^\d+\.\s*/', '', $key));
            if ($normalized === 'close') {
                $value = $val;
                break;
            }
        }
    }

    if ($value === null) {
        continue;
    }

    $values[] = (float) $value;
}

// Print PHP array literal for easy copy/paste into tests
echo "[" . implode(", ", array_map(fn($v) => rtrim(rtrim(sprintf('%.10F', $v), '0'), '.'), $values)) . "]\n";
