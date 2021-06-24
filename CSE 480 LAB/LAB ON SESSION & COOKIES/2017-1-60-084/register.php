<?php
    include "setup.php";
    session_start();

    if (isset($_POST['register'])){
      if(isset($_POST['email']) && !empty($_POST['email'])){
        $check_email = $_POST['email'];
        $sql = "SELECT email FROM user WHERE email = '$check_email'";
        $result = mysqli_query($connection, $sql);
        if(mysqli_num_rows($result)>0){
          echo "<p>Sorry!!! This is an existing email</p>";
        }else{
          $email = $_POST['email'];
        }
    }else{
        echo "<p>Enter email.</p>";
      }

    if(isset($_POST['password']) && !empty($_POST['password'])){
      $pass = $_POST['password'];
    }else{
      echo "<p>Enter pass.</p>";
    }
    if (isset($email) && isset($password)){
      $sql = "INSERT INTO user(email,password) VALUES ('$email', '$password')";
      if(mysqli_query($connection, $sql)){
        header("Location: start.php");
      }else{
        echo "<p>Data not inserted</p>";
      }
    }
  }
 ?>

        <h3>SignUp</h3>
        <form method="post" >

            <label for="email">Email address:</label>
            <input type="email" name="email" required placeholder="Enter Email" id="email">
            <br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" required placeholder="Enter Password" id="password">
            <br><br>

          <input type="submit" name="register" value="SignUp">
          <br>
        </form>
