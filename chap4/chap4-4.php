<?php
    /*変数$languageの値が「Python」「PHP」「Ruby」
    であれば「インタプリター言語」「C#」「Java」
    であれば「コンパイル言語」と表示するスクリプトを、
    switch命令を使って作成してください。*/
    //参照は133P
    //case 部分は条件ではなくリテラル値や定数として扱われパフォーマンスが上がる
    $language = 'PHP';
    //下記はユーザー入力に基づく場合
    /*if (isset($_GET['language'])) {
        $language = $_GET['language'];
    } else {
        $language = 'Unknown';
    }*/

    switch($language){
        case 'Python':
        case 'PHP':
        case 'Ruby':
            print("インタプリター言語");
            break;
        case 'C#':
        case 'Java':
            print("コンパイル言語");
            break;
    }

    
?>