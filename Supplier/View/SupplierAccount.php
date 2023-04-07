<?php require "../Control/SupplierAccCheck.php" ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<link rel="stylesheet" type="text/css" href="../public/css/Supplierlogin.css">
</head>
<Body>
<div class="reg-card">
	<h3>Supplier Information </h3><hr>
<form action="" method="post">
Suppliers Id:<input name="sid" value="<?php echo $sid; ?>"><br><br>
first name:<input name="fname" value="<?php echo $fname; ?>"><br><br>
last name:<input name="lname" value="<?php echo $lname; ?>"><br><br>
age: <input name="age" value="<?php echo $age; ?>"><br><br>
gender:<input name="gen" value="<?php echo $gen; ?>"><br><br>
contact No:<input name="contNo" value="<?php echo $contNo; ?>"><br><br>
email: <input name="email" value="<?php echo $email; ?>"><br><br>
password: <input name="pass" value="<?php echo $pass; ?>"><br><br>
<input type="submit" name="UpdateInfo" value="UpdateInfo" class="button updatebutton">
</form>
<form action="" method="POST">
<input type="submit" name="ViewInfo" value="ViewInfo" class="button submitbutton">
</form>
<br><br>

<table border="0" width="100%" align="center" cellspacing="2" cellpadding="2"  >
 	<tr><td></td>
 		<td width="40%" >
            <a href="../View/SupplierDashboard.php">Supplier Dashboard</a>&nbsp;
             <a href="ContactAdmin.php">Contact Admin </a>&nbsp;
             <a href="../View/logout.php">logout</a> &nbsp; 

</td><td></td>
</tr>
</table>
</div>
  
</Body>
</html>