<?php

function test_input($data) 
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$groupNum = test_input($_POST['groupNum']);
$vdate = test_input($_POST['vdate']);
$place = test_input($_POST['fplace']);
$rating = test_input($_POST['rating']);



$destination_email = "htk4363@rit.edu";

// $destination_email = "RITISTprofessor@gmail.com, axn9999@rit.edu";

$email_subject = "Key West, FL - Visitor";
$email_body = "Group Size: $groupNum\n";
$email_body .= "Date Visited: $vdate\n";
$email_body .= "Favorite Place: $place\n";
$email_body .= "Rating: $rating\n";

mail($destination_email, $email_subject, $email_body);
echo "Data Sent";
?>
