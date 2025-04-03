<?php
session_start();
// Additional PHP logic here
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Layout with Logo, Navbar, and Search Box</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
  /* Customize your logo, navbar, and search box as needed */
.navbar-brand img {
    max-height: 40px; /* Adjust the logo size */
}

.search-box {
    position: relative;
}

.search-box input[type="search"] {
    padding-right: 40px;
}

.search-box button {
    position: absolute;
    right: 0;
    top: 0;
    bottom: 0;
    border: none;
    background-color: transparent;
    padding: 0 10px;
    cursor: pointer;
}

.search-box i {
    font-size: 1.2rem;
    color: #000;
}

    
    </style>
	 <!-- Custom CSS -->
    <link rel="stylesheet" href="css/MemebrPage.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #33b6c0;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/images/Latest-Logo.png" width="120" height="40" alt="Talent Link Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">My Hub</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">My Shop</a>
                    </li>
					 <li class="nav-item">
                        <a class="nav-link text-white" href="my_account.php">My Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">LogOut</a>
                    </li>
                </ul>
                <form class="d-flex ms-3 search-box" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </nav>

 <main id="content">
            <div class="container"><!-- id="content_inner"--->
                <div id="page1">
                    <aside id="sidebar">
                        <div class="sidebox">
                            <div class="sidebox_top">
                                <img src="/thumb.php?src=/images/man.jpg" alt="Profile Image" class="side_thumb">
                                <h2><a href="/profileview?tempid=42">Mageshwari Velu</a></h2>
                                <h4><a href="/upgrade">Upgrade Now</a></h4>
                                <h4><a href="/goprofile" class="logout">Manage Profile</a></h4>
                                <span class="likes">1</span>
                                <button class="like_button">Like</button>
                            </div>
                            <div class="sidebox_bottom">
                                <ul>
                                    <li>
                                        <h5>6</h5>
                                        <h6>Connections</h6>
                                    </li>
                                    <li>
                                        <h5>0</h5>
                                        <h6>Recommendations</h6>
                                    </li>
                                    <li>
                                        <h5>17</h5>
                                        <h6>Views</h6>
                                    </li>
                                </ul>
                                <ul>
                                    <li><a href="/viewactivity?logid=42&actcon=4">Photos 9</a></li>
                                    <li><a href="/viewactivity?logid=42&actcon=2">Videos 2</a></li>
                                    <li><a href="/viewactivity?logid=42&actcon=3">Audios 1</a></li>
                                </ul>
                                <span class="notification">Sponsored by Kevin Pietersen</span>
                            </div>
                        </div>
                        <div id="add_kill"></div>
                    </aside>

                    <section id="rightbar">
                        <div class="edit_video_row">
                            <form action="textsave" name="textsave" method="post" onsubmit="return validate4()">
                                <input name="textdata" id="textdata" type="text" class="status" value="Status" onfocus="this.value = '';" onblur="this.value || (this.value = 'Status');">
                                <button type="submit" class="edit_video_submit">Submit</button>
                            </form>
                            <button class="add_button" data-reveal-id="myModal" data-animation="fade">Add Photos / Videos</button>
                        </div>

                        <div class="rightbar_inn">
                            <div id="showpost" class="image_cntent mCustomScrollbar"></div>
                        </div>
                    </section>
					
					
					
					
					
					
<!------------------------------------------------------------------------------>
<div id="rightbar">
        
          <div class="edit_video_row">
      
             
            <!--title_first-->
          <!--  <form action="" method="get" name="video-form" class="edit_video_form">-->
              <script language="javascript" type="text/javascript">
 var maxuploadlimit='';
 var totalallowedspace='';
