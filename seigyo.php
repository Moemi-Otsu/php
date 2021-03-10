<?php

// if構文
// むしろ中括弧{}なくても動くことを初めて知った

if (true) {
    echo 2, PHP_EOL;
}

// if構文
// 複数の文を中括弧{}で囲むことにより、グループ文として文をグループ化できる。
// 中括弧{}あったほうがやっぱしっくりくる

if (true) {
    echo 2, PHP_EOL;
}

// 制御構造全体も文として見なされる。
// はじめのifの条件式がtrueなので、次のifの式が評価される。これもtrueなので、それに続くechoが表示される。

if (true) {
    if (true) {
        echo 1, PHP_EOL;
    }
}

// 中括弧を用いて表現すると、こう

if (true) {
    if (true) {
        echo 1, PHP_EOL;
    }
}
