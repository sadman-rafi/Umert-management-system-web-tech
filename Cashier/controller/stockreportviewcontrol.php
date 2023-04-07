<?php 
 include ("../model/Cashiermodel.php");
 $proname=$catagory=$quantity=$price=$proid="";
      
         
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
     if(isset($_POST["search"]))
{
     $mydb=new DB();
    $conobj=$mydb->opencon();
    
    $mydata=$mydb->searchstk($conobj, "stockreport",$_POST["proid"]);
    if($mydata->num_rows > 0)
    {

    
        while($row=$mydata->fetch_assoc())
        {
         $proname=$row["proname"];
         $catagory=$row["catagory"];
         $quantity=$row["quantity"];
         $price=$row["price"];
         $proid=$row["proid"];
         

        }
    

    }
    else{
        echo "no data found";
    }
    


   


    
      
    


}
if(isset($_POST["update"]))
{
    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydb->updatestk("stockreport",$_POST["proname"],$_POST["CATAGORY"],$_POST["Quantity"],$_POST["price"],$_POST["PRODUCT"],$conobj);

}

if(isset($_POST["delete"]))
{

    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydb->deletestk("stockreport",$_POST["proid"],$conobj);

}




      ?>