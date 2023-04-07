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

    function InsertData($fname,$lname,$age,$gen,$edu,$exp,$cont,$email,$pass,$preadd,$peradd,$tablename,$conn){
        $sqlstr="INSERT INTO $tablename (fname,lname,age,gen,edu,exp,contNo,email,pass,preadd,peradd) VALUES ('$fname','$lname',$age,'$gen','$edu',$exp,$cont,'$email','$pass','$preadd','$peradd')";
        if($conn->query($sqlstr)===TRUE){
        
        echo "Data Inserted";
        
        
        }
        else{
            echo "cant insert".$conn->error;
        }

    }

    function FetchData($tablename,$conn){
        $sqlstr="SELECT * from $tablename";
        $results=$conn->query($sqlstr);
        
         
        return $results;  
        
    }

    function SearchData($tablename,$conn,$mid){

        $sqlstr="SELECT * FROM $tablename WHERE mid=$mid";
        $results=$conn->query($sqlstr);
        
         
        return $results;  
    }

    function searchID($tablename,$conn,$mid,$pass){

        $sqlstr="SELECT fname,lname FROM $tablename WHERE mid=$mid AND pass='$pass'";
        $results=$conn->query($sqlstr);
        
         
        return $results;  
    }
    function SearchEmail($tablename,$conn,$email){

        $sqlstr="SELECT * FROM $tablename WHERE email='$email'";
        $results=$conn->query($sqlstr);
        
         
        return $results;  
    }



    function UpdateData($mid,$fname,$lname,$age,$gen,$edu,$exp,$cont,$email,$preadd,$peradd,$tablename,$conn){
        $sqlstr="UPDATE $tablename SET fname='$fname', lname='$lname', age=$age,gen='$gen',edu='$edu',exp=$exp, contNo=$cont,email='$email',preadd='$preadd',peradd='$peradd' WHERE mid=$mid";
        if($conn->query($sqlstr)===TRUE){
        
            echo "Data Updated";
            
            
            }
            else{
                echo "cant update".$conn->error;
            }

    }

    function deleteData($tablename,$conn,$mid){
        $sqlstr="DELETE FROM $tablename WHERE mid='$mid'";
        if($conn->query($sqlstr)===TRUE){
        
            echo "Data Deleted";
            
            
            }
            else{
                echo "cant delete".$conn->error;
            }

    }
   function closecon($conn){
    $conn->close();
   }

}
?>