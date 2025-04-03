<?php
session_start();

if (!isset($_SESSION['uname'])) {
	die("Unauthorized access! Please log in first.");
    header("Location: login.php");
    exit();
}
$uname='';
if(isset($_SESSION['uname'])) {
$uname=$_SESSION['uname'];
}
include('dbconnection.php');
//include('member_myaccount_view.php');
$error_message = ""; // To store error messages

	
if(isset($_POST['submit']))
{
	
	$fname = trim($_POST['fname']);
	$lname = trim($_POST['lname']);
	$gender = trim($_POST['gender']);
	$birthDate = trim($_POST['birthDate']);
	$address = trim($_POST['address']);
	$email = trim($_POST['email']);
	$area = trim($_POST['area']);
	$phone = trim($_POST['phone']);
	$aboutme = trim($_POST['aboutme']);
	$interests = trim($_POST['interests']);
	$inspiration = trim($_POST['inspiration']);
	$primaryskills = trim($_POST['primaryskills']);
	$website = trim($_POST["website"]);
	$comments = trim($_POST['comments']);
	$imgname = trim($_POST['uploadfile2']);
	
	
	
	/*//validation for website
	 if (empty($website)) {
       $websiteErr = "Website field is required.";
    } elseif (!filter_var($_POST["website"], FILTER_VALIDATE_URL)) {
        $websiteErr = "Invalid website URL. It must start with http:// or https://";
    } else {
        $website = htmlspecialchars($_POST["website"]);
    }
	//validation for website*/
	
	$sql_update="update registration set f_name = '$fname', l_name = '$lname', gender = '$gender', dob = '$birthDate', 
                    address = '$address', email = '$email', area = '$area', mobile = '$phone', about_me = '$aboutme', 
                    interests = '$interests', inspiration = '$inspiration', skill = '$primaryskills', 
                    website = '$website', image_name = '$imgname', comments = '$comments'
                   WHERE email='$uname'";
	//echo $sql_update;
	//exit();
	
	if(mysqli_query($conn, $sql_update)){
		//echo"I am in success path";
		//exit();
				echo "<script>
                    document.addEventListener('DOMContentLoaded', function() {
                        let successMsg = document.getElementById('success-message');
                        successMsg.style.display = 'block';
                        setTimeout(() => {
                            successMsg.style.opacity = '0';
                            setTimeout(() => { window.location.href='member_myaccount_edit.php'; }, 100);
                        }, 500);
                    });
                  </script>";
        } else {
			echo"I am in error path";
		exit();
            $error_message = "Error updating record: " . $stmt->error;
        }
}

?>
<!-- Display Success Message -->
<div id="success-message" style="display:none; position:fixed; top:10px; left:50%; transform:translateX(-50%);
    background-color:green; color:white; padding:10px; border-radius:5px; opacity:1; transition:opacity 1s;">
    Profile Updated Successfully!
</div>

<!-- Display Error Message -->
<?php if(!empty($error_message)): ?>
<div style="position:fixed; top:10px; left:50%; transform:translateX(-50%);
    background-color:red; color:white; padding:10px; border-radius:5px;">
    <?php echo $error_message; ?>
</div>
<?php endif; ?>

