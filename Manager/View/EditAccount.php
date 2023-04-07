
<?php
session_start();
include "../Control/EditAccountCheck.php";

?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../CSS/EditAccountDesign.css">
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">
<?php echo "<br>" ?>
<table id="table1" border="1e90f"  align="center" cellspacing="2" cellpadding="10" >
<tr height="40px" bgcolor="#1e90f"><td align="right">
<input type="submit" class="button" name="back" value="Go Back" bgcolor="#70d1cc">
</td></tr>
<tr><td>  

      <tr height="90px" align="left"><td >
    <font  color="#bc4154" size="6" face="monospace">
    <strong>Update Profile
</font></td></tr>
    <tr height="50px" >
            <td>First Name:
            <br>
            <input type="text" id="fname" name="fname" size="30" value="<?php echo $fname;?>">
            
           </td>
            <td>Last Name:
            <br>
            <input type="text" id="lname"name="lname"size="30" value="<?php echo $lname;?>">
            
           </td>
        </tr>  
        </tr>
            <tr height="50px" >
            <td>Age:<br>
            <input type="number"id="age" name="age"maxlength="3" size="30" value="<?php echo $age;?>">
            
            </td>
            <td>Gender:
            <br>
            <input type="text"  id="gen"name="gen" size="30" value="<?php echo $gen;?>">
            
           </td>
         </tr>
         <tr height="50px" >
            <td>Education:<br>
            <input type="text" name="edu" id="edu"maxlength="12" size="30" value="<?php echo $edu;?>">
            </td>
            <td>Experience (If have):<br>
            <input type="number" name="exp" id="exp"maxlength="40" size="30" value="<?php echo $exp;?>">
           
            </td>
        </tr>
         <tr height="50px" >
            <td>Contact No.:<br>
            <input type="number" name="cont" id="cont"maxlength="12" size="30" value="<?php echo $cont;?>">
          </td>
            <td>Email:<br>
            <input type="text" name="email" id="email" maxlength="40" size="30" value="<?php echo $email;?>">
            
            </td>
        </tr>
        <tr height="50px" >
            <td>Present Address:<br>
            <textarea type="text" class="text" id="preadd"name="preadd" size="30"><?=$preadd?></textarea>
            </td>
            <td>Permanent Address:<br>
            <textarea type="text" name="peradd" id="peradd" class="text"  size="30"><?=$peradd?></textarea>
           
            </td>
        </tr>
        <tr height="50px" >
            <td>Password:
            <br>
            <input type="password" name="pass" id="pass" maxlength="20" size="30" value="<?php echo $pass;?>">
            <br>
           </td>
        </tr> 
        <tr height="50px" ><td>    
        <input type="submit" class="button" name="update" value="Update">
          </td>
        
    </tr> 
        </table>
<td></tr></table>
</form>
</body>
</html>