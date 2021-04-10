<?php

interface Reader
{
  public function read();
}

interface Writer
{
  public function write($value);
}

class Configure implememts Reader, Writer
{
  public function write($value)
  {
    // 書き込みの処理
  }
  
  public function read()
}