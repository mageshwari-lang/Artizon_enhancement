<script type="text/javascript" src="<?php echo $fullpath;?>js/jquery.fancybox.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo $fullpath;?>jquery.fancybox.css"/>
	<script type="text/javascript" src="<?php echo $fullpath;?>js/jquery.fancybox-media.js"></script>
<script type="text/javascript">
		$(document).ready(function() {
					$('.fancybox').fancybox({
						'width' : '510'	,
						'height' : '300',
						'autoSize' : false						
					});

		});
	</script>
    
    <script type="text/javascript">
		$(document).ready(function() {
					$('.fancybox2').fancybox({
						'width' : '510'	,
						'height' : '300',
						'autoSize' : false						
					});

		});
	</script>

<script type="text/javascript">
function audio_comment(val,val1,val2,val3,val4)
{
	var comment=document.getElementById(val4).value;
		if(comment==''||comment=='Write your comment.....')
	{
	alert("Please enter your Comment.");
	return false;	
	}
	else
	{
var tmptxt="audiocomm"+val;
var bttn="postbutton"+val;
var val4=document.getElementById(tmptxt).value;
document.getElementById(bttn).style.visibility='hidden';

              if (window.XMLHttpRequest)
                   {
                   xmlhttp=new XMLHttpRequest();
                   }
                else
                  {
                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                      xmlhttp.onreadystatechange=function()
                      { // alert(xmlhttp.readyState);
                        if (xmlhttp.readyState==4 && xmlhttp.status==200)
                         {
	                        var m=xmlhttp.responseText;
                            document.getElementById(val).innerHTML=xmlhttp.responseText;	
                        }
                 }
                   //alert("audiocommentsave?scrollid="+val+"&userid="+val3+"&memberid="+val1+"&audid="+val2+"&cmdata="+val4);
                   // return false;
                     xmlhttp.open("GET","audiocommentsave?scrollid="+val+"&userid="+val3+"&memberid="+val1+"&audid="+val2+"&cmdata="+val4,true);
				
                      xmlhttp.send();
	}
 

 
}
</script>

<script type="text/javascript">
function show_audiocomments(scrollid,audioid)
{
   
              if (window.XMLHttpRequest)
                   {
                   xmlhttp=new XMLHttpRequest();
                   }
                else
                  {
                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                      xmlhttp.onreadystatechange=function()
                      { 
                        if (xmlhttp.readyState==4 && xmlhttp.status==200)
                         {
	                        var m=xmlhttp.responseText; 
                            document.getElementById(scrollid).innerHTML=xmlhttp.responseText;	
                        }
                 }
                   //alert("showallcomments?scrollid="+scrollid+"&textid="+textid);
                  //  return false;
                     xmlhttp.open("GET","showallaudiocomments?scrollid="+scrollid+"&audioid="+audioid,true);
				
                      xmlhttp.send();
 

 
}
</script>
<!---Start AjaxCode to Count Likes--->
<script type="text/javascript">
function audio_likes(likrow,val,val1,val2)
{  
  var xmlhttp;
  var like_by='<?php echo $uid;?>';
  var like_type=val1;
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
    document.getElementById(likrow).innerHTML=xmlhttp.responseText;
    }
  }
 //alert("audiolikes?likerow="+likrow+"&audioid="+val+"&like_by="+like_by+"&like_type="+like_type);
// return false;
  xmlhttp.open("POST","audiolikes?likerow="+likrow+"&audioid="+val+"&like_by="+like_by+"&like_type="+like_type+"&likeid="+val2,true);
  xmlhttp.send();
}
function audio_share(val,val1)
{ 
   
//alert('item_id '+val);
// alert('share_by '+val1);
  var xmlhttp;
  var log_id='<?php echo $uid;?>';
  //alert('lod_id '+log_id);
  //var like_type=val1;
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
    document.getElementById('mydiv').innerHTML=xmlhttp.responseText;
	location.reload(true);
	//alert(xmlhttp.status);
	//alert(xmlhttp.readyState);
	//alert(xmlhttp.responseText);
    }
  }
 //alert("textshare?item_id="+val+"&share_by="+val1+"&log_id="+log_id);
  //return false;
  xmlhttp.open("POST","audioshare?item_id="+val+"&share_by="+val1+"&log_id="+log_id,true);
  xmlhttp.send();
}
</script>
<!---End AjaxCode to Count Likes--->
     
