<?php include('../controller/cashiercontroller.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/mysearch.css">

	
	<title>MY ACCOUNT</title>
</head>
<body>
	<p align="right">
 
  <a href="logout.php" style="color: #fff; padding: 10px 28px; background: red; text-decoration: none; font-weight: bold;" href="">Logout</a>
</p>
	<center>
		<h3 style="background-color:Tomato">YOUR ACCOUNT view here</h3>
		<form action="" method="post">
				
			<tr>
          <td>Search:</td>
          <td><input type="text" name="cid" value="" placeholder="Enter Cashier name" onkeyup="fetchuser()"></td>
          <td><button type="submit" name="Search" value="">Search</button> 
        </tr>

       

  
		</form>



		 <br> <br> <br> <br>

     <div>

     	<?php include('../controller/myaccountcontroller.php'); ?>


     	

     </div>

		


	</center>

	
 

  

</body>
</html>