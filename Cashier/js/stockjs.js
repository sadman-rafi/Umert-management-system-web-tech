function validateform(){  
/*var proname=document.Stock.proname.value;  
//var password=document.Stock.password.value;
var CATAGORY=document.Stock.CATAGORY.value; 
var Quantity=document.Stock.Quantity.value; 
var price=document.Stock.price.value; 
if (proname==null || proname==""){  
  alert("product name can't be blank");  
  return false;  
}else if (CATAGORY==null || CATAGORY==""){  
  alert("CATAGORY name can't be blank");  
  return false;  
}else if(Quantity.length<15){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
else if(price.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
}  
*/


    var proname=document.getElementById("proname").value;
    var CATAGORY=document.getElementById("CATAGORY").value;
    //var Quantity=document.getElementById("Quantity").value;
    var price=document.getElementById("price").value;
    var PRODUCT=document.getElementById("PRODUCT").value;
   // var CATAGORY=document.forms["Stock"]["CATAGORY"].value;
   // var Quantity=document.forms["Stock"]["Quantity"].value; 
    //var price =document.forms["Stock"]["price"].value;
 //   var price=document.forms.["Stock"]["PRODUCT"].value;

    if(proname.length<3 )
    {
        alert("proname can't be left blank");
        return false;
    }


    if(CATAGORY==null || CATAGORY=="")
    {
        alert("CATAGORY is mandatory");
        return false;
    }
     /*if ( Quatytity.length<7) {
       alert("Quatytity is mandatory");
        return false;

    }*/
    
    if (price<0 || price >500 ) {
      alert("not in range price ");
        return false;

    }
     if (PRODUCT.length<3) {

      alert(" PRODUCT must be up of 3 ");
        return false;


    }
    

    else
    {
        return true;
    }




//var proname=document.getElementById("proname").value;
/*var CATAGORY=document.getElementById("CATAGORY").value;
var Quantity=document.getElementById("Quantity").value;
var price=document.getElementById("price").value;
var PRODUCT=document.getElementById("CPRODUCT").value;
*/
  /*if(proname.length<3)
    {
        alert("Enter Valid name for all Field!!");
    }*/
 /* if (CATAGORY==null || CATAGORY=="") {
     alert("Enter Valid catagorey for all Field!!");
    

  }
  if (Quantity.length<3) {
     alert("Enter Valid quantity for all Field!!");
    

  }
  if (price.length<0 || price.length >500) {
     alert("Enter Valid name for all Field!!");
    

  }if (PRODUCT==null || PRODUCT=="") {
     alert("fill for all Field!!");
    

  }
*/
    
}

