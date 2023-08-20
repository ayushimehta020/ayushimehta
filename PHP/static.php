<?php
    function add()
    {
        static $x = 1;
        echo $x." ";
        $x++;
    }

    add();
    add();
    add();
?>