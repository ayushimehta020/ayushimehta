<?php
    if(isset($_POST['txtno1']))
    {
        $no1 = $_REQUEST['txtno1'];
        $no2 = $_REQUEST['txtno2'];
        echo $no1 + $no2;
    }
?>

<html>
    <head>
        <title>Addition of two numbers</title>
    </head>
    <body>
        <form action="2.php" method="POST">
            <input type="text" name="txtno1" placeholder="Enter No. 1">
            <input type="text" name="txtno2" placeholder="Enter No. 2">
            <input type="submit" value="Calculate">
        </form>
    </body>
</html>