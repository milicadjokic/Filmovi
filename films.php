<?php
include("Film.php");

$id = $_GET['id'];
$films = new Film();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Films</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="col-md-12">
        <a href='add_film.php?id=<?php echo $id ?>'>
            <button class='btn btn-success my-3'>Add film</button>
        </a>
        <a href='index.php'>
            <button class='btn btn-success my-3'>Home page</button>
        </a>
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">Film name</th>
                <th scope="col">Film genre</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                <?php $films = $films->userFilms($id); ?>
            </tbody>
        </table>
    </div>
</div>

