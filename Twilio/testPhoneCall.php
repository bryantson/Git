<!--
	/* 
	 * testPhoneCall.php
	 * @description: Testing the phone call through HTML form. A good way to test before coding
	 * through the mobile phone. The value of "from" has a number that was created with a paid Twilio number.
	 * @author: Bryant Son
	 * This project was created during the Dallas AT&T Hackathon in September 14 - 15, 2013
	 * at Plano, Texas. 
	 */
// -->
<html>
<head>
	<title>Test Twilio</title>
</head>
<body>
<h1> Testing Twilio using PHP API</h1>
	<form action="./SmakePhoneCall.php" method="get">
		<table border="1">
			<tr>
				<td><strong>FROM: </strong></td>
				<td><input type="text" id="from" name="from" value="8179845467" /></td>
			</tr>
			<tr>
				<td><strong>TO: </strong></td>
				<td><input type="text" id="to" name="to" /></input>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Make A Call" />
			</tr>
		</table>
	
	</form>
	
</body>
</html>