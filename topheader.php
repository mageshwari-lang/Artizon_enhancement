<script type="text/javascript">
function search1(str1)
{
	//alert(str1);
	//var str =document.getElementById('searchuser').value;
	var str1 =document.getElementById('searchbox').value;
//alert(str);
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
    document.getElementById("rightbar").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","search?q="+str1,true);
xmlhttp.send();
}
</script> 

<script type="text/javascript">
function setstatus(val,val1,str,str1)
{
	
	//alert(val+"/"+val1+"/"+str+"/"+str1);
	//return false;
	
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
		//alert("hi");
		//alert(xmlhttp.readyState);
		//alert(xmlhttp.status);
		search1(str1);
    document.getElementById('myDiv').innerHTML=xmlhttp.responseText;
    }
  }
 //alert(xmlhttp.responseText);
  //alert("status?mem_id="+val+"&fr_id="+val1+"&status="+str+"&this="+str1);
 // return false;
xmlhttp.open("GET","status?mem_id="+val+"&fr_id="+val1+"&status="+str+"&this="+str1,true);
xmlhttp.send();
}
</script>


    

<script>
function sponsor_requestresponse(val,val1)
{  
  var xmlhttp;
  var reqstatus=val1;
 
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
			document.getElementById("spo_req").innerHTML=xmlhttp.responseText;
			}
		  }
		 // alert("sponsorrequestresponse?nr="+val+"&request_status="+reqstatus);
		  //return false;
		  xmlhttp.open("POST","sponsorrequestresponse?nr="+val+"&request_status="+reqstatus,true);
		  xmlhttp.send();
	
} 
</script>
<!---End AjaxCode to sponsor request--->

<div id="header">
<nav class="navbar ">
  <div class="container-fluid">
    <div class="navbar-header" style="height:18px;">
      
	  <a href="<?php echo $fullpath;?>home" class="navbar-brand" ><img src="<?php echo $fullpath;?>images/Latest-Logo.png"  width="120" height="40"  alt="" /></a>
    </div>
    <ul class="nav navbar-nav" >
	<li class="search_box">
        <input name="searchbox" id="searchbox" type="text" class="search_input" placeholder="Search for People..."    onKeyUp="search1(this.value)"/>
        <input name="" type="button" class="search_button" value="Submit" onclick="search1()"/>
      </li>
      
	  <li><a href="<?php echo $fullpath;?><?php echo $_SESSION['mention'];?>/logout" class="home">Logout</a></li>
	  <li><a href="<?php echo $fullpath;?><?php echo $_SESSION['mention'];?>/profile" class="home">My Account</a></li>
	  <li><a href="<?php echo $fullpath;?><?php echo $_SESSION['mention'];?>/shop" class="home">My Shop</a></li>
	  <li><a href="<?php echo $fullpath;?><?php echo $_SESSION['mention'];?>/activity" class="home">My Hub</a></li>
	  <li><a href="<?php echo $fullpath;?><?php echo $_SESSION['mention'];?>/texts" class="home">
	  <img src="img/member/Home.png"  width="25" height="25"  alt="" /></a></li>
    </ul>
  </div>
  
</nav>

    
    
  </div>
  <!--close header-->
  
  