function AlertFilesize1(){
	//alert("ok");
    if(window.ActiveXObject){
        var fso = new ActiveXObject("Scripting.FileSystemObject");
        var filepath = document.getElementById('uploadFile').value;
        var thefile = fso.getFile(filepath);
        var sizeinbytes = thefile.size;
    }else{
        var sizeinbytes = document.getElementById('uploadFile').files[0].size;
    }

    var fSExt = new Array('Bytes', 'KB', 'MB', 'GB');
    fSize = sizeinbytes; i=0;while(fSize>900){fSize/=1024;i++;}

   var getsize= ConvertBytesToMB(sizeinbytes);
   //alert(getsize);
   //(Math.round(fSize*100)/100)+' '+fSExt[i];
   var check=getsize.split(' ');
  
  //alert(check[1]);
   
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
		
		var response=xmlhttp.responseText;
		var finalresponse=response.split(' ');
		
		var totalsize=parseFloat(check[0])+parseFloat(finalresponse[0]);

		if ( memorycomp(check[0], '>', maxuploadlimit))
		{
		   document.getElementById("image_submit1").disabled=true;	
		   document.getElementById("uploadFile_mess").innerHTML='';
		   document.getElementById("chk").innerHTML='You cannot upload file size more than ' +maxuploadlimit+' MB' ;
		}
		else if (!AllowFiletoUpload(totalsize))		
		{
			//alert("a");
		   document.getElementById("image_submit1").disabled=true;	
		   document.getElementById("uploadFile_mess").innerHTML='';
		   document.getElementById("chk").innerHTML='Your Subscription allows ' +totalallowedspace+' MB only.' ;	
		}		
		else
		{
			//alert("d")
			 document.getElementById("uploadFile_mess").innerHTML='';
	    }
      
	}
	
	
  }
 
xmlhttp.open("GET","checksize",true);
xmlhttp.send();

  
  	
}
function AlertFilesize2()
{
	//alert("ok");
    if(window.ActiveXObject){
        var fso = new ActiveXObject("Scripting.FileSystemObject");
        var filepath = document.getElementById('doc').value;
        var thefile = fso.getFile(filepath);
        var sizeinbytes = thefile.size;		
    }else{
        var sizeinbytes = document.getElementById('doc').files[0].size;
    }
	
	
    var fSExt = new Array('Bytes', 'KB', 'MB', 'GB');
    fSize = sizeinbytes; i=0;while(fSize>900){fSize/=1024;i++;}

   var getsize= ConvertBytesToMB(sizeinbytes);
   //(Math.round(fSize*100)/100)+' '+fSExt[i];
   var check=getsize.split(' ');
  
  //alert(check[1]);
   
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
		
		
		var response=xmlhttp.responseText;
		var finalresponse=response.split(' ');
		
		var totalsize=parseFloat(check[0])+parseFloat(finalresponse[0]);
		if (memorycomp(check[0], '>', maxuploadlimit))
		{
		   document.getElementById("image_submit").disabled=true;	
		   document.getElementById("uploadFile_mess").innerHTML='';
		   document.getElementById("chk").innerHTML='You cannot upload file size more than ' +maxuploadlimit+' MB' ;
		}
		else if (!AllowFiletoUpload(totalsize))		
		{
			//alert("a");
		   document.getElementById("image_submit").disabled=true;	
		   document.getElementById("uploadFile_mess").innerHTML='';
		   document.getElementById("chk").innerHTML='Your Subscription allows ' +totalallowedspace+' MB only.' ;	
		}
		else
		{
			//alert("d")
			 document.getElementById("uploadFile_mess").innerHTML='';
	    }
      
	}
	
	
  }
 
