
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../CSS/SuccessDesign.css">
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data">

    <table id="table2" border="0"  align="center" cellspacing="0" cellpadding="15" > 
    <tr height="50px" >
            <td align="center">
            <font size="5" face="Lucida Console" color=blue ><strong> Successfully Signed Up!
           </td>
        </tr>
    <tr height="50px" >
            <td>Your Manager ID is:
            <font color="black">
            <?php
            echo $_GET['valid'];
           ?></font>
           </td>
        </tr>  
            
        <tr height="50px" ><td>    
        <input type="submit" class="button" name="ok" value="OK" bgcolor="#48d1cc">
          </td>
        
        </tr>
        </table>
<td></tr></table>
</td></tr></table> 
</form>
</body>
</html>

<?php

if(isset($_POST["ok"]))
{
    header("location: ../View/LogIn.php");

}
?>