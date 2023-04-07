<?php
//include "../Control/Search_Purchase_Process.php";
include ("../Model/Payment_Model.php");
$err="";


?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../CSS/SearchPurchaseDesign.css">
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<table id="table1" border="0"  align="center" cellspacing="2" cellpadding="10" onsubmit="paycheck()">
<tr height="40px" bgcolor="#1e90ff"><td align="right">
<input type="submit" class="button" name="back" value="Go Back" bgcolor="#48d1cc">
</td></tr>
<tr><td>  
    <table id="table2" border="0"  align="center" cellspacing="2" cellpadding="12" > 
    <tr height="50px" >
            <td align="center"><br>
            <font size="5" face="Lucida Console" color=blue ><strong> Payment 
           </td>
        </tr>
        <tr align="center"><td><font size="4" face="Lucida Console" color=blue > ID:
        <input type="text" name="id" id="id" size="30" onkeyup="fetchuser()">
</td></tr><tr align="center"><td><font size="4" face="Lucida Console" color=blue > Post:
        <input type="text" name="post" id="post" size="30" onkeyup="fetchuser()">
</td></tr><tr align="center"><td><font size="4" face="Lucida Console" color=blue > Amount:
        <input type="text" name="amount" id="amount" size="30" onkeyup="fetchuser()">
</td></tr><tr align="center"><td><font size="4" face="Lucida Console" color=blue > Date:
        <input type="text" name="date" id="date" size="30" onkeyup="fetchuser()">
</td></tr>
<tr align="center"><td>
        <input type="submit" class="button" name="pay" value="Pay">
        <br>
</td></tr>
<tr><td>
        <font color="red">
            <?php echo $err ?>
            </font>
</td></tr>
       
       
<tr align="center"><td>

<?php
$new_amount="";

if(isset($_POST["pay"]))
{
    $id=$_POST["id"];
    $post=$_POST["post"];
    $amount=$_POST["amount"];
    $date=$_POST["date"];
    if(empty($id) || empty($post) || empty($amount)||empty($date))
    {
        $err="* Enter valid input.";
    }
    else
    {
            
$mydb=new DB();
$conobj=$mydb->opencon();
$mydata=$mydb->SearchID("payment",$conobj,$id,$post);
if($mydata->num_rows> 0)
{
    
    while($row=$mydata->fetch_assoc())
    {
        $new_amount=$row["payment"]+$amount;
      
    } 

}
else
$err="Wrong Input! Data Not Found";

$mydata=$mydb->UpdateData($id,$post,$new_amount,$date,"payment",$conobj);
$mydata=$mydb->SearchID("payment",$conobj,$id,$post);
if($mydata->num_rows> 0)
{
    
    while($row=$mydata->fetch_assoc())
    {
        $new_amount=$row["payment"]+$amount;
        echo '<table id="table3" border="0"  align="left" cellspacing="2" cellpadding="10" >';
        echo "<tr><td>ID   :".$row["id"]."</font></td></tr>";
        echo "<tr><td>Post   :".$row["post"]."</font></td></tr>";
        echo "<tr><td>Name      :".$row["name"]."</font></td></tr>";
        echo "<tr><td>Payment           :".$row["payment"]."</font></td></tr>";
        echo "<tr><td>Date    :".$row["date"]."</font></td></tr>";
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
<script type="text/JavaScript" src="../JS/Main.js"></script>

</body>
</html>