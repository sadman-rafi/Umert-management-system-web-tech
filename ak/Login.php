<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Form</title>
	<link rel="stylesheet" href="styles.css">
 
</head>
<body style="background-color:#add8e6;">

<navbar class="menu-bar" style="float: right;">
          <span>
         <a href="Homepage.php" style="color:indianred;" > Home </a>
          <span>&nbsp;|&nbsp;</span>
         <span>&nbsp;</span>
         <a href="Login.php" style="color:indianred;" class="option">Login</a>
         <span>&nbsp;|&nbsp;</span>
         <span>&nbsp;</span>
        <a href="Signup.php" style="color:indianred;" class="option">Signup</a>
</navbar>

<?php

include "Controller/Loginsession.php";

?>
                   <br></br>

                    <div class="container">
					<img src="Picture/jko.jpg" alt="Cinque Terre" width="1000" height="300">
					<div class="center">
					<div style="height:500px;width:440px;border:1px solid;color: brown;margin: auto;">
					<br><h1 style="text-align: center;color: blue;"><u style="color: darkred;">Login Form</u></h1><br>
					
                      <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
         


                          <label><b>User Name</b></label>
                     <input type="text" name = "un" placeholder="Username"  
                     value="<?php if(isset($_COOKIE['user'])) {echo $_COOKIE['cpass']; } ?>">


                         <?php if ($unErr != "") 
                        {
                        echo "*";
                        echo $unErr;
                    }
                    ?>
                          <br></br>

                     

                     <label><b>Enter Password</b></label>
                     <input type="password" name = "password"  id="pass"  
                      value="<?php if(isset($_COOKIE['cpass'])) {echo $_COOKIE['cpass'];} ?>" >
                      
                     <?php if ($passErr != "") 
                        {
                        echo "*";
                        echo $passErr;
                    }
                    ?>
                    <br>

                    <script>
            function myFunction() 
            {
            var y = document.getElementById("pass");
            if (y.type === "password")
             {
            y.type = "text";
            } 
            else 
            {
            y.type = "password";
            }

            }

           </script>
                    <input type="checkbox" onclick="myFunction()">
                    <label> Show Password</label>  
                    <hr>

                      <input type="submit" value="Submit">
                      <input type="reset" value="Reset">  
                      <br>
                      <br>
                 <a href="Resetpassword.php">Forgot password?</a>
                 <br>
                 <p>New? Signup-><a href="Signup.php">Signup</a></p>

                </form>
				<div style="height:60px;width:438px;border:1px solid;color: black;margin: auto;">
				<p> <b>Date: <?php echo date("d/m/Y") ; ?></b></p>
				</div>
				</div>
				</div>
				</div>

</body>
</html>