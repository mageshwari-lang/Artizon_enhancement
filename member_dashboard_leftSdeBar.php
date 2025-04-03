<?php
//session_start();

include('dbconnection.php');
include('member_myaccount_view.php');


?>
<?php
// Define total and used space (example: 100GB total, 45GB used)
$total_space = 10; // in GB
$used_space = 4.5;  // Used space in GB
$remaining_space = $total_space - $used_space;

// Calculate percentages
$used_percentage = ($used_space / $total_space) * 100;
?>	

<aside id="sidebar">
                        <div class="sidebox">
    <div class="row">
<div class="col-md-4">
<div class="pofile-image"> 

<!--<img src="img/member/man.jpg" alt="Profile Image" class="side_thumb" width="150px" />-->
<?php 
 echo '<img id="profilePreview" src="img/member/man.jpg" alt="Profile Picture" style="width:150px;height:150px; margin: 10px 10px 0 45px;
    position: absolute;
    border-radius: 15px;
    border: 1px solid #ffffff;">';

?>
</div>
    
</div>
<div class="col-md-8">
<div class="sidebox_top">
								
				
				<div class="profile-info">
				  <h2><a href="#"><?php echo $fname." ".$lname;?></a></h2>
				  <h2><?php echo $u_type;?></h2>
				  <h2><?php echo $area;?></h2>
				  <h4><a href="/upgrade">Upgrade Now</a></h4>
				   
				  <?php
				  // Get the current file name
					$currentPage = basename($_SERVER['PHP_SELF']);
					
				  if ($currentPage == "member_myaccount.php") {
						echo '<h4><a href="member_dashboard.php">Upload Media</a></h4>';
					}
					
				  ?>
				  <div class="row profileBtns">
				  <div class="col-md-6">
				 
				  <?php
				   if ($currentPage == "member_dashboard.php") {
						echo '<h4><a href="member_myaccount.php">Manage Profile</a></h4>';
					}
				  
				  if ($currentPage == "member_myaccount_edit.php") {
						echo '<h4><a href="member_myaccount.php">Manage Profile</a></h4>';
					} ?>
				
				  </div>
				 
				  <div class="col-md-6"><?php
				  if ($currentPage == "member_myaccount_edit.php") {
						//echo '<h4><a href="#">Edit Picture</a></h4>';
						 echo '<h4><a href="#" onclick="document.getElementById(\'uploadfile\').click(); return false;">Edit Picture</a></h4>';
    
					} 
					
					
					
					?>
					
				  </div>
				  
				  </div>
				 
				</div>
			<div class="row media_counts1">
			<div class="col-md-2"></div>
			<div class="col-md-2 likes">10</div>
			<div class="col-md-4 like_btn btn-green"><span class='bi bi-hand-thumbs-up-fill white-color'></span>Like</div>
			<div class="col-md-4"></div>
				 
				 
			</div>
			
			<!--<div class="row media_counts1">
				 <span class="likes">1</span>
				 <span class="likes like_btn btn-green">Like</span>
			</div>-->
			</div>

<div class="sidebox_mid">   
								
				<div class="row media_counts">
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
				</div>
			
				<div class="container mt-2">
    
    
    <div class="progress-container">
	 
        <div class="progress">
            <div class="progress-bar" role="progressbar" 
                style="width: <?php echo $used_percentage; ?>%;" 
                aria-valuenow="<?php echo $used_percentage; ?>" 
                aria-valuemin="0" aria-valuemax="100">
            </div>
            <!--<div class="progress-text"><?php //echo round($used_percentage, 2); ?>% Used</div>-->
        </div>
		<p class="mt-2">Used Space: <?php echo $used_space; ?> GB / <?php echo $total_space; ?> GB</p>
        <div class="stopper"></div>
    </div>

   
</div>
								<div class="row media_counts">
                                <ul>
                                    <li><a href="/viewactivity?logid=42&amp;actcon=4">Photos 9</a></li>
                                    <li><a href="/viewactivity?logid=42&amp;actcon=2">Videos 2</a></li>
                                    <li><a href="/viewactivity?logid=42&amp;actcon=3">Audios 1</a></li>
                                </ul>
								</div>
                             </div>

    
<div class="sidebox_bottom">  
							<p><span class="notification1">About artist</span><br/>
                                <?php echo $about_me;?>
								<!--15 years of experience in variuos industries/fields-photography, Graphic Designing, Outbiund collections, HR Operations, Data Mgt, Quality Audits, Arts & Crafts, Technical Writing, Singing, jewellery Design, Painting, Pottery, Flower Making, Embosing, Etching, Meenakari Work, Inbound Operations, Communications.--></p>

                            </div></div>
        
    </div>
                            
                              
                               
                            
                            
							
                        </div>
                        <div id="add_kill"></div>
                    </aside>