<?php
declare(strict_types=1);

enum AccountStatus
{
    case Active;
    case Inactive;
    case Leave;
}

var_dump(AccountStatus::Active); // enumのインスタンスができる
var_dump(AccountStatus::Active->name); // インスタンスの->nameプロパティへアクセスするとcaseの値を取得できる
var_dump(AccountStatus::cases()); // cases() でenum値の一覧を取得できる