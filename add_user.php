<?php
include("User.php");

if(isset($_POST['add_user'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];

   $user = new User($first_name, $last_name, $email);

   $user->addUser($first_name, $last_name, $email);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add user</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 jumbotron my-5">
                <a href='index.php'>
                    <button class='btn btn-success my-3'>Home page</button>
                </a>
                <h4 class="text-center my-2">Add new User</h4>

                <form method="post">
                    <label>First name</label>
                    <input type="text" name="first_name" class="form-control" autocomplete="off" required>

                    <label>Last name</label>
                    <input type="text" name="last_name" class="form-control" autocomplete="off" required>

                    <label>Email</label>
                    <input type="text" name="email" class="form-control" autocomplete="off" required>
                    <br>
                    <input  type="submit" name="add_user" value="add user" class="btn btn-success my-2">

                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>