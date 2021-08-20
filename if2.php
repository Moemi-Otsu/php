<?php

$v = 'My Value';

//$r = ($v) ?: 'No Value';
$r = ($v === "My Value") ? 'Yes' : 'No';
echo $r;