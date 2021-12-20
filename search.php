<?php
include('User.php');
$search = $_POST['search'];
$users = new User();



?>
<head>
    <title>Users</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<a href='index.php'>
    <button class='btn btn-success my-3'>Home page</button>
</a>
<?php echo $users->searchUsers($search) ?>
</body>

