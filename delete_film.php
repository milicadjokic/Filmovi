<?php
include("Film.php");
$id = $_GET['id'];
$user = new Film();
$row = $user->deleteFilm($id);
