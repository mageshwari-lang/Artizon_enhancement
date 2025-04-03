
<!DOCTYPE html>

<html lang="eng">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />




<title>Artizonhub :: Upgrade Page</title>

<link href="<?php echo $fullpath;?>style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $fullpath;?>css/profileupgrade.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $fullpath;?>js/min.js"></script>


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
<link href="<?php echo $fullpath;?>css/MemebrPage.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo $fullpath;?>js/jquery.min.js"></script>

<script type="text/javascript" src="<?php echo $fullpath;?>js/jquery.elastislide.js"></script>
<script type="text/javascript" >
var membershipId;
function Purchase(jwt_value, membershitype) {
membershipId=membershitype;
        google.payments.inapp.buy({
        jwt: jwt_value,
        success: successOrder,
        failure: errorOrder
      });
      return false;
    }
function successOrder(result)	
{
alert("Purchase has completed successfully.");
//alert(result);
window.location = "/upgrade_gc_result.php?gc_order_id="+result.response.orderId+"&amount="+result.request.price+"&payment_name="+result.request.name+"&currency_code="+result.request.currencyCode+"&membershipId="+membershipId;
}

function errorOrder(result)
{
alert("Purchase did not complete.");
alert(result.response.errorType);
//alert(membershipId);
//window.location = "/<?php echo $ment_id;?>/texts";
}
</script>

<style>
#nav-top{
	
	background-color: #33b6c0;
    position: fixed;
    width: 100%;
	z-index: 99;
}
.search-box {
    position: relative;
}
input.search-input {
    width: 300px;
    height: 35px;
    border-radius: 5px;
    border: none;
    padding: 3px 40px 3px 10px;
    color: #747272;
    text-decoration: none;
}
button.btn.btn-outline-success.bg-warning {
    position: absolute;
    right: 0px;
    outline: none;
    border: none;
    bottom: 0px;
   
}


.sidebox_bottom {
    float: left;
    width: 98%;
    padding: 0px 35px;
}
	.sidebox_bottom p {
    line-height: 30px;
    font-size: 22px;
    text-align: left;
}
	
	.btn-grey button {
    background-color: #dedede;
    text-align: center;
    width: 100%;
    border-radius: 0px;
    color: #066166;
    font-weight: bold;
}
	
.btn-grey [type=button]:hover {
    background-color: #dedede;
}	
	button.btn-grey {
    background-color: #b3aeae;
    text-align: center;
    width: 100%;
    border-radius: 0px;
    outline: 0;
    border: 1px solid #c5c1c1;
    padding: 5px 0px;
}

button.btn-grey a {
    color: #066166;
    text-decoration: none;
    font-weight: bold;
}

.profile-info h2 {
    font-size: 18px;
    font-weight: bold;
    color: ##066166;
}

.profile-info h2 a {
    text-decoration: none;
    color: ##066166;
}
.profile-info h2 {
    font-size: 18px;
    font-weight: bold;
    color: #33b6c0;
}
.profile-info h2 a {
    text-decoration: none;
    color: #33b6c0;
}
.media_counts
{
	margin: 24px 0px 12px 0px;
    display: inline-block
}



.media_counts ul {
    list-style: none; /* Remove bullet points */
    padding: 0;
    margin: 0;
    display: flex; /* Arrange items in a row */
    gap: 15px; /* Space between items */
}

.media_counts ul li {
    display: inline; /* Keep items in a row */
}

.media_counts ul li a {
    text-decoration: none; /* Remove underline */
    color: #007bff; /* Default link color */
    font-size: 16px;
    font-weight: 500;
    transition: color 0.3s ease;
}

.media_counts ul li a:hover {
    color: #33b6c0; /* Change color on hover */
}

.media_counts1 {
    display: flex;
    align-items: center;
    gap: 10px;
    justify-content: center;
}

.likes {
    font-size: 16px;
    font-weight: bold;
    color: #333;
}

.likes.like_btn {
    text-align: center;
    width: 20%;
}

