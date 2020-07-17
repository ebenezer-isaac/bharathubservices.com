<html>
	<body>
		Saving Details . . . . 
	</body>
<?php
	$servername = "sql290.main-hosting.eu";
	$username = "u117204720_clients";
	$password = "|Yt]Z?iH*Eh9";
	$dbname = "u117204720_clients";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	$keys = ["about_heading",  "about_summary_button", "about_summary_heading", "about_summary_subheading", "about_summary_text", "address", "contact_closing", "contact_form_button", "contact_form_heading", "contact_form_subheading", "contact_heading", "contact_map_placeID", "contact_opening", "email", "fb", "footer_contact_text", "footer_heading1", "footer_heading2", "footer_heading3", "footer_text", "index_desc_service1", "index_desc_service2", "index_desc_service3", "index_heading1", "index_heading2", "index_subheading1", "index_subheading2", "index_summary_heading", "index_summary_subheading", "index_summary_text", "insta", "phone", "service1", "service2", "service3", "services_contact_heading" ,"services_contact_text", "services_heading", "services_sub_heading", "title", "tw", "yt"];
	foreach( $keys as $key ) {
		$data="";
		if ($_POST["".$key]!=""){
			$data = mysqli_real_escape_string($conn, $_POST["".$key]);	
		}
		$sql = "UPDATE `bharathubservices` SET `text`='$data' WHERE `name`='$key';";
		$conn->query($sql);
	}
	echo "<script>window.location.replace('index.php');</script>";
?>
</html>