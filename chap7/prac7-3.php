<?php
//323Pを参考に326Pの演習問題を解く
    $dir = new DirectoryIterator('./');
    foreach ($dir as $file) {
        if ($file->isFile()) {
            print "{$file->getFilename()}：{$file->getSize()}<br />"; 
     }  
    }
?>