.like_button {
    padding: 6px 12px;
    border: none;
    background-color: #007bff; /* Blue button */
    color: white;
    font-size: 14px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.like_button:hover {
    background-color: #0056b3; /* Darker blue on hover */
}

.likes {
    font-size: 16px;
    font-weight: bold;
    color: #333;
	
}

.text-white {
   
    font: 17px 'Helvetica Neue', Helvetica, Arial, 'lucida grande', tahoma, verdana, arial, sans-serif;
    font-weight: bold;
}
.row.input-row {
    margin: 25px 0px;
}
.multifforrmUpload{
	background-color:#fff;
	    padding: 10px;
}

.btn-green{
	 background-color:#33b6c0;
    text-align: center;
	color:#fff;
	  
}
.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: red;
}
</style>



</head>

<body>
<nav class="navbar navbar-expand-lg" id="nav-top" style="margin-bottom:80%;" >
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/Latest-Logo.png" width="120" height="40" alt="Talent Link Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      
	  <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="member_dashboard.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="member_myhub.php">My Hub</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="member_myshop.php">My Shop</a>
                    </li>
					 <li class="nav-item">
                        <a class="nav-link text-white" href="member_myaccount.php">My Account</a>
                    </li>
					<li>
					<form class="d-flex ms-3 search-box" role="search">
                    <input class="search-input" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success bg-warning" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </form>
					
				</li>
				<li class="nav-item">
                        <a class="nav-link text-white" href="#" title="Settings">
    <i class="bi bi-gear" style="font-size: 24px;"></i>
</a>
				
			</li>
				<li class="nav-item">
                        <a class="nav-link text-white" href="#">Support</a>
                    </li>
                   <li class="nav-item">
                        <a class="nav-link text-white" href="#">LogOut</a>
                    </li>
                </ul>
              
            </div>
        </div>
</nav>
<main id="content">
<div class="container-fluid">
<div class="row page">
<div class="layout-responsive__body" role="main">
<div class="section-title section-title--primary">Please upgrade the subscription</div>   
<section class="page-section page-section--plans-overview">
    <div class="page-section__inner">
        <div class="plans-list"
             const-notification-period-annual="annual"
             const-notification-period-monthly="monthly"
             const-notification-plan-basic="free"
             const-notification-plan-plus="premium"
             const-notification-plan-premium="sponsor"
             const-notification-plan-selected="plan selected">
            <div class="plans-list__item">
                <div class="plan plan--basic " data-plan-period="annual" data-plan-name="basic">
                    <div class="plan__header">
                        <div class="plan-name"> <img src="<?php echo $fullpath;?>images/BASIC.jpg"></div>
                    </div>

                    <div class="plan__body">
                        <div class="plan-features-list">
                            <div class="plan-features-list__item plan-connections-limits">
                            <div class="plan-feature-icon"></div>
                                Allowed connections: 500
                            </div>
                            <div class="plan-features-list__item plan-files-limits">
                            <div class="plan-feature-icon"></div>
                            File size limit: 8MB
                            </div>
                            <div class="plan-features-list__item plan-space-limits">
                            <div class="plan-feature-icon"></div>
                            Available Space limit: 10MB
                            </div>
                        </div>
                    </div>
                    <div class="plan__footer">
                        <span class="button plan-select-button plan-select-button--annually button--secondary" style="display: flex;">Basic Free Plan</span>
                    </div>
                </div>
            </div>
            <div class="plans-list__item">
                <div class="plan plan--plus" data-plan-period="annual" data-plan-name="Premium">
                    <div class="plan__header">
                        <div class="plan-name"><img src="<?php echo $fullpath;?>images/Premium.jpg" style="margin-top: 40px;"></div>
                    </div>
                    <div class="plan__body">
                        <div class="plan-features-list">
                            <div class="plan-features-list__item plan-connections-limits">
                                <div class="plan-feature-icon"></div>
                                Allowed connections: 1500
                            </div>
                            <div class="plan-features-list__item plan-files-limits">
                            <div class="plan-feature-icon"></div>
                            File size limit: 200MB  
                            </div>
                            <div class="plan-features-list__item  plan-space-limits">
                            <div class="plan-feature-icon"></div>
                            Available Space limit: 5GB
                            </div>
                        </div>
                        <div class="plan__price">
                            <div class="plan-price plan-price--annually">
                                <div class="plan-price__value plan-price__value--annually" data-currency-sign="$" data-payment-amount-value="25" data-payment-amount-usd-value="25">25</div>
                                <div class="plan-price__period">per year</div>
                            </div>
                        </div>
                    </div>
                    <div class="plan__footer">
                        <span class="button plan-select-button plan-select-button--annually button--secondary" style="display: flex;">Choose Annual&nbsp;Plan</span>
                    </div>
                </div>
            </div>
            <div class="plans-list__item">
                <div class="plan plan--premium plan--best-value" data-plan-period="annual" data-plan-name="Sponsor" data-label="Best Value">
                    <div class="plan__header">
                        <div class="plan-name"><img src="<?php echo $fullpath;?>images/Sponsor.jpg"></div>
                    </div>
                <div class="plan__body">
                    <div class="plan-features-list">
                        <div class="plan-features-list__item plan-connections-limits">
                        <div class="plan-feature-icon"></div>
                            Allowed connections: 3000
                        </div>
                        <div class="plan-features-list__item plan-files-limits">
                            <div class="plan-feature-icon"></div>
                                File size limit: 300MB
                            </div>
                        <div class="plan-features-list__item plan-space-limits">
                        <div class="plan-feature-icon"></div>
                            Available Space limit: 10GB
                        </div>
                    </div>
                    <div class="plan__price">
                        <div class="plan-price plan-price--annually">
                            <div class="plan-price__value plan-price__value--annually" data-currency-sign="$" data-payment-amount-value="50" data-payment-amount-usd-value="50">50</div>
                            <div class="plan-price__period">per year</div>
                        </div>
                    </div>
                </div>
                    <div class="plan__footer">
                        <span class="button plan-select-button plan-select-button--annually button--secondary" style="display: flex;">Choose Annual&nbsp;Plan</span>
                    </div>
                </div>
            </div>
        </div>               
    </div>
