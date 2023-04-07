<?php
 require "../Control/ViewProductCheck.php" ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
</head>
<Body>
 <hr>
 <form action="" method="post">
<input type="submit" name="fetch" class="button submitbutton" value="Fetch Data">
</form>
<form action="" method="POST">
<input type="text" name="searchdata" id="proname" onkeyup="fetchproduct()">
<p id="message"></p>
<input type="submit" name="search" value="Search">
</form>
<br>
   
<form action="" method="post">
sid:<input name="sid" value="<?php echo $sid; ?>">
product name:<input name="proname" value="<?php echo $proname; ?>">
catagory: <input name="catagory" value="<?php echo $catagory; ?>">
quantity:<input name="quantity" value="<?php echo $quantity; ?>">
price:<input name="price" value="<?php echo $price; ?>">
<input type="submit" name="AddToCart" value="AddToCart">
</form>
<br>
<table border="0" width="100%" align="center" cellspacing="2" cellpadding="2" >
 
 	<tr><td></td>
 		<td width="40%" >
            <a href="../View/SupplierDashboard.php">Supplier Dashboard</a>&nbsp;
             <a href="ContactAdmin.php">Contact Admin </a>&nbsp;
             <a href="../View/logout.php">logout</a> &nbsp; 

</td><td></td>
</tr>
</table>

<script src="../public/js/supplierjs.js"></script>
</Body>
</html>