<?php
	/* 
	 * makePhoneCAll.php
	 * @description: Requests the Twilio phone call using imported Twilio API for PHP.
	 * The String field "from" and "to" refer to the sender number and receiver phone number, respectively,
	 * and these numbers are getting from any HTTP GET submission.
	 * "from" field has a number that was created with a paid Twilio number.
	 * @author: Bryant Son
	 * This project was created during the Dallas AT&T Hackathon in September 14 - 15, 2013
	 * at Plano, Texas. 
	 */
?>

<?php
    // Include the Twilio PHP library
    require './lib/twilio-php/Services/Twilio.php';
 
    // Twilio REST API version
    $version = "2010-04-01";
 
    // Set our Account SID and AuthToken
    $sid = 'AC298f89122da088cd98ee7b540151cfce';
    $token = '7442acc536fbf6f73904f2b55d86610f';
     
    // A phone number you have previously validated with Twilio
    $from_phone = $_GET["from"];
    $to_phone   = $_GET["to"];
	
    // Instantiate a new Twilio Rest Client
    $client = new Services_Twilio($sid, $token, $version);
 
    try {
        // Initiate a new outbound call
        $call = $client->account->calls->create(
            $from_phone, // The number of the phone initiating the call
            $to_phone, // The number of the phone receiving call
            'http://hackathon.utexaspixels.com/hello-juvo.php' // The URL Twilio will request when the call is answered
        );
        echo 'Started call: ' . $call->sid;
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
?>