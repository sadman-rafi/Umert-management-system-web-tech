
    // First name validation

       function checkfName(){
        var a = document.getElementById("fname").value;
        
        var format = /[0-9!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
        
    if(a==""){


        
        document.getElementById("fnameError").innerHTML="**First name can't be blank";
        document.getElementById("fnameError").style.color = "red";
        return false;
    }



    if(a.match(format)){
        document.getElementById("fnameError").innerHTML="**InValid";
        document.getElementById("fnameError").style.color = "red";
        return false;

    }

    if(a.length<3){
        document.getElementById("fnameError").innerHTML="**First name must be 3 character";
        document.getElementById("fnameError").style.color = "red";
        return false;
    }
    
    if(a.length>15){
        document.getElementById("fnameError").innerHTML="**First name must be less the 15 character";
        document.getElementById("fnameError").style.color = "red";
        return false;
    }
    if(a.length>2 && a.length<16 )
    {
        document.getElementById("fnameError").innerHTML="**Valid";
        document.getElementById("fnameError").style.color = "green";
        return true;
        
    }

    
        
    }

    // Last name validation

   function checklName(){

    var l = document.getElementById("lname").value;
        
    var format = /[0-9!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
    
if(l==""){


    
    document.getElementById("lnameError").innerHTML="**Last name can't be blank";
    document.getElementById("lnameError").style.color = "red";
    return false;
}



if(l.match(format)){
    document.getElementById("lnameError").innerHTML="**InValid";
    document.getElementById("lnameError").style.color = "red";
    return false;

}

if(l.length<3){
    document.getElementById("lnameError").innerHTML="**Last name must be 3 character";
    document.getElementById("lnameError").style.color = "red";
    return false;
}

if(l.length>15){
    document.getElementById("lnameError").innerHTML="**Last name must be less the 15 character";
    document.getElementById("lnameError").style.color = "red";
    return false;
}
if(l.length>2 && l.length<16 )
{
    document.getElementById("lnameError").innerHTML="**Valid";
    document.getElementById("lnameError").style.color = "green";
    return true;
    
}

   }


//    Email validation

//    function checkemail(){
//     var e = document.form.email.value;

//     if(e==""){


    
//         document.getElementById("emailError").innerHTML="**email can't be blank";
//         document.getElementById("emailError").style.color = "red";
//         return false;
//     }

//     if(e.indexOf('@')<=0){
//         document.getElementById("emailError").innerHTML="**Invalid @ position";
//         document.getElementById("emailError").style.color = "red";
//         return false;
//     }

//    }


//Phone number validation 

    function checkPhone(){
        var p = document.getElementById("phone").value;
        var format = /[A-Za-z!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
        if(p==""){


    
            document.getElementById("phoneError").innerHTML="**Phone can't be blank";
            document.getElementById("phoneError").style.color = "red";
            return false;
        }

        
        if(p.match(format)){
            document.getElementById("phoneError").innerHTML="**Only numbers are allowed!!";
            document.getElementById("phoneError").style.color = "red";
            return false;
        }

        

        if(p.length>10 && p.length<12 )
{
    document.getElementById("phoneError").innerHTML="**Valid";
    document.getElementById("phoneError").style.color = "green";
    return true;
    
}else{
    document.getElementById("phoneError").innerHTML="**Should be 11 disit!!";
    document.getElementById("phoneError").style.color = "red";
    return false;
}




    }












   //username validation

   function checkUName(){

    var u = document.getElementById("username").value;
        
    // var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
    
if(u==""){


    
    document.getElementById("unameError").innerHTML="**Username can't be blank";
    document.getElementById("unameError").style.color = "red";
    return false;
}



// if(u.match(format)){
//     document.getElementById("unameError").innerHTML="**Valid";
//     document.getElementById("unameError").style.color = "red";
//     return false;

// }

if(u.length<3){
    document.getElementById("unameError").innerHTML="**username must be 3 character";
    document.getElementById("unameError").style.color = "red";
    return false;
}

if(u.length>8){
    document.getElementById("unameError").innerHTML="**username must be less the 15 character";
    document.getElementById("unameError").style.color = "red";
    return false;
}
if(u.length>2 && u.length<9 )
{
    document.getElementById("unameError").innerHTML="**Valid";
    document.getElementById("unameError").style.color = "green";
    return true;
    
}

   }




// Image validation


   



    



    
    







    function formCheck() {

        if (checkfName() == true && checklName() == true && checkPhone() == true && checkUName() == true && checkImg() == true) {
            
            return true;
        }
        else
        {
    
            return false;
    
        }
    }


       
  