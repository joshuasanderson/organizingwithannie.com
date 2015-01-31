<?php

require_once('config.php');
require_once('phphtmlmailer.php');

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	// Check the answer given before doing anything.
	if( isset($_POST['answer']) && $_POST['answer'] === $CONTACT_US_ANSWER ) {
		$emailer = new PHPHtmlMailer();
		$emailer->ViewName = $CONTACT_FORM_VIEW_NAME;
		$emailer->Data = $_POST;
		echo $emailer->SendTest();	
	} else {
		$response = array
		(
			"success" => false,
			"msg" => "You must be a robot because you got the question wrong!"
		);

		echo json_encode($response);
	}
}

?>
