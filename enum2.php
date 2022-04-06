<?php
declare(strict_types=1);

enum AccountStatus: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case LEAVE = 'leave';
    
    public function description(): string
    {
        return match($this) {
            self::ACTIVE => '有効',
            self::INACTIVE => '無効',
            self::LEAVE => '退会済み',
        };
    }
}

var_dump(AccountStatus::ACTIVE); // enum(AccountStatus::ACTIVE)
var_dump(AccountStatus::ACTIVE->name); // 読み取り専用のプロパティname caseそのものの名前返す
var_dump(AccountStatus::ACTIVE->value); // string(6) "active"
var_dump(gettype(AccountStatus::ACTIVE::from('active'))); // enum(AccountStatus::ACTIVE)
//var_dump(AccountStatus::ACTIVE::from('undefined status')); // PHP Fatal error:
var_dump(AccountStatus::ACTIVE::tryFrom('active')); // enum(AccountStatus::ACTIVE)
var_dump(AccountStatus::ACTIVE::tryFrom('undefined status')); // NULL
var_dump(AccountStatus::ACTIVE->description()); // string(6) "有効"
var_dump(AccountStatus::LEAVE->description()); // string(12) "退会済み"