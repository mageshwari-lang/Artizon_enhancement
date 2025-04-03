 <?php include('global_fileuploadlimit.php');?>
 <script language="javascript" type="text/javascript">
 var maxuploadlimit='<?php echo $max_upload_file_limit;?>';
 var totalallowedspace='<?php echo $allowed_space;?>';
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

<script type="text/javascript" >
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


                             

<script type="text/javascript" >
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
<script type="text/javascript" >
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
            <div class="title_first"><input name="textdata" id="textdata" type="text" class="status" value="Status" onfocus="if (this.value == 'Status') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Status';}" /><span id="textdata_mess"></div>
            <span>
              <input name="submit" type="submit" value="Submit" class="edit_video_submit" />  
              </span></form>
<a href="#" class="add_button" data-reveal-id="myModal" data-animation="fade">Add Photos / Videos</a>
    
              
           
              
              <div id="myModal" class="reveal-modal">
                    <h1>ADD PHOTOS/VIDEOS</h1>
                    <div class="popup_box1">
                    	 <h2>Upload Photo(s)</h2>
                         <div class="choose_photo">
                         <form action="photosave" name="upload_photo" enctype="multipart/form-data" method="post" onsubmit="return validate(); ">
                       
                           <img id="blah" src="<?php echo $fullpath;?>images/profile_thumb.png"><br>  
                            <input name="doc" id="doc" type='file' onchange="readURL(this); AlertFilesize2();" style="width:180px; margin: 0 0 11px 0px;"/>
							<span id="doc_mess"></span>
                            
                            <div class="popup_row"><label>Title</label><input name="title" id="title1" type="text" class="popup_input" value=""  /><span id="title1_mess"></span></div>
                            <div class="popup_row"><label>Description</label><textarea name="descript" id="description1" cols="" rows="" class="popup_textarea" value="" ></textarea><span id="description1_mess"></span></div>
                            <input name="image_submit"  id="image_submit" type="submit" class="submit_popup" value="add"  />
                            
                            
                           
                           
                          
                          </form>
                         </div>
                    </div><!--close popup_box1-->
                    
                    <div class="popup_box1">
                    	  <h2>Upload Video(s)</h2>
                         <form id="uploadForm" action="videosave" name="upload_video" method="post" enctype="multipart/form-data" onsubmit="return validate1()">
							<fieldset>
								<label>Select video</label>
								<input id="uploadFile" type="file" name="vfile" onchange="AlertFilesize1();" ><span id="uploadFile_mess"></span>
								<div id="uploadBar" style="width:480px; float:left; display:none; background:#FFF; margin:5px 0; color:#333;">
								<div id="uploadProgress" style="background:#46800d; width:0px; height:18px;"></div></div>
								<small id="uploadText">You can upload any video format (WMV, AVI, MP4, MOV, FLV, ...)</small>
								<label>Select Video Thumbnail</label>
								<input name="vtfile" type="file" id="vtfile"  style="width:300px; margin: 0 0 11px 0px;" /><span id="vtfile_mess"></span>
							</fieldset>
    
						<div class="popup_row2">
							<label>Title</label><input name="title" id="title2" type="text" class="popup_input2" value=""  /><span id="title2_mess"></span>
							</div>
                            <div class="popup_row2"><label>Description</label><textarea name="descript" id="description2" cols="" rows="" class="popup_textarea2" value="" ></textarea><span id="description2_mess"></span></div>
                            
                            <input name="image_submit" id="image_submit1" type="submit" class="submit_popup" value="add" /><span id="chk"><font color="red"></font></span>
						</form>
                    </div><!--close popup_box1-->
                    
                    
                    
                    
                    
                    <div class="clear"></div>
                    
                    <a class="close-reveal-modal">&#215;</a >
				</div>
            
                
              <span><a  href="#" class="add_button" data-reveal-id="myModal2" data-animation="fade">Add Audio</a></span> 
             
				  <div id="myModal2" class="reveal-modal" style="width: 400px !important;">
                    <h1>ADD Audios</h1>
                    
                    
                    <div class="popup_box1" style="width:392px !important;">
                    	  <h2>Upload Audio(s)</h2>
                         <form id="uploadForm" name="upload_audio" action="audiosave" method="post" enctype="multipart/form-data" onsubmit="return validate2()">
	<fieldset>
		<label>Select Audio</label>
		<input id="uploadFile1" type="file" name="vfile" onchange="AlertFilesize3();" ><span id="uploadFile1_mess"></span>
		<div id="uploadBar" style="width:480px; float:left; display:none; background:#FFF; margin:5px 0; color:#333;">
        <div id="uploadProgress" style="background:#46800d; width:0px; height:18px;"></div></div>
		<small id="uploadText">You can upload any audio format (WMV, MP3, WAV,3GP ...)</small>
        <label>Select Audio Thumbnail</label>
		<input name="vtfile" type="file" id="vtfile1" style="width:300px; margin: 0 0 11px 0px;" /><span id="vtfile1_mess"></span>
	</fieldset>
    
    <div class="popup_row2"><label>Title</label><input name="title" id="title3" type="text" class="popup_input2" value=""/><span id="title3_mess"></span></div>
                            <div class="popup_row2"><label>Description</label><textarea name="descript" id="description3" cols="" rows="" class="popup_textarea2" value="" ></textarea><span id="description3_mess"></span></div>
                            
                            <input name="image_submit" id="image_submit2" type="submit" class="submit_popup" value="add"  /><span id="chk2"><font color="red"></font></span>
</form>
                    </div><!--close popup_box1-->
                    
                    
                    
                    
                    
                    <div class="clear"></div>
                    
                    <a class="close-reveal-modal">&#215;</a >
				</div>
					
					                      
					  <div class="clear">&nbsp;</div>
					  <?php if($_GET["error"]=='yes') {?>
						<span id="error_message1"><font color='red'>Error in Uploading File</font></span>
						<div class="clear">&nbsp;</div>
					<?php }?>