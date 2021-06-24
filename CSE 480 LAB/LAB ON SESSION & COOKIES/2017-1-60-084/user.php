<?php
    include "setup.php";
    session_start();
    if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
      $email = $_SESSION['email'];
    }else{
		header("Location: start.php");
    }
  ?>

 <h3>Welcome <?php echo $email; ?></h3>
 <br>
 <a href="logout.php">logout</a>
