<?php
class DB{
    function opencon(){
        $DBHostname="localhost";
        $DBUsername="root";
        $DBpass="";
        $DBName="easystore";
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

    function SearchID($tablename,$conn,$proid){

        $sqlstr="SELECT * FROM $tablename WHERE id=$proid";
        $results=$conn->query($sqlstr);
        
         
        return $results;  
    }
    
   


   
   function closecon($conn){
    $conn->close();
   }

}
?>