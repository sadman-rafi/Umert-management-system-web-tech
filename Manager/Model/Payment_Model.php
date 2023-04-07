<?php
class DB{
    function opencon(){
        $DBHostname="localhost";
        $DBUsername="root";
        $DBpass="";
        $DBName="easystorem";
        $conn=new mysqli($DBHostname,$DBUsername,$DBpass,$DBName);
        if($conn->connect_error){
            echo "Can't create connection object".$conn->connect_error;

        }
        return $conn;

    }

    

    function FetchData($tablename,$conn){
        $sqlstr="SELECT * from $tablename";
        $results=$conn->query($sqlstr);
        
         
        return $results;  
        
    }

    function SearchID($tablename,$conn,$id,$post){

        $sqlstr="SELECT * FROM $tablename WHERE id=$id AND post='$post'";
        $results=$conn->query($sqlstr);
        
         
        return $results;  
    }
    
   

    function UpdateData($id,$post,$amount,$date,$tablename,$conn){
        $sqlstr="UPDATE $tablename SET payment='$amount',date='$date' WHERE id=$id AND post='$post'";
        if($conn->query($sqlstr)===TRUE){
        
            echo "<strong>Payment Successfull !";
            
            
            }
            else{
                echo "cant update".$conn->error;
            }

    }
   
   function closecon($conn){
    $conn->close();
   }

}
?>