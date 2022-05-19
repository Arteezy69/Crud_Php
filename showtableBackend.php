
<?php
  include("connection.php");


  $sql = "SELECT * FROM table_res";
  $result = $conn->query($sql);
          
  if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) 
  {
      //table & Modal Buttons
      //Button trigger modal || id=#updatemodal  

 echo "<tr>
    
        <td>".$row['id']."</td>
        <td>".$row['firstname']."</td>
        <td>".$row['lastname']."</td>
        <td>".$row['email']."</td>
        <td>".$row['password']."</td>
        <td>
        
        
         <a class='btn btn-dark btn-sm'data-toggle='modal' data-target='#updateModal' name='update' href='updateForm.php?=id=".$row['id']."'>  Update</a>
         <a class='btn btn-danger btn-sm' name='delete' href='delete.php?id=".$row['id']."'>  Delete</a>

       </td>
  
    </tr>";
    
       }
} else {
   echo "0 results";
     }
  $conn->close();




  /*
   --To add button in the table.  use single quotes only--

   <a class='btn btn-primary btn-sm' href='#'>  Update</a>
   <a class='btn btn-success btn-sm' href='#'>Delete</a>

  --To add MODAL button in the table.  use single quotes only--
   <a class='btn btn-primary btn-sm'  data-toggle='modal' data-target='#exampleModal' href='#'>  Update</a>
   
   
   
   */
?>

