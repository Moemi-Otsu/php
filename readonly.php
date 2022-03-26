<?php
declare(strict_types=1);

class Test {
    public readonly string $props;
    public readonly int $int;
    
    public function __construct(string $props, int $int) {
        $this->props = $props;
        $this->int = $int;
    }
}

$test = new Test("foobar", 5);

// 読み込みはOK
var_dump($test->props, $test->int);

// 書き込みはNG
$test->props = "foobar";