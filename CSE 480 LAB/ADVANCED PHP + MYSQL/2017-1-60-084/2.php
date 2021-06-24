<?php
    session_start();
    $connection=mysqli_connect('localhost','root','','abir');
    if(isset($_POST['Register']))
    {
    $user_name=$_POST['user_name'];
      $password=$_POST['password'];
  $email=$_POST['email'];
  $address=$_POST['address'];
      $web_address=$_POST['web_address'];
      $date_of_birth=$_POST['date_of_birth'];
  $gender=$_POST['gender'];
  $num_of_course_enrolled=$_POST['num_of_course_enrolled'];
        $insert= "insert into information values('$user_name','$password','$email','$address','$web_address',
        '$date_of_birth','$gender','$num_of_course_enrolled')";
        if(mysqli_query($connection, $insert))
          {
            echo "SUCCESS!!!!!!!!!!";

          }
      else
      {
        echo "UNSUCCESS!!!!!";
      }
    }
    else{
      echo "Error";
    }
?>