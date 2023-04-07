<?php
//include "Search_View_Stock_Process.php";

//session_start();
?>

<!DOCTYPE html>
<html>
<body>
<font align="center" color="#32cd32" size="4" face="sans-serif">
    <h2 >Stock Details</h2>
</font>
    <form action="../Control/Search_Stock_Process.php" method="post" enctype="multipart/form-data">

    <table border="1" width="650" align="center" cellspacing="3" cellpadding="8" bgcolor="#ffffff">
    
<tr  height="50px" bgcolor="#7cfc00">
<td><input type="submit" name="Search" value="Search Report" bgcolor="#7cfc00">
<input type="text" name="searchid" size="60">
<?php
//$_SESSION["searchid"];
?>
</td></tr>

       
</table>

</form>
</body>
</html>