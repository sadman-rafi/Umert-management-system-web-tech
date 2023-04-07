<?php
//include "../Control/Search_Purchase_Process.php";
include ("../Model/Purchase_Model.php");
$err="";


?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../CSS/SearchPurchaseDesign.css">
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<table id="table1" border="0"  align="center" cellspacing="2" cellpadding="10" >
<tr height="40px" bgcolor="#1e90ff"><td align="right">
<input type="submit" class="button" name="back" value="Go Back" bgcolor="#48d1cc">
</td></tr>
<tr><td>  
    <table id="table2" border="0"  align="center" cellspacing="2" cellpadding="12" > 
    <tr height="50px" >
            <td align="center"><br>
            <font size="5" face="Lucida Console" color=blue ><strong> Search Purchase Record 
           </td>
        </tr>
        <tr align="center"><td><br>
        <input type="text" name="searchdata" id="proid" size="40" onkeyup="fetchuser()">
        <br><br>
        <input type="submit" class="button" name="searchid" value="By ID">
        <input type="submit" class="button" name="searchname" value="By Name">
        <input type="submit" class="button" name="searchcat" value="By Catagory">
        <p id="message"></p>    
        <br>
</td></tr>
<tr><td>
        <font color="red">
            <?php echo $err ?>
            </font>
</td></tr>
       
       
<tr align="center"><td>

<?php
$proid=$sid=$proname=$quan=$catagory=$price="";

if(isset($_POST["searchid"]))
{
    $sdata=$_POST["searchdata"];
    if(empty($sdata) || (strlen($sdata))<3)
    {
        $err="* Enter a valid Manager ID";
    }
    else
    {
            
$mydb=new DB();
$conobj=$mydb->opencon();
$mydata=$mydb->SearchID("purchaserecord",$conobj,$sdata);
if($mydata->num_rows> 0)
{
    
    while($row=$mydata->fetch_assoc())
    {
        echo '<table id="table3" border="0"  align="left" cellspacing="2" cellpadding="10" >';
       echo "<tr><td>Product ID   :".$row["proid"]."</font></td></tr>";
       echo "<tr><td>Supplier ID   :".$row["sid"]."</font></td></tr>";
       echo "<tr><td>Product Name :".$row["proname"]."</font></td></tr>";
       echo "<tr><td>Catagory     :".$row["catagory"]."</font></td></tr>";
       echo "<tr><td>Quantity     :".$row["quantity"]."</font></td></tr>";
       echo "<tr><td>Price        :".$row["price"]."</font></td></tr>";
       echo "</table>";
       echo "<br><br>";
      
    } 

}
else
$err="Wrong Input! Data Not Found";
}
       
}
 

if(isset($_POST["searchname"]))
{

$mydb1=new DB();
$conobj1=$mydb1->opencon();
$mydata1=$mydb1->SearchName("purchaserecord",$conobj1,$_POST["searchdata"]);
if($mydata1->num_rows> 0)
{
    
    while($row=$mydata1->fetch_assoc())
    {
        echo '<br><table id="table3" border="0"  align="left" cellspacing="2" cellpadding="10" >';
       echo "<tr><td>Product ID   :".$row["proid"]."</font></td></tr>";
       echo "<tr><td>Supplier ID   :".$row["sid"]."</font></td></tr>";
       echo "<tr><td>Product Name :".$row["proname"]."</font></td></tr>";
       echo "<tr><td>Catagory     :".$row["catagory"]."</font></td></tr>";
       echo "<tr><td>Quantity     :".$row["quantity"]."</font></td></tr>";
       echo "<tr><td>Price        :".$row["price"]."</font></td></tr>";
       echo "</table>";
       echo "<br><br>";
      
    } 

}
else
$err="Wrong Input! Data Not Found";
}

if(isset($_POST["searchcat"]))
{

$mydb=new DB();
$conobj=$mydb->opencon();
$mydata=$mydb->SearchCat("purchaserecord",$conobj,$_POST["searchdata"]);
if($mydata->num_rows> 0)
{
    
    while($row=$mydata->fetch_assoc())
    {
        echo '<table id="table3" border="0"  align="left" cellspacing="2" cellpadding="10" >';
       echo "<tr><td>Product ID   :".$row["proid"]."</font></td></tr>";
       echo "<tr><td>Supplier ID   :".$row["sid"]."</font></td></tr>";
       echo "<tr><td>Product Name :".$row["proname"]."</font></td></tr>";
       echo "<tr><td>Catagory     :".$row["catagory"]."</font></td></tr>";
       echo "<tr><td>Quantity     :".$row["quantity"]."</font></td></tr>";
       echo "<tr><td>Price        :".$row["price"]."</font></td></tr>";
       echo "</table>";
       echo "<br><br>";
      
    } 

}
else
$err="Wrong Input! Data Not Found";
}

if(isset($_POST["back"]))
{
    header("location: ../View/ManagerPage.php");

}


?>
</td></tr>
</table></td></tr>
</table>

</form>

</body>
</html>

<script>

function fetchuser()
{     
       
        
var proid=document.getElementById("proid").value;
var xttp= new XMLHttpRequest();
xttp.onreadystatechange = function (){
    if(this.readyState==4 && this.status==200)
    {
        
        document.getElementById("message").innerHTML=this.responseText;
    }
    else
	{
		 document.getElementById("message").innerHTML = this.status;
                
	}
};


xttp.open("POST","/EasyStoreM/Manager/Control/Ajax.php",true);
xttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xttp.send("proid="+proid);




}
            </script>