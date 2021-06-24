<!DOCTYPE html>
<html>
<head>
  
</head>
<body>
  
  <?php
              $connection=mysqli_connect('localhost','root','','abir');

              $query="select * from information";
              $result=mysqli_query($connection,$query);
                  if($result)
                  {
                  if(mysqli_num_rows($result)>0){
                                  echo "<table border='1'>
                                      <tr>
                                          <td>
                                              Username
                                          </td>
                                          <td>
                                              Email
                                          </td>
                                          <td>
                                              Address
                                          </td>
                                          <td>
                                              Web Address
                                          </td>
                                          <td>
                                              Gender
                                          </td>
                                          <td>
                                              Date of Birth
                                          </td>
                                          <td>
                                              Courses
                                          </td>
                                      </tr>
                                      ";
                    while($rpw=mysqli_fetch_array($result))
                    {
                                      echo "<tr>";
                                                  echo "<td>". $row['user_name'] ."</td>";
                                                  echo "<td>". $row['email'] ."</td>";
                                                  echo "<td>". $row['address'] ."</td>";
                                                  echo "<td>". $row['web_address'] ."</td>";
                                                  echo "<td>". $row['gender'] ."</td>";
                                                  echo "<td>". $row['date_of_birth'] ."</td>";
                                                  echo "<td>". $row['num_of_course_enrolled'] ."</td>";

                                      echo "</tr>";
                      }

                                echo "</table>";

                    }
                    }
                                 ?>
</body>
</html>

  

