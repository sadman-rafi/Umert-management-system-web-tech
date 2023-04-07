 <?php include('../controller/registrationcontroller.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/regis.css">
  <title></title>
</head>
<body text="  White" bgcolor=" #FFFF00">
  <div clas="regim">
    <center>
    <img src="../img/regb.png">
  </center>
   
  </div>
  <div class="container">
  
  <center>


    
  
  <form action="" method="post" enctype="multipart/form-data" onsubmit="return formCheck()">

    <table>
      <h1 > registration form </h1>
      
      <tr>
        <td><label for="name">FIRST Name:</label></td>
        <td><input type="text" name="firstname" id="name"  placeholder="your name" onkeyup="checkfname()">
        <td>
                <p id="firstnameErr"></p>
            </td>
        <?php 
  echo $firstnameErr;
  ?></td>
      </tr>
      <tr>
        <td><label for="name">Last Name:</label></td>
        <td><input type="text" name="lastname" id="name"  placeholder="your name">
          <?php echo $lastnameErr;
        ?></td>
      </tr>
      <tr>
        <td><label for="email">Email:</label></td>
        <td><input type="text" name="email" id="email"  placeholder="your email">
        <?php 
  echo $emailErr;
  ?></td>
      </tr>
      <tr>
        <td><label for="age">Age:</label></td>
        <td><input type="number" name="age" id="email"  placeholder="your Yopur Age">
        <?php 
  echo $ageErr;
  ?></td>
      </tr>
     
      <tr>
        <td><label for="password">Password:</label></td>
        <td><input type="password" name="pass" id="password" >
        <?php 
  echo $passErr;
  ?></td>
      </tr>
      <tr>
        <td><label for="password">Confirm Password:</label></td>
        <td><input type="password" name="" id="password" >
 </td>
      </tr>
      <tr>
        <td><label for="phoneNumber">Phone Number:</label></td>
        <td><input type="number" name="contNo" id="phoneNumber" >
        <?php 
  echo $contNoErr;
  ?></td>
      </tr>
      <tr>
        <td><label for="gender">Gender:</label></td>
        <td>Male: <input type="radio" name="gender" value="male">
          Female: <input type="radio" name="gender" value="female">
          Other: <input type="radio" name="gender" value="other">
        <?php 
  echo $genderErr;
  ?></td>
      </tr>
      <tr>
        <td><label for="language">language</label></td>
        <td>
          <select name="language" id="language">
            <option value="">Select language</option>
            <option value="English">English</option>
            <option value="Spanish">Spanish</option>
            <option value="Hindi">Hindi</option>
            <option value="Arabic">Arabic</option>
            <option value="Russian">Russian</option>
          </select>
        </td>
      </tr>
      <tr>
        <tr>
        <td><label for="language">POSITION</label></td>
        <td>
          <select name="position" id="position">
            <option value="">Select POST</option>
            <option value="ADMIN">ADMIN</option>
            <option value="Cashier">Cashier</option>
            <option value="Manager">Manager</option>
            <option value="Supplier">Supplier</option>
            
          </select>
        </td>
      
      <tr>
        <td><label for="about">About:</label></td>
        <td><textarea name="about" id="about" placeholder="Write about yourself..."></textarea></td>
      </tr>
      <tr>
        <td colspan="2"><button name="Submit">Submit</button></td>
      </tr>
      

       <tr>
          
           <td><p>If You Have Account ? <a href="login.php">Login</a></p></td>
        </tr>
    </table>
  </form>



 
  

  </center>
</div>
 
<script type="text/JavaScript" src="../js/.registration.js"></script>
</body>
</html>

