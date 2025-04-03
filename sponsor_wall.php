<?php
session_start();

//$topimages=$spon_obj->topaudios();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Talent Link</title>

<link href="<?php echo $fullpath;?>style.css" rel="stylesheet" type="text/css" />

<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />

<link href="jw_js/plupupload/jquery.plupload.queue/css/jquery.plupload.queue.css" rel="stylesheet">


    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
    
		<script type="text/javascript" src="<?php echo $fullpath;?>js/jquery.reveal.js"></script>
        
<script type="text/javascript" src="<?php echo $fullpath;?>js/jquery-1.10.1.min.js"></script>

	<script type="text/javascript" src="<?php echo $fullpath;?>js/jquery.fancybox.js"></script>
    
	<link rel="stylesheet" type="text/css" href="<?php echo $fullpath;?>jquery.fancybox.css"/>
	<script type="text/javascript" src="<?php echo $fullpath;?>js/jquery.fancybox-media.js"></script>
    
    <script type="text/javascript" src="<?php echo $fullpath;?>add_click_function.js"></script>

	
    
 <script type="text/javascript" src="<?php echo $fullpath;?>jwplayer/jwplayer.js"></script>   
<script type="text/javascript" src="js/jquery.min.js"></script>


	
        <!--<link rel="stylesheet" href="reveal.css">-->
        
      <link rel="stylesheet" href="<?php echo $fullpath;?>reveal.css">



</head>
<?php //include('loadsponsordetails.php');  ?>




    
    

<body style="background:url(<?php echo $fullpath;?>/images/bg_inner.jpg) no-repeat center center fixed; background-size: cover;">
<div id="wrapper">
<div id="header">
jjjjjjjj
  <?php include('sponsorheadercontainer.php');?>
    
  </div>
  <!--close header-->
  
  <div id="content" >
    <div id="content_inner">
      <div id="page">
        <?php include('sponsortopnavigation.php');?>
        
        <div id="sidebar">
          <?php include('sponsorsidebox.php');?>  
     <?php 
	          
	            include('left_advertisement.php');
				
	 ?>

          <!--close add2--> 
        </div>
        <!--close sidebar-->
        
        <div id="rightbar">
        
          <div class="edit_video_row">
      
         <?php 
	            
	            include('sponsor_add_content.php');
				
	 ?>     
                     
            <div class="rightbar_inn">
              
              <!--close profile_tab-->
              
                <link href="<?php echo $fullpath;?>jquery.mCustomScrollbar.css" rel="stylesheet" />

	<script src="<?php echo $fullpath;?>jquery.mCustomScrollbar.concat.min.js"></script>
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
    
              

                       <div class="image_cntent" id="showpost">
                         <?php include('display_content.php');?>
                       </div><!--image_cntent-->
                    
                       
                       
              
              
              
            </div>
            <!--close rightbar_inn--> 
            
               <?php include('mid_advertisement.php');?>
              
            
           
            </div>
            
          </div>
          <!--edit_video_row--> 
        </div>
        <!--close rightbar--> 
        
     
      
      <div class="clear"></div>
    </div>
    <!--close content_inner--> 
    
  </div>
  <!--close content-->
  
<?php //include('footer.php');?>
  
</div>
<!--close wrapper-->



</body>
</html>
