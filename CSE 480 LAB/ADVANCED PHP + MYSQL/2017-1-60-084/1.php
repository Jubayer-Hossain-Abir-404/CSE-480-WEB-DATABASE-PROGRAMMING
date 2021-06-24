
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>

<body>
  <header>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <table>
      <tr>
        <td>
          Username  :
        </td>
        <td>
          <input type="text" placeholder="Username" name="user_name">
        </td>
      </tr>
      <tr>
          <td>
            Password :
          </td>
          <td>
            <input type="password" placeholder="Password"name="password" required>
          </td>
        </tr>
      <tr>
        <td>
          Email  :
        </td>
        <td>
          <input type="email" placeholder="Email" name="email" required>
        </td>
      </tr>

      <tr>
        <td>
          Address  :
        </td>
        <td>
          <input type="text" placeholder="Address" name="address" required>
        </td>
      </tr>

       <tr>
        <td>
          Web Address  :
        </td>
        <td>
          <input type="text" placeholder="Web Address" name="web_address" required>
        </td>
      </tr>

      <tr>
        <td>
          Date Of Birth  :
        </td>
        <td>
          <input type="text" placeholder="Date Of Birth" name="date_of_birth" required>
        </td>
      </tr>

      <tr>
        <td>
          Gender  :
        </td>
        <td>
          <input type="radio" name="gender" value="male"> Male
              <input type="radio" name="gender" value="female" > Female
        </td>
      </tr>

      <tr>
        <td>
          Number of course enrolled  :
        </td>
        <td>
          <input type="text" placeholder="Number of course enrolled" name="num_of_course_enrolled" required>
        </td>
      </tr>


      
        <td>
          <input type="submit" value="Register" name="Register">
        </td>
      </tr>
    </table>
  </form>

  <form action="4.php" method="post">
            <label for="searchuser">Search User:
              <input type="text" name="searchuser" placeholder="Search User">
              <input type="submit" name="search" value="Search">
            </label>
          </form>




</body>
</html>

<?php
    session_start();
    $connection=mysqli_connect('localhost','root','','abir');

    
    if(isset($_POST['Register']))
    {
      $c=0;
      $user_name=$_POST['user_name'];
      $password=$_POST['password'];
  $email=$_POST['email'];
  $address=$_POST['address'];
      $web_address=$_POST['web_address'];
      $date_of_birth=$_POST['date_of_birth'];
  $gender=$_POST['gender'];
  $num_of_course_enrolled=$_POST['num_of_course_enrolled'];

  
        if(strlen($_POST["user_name"])<5 or strlen($_POST["user_name"])>20)
        {
          echo "Username Should not be lower than 5 characters or Exceed 20 characters ";
          $c=1;
        }
        $password=test_input($_POST["password"]);
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        if(!$uppercase || !$lowercase || !$number)
        {
          echo "Your Password Should contain a Number, an Uppercase character, a Lowercase Character";
          $c=1;
        }
        $email= test_input($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
          echo "Email is not Valid. Type a valid email";
          $c=1;
        }
        $address= test_input($_POST["address"]);
        $web_address= test_input($_POST["web_address"]);
        $date_of_birth= test_input($_POST["date_of_birth"]);
        $gender= test_input($_POST["gender"]);
        $num_of_course_enrolled= test_input($_POST["num_of_course_enrolled"]);
        if((is_int($num_of_course_enrolled)) && (int)$num_of_course_enrolled > 0 )
        {
          echo "Typed value is not positive integer";
          $c=1;
        }
        if($c==0){
          echo "It works";
          //echo"<a href=http://localhost:8010/LAB TASK_F/2.php?user_name=$user_name>Click On this link to insert</a>";
          //header('location:2.php');
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
        //echo "It works";

      }

    function test_input($data)
    {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
    mysqli_close($connection);
    }
?>