<!---Start AjaxCode to Count Likes--->
<script type="text/javascript">
function image_likes(likrow,val,val1,val2)
{  
  var xmlhttp;
  var like_by='<?php echo $uid;?>';
  var like_type=val1;
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
    document.getElementById(likrow).innerHTML=xmlhttp.responseText;
    }
  }
  //alert("imagelikes?likerow="+likrow+"&imageid="+val+"&like_by="+like_by+"&like_type="+like_type);
  //return false;
  xmlhttp.open("POST","imagelikes?likerow="+likrow+"&imageid="+val+"&like_by="+like_by+"&like_type="+like_type+"&likeid="+val2,true);
  xmlhttp.send();
}
</script>

<script type="text/javascript">
function image_share(val,val1)
{ 
   
//alert('item_id '+val);
//alert('share_by '+val1);
  var xmlhttp;
  var log_id='<?php echo $uid;?>';
  //alert('lod_id '+log_id);
  //var like_type=val1;
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
    document.getElementById('mydiv').innerHTML=xmlhttp.responseText;
	location.reload(true);
	//alert(xmlhttp.status);
	//alert(xmlhttp.readyState);
	//alert(xmlhttp.responseText);
    }
  }
 //alert("textshare?item_id="+val+"&share_by="+val1+"&log_id="+log_id);
  //return false;
  xmlhttp.open("POST","imageshare?item_id="+val+"&share_by="+val1+"&log_id="+log_id,true);
  xmlhttp.send();
}
</script>
<!---End AjaxCode to Count Likes--->
<script type="text/javascript">
function image_comment(val,val1,val2,val3,val4)
{
	var comment=document.getElementById(val4).value;
		if(comment==''||comment=='Write your comment.....')
	{
	alert("Please enter your Comment.");
	return false;	
	}
	else
	{
var tmptxt="imgcomm"+val;
var bttn="postbutton"+val;
var val4=document.getElementById(tmptxt).value;
document.getElementById(bttn).style.visibility='hidden';	

              if (window.XMLHttpRequest)
                   {
                   xmlhttp=new XMLHttpRequest();
                   }
                else
                  {
                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                      xmlhttp.onreadystatechange=function()
                      { // alert(xmlhttp.readyState);
                        if (xmlhttp.readyState==4 && xmlhttp.status==200)
                         {
	                        var m=xmlhttp.responseText;
                            document.getElementById(val).innerHTML=xmlhttp.responseText;	
                        }
                 }
                  // alert("text_comment_save.php?userid="+val3+"&memberid="+val1+"&txtid="+val2+"&cmdata="+val4);
                   // return false;
                     xmlhttp.open("GET","imagecommentsave?scrollid="+val+"&userid="+val3+"&memberid="+val1+"&imgid="+val2+"&cmdata="+val4,true);
				
                      xmlhttp.send();
	}
 

 
}
</script>

<script type="text/javascript">
function show_imagecomments(scrollid,imageid)
{
   
              if (window.XMLHttpRequest)
                   {
                   xmlhttp=new XMLHttpRequest();
                   }
                else
                  {
                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                      xmlhttp.onreadystatechange=function()
                      { 
                        if (xmlhttp.readyState==4 && xmlhttp.status==200)
                         {
	                        var m=xmlhttp.responseText; 
                            document.getElementById(scrollid).innerHTML=xmlhttp.responseText;	
                        }
                 }
                   //alert("showallcomments?scrollid="+scrollid+"&textid="+textid);
                  //  return false;
                     xmlhttp.open("GET","showallimagecomments?scrollid="+scrollid+"&imageid="+imageid,true);
				
                      xmlhttp.send();
 

 
}
</script>   
<script type="text/javascript">
function video_comment(val,val1,val2,val3,val4)
{
	
	var comment=document.getElementById(val4).value;
		if(comment==''||comment=='Write your comment.....')
	{
	alert("Please enter your Comment.");
	return false;	
	}
	else
	{
	
var tmptxt="videocomm"+val;
var bttn="postbutton"+val;
var val4=document.getElementById(tmptxt).value;
document.getElementById(bttn).style.visibility='hidden';		
	
	
              if (window.XMLHttpRequest)
                   {
                   xmlhttp=new XMLHttpRequest();
                   }
                else
                  {
                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                      xmlhttp.onreadystatechange=function()
                      { // alert(xmlhttp.readyState);
                        if (xmlhttp.readyState==4 && xmlhttp.status==200)
                         {
	                        var m=xmlhttp.responseText;
                            document.getElementById(val).innerHTML=xmlhttp.responseText;	
                        }
                 }
                  // alert("text_comment_save.php?userid="+val3+"&memberid="+val1+"&txtid="+val2+"&cmdata="+val4);
                   // return false;
                     xmlhttp.open("GET","videocommentsave?scrollid="+val+"&userid="+val3+"&memberid="+val1+"&vid="+val2+"&cmdata="+val4,true);
				
                      xmlhttp.send();
	}

 
}
</script>

<script type="text/javascript">
function show_videocomments(scrollid,videoid)
{
   
              if (window.XMLHttpRequest)
                   {
                   xmlhttp=new XMLHttpRequest();
                   }
                else
                  {
                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                      xmlhttp.onreadystatechange=function()
                      { 
                        if (xmlhttp.readyState==4 && xmlhttp.status==200)
                         {
	                        var m=xmlhttp.responseText; 
                            document.getElementById(scrollid).innerHTML=xmlhttp.responseText;	
                        }
                 }
                   //alert("showallcomments?scrollid="+scrollid+"&textid="+textid);
                  //  return false;
                     xmlhttp.open("GET","showallvideocomments?scrollid="+scrollid+"&videoid="+videoid,true);
				
                      xmlhttp.send();
 

 
}
</script>

                         
                                    
    
    <!---Start AjaxCode to Count Likes--->
<script type="text/javascript">
function video_likes(likrow,val,val1,val2)
{  
  var xmlhttp;
  var like_by='<?php echo $uid;?>';
  var like_type=val1;
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
    document.getElementById(likrow).innerHTML=xmlhttp.responseText;
    }
  }
  //alert("textlikes?likerow="+likrow+"&textid="+val+"&like_by="+like_by+"&like_type="+like_type);
  //return false;
  xmlhttp.open("POST","videolikes?likerow="+likrow+"&videoid="+val+"&like_by="+like_by+"&like_type="+like_type+"&likeid="+val2,true);
  xmlhttp.send();
}
</script>

<script type="text/javascript">
function video_share(val,val1)
{ 
   
//alert('item_id '+val);
//alert('share_by '+val1);
  var xmlhttp;
  var log_id='<?php echo $uid;?>';
  //alert('lod_id '+log_id);
  //var like_type=val1;
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
    document.getElementById('mydiv').innerHTML=xmlhttp.responseText;
	location.reload(true);
	//alert(xmlhttp.status);
	//alert(xmlhttp.readyState);
	//alert(xmlhttp.responseText);
    }
  }
 //alert("textshare?item_id="+val+"&share_by="+val1+"&log_id="+log_id);
  //return false;
  xmlhttp.open("POST","videoshare?item_id="+val+"&share_by="+val1+"&log_id="+log_id,true);
  xmlhttp.send();
}
</script>
<!---End AjaxCode to Count Likes--->
<!---Start AjaxCode to Count Likes--->
<script type="text/javascript">
function text_likes(likrow,val,val1,val2)
{  
  var xmlhttp;
  var like_by='<?php echo $uid;?>';
  var like_type=val1;
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
    document.getElementById(likrow).innerHTML=xmlhttp.responseText;
    }
  }
 // alert("textlikes?likerow="+likrow+"&textid="+val+"&like_by="+like_by+"&like_type="+like_type);
  //return false;
  xmlhttp.open("POST","textlikes?likerow="+likrow+"&textid="+val+"&like_by="+like_by+"&like_type="+like_type+"&likeid="+val2,true);
  xmlhttp.send();
}
function text_share(val,val1)
{ 
   
//alert('item_id '+val);
// alert('share_by '+val1);
  var xmlhttp;
  var log_id='<?php echo $uid;?>';
  //alert('lod_id '+log_id);
  //var like_type=val1;
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
    document.getElementById('mydiv').innerHTML=xmlhttp.responseText;
	location.reload(true);
	//alert(xmlhttp.status);
	//alert(xmlhttp.readyState);
	//alert(xmlhttp.responseText);
    }
  }
 //alert("textshare?item_id="+val+"&share_by="+val1+"&log_id="+log_id);
 // return false;
  xmlhttp.open("POST","textshare?item_id="+val+"&share_by="+val1+"&log_id="+log_id,true);
  xmlhttp.send();
}

