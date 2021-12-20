<?php
include("Film.php");
$id = $_GET['id'];
$film = new Film();
$row = $film->deleteFilm($id);
