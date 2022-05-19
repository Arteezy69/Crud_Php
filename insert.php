<?php
include("connection.php");

if(isset($_POST['save']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql = "INSERT INTO table_res (firstname, lastname, email, password)
    VALUES ('$fname', '$lname', '$email','$password')";

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      header("location:index.php");
      
      
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}



?>