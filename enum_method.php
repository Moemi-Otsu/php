<?php
declare(strict_types=1);

interface Colorful
{
    public function color(): string;
}

// Backed Enum（スカラー値をもつenum）の場合、
// インターフェイスの宣言は依存する型の宣言の直後に置きます。
enum Cards: string implements Colorful
{
    case Hearts = 'H';
    case Diamonds = 'D';
    case Clubs = 'C';
    case Spades = 'S';
    
    // インターフェイスの規約を満たすための実装
    public function color(): string
    {
        return match($this) {
            Cards::Hearts, Cards::Diamonds => 'Red',
            Cards::Clubs, Cards::Spades => 'Black',
        };
    }
}

var_dump(Cards::Clubs);
var_dump(Cards::Diamonds->color());
