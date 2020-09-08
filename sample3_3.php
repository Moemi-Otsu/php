<?php

interface FooInterface
{}

class Foo extends ParentFoo implements FooInterface
{}

class Bar
{}

$a = new Foo();

var_dump($a instanceof Foo);        // true
var_dump($a instanceof ParentFoo);  // true
var_dump($a instanceof FooInterface); // true
var_dump($a instanceof Bar); // false