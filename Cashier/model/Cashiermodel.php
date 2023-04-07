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
function InsertData($fname,$lname,$age,$gen,$contNo,$email,$pass,$tablename,$conn)
{
       /*
   1	fname	
	2	lname	
	3	age	int(11)
	4	gen	varchar(100)
	5	contNo	int(11)	
	6	email	varchar(100)
	7	sid Primary	int(11)			No	None		AUTO_INCREMENT
	8	pass
    */
   
    $sqlstr="INSERT INTO $tablename (fnam,lname,age,gen,contNo,email,pass) VALUES 
    ('$fname','$lname',$age,'$gen',$contNo,'$email','$pass')";
    
    if($conn->query($sqlstr)===TRUE)
    {
    echo "Data Inserted";
    }
    else{
        echo "cant insert".$conn->error;
    }
}
function login($cid,$pass,$tablename,$conn)
{
$sqlstr="SELECT * FROM $tablename WHERE cid='$cid' && pass= '$pass'";
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
function sellrecord($name,$catagory,$quantity,$price,$proid,$sid,$tablename,$conn)
{
    $sqlstr="INSERT INTO $tablename (name,catagory,quantity,price,proid,sid) VALUES 
    ('$name','$catagory','$quantity','$price','$proid','$sid')";
    
    if($conn->query($sqlstr)===TRUE)
    {
        echo "data insert";
   
    }
    else{
        echo "cant insert".$conn->error;
    }
}
function purchaserecord($proname,$catagory,$quantity,$price,$proid,$sid,$tablename,$conn)
{
    $sqlstr="INSERT INTO $tablename (proname,catagory,quantity,price,proid,sid) VALUES 
    ('$proname','$catagory','$quantity','$price','$proid','$sid')";
    
    if($conn->query($sqlstr)===TRUE)
    {
        echo "data insert";
   
    }
    else{
        echo "cant insert".$conn->error;
    }
}
function stockreport($proname,$catagory,$quantity,$price,$proid,$tablename,$conn)
{
    $sqlstr="INSERT INTO $tablename (proname,catagory,quantity,price,proid) VALUES 
    ('$proname','$catagory','$quantity','$price','$proid')";
    
    if($conn->query($sqlstr)===TRUE)
    {
        echo "data insert";
   
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


function SearchID($conn,$tablename,$cid)
{
$sqlstr="SELECT * FROM $tablename WHERE cid='$cid'";
$results=$conn->query($sqlstr);
return $results;
}
function searchsell($conn,$tablename,$sid)
{
$sqlstr="SELECT * FROM $tablename WHERE sid='$sid'";
$results=$conn->query($sqlstr);
return $results;
}
function updatesell($tablename,$name,$catagory,$quantity,$price,$proid,$sid,$conn)
{
    $sqlstr="UPDATE $tablename SET name='$name',catagory='$catagory',quantity='$quantity',price='$price',proid='$proid',sid='$sid'  WHERE sid='$sid'";
     if($conn->query($sqlstr)===TRUE)
    {
        echo "updated";
    }
    else
    {
        echo "not updated".$conn->error;
    }
    
}

function deletesell($tablename,$sid,$conn)
{
    $sqlstr="DELETE  FROM $tablename WHERE sid='$sid'";
    if($conn->query($sqlstr)===TRUE)
    {
echo "deleted";
    }
    else{
        echo "not deleted".$conn->error;
    }
}
//stokereport
function searchstk($conn,$tablename,$proid)
{
$sqlstr="SELECT * FROM $tablename WHERE proid='$proid'";
$results=$conn->query($sqlstr);
return $results;
}
function updatestk($tablename,$proname,$catagory,$quantity,$price,$proid,$conn)
{
    $sqlstr="UPDATE $tablename SET proname='$proname',catagory='$catagory',quantity='$quantity',price='$price',proid='$proid'  WHERE proid='$proid'";
    if($conn->query($sqlstr)===TRUE)
    {
        echo "updated";
    }
    else
    {
        echo "not updated".$conn->error;
    }

}


function deletestk($tablename,$proid,$conn)
{
    $sqlstr="DELETE FROM $tablename WHERE proid='$proid'";
    if($conn->query($sqlstr)===TRUE)
    {
echo "deleted";
    }
    else{
        echo "not deleted".$conn->error;
    }
}
//purches
function searchpur($conn,$tablename,$sid)
{
$sqlstr="SELECT * FROM $tablename WHERE sid='$sid'";
$results=$conn->query($sqlstr);
return $results;
}
function updatepur($tablename,$proname,$catagory,$quantity,$price,$proid,$sid,$conn)
{
    $sqlstr="UPDATE $tablename SET name='$proname',catagory='$catagory',quantity='$quantity',price='$price',proid='$proid',sid='$sid'  WHERE sid='$sid'";
    if($conn->query($sqlstr)===TRUE)
    {
        echo "updated";
    }
    else
    {
        echo "not updated".$conn->error;
    }

}

function deletepur($tablename,$sid,$conn)
{
    $sqlstr="DELETE FROM $tablename WHERE sid='$sid'";
    if($conn->query($sqlstr)===TRUE)
    {
echo "deleted";
    }
    else{
        echo "not deleted".$conn->error;
    }
}
//transsection

function fetchDatat($conn,$tablename)
{
    $sqlstr="SELECT * FROM $tablename";
   $results= $conn->query($sqlstr);
return $results;

}


function closecon($conn){
    $conn->close();
}

}



?>