xmlhttp.open("GET","checksize",true);
xmlhttp.send();

  
  	

  	
}
function AlertFilesize3()
{
	//alert("ok2");
    if(window.ActiveXObject){
        var fso = new ActiveXObject("Scripting.FileSystemObject");
        var filepath = document.getElementById('uploadFile1').value;
        var thefile = fso.getFile(filepath);
        var sizeinbytes = thefile.size;
    }else{
        var sizeinbytes = document.getElementById('uploadFile1').files[0].size;
    }

    var fSExt = new Array('Bytes', 'KB', 'MB', 'GB');
    fSize = sizeinbytes; i=0;while(fSize>900){fSize/=1024;i++;}

   var getsize= ConvertBytesToMB(sizeinbytes);
   //(Math.round(fSize*100)/100)+' '+fSExt[i];
   var check=getsize.split(' ');
  
  //alert(getsize);
   
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
		
		
		var response=xmlhttp.responseText;
		var finalresponse=response.split(' ');
		var totalsize=parseFloat(check[0])+parseFloat(finalresponse[0]);
		if (memorycomp(check[0], '>', maxuploadlimit))
		{
		   document.getElementById("image_submit2").disabled=true;	
		   document.getElementById("uploadFile1_mess").innerHTML='';
		   document.getElementById("chk2").innerHTML='You cannot upload file size more than ' +maxuploadlimit+' MB' ;
		}
		else if (!AllowFiletoUpload(totalsize))		
		{
			//alert("a");
		   document.getElementById("image_submit2").disabled=true;	
		   document.getElementById("uploadFile1_mess").innerHTML='';
		   document.getElementById("chk2").innerHTML='Your Subscription allows ' +totalallowedspace+' MB only.' ;	
		}
		else
		{
			//alert("d")
			 document.getElementById("uploadFile_mess").innerHTML='';
	    }
		
	}
	
	
  }
 
xmlhttp.open("GET","checksize",true);
xmlhttp.send();

  
  	

  	
}
function ConvertBytesToMB(sizeinbytes)
{

    var fSize = sizeinbytes; 

   var getsize= (Math.round((fSize/1024)*100)/100);
   return (Math.round((getsize/1024)*100)/100) +' '+'MB';
}
   
function AllowFiletoUpload(totalsizeinMB)
{

if (memorycomp(totalsizeinMB ,'>', totalallowedspace))
    return false;
else 
	return true;	
}

function memorycomp(a,comp,b,decimals) {
		if (!decimals)		
		decimals = 2;	
		var multiplier = Math.pow(10,decimals);
		a = Math.round(a * multiplier); 
		b = Math.round(b * multiplier);
		switch (comp) {		
				case ">":			
						return (a > b);		
				case ">=":			
						return (a >= b);		
				case "<":			
						return (a < b);		
				case "<=":			
						return (a <= b);		
				case "==":			
						return (a == b);	
						}	
			return null;
}

</script>

<script type="text/javascript">
function validate()
{
var d=document.upload_photo;
var fileName = d.doc.value;
var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
if(document.getElementById('doc').value=='')
{
	//document.getElementById('doc').style.border="red solid 1px";
	 document.getElementById('doc_mess').innerHTML="<font color='red'>Please Choose file for uploading</font>";
//alert("Please Choose Photo file for uploading");
return false;
}
//alert(fileName);
	if((fileName.length-12) > 25) // Remove the legth for C:\fakepath\
	{
		document.getElementById('doc_mess').innerHTML="<font color='red'>File Name should be <25 characters</font>";
		return false;
	}
if(document.getElementById('doc').value!='')
{
document.getElementById('doc_mess').innerHTML="";
}
if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG"||ext == "png"||ext == "PNG")
{
document.getElementById('doc_mess').innerHTML="";
} 
else
{
document.getElementById('doc_mess').innerHTML="<font color='red'>Only .jpg ,.png ,.gif ,.jpeg file formats allowed</font>";
d.doc.focus();
return false;
}
if(document.getElementById('title1').value==''||document.getElementById('title1').value=='Optional, but recommended')
{
	document.getElementById('title1').focus();
	document.getElementById('title1').style.border="red solid 1px";
	 document.getElementById('title1_mess').innerHTML="<font color='red'>Please Enter Photo Title</font>";
//alert("Please Enter Photo Title");
return false;
}

if(document.getElementById('title1').value!='')
{
	
	  document.getElementById('title1').style.border="#d0d0d0 solid 1px";
	 document.getElementById('title1_mess').innerHTML="";
}


if(document.getElementById('description1').value==''||document.getElementById('description1').value=='Optional, but recommended')
{
	document.getElementById('description1').focus();
	document.getElementById('description1').style.border="red solid 1px";
	 document.getElementById('description1_mess').innerHTML="<font color='red'>Please Enter Photo description</font>";
//alert("Please Enter Photo description");
return false;
}
return true;
}
</script>      


                             

