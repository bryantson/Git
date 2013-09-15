<?php
	/* 
	 * index.php
	 * @description: A PHP webpage that displays and published the data from JSON data.
	 * The website refreshes every 5 seconds, but this can be make into event trigger based.
	 * @author: Bryant Son
	 * This project was created during the Dallas AT&T Hackathon in September 14 - 15, 2013
	 * at Plano, Texas. 
	 */
?>

<meta http-equiv="refresh" content="5; URL=./index.php">
<?php

$json_url = "http://atthackathon.azurewebsites.net/JovuService.svc/GetContactsByDriverId/1";
$json = file_get_contents($json_url);
$links = json_decode($json, TRUE);
?>



<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="stylesheet" type="text/css" href="./css/table-style.css" />
<title>Juvo Project Alpha 1.0</title>
</head>
<body>
<p align="center">
	<h1 align="center"> Juvo Admin</h1>
</p>
<p align="center">
	<img src="./images/logo_juvo.png" />
</p>
<p align="center">
	<table width="800px;" align="center" id="gradient-style" summary="Juvo Project">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company">Contact Name</th>
            <th scope="col" class="rounded-q1">Driver ID</th>
            <th scope="col" class="rounded-q2">Event Type ID</th>
            <th scope="col" class="rounded-q3">Event Type Name</th>
			<th scope="col" class="rounded-q4">ID</th>
            <th scope="col" class="rounded-q5">Phone</th>
        </tr>
    </thead>
    <tbody>
<?php
    foreach($links as $key=>$val){ 
		echo "<tr>";
		echo "<td>" . $val['ContactName'] . "</td>";
		echo "<td>" . $val['DriverID'] . "</td>";
		echo "<td>" . $val['EventTypeID'] . "</td>";
		echo "<td>" . $val['EventTypeName'] . "</td>";
		echo "<td>" . $val['ID'] . "</td>";
		echo "<td>" . $val['Phone'] . "</td>";
		echo "</tr>";
    }
?>

<!--
    	<tr>
        	<td>1</td>
            <td>Hey, Dog</td>
            <td>Voice_HeyDog.mp3</td>
			<td></td>
			<td></td>
        </tr>
-->
    </tbody>
	
</table>
</p>
<p align="center">
	<font size="6"><strong>Copyright to &copy Juvo Project 2013. All Rights Reserved. Thank you, AT&amp;T Hackathon. :)</strong></font>
</p>
</body>
</html>