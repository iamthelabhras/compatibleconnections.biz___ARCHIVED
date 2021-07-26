<?php

if (isset($_POST['submit'])) {
	$datingTipSuggestion = $_POST['visitor_suggestion__dating_tip'];
	$mailTo = "bernadette@compatibleconnections.biz";
	$headers = "From: Dating Tip Suggestions";
	$txt = "Hello, Bernadette!  Someone just submitted a new Dating Tip suggestion through Compatible Conenctions website." . "\n\n" . "Here's what they had to say:" . "\n\n" . $datingTipSuggestion;
	mail($mailTo, $subject, $txt, $headers);
	header("Location: resources/dating_tips.html");
}
