<?php
include("connection.php");


if(isset($_POST['update']))
{
  $id=$_POST['id'];
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $password=$_POST['password'];


  $sql = "UPDATE table_res SET firstname='$fname', lastname='$lname', email='$email',  password='$password' WHERE id='$id'";

  if ($conn->query($sql) === TRUE) {
    
    echo "Record updated successfully";
    header("location:index.php");

    
  } else {
    echo "Error updating record: " . $conn->error;
  }
  
  $conn->close();
  


}




?>