<script type="text/javascript">
function validate1(){
var d=document.upload_video;
var fileName = d.vfile.value;
var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
var fileName1 = d.vtfile.value;
var ext1 = fileName1.substring(fileName1.lastIndexOf('.') + 1);
if(document.getElementById('uploadFile').value=='')
{
	//document.getElementById('uploadFile').style.border="red solid 1px";
	 document.getElementById('uploadFile_mess').innerHTML="<font color='red'>Please Choose Video file for uploading</font>";
//alert("Please Choose Video file for uploading");
return false;
}
//alert(fileName);
	if((fileName.length-12) > 25) // Remove the legth for C:\fakepath\
	{
		document.getElementById('uploadFile_mess').innerHTML="<font color='red'>File Name should be <25 characters</font>";
		return false;
	}
	if((fileName1.length-12) > 25) // Remove the legth for C:\fakepath\
	{
		document.getElementById('vtfile_mess').innerHTML="<font color='red'>File Name should be <25 characters</font>";
		return false;
	}
if(document.getElementById('uploadFile').value!='')
{
	//document.getElementById('uploadFile').style.border="red solid 1px";
	 document.getElementById('uploadFile_mess').innerHTML="";
//alert("Please Choose Video file for uploading");
}
if(ext == "wmv" || ext == "WMV" || ext == "avi" || ext == "AVI" || ext == "flv" || ext == "FLV"||ext == "MOV"||ext == "mov" ||ext == "mp4"||ext == "MP4")
{
document.getElementById('uploadFile_mess').innerHTML="";
} 
else
{
document.getElementById('uploadFile_mess').innerHTML="<font color='red'>Only .wmv ,.flv ,.avi ,.mov ..mp4... file formats allowed</font>";
//d.vfile.focus();
return false;
}
if(document.getElementById('vtfile').value=='')
{
	//document.getElementById('vtfile').style.border="red solid 1px";
	 document.getElementById('vtfile_mess').innerHTML="<font color='red'>Please Choose video thumbnail file for uploading</font>";
//alert("Please Choose video thumbnail file for uploading");
return false;
}

if(document.getElementById('vtfile').value!='')
{
	//document.getElementById('vtfile').style.border="red solid 1px";
	 document.getElementById('vtfile_mess').innerHTML="";
//alert("Please Choose video thumbnail file for uploading");

}
if(ext1 == "gif" || ext1 == "GIF" || ext1 == "JPEG" || ext1 == "jpeg" || ext1 == "jpg" || ext1 == "JPG"||ext1 == "png"||ext1 == "PNG")
{
document.getElementById('vtfile_mess').innerHTML="";
} 
else
{
document.getElementById('vtfile_mess').innerHTML="<font color='red'>Only .jpg ,.png ,.gif ,.jpeg file formats allowed</font>";
//d.vtfile.focus();
return false;
}
if(document.getElementById('title2').value==''||document.getElementById('title2').value=='Optional, but recommended')
{
	document.getElementById('title2').focus();
	document.getElementById('title2').style.border="red solid 1px";
	 document.getElementById('title2_mess').innerHTML="<font color='red'>Please Enter Video Title</font>";
//alert("Please Enter Video Title");
return false;
}
if(document.getElementById('title2').value!='')
{
	
	 document.getElementById('title2').style.border="#d0d0d0 solid 1px";
	 document.getElementById('title2_mess').innerHTML="";
//alert("Please Enter Video Title");
}
if(document.getElementById('description2').value==''||document.getElementById('description2').value=='Optional, but recommended')
{
	document.getElementById('description2').focus();
	document.getElementById('description2').style.border="red solid 1px";
	 document.getElementById('description2_mess').innerHTML="<font color='red'>Please Enter Video description</font>";
//alert("Please Enter Video description");
return false;
}
if(document.getElementById('description2').value!='')
{
	
	document.getElementById('description2').style.border="#d0d0d0 solid 1px";
	 document.getElementById('description2_mess').innerHTML="";
//alert("Please Enter Video description");

}
return true;
}
</script> 
<script type="text/javascript">
function validate2(){
var d=document.upload_audio;
var fileName = d.vfile.value;
var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
var fileName1 = d.vtfile.value;
var ext1 = fileName1.substring(fileName1.lastIndexOf('.') + 1);
if(document.getElementById('uploadFile1').value=='')
{
document.getElementById('uploadFile1_mess').innerHTML="<font color='red'>Please Choose Audio file for uploading</font>";	
return false;
}
//alert(fileName);
	if((fileName.length-12) > 25) // Remove the legth for C:\fakepath\
	{
		document.getElementById('uploadFile1_mess').innerHTML="<font color='red'>File Name should be <25 characters</font>";
		return false;
	}
	if((fileName1.length-12) > 25) // Remove the legth for C:\fakepath\
	{
		document.getElementById('vtfile1_mess').innerHTML="<font color='red'>File Name should be <25 characters</font>";
		return false;
	}
if(document.getElementById('uploadFile1').value!='')
{
document.getElementById('uploadFile1_mess').innerHTML="";	
}
if(ext == "wmv" || ext == "WMV" || ext == "3gp" || ext == "3GP" || ext == "wav" || ext == "WAV"||ext == "mp3"||ext == "MP3" )
{
document.getElementById('uploadFile1_mess').innerHTML="";
} 
else
{
document.getElementById('uploadFile1_mess').innerHTML="<font color='red'>Only .wmv ,.3gp ,.wav ,.mp3... file formats allowed</font>";
//d.vfile.focus();
return false;
}
if(document.getElementById('vtfile1').value=='')
{
document.getElementById('vtfile1_mess').innerHTML="<font color='red'>Please Choose Audio thumbnail file for uploading</font>";	
return false;
}
if(document.getElementById('vtfile1').value!='')
{
document.getElementById('vtfile1_mess').innerHTML="";	
}
if(ext1 == "gif" || ext1 == "GIF" || ext1 == "JPEG" || ext1 == "jpeg" || ext1 == "jpg" || ext1 == "JPG"||ext1 == "png"||ext1 == "PNG")
{
document.getElementById('vtfile1_mess').innerHTML="";
} 
else
{
document.getElementById('vtfile1_mess').innerHTML="<font color='red'>Only .jpg ,.png ,.gif ,.jpeg file formats allowed</font>";
//.vtfile.focus();
return false;
}
if(document.getElementById('title3').value==''||document.getElementById('title3').value=='Optional, but recommended')
{
	document.getElementById('title3').focus();
	document.getElementById('title3').style.border="red solid 1px";
	 document.getElementById('title3_mess').innerHTML="<font color='red'>Please Enter Audio Title</font>";
//alert("Please Enter Audio Title");
return false;
}
if(document.getElementById('title3').value!='')
{
	
	document.getElementById('title3').style.border="#d0d0d0 solid 1px";
	 document.getElementById('title3_mess').innerHTML="";
//alert("Please Enter Audio Title");
}
if(document.getElementById('description3').value==''||document.getElementById('description3').value=='Optional, but recommended')
{
	document.getElementById('description3').focus();
	document.getElementById('description3').style.border="red solid 1px";
	 document.getElementById('description3_mess').innerHTML="<font color='red'>Please Enter Audio description</font>";
//alert("Please Enter Audio description");
return false;
}
if(document.getElementById('description3').value!='')
{
	
	document.getElementById('description3').style.border="#d0d0d0 solid 1px";
	 document.getElementById('description3_mess').innerHTML="";
//alert("Please Enter Audio description");

}
return true;
}

