
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/loginstyle.css">
  <title>Login Page</title>
</head>
<body>
  <center>
  <h3>Login Here</h3>
  <form action="" method="post">
      <table>
        <tr>
          <td><p>Cashier Id:</p></td>
          <td><input type="text" class="cid" name="cid" placeholder="Enter Cashier Id Here" ></td>
        </tr>
        <tr>
          <td><p>Password:</p></td>
          <td><input type="password" class="password" name="pass" placeholder="Enter Password Here"></td>
        </tr>
        
        <tr>
           <td><button name="submit" id="submit">Login</button></td>
           <td><p>Not yet a Member? <a href="registration.php">Register</a></p></td>
        </tr>
      </table>
  </form>
  
  </center>

 <div class="myimg" >
  <center>
    <img src="../img/work.png">
  </center>
   
 </div>


   <?php

    include('../controller/logincontroller.php');

     ?>





 

</body>
</html>