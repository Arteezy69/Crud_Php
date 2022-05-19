<?php
include("connection.php");

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    // sql to delete a record

    $sql = "DELETE FROM table_res WHERE id=$id";

    if ($conn->query($sql) === TRUE) {

    echo "Record deleted successfully";
    header("location:index.php");

    } else {
    echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}



?>