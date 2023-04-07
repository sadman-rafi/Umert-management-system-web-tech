<?php
//include "../Control/Search_Purchase_Process.php";
include ("../Model/Stock_Model.php");
$err="";


?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../CSS/SearchProductDesign.css">
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
            <font size="5" face="Lucida Console" color=blue ><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Delete Product 
           </td>
        </tr>
        <tr align="center"><td><br>
        <input type="text" name="searchdata" id="search" size="40" value="<?php if (isset($_POST['searchdata'])) echo $_POST['searchdata']; ?>" onkeyup="fetchuser()">
        <br><br>
        <input type="submit" class="button" name="searchid" value="Search ID">
        <input type="submit" class="button" name="delete" value="Delete">
</td>
</tr>
<tr><td>
        <font color="red">
            <?php echo $err ?>
            </font>
</td></tr>
       
       
<tr align="center"><td>

<?php
$proid=$sid=$proname=$quan=$catagory=$price=$sdata="";

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
$mydata=$mydb->SearchID("stockreport",$conobj,$sdata);
if($mydata->num_rows> 0)
{
    
    while($row=$mydata->fetch_assoc())
    {
        echo '<table id="table3" border="0"  align="left" cellspacing="2" cellpadding="10" >';
       echo "<tr><td>Product ID   :".$row["proid"]."</font></td></tr>";
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

if(isset($_POST["delete"]))
{
    $sdata=$_POST["searchdata"];
    
            
$mydb=new DB();
$conobj=$mydb->opencon();
$mydata=$mydb->DeleteData("stockreport",$conobj,$sdata);
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