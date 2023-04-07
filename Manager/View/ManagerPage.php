<?php
include "../Control/Manager_Page_Verify.php";
//include "../Control/LogOut.php";
session_start();
if(empty($_SESSION["mid"]))
{
    header("Location: LogIn.php"); 

}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../CSS/ManagerPageDesign.css">
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data">
    <table id="table1" align="center" >
        <tr  height="80px" bgcolor="#10a4f">
    <td id="logo" align="center" width="550">Umart</td>
    <td width="400" align="center" ><font size="5" face="Lucida Console" color=white ><strong>Wellcome <?php echo $_SESSION["fname"] ?> <?php echo $_SESSION["lname"] ?></td>
    <td align="right">
    <input type="submit" class="button" name="myaccount" value="My Account" >;
    <input type="submit" class="button" name="contoadmin" value="Contact to Admin" >;
</td></tr>
</table>

<table >
<tr  bgcolor="#800080"> 
    <td>
        <!--- Profile Table  --->

        
    <tr  >
            <td >
            <br><br>
            <font size="4" face="Lucida Console" color=black ><?php echo $_SESSION["fname"] ?> <?php echo $_SESSION["lname"] ?></font><br>
            <br>UMART,,,,,SMART WORLD.<br><br>
            <br><input type="submit" class="button" name="edit" value="Edit Profile" ><br>
            <br><input type="submit" class="button" name="logout" value="Log Out" >
           </td>
        </tr> 
       
        
        
    </table></td>

        <td>
            <!--- Manager Page Table  --->

        <table id="table3"  cellspacing="3" cellpadding="4" align="center" >
    <tr height="20px"  align="center" bgcolor="#800080">

            
            <br><input type="submit" class="button1" name="pp" value="Purchase Product" ></p>
           
           
            <br><input type="submit" class="button1" name="pr" value="Purchase Record" ></p>
           
           
            <br><input type="submit" class="button1" name="spr" value="Search Record" ></p>
           
           
            <br><input type="submit"class="button1" name="on" value="Order Now" ></p>
           
        </tr>  
            <tr height="20px" align="center" bgcolor="#ffffff">
            
            <br><input type="submit" class="button1" name="p" value="Add Product" ></p>
           
            <br><input type="submit"class="button1" name="sp" value="Delete Product" ></p>
           
            <br><input type="submit"class="button1" name="sr" value="Search Product" ></p>
           
            <br><input type="submit" class="button1" name="t" value="Stock Report" ></p>
           
        </tr>
        <tr height="20px" align="center" bgcolor="#FF0000">
        
        <br><input type="submit" class="button1" name="ser" value="Sell Record" ></p>
            
            <br><input type="submit" class="button1" name="ssr" value="Search sell Record" ></p>
           
            <br><input type="submit" class="button1" name="dr" value="Transections" ></p>
           
            <br><input type="submit"class="button1"  name="pay" value="Payment" ></p>
           
        </tr>
        
        </table>
</td>
</tr></table>


</form>

</body>
</html>