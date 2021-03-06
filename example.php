<?php

declare(strict_types = 1);

require __DIR__ . "/vendor/autoload.php";

use function FloatHex\floathex;
use function FloatHex\floathex32;
use function FloatHex\float_compare;
use function FloatHex\float_compare_32;

$value = 1.2345;

echo floathex($value) . "\n";
// Output: 3ff3c083126e978d

echo floathex32($value) . "\n";
// Output: 3f9e0419

echo float_compare(1.2345, 1.234500000001);
// Output:
// ┌──────┬─────────────┬──────────────────────────────────────────────────────┐
// │ Sign │ Exponent    │ Mantissa                                             │
// │    0 │ 01111111111 │ 0011110000001000001100010010011011101001011110001101 │
// │    0 │ 01111111111 │ 0011110000001000001100010010011011101010100100100101 │
// │    - │ ----------- │ --------------------------------------xxxxx-x-x-x--- │
// └──────┴─────────────┴──────────────────────────────────────────────────────┘


echo float_compare_32(-0.0, 0.0);
// Output:
// ┌──────┬──────────┬─────────────────────────┐
// │ Sign │ Exponent │ Mantissa                │
// │    1 │ 00000000 │ 00000000000000000000000 │
// │    0 │ 00000000 │ 00000000000000000000000 │
// │    x │ -------- │ ----------------------- │
// └──────┴──────────┴─────────────────────────┘