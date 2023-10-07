<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
  $id = $_GET['deleteid'];

  $sql = "DELETE FROM `user` WHERE id=$id";

  $result = mysqli_query($con, $sql);

  if($result){
    header("location:display.php");
  } else{
    echo "Error: " . mysqli_error($con);
  }
}
?>