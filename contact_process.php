<?php

    $to = "frank.uzoka@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $last = $_REQUEST['last'];
    $subject = $_REQUEST['subject'];
    $phone = $_REQUEST['phone'];
    $web = $_REQUEST['web'];
    $cmessage = $_REQUEST['message'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";





?>