<?php
include_once 'd08_contact.php';

if(isset($_POST['submit'])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $zipcode = $_POST["zipcode"];

    $newContact = new Contact(null, $name, $email, $zipcode);
    $r = Contact::insert($newContact);

    if($r){
        header("location:d08_index.php");
        exit();
    }
    
    echo "<h4 style='color:green'> Insert Failed ! </h4> ";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Create New Contact</h2>
        <hr>

        <div class="row">
            <div class="col-md-6">
                <form method="POST">
                    <legend>Input detailed information</legend>

                    <div class="form-group">
                        <label for="">email</label>
                        <input type="email" class="form-control" id="email" name="email" value="php-beginner@gmail.com" placeholder="Input email" required>
                    </div>

                    <div class="form-group">
                        <label for="">name</label>
                        <input type="text" class="form-control" id="name" name="name" value="mr. Siro" placeholder="Input name" required maxlength="30">
                    </div>

                    <div class="form-group">
                        <label for="">zipcode</label>
                        <input type="number" class="form-control" id="zipcode" name="zipcode" value="70000" placeholder="Input zipcode" required min="30" max="100000">
                    </div>

                    <button type="submit" class="btn btn-danger" name="submit">Submit</button>
                    <button type="reset" class="btn btn-success">Reset</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>