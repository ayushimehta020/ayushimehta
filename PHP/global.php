<?php
    $i = 10;

    function myfunc()
    {
        $i = 5;
        echo "Variable inside the function : ".$i;
    }

    myfunc();

    echo "<br>";
    echo "Variable outside the function : ".$i;
?>