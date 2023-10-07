<?php
include 'connect.php'; // Make sure to include the file with your database connection code

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];

  // Use proper concatenation or interpolation to construct your SQL query
  $sql = "INSERT INTO `user` (name, email, mobile, password) VALUES ('$name', '$email', '$mobile', '$password')";

  // Perform the SQL query using the database connection
  if ($con->query($sql) === TRUE) {
    // echo "Record inserted successfully";
    header("location:display.php");
  } else {
    echo "Error: " . $con->error;
  }
}
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>CRUD</title>
  </head>
  <body>
    <div class='container my-5'>
    <form method='post'>
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder='Enter your name' name='name' autocomplete='of'>
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" placeholder='Enter your email' name='email' autocomplete='of'>
      </div>
      <div class="mb-3">
        <label class="form-label">Mobile</label>
        <input type="text" class="form-control" placeholder='Enter your mobile number' name='mobile' autocomplete='of'>
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" placeholder='Enter your password' name='password' autocomplete='of'>
      </div>

      <button type="submit" class="btn btn-primary" name='submit'>Submit</button>
    </form>
    </div>
  </body>
</html>
