<?php
$page = "";
$page = (isset($_GET['id'])) ? $_GET['id'] : 'home';
if (!in_array($page, array('home', 'new-arrivals', 'limited-offers', 'trused-brands', 'camera-drones', 'our-event', 'cart', 'empty-profile', 'checkout', 'profile', 'empty-checkout'))) {
	include("404.php");
	exit;
}

$title = 'Trimurti STORE';
$phone = '+977 976-340-0039';
$email = 'trimurtistore3@gmail.com';
$address1 = 'nilkantha municipality, dhading';
$address2 = 'New Road, Kathmandu';



include_once("includes/header.php");
include("$page.php");
include_once("includes/footer.php");
?>