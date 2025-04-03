<?php
$selectedValues = [];

$sql_email = "SELECT f_name,l_name,gender,dob,area,mobile,about_me,homephone,mention,website,address,zip_code,city,skill,u_type,u_createtime,mem_type,state,country,favourit_athletes,mysport,hookkit_code,favourit_sport,music,favourite_musician,favourite_type_music,email,myart,favourite_artist,whatido,interests,inspiration,shirt_code FROM registration WHERE email='$uname'";
$result_email = mysqli_query($conn, $sql_email);


$row_email = mysqli_fetch_assoc($result_email);

if($row_email){

	$fname =  $row_email['f_name'];
	$lname =  $row_email['l_name'];
	$gender =  $row_email['gender'];
	$dob =  $row_email['dob'];
	$area =  $row_email['area'];
	$mobile =  $row_email['mobile'];
	$about_me =  $row_email['about_me'];
	$homephone =  $row_email['homephone'];
	$mention =  $row_email['mention'];
	$website =  $row_email['website'];
	$address =  $row_email['address'];
	$zip_code =  $row_email['zip_code'];
	$city =  $row_email['city'];
	$state =  $row_email['state'];
	$country =  $row_email['country'];
	$favourit_athletes =  $row_email['favourit_athletes'];
	$mysport =  $row_email['mysport'];
	$favourit_sport =  $row_email['favourit_sport'];
	$music =  $row_email['music'];
	$favourite_musician =  $row_email['favourite_musician'];
	$favourite_type_music =  $row_email['favourite_type_music'];
	$tememail = $row_email['email'];
	$myart  = $row_email['myart'];
	$favourite_artist  = $row_email['favourite_artist'];
	$whatido  = $row_email['whatido'];
	$interests  = $row_email['interests'];
	$inspiration  = $row_email['inspiration'];
	$shirt_code  = $row_email['shirt_code'];
	$skill  = $row_email['skill'];
	$mem_type  = $row_email['mem_type'];
	$u_type  = $row_email['u_type'];
	$u_createtime  = $row_email['u_createtime'];
	//Convert stored values ("1/2/4") to an array
	$selectedValues = isset($row['hookkit_code']) ? explode("/", $row['hookkit_code']) : [];

	//echo $selectedValues;
	//exit;

	// Extract Year, Month, Day from DOB
	/*if ($dob) {
		list($selectedYear, $selectedMonth, $selectedDay) = explode("-", $dob);
	} else {
		$selectedYear = "";
		$selectedMonth = "";
		$selectedDay = "";
	}*/


} else {
    echo "No results found for email: " . htmlspecialchars($uname);
}


?>