<?php
include_once 'd08_contact.php';

$error = "";
if (isset($_GET["id"])) {
    //neu bam link delete
    $r = Contact::delete($_GET["id"]);

    $error = $r ? "Delete Succeeded !" : "Delete Failed !";
    $error = "<h4 style='color:green'> $error </h4>";
}

$ds=[];
if(isset($_GET["submit"])){
    $ds = Contact::getByName($_GET["search"]);
}
else{
    $ds = Contact::get();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Contact List</h2>
        <hr>

        <div>
            <a href="d08_creat.php">Insert New Contact</a>
        </div>

        <div>
            <form method="GET">
                <div class="form-group">
                    <label for="">Input Name </label>
                    <input type="text" id="search" name="search">

                    <button type="submit" class="btn btn-danger" name="submit" value="submit">Search</button>
                    <button type="reset" class="btn btn-success">Reset</button>
                </div>
            </form>

        </div>

        <div>
            <?= isset($error) ? $error : "" ?>
        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>zipcode</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($ds as $item) {  ?>
                    <tr>
                        <td> <?= $item->id ?> </td>
                        <td> <?= $item->email ?> </td>
                        <td> <?= $item->zipcode ?> </td>
                        <td> <?= $item->name ?> </td>
                        <td>
                            <a href="">View</a> |
                            <a href="d08_edit.php?id=<?= $item->id ?>">Edit</a> |
                            <a href="d08_index.php?id=<?= $item->id ?>" onclick="return confirm('Are you sure ?')">Delete</a>
                        </td>
                    </tr>

                <?php } ?>
            </tbody>

        </table>
    </div>
</body>

</html>