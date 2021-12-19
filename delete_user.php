<?php
include("User.php");
$id = $_POST['user_id'];
$user = new User();
$row = $user->deleteUser($id);