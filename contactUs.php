<?php

if(isset($_POST['submit'])) {
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$enquiry = $_POST['enquiry'];
	$enquiry_from = ['Fahim Hoque'];
	
	$to = "40535445@live.napier.ac.uk";
	$headers = "From: ".$enquiry_from;
	mail($enquiry_from, $enquiry, $to, $headers);
	
	header("Location: contactUs.html");
}

echo("Enquiry sent!");
	
?>
	
	
	
