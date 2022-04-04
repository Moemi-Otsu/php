<?php
declare(strict_types=1);

// 列挙型は、static メソッドを持つこともできます
// コンストラクタの代わりをさせるためです

enum Size
{
    case Small;
    case Medium;
    case Large;
    
    public static function fromLength(int $cm): static
    {
        return match(true) {
            $cm < 50 => static::Small,
            $cm < 100 => static::Medium,
            default => static::Large,
        };
    }
}

var_dump(Size::fromLength(70));

// static メソッドには public, private, protected が指定できますが、
// 列挙型では実際 private と protected は同じものです。
// なぜなら、継承が許されていないからです。