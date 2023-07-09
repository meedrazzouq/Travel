<?php
include 'conx.php';

if (isset($_POST['submit'])) {
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $passw = $_POST['password'];

   // Check if the email already exists in the database
   $checkQuery = "SELECT * FROM users WHERE email = ?";
   $checkStatement = mysqli_prepare($connection, $checkQuery);
   mysqli_stmt_bind_param($checkStatement, "s", $email);
   mysqli_stmt_execute($checkStatement);
   $result = mysqli_stmt_get_result($checkStatement);
   
   if (mysqli_num_rows($result) > 0) {
      $message = "Email already exists. Please enter a different email.";
   } else {
      // Email does not exist, proceed with registration
      $insertQuery = "INSERT INTO users (fname, lname, email, password) VALUES (?, ?, ?, ?)";
      $insertStatement = mysqli_prepare($connection, $insertQuery);

      if ($insertStatement) {
         mysqli_stmt_bind_param($insertStatement, "ssss", $fname, $lname, $email, $passw);

         if (mysqli_stmt_execute($insertStatement)) {
            echo "Registration successful";
         } else {
            echo "Error executing statement: " . mysqli_stmt_error($insertStatement);
         }

         mysqli_stmt_close($insertStatement);
      } else {
         echo "Error preparing statement: " . mysqli_error($connection);
      }
   }
   header("location:home.php");

   mysqli_stmt_close($checkStatement);
}
?>