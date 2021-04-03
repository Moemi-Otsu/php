<?php
class Employee
{
    public static $company = '技評技術者';
  
    public function getCompany()
    {
        return self::$company; // Employee::$company と同義
    }
}
