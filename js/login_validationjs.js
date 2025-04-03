
var XMLHttpRequestObject=false;

function display(user)
{
	var d=document.pay;
  if(user=="")
  {
              d.email.focus();
			  d.email.style.border="white solid 1px";
	          document.getElementById('email_message1').innerHTML="";
  
  }else 
  
 
  {

if(window.XMLHttpRequest)
{
XMLHttpRequestObject=new XMLHttpRequest();
}
else if(window.ActiveXObject)
{
XMLHttpRequestObject=new ActiveXObject("Microsoft.XMLHTTP");
}

XMLHttpRequestObject.onreadystatechange=function()
{
if (XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status==200)
{
       document.getElementById("email").focus();
	  // alert(XMLHttpRequestObject.responseText);
       if(XMLHttpRequestObject.responseText=='This Email already exists')
	   {
           document.getElementById("reg_submit").disabled=true;			
       }
        else
		{
			 document.getElementById("reg_submit").disabled=false;
	    }
document.getElementById("email_message1").innerHTML=XMLHttpRequestObject.responseText;
 }
}
//alert("checkuser.php?id="+user);
XMLHttpRequestObject.open("GET","checkuser?id="+user,true);
XMLHttpRequestObject.send();
  }
}

function displaymentioncheck(val)
{
	var d=document.pay;
	var con=11;
	//alert(val);
  if(val=="")
  {
              d.mention.focus();
			  d.mention.style.border="white solid 1px";
	          document.getElementById('mention_message').innerHTML="";
  
  }else{
	      

if(window.XMLHttpRequest)
{
XMLHttpRequestObject=new XMLHttpRequest();
}
else if(window.ActiveXObject)
{
XMLHttpRequestObject=new ActiveXObject("Microsoft.XMLHTTP");
}

XMLHttpRequestObject.onreadystatechange=function()
{
if (XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status==200)
{

document.getElementById("mention").focus();
if(XMLHttpRequestObject.responseText=='This Profile Url already exists'){
document.getElementById("reg_submit").disabled=true;			
}
else{document.getElementById("reg_submit").disabled=false;}
document.getElementById("mention_message").innerHTML=XMLHttpRequestObject.responseText;
}
}
//alert("checkuser.php?id="+user);
XMLHttpRequestObject.open("GET","mentioncheck?id="+con+"&mention="+val,true);
XMLHttpRequestObject.send();
  }
}


function forgotvalidate()
{

  var d=document.forgot_pass;
	 var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
	   var feml=d.foremail.value;
	   
	    if(feml=='')   
   {
	   //document.
     //alert("Enter your first name");#048396 solid 1px
	 d.foremail.value='';
     d.foremail.focus();
	 d.foremail.style.border="white solid 1px";
	// document.getElementById('logemail_message').innerHTML="<font color='red'>Enter your email </font>";
     return false;
   }
	   
	   
	   
	   feml = feml.replace(/^\s+|\s+$/g,'');
     
	  if(feml=='' )
       {
              // alert('Please enter your email ');
			     d.foremail.value='';
                 d.foremail.focus();
			     d.foremail.style.border="white solid 1px";
	            // document.getElementById('logemail_message').innerHTML="<font color='red'>Enter your email </font>";
               return false;
       }
	   
	   if(feml.match(filter))
	   {
		   d.foremail.style.border="white solid 1px";
	      // document.getElementById('logemail_message').innerHTML="";
	      return true;
	   }
	   else{
	        // alert("Please enter valid email address");
	          d.foremail.focus();
			  d.foremail.style.border="white solid 1px";
	         // document.getElementById('logemail_message').innerHTML="<font color='red'>Enter your valid email </font>";
	          return false;

	   }
       
       return true;
}

function enableform()
{
//alert(document.getElementById("loginform").style.display);
if(document.getElementById("loginform").style.display=="none")
					document.getElementById("loginform").style.display = "inline";
else
					document.getElementById("loginform").style.display = "none";
}




function login_validate()
{
  if(logemail_check())
						{
						  if(logpass_check())
						  {
                     			    return true;
						  }
						}
						return false;

}


