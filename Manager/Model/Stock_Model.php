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

    function InsertData($proname,$quan,$price,$catagory,$tablename,$conn){
        $sqlstr="INSERT INTO $tablename (proname,quantity,price,catagory) VALUES ('$proname',$quan,$price,'$catagory')";
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

    function SearchID($tablename,$conn,$proid){

        $sqlstr="SELECT * FROM $tablename WHERE proid=$proid";
        $results=$conn->query($sqlstr);
        
         
        return $results;  
    }
    function SearchName($tablename,$conn,$proname){

        $sqlstr="SELECT * FROM $tablename WHERE proname='$proname'";
        $results=$conn->query($sqlstr);
        
         
        return $results;  
    }
    function SearchCat($tablename,$conn,$catagory){

        $sqlstr="SELECT * FROM $tablename WHERE catagory='$catagory'";
        $results=$conn->query($sqlstr);
        
         
        return $results;  
    }

   


    function updateData($tablename,$conn,$fname,$lname,$age,$gen,$edu,$exp,$cont,$email,$pass,$preadd,$peradd){
        $sqlstr="UPDATE $tablename SET fname='$fname', lname='$lname', age=$age,gen='$gen',edu='$edu',exp=$exp, cont=$cont,email='$email',pass='$pass',preadd='$preadd',peradd='$peradd' WHERE mid=$mid";
        if($conn->query($sqlstr)===TRUE){
        
            echo "Data Updated";
            
            
            }
            else{
                echo "cant update".$conn->error;
            }

    }

    function deleteData($tablename,$conn,$proid){
        $sqlstr="DELETE FROM $tablename WHERE proid=$proid";
        if($conn->query($sqlstr)===TRUE){
        
            echo "<strong>Data Deleted Successfully";
            
            
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