<?php
	$data = ["title"=>"default"];
	$servername = "srv677.hstgr.io";
	$username = "u117204720_clients";
	$password = "|Yt]Z?iH*Eh9";
	$dbname = "u117204720_clients";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT * FROM bharathubservices";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	  while($row = $result->fetch_assoc()) {
	  	#echo $row["name"]."<br>";
	    $data["".$row["name"]] = $row["text"];
	  }
	} else {
	}
	#print_r($data);
$conn->close();

