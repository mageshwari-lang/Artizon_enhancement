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
						<p>My shop page...</p>
      </div>   <!--id="page"-->				
  
  </div>
         
			
	</div>		
          
        </main>
</body>
</html>