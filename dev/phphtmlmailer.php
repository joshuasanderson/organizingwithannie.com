<?php

/**
 *
 * Software: PHPHtmlMailer with PHPMailer - A PHP Emailer Class that also implements a custom HTML view engine.
 * Version: 0;
 *
 * PHPMailer Author: Jim Jagielski
 * PHPMailer Version: 5.2
 * PHPMailer Site: https://code.google.com/a/apache-extras.org/p/phpmailer/
 *
 * PHPHtmlMailer Author: Joshua Anderson
 */

/**
 * NOTE: Requires PHP version 5 or later
 * @package PHPHtmlMailer + PHPMailer
 * @author Joshua Anderson
 * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 */
class PHPHtmlMailer
{
	public $Errors;
	public $To;
	public $From;
	public $ReplyTo;
	public $RecipientName;
	public $Subject;
	public $Message;
	public $Data;

	/**
	   * Contains the tokens we need to replace in the HTML along with their values.
	   * @var array
	*/
	public $Tokens;

	/**
	   * Determines which HTML file we need to retreive our View from.
	   * @var string
	*/
	public $ViewName;

	public function __constructor() {
		$this->Errors = array();
	}

	/**
	  * The main Send function that will determine which View to send.
	  * The more Views you add, you will just have to add here a case statement.
	  * @return A status of somesort about the message.
	  */
	public function Send() {
		if(count($this->ViewName) > 0) {
			switch($this->ViewName) {
				case "contact.html":
					return self::SendContactEmail();
					break;
			}
		}
	}

	public function SendTest() {
		if(count($this->ViewName) > 0) {
			switch($this->ViewName) {
				case "contact.html":
					return self::SendContactEmailTest();
					break;
			}
		}
	}

	protected function SendContactEmail() {
		require("config.php");
		require("phpmailer/class.phpmailer.php");

		$mail = new PHPMailer();
		$mail->IsSMTP();

		// If we are testing this on localhost, we need to use these credentials.
		// These are linked to my GoDaddy account and kept in the config file.
		if($IS_DEV) {
			$mail->SMTPAuth = true;
			$mail->Host = $DEV_HOST;
			$mail->Username = $DEV_USERNAME;
			$mail->Password = $DEV_PASSWORD;
			$mail->SMTPSecure = 'ssl';
			$mail->Port = $DEV_PORT;
		}

		$mail->From = $SENDER_EMAIL;
		$mail->FromName = $FROM_NAME;
		$mail->AddAddress("joshuasa9@gmail.com", "Josh Anderson");
		$mail->AddReplyTo("info@example.com", "Information");

		$mail->IsHTML(true);

		$mail->Subject = "Here is the subject";
		$mail->Body    = "This is the HTML message body <b>in bold!</b>";

		if(!$mail->Send()) {
		   return "Message could not be sent. <p>";
		   return "Mailer Error: " . $mail->ErrorInfo;
		   exit;
		}

		return "Message has been sent";
	}

	function SendContactEmailTest() {
		require("phpmailer/class.phpmailer.php");
		require("config.php");

		// Call a pre-send function to validate the $this-Data array.

		$mail = new PHPMailer();
		$mail->IsSMTP();

		// If we are testing this on localhost, we need to use these credentials.
		// These are linked to my GoDaddy account and kept in the config file.
		if($IS_DEV) {
			$mail->SMTPAuth = true;
			$mail->Host = $DEV_HOST;
			$mail->Username = $DEV_USERNAME;
			$mail->Password = $DEV_PASSWORD;
			$mail->SMTPSecure = 'ssl';
			$mail->Port = $DEV_PORT;
		}

		$mail->From = $SENDER_EMAIL;
		$mail->FromName = $this->Data['name'];
		$mail->AddAddress($TO_EMAIL, $TO_NAME);
		$mail->AddReplyTo($this->Data['email'], $this->Data['name']);

		$mail->IsHTML(true);

		$mail->Subject = "Organizing With Annie - Contact Me Form Submission";

		// Get the raw HTML with the tokens to replace.
		$html = self::getHtmlFromView();
		$date = date("F j, Y, g:i a");
		$this->Tokens = array(
			'{DateSubmitted}' => $date,
			'{Name}' => $this->Data['name'],
			'{Email}' => $this->Data['email'],
			'{Phone}' => $this->Data['phone'],
			'{Message}' => $this->Data['message']
		);

		// Create the body.
		$body = self::replaceTokensInHtml($html);

		$mail->Body = $body;

		$response = array();

		if(!$mail->Send()) {
			$response['success'] = false;
			$response['msg'] = 'Message could not be sent. Please try again';
			$response['error'] = $mail->ErrorInfo;

			return json_encode($response);
		}

		$response['success'] = true;
		$response['msg'] = "Your message has been sent. I'll be in touch with you shortly!";
		return json_encode($response);
	}

	function htmlTest() {
		return self::getHtmlFromView();
	}

	function getHtmlFromView() {
		require("config.php");
		$fileName = $VIEWS_DIRECTORY . $this->ViewName;
		$html = file_get_contents($fileName, true);

		return $html;
	}

	/**
	  * Replaces the tokens formatted like {Name} in the $html string with the values inside Tokens array.
	  * Note: This function expects $this->Tokens to be populated with an associative array.
	  * @param string $html
	  * @return string HTML with values in place of the token placeholders in the View.
	  */
	public function replaceTokensInHtml($html)
	{
		if(self::isAssocArray($this->Tokens)) {
			return self::replaceAssocArray($this->Tokens, $html);
		}
		else {
			$this->Errors[] = 'Array passed was not an associative array.';
		}
	}

	/**
	  * Takes an associative array and string containing all the raw HTML and replaces the placeholder tokens with
	  * their values.
	  * Note: This function expects $tokens to be an associative array.
	  * @param array $tokens
	  * @param string $html
	  * @return string HTML with values in place of the token placeholders in the View.
	  */
	private function replaceAssocArray(array $tokens, $html)
	{
		return str_replace(array_keys($tokens), array_values($tokens), $html);

		// if(self::isAssocArray($tokens)) {
		// 	return str_replace(array_keys($tokens), array_values($tokens), $html);
		// }
		// else {
		// 	$this->Errors[] = 'Array passed was not an associative array.';
		// }

	}

	/**
	  * Determines if the passed array is an associative.
	  * @param array $array
	  * @return boolean true if the passed array is an associative.
	  */
	private function isAssocArray($array) {
        return (array_values($array) !== $array);
    }

}

?>
