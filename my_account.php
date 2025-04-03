<?php
session_start();
// Additional PHP logic here
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Layout with Logo, Navbar, and Search Box</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
  /* Customize your logo, navbar, and search box as needed */
.navbar-brand img {
    max-height: 40px; /* Adjust the logo size */
}

.search-box {
    position: relative;
}

.search-box input[type="search"] {
    padding-right: 40px;
}

.search-box button {
    position: absolute;
    right: 0;
    top: 0;
    bottom: 0;
    border: none;
    background-color: transparent;
    padding: 0 10px;
    cursor: pointer;
}

.search-box i {
    font-size: 1.2rem;
    color: #000;
}

    
    </style>
	 <!-- Custom CSS -->
    <link rel="stylesheet" href="css/MemebrPage.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #33b6c0;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/images/Latest-Logo.png" width="120" height="40" alt="Talent Link Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">My Hub</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">My Shop</a>
                    </li>
					 <li class="nav-item">
                        <a class="nav-link text-white" href="#">My Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">LogOut</a>
                    </li>
                </ul>
                <form class="d-flex ms-3 search-box" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </nav>

 <main id="content">
            <div class="container"><!-- id="content_inner"--->
          <!------new version------->
		  <div id="pageprofile">
    <div id="profile_image"></div>

    <div id="sidebarprofile">
        <div class="sidebox_top">
            <img src="http://104.131.245.70/thumb.php?src=http://104.131.245.70/images/man.jpg" alt="Profile Image" class="side_thumb">
            <h2><a href="http://104.131.245.70/profileview?tempid=">User Name</a></h2>
            <h4><a href="upgrade" class="upgrade_link">Upgrade Now</a></h4>
            <h4><a href="http://104.131.245.70/goprofile" class="logout">Manage Profile</a></h4>
            <div class="likes_section">
                <span class="likes">0</span>
                <button class="like_button">Like</button>
            </div>
        </div>
        <!-- close sidebox_top -->

        <div class="sidebox_bottom">
            <ul class="profile_stats">
                <li>
                    <h5>0</h5>
                    <h6>Connections</h6>
                </li>
                <li>
                    <h5>0</h5>
                    <h6>Recommendations</h6>
                </li>
                <li>
                    <h5>0</h5>
                    <h6>Views</h6>
                </li>
            </ul>

            <ul class="profile_activity">
                <li><a href="http://104.131.245.70/viewactivity?logid=139&amp;actcon=4">Photos 0</a></li>
                <li><a href="http://104.131.245.70/viewactivity?logid=139&amp;actcon=2">Videos 0</a></li>
                <li><a href="http://104.131.245.70/viewactivity?logid=139&amp;actcon=3">Audios 0</a></li>
            </ul>
        </div>
        <!-- close sidebox_bottom -->
    </div>
    <!-- close sidebarprofile -->

    <div id="rightbarProfile">
        <div class="rightbar_inn">
            <div id="myModal_message" class="reveal-modal">
                <h1>Messages</h1>
                <div class="popup_box1">
                    <h2>New Message</h2>
                    <form id="uploadForm" name="message_form" action="messagepopsave" method="post">
                        <div class="popup_row">
                            <label>To</label>
                            <input type="text" name="mess" readonly>
                            <input type="hidden" name="id" id="to_id" readonly>
                            <input type="hidden" name="byid" id="by_id" value="139" readonly>
                        </div>
                        <div class="popup_row">
                            <label>Message</label>
                            <textarea name="descript" id="message" class="popup_textarea"></textarea>
                        </div>
                        <button type="submit" class="submit_popup">Submit</button>
                    </form>
                </div>
                <!-- close popup_box1 -->
                <button class="close-reveal-modal">×</button>
            </div>
            <!-- close myModal_message -->

            <div id="tab1">
                <form action="profile_update.php" method="post" name="edit_form" class="edit_form_profile" enctype="multipart/form-data">
                    <div class="profile">
                        <div class="profile_thumb1">
                            <img id="blah" src="http://104.131.245.70/images/profile_thumb.png" alt="Profile Thumbnail">
                            <div>
                                <a href="http://104.131.245.70/mv/setting" class="logout">Edit Profile</a>
                            </div>
                        </div>

                        <div class="profile_text">
                            <h3>Account Vitals</h3>
                            <h5><span>Area:</span> Area Name</h5>
                            <h5><span>Account:</span> Free (Upgrade to Premium)</h5>
                            <h5><span>Email:</span> user@example.com</h5>
                            <h5><span>Signed On:</span> 01/01/1970</h5>
                            <h5><span>Mention:</span> Mention Text</h5>
                            <span class="view">0 Views</span>
                        </div>
                    </div>
                    <!-- close profile -->

                    <div class="personalInfo">
                        <fieldset>
                            <legend>Personal Info</legend>
                            <div>
                                <label>Name:</label>
                                <span>User Name</span>
                            </div>
                            <div>
                                <label>Gender:</label>
                                <span>Gender</span>
                            </div>
                            <div>
                                <label>Date of Birth:</label>
                                <span>01/01/1970</span>
                            </div>
                            <div>
                                <label>Area:</label>
                                <span>Area Name</span>
                            </div>
                            <div>
                                <label>Mobile Number:</label>
                                <span>+1234567890</span>
                            </div>
                        </fieldset>
                    </div>
                    <!-- close personalInfo -->

                    <div class="aboutme">
                        <fieldset>
                            <legend>About Me</legend>
                            <textarea name="aboutme" class="textarea2" readonly>About me text</textarea>
                        </fieldset>
                        <div>
                            <label>Home Phone:</label>
                            <span>+1234567890</span>
                        </div>
                    </div>
                    <!-- close aboutme -->

                    <div class="addressInfo">
                        <fieldset>
                            <legend>Address Details</legend>
                            <div>
                                <label>Address:</label>
                                <span>123 Street, City</span>
                            </div>
                            <div>
                                <label>Zipcode:</label>
                                <span>12345</span>
                            </div>
                            <div>
                                <label>City:</label>
                                <span>City Name</span>
                            </div>
                            <div>
                                <label>State:</label>
                                <span>State Name</span>
                            </div>
                            <div>
                                <label>Country:</label>
                                <span>Country Name</span>
                            </div>
                        </fieldset>
                    </div>
                    <!-- close addressInfo -->

                    <div class="favoriteHobby">
                        <fieldset>
                            <legend>Favorite / Hobby</legend>
                            <div>
                                <label>Primary Skill:</label>
                                <span>Skill</span>
                            </div>
                            <div>
                                <label>Secondary Skill:</label>
                                <span>Skill</span>
                            </div>
                            <div>
                                <label>Hobby:</label>
                                <span>Hobby Name</span>
                            </div>
                            <div>
                                <label>Sports:</label>
                                <span>Sports Name</span>
                            </div>
                            <div>
                                <label>Favorite Athletes:</label>
                                <span>Athlete Name</span>
                            </div>
                            <div>
                                <label>Favorite Sport:</label>
                                <span>Sport Name</span>
                            </div>
                            <div>
                                <label>Music:</label>
                                <span>Music Name</span>
                            </div>
                            <div>
                                <label>Favorite Musicians/Bands:</label>
                                <span>Musician/Band Name</span>
                            </div>
                            <div>
                                <label>Favorite Type of Music:</label>
                                <span>Music Type</span>
                            </div>
                            <div>
                                <label>Arts:</label>
                                <span>Art Name</span>
                            </div>
                            <div>
                                <label>Favorite Artists:</label>
                                <span>Artist Name</span>
                            </div>
                        </fieldset>
                    </div>
                    <!-- close favoriteHobby -->

                    <div id="profession_type_new">
                        <div>
                            <label>What I do:</label>
                            <span>Profession</span>
                        </div>
                        <div>
                            <label>Interests:</label>
                            <span>Interests</span>
                        </div>
                        <div>
                            <label>Music:</label>
                            <span>Music Name</span>
                        </div>
                        <div>
                            <label>Inspiration:</label>
                            <span>Inspiration Name</span>
                        </div>
                        <div>
                            <label>Shirt Size:</label>
                            <span>Size</span>
                        </div>
                        <div>
                            <label>I use TalentLink to:</label>
                            <div class="list_area">
                                <div class="checkbox">
                                    <input id="demo_box_1" name="check1" type="checkbox" value="1">
                                    <label for="demo_box_1">Get my art out there</label>
                                </div>
                                <div class="checkbox">
                                    <input id="demo_box_2" name="check2" type="checkbox" value="2">
                                    <label for="demo_box_2">Try to land a gallery gig</label>
                                </div>
                                <div class="checkbox">
                                    <input id="demo_box_3" name="check3" type="checkbox" value="3">
                                    <label for="demo_box_3">Find a band</label>
                                </div>
                                <div class="checkbox">
                                    <input id="demo_box_4" name="check4" type="checkbox" value="4">
                                    <label for="demo_box_4">Get hired for an acting role</label>
                                </div>
                                <div class="checkbox">
                                    <input id="demo_box_5" name="check5" type="checkbox" value="5">
                                    <label for="demo_box_5">Help with music production</label>
                                </div>
                                <div class="checkbox">
                                    <input id="demo_box_6" name="check6" type="checkbox" value="6">
                                    <label for="demo_box_6">Get exposure for my music</label>
                                </div>
                                <div class="checkbox">
                                    <input id="demo_box_7" name="check7" type="checkbox" value="7">
                                    <label for="demo_box_7">Find a fellow musician</label>
                                </div>
                                <div class="checkbox">
                                    <input id="demo_box_8" name="check8" type="checkbox" value="8">
                                    <label for="demo_box_8">Find a photographer</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- close profession_type_new -->

                    <div class="subscriptionInfo">
                        <fieldset>
                            <legend>Subscription Info</legend>
                            <div>
                                <label>Subscription Type:</label>
                                <span>Free</span>
                            </div>
                            <div>
                                <label>Subscription Start Date:</label>
                                <span>01/01/2022</span>
                            </div>
                            <div>
                                <label>Subscription End Date:</label>
                                <span>01/01/2023</span>
                            </div>
                            <div>
                                <label>Subscription Status:</label>
                                <span>Active</span>
                            </div>
                        </fieldset>
                    </div>
                    <!-- close subscriptionInfo -->

                    <button type="submit" class="submit_btn">Update Profile</button>
                </form>
            </div>
            <!-- close tab1 -->
        </div>
        <!-- close rightbar_inn -->
    </div>
    <!-- close rightbarProfile -->
</div>
<!-- close pageprofile -->

		  
          <!------new version------->
            </div>
        </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>
