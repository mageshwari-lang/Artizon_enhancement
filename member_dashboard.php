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
<style>


</style>

<body>
<?php include('member_dashboard_header.php');?>
  
  
  <main id="content">
  <div class="container-fluid"><!-- id="content_inner"--->
	 <div class="row page"> <!--id="page"-->
				<div class="col-sm-4 col-md-4" style="background-color:yellow1;">
				
	<?php include('member_dashboard_leftSdeBar.php');?>
	

				</div>				
				<div class="col-sm-8 col-md-8">
					<div class="row">
						<div class="col-md-8 multifforrmUpload">
							<form>
            <!-- First row -->
            <div class="row input-row">
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Enter text">
                </div>
                <div class="col-md-3 btn-green">
                    <button type="button" class="btn btn-default btn-block">Submit</button>
                </div>
            </div>
			

            <!-- Second row -->
            <div class="row input-row">
                <div class="col-md-6 btn-grey">
                    <button type="button" class="btn btn-default btn-block" data-bs-toggle="modal" data-bs-target="#myModal">Upload Videos/Audios</button>
                </div>
                <div class="col-md-6 btn-grey">
                    <button type="button" class="btn btn-default btn-block" data-bs-toggle="modal" data-bs-target="#myModal2">Upload Photos</button>
                </div>
            </div>
        </form>
						
			
<!-- The Modal 1-->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>		
	<!-- The Modal 1-->	

<!-- The Modal 2-->
<div class="modal" id="myModal2">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">uploaded photos</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>		
	<!-- The Modal 2-->	
<!--Pos hee----->


<div class="image_content" id="showpost" style="background:#fff">

       <div class="post_row">
		<div class="member-row">
			<a href="#">Srinivasan Dhamodharan</a>
		</div>
	    
		<div class="msg-text"> 
			<p>Painting for test</p>
		</div>	
		<div class="likes-row"> 
			<button class="like-btn" type="button" onclick="text_likes('like_row1','100','1');">Like</button>
			<!--<span class="unlike"><button class="button_10" type="button" onclick="text_likes('like_row1','100','0');">UnLike</button></span>-->
		</div>	
		
		<div class="comment-row">
		<div class="comment-out">
		<span class="comment_thumb">
 <img src="http://104.131.245.70/uploads/apchaudhary15@gmail.com/image/photo.jpg" height="30" width="30" alt="" onerror="this.src='http://104.131.245.70/thumb.php?src=http://104.131.245.70/images/man.jpg'"></span>
                  <div><a href="http://104.131.245.70/profileview?tempid=46">mohit baliyan</a> wrote - testing of comments</div>
		
		</div>
		<div class="comment-out">
                	<span class="comment_thumb">
					<img src="http://104.131.245.70/thumb.php?src=http://104.131.245.70/uploads/nivas@live.co.uk/image/IMG_0013.JPG" height="30" width="30" alt="" onerror="this.src='http://104.131.245.70/thumb.php?src=http://104.131.245.70/images/man.jpg'"></span>
                    
                    
          
      <textarea id="textcommscrol_row1" class="animated textarea_comments" onfocus="if (this.value == 'Write your comment.....') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Write your comment.....';}" style="overflow: hidden; overflow-wrap: break-word; resize: none;">Write your comment.....</textarea>
      <input type="button" name="post_button" id="postbuttonscrol_row1" value="Post" class="post-button" onclick="text_comment('scrol_row1','42','100','42','textcommscrol_row1')">
            </div>
		
		
		</div>
		
		</div><!---post-row-ends--->
		
</div><!---image_cntent ends--->
	
	 
              	  
  	
                       

	
</div><!---center part ends here--col-md-8---->
						<div class="col-md-4">
							<?php include('member_dashboard_rightSdeBar.php');?>
						</div>
					</div><!--total-inner row ends-->	
				</div>	<!--total-right ends-->			
  
  </div> <!--id="page"-->
         
			
	</div>	<!-- id="content_inner"--->	
          
        </main>
</body>
</html>