--TEST--
BcMath\Number sub()
--EXTENSIONS--
bcmath
--FILE--
<?php

$values1 = ['100.012', '-100.012'];

$values2 = [
    [100, 'int'],
    [-30, 'int'],
    ['-20', 'string'],
    ['0.01', 'string'],
    ['-0.40', 'string'],
    [new BcMath\Number('80.3'), 'object'],
    [new BcMath\Number('-50.6'), 'object'],
];

foreach ($values1 as $value1) {
    $num = new BcMath\Number($value1);

    foreach ($values2 as [$value2, $type]) {
        echo "{$value1} - {$value2}: {$type}\n";
        $ret = $num->sub($value2);
        var_dump($ret);
        echo "\n";
    }
}
?>
--EXPECT--
100.012 - 100: int
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(5) "0.012"
  ["scale"]=>
  int(3)
}

100.012 - -30: int
object(BcMath\Number)#5 (2) {
  ["value"]=>
  string(7) "130.012"
  ["scale"]=>
  int(3)
}

100.012 - -20: string
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(7) "120.012"
  ["scale"]=>
  int(3)
}

100.012 - 0.01: string
object(BcMath\Number)#5 (2) {
  ["value"]=>
  string(7) "100.002"
  ["scale"]=>
  int(3)
}

100.012 - -0.40: string
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(7) "100.412"
  ["scale"]=>
  int(3)
}

100.012 - 80.3: object
object(BcMath\Number)#5 (2) {
  ["value"]=>
  string(6) "19.712"
  ["scale"]=>
  int(3)
}

100.012 - -50.6: object
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(7) "150.612"
  ["scale"]=>
  int(3)
}

-100.012 - 100: int
object(BcMath\Number)#3 (2) {
  ["value"]=>
  string(8) "-200.012"
  ["scale"]=>
  int(3)
}

-100.012 - -30: int
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(7) "-70.012"
  ["scale"]=>
  int(3)
}

-100.012 - -20: string
object(BcMath\Number)#3 (2) {
  ["value"]=>
  string(7) "-80.012"
  ["scale"]=>
  int(3)
}

-100.012 - 0.01: string
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(8) "-100.022"
  ["scale"]=>
  int(3)
}

-100.012 - -0.40: string
object(BcMath\Number)#3 (2) {
  ["value"]=>
  string(7) "-99.612"
  ["scale"]=>
  int(3)
}

-100.012 - 80.3: object
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(8) "-180.312"
  ["scale"]=>
  int(3)
}

-100.012 - -50.6: object
object(BcMath\Number)#3 (2) {
  ["value"]=>
  string(7) "-49.412"
  ["scale"]=>
  int(3)
}
