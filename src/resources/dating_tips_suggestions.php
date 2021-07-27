<?php

$message_sent = false;

if (isset($_POST['suggestion__dating_tip']) && $_POST['suggestion__dating_tip'] != "") {

	// santize the submitted string
	filter_var($_POST["suggestion__dating_tip"], FILTER_SANITIZE_STRING);

	//submit the sanitized string / form
	$datingTipSuggestion = $_POST["suggestion__dating_tip"];
	$to = "larry@compatibleconnections.biz";
	$subject = "New Dating Tip Suggestion!";
	mail($to, $subject, $datingTipSuggestion);

	// reset $message_sent Boolean
	$message_sent = true;
	//	TO DO:	Utilize this Boolean value to trigger actions when mail is successful sent.

	echo 	"
		<h1>Thank you for sharing your Dating Tip suggestion with us!</h1>
		<p>Your browser will be directed back to the Dating Tips page in a few moments.</p>	
		";

	header("Refresh:3; url=https://compatibleconnections.biz/resources/dating_tips.html", true, 303);
}