function logemail_check()
{

       var d=document.pay1;
	 var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
	   var eml=d.uemail.value;
	   
	    if(eml=='' || eml=='Email')   
   {
	   //document.
     //alert("Enter your first name");#048396 solid 1px
	 d.uemail.value='';
     d.uemail.focus();
	 d.uemail.style.border="white solid 1px";
	 document.getElementById('logemail_message').innerHTML="<font color='red'>Enter your email </font>";
     return false;
   }
	   
	   
	   
	   eml = eml.replace(/^\s+|\s+$/g,'');
     
	  if(eml=='' || eml=='Email')
       {
              // alert('Please enter your email ');
			     d.uemail.value='';
                 d.uemail.focus();
			     d.uemail.style.border="white solid 1px";
	             document.getElementById('logemail_message').innerHTML="<font color='red'>Enter your email </font>";
               return false;
       }
	   
	   if(eml.match(filter))
	   {
		   d.uemail.style.border="white solid 1px";
	       document.getElementById('logemail_message').innerHTML="";
	      return true;
	   }
	   else{
	        // alert("Please enter valid email address");
	          d.uemail.focus();
			  d.uemail.style.border="white solid 1px";
	          document.getElementById('logemail_message').innerHTML="<font color='red'>Enter a valid email </font>";
	          return false;

	   }
       
       return true;
}

function logpass_check()
{
 var d=document.pay1;
 var ph=d.upass.value;
 	    if(ph=='' || ph =='Password')   
   {
	   
	 d.upass.value='';
     d.upass.focus();
	 d.upass.style.border="white solid 1px";
	 document.getElementById('logemail_message').innerHTML="<font color='red'>Enter your password </font>";
     return false;
   }
	 
       return true;

}








function validate()
{
var d=document.pay;

if(first_check(2))
 {
    if(last_check(2))
        { 
		    if(email_check(2))
			    {
					if(pass_check(2))
						{
						   if(repass_check(2))
							   {
						          if(mention_check(2))
						             {
							           if(termcond_check(2))
							               {
                     			           return true;
							               }
						             }
						     }
					  }
				
               }
 
 }      }

return false;

}

function first_check(val)
{
	//alert(val);
   var d=document.pay;
   var f_name=d.fname.value;
   //var fname=trim(fname);
   var letters = /^[a-zA-Z ]+$/;
  f_name = f_name.replace(/^\s+|\s+$/g,'');
  
  if(val==2){
   if(f_name=='First Name:'||f_name=='First Name'||f_name=='')   
   {
	   //document.
     //alert("Enter your first name");#048396 solid 1px
	 d.fname.value='';
     d.fname.focus();
	 d.fname.style.border="white solid 1px";
	 document.getElementById('first_message').innerHTML="<font color='red'>Enter your first name</font>";
     return false;
   }
   
    if(f_name.match(letters))
	   {
		    d.fname.style.border="white solid 1px";
	        document.getElementById('first_message').innerHTML="";
         return true;
	   }
	   else{
	   //alert("please enter only alphabets");
	    d.fname.value='';
	    d.fname.focus();
	    d.fname.style.border="white solid 1px";
	    document.getElementById('first_message').innerHTML="<font color='red'>Enter only alphabets</font>";
	   return false;
	   }
  }
	
	
	return true;
}

