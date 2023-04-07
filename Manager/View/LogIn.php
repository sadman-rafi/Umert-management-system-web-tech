<?php
include "../Control/LogInCheck.php";

?>
<?php
setcookie("user_detected", "visited", time() + 86400*7, '/');

if(isset($_COOKIE["user_detected"])) {
  echo  "Got you. You have visited before.";
}else {
  echo "Wellcome! You are visiting for first time.";
}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../CSS/LogInDesign.css">
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data">

    <table id="table2" border="0"  align="center" cellspacing="0" cellpadding="8" >
      <tr><td>  
    <table id="table1" border="0"align="center" cellspacing="0" cellpadding="8">

    <tr height="100px"  align="center" ><td>
<img id="img" src="../Image/log1.gif">
</td><td>

<table width="280" border="0"align="left" cellspacing="0" cellpadding="8">
  <tr id="logo" height="50px">
    <td>Easy Store</td>
</tr>
<tr  height="30px"><td>
<font size="6" face="Arial">
    <strong>Welcome to Family
    </font>
    </td></tr>
    <tr  height="60px"><td>
<font color="#808080" size="2" face="Arial">
A store to deliver all the necessities to your doorstep.
    </font>
    </td></tr>
<tr height="50px" bgcolor="#ffffff">
            <td>Manager ID:
            <br>
            <input type="text" placeholder="Enter Manager ID" name="mid" size="30">
            <br>
            <font color="red">
            <?php
           echo $miderr;
           ?></font></td></tr>
           <tr height="50px" bgcolor="#ffffff"><td>
          Password:
            <br>
            <input type="password" placeholder="Enter Password" name="pass"size="30">
            <br>
            <font color="red">
            <?php
           echo $passerr;
           ?></font>
          </td></tr>
          <tr height="50px" bgcolor="#ffffff">
          <td>
        <input type="checkbox" name="remember" size="30"> 
        Remember me
          <br></td>
             </tr>
          <tr height="20px"><td>
        <input type="submit" class="button" name="login" value="Log In" >
        <br></td></tr>
        
            <tr height="50px"><td>
            <font color="#000000" size="3" face="Arial">
            Do not have an account? Sign Up here...<a href="ManagerRegistration.php">Sign Up</a>   
           </font>
        
            </td>
        
        </tr>
        <tr height="50px"><td>
        <font color="red">
            <?php
           echo $loginerr;
           ?></font>
        
            </td>
        
        </tr>
</table></td></tr>
</table></td></tr></table>
</form>
</body>
</html>
     