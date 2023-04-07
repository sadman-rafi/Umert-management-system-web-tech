
<?php
include "../Control/Order_Verify.php";

//session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../CSS/OrderDesign.css">
</head>
<body>
<form action="" method="post" enctype="multipart/form-data" onsubmit="propurcheck()">
<table id="table1" border="0"  align="center" cellspacing="2" cellpadding="10" >
<tr height="40px" bgcolor="#1e90ff"><td align="right">
<input type="submit" class="button" name="back" value="Go Back" bgcolor="#48d1cc">
</td></tr>
<tr><td>  
<table id="table2" border="0" width="500"  align="center" cellspacing="0" cellpadding="8" >
      <tr height="70px" width="500" align="center"><td >
    <font  color="#cb4154" size="6" face="monospace">
    <strong>&nbsp;Give Order
</font></td></tr>
   

    <tr height="50px" >
            <td>Product Name:
            <br>
            <input type="text" id="proname" name="proname"size="40">
            <font color="red">
            <?php
           echo $pronameerr;
           ?></font>
           </td>
        </tr>  
        <tr height="50px" >
            <td>Product ID:<br>
            <input type="number" id="proid" name="proid"maxlength="6" size="20" >
            <font color="red">
            <?php
           echo $proiderr;
           ?></font></td>
        </tr>
        <tr height="50px" >
            <td>Catagory:<br>
            <input type="text" id="catagory" name="catagory"maxlength="20" size="20" >
            <font color="red">
            <?php
           echo $caterr;
           ?></font></td>
        </tr>
        <tr height="50px" >
            <td>Quantity:<br>
            <input type="number" id="quan" name="quan"maxlength="6" size="20" >
            <font color="red">
            <?php
           echo $quanerr;
           ?></font></td>
        </tr>
            <tr height="50px">
            <td>Price:<br>
            <input type="number"id="price" name="price"maxlength="8" size="20" >
            <font color="red">
            <?php
           echo $priceerr;
           ?></font>
            </td>
        </tr>
        <tr height="40px" >
            <td>Supplier Name:<br>
            <input type="text" id="supname" name="supname"maxlength="20" size="20" >
            <font color="red">
            <?php
           echo $supnameerr;
           ?></font></td>
        </tr>
        <tr height="40px" >
            <td>Supplier ID:<br>
            <input type="number" id="sid" name="sid"maxlength="6" size="20" >
            <font color="red">
            <?php
           echo $supiderr;
           ?></font></td>
        </tr>
        <tr height="40px" >
            <td>Receive Date:<br>
            <input type="date" id="redate" name="redate"maxlength="20" size="20" >
            <font color="red">
            <?php
           echo $redateerr;
           ?></font></td>
        </tr>
        <tr height="50px"><td>
            
        <input type="submit"class="button" name="Add" value="Add" bgcolor="#48d1cc">
        <input type="reset" class="button"value="Reset"><br>
        <font color="red"><?php
           echo $toterr;
           ?></font>
    </td>
        
        </tr>

        
</table></td></tr></table>

</form>
<script type="text/JavaScript" src="../JS/Main.js"></script>

</body>
</html>