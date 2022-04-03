<?php
declare(strict_types=1);

// デフォルトでは、列挙型はスカラー値の情報を持っていない。
// 列挙型のcaseをDBやデータストアで読み書きする必要があるケースがある
// よってビルトインの (シリアライズ可能であることが自明な) スカラー値を持つ case があると、本質的に役に立つ

// スカラー値を持つ case を、"Backed Case" と呼ぶ。
// なぜなら、オブジェクトよりもシンプルな値に依存して(Backed)いるから

enum Suit: string
{
    case Hearts = 'H';
    case Diamonds = 'D';
    case Clubs = 'C';
    case Spades = 'S';
}

// Backed Enum の case は、追加の読み取り専用のプロパティ value を持っている

print Suit::Clubs->value;

// value プロパティを強制的に読み取り専用にするため、
// そのリファレンスを変数には代入できない

$suit = Suit::Clubs;
$ref = &$suit->value;
// Error: Cannot acquire reference to property Suit::$value

// Backed Enum は内部的に BackedEnum インターフェイスを実装している
// 2つのメソッドを公開している

// from(int|string): self スカラー値を受け取り、対応する Enum の case を返す
// 対応する case がない場合は、 ValueError がスローされる

// tryFrom(int|string): ?self スカラー値を受け取り、対応する Enum の case を返す
// 対応する case がない場合は、null を返す

$record = get_stuff_from_database($id);
print $record['suit'];

$suit =  Suit::from($record['suit']);
// 不正なデータを渡すと、次のようなエラーが発生 -> ValueError: "X" is not a valid scalar value for enum "Suit"
print $suit->value;

$suit = Suit::tryFrom('A') ?? Suit::Spades;
// 不正なデータに対しては null を返すので、Suit::Spades が代わりに使われます。
print $suit->value;
