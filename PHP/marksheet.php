<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha1/css/bootstrap.min.css" integrity="sha512-72OVeAaPeV8n3BdZj7hOkaPSEk/uwpDkaGyP4W2jSzAC8tfiO4LMEDWoL3uFp5mcZu+8Eehb4GhZWFwvrss69Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php
    $m1 = $m2 = $m3 = $total = 0;
    $per = $grade = $result = "---";

    if(isset($_POST['txtm1']))
    {
        $m1 = $_POST['txtm1'];
        $m2 = $_POST['txtm2'];
        $m3 = $_POST['txtm3'];
        $total = $m1 + $m2 + $m3;
        if($m1 >= 40 && $m2 >= 40 && $m3 >= 40)
        {
            $per = $total / 3;
            $result = "PASS";
            if($per >= 70)
            {
                $grade = "A+";
            }
            else if($per >= 60)
            {
                $grade = "A";
            }
            else if($per >= 50)
            {
                $grade = "B";
            }
            else
            {
                $grade = "C";
            }
        }
        else
        {
            $per = 0;
            $result = "FAIL";
            $grade = "ATKT";
        }
    }
?>

<html>
    <head>
        <title>Marksheet Using PHP</title>
    </head>
    <body>
        <div class="container">
            <form action="marksheet.php" method="POST">
                <input type="number" class="form-control mt-2 mb-2" placeholder="Enter Marks 1" name="txtm1" required>
                <input type="number" class="form-control mb-2" placeholder="Enter Marks 2" name="txtm2" required>
                <input type="number" class="form-control mb-2" placeholder="Enter Marks 3" name="txtm3" required>
                <input type="submit" class="btn btn-primary w-100" value="Result">
            </form>
        </div>
        <div class="container">
            <table class="table table-striped table-dark text-center">
                <tr>
                    <td>Marks 1 &nbsp; &nbsp;</td>
                    <td>Marks 2 &nbsp; &nbsp;</td>
                    <td>Marks 3 &nbsp; &nbsp;</td>
                    <td>Total &nbsp; &nbsp;</td>
                    <td>Percentage &nbsp; &nbsp;</td>
                    <td>Grade &nbsp; &nbsp;</td>
                    <td>Result</td>
                </tr>
                <tr>
                    <td><?php echo $m1 ?></td>
                    <td><?php echo $m2 ?></td>
                    <td><?php echo $m3 ?></td>
                    <td><?php echo $total ?></td>
                    <td><?php echo $per ?></td>
                    <td><?php echo $grade ?></td>
                    <td><?php echo $result ?></td>
                </tr>
            </table>
        </div>
    </body>
</html>