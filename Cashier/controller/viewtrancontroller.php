<?php 

 include ("../model/Cashiermodel.php");
 $proname=$catagory=$quantity=$price=$proid=$sid="";
      
         
/*
      $old_data = file_get_contents("../file/sellrecorde.json");

      $array_data = json_decode($old_data,true);

     
     foreach ( $array_data as $value) {

      ?>

      <tr>
        

        <td style="border: 1px solid gray"><?php echo $value['name']; ?></td>
        <td style="border: 1px solid gray"><?php echo $value['CATAGORY']; ?></td>
        <td style="border: 1px solid gray"><?php echo $value['price']; ?></td>
        <td style="border: 1px solid gray"><?php echo $value['Quantity']; ?></td>
        <td style="border: 1px solid gray"><?php echo $value['PRODUCT']; ?></td>
        <td style="border: 1px solid gray"><?php echo $value['Supplier']; ?></td>



      </tr>

      <?php
        
       

     }



        */
     if(isset($_POST["fetch"]))
{


    $mydb=new DB();
    $conobj=$mydb->opencon();
    
    $mydata=$mydb->fetchDatat($conobj, "purchaserecord");
    if($mydata->num_rows > 0)
    {

    
        while($row=$mydata->fetch_assoc())
        {
          echo '<br><table id="table3" border="1"  align="left" cellspacing="2" cellpadding="10" >';
     
         
         echo "<td ><strong > Name :".$row["proname"]."</strong></td><br><br>";
         echo"<td><strong>CATAGORY:".$row["catagory"]."</strong></td>";
         echo"<td><strong>Quantyty :".$row["quantity"]."</strong></td>";
         echo"<td><strong>Price :".$row["price"]."</strong></td></tr>";
         echo"<td><strong>Product id : ".$row["proid"]."</strong></td>";
         echo"<td><strong>Suplier id :".$row["sid"]."</strong></td>";
       
         echo "</tr>";
         echo "</table>";
        }
    

    }
    else{
        echo "no data found";
    }
    


}


   
         

      
/*
      ?>
      <tr>
        

        <td style="border: 1px solid gray"><?php echo $row['name']; ?></td>
        <td style="border: 1px solid gray"><?php echo $row['proname']; ?></td>
        <td style="border: 1px solid gray"><?php echo $row['price']; ?></td>
        <td style="border: 1px solid gray"><?php echo $row['quantity']; ?></td>
        <td style="border: 1px solid gray"><?php echo $row['catagory']; ?></td>
        <td style="border: 1px solid gray"><?php echo $row['proid']; ?></td>
        <td style="border: 1px solid gray"><?php echo $row['sid']; ?></td>

      </tr>

      <?php
        
       
*/
     



        


      ?>