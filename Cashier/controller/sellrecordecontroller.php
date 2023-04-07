<?php 

    include ("../model/cashiermodel.php"); 
$name=$catagory=$quantity=$price=$proid=$sid="";
//$firstnameErr=$lastnameErr=$ageErr=$genderErr=$contNoErr=$emailErr=$cidErr=$passErr="";
$flag=0;
$filled=FALSE;

//session_start();
/*if(isset($_SESSION["cid"])){
  header("location: ../View/login.php");
};
*/
if(isset($_POST["submit"]))
{
    $name=$_POST["name"];
    $catagory=$_POST["CATAGORY"];
    $quantity=$_POST["Quantity"];
    $price=$_POST["price"];
    $proid=$_POST["PRODUCT"];
    $sid=$_POST["sid"];
if(empty($name) || empty($catagory) || 
empty($quantity) || empty($price)|| empty($proid) )
{
    echo "please insert all field";
}
  /*if (($_SERVER["REQUEST_METHOD"] == "POST")&&(isset($_POST["Submit"]))){
  //check data from registration forms fields.
  //if any field is empty or less then show error

    if(empty($_POST["firstname"]) || (strlen($_POST["firstname"])<3))
    {
        $firstnameErr="* required! First Name must be grater then 4 char";
    }else
    {
      $fname = $_POST["firstname"];
      $_SESSION["firstname"] = $fname;
      $flag++;
    }
    echo "<br>";
 if(empty($_POST["lastname"]) || (strlen($_POST["lastname"])<3))
    {
        $lastnameErr="* Last Name must be grater than 4 char ";
    }
    else
    { 
      $lname=$_POST["lastname"];
       $_SESSION["lastname"] = $lname;
        $flag++;
    }
    echo "<br>";
     if(empty($_POST["age"]) || (($_POST["age"])<10))
    {
        $ageErr="* Age must be grater than 10";
    }
    else
    {
           $age=$_POST["age"];
          $_SESSION["age"] =  $age;
          $flag++;
    }
    echo "<br>";
   if(isset($_POST["gender"]))
    {
        $gen = $_POST['gender'];
        $_SESSION["gender"] = $gen;
        $flag++;
    }
    else
    { 
        $genderErr= "* Your have not selected any Gender";
 
    }
    echo "<br>";
      /*
          if(empty($_POST["cid"]) || (strlen($_POST["cid"])!=5))
 
    {
        $sidErr="* Supplier Id must be of 5 numbers";
    }
    else
    {
       $sid=$_POST["sid"];
      $_SESSION["cid"] = $_POST["cid"];
        $flag++;
    }

    echo "<br>";
      */ 
    /*
    if(empty($_POST["contNo"]) || (strlen($_POST["contNo"])!=11))
    {
        $contNoErr="* Enter valid contNo Number ";
    }
    else
    {
         $contNo=$_POST["contNo"];
        $_SESSION["contNo"] = $_POST['contNo'];
        $flag++;
    }
    echo "<br>";

    if(empty($_POST["email"]) || ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_POST["email"]))
    {
        $emailErr="* Enter valid Email Address ";
    }
    else
    {
        $email= $_POST['email'];
      $_SESSION["email"] = $_POST['email'];
        $flag++;
    }

    echo "<br>";
    if(empty($_POST["pass"]) ||(strlen($_POST["pass"])<5))
    {
        $passErr = "* please enter a valid password and this field is required";
  }
    else
    {   
         $pass=$_POST["pass"];
             $_SESSION["pass"] = $_POST['pass'];
         $flag++;
    }
      echo"<br>";
      
      if($filled===FALSE){  

               $filled=TRUE;
                //$flag++;
              }

*/
  else{
    // code...
  
    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydb->sellrecord($name,$catagory,$quantity,$price,$proid,$sid,"sellrecord",$conobj);
    $mydb->closecon($conobj);
   
   }/*else{

    $regErr ="please enter valid product";
}*/
  }



  ?>