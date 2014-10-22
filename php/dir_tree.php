<?php

    ini_set('date.timezone','PRC');

    function getDirFile($path) {
        if (is_dir($path)) {
            $files = array_slice(scandir($path), 2); // remove . && ..
        } else {
            echo $fileName .' is not exists';
            return;
        }
        
        foreach ($files as $item) {
            $currPath = $path . '/' . $item;
            if (is_dir($currPath)) {
                echo "$currPath \n";
                getDirFile($currPath);
            } else {
                echo "-- $item \n";
            }
        }
    }

    getDirFile('/home/chenhong/devspace/hao360cn_fetest/study/test');

?>