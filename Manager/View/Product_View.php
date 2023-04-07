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
            <font size="5" face="Lucida Console" color=blue ><strong> All Product Data 
           </td>
        </tr><br><br>
       
       
<tr align="center"><td>

<?php
$proid=$proname=$quan=$catagory=$price="";

            
$mydb=new DB();
$conobj=$mydb->opencon();
$mydata=$mydb->FetchData("stockreport",$conobj);
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
$err=" No Data Found";

       

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