<?php
include("Film.php");
$id = $_GET['id'];

if (isset($_POST['add_film'])) {
    $film_name = $_POST['film_name'];
    $film_genre = $_POST['film_genre'];
    $user_id = $id;
    $film = new Film();

    $film->addFilm($film_name, $film_genre, $user_id);
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
                <h4 class="text-center my-2">Add user film</h4>

                <form method="post">
                    <label>Film name</label>
                    <input type="text" name="film_name" class="form-control" autocomplete="off" required>

                    <label>Film genre</label>
                    <input type="text" name="film_genre" class="form-control" autocomplete="off" required>

                    <br>
                    <input type="submit" name="add_film" value="Add film" class="btn btn-success my-2">
                    <a href='index.php'>
                        <button class='btn btn-success my-3'>Home page</button>
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>