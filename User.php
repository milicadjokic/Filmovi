<?php
include("Database.php");


class User extends Database
{

    public function addUser($first_name, $last_name, $email)
    {
        $sql = "INSERT INTO users(first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";

        $result = $this->connect()->query($sql);
        if ($result) {
            echo "<script>('You have successfully add new user')</script>";

            header("Location:index.php");
        } else {
            echo "<script>('Failed to add new user')</script>";
        }
    }

    public function getUser($id)
    {
        $sql = "SELECT * FROM users WHERE id='$id'";
        $res = $this->connect()->query($sql);

        $row = mysqli_fetch_array($res);

        return $row;
    }

    public function updateUser($first_name, $last_name, $email, $id)
    {
        $sql = "UPDATE users SET first_name='$first_name', last_name='$last_name', email='$email' WHERE id = '$id'";
        $result = $this->connect()->query($sql);
        if ($result) {
            header("Location:index.php");
        } else {
            echo "Failed to edit new user";
        }
    }

    public function deleteUser($id)
    {
        $sql = "DELETE FROM users WHERE id=$id";

        $result = $this->connect()->query($sql);

        if ($result) {
            header("Location:index.php");
        } else {
            echo "Failed to edit new user";
        }

    }
    public function searchUsers($search)
    {
        $sql = ("SELECT * FROM `users` WHERE CONCAT(`id`, `first_name`, `last_name`, `email`) LIKE '%" . $search . "%'");
        $res = $this->connect()->query($sql);

        $output = "";
        $output .= "
            <table class='table table-bordered table-striped'>
            <tr>
                <th width='10%'>ID</th>
                <th width='20%'>First name</th>
                <th width='10%'>Last name</th>
                <th width='15%'>Email</th>
                <th width='15%'>Films</th>
                <th width='20%'>Action</th>
            </tr>
        ";

        echo "<a href='add_user.php'><button class='btn btn-success my-3'>Add new user</button></a>";

        if (mysqli_num_rows($res) < 1) {
            $output .= "
        <tr>
            <td colspan='5' align='center'>No data</td>    
        </tr>
        ";
        }

        while ($row = mysqli_fetch_array($res)) {

            $output .= "
        
            
            <tr>
              <td>" . $row['id'] . "</td>  
              <td>" . $row['first_name'] . "</td>  
              <td>" . $row['last_name'] . "</td>  
              <td>" . $row['email'] . "</td>
              <td><a href='films.php?id=" . $row['id'] . "'><button id='" . $row['id'] . "' class='btn btn-dark col-md-12'>Films</button></td>
              <td class='col-md-12'>
                <div>
                    <div class='row'>
                        <div class ='col-md-6'>
                        <a href='edit_user.php?id=" . $row['id'] . "'><button id='" . $row['id'] . "' class='btn btn-success col-md-12'>Edit</button>
                        </div></a>      
                    </div> 
                    <div class='row'>
                        <div class ='col-md-6'>
                        <button id='" . $row['id'] . "' class='delete btn btn-danger col-md-12'>Delete</button>
                        </div>    
                    </div>
                </div>
              </td>  
            </tr>
        </form>
        ";
        }
        echo $output;

    }

    public function getAllUsers()
    {
        $sql = "SELECT * FROM users ORDER BY id ASC";
        $res = $this->connect()->query($sql);

        $output = "";
        $output .= "
            <table class='table table-bordered table-striped'>
            <tr>
                <th width='10%'>ID</th>
                <th width='20%'>First name</th>
                <th width='10%'>Last name</th>
                <th width='15%'>Email</th>
                <th width='15%'>Films</th>
                <th width='20%'>Action</th>
            </tr>
        ";

        echo "<a href='add_user.php'><button class='btn btn-success my-3'>Add new user</button></a>";

        if (mysqli_num_rows($res) < 1) {
            $output .= "
        <tr>
            <td colspan='5' align='center'>No data</td>    
        </tr>
        ";
        }

        while ($row = mysqli_fetch_array($res)) {

            $output .= "
        
            
            <tr>
              <td>" . $row['id'] . "</td>  
              <td>" . $row['first_name'] . "</td>  
              <td>" . $row['last_name'] . "</td>  
              <td>" . $row['email'] . "</td>
              <td><a href='films.php?id=" . $row['id'] . "'><button id='" . $row['id'] . "' class='btn btn-dark col-md-12'>Films</button></td>
              <td class='col-md-12'>
                <div>
                    <div class='row'>
                        <div class ='col-md-6'>
                        <a href='edit_user.php?id=" . $row['id'] . "'><button id='" . $row['id'] . "' class='btn btn-success col-md-12'>Edit</button>
                        </div></a>      
                    </div> 
                    <div class='row'>
                        <div class ='col-md-6'>
                        <button id='" . $row['id'] . "' class='delete btn btn-danger col-md-12'>Delete</button>
                        </div>    
                    </div>
                </div>
              </td>  
            </tr>
        </form>
        ";
        }
        echo $output;
    }
}