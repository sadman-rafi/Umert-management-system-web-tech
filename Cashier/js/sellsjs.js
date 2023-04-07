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
 var proname=document.forms["sellsfrom"]["name"].value;  
   
    if(proname==null || proname=="" )
    {
        alert("proname can't be left blank");
        return false;
    }

    var CATAGORY=document.forms["sellsfrom"]["CATAGORY"].value;
    if(CATAGORY==null || CATAGORY=="")
    {
        alert("CATAGORY is mandatory");
        return false;
    }var Quantity=document.forms["sellsfrom"]["Quantity"].value;
    if ( Quantity.length<7) {
       alert("Quatytity is mandatory");
        return false;

    } var price =document.forms["sellsfrom"]["price"].value;
    if (price<0 || price >500 ) {
      alert("not in range price ");
        return false;

    } var PRODUCT=document.forms.["sellsfrom"]["PRODUCT"].value;
    if (PRODUCT<3) {

      alert(" PRODUCT must be up of 3 ");
        return false;


    }
    var sid=document.forms.["sellsfrom"]["sid"].value;
    if (sid<3) {

      alert(" id must be up of 3 ");
        return false;


    }

    else
    {
        return true;
    }

}