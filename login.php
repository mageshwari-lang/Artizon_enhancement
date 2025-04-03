<?php include('dbconnection.php');
date_default_timezone_set('UTC');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Artizonhub :: Login Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!--<link href="<?php //echo $fullpath;?>.css" rel="stylesheet" type="text/css" />-->
<link href="css/loginPage.css" rel="stylesheet" />


</head>

<body>
<div id="wrapper">
<div id="header" >
  <div class="container">
  <div class="row">
  <div class="col-md-4 logo-img">
  <a href="index.php"><img src="img/Mainlogo.png" alt="" /></a>
  </div>
<div class="col-md-8 quick-form">
    <form action="login_quickloginFrm.php" method="post" name="pay1" onsubmit="return loginValidate();">
        <table>
            <tr>
                <td><input name="uemail" type="text" class="username" maxlength="50" placeholder="Email" /></td>
                <td><input name="upass" type="password" class="password" maxlength="30" placeholder="Password" /></td>
                <td><input name="reg_login" type="submit" class="submit" value="Sign In" /></td>
                <td>
                    <div class="forget-passw">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#myModal">Forgot Password?</a>
                    </div>
                </td>
            </tr>
        </table>
    </form>
</div>

<!-- Modal -->
<div class="modal quick-form-modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content popup-forget">
            <form action="login_forgotFrm.php" name="forgot_pass" method="post" onsubmit="return forgotValidate();">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Forgot Password?</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-login_main">
                        
                        <h5>Enter the email you used to register</h5>
                        <span class="row6">
                            <img src="<?php echo $fullpath;?>images/message.gif" alt="" />
                            <input name="foremail" type="text" class="input6" />
                            <span id="email_message"></span>
                        </span>
                        <span class="row6">
                            <input name="for_login" type="submit" value="Submit" class="buton7" />
                        </span>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

  
  
  
 </div>
  
  
  
  

    
  </div>
  <!--close container--> 
  
</div>
<!--close header-->

<!----content starts here--->
<div id="login-content">  
   
     <div class="container">
	 <div class="row content-row">
	 <div class="col-md-6 get-notice">
	 <div class="caption">
					<h3><b>Get noticed today.</b></h3>
					<p>Think you've found your niche. Have you been searching to collaborate with like minded people. <b>Talent Link</b>
					gives you the opportunity to get your name out there. Whether its through art, music, business or really anything. Talent Link is looking to bring
					people together. Let's start a movement.</p></div>
	 
	 </div>
	 <div class="col-md-6 register-form">
	 <form action="login_register.php" method="post" name="pay" id="registrationForm">
  <div class="form_header">
    <label>It's Free. Get Started.</label>
  </div>
  <div class="form">
    <div class="form_row">
      <label>First Name:</label>
      <input name="fname" id="fname" type="text" class="input" maxlength="30" placeholder="First Name"  onkeyup="first_check(1);" maxlength="30" value="" onfocus="if (this.value == 'First Name') {this.value = '';}" onblur="if (this.value == '') {this.value = 'First Name';}"   />
      
	   <span id="first_message"></span>
	   <!--<input name="fname" id="fname" type="text" class="input" onkeyup="first_check(1);" maxlength="30" value="First Name" onfocus="if (this.value == 'First Name') {this.value = '';}" onblur="if (this.value == '') {this.value = 'First Name';}" />
	   
	   <div class="err-msg" id="first_message"></div>
	   -->
    </div>
    <div class="form_row">
      <label>Last Name:</label>
      <input name="lname" id="lname" type="text" class="input" maxlength="30" placeholder="Last Name"  />
      <div class="err-msg" id="last_message"></div>
    </div>
    <div class="form_row">
      <label>Email:</label>
      <!--<input name="email" id="email" type="email" class="input" maxlength="50" placeholder="Email"  />
      <div class="err-msg" id="email_message1"></div>
      <div class="style1" id="showuser"></div>-->
	  <input name="email" id="email" type="text" class="input" onKeyUp="display(this.value)"  maxlength="50" onpaste="return false;" autocomplete="off" value="" Placeholder="Email" onfocus="if (this.value == '') {this.value = '';}" onblur="if (this.value == '') {this.value = '';}" />
                  <br/><span id="email_message1"></span>
				  <div class="style1" id="showuser"></div>
    </div>
	<!-- <div class="form_row">
      <label>Country:</label>
      <input name="country" id="country" type="country" class="input" maxlength="50" placeholder="country" required />
      <div class="err-msg" id="email_message1"></div>
      <div class="style1" id="showuser"></div>
    </div>-->
	<div class="form_row">
      <label>Country:</label>
	<?php
	
	// Query to fetch country names
