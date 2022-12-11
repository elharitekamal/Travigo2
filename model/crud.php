<?php
include '../model/connection.php';
class crud extends connect
{

    public function insert($op)
    {
        $ville = $op['ville'];
        $pays = $op['pays'];
        $img = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];
        $folder = "../view/img/" . $img;
        move_uploaded_file($tempname, $folder);
        $conn = $this->connected();
        $sql = "INSERT INTO tours (ville, pays, immage) VALUES('$ville', '$pays', '$img')";
        $result = $conn->query($sql);

        if ($result) {
            header('location:tours.php');
        } else {
            echo 'error';
        }

    }
    public function afficher()
    {
        $conn = $this->connected();
        $sql = "SELECT * FROM tours";
        $all_tours = $conn->query($sql);

        $numRows = $all_tours->num_rows;
        if ($numRows > 0) {
            while ($row = $all_tours->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            echo " no data ";
        }

    }
    public function delete()
    {
        $id = $_GET['delete'];
        $conn = $this->connected();

        if (isset($_GET['delete'])) {
            mysqli_query($conn, "DELETE FROM tours WHERE id = $id");
            header('location:tours.php');

        }

    }

    public function update($op)
    {
        $ville = $op['ville'];
        $pays = $op['pays'];
        $img = $_FILES["image"]["name"];
        $id = $_GET['edit'];
        $tempname = $_FILES["image"]["tmp_name"];
        $folder = "../view/img/" . $img;
        move_uploaded_file($tempname, $folder);
        $conn = $this->connected();
        $sql = "UPDATE tours SET ville ='$ville', pays ='$pays',  immage ='$img' where id = $id";
        $result = $conn->query($sql);

        if ($result) {
            header('location:tours.php');
        } else {
            echo 'error';
        }

    }


}



?>