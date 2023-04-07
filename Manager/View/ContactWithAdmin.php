<?php
include "../Control/ContactA_Verify.php";
//session_start();
?>

<!DOCTYPE html>
<html>
<body>


<font align="center" color="#66cdaa" size="5" face="monospace">
    <h2 >Contact With Admin</h2>
</font>
    <form action="../Control/ContactA_Process.php" method="post" enctype="multipart/form-data">

    <table border="0" width="650" align="center" cellspacing="0" cellpadding="8" bgcolor="#ffffff">
    <tr height="50px" bgcolor="#baf0d1">
            <td>Name:
            <br>
            <input type="text" name="name" size="40" required>
            <br>
            <font color="red">
            <?php
           echo $nameerr;
           ?></font>
           </td>
           
        </tr>  
        <tr height="50px" bgcolor="#aaf0d1">
            <td>Email:
            <br>
            <input type="text" name="email"size="40">
            <br>
            <font color="red">
            <?php
           echo $emerr;
           ?></font>
           </td>
           
        </tr>  

        <tr height="80px" bgcolor="#aaf0d1">
            <td>Comment:
            <br>
            <textarea name="comment">Enter your comment...</textarea>
            <br>
            <font color="red">
            <?php
           echo $comerr;
           ?></font>
           </td>
           
        </tr>  
        <tr height="80px" bgcolor="#00ced1"><td>   
        <input type="submit" name="submit" value="Submit" bgcolor="#48d1cc">
        </td>
        </tr>
        <tr>
          <td>Go back to main page ..<a href="ManagerPage.php">HERE</a>
            </td>
        
        </tr>


</table>
</form>
</body>
</html>
     