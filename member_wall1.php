<?php
session_start();
// Additional PHP logic here
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talent Link</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/MemebrPage.css">
</head>

<body>

    <div id="wrapper">

      <header id="header">
            <nav class="navbar">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a href="/home" class="navbar-brand">
                            <img src="/images/Latest-Logo.png" width="120" height="40" alt="Talent Link Logo">
                        </a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="search_box">
                            <input id="searchbox" type="text" class="search_input" placeholder="Search for People...">
                            <button class="search_button">Submit</button>
                        </li>
                        <li><a href="/logout" class="home">Logout</a></li>
                        <li><a href="/profile" class="home">My Account</a></li>
                        <li><a href="/shop" class="home">My Shop</a></li>
                        <li><a href="/activity" class="home">My Hub</a></li>
                        <li><a href="/texts" class="home">
                            <img src="/images/Home.png" width="25" height="25" alt="Home">
                        </a></li>
                    </ul>
                </div>
            </nav>
        </header>
	 <!-- 	
<div id="header">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a href="http://104.131.245.70/home" class="navbar-brand">
        <img src="http://104.131.245.70/images/Latest-Logo.png" width="120" height="40" alt="Logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <form class="d-flex" onsubmit="search1(); return false;">
              <input name="searchbox" id="searchbox" type="text" class="form-control me-2" placeholder="Search for People..." onkeyup="search1(this.value)">
              <button class="btn btn-outline-success" type="submit">Submit</button>
            </form>
          </li>
          <li class="nav-item">
            <a href="http://104.131.245.70/srinivasan/logout" class="nav-link">Logout</a>
          </li>
          <li class="nav-item">
            <a href="http://104.131.245.70/srinivasan/profile" class="nav-link">My Account</a>
          </li>
          <li class="nav-item">
            <a href="http://104.131.245.70/srinivasan/shop" class="nav-link">My Shop</a>
          </li>
          <li class="nav-item">
            <a href="http://104.131.245.70/srinivasan/activity" class="nav-link">My Hub</a>
          </li>
          <li class="nav-item">
            <a href="http://104.131.245.70/srinivasan/texts" class="nav-link">
              <img src="http://104.131.245.70/images/Home.png" width="25" height="25" alt="Home">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>-->

        <main id="content">
            <div id="content_inner">
                <div id="page">
                    <aside id="sidebar">
                        <div class="sidebox">
                            <div class="sidebox_top">
                                <img src="/thumb.php?src=/images/man.jpg" alt="Profile Image" class="side_thumb">
                                <h2><a href="/profileview?tempid=42">Mageshwari Velu</a></h2>
                                <h4><a href="/upgrade">Upgrade Now</a></h4>
                                <h4><a href="/goprofile" class="logout">Manage Profile</a></h4>
                                <span class="likes">1</span>
                                <button class="like_button">Like</button>
                            </div>
                            <div class="sidebox_bottom">
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
                                <ul>
                                    <li><a href="/viewactivity?logid=42&actcon=4">Photos 9</a></li>
                                    <li><a href="/viewactivity?logid=42&actcon=2">Videos 2</a></li>
                                    <li><a href="/viewactivity?logid=42&actcon=3">Audios 1</a></li>
                                </ul>
                                <span class="notification">Sponsored by Kevin Pietersen</span>
                            </div>
                        </div>
                        <div id="add_kill"></div>
                    </aside>

                    <section id="rightbar">
                        <div class="edit_video_row">
                            <form action="textsave" name="textsave" method="post" onsubmit="return validate4()">
                                <input name="textdata" id="textdata" type="text" class="status" value="Status" onfocus="this.value = '';" onblur="this.value || (this.value = 'Status');">
                                <button type="submit" class="edit_video_submit">Submit</button>
                            </form>
                            <button class="add_button" data-reveal-id="myModal" data-animation="fade">Add Photos / Videos</button>
                        </div>

                        <div class="rightbar_inn">
                            <div id="showpost" class="image_cntent mCustomScrollbar"></div>
                        </div>
                    </section>
                </div>
            </div>
        </main>
    </div>

    <!-- Modal for adding photos/videos -->
    <div id="myModal" class="reveal-modal">
        <h1>ADD PHOTOS/VIDEOS</h1>
        <div class="popup_box1">
            <h2>Upload Photo(s)</h2>
            <form action="photosave" name="upload_photo" enctype="multipart/form-data" method="post" onsubmit="return validate();">
                <img id="blah" src="/images/profile_thumb.png" alt="Selected Image">
                <input name="doc" id="doc" type="file" onchange="readURL(this); AlertFilesize2();">
                <div class="popup_row"><label>Title</label><input name="title" id="title1" type="text" class="popup_input"></div>
                <div class="popup_row"><label>Description</label><textarea name="descript" id="description1" class="popup_textarea"></textarea></div>
                <button type="submit" class="submit_popup">Add</button>
            </form>
        </div>

        <div class="popup_box1">
            <h2>Upload Video(s)</h2>
            <form id="uploadForm" action="videosave" name="upload_video" method="post" enctype="multipart/form-data" onsubmit="return validate1();">
                <fieldset>
                    <label>Select video</label>
                    <input id="uploadFile" type="file" name="vfile" onchange="AlertFilesize1();">
                    <label>Select Video Thumbnail</label>
                    <input name="vtfile" type="file" id="vtfile">
                </fieldset>
                <div class="popup_row2">
                    <label>Title</label><input name="title" id="title2" type="text" class="popup_input2">
                </div>
                <div class="popup_row2">
                    <label>Description</label><textarea name="descript" id="description2" class="popup_textarea2"></textarea></div>
                <button type="submit" class="submit_popup">Add</button>
            </form>
        </div>

        <button class="close-reveal-modal">×</button>
    </div>

    <!-- Modal for adding audio -->
    <div id="myModal2" class="reveal-modal">
        <h1>ADD AUDIOS</h1>
        <div class="popup_box1">
            <h2>Upload Audio(s)</h2>
            <form id="uploadForm" name="upload_audio" action="audiosave" method="post" enctype="multipart/form-data" onsubmit="return validate2();">
                <fieldset>
                    <label>Select Audio</label>
                    <input id="uploadFile1" type="file" name="vfile" onchange="AlertFilesize3();">
                    <label>Select Audio Thumbnail</label>
                    <input name="vtfile" type="file" id="vtfile1">
                </fieldset>
                <div class="popup_row2">
                    <label>Title</label><input name="title" id="title3" type="text" class="popup_input2">
                </div>
                <div class="popup_row2">
                    <label>Description</label><textarea name="descript" id="description3" class="popup_textarea2"></textarea></div>
                <button type="submit" class="submit_popup">Add</button>
            </form>
        </div>

        <button class="close-reveal-modal">×</button>
    </div>

    <script>
        document.getElementById('searchbox').addEventListener('keyup', function () {
            const searchValue = this.value;
            fetch(`/search?q=${encodeURIComponent(searchValue)}`)
                .then(response => response.text())
                .then(data => document.getElementById('rightbar').innerHTML = data);
        });

        document.querySelector('.search_button').addEventListener('click', function () {
            const searchValue = document.getElementById('searchbox').value;
            fetch(`/search?q=${encodeURIComponent(searchValue)}`)
                .then(response => response.text())
                .then(data => document.getElementById('rightbar').innerHTML = data);
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('blah').src = e.target.result;
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        function AlertFilesize2() {
            // Add custom file size validation logic here
        }

        function AlertFilesize1() {
            // Add custom file size validation logic here
        }

        function AlertFilesize3() {
            // Add custom file size validation logic here
        }

        function validate4() {
            // Add custom form validation logic here
            return true;
        }

        function validate() {
            // Add custom form validation logic here
            return true;
        }

        function validate1() {
            // Add custom form validation logic here
            return true;
        }

        function validate2() {
            // Add custom form validation logic here
            return true;
        }
    </script>

</body>

</html>
