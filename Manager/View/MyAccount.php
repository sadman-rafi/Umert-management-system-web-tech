
<?php
session_start();
include ("../Control/MyAccountCheck.php");

?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../CSS/MyAccountDesign.css">
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data">

    <table id="table2" border="0"  align="center" cellspacing="0" cellpadding="15" > 
    <tr height="50px" >
            <td align="center">
            <font size="5" face="Lucida Console" color=blue ><strong> My Account
           </td>
        </tr>
    <tr height="50px" >
            <td>User Name:
            <font color="black">
            <?php
           echo $fname." ".$lname;
           ?></font>
           </td>
        </tr>  
            <tr height="50px" >
            <td>Age:
            <font color="black">
            <?php
           echo $age;
           ?></font>
            </td></tr><tr height="50px" >
            <td>Gender:
            <font color="black">
            <?php
           echo $gen;
           ?>
           </font>
            </td>
         </tr>
         <tr height="50px" >
            <td>Education:
            <font color="black">
            <?php
           echo $edu;
           ?></font></td></tr><tr height="50px" >
            <td>Experience:
            <font color="black">
            <?php
           echo $exp." Years";
           ?></font>
            </td>
        </tr>
         <tr height="50px" >
            <td>Contact No.:
            <font color="black">
            <?php
           echo $cont;
           ?></font></td></tr><tr height="50px" >
            <td>Email:
            <font color="black">
            <?php
           echo $email;
           ?></font>
            </td>
        </tr>
        <tr height="50px" >
            <td>Present Address:
            <font color="black">
            <?php
           echo $preadd;
           ?></font></td>
           </tr><tr height="50px" >
            <td>Permanent Address:
            <font color="black">
            <?php
           echo $peradd;
           ?></font>
            </td>
        </tr>
        <tr height="50px" >
            <td>Password:
            <font color="black">
            <?php
           echo $pass;
           ?></font>
           </td>
           
        </tr>  
        <tr height="50px" ><td>    
        <input type="submit" class="button" name="back" value="Go Back" bgcolor="#48d1cc">
          </td>
        
        </tr>
        </table>
<td></tr></table>
</td></tr></table> 
</form>



</body>
</html>