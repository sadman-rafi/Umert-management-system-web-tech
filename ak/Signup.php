<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Signup Page</title>
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

include 'Controller/Validation.php';

?>
			<br></br>
			<div class="container">
			<img src="Picture/jko.jpg" alt="Cinque Terre" width="1000" height="300">
			<div class="center">
			<div style="height:665px;width:700px;border:1px solid;color: brown;margin: auto;">
			<br><h1 style="text-align: center;color: blue;"><u style="color: darkred;">Registration Form</u></h1><br>
			<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
                
                    
                   
        
                <label ><b>Enter Your Name :</b>&nbsp;</label>
                <input type="text" id="name" name="name"  placeholder="Your name" size="10" value="<?php echo $name;?>">
               
                    <?php 
                    if ($nameErr != "") 
                    {
                        echo "* ";
                        echo $nameErr;
                    }
                    ?>
                    <hr>
                    <br></br>
                
                 <label><b>Enter your email :</b>&nbsp; </label>
                <input type="text" id="email" name="email" value="<?php echo $email;?>" placeholder="Your email">
                    <?php if ($emailErr != "") 
                        {
                        echo "*";
                        echo $emailErr;
                    }
                    ?>
                    <hr>
                    <br></br>

                    <label><b>Enter User Name :</b></label>
                     <input type="text" name = "un" value="<?php echo $un;?>"placeholder="Your username">
                         <?php if ($unErr != "") 
                        {
                        echo "*";
                        echo $unErr;
                    }
                    ?>

                       <hr>

                     <br></br>

                    <label><b>Enter Password :</b></label>
                     <input type="password" name = "pass" value="<?php echo $pass;?>" placeholder="Password" >
                     <?php if ($passErr != "") 
                        {
                        echo "*";
                        echo $passErr;
                    }
                    ?>
                    <hr>
                     <br><br /> 

                     <label><b>Confirm Password :</b></label>
                     <input type="password" name = "Cpass" value="<?php echo $Cpass;?>"placeholder="confirm Password">
                     <?php if ($CpassErr != "") 
                        {
                        echo "*";
                        echo $CpassErr;
                    }
                    ?>
                    <hr>

                    <br> <br /> 

                <label><b>Enter your gender :</b>&nbsp;</label>
                <input type="radio" id="gender" name="gender"<?php if (isset($gender) && $gender=="Male") echo "checked";?> value="Male">
                <label for="">Male</label> 

                <input type="radio" id="gender" name="gender"<?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female"> 
                <label for=" ">Female</label> 
                <input type="radio" id="gender" name="gender"<?php if (isset($gender) && $gender=="other") echo "checked";?> value="Other"> 
                <label for="">Other</label> 
                <?php 
               if($genderErr)
               {  
                echo "* ";
                echo $genderErr;

                    }
                ?>
                <hr>
                <br></br>


                    <label><b>Enter Date of Birth:</b>&nbsp;</label>
                    <input type="date" name="dob" value="<?php echo $dob;?>">

                    <?php 
               if($dobErr)
               {  
                echo "* ";
                echo $dobErr;

                    }
                ?>
				<br>
                <br>
                
                <center>
				<input type="submit" value="Submit">  
                <input type="reset" value="Reset">   
                </center> 
            
			<?php
            if (isset($insertion)) 
            {
                echo "<span style='color:brown'><b>" . $insertion . "</b></span><br>";
            }
            ?>
                <hr>

            </form>
			<br>
			</div>
			</div>
			</div>
			</div>
			

</body>
</html>