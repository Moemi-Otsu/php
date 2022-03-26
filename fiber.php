<?php
declare(strict_types=1);

$fiber = new Fiber(function (): void {
    $value = Fiber::suspend('fiber');
    echo "レジュームした。$value: ", $value, "\n";
});

$value = $fiber->start();

echo "一時停止した。$value: ", $value, "\n";

$fiber->resume('test');