</script>
<script type="text/javascript">
function text_comment(val,val1,val2,val3,val4)
{
	var comment=document.getElementById(val4).value;
		if(comment==''||comment=='Write your comment.....')
	{
	alert("Please enter your Comment.");
	return false;	
	}
	else
	{

var tmptxt="textcomm"+val;
var bttn="postbutton"+val;
//alert(tmptxt);
var val4=document.getElementById(tmptxt).value;
//alert(val4);
//return false;
document.getElementById(bttn).style.visibility='hidden';	
              if (window.XMLHttpRequest)
                   {
                   xmlhttp=new XMLHttpRequest();
                   }
                else
                  {
                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                      xmlhttp.onreadystatechange=function()
                      { // alert(xmlhttp.readyState);
                        if (xmlhttp.readyState==4 && xmlhttp.status==200)
                         {
	                        var m=xmlhttp.responseText;
                            document.getElementById(val).innerHTML=xmlhttp.responseText;	
                        }
                 }
                   //alert("text_comment_save.php?userid="+val3+"&memberid="+val1+"&txtid="+val2+"&cmdata="+val4);
                   // return false;
                     xmlhttp.open("GET","textcommentsave?scrollid="+val+"&userid="+val3+"&memberid="+val1+"&txtid="+val2+"&cmdata="+val4,true);
				
                      xmlhttp.send();
	}
 

 
}
</script>
<script type="text/javascript">
function show_textcomments(scrollid,textid)
{
   
              if (window.XMLHttpRequest)
                   {
                   xmlhttp=new XMLHttpRequest();
                   }
                else
                  {
                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                      xmlhttp.onreadystatechange=function()
                      { 
                        if (xmlhttp.readyState==4 && xmlhttp.status==200)
                         {
	                        var m=xmlhttp.responseText; 
                            document.getElementById(scrollid).innerHTML=xmlhttp.responseText;	
                        }
                 }
                   //alert("showallcomments?scrollid="+scrollid+"&textid="+textid);
                  //  return false;
                     xmlhttp.open("GET","showallcomments?scrollid="+scrollid+"&textid="+textid,true);
				
                      xmlhttp.send();
 

 
}
</script>
<?php
session_start();
$user=$_SESSION['uname'];
//ini_set( "display_errors", 0); 
include_once('configure.php');
include('global_var.php');
$q_user="select reg_id ,u_type from registration where email='$user'";
$data_user=mysql_query($q_user);
$res_user=mysql_fetch_array($data_user);
$user_id=$res_user['reg_id'];
$utype=$res_user['u_type'];
$friendid=array();
$q1="select reg_id,image_name from registration where email='$user'";
$data1=mysql_query($q1) or die("no");
$res1=mysql_fetch_array($data1);
$id=$res1['reg_id'];
$user_image=$res1['image_name'];
$user_ids_list=$id;
if($utype=='sponsor')
{
	$q2="select friend_id,member_id from follow_status where (member_id='$id' or friend_id='$id') and status='1'";
$data2=mysql_query($q2) or die("no1");
$n=mysql_num_rows($data2);
while($res2=mysql_fetch_array($data2))
{
	if ($res2['friend_id']!= $id){
		$user_ids_list.=",".$res2['friend_id'];
	}
	if ($res2['member_id']!= $id){
		$user_ids_list.=",".$res2['member_id'];
	}
}
}
else
{


$q2="select friend_id,member_id from friend_status where (member_id='$id' or friend_id='$id') and status='1'";
$data2=mysql_query($q2) or die("no1");
$n=mysql_num_rows($data2);
while($res2=mysql_fetch_array($data2))
{
if ($res2['friend_id']!= $id){
$user_ids_list.=",".$res2['friend_id'] ;//.",".$res2['member_id'];
}
if ($res2['member_id']!= $id){
$user_ids_list.=",".$res2['member_id'];
}
}
}
 //$user_ids_list.=",0";
//$q_data="select user_id,audio_id  itemid, audio_url location,video_thumbnail,title,description,'A' item_type,post_date from user_audios where user_id IN ($user_ids_list) and share_id='0'  order by post_date desc";

$q_data=" select * from (  " ;
$q_data.=" select user_id,audio_id itemid,audio_url location,video_thumbnail,title,description,'A' item_type,post_date from user_audios where (user_id IN ($user_ids_list) and share_id='0')  " ;
$q_data.=" union " ;
$q_data.=" select user_id,img_id itemid,image_name location,null video_thumbnail, title,description, 'I' item_type,post_date from user_images where (user_id IN ($user_ids_list) and share_id='0') " ;
$q_data.=" union ";
//$q_data.=" select share_id user_id,shareitem_id itemid,image_name location,null video_thumbnail, title,description, 'I' item_type,post_date from user_images where (share_id IN ($user_ids_list) and user_id='0' and image_name is not null) " ;
//$q_data.=" union ";
$q_data.=" select user_id,video_id itemid,video_url location,video_thumbnail,title,description,'V' item_type ,post_date from user_videos where (user_id IN ($user_ids_list) and share_id='0') ";
$q_data.=" union ";
$q_data.=" select user_id,text_id itemid,text location,null video_thumbnail,null title,null description,'T' item_type ,post_date from user_text where (user_id IN ($user_ids_list) and share_id='0' ) ";
$q_data.=" ) display where trim(location) <> '' order by post_date desc ";
//echo $q_data;
$data_q=mysql_query($q_data);
$num=mysql_num_rows($data_q);
$i=1;
while($res=mysql_fetch_array($data_q))
{
 $uid=$res['user_id'];
$itemid=$res['itemid'];	
$sql_userimage="select image_name,f_name,l_name,email from registration where reg_id='$uid'";
$result_image=mysql_query($sql_userimage);
$row_image=mysql_fetch_assoc($result_image);
$image_name=$row_image['image_name'];
$fname=$row_image['f_name'];
$lname=$row_image['l_name'];
$uemail=$row_image['email'];
$name=$fname.' '.$lname;
$scrolid='scrol_row'.$i;
$likerow='like_row'.$i;

//echo "itemtype="; echo $res['item_type'];
if($res['item_type']=='A'){
	?>
    
    <?php  include('display_audio.php'); ?>
    <?php }elseif($res['item_type']=='I'){?>
	<?php  
	include('display_image.php'); ?>
	<?php }elseif($res['item_type']=='V'){?>
	<?php  
	include('display_video.php'); ?>
	<?php }elseif($res['item_type']=='T'){?>
	<?php  
	include('display_text.php'); ?>
	<?php }?>
    <?php
	$i++; } 
	?>