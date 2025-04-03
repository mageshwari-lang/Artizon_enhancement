<?php
session_start();

if (!isset($_SESSION['uname'])) {
    header("Location: login.php");
    exit();
}
$uname='';
if(isset($_SESSION['uname'])) {
$uname=$_SESSION['uname'];
}
include('dbconnection.php');
include('member_myaccount_view.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Artizonhub :: Member Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!--<link href="<?php //echo $fullpath;?>.css" rel="stylesheet" type="text/css" />-->
<link href="css/MemebrPage.css" rel="stylesheet" />
</head>


<body>
<?php include('member_dashboard_header.php');?>
  
  
  <main id="content">
  <div class="container-fluid"><!-- id="content_inner"--->
	 <div class="row page"> <!--id="page"-->
				<div class="col-sm-4 col-md-4" style="background-color:yellow1;">
				
	<?php include('member_dashboard_leftSdeBar.php');?>
	

				</div>				
				<div class="col-sm-8 col-md-8 profile-content">
						<div class="row profile-details">
					<div class="col-sm-2 profile-page-title">About</div>
<div class="col-sm-2 profile-page-title">Account vitlas</div>
<div class="col-sm-7" >

<ul class="short-info">
<li>Area: <?php echo $area;?></li>|
<li>Account: <?php echo $mem_type;?> (Upgrade to premium)</li>|<br>
<li>Email: <?php echo $tememail;?></li>|
<li>Signup Date: <?php echo $u_createtime;?> <a href="member_myaccount_edit.php" class="edit_link">(Edit)</a></li>
</ul>
</div>
	<div class="col-sm-1"></div>				
					
					</div>
					<form action="#" class="form-group">
    <div class="frm-container profile-General-info">
        <div class="form-title">General Info</div>
        
        <div class="general-form">
            <div class="col-md-6 frm-container personal-info">
                <div class="form-sub-title">Personal Info</div>
					 <div class="form-group">
					<div class="row">
					<div class="col-md-6">
					
<div class="input-group">
    <span class="input-label">First Name:</span>
                    <input type="text" id="fname" name="fname" value="<?php echo $fname;?>" readonly placeholder="Enter First Name">
                </div>
                
					
					</div>
					<div class="col-md-6">
					
<div class="input-group">
    <span class="input-label">Last Name:</span>
                    <input type="text" id="lname" name="lname" value="<?php echo $lname;?>" readonly placeholder="Enter Last Name">
                </div>
              
					</div>					
					</div>
					</div>
                

  <div class="form-group">               
<div class="row">
					<div class="col-md-6">
                <div class="input-group">
                    <label for="sel1" class="profile-label">Gender:</label>
					<?php if($gender=='male'){$malecheck='checked';}else{$malecheck='';}?>
               <?php if($gender=='female'){$femalecheck='checked';}else{$femalecheck='';}?>
                    <div class="radio-group">
                        <label><input type="radio" name="gender" value="male" <?php echo $malecheck;?> disabled> Male</label>
                        <label><input type="radio" name="gender" value="female" <?php echo $femalecheck;?> disabled> Female</label>
                    </div>
                </div>
                </div>

                <div class="col-md-6">
					
<div class="input-group">
    <span class="input-label">Birth Date:</span>
                    <input type="date" id="birthDate" name="birthDate" readonly value="<?php echo $dob;?>">
                </div>
                </div>
                </div>
                </div>

                <div class="form-group">
<div class="input-group">
    <span class="input-label">Address:</span>
                    <input type="text" id="address" name="address" value="<?php echo $address;?>" readonly placeholder="Enter Address">
                </div>
                </div>

                <div class="form-group">
<div class="input-group">
    <span class="input-label">E-Mail:</span>
                    <input type="email" id="email" name="email" value="<?php echo $tememail;?>" readonly placeholder="Enter Email">
                </div>
                </div>

                   <div class="form-group">
<div class="input-group">
    <span class="input-label">Phone Number:</span>
                    <input type="text" id="phone" name="phone" value="<?php echo $mobile;?>" readonly placeholder="Enter Phone Number">
                </div>
                </div>
            </div>

            <div class="col-md-6 frm-container about-info">
                <div class="form-sub-title">About Me</div>
                <div class="form-group">
<div class="input-group textarea-group">
    <span class="input-label">About Me:</span>
    <textarea id="additional" name="additional" rows="5" value="" readonly placeholder="Enter Additional Info"><?php echo $about_me;?></textarea>
</div>
            </div>
        </div>
    </div>

    <div class="frm-container profile-Other-info">
        <div class="form-title">Favorite/Hobby</div>
        <div class="general-form">
            <div class="col-md-6">
			<div class="form-group">
     <label for="sel1" class="profile-label">Please select the topic that you are interested in:</label>
    <div class="custom-dropdown">
        <select class="form-control" name="interests" id="interests" >
		<option value="" selected disabled>-- Select --</option>
            <option value="arts" <?php if($interests=="arts") echo "selected";?>>Arts</option>
			<option value="craft" <?php if($interests=="craft") echo "selected";?>>Craft</option>
            <option value="music" <?php if($interests=="music") echo "selected";?>>Music</option>
            <option value="toys" <?php if($interests=="toys") echo "selected";?>>Clay Toys</option>
        </select>
        <span class="dropdown-icon">&#9662;</span> <!-- Unicode for downward arrow -->
    </div>
</div>

			
                <div class="form-group">
<div class="input-group">
    <span class="input-label">Inspiration:</span>
                    <input type="text" id="inspiration" name="inspiration" readonly value="<?php echo $inspiration;?>" placeholder="Enter Inspiration">
                </div>
                </div>

                <div class="form-group">
<div class="input-group textarea-group">
    <span class="input-label">Primary skills:</span>
    <textarea id="additional" name="additional" rows="5" value="" readonly placeholder="Enter Additional Info"><?php echo $skill;?></textarea>
</div>
</div>
            </div>

            <div class="col-md-6 additional-info">
               <div class="form-group">
			   
<div class="input-group">
 
    <span class="input-label">Website:</span>
    <input type="text" id="website" name="website" readonly value="<?php echo $website;?>" placeholder="Enter Website URL">
</div>
</div>

                <!-- Website Input -->
				<div class="form-group">
<div class="input-group">
    <span class="input-label">Location:</span>
    <input type="text" id="website" name="website" readonly value="<?php echo $area;?>" placeholder="Location/Area">
</div>
</div>

<!-- Additional Info Textarea -->
<div class="form-group">
<div class="input-group textarea-group">
    <span class="input-label">Additional Info:</span>
    <textarea id="additional" name="additional" rows="5" readonly value="<?php echo $country;?>" placeholder="Enter Additional Info"></textarea>
</div>
</div>
            </div>
        </div>
    </div>

   <!-- <button type="submit" class="save-btn">Save</button>-->
</form>
	</div>		
          
      </div>   <!--id="page"-->				
  
  </div>
         
			
	</div>		
          
        </main>
</body>
</html>