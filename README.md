# coral-media/ext-ta (PHP extension)

Minimal PIE-ready scaffold for a TA-Lib based PHP extension with vendored sources.

## Install using PIE

From sources

```sh
pie install --with-ta
```

## Build (from source)

```sh
phpize
./configure --with-ta
make -j"$(nproc)"
make install
```

## Notes

- Vendored TA-Lib sources live under `lib/ta-lib`.
- This scaffold only exposes `ta_version()` and does not yet bind to TA-Lib APIs.
