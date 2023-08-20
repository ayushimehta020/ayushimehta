<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <div class="container mt-2">
        <form action="check-form.php" class="form-control bg-dark" method="POST">
            <input type="text" name="firstnm" class="form-control mt-5 w-75 mx-auto" placeholder="Enter Your First Name"><br>
            <input type="text" name="lastnm" class="form-control mx-auto w-75" placeholder="Enter Your Last Name"><br>
            <input type="email" name="email" class="form-control mx-auto w-75" placeholder="Enter Your Email Address"><br>
            <input type="number" name="phnum" class="form-control mx-auto w-75" placeholder="Enter Your Mobile Number"><br>
            <select name="city" class="form-select mx-auto w-75">
                <option>Rajkot</option>
                <option>Junagadh</option>
                <option>Surat</option>
            </select><br>
            <div class="container text-center">
                <input type="submit" value="Check" class="btn mx-auto w-75 btn-primary mb-5">
            </div>
        </form>
    </div>
</body>
</html>