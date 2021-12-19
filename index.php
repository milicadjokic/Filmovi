<!DOCTYPE html>
<html>

<head>
    <title>Users</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="col-md-12">
        <form action="search.php" method="post">
            <input type='text' name='search'  >
            <input type='submit' name='submit_search'>
        </form>
    </div>

        <div class="result">

        </div>
</div>

<script type="text/javascript" src="jquery-3.6.0.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        load_data();

        function load_data() {
            $.ajax({
                url: "load_data.php",
                method: "POST",
                success: function (data) {
                    $(".result").html(data);

                }
            })
        }
    });

    $(document).on("click", ".delete", function () {
        var user_id = $(this).attr("id");
        var action = "Delete";
        if (confirm("Are you sure you want to delete this?")) {
            $.ajax({
                url: "delete_user.php",
                method: "POST",
                data: {user_id: user_id, action: action},
            })
            window.location.reload();

        }
    })

</script>
</body>
</html>