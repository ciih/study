<?php

    ini_set('date.timezone','PRC');

    function getDirFile($name) {
        $fileName = $name;
        $path = getcwd() . '\\' . $fileName; // getcwd() == dirname(__FILE__)
        if (is_dir($path)) {
            $files = array_slice(scandir($path), 2); // remove . && ..
        } else {
            echo $fileName .' is not exists';
            return;
        }
        
        foreach ($files as $item) {
            $currPath = $path . '\\' . $item;
            if (is_dir($currPath)) {
                $newName = $fileName . '\\' . $item;
                echo "$newName <br />";
                getDirFile($newName);
            } else {
                echo "-- $item <br />";
            }
        }
    }

    getDirFile('test');

?>