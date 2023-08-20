<?php
    $i = 10;
    $j = 5;
    $total;

    function add()
    {
        global $i, $j, $total;
        $total = $i + $j;
    }

    add();

    echo $total;
?>