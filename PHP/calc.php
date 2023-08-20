<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php
    if(isset($_POST['txtno1']))
    {
        $no1 = $_REQUEST['txtno1'];
        $no2 = $_REQUEST['txtno2'];
        $total = $no1 + $no2;
        $sub = $no1 - $no2;
        $prod = $no1 * $no2;
        $div = $no1 / $no2;
        $mod = $no1 % $no2;
    }
?>

<html>
    <head>
        <title>Calculation of two numbers with Bootstrap</title>
    </head>
    <body>
        <div class="container">
            <form action="calc.php" method="POST">
                <input type="text" class="form-control mt-2" name="txtno1" placeholder="Enter No. 1">
                <input type="text" class="form-control mt-2" name="txtno2" placeholder="Enter No. 2">
                <input type="submit" class="btn btn-primary w-100 mt-2 mb-2" value="Calculate">
            </form>
        </div>
        <div class="container">
            <div class="card text-center mb-2">
                <div class="h3 text-primary">Total is : 
                    <?php
                        if(isset($total))
                        {
                            echo $total;
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card text-center mb-2">
                <div class="h3 text-primary">Subtraction is : 
                    <?php
                        if(isset($sub))
                        {
                            echo $sub;
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card text-center mb-2">
                <div class="h3 text-primary">Product is : 
                    <?php
                        if(isset($prod))
                        {
                            echo $prod;
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card text-center mb-2">
                <div class="h3 text-primary">Division is : 
                    <?php
                        if(isset($div))
                        {
                            echo $div;
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card text-center mb-2">
                <div class="h3 text-primary">Modulus is : 
                    <?php
                        if(isset($mod))
                        {
                            echo $mod;
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>