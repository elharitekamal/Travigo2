<?php
include 'model/connection.php';
class tours extends connect
{

    function insert($ville, $pays, $image, $tmpName)
    {
        $image_filepath = "imgupload/" . $image;
        $sql = "INSERT INTO tours (ville, pays, immage) VALUES('$ville', '$pays', '$image')";
        $result = $this->connect()->query($sql);
        if ($result) {
            move_uploaded_file($tmpName, $image_filepath);
            header('location:dashboard.php');
        } else {
            echo 'error';
        }
    }
    public function afficher(): array
    {
        $sql = "SELECT * FROM tours";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        $data = [];
        if ($numRows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }

        }
        return $data;
    }

    function delete($id)
    {

        $sql = "DELETE FROM tours WHERE id = $id";
        $result = $this->connect()->query($sql);

        // return $result;
    }

    function edit($ville, $pays, $image_Name, $tmpName, $id)
    {
        $image_filepath = "img/" . $image_Name;
        $sql = "UPDATE tours SET ville = '$ville', pays='$pays', immage='$image_Name' WHERE id =$id";

        $result = $this->connect()->query($sql);
        if ($result) {
            move_uploaded_file($tmpName, $image_filepath);
            header('location:dashboard.php');
        } else {
            echo 'error';
        }
    }

}



?>