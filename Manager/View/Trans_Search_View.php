<?php
//include "../Control/Search_Purchase_Process.php";
include ("../Model/Transection_Model.php");
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
            <font size="5" face="Lucida Console" color=blue ><strong> Transections 
           </td>
        </tr>
        <tr align="center"><td><br>
        <input type="text" name="searchdata" id="search" size="40" onkeyup="fetchuser()">
        <br><br>
        <input type="submit" class="button" name="searchid" value="Search">
        <input type="submit" class="button" name="view" value="View All">
        <br>
</td></tr>
<tr><td>
        <font color="red">
            <?php echo $err ?>
            </font>
</td></tr>
       
       
<tr align="center"><td>

<?php


if(isset($_POST["searchid"]))
{
    $sdata=$_POST["searchdata"];
    if(empty($sdata) || (strlen($sdata))<3)
    {
        $err="* Enter a valid ID";
    }
    else
    {
            
$mydb=new DB();
$conobj=$mydb->opencon();
$mydata=$mydb->SearchID("transections",$conobj,$sdata);
if($mydata->num_rows> 0)
{
    
    while($row=$mydata->fetch_assoc())
    {
        echo '<table id="table3" border="0"  align="left" cellspacing="2" cellpadding="10" >';
       echo "<tr><td>Transection ID   :".$row["id"]."</font></td></tr>";
       
       
       echo "<tr><td>Amount           :".$row["amount"]."</font></td></tr>";
       
       echo "</table>";
       echo "<br><br>";
      
    } 

}
else
$err="Wrong Input! Data Not Found";
    }
       
}
 

if(isset($_POST["view"]))
{

$mydb1=new DB();
$conobj1=$mydb1->opencon();
$mydata1=$mydb1->FetchData("transections",$conobj1);
if($mydata1->num_rows> 0)
{
    
    while($row=$mydata1->fetch_assoc())
    {
        echo '<table id="table3" border="0"  align="left" cellspacing="2" cellpadding="10" >';
       echo "<tr><td>Transection ID   :".$row["id"]."</font></td></tr>";
       echo "<tr><td>Date             :".$row["date"]."</font></td></tr>";
       echo "<tr><td>Description      :".$row["descrip"]."</font></td></tr>";
       echo "<tr><td>Amount           :".$row["amount"]."</font></td></tr>";
       echo "<tr><td>Payment Type     :".$row["type"]."</font></td></tr>";
       echo "</table>";
       echo "<br><br>";
      
    } 

}
else
$err="Data Not Found";
}


if(isset($_POST["back"]))
{
    header("location: ../View/ManagerPage.php");

}


?></td></tr>
</table></td></tr>
</table>

</form>
</body>
</html>