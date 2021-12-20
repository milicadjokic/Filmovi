<?php
include("Database.php");

class Film extends Database
{
    public function addFilm($film_name, $film_genre, $user_id)
    {
        $sql = "INSERT INTO films(film_name, film_genre, user_id ) VALUES ('$film_name', '$film_genre', '$user_id')";

        $result = $this->connect()->query($sql);
        if ($result) {
            echo "<script>('You have successfully add new film')</script>";

            header("Location:films.php?id=$user_id");
        } else {
            echo "<script>('Failed to add new film')</script>";
        }
    }

    public function userFilms($id)
    {
        $sql = "SELECT * FROM films WHERE user_id='$id'";
        $res = $this->connect()->query($sql);

        $output = "";
        while ($row = mysqli_fetch_array($res)) {
            $output .= "
        <tr>
          <td>" . $row['film_name'] . "</td>  
          <td>" . $row['film_genre'] . "</td>  
          <td><a href='delete_film.php?id=" . $row['id'] . "'><button class='btn btn-danger col-md-12'>Delete</button></a></td>  
        </tr>";
        }

        echo $output;
    }

    public function   deleteFilm($id)
    {
        $sql = "DELETE FROM films WHERE id=$id";

        $result = $this->connect()->query($sql);

        if ($result) {
            header("Location:index.php");
        } else {
            echo "Failed to delete film";
        }

    }

}