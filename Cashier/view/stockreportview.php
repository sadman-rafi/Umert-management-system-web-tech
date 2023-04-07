<?php include('../controller/cashiercontroller.php'); ?>
 <?php 




  include('../controller/stockreportviewcontrol.php');

   ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/newstyl.css">

	<title>Stock report</title>
</head>
<body>
	<p align="right">
 
  <a href="logout.php" style="color: #fff; padding: 10px 28px; background: red; text-decoration: none; font-weight: bold;" href="">Logout</a>
</p>
	<center>
		<h3 style="background-color:Tomato">view here</h3>
		<form action="" method="post">
				
			<tr>
         
          <td>Search:</td>
          <td><input type="text" name="proid" id="proid" value="<?php if (isset($_POST['proid'])) echo $_POST['proid']; ?>" onkeyup="fetchuser()"></td>
          <td><button type="submit" name="search" value="Search"> Search</button> </td> 
          <td><button type="submit" name="delete" value="delete"> Delete</button></td>
        

        </tr>
        






		</form>
		<h1 style="text-align: center;">Stock Reports</h1>
	<form action="" method="post">

		<input type="text" name="proname" value="<?php echo $proname; ?>"/><br>
		<input type="text" name="CATAGORY"placeholder="CATAGORY" value="<?php echo $catagory;?>"/><br>
		<input type="text" name="Quantity" placeholder="Quantity"value="<?php echo $quantity; ?>"/><br>
		<input type="text" name="price"placeholder="price" value="<?php echo $price; ?>"/><br>
		<input type="text" name="PRODUCT"placeholder=" Product" value="<?php echo $proid; ?>"/><br>
		


    <input  type="submit" name="update" id="update" value="Update"></input> 
</form>
	
	</center>


</body>
</html>
<script >
	function fetchuser()
{
var proid=document.getElementById("proid").value;
var xttp= new XMLHttpRequest();
xttp.onreadystatechange = function (){
    if(this.readyState==4 && this.status==200)
    {
        document.getElementById("message").innerHTML=this.responseText;
    }
};


xttp.open("POST","php/supplier/pure2 (2)/pure2/controller/ajks.php",true);
xttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xttp.send("proid="+proid);



}

	
	
</script>