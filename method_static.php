<?php

class Employee
{
    private static $company = 'カンパニー';
  
    public static function getCompany()
    {
        return self::$company;
    }
  
    public static function setCompany($value)
    {
        self::$company = $value;
        echo self::$company;
    }
}

echo Employee::getCompany(), PHP_EOL; // 社名の出力
Employee::setCompany('技術評論社'); // 社名が変わったとき