$sql = "SELECT id, country_name FROM countries ORDER BY country_name ASC";
$result = mysqli_query($conn, $sql);
	
	?>
	 <select name="country" id="country" required>
            <option value="">-- Select Country --</option>
            <?php
            // Display fetched countries inside <option> elements
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . htmlspecialchars($row['country_name']) . "'>" . htmlspecialchars($row['country_name']) . "</option>";
                }
            } else {
                echo "<option value=''>No Countries Found</option>";
            }
            ?>
        </select>
		</div>
    <div class="form_row">
      <label>Password:</label>
      <input name="pass" id="pass" type="password" class="input" maxlength="30" placeholder="Password" required />
      <div class="err-msg" id="pass_message"></div>
    </div>
    <div class="form_row">
      <label>Re-enter Password:</label>
      <input name="repass" id="repass" type="password" class="input" maxlength="30" placeholder="Password" required />
      <div class="err-msg" id="repass_message"></div>
    </div>
    <div class="form_row">
      <label>Profile URL:</label>
      <span>TalentLink/&nbsp;</span>
	  
	   <!-- <input name="mention" id="mention" type="text" class="inputnew" maxlength="30" onkeyup="displaymentioncheck(this.value);" onpaste="return false;" autocomplete="off"  />
                  <span id="mention_message"></span>
	  -->
	  
      <input name="mention" id="mention" type="text" class="inputnew" maxlength="30" onkeyup="displaymentioncheck(this.value);" onpaste="return false;" autocomplete="off"  placeholder="Profile URL" />
	   <br/><span id="mention_message"></span>
	   
	   
      <!--<div class="err-msg" id="mention_message"></div>-->
    </div>
    <div class="form_row">
      <label>User Type:</label>
      <span>
        <input name="utype" id="utype1" type="radio" value="sponsor" class="radio" required />
        Sponsor
      </span>
      <span>
        <input name="utype" id="utype" type="radio" value="member" class="radio" checked="checked" required />
        Member
      </span>
    </div>
    <div class="form_row terms-msg">
      <div id="term_message"></div><br/>
      <label class="terms">
        <input name="termcond" type="checkbox" required />
        I have read the <a href="/terms">Terms of use</a> of TalentLink
      </label>
    </div>
    <div class="form_row signup-here">
      <input name="reg_submit" id="reg_submit" type="submit" class="submit2" value="Sign Up" />
    </div>
  </div>
  <!--close form-->
</form>

<!-- Modal
<div class="modal fade" id="successModal111" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Success</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Email sent successfully!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Registration Successful</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                   
                </button>
            </div>
            <div class="modal-body">
                Registration successful! Please check your email to activate your account.
            </div>
            <div class="modal-footer">
               
				 <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- The Modal 
<div class="modal" id="successModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Success</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                Email sent successfully!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
-->



<!-- Modal Popup 
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Congratulations! Registration successful.</p>
    <p>Please check your email to activate your account.</p>
  </div>
</div>-->

 <script>
        $(document).ready(function(){
            const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('registration') === 'success') {
            // Show the success modal if the registration flag is present
            $('#successModal').modal('show');
            
            // Redirect to login.php when the modal is closed
          
        }
        });
		
		  $('#successModal').on('hidden.bs.modal', function () {
                window.location.href = 'login.php';
            });
    </script>

	 
	 
	 
	 </div>
	 
	 
	 
	 
	 
	 </div>
	 </div>
	 
	 
	 
	 
	 
	 
	 
	 
        
    

	
	
</div>

<!----content starts here--->
<div class="footer"> 
<div class="container"> 
<ul>
				   <li>© <?php echo date("Y"); ?> &nbsp;<a href="index.php">Artizonhub.com.</a></li>
				   <li><a href="http://104.131.245.70/about">About</a></li>
				   <!--li><a href="#">Blog</a></li-->
				   <li><a href="http://104.131.245.70/ads">Ads</a></li>				   
				   <li><a href="http://104.131.245.70/terms">Terms </a></li>
				   <li><a href="http://104.131.245.70/privacy">Privacy</a></li>
               </ul> 
			   </div>
			   </div><!--footer ends-->

</div> <!----Wrapper close-->
<script src='js/login_validationjs.js' type="text/javascript"></script>
</body>

</html>
