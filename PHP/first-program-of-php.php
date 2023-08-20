<?php
    echo "Hello World!";
    echo "<br>";
    echo "Hello";
?>
<html>
    <head>
        <title>FIRST PROGRAM OF PHP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    </head>
    <body>
        <div class = "container-fluid mt-1">
            <div class = "card w-50 mx-auto bg-dark text-light" width="50%">
                <div class="header">
                    <img src="83-836353_orange-username-icon.png" class="mx-auto d-block rounded-circle mt-3" height="100px" width="150px">
                </div>                        
                <form method="get" action="./submit.html">
                    <div class="card-body">
                        <label>Enter Your Name</label>
                        <input type="text" class="form-control mt-2" placeholder="Name" required>
                        <label class="mt-2">Enter Your Email</label>
                        <input type="email" class="form-control mt-2" placeholder="Email" required>
                        <label class="mt-2">Enter Your Password</label>
                        <input type="password" class="form-control mt-2" placeholder="Password" id="txtpass" required>
                        <label class="mt-2">Re Type Your Password</label>
                        <input type="password" class="form-control mt-2" placeholder="Re Type Password" id="txtrepass" onkeyup="pass()" required>
                        <label class="mt-2">Enter Mobile Number</label>
                        <input type="number" class="form-control mt-2" placeholder="Mobile Number" required>
                        <label class="mt-2">Select Your City</label>
                        <select class="mt-2">
                            <option>India</option>
                            <option>America</option>
                            <option>United Kingdom</option>
                            <option>Japan</option>
                        </select><br>
                        <label class="mt-2">Enter Captcha Code</label>
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control w-100 mt-2" id="txtcode" disabled>
                            </div>
                            <div class="col">
                                <input type="number" class="form-control w-100 mt-2" id="txtcode1" onkeyup="verifycaptcha()" required>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <button type="submit" href="" class="btn btn-primary w-100">Submit</a>
                            </div>
                            <div class="col">
                                <a href="" class="btn btn-warning w-100">Clear</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
    <script>
        function pass()
        {
            var c = document.getElementById("txtrepass");
            var password = document.getElementById("txtpass").value;
            var repassword = document.getElementById("txtrepass").value;
            if(password != repassword)
            {
                c.style.color = "red";
            }
            else
            {
                c.style.color = "green";
            }
        }

        var a = Math.round(Math.random()*1000000);
        document.getElementById("txtcode").value = a;
        function verifycaptcha()
        {
            var b = document.getElementById("txtcode1").value;
            var c = document.getElementById("txtcode1");
            if(a != b)
            {
                c.style.color = "red";
            }
            else
            {
                c.style.color = "green";
            }
        }
    </script>
</html>