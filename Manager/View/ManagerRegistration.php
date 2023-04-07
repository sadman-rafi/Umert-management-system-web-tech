
<?php
//session_start();
include "../Control/Manager_Reg_Verify.php";

?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../CSS/ManagerRegDesign.css">
</head>
<body>
  
<form action="" method="post" enctype="multipart/form-data" onsubmit="return regcheck()">        

<table id="table3" align="center" cellspacing="0" cellpadding="8">
<tr  height="50px"><td>
<font size="5" face="Arial">
    <strong>Create Account
    </font>
    <br>
    </td></tr>
    <tr height="50px" >
            <td>First Name:
            <br>
            <input type="text" placeholder="Enter First Name" id="fname" name="fname" onkeyup="checkname()" size="30" >
            <font color="red">
            <td>
                <p id="nameerror"></p>
            </td>   
            <?php
           echo $fnameerr;
           ?></font>
           </td>
            <td>Last Name:
            <br>
            <input type="text" placeholder="Enter Last Name" id="lname" name="lname" onkeyup="checklname()" size="30" >
            <font color="red">
            <td>
                <p id="lnameerror"></p>
            </td> 
            <?php
           echo $lnameerr;
           ?></font>
           </td>
        </tr>  
        </tr>
            <tr height="50px" >
            <td>Age:<br>
            <input type="number" placeholder="Enter Age"name="age" id="age" onkeyup="agecheck()" maxlength="3"  size="30" >
            <font color="red">
            <td>
                <p id="ageerror"></p>
            </td>
            <?php
           echo $ageerr;
           ?></font>
            </td>
            <td>Gender:
                <br>
            <input type="radio" value="Male" id="gen"name="gen">Male
            <input type="radio" value="Female" id="gen" name="gen">Female
            <input type="radio" value="Others" id="gen"name="gen">Others
            <font color="red">
            <?php
           echo $generr;
           ?>
           </font>
            </td>
         </tr>
         <tr height="50px" >
            <td>Education:<br>
            <input type="text" placeholder="Enter education level"name="edu" id="edu" maxlength="12" size="30" >
            <font color="red">
            <?php
           echo $eduerr;
           ?></font></td>
            <td>Experience (If have):<br>
            <input type="number" name="exp" placeholder="Enter experience years" id="exp" maxlength="40" size="30" >
            <font color="red">
            <?php
           echo $experr;
           ?></font>
            </td>
        </tr>
         <tr height="50px" >
            <td>Contact No.:<br>
            <input type="number" placeholder="Enter Contact Number"name="cont" id="cont" maxlength="12" size="30" >
            <font color="red">
            <?php
           echo $conerr;
           ?></font></td>
            <td>Email:<br>
            <input type="text" name="email" placeholder="Enter Email Address" id="email" maxlength="40" size="30" >
            <font color="red">
            <?php
           echo $emerr;
           ?></font>
            </td>
        </tr>
        <tr height="50px" >
            <td>Present Address:<br>
            <textarea type="text" class="text"placeholder="Enter Present Address"name="preadd" id="preadd"size="40" ></textarea>
            <font color="red">
            <?php
           echo $preadd;
           ?></font></td>
            <td>Permanent Address:<br>
            <textarea type="text" name="peradd" class="text" placeholder="Enter Permanent Address" id="peradd" size="30" ></textarea>
            <font color="red">
            <?php
           echo $peradd;
           ?></font>
            </td>
        </tr>
        <tr height="50px" >
            <td>Password:
            <br>
            <input type="password" placeholder="Enter Password"name="pass" id="pass" onkeyup="passcheck()" maxlength="20" size="30">
            <br>
            <font color="red">
            <td>
                <p id="passvalue"></p>
            </td>
            <?php
           echo $passerr;
           ?></font>
           </td>
           <td>Confirm Password:
            <br>
            <input type="password" name="conpass" placeholder="Confirm Password" id="conpass"maxlength="20" size="30">
            <br>
            <font color="red">
            <?php
           echo $conpasserr;
           ?></font>
           </td>
           
        </tr>  
        <tr height="50px" ><td>    
        <input type="submit" class="button" name="submit" value="Sign Up" bgcolor="#48d1cc">
        <input type="reset" class="button" value="Reset">
          </td>
        
        </tr>
        </tr>  
        <tr height="50px" >   
        <td> <font color="#000000" size="3" face="Arial">
            Already have an account? Log In here...<a href="LogIn.php">Log In</a>   
           </font>
            </td>
        
        </tr></table>
<td></tr></table>
</td></tr></table> 
</form>


<script type="text/JavaScript" src="../JS/Main.js"></script>
</body>
</html>