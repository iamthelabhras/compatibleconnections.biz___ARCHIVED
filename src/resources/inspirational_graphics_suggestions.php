<?php

$message_sent = false;

if (isset($_POST['suggestion__inspirational_graphic']) && $_POST['suggestion__inspirational_graphic'] != "") {

	// santize the submitted string
	filter_var($_POST["suggestion__inspirational_graphic"], FILTER_SANITIZE_STRING);

	//submit the sanitized string / form
	$datingTipSuggestion = $_POST["suggestion__inspirational_graphic"];
	$to = "larry@compatibleconnections.biz";
	$subject = "New Inspirational Graphic Suggestion!";
	mail($to, $subject, $datingTipSuggestion);

	// reset $message_sent Boolean
	$message_sent = true;
	//	TO DO:	Utilize this Boolean value to trigger actions when mail is successful sent.

	echo 	"
		<h1>Thank you for sharing your Inspirational Graphic suggestion with us!</h1>
		<p>Your browser will be directed back to the Inspirational Graphics gallery in a few moments.</p>	
		";

	header("Refresh:3; url=https://compatibleconnections.biz/resources/inspirational_graphics.html", true, 303);
}
