 <?php if($imgname){?>
             <div class="sidebox_top"><span class="side_thumb">
			 <a class="fancybox2"  href="<?php echo $fullpath;?>uploads/<?php echo $uname;?>/image/<?php echo $imgname;?>" >
			 <img  src="<?php echo $fullpath;?>thumb.php?src=<?php echo $fullpath;?>uploads/<?php echo $uname;?>/image/<?php echo $imgname;?>" alt="" onerror="this.src='<?php echo $fullpath;?>thumb.php?src=<?php echo $fullpath;?>images/man.jpg'"/></a></span>
									<?php } else { ?>
          
            <div class="sidebox_top"> 
			<span class="side_thumb"><img src="<?php echo $fullpath;?>thumb.php?src=<?php echo $fullpath;?>images/man.jpg" alt="" /></span>
            <?php }?>
              <?php $usetype=$spon_obj->get_user_type($uid);?>
            
              <h2><a href="<?php echo $fullpath;?>profileview?tempid=<?php echo $uuid;?>"><?php echo $name;?></a></h2>
              <h3><?php echo $utype;?><br />
                <?php echo $area;?></h3>
              <?php if($user_con=='free'){?>
				<h4><a href="upgrade">Upgrade Now </a></h4>
			  <?php } elseif($user_con==''){?>
				<h4><a href="upgrade">Upgrade Now </a></h4>
			  <?php }else{?>
			  <h4><a>Premium Account</a></h4>
			  <?php }?>
              <h4 style="float:left;"><a href="<?php echo $fullpath;?>goprofile" class="logout" style="margin:0;">Manage Profile</a></h4>
			  
             <?php $prof_likes=$spon_obj->get_profile_like_count($memid,$uid); ?>
			
              <span class="likes"><?php echo $prof_likes;?></span> 
			  <span class="like_button"><b></b>Like</span> 
			  
			  </div>
            <!--close sidebox_top-->
              <?php 
                $fricount=$spon_obj->connection_count($uid);
				$recount=$spon_obj->recommendation_count($uid);
			 ?>

<div class="sidebox_bottom">
              <ul>
                <li>
                  <h5><?php echo  $fricount;?></h5>
                  <h6>Connections</h6>
                </li>
                <li>
                  <h5><?php echo $recount;?></h5>
                  <h6>Recommendations</h6>
                </li>
                <li>
                  <h5><?php echo $viewcount;?></h5>
                  <h6>Views</h6>
                </li>
              </ul>
               <?php  
			  $upcount=$spon_obj->upload_count($uid);
			  $uparr=explode('/',$upcount);
			  $upimg=$uparr[0];
			  $upvid=$uparr[1];
			  $upaud=$uparr[2];
				if ($utype == 'member'){
      		  ?>
              <h3>Total Size Used: <?php echo $fsize; echo $ftype;?> Out of <?php echo $allowed_space_title;?></h3>
              <?php 
			   if($user_con!='free'){
			  $spcover = spacecover_gb($fsize,$ftype);
			  }else{$spcover = spacecover($fsize,$ftype);}
			  ?>
            
                          
                   <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
				   <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
                <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
				 <script>
					  $(function() {
						$( "#progressbar" ).progressbar({
						  value: <?php  if($fsize==0){echo '0';}else{echo $spcover;};?>
						});
					  });
			  </script>
<?php //echo $fsize;?>
              <div id="progressbar"><span><?php if($fsize==0){echo '0';}else{echo $spcover;}?>%</span></div>
			  <?php }?>
			  
			  <ul>
                <li>
                  <h4 style="padding:0;"><a href="<?php echo $fullpath;?><?php echo $mention;?>/viewactivity?logid=<?php echo $uid;?>&actcon=4">Photos <?php echo $upimg;?></a></h4>
                </li>
                <li style="background:none;">
                  <h4 style="padding:0;"><a href="<?php echo $fullpath;?><?php echo $mention;?>/viewactivity?logid=<?php echo $uid;?>&actcon=2">Videos <?php echo $upvid;?></a></h4>
                </li>
                <li style="background:none;">
                  <h4 style="padding:0;"><a href="<?php echo $fullpath;?><?php echo $mention;?>/viewactivity?logid=<?php echo $uid;?>&actcon=3">Audios <?php echo $upaud;?></a></h4>
                </li>
              </ul>
			  
              <!--<span class="notification"><a href="#"><b></b>Notification</a></span>-->
               <?php
			   if($tmpid==0){ $sponbyid=$uid; }
							  else {$sponbyid=$tmpid;}
			  $con_spo=0; 
			  $spreq =$spon_obj->check_sponsorrequest($sponbyid);
			  if($spreq){
				  $con_spo=1;
				  $sprdetail=explode('/',$spreq);
				  $sp1=$sprdetail[0];
				  $sp2=$sprdetail[1];
				  $spname=$spon_obj->get_memname($sp2);
			   }else{
				   $spreqs=$spon_obj->check_sponsorrequest_new($sponbyid);
				   if($spreqs){$con_spo=1;}
				   $spname=$spon_obj->get_memname($spreqs);
			   }
			  ?>
              <?php if($con_spo==1){?>
              <?php if(!$spreqs){?>
              <div id="spo_req">
              <span class="notification"><?php echo $spname;?> wants to sponsor you
                    <span style="float: left;margin: 0 30px 0 50px;"><a style="background: #999;padding: 5px;border-radius: 5px; cursor:pointer;" onclick="javascript:sponsor_requestresponse(<?php echo $sp1;?>,2);">Accept</a></span>
                    <span style="float: left;margin: 0 30px 0 0;"><a  style="background: #999;padding: 5px;border-radius: 5px; cursor:pointer;" onclick="javascript:sponsor_requestresponse(<?php echo $sp1;?>,3);">Ignore</a></span>
               </span>
               </div> 
               <?php }else{?>
                <span class="notification">Sponsored by <?php echo $spname;?></span> 
               <?php }?>
               
               <?php }?>
              
              
              
               </div>
            <!--close sidebox_bottom--> 
