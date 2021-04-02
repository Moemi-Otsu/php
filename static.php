<?php
class Employee
{
    public $name;
    public static $company = '技評技術社';
}

echo '従業員はみんな', Employee::$company, 'に勤めています', PHP_EOL;
