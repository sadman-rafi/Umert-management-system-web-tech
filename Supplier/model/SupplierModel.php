<?php
class DB
{
    function opencon(){
        $DBHostname="localhost";
        $DBUsername="root";
        $DBpass="";
        $DBName="easystore";
        
        $conn=new mysqli($DBHostname,$DBUsername,$DBpass,$DBName);
        if($conn->connect_error)
        {
        echo "cant create connection object".$conn->connect_error;
        }
        return $conn;
    }
function Registration($fname,$lname,$age,$gen,$contNo,$email,$pass,$tablename,$conn)
{
    
    $sqlstr="INSERT INTO $tablename (fnam,lname,age,gen,contNo,email,pass) VALUES 
    ('$fname','$lname',$age,'$gen',$contNo,'$email','$pass')";
    
    if($conn->query($sqlstr)===TRUE)
    {
      header("Location: ../View/SupplierReg2.php");
      }
    else{
        echo "cant insert".$conn->error;
    }
}
/*
function Registration($fname,$lname,$age,$gen,$contNo,$email,$pass,$tablename,$conn)
{

    $sqlstr="INSERT INTO $tablename (fname,lname,age,gen,contNo,email,pass) VALUES 
    ('$fname','$lname',$age,'$gen',$contNo,'$email','$pass')";
    
    if($conn->query($sqlstr)===TRUE)
    {
        header("Location: ../View/SupplierReg2.php");
      }
    else{
        echo "cant insert".$conn->error;
    }
}

*/
function viewRegisteredAccInfo($conn,$tablename,$email,$pass)
{
$sqlstr="SELECT * FROM $tablename WHERE email='$email' && pass= '$pass'";
$results=$conn->query($sqlstr);
return $results;
}

function login($sid,$pass,$tablename,$conn)
{
$sqlstr="SELECT * FROM $tablename WHERE sid='$sid' && pass= '$pass'";
$results=$conn->query($sqlstr);
return $results;
}
function contactAdmin($name,$email,$comment,$tablename,$conn)
{
    $sqlstr="INSERT INTO $tablename (name,email,comment) VALUES 
    ('$name','$email','$comment')";
    
    if($conn->query($sqlstr)===TRUE)
    {
        echo "message sent";
   
    }
    else{
        echo "cant insert".$conn->error;
    }
}
function viewProduct($conn,$tablename)
{
    $sqlstr="SELECT * FROM $tablename";
   $results= $conn->query($sqlstr);
return $results;

}
function acceptOrder($sid,$proname,$catagory,$quantity,$price,$tablename,$conn)
{
    $sqlstr="INSERT INTO $tablename (sid,proname,catagory,quantity,price) VALUES 
    ($sid,'$proname','$catagory',$quantity,$price)";
    
    if($conn->query($sqlstr)===TRUE)
    {
        echo "message sent";
   
    }
    else{
        echo "cant insert".$conn->error;
    }
}

function fetchData($conn,$tablename)
{
    $sqlstr="SELECT * FROM $tablename";
   $results= $conn->query($sqlstr);
return $results;

}

function searchProducts($conn,$tablename,$proname)
{
$sqlstr="SELECT * FROM $tablename WHERE proname='$proname'";
$results=$conn->query($sqlstr);
return $results;
}
////////////////////////
function searchProductSpecificUser($conn,$tablename,$proname,$sid)
{
$sqlstr="SELECT * FROM $tablename WHERE proname='$proname' && sid='$sid'";
$results=$conn->query($sqlstr);
return $results;
}
////////////////////////
function viewAccInfo($conn,$tablename,$sid)
{
$sqlstr="SELECT * FROM $tablename WHERE sid='$sid'";
$results=$conn->query($sqlstr);
return $results;
}
/////////////
function checkOrder($conn,$tablename,$sid)
{
$sqlstr="SELECT * FROM $tablename WHERE sid='$sid'";
$results=$conn->query($sqlstr);
return $results;
}
/////////////
function searchProductx($conn,$tablename,$lname)
{
    $sqlstr="SELECT * FROM managerinfo WHERE lname='$lname'";
    $results=$conn->query($sqlstr);
    return $results;
}
/////////
function AddToCart($tablename,$sid,$proname,$catagory,$quantity,$price,$conn){
  $sqlstr="INSERT INTO $tablename (sid,proname,catagory,quantity,price) VALUES 
    ($sid,'$proname','$catagory',$quantity,$price)";
      if($conn->query($sqlstr)===TRUE){
     echo "added to cart";
 }
 else{
     echo "cant add to cart".$conn->error;
 }
}
/////////////
function updateAccInfo($tablename,$sid,$fname,$lname,$age,$gen,$contNo,$email,$pass,$conn)
{

    $sqlstr="UPDATE $tablename SET fnam='$fname', lname='$lname', age='$age',gen='$gen',contNo='$contNo',email='$email',pass='$pass' WHERE sid='$sid'";
    if($conn->query($sqlstr))
    {
        echo "info updated";
    }
    else
    {
        echo "not updated".$conn->error;
    }

}


function searchAcconutnm($conn,$tablename,$fname)
{
$sqlstr="SELECT * FROM $tablename WHERE fnam='$fname'";
$results=$conn->query($sqlstr);
return $results;
}
function searchAcconutnmxxx($tablename,$fname,$lname,$age,$salary,$conn)
{
    $sqlstr="UPDATE $tablename SET fnam='$fname', lname='$lname', age='$age', salary='$salary' WHERE fname='$fname'";
    if($conn->query($sqlstr))
    {
        echo "updated account info";
    }
    else
    {
        echo "not updated".$conn->error;
    }

}

function searchUser($conn,$tablename,$fname)
{
$sqlstr="SELECT * FROM $tablename WHERE fnam='$fname'";
$results=$conn->query($sqlstr);
return $results;
}

function updateDatas($tablename,$fname,$lname,$age,$salary,$conn)
{
    $sqlstr="UPDATE $tablename SET fnam='$fname', lname='$lname', age='$age', salary='$salary' WHERE fname='$fname'";
    if($conn->query($sqlstr))
    {
        echo "updated";
    }
    else
    {
        echo "not updated".$conn->error;
    }

}

function deleteData($tablename,$fname,$conn)
{
    $sqlstr="DELETE FROM $tablename WHERE fnam='$fname'";
    if($conn->query($sqlstr))
    {
echo "deleted";
    }
    else{
        echo "not deleted".$conn->error;
    }
}
function closecon($conn){
    $conn->close();
}

}



?>