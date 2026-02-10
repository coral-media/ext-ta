PHP_ARG_WITH([ta-lib],
  [for TA-Lib support],
  [AS_HELP_STRING([--with-ta-lib], [Include vendored TA-Lib support])],
  [yes],
  [yes])

if test "$PHP_TA_LIB" != "no"; then
  TA_SRC_DIR=""

  if test -d "$ext_srcdir/lib/ta-lib"; then
    TA_SRC_DIR="$ext_srcdir/lib/ta-lib"
  elif test -d "$srcdir/lib/ta-lib"; then
    TA_SRC_DIR="$srcdir/lib/ta-lib"
  elif test -d "./lib/ta-lib"; then
    TA_SRC_DIR="./lib/ta-lib"
  else
    AC_MSG_ERROR([Vendored TA-Lib not found in lib/ta-lib.])
  fi

  PHP_ADD_INCLUDE("$TA_SRC_DIR/include")
  PHP_ADD_INCLUDE("$TA_SRC_DIR/src")
  PHP_ADD_INCLUDE("$TA_SRC_DIR/src/ta_common")
  PHP_ADD_INCLUDE("$TA_SRC_DIR/src/ta_func")
  PHP_ADD_INCLUDE("$TA_SRC_DIR/src/ta_abstract")
  PHP_ADD_INCLUDE("$TA_SRC_DIR/src/ta_abstract/frames")
  PHP_ADD_INCLUDE("$TA_SRC_DIR/src/ta_abstract/tables")

  AC_DEFINE(HAVE_TA, 1, [Have TA-Lib])
  TA_SOURCES="\
lib/ta-lib/src/ta_common/*.c \
lib/ta-lib/src/ta_func/*.c \
lib/ta-lib/src/ta_abstract/*.c \
lib/ta-lib/src/ta_abstract/frames/*.c \
lib/ta-lib/src/ta_abstract/tables/*.c"

  PHP_NEW_EXTENSION(ta_lib, ta.c $TA_SOURCES, $ext_shared)
fi
