function checkname()
{
    var namevalue = document.getElementById("fname").value;
    var fname_p= /^[A-Za-z]+$/;
    var fc= fname_p.test(namevalue);
    if(!isNaN(namevalue) )
    {
        document.getElementById("nameerror").innerHTML="Name can't be a number";
        return false;
    }
    else if(isNaN(namevalue) && fc)
    {
        document.getElementById("nameerror").innerHTML="Name is correct";
        return true;
    }
}
function checklname()
{
    var namevalue = document.getElementById("lname").value;
    if(!isNaN(namevalue))
    {
        document.getElementById("lnameerror").innerHTML="Name can't be a number";
        return false;
    }
    
    else
    {
        document.getElementById("lnameerror").innerHTML="Name is correct";
        return true;
    }
}

function agecheck()
{
    var agevalue = document.getElementById("age").value;
    if(isNaN(agevalue) )
    {
        document.getElementById("ageerror").innerHTML="Age can't be a Alpahbet";
        return false;
    }
    else if( (agevalue.toString().length >=2))
    {
        document.getElementById("ageerror").innerHTML="Age is correct";
        return true;
    }
}

function passcheck()
{
    var pvalue =document.getElementById("pass").value;
    if( pvalue.lengh < 8)
    {
        document.getElementById('passvalue').innerHTML="Pass is invalid";
        return true;
    }
    else if(pvalue.search(/[a-z]/i) < 0 )
    {
        document.getElementById('passvalue').innerHTML="Pass is invalid";
        return false;
    }
    else if(pvalue.search(/[0-9]/) < 0 )
    {
        document.getElementById('passvalue').innerHTML="Pass is invalid";
        return false;
    }
    else 
    {
        document.getElementById('passvalue').innerHTML="Pass is valid";
        return true;
    }
}

function propurcheck()
{

    var proname=document.getElementById("proname").value;
    var catagory=document.getElementById("catagory").value;
    var quan=document.getElementById("quan").value;
     var price=document.getElementById("price").value;
     var proid=document.getElementById("proid").value;
     var sid=document.getElementById("sid").value;

     
    if(proname.length<3 || catagory.length<3 || quan<1 || price<1 ||proid.length<3 ||sid.length<3)
    {
        alert("Enter Valid Data for all Field!!");
    }
}

function paycheck()
{

    var id=document.getElementById("id").value;
    var post=document.getElementById("post").value;
    var amount=document.getElementById("amount").value;
     var date=document.getElementById("date").value;
    

     
    if(date.length<3 || post.length<3 || id<3 || amount<1 )
    {
        alert("Enter Valid Data for all Field!!");
    }
}
function regcheck()
{
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
  var res = patt.test(email);
    var fname=document.getElementById("fname").value;
    var lname=document.getElementById("lname").value;
    var age=document.getElementById("age").value;
     var edu=document.getElementById("edu").value;
     var exp=document.getElementById("exp").value;
     var cont=document.getElementById("cont").value;
     var email=document.getElementById("email").value;
     var preadd=document.getElementById("preadd").value;
     var peradd=document.getElementById("peradd").value;
     var pass=document.getElementById("pass").value;
    if(fname.length<3 || lname.length<3 || age<15 || edu.length<3 ||exp<1 ||cont.length<11 ||!res ||preadd.length<3 ||peradd.length<3 || pass.length<7)
    {
        alert("Enter Valid Data for all Field!!");
    }
    
}
function addprocheck()
{

    var proname=document.getElementById("proname").value;
    var catagory=document.getElementById("catagory").value;
    var quan=document.getElementById("quan").value;
     var price=document.getElementById("price").value;

     
    if(proname.length<3 || catagory.length<3 || quan<1 || price<1)
    {
        alert("Enter Valid Data for all Field!!");
    }
}

function fetchuser()
{
var proid=document.getElementById("proid").value;
var xttp= new XMLHttpRequest();
xttp.onreadystatechange = function (){
    if(this.readyState==4 && this.status==200)
    {
        document.getElementById("message").innerHTML=this.responseText;
    }
};


xttp.open("POST","EasyStore/Manager/Control/Ajax.php",true);
xttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xttp.send("proid="+proid);



}
  