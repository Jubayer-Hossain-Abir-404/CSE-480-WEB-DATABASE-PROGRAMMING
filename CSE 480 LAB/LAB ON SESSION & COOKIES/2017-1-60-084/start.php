<?php
    include "setup.php";
    session_start();

    if (isset($_POST['login'])){
      if(isset($_POST['email']) && !empty($_POST['email'])){
        $email = $_POST['email'];
      }else{
        echo "<p>Enter email</p>";
      }
      if(isset($_POST['password']) && !empty($_POST['password'])){
        $password = $_POST['password'];
      }else{
        echo "<p>Enter password</p>";
      }
      if(isset($email) && isset($password)){
        	$sql = "SELECT * FROM user WHERE password='$password' AND email='$email'";
        	$result = mysqli_query($connection,$sql);
        	if(mysqli_num_rows($result)>0){
				while($row = mysqli_fetch_assoc($result)){
          			if(isset($_POST['remember_me'])){
            			setcookie('email', $email, time()+3600);
            			setcookie('password', $password, time()+3600);
           			}
					$_SESSION['email'] = $row['email'];
					header('Location: user.php');
				}
        	}else{
          		echo "<p>No data</p>";
        	}

    	}
  	}
 ?>

       	<h2>LogIn Page</h3>
        <form method="post" >

            <label for="email">Email address:</label>
            <input type="email" name="email" required placeholder="Enter Email" id="email">
            <br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" required placeholder="Enter Password" id="password">
            <br><br>
            <label >
              <input type="checkbox" name="remember_me"> Remember Me
            </label>

          <input type="submit" name="login" value="Submit">
          <br>
          <a href="register.php">SignUp</a>
        </form>

        <?php
        	if (isset($_COOKIE['email']) and isset($_COOKIE['password'])) {
          		$email = $_COOKIE['email'];
          		$password = $_COOKIE['password'];
          		echo "<script>document.getElementById('email').value = '$email';
                document.getElementById('password').value = '$password';</script>";
        	}
        ?>