function last_check(val)
{
	//alert("bye");
	var d=document.pay;
    var l_name=d.lname.value;
	var letters = /^[a-zA-Z ]+$/;
    l_name = l_name.replace(/^\s+|\s+$/g,'');
	
	if(val==2){
	 if(l_name=='Last Name:'||l_name=='Last Name'||l_name=='')   
   {
	   //document.
     //alert("Enter your first name");#048396 solid 1px
	 d.lname.value='';
     d.lname.focus();
	 d.lname.style.border="white solid 1px";
	 document.getElementById('last_message').innerHTML="<font color='red'>Enter your last name</font>";
     return false;
   }

	if(l_name!=''){
	   if(l_name.match(letters))
	   {
		    d.lname.style.border="white solid 1px";
	        document.getElementById('last_message').innerHTML="";
         return true;
	   }
	   else{
	   //alert("please enter only alphabets");
	   d.lname.value='';
	   d.lname.focus();
	   d.lname.style.border="white solid 1px";
	   document.getElementById('last_message').innerHTML="<font color='red'>Enter only alphabets</font>";
	   return false;
	   }
	}
	}
	return true;
}
function email_check(val)
{
//alert("ok")
       var d=document.pay;
	 var emailRegex = /[_+a-zA-Z0-9-]+(\.[_+a-zA-Z0-9-])*@[_+a-zA-Z0-9-]+(\.([a-zA-Z]{2,}))+/i;
	   var eml=d.email.value;
	    if(val==2){
	    if(eml=='' || document.getElementById('email_message1').innerHTML!='')   
			   {
				   //alert("ok2");
				   //document.
				 //alert("Enter your first name");#048396 solid 1px
				 d.email.value='';
				 d.email.focus();
				 d.email.style.border="white solid 1px";
				 document.getElementById('email_message1').innerHTML="<font color='red'>Enter your email </font>";
				 return false;
			   }

	   
		   if(emailRegex.test(eml))
		   {
			  
			   d.email.style.border="white solid 1px";
			   document.getElementById('email_message1').innerHTML="";
			  return true;
		   }
		   else
		   {
				//alert("ok");
				// alert("Please enter valid email address");
				  d.email.focus();
				  d.email.style.border="white solid 1px";
				  document.getElementById('email_message1').innerHTML="<font color='red'>Enter a valid email </font>";
				  return false;
		   }
		}
       return true;
		
}

function pass_check(val)
{
 var d=document.pay;
 var repas=d.repass.value;
 var ph=d.pass.value;
 //alert(ph);
  if(val==2){
 	    if(ph=='' || ph=='Password')   
   {
	   
	 d.pass.value='';
     d.pass.focus();
	 d.pass.style.border="white solid 1px";
	 document.getElementById('pass_message').innerHTML="<font color='red'>Enter password </font>";
     return false;
   }
	 else
	 {
     d.pass.focus();
	 d.pass.style.border="white solid 1px";
	 document.getElementById('pass_message').innerHTML="";
    return true;
	 }
  }
       return true;

}

function repass_check(val)
{
	//alert("ok");
 var d=document.pay;
 var repas=d.repass.value;
  if(val==2){
 	    if(repas=='' || repas=='Password'|| repas!=d.pass.value)   
   {//alert("ok");
     d.repass.focus();
	 d.repass.style.border="white solid 1px";
	 document.getElementById('repass_message').innerHTML="<font color='red'>Password not matched </font>";
     return false;
   }
   else
   {
	    //d.mention.focus();
	 d.repass.style.border="white solid 1px";
	 document.getElementById('repass_message').innerHTML="";
     return true;
	   
   }
  }
       return true;

}
function mention_check(val)
{ 
if(val==2){
 var d=document.pay;
 var mn=d.mention.value;
 
 if(mn=='' || document.getElementById("mention_message").innerHTML!='')   
   {
	   
	 d.mention.value='';
     d.mention.focus();
	 d.mention.style.border="white solid 1px";
	 document.getElementById('mention_message').innerHTML="<font color='red'>Enter Profile URL </font>";
     return false;
   }
 else 
   {
	 d.mention.style.border="white solid 1px";
	 document.getElementById('mention_message').innerHTML="";
     return true;
   }
	 
}return true;

}


function termcond_check()
{
	
 var d=document.pay;
 var termstat=d.termcond.checked;
  if(termstat)   
   {
	 d.repass.style.border="white solid 1px";
	 document.getElementById('term_message').innerHTML="";
    return true;
   }
   else
   {
     ////d.repass.value='';
     d.termcond.focus();
	 d.termcond.style.border="white solid 1px";
	 document.getElementById('term_message').innerHTML="<font color='red'>In order to use our services, you must agree to Terms of Service.</font>";
     return false;
   }
}



///////////////////////////////////////////
$(function(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);
$('.popup').show();
$('.close').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});

$('.x').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});
});

//////////////////////////////////////////////////////

function change_page(val)
{  
  var xmlhttp;
		  if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		  else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		  xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			document.getElementById("gallery").innerHTML=xmlhttp.responseText;
			}
		  }
		  //alert("pagechange?pageid="+val);
		 // return false;
		  xmlhttp.open("POST","pagechange?pageid="+val,true);
		  xmlhttp.send();
	
}

/////////////////////////////////////////////////////