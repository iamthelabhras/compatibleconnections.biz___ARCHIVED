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
}
