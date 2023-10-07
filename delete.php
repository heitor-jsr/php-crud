<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
  $id = $_GET['deleteid'];

  // Use proper concatenation or interpolation to construct your SQL query
  $sql = "DELETE FROM `user` WHERE id=$id";

  // Perform the SQL query using the database connection
  $result = mysqli_query($con, $sql);

  if($result){
    echo "Deleted successful";
  } else{
    echo "Error: " . mysqli_error($con);
  }
}
?>