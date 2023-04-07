<!DOCTYPE html>
<html>
<head>
<title>Add Seller</title>
<link rel="stylesheet" href="styles.css">
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

<ul id="myList1">
  <p>Name of the working sellers: </p>
  <li>Rafi</li>
  <li>Tanisha</li>
  <li>Karan</li>
  <li>Elma</li>
</ul>
<br>
<br>
<ul id="myList2">
  <p> New sellers to be added: </p>
  <li>Mohan</li>
  <li>Ishita</li>
</ul>

<button onclick="myFunction()">ADD</button>

<script>
function myFunction() {
  const node = document.getElementById("myList2").lastElementChild;
  const list = document.getElementById("myList1");
  list.insertBefore(node, null);
}
</script>
</div>
</div>


</body>
</html>