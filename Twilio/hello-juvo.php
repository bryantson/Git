<?php
	/* 
	 * hello-juvo.php
	 * @description: Receives the call from Twilio from makePhoneCall.php and reads out the appropriate 
	 * specified message from appended TwiML for the conference call.
	 * @author: Bryant Son
	 * This project was created during the Dallas AT&T Hackathon in September 14 - 15, 2013
	 * at Plano, Texas. 
	 */
?>
<?php	
	// make an associative array of callers we know, indexed by phone number
	$people = array(
		"+12223334444"=>"John Doe",
	);
	
	// if the caller is known, then greet them by name
	// otherwise, consider them just another monkey
	if(!$name = $people[$_REQUEST['From']])
		$name = "Customer";
		
	// now greet the caller
	header("content-type: text/xml");
	echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
		<Say>Hello <?php echo $name ?>. Graham Smith has been in the accident. This is an automated message from Juvo
		letting you know that the emergency services have been notified and are on the way to his location now.
		You will soon join the Juvo Conference Room.</Say>
		<Dial>
			<Conference>Juvo Conference Room</Conference>
		</Dial>
</Response>
