<?php include('../controller/cashiercontroller.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/newstyl.css">
	<title>TRansectiont</title>
</head>
<body>

	<p align="right">
 
  <a href="logout.php" style="color: #fff; padding: 10px 28px; background: red; text-decoration: none; font-weight: bold;" href="">Logout</a>
</p>

	<h1 style="text-align: center; background-color:Tomato">View Transection</h1>
<center>
		
	<form method="post">
			
		
	<br><br><br>
	<button name="fetch" id="submit">SHOW DATA</button>


	</form>
	
		<div>
			<center>
				<?php 

  		include('../controller/viewtrancontroller.php');

   ?>
				


			</center>

		
		</div>

	
	
	
	

	

	

 


 
	

</body>
</html>