<!DOCTYPE html>
<html>
<head>
<title>Remove Vendor</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<navbar class="menu-bar" style="float: right;">
          <span>
         <a href="Homepage.php" style="color:indianred;" > Home </a>
          <span>&nbsp;|&nbsp;</span>
         <span>&nbsp;</span>
         <a href="Login.php" style="color:indianred;" class="option">Login</a>
         <span>&nbsp;|&nbsp;</span>
         <span>&nbsp;</span>
        <a href="Signup.php" style="color:indianred;" class="option">Signup</a>
</navbar>
<div class="container">
  <img src="Picture/jko.jpg" alt="Cinque Terre" width="1000" height="300">
  <div class="center"></br>
  <p id="demo">Remove Product: Potato</p>
<button onclick="myFunction()">Remove</button>

<script>
function myFunction() {
  const element = document.getElementById("demo");
  element.remove();
}
</script>
</div>
</div>


</body>
</html>