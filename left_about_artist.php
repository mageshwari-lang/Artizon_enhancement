<div class="sidebox_bottom">
<?php

include('configure.php');

$sql_add1="select * from about_artist where user_id = '$uid' limit 1";
//echo $sql_add1;
		  $resultadd=mysql_query($sql_add1);
		  $totadds=mysql_num_rows($resultadd);
		  if($totadds)
		  { 
		  ?>
		 
       
		  <div id="aboutartistshow">
		  <h3>About Artist</h3>
		  <?php 
		  while($row_add1=mysql_fetch_array($resultadd))
		   {
		   $about_desc=$row_add1['about_desc'];
		   ?>
			 <h4> <?php echo $about_desc;?></h4>
													
			   
			  <?php }?>
		  </div>
		
		  <?php }?>
		  </div>
		  
		  
		  
		  
  
		  
		  
		  
		  

		  
		  
	