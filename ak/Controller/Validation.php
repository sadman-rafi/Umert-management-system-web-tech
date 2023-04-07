<?php

    $name = $email =$un=$gender=$pass=$Cpass=$dob="";
    
    $UploadConfirmation = "";
    $target_file="";

    
    $nameErr =$emailErr=$unErr=$genderErr=$passErr=$CpassErr=$dobErr=$pictureErr="";
    if (($_SERVER["REQUEST_METHOD"] == "POST"))
    {
         $name_count = $_POST["name"];
         $username_count=$_POST["un"];
         $Name = $_POST['name'];
         $Email= $_POST['email'];
         $Username= $_POST['un'];
         $Password = $_POST['pass'];
        $Gender =$_POST['gender'];

         
          if (empty($_POST["name"])) 
        {
            $nameErr = "Name is required";
        } 
        else {
            $name = test_Input($_POST["name"]);
            if ((!preg_match("/^[a-zA-Z-'. ]*$/", $name)) or (str_word_count($name_count) > 2)) {
                $nameErr = "At least two words and Alphabets only";
            }
        }

         if (empty($_POST["email"])) 
        {
            $emailErr = "Email is required";
        } 


        else 
        {
            $email = test_Input($_POST["email"]);
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
         {
            $emailErr= "Invalid Email !";
        }
    }
    if (empty($_POST["gender"])) 
    {
    $genderErr = "Gender is required";
    } 
    else 
    {
    $gender = test_input($_POST["gender"]);
     }
     
     if (empty($_POST["pass"])) 
    {
    $passErr = "Please enter password";
    } 
    else 
    {
    $pass = test_input($_POST["pass"]);

      if (strlen($_POST["pass"]) < 8) {
        $passErr = "Your Password Must Contain At Least 8 Digits !"."<br>";
    }
    elseif(!preg_match("#[0-9]+#",$_POST["pass"])) {
        $passErr = "Your Password Must Contain At Least 1 Number !"."<br>";
    }
    elseif(!preg_match("#[A-Z]+#",$_POST["pass"])) {
        $passErr= "Your Password Must Contain At Least 1 Capital Letter !"."<br>";
    }
    elseif(!preg_match("#[a-z]+#",$_POST["pass"])) {
        $passErr= "Your Password Must Contain At Least 1 Lowercase Letter !"."<br>";
    }
    elseif(!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_POST["pass"])) {
        $passErr= "Your Password Must Contain At Least 1 Special Character !"."<br>";
    }





      }


      if (empty($_POST["Cpass"])) 
    {
    $CpassErr = "Please re-enter password";
    } 
    
    else 
    {
    $Cpass = test_input($_POST["Cpass"]);
       

      if (strlen($_POST["Cpass"]) < 8)

      {
        $CpassErr = "Your Password Must Contain At Least 8 Digits !"."<br>";
    }
    elseif(!preg_match("#[0-9]+#",$_POST["Cpass"])) {
        $CpassErr = "Your Password Must Contain At Least 1 Number !"."<br>";
    }
    elseif(!preg_match("#[A-Z]+#",$_POST["Cpass"])) {
        $CpassErr= "Your Password Must Contain At Least 1 Capital Letter !"."<br>";
    }
    elseif(!preg_match("#[a-z]+#",$_POST["Cpass"])) {
        $CpassErr= "Your Password Must Contain At Least 1 Lowercase Letter !"."<br>";
    }
    elseif(!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_POST["Cpass"])) 
    {
        $CpassErr= "Your Password Must Contain At Least 1 Special Character !"."<br>";
    }

        

          elseif( $pass !=$Cpass)
          {
            $CpassErr="Re-type password must be matched with password";
          }
       }




      if (empty($_POST["un"])) 
    {
    $unErr = "Enter user name";
    }

    else 
    {
    $un = test_input($_POST["un"]);


         if ( (str_word_count($username_count) > 2)) 
         {
                $unErr = "At least two characters and Alphabets only";
            }


          elseif (!preg_match('/^[A-Za-z0-9\s.-._]+$/', $un))
          {
            $unErr= "User Name must contain alpha numeric characters, period, dash or underscore only!";
          }

       }
       if (empty($_POST["dob"])) 
    {
    $dobErr = "dob is required";
    } 
    else 
    {
    $dob = test_input($_POST["dob"]);
     }


       $insertion = "";
   if($nameErr =="" && $emailErr==""&&$unErr==""&&$genderErr==""&&$passErr==""&&$CpassErr==""&&$dobErr=="")
     {
        if (file_exists("Model/Information.json"))
             {
            $current_content = file_get_contents("Model/Information.json");
            $array_content = json_decode($current_content, true);
            $new_content = array(
                'Name' => $_POST["name"],
                'Email' => $_POST["email"],
                'Username' => $_POST["un"],
                'Password' => $_POST["pass"],
                'Gender' => $_POST["gender"],
                'DOB' => $dob,
                );
            $array_content[] = $new_content;
            $final_content = json_encode($array_content, JSON_UNESCAPED_SLASHES);
            if (file_put_contents("Model/Information.json", $final_content)) {
                $insertion = "Registration done successfully!";
            }
        }
        else 
        {
            $insertion = "JSon File Does not Exist";
        }
    }
 }

  function test_Input($data)
    {
        $information = trim($data);
        $information = stripslashes($data);
        $information = htmlspecialchars($data);
        return $data;
    }

?>