</script> 
<script type="text/javascript">
	     function readURL(input) {
			// alert("hi");
            if (input.files && input.files[0]) {
				//alert(input.files[0]);
                var reader = new FileReader();

                reader.onload = function (e) {
					//alert(e.target.result);
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(60)
                        .height(60);
                };
				//alert(reader.readAsDataURL(input.files[0]));

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
	
<script language="javascript" type="text/javascript">
function validate4(){
if(document.getElementById('textdata').value==''||document.getElementById('textdata').value=='Status')
{
	 document.getElementById('textdata').focus();
	 document.getElementById('textdata').style.border="white solid 1px";
	 document.getElementById('textdata_mess').innerHTML="<font color='white'>Please Enter Text</font>";
return false;
}
else
{
	return true;
}
}
</script>     

	<form action="textsave" name="textsave" method="post" onsubmit=" return validate4()">
            <div class="title_first"><input name="textdata" id="textdata" type="text" class="status" value="Status" onfocus="if (this.value == 'Status') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Status';}"><span id="textdata_mess"></span></div>
            <span>
              <input name="submit" type="submit" value="Submit" class="edit_video_submit">  
              </span></form>
<a href="#" class="add_button" data-reveal-id="myModal" data-animation="fade">Add Photos / Videos</a>
    
              
           
              
              <div id="myModal" class="reveal-modal">
                    <h1>ADD PHOTOS/VIDEOS</h1>
                    <div class="popup_box1">
                    	 <h2>Upload Photo(s)</h2>
                         <div class="choose_photo">
                         <form action="photosave" name="upload_photo" enctype="multipart/form-data" method="post" onsubmit="return validate(); ">
                       
                           <img id="blah" src="http://104.131.245.70/images/profile_thumb.png"><br>  
                            <input name="doc" id="doc" type="file" onchange="readURL(this); AlertFilesize2();" style="width:180px; margin: 0 0 11px 0px;">
							<span id="doc_mess"></span>
                            
                            <div class="popup_row"><label>Title</label><input name="title" id="title1" type="text" class="popup_input" value=""><span id="title1_mess"></span></div>
                            <div class="popup_row"><label>Description</label><textarea name="descript" id="description1" cols="" rows="" class="popup_textarea" value=""></textarea><span id="description1_mess"></span></div>
                            <input name="image_submit" id="image_submit" type="submit" class="submit_popup" value="add">
                            
                            
                           
                           
                          
                          </form>
                         </div>
                    </div><!--close popup_box1-->
                    
                    <div class="popup_box1">
                    	  <h2>Upload Video(s)</h2>
                         <form id="uploadForm" action="videosave" name="upload_video" method="post" enctype="multipart/form-data" onsubmit="return validate1()">
							<fieldset>
								<label>Select video</label>
								<input id="uploadFile" type="file" name="vfile" onchange="AlertFilesize1();"><span id="uploadFile_mess"></span>
								<div id="uploadBar" style="width:480px; float:left; display:none; background:#FFF; margin:5px 0; color:#333;">
								<div id="uploadProgress" style="background:#46800d; width:0px; height:18px;"></div></div>
								<small id="uploadText">You can upload any video format (WMV, AVI, MP4, MOV, FLV, ...)</small>
								<label>Select Video Thumbnail</label>
								<input name="vtfile" type="file" id="vtfile" style="width:300px; margin: 0 0 11px 0px;"><span id="vtfile_mess"></span>
							</fieldset>
    
						<div class="popup_row2">
							<label>Title</label><input name="title" id="title2" type="text" class="popup_input2" value=""><span id="title2_mess"></span>
							</div>
                            <div class="popup_row2"><label>Description</label><textarea name="descript" id="description2" cols="" rows="" class="popup_textarea2" value=""></textarea><span id="description2_mess"></span></div>
                            
                            <input name="image_submit" id="image_submit1" type="submit" class="submit_popup" value="add"><span id="chk"><font color="red"></font></span>
						</form>
                    </div><!--close popup_box1-->
                    
                    
                    
                    
                    
                    <div class="clear"></div>
                    
                    <a class="close-reveal-modal">×</a>
				</div>
            
                
              <span><a href="#" class="add_button" data-reveal-id="myModal2" data-animation="fade">Add Audio</a></span> 
             
				  <div id="myModal2" class="reveal-modal" style="width: 400px !important;">
                    <h1>ADD Audios</h1>
                    
                    
                    <div class="popup_box1" style="width:392px !important;">
                    	  <h2>Upload Audio(s)</h2>
                         <form id="uploadForm" name="upload_audio" action="audiosave" method="post" enctype="multipart/form-data" onsubmit="return validate2()">
	<fieldset>
		<label>Select Audio</label>
		<input id="uploadFile1" type="file" name="vfile" onchange="AlertFilesize3();"><span id="uploadFile1_mess"></span>
		<div id="uploadBar" style="width:480px; float:left; display:none; background:#FFF; margin:5px 0; color:#333;">
        <div id="uploadProgress" style="background:#46800d; width:0px; height:18px;"></div></div>
		<small id="uploadText">You can upload any audio format (WMV, MP3, WAV,3GP ...)</small>
        <label>Select Audio Thumbnail</label>
		<input name="vtfile" type="file" id="vtfile1" style="width:300px; margin: 0 0 11px 0px;"><span id="vtfile1_mess"></span>
	</fieldset>
    
    <div class="popup_row2"><label>Title</label><input name="title" id="title3" type="text" class="popup_input2" value=""><span id="title3_mess"></span></div>
                            <div class="popup_row2"><label>Description</label><textarea name="descript" id="description3" cols="" rows="" class="popup_textarea2" value=""></textarea><span id="description3_mess"></span></div>
                            
                            <input name="image_submit" id="image_submit2" type="submit" class="submit_popup" value="add"><span id="chk2"><font color="red"></font></span>
</form>
                    </div><!--close popup_box1-->
                    
                    
                    
                    
                    
                    <div class="clear"></div>
                    
                    <a class="close-reveal-modal">×</a>
				</div>
					
					                      
					  <div class="clear">&nbsp;</div>
					                       
            <div class="rightbar_inn">
              
              
                <link href="http://104.131.245.70/jquery.mCustomScrollbar.css" rel="stylesheet">

	<script src="http://104.131.245.70/jquery.mCustomScrollbar.concat.min.js"></script>
	<script>
		(function($){
			$(window).load(function(){
				$("#showpost").mCustomScrollbar({
					scrollButtons:{
						enable:true
					}
				});
			});
		})(jQuery);
	</script>
    
              

                       <div class="image_cntent mCustomScrollbar _mCS_1" id="showpost" style="background:#fff"><div class="mCustomScrollBox mCS-light" id="mCSB_1" style="position:relative; height:100%; overflow:hidden; max-width:100%;"><div class="mCSB_container mCS_no_scrollbar" style="position:relative; top:0;">
                         
	<link rel="stylesheet" type="text/css" href="http://104.131.245.70/jquery.fancybox.css">
	

    
    




<!---Start AjaxCode to Count Likes--->

<!---End AjaxCode to Count Likes--->
     
<!---Start AjaxCode to Count Likes--->



<!---End AjaxCode to Count Likes--->


   




                         
                                    
    
    <!---Start AjaxCode to Count Likes--->



<!---End AjaxCode to Count Likes--->
<!---Start AjaxCode to Count Likes--->



                       </div><div class="mCSB_scrollTools" style="position: absolute; display: none;"><a class="mCSB_buttonUp" oncontextmenu="return false;"></a><div class="mCSB_draggerContainer"><div class="mCSB_dragger" style="position: absolute; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="position:relative;"></div></div><div class="mCSB_draggerRail"></div></div><a class="mCSB_buttonDown" oncontextmenu="return false;"></a></div></div></div><!--image_cntent-->                    
            </div>
            <!--close rightbar_inn--> 
            
                        <div class="add5"><a href="http://rockdesigning.com/affrenure/" target="_blank" onclick="javascript:add_click(66);"><img src="http://104.131.245.70/admin/uploads/images/mid4.jpg" alt=""></a></div>
		  		  
		  
		  
		  
		  
		  
		  
		  
		  







	              
            
            
            </div>
            
          </div>
<!------------------------------------------------------------------------------>
                </div>
            </div>
        </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>
