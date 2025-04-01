<?php
    //コードをmatch式を使って書き換えてみましょう。
    //136Pの4.1.9値を返す新しい「switch」── match式
    $language = 'PHP';

    print match($language){
        'Python','PHP','Ruby'=>"インタプリター言語",
        'C#','Java'=>"コンパイル言語",
    }

?>