</section>
</div>
<!--<div class="upgrade_box3" >
			<div class="upgrade_feature" >
				<h5 ></h5>
			</div>
			<div class="upgrade_feature" >
				<h5 style="text-align:center;"></h5>
			</div>
			<div class="upgrade_feature" >
				<?php if($user_con=='free') {?>
			 <button id='runPurchase' value='buy' class='upgrade_btn'   onclick='Purchase("<?php echo $jwtToken;?>","2");'>Buy Now</button>
			 <?php }?>
			</div>
			<div class="upgrade_feature" >
				<?php if(($user_con=='free') || ($user_con=='silver')){?>
			 <button id='runPurchase1' value='buy' class='upgrade_btn'   onclick='Purchase("<?php echo $jwtTokenGold;?>","3");'>Buy Now</button>
			 <?php }?>
			</div>
			<div class="upgrade_feature" >
				<h5 style="text-align:center;">&nbsp;</h5>
			</div>
</div>-->     
<section class="page-section page-section--payment-area ">
<form action="#" method="POST">
                <div class="input-group">
                    <label for="cardholder">Cardholder Name</label>
                    <input type="text" id="cardholder" name="cardholder" placeholder="John Doe" required>
                </div>

                <div class="input-group">
                    <label for="cardnumber">Card Number</label>
                    <input type="text" id="cardnumber" name="cardnumber" placeholder="1234 5678 9876 5432" required>
                </div>

                <div class="input-group input-group-inline">
                    <div class="inline-field">
                        <label for="expiry">Expiry Date</label>
                        <input type="month" id="expiry" name="expiry" required>
                    </div>

                    <div class="inline-field">
                        <label for="cvv">CVV</label>
                        <input type="text" id="cvv" name="cvv" placeholder="123" required>
                    </div>
                </div>

                <button type="submit" class="submit-btn">Pay Now</button>
            </form>
</section>
</div>
</div>

<script>
$(document).ready(function() {
        $(".plan").click(function() {
        $('.plan').not(this).removeClass('is-active');
        $('.plan').not(this).find('.button--secondary').removeClass('selected');
        $('.plan').not(this).find('.button--secondary').text('Choose Annual Plan');
        $(this).toggleClass('is-active');
        $(this).find('.button--secondary').toggleClass('selected');
        if($(this).hasClass('is-active')){
            $(this).find('.button--secondary').text('Annual Plan Selected');
        }
        else{
            $(this).find('.button--secondary').text('Choose Annual Plan');
        }

        $('.plan--basic').find('.button--secondary').text('Basic Free Plan');
    });
});
</script>
</div>
</main>
</body>
</html>

