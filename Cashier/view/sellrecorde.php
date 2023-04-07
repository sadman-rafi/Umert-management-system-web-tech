<?php include('../controller/cashiercontroller.php');
?>
		 <?php 




  include('../controller/sellrecordelistcontroller.php');

   ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/mysearch.css">
	<title>Sell Report</title>
</head>
<body>

	<p align="right">
 
  <a href="logout.php" style="color: #fff; padding: 10px 28px; background: red; text-decoration: none; font-weight: bold;" href="">Logout</a>
</p>

	<center>
		<h3 style="background-color:Tomato">Sell Report</h3>
		<form action="" method="post">
				
			<tr>
          <td>Search:</td>
          <td><input type="text" name="sid" id="sid" value="<?php if (isset($_POST['sid'])) echo $_POST['sid']; ?>" onkeyup="fetchuser()"></td>
          <td><button type="submit" name="search" value="Search"> Search</button> </td> 
          <td><button type="submit" name="delete" value="delete"> Delete</button></td>
        </tr>

       

  
		</form>



		 


	<h1 style="text-align: center;">Sell Reports</h1>
	<form action="" method="post">

		<input type="text" name="name" placeholder="NAME" value="<?php echo $name; ?>"/><br>
		<input type="text" name="CATAGORY"placeholder="CATAGORY" value="<?php echo $catagory;?>"/><br>
		<input type="text" name="Quantity" placeholder="Quantity"value="<?php echo $quantity; ?>"/><br>
		<input type="text" name="price"placeholder="price" value="<?php echo $price; ?>"/><br>
		<input type="text" name="PRODUCT"placeholder=" Product" value="<?php echo $proid; ?>"/><br>
		<input type="text" name="sid"placeholder="Suplier id" value="<?php echo $sid; ?>"/><br>


    <input  type="submit" name="update" id="update" value="Update"></input> 
</form>
	
	
			
		
			

	
	



 



</body>
</html>