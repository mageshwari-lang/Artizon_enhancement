<?php
include('configure.php');

$sql_add1="select * from advertise where ads_placement='profile_pages' and img_pos='4' order by rand()";
//echo $sql_add1;
		  $resultadd=mysql_query($sql_add1);
		  $totadds=mysql_num_rows($resultadd);
		  if($totadds)
		  { 
		      $row_add1=mysql_fetch_assoc($resultadd);  
			  $adds_id=$row_add1['ads_id'];
			  $ladd1=$row_add1['image'];
			  $ladd1_url=$row_add1['image_url'];
		  ?>
          <div class="add5"><a href="<?php echo  $ladd1_url;?>" target="_blank" onclick="javascript:add_click(<?php echo $adds_id;?>);"><img src="<?php echo $fullpath;?>admin/uploads/images/<?php echo $ladd1;?>" alt="" /></a></div>
		  <?php }else{?>
		  <div class="add5"><img src="<?php echo $fullpath;?>images/add.png"  /></div>
		  <?php }?>
		  
		  
		  
		  
		  
		  
		  
		  
		  







	