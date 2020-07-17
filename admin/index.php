<html>
	<head>
		<?php include "parser.php"; ?>
		<link rel="stylesheet" type="text/css" href="../css/theme.css">
		<link rel="stylesheet" type="text/css" href="../css/responsive.css">
		<link rel="stylesheet" type="text/css" href="../css/preset.css">
		<link rel="stylesheet" type="text/css" href="../css/form.css">
		<link rel="stylesheet" type="text/css" href="../css/presets/color1.css">
		<title>Admin Page</title>
	</head>
	<body>
		<div style="margin: 30px 30px 30px 30px;">
			<form action="save_details.php" method="post" align='center'>
				<div style="margin: 30px 30px 30px 30px;">
					<fieldset>
						<legend>Main Information</legend>
						<div style="margin: 30px 30px 30px 30px;">
							<div>
								<label class="label-input100" for="title">Page Title&nbsp;&nbsp;<span>&nbsp;[&nbsp;title&nbsp;]&nbsp;</span></label>
								<div class="wrap-input100 ">
									<input id="title" class="input100" type="text" value="<?php echo $data["title"]; ?>" name="title" placeholder="Enter Text Here">
									<span class="focus-input100"></span>
								</div>
							</div>
							<div>
								<label class="label-input100" for="service1">Service 1&nbsp;&nbsp;<span>&nbsp;[&nbsp;service1&nbsp;]&nbsp;</span></label>
								<div class="wrap-input100 ">
									<input id="service1" class="input100" type="text" value="<?php echo $data["service1"]; ?>" name="service1" placeholder="Enter Text Here">
									<span class="focus-input100"></span>
								</div>
							</div>
							<div>
								<label class="label-input100" for="service2">Service 2&nbsp;&nbsp;<span>&nbsp;[&nbsp;service2&nbsp;]&nbsp;</span></label>
								<div class="wrap-input100 ">
									<input id="service2" class="input100" type="text" value="<?php echo $data["service2"]; ?>" name="service2" placeholder="Enter Text Here">
									<span class="focus-input100"></span>
								</div>
							</div>
							<div>
								<label class="label-input100" for="service3">Service 3&nbsp;&nbsp;<span>&nbsp;[&nbsp;service3&nbsp;]&nbsp;</span></label>
								<div class="wrap-input100 ">
									<input id="service3" class="input100" type="text" value="<?php echo $data["service3"]; ?>" name="service3" placeholder="Enter Text Here">
									<span class="focus-input100"></span>
								</div>
							</div>
							<br>
							<fieldset>
								<legend>Contact Information</legend>
								<div style="margin: 30px 30px 30px 30px;">
									<div>
										<label class="label-input100" for="phone">Phone Number&nbsp;&nbsp;<span>&nbsp;[&nbsp;phone&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<input id="phone" class="input100" type="text" value="<?php echo $data["phone"]; ?>" name="phone" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="email">Email Address&nbsp;&nbsp;<span>&nbsp;[&nbsp;email&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<input id="email" class="input100" type="text" value="<?php echo $data["email"]; ?>" name="email" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="address">Address&nbsp;&nbsp;<span>&nbsp;[&nbsp;address&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											<textarea id="address" class="input100" name="address" placeholder="Enter Text Here"><?php echo $data["address"]; ?></textarea>
											<span class="focus-input100"></span>
										</div>
									</div>
								</div>
							</fieldset>
							<br>
							<fieldset>
								<legend>Social Links</legend>
								<div style="margin: 30px 30px 30px 30px;">
									<div>
										<label class="label-input100" for="fb">Facebook&nbsp;&nbsp;<span>&nbsp;[&nbsp;fb&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<input id="fb" class="input100" type="text" value="<?php echo $data["fb"]; ?>" name="fb" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="tw">Twitter&nbsp;&nbsp;<span>&nbsp;[&nbsp;tw&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<input id="tw" class="input100" type="text" value="<?php echo $data["tw"]; ?>" name="tw" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="yt">Youtube&nbsp;&nbsp;<span>&nbsp;[&nbsp;yt&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<input id="yt" class="input100" type="text" value="<?php echo $data["yt"]; ?>" name="yt" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="insta">Instagram&nbsp;&nbsp;<span>&nbsp;[&nbsp;insta&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<input id="insta" class="input100" type="text" value="<?php echo $data["insta"]; ?>" name="insta" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
								</div>
							</fieldset>
							<br>
							<fieldset>
								<legend>Footer</legend>
								<div style="margin: 30px 30px 30px 30px;">
									<div>
										<label class="label-input100" for="footer_heading1">Footer Heading 1&nbsp;&nbsp;<span>&nbsp;[&nbsp;footer_heading1&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<input id="footer_heading1" class="input100" type="text" value="<?php echo $data["footer_heading1"]; ?>" name="footer_heading1" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="footer_heading2">Footer Heading 2&nbsp;&nbsp;<span>&nbsp;[&nbsp;footer_heading2&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<input id="footer_heading2" class="input100" type="text" value="<?php echo $data["footer_heading2"]; ?>" name="footer_heading2" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="footer_heading3">Footer Heading 3&nbsp;&nbsp;<span>&nbsp;[&nbsp;footer_heading3&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<input id="footer_heading3" class="input100" type="text" value="<?php echo $data["footer_heading3"]; ?>" name="footer_heading3" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="footer_text">Footer Text&nbsp;&nbsp;<span>&nbsp;[&nbsp;footer_text&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											<textarea id="footer_text" class="input100" name="footer_text" placeholder="Enter Text Here"><?php echo $data["footer_text"]; ?></textarea>
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="footer_contact_text">Footer Contact Text&nbsp;&nbsp;<span>&nbsp;[&nbsp;footer_contact_text&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<input id="footer_contact_text" class="input100" type="text" value="<?php echo $data["footer_contact_text"]; ?>" name="footer_contact_text" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
								</div>
							</fieldset>
						</div>
					</fieldset>
					<br><br>
					<fieldset>
						<legend>Page Information</legend>
						<div style="margin: 30px 30px 30px 30px;">
							<fieldset>
								<legend>Index Page</legend>
								<div style="margin: 30px 30px 30px 30px;">
									<div>
										<label class="label-input100" for="index_heading1">Index Heading 1&nbsp;&nbsp;<span>&nbsp;[&nbsp;index_heading1&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<input id="index_heading1" class="input100" type="text" value="<?php echo $data["index_heading1"]; ?>" name="index_heading1" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="index_subheading1">Index Sub Heading 1&nbsp;&nbsp;<span>&nbsp;[&nbsp;index_subheading1&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<input id="index_subheading1" class="input100" type="text" value="<?php echo $data["index_subheading1"]; ?>" name="index_subheading1" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="index_heading2">Index Heading 2&nbsp;&nbsp;<span>&nbsp;[&nbsp;index_heading2&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											<input id="index_heading2" class="input100" type="text" value="<?php echo $data["index_heading2"]; ?>" name="index_heading2" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="index_subheading2">Index Sub Heading 2&nbsp;&nbsp;<span>&nbsp;[&nbsp;index_subheading2&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											<input id="index_subheading2" class="input100" type="text" value="<?php echo $data["index_subheading2"]; ?>" name="index_subheading2" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="index_desc_service1">Index Service 1 Desc&nbsp;&nbsp;<span>&nbsp;[&nbsp;index_desc_service1&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											<textarea id="index_desc_service1" class="input100" name="index_desc_service1" placeholder="Enter Text Here"><?php echo $data["index_desc_service1"]; ?></textarea>
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="index_desc_service2">Index Service 2 Desc&nbsp;&nbsp;<span>&nbsp;[&nbsp;index_desc_service2&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											<textarea id="index_desc_service2" class="input100" name="index_desc_service2" placeholder="Enter Text Here"><?php echo $data["index_desc_service2"]; ?></textarea>
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="index_desc_service3">Index Service 3 Desc&nbsp;&nbsp;<span>&nbsp;[&nbsp;index_desc_service3&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											<textarea id="index_desc_service3" class="input100" name="index_desc_service3" placeholder="Enter Text Here"><?php echo $data["index_desc_service3"]; ?></textarea>
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="index_summary_heading">Index Summary Heading&nbsp;&nbsp;<span>&nbsp;[&nbsp;index_summary_heading&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											<input id="index_summary_heading" class="input100" type="text" value="<?php echo $data["index_summary_heading"]; ?>" name="index_summary_heading" placeholder="Enter Text Here">	                                            
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="index_summary_subheading">Index Summary Sub Heading&nbsp;&nbsp;<span>&nbsp;[&nbsp;index_summary_subheading&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											<input id="index_summary_subheading" class="input100" type="text" value="<?php echo $data["index_summary_subheading"]; ?>" name="index_summary_subheading" placeholder="Enter Text Here">	                                            
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="index_summary_text">Index Summary Text&nbsp;&nbsp;<span>&nbsp;[&nbsp;index_summary_text&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											<textarea id="index_summary_text" class="input100" name="index_summary_text" placeholder="Enter Text Here"><?php echo $data["index_summary_text"]; ?></textarea>
											<span class="focus-input100"></span>
										</div>
									</div>
								</div>
							</fieldset>
							<br>
							<fieldset>
								<legend>About Page</legend>
								<div style="margin: 30px 30px 30px 30px;">
									<div>
										<label class="label-input100" for="about_heading">About Heading&nbsp;&nbsp;<span>&nbsp;[&nbsp;about_heading&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<input id="about_heading" class="input100" type="text" value="<?php echo $data["about_heading"]; ?>" name="about_heading" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="about_summary_heading">About Summary Heading&nbsp;&nbsp;<span>&nbsp;[&nbsp;about_summary_heading&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<input id="about_summary_heading" class="input100" type="text" value="<?php echo $data["about_summary_heading"]; ?>" name="about_summary_heading" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="about_summary_subheading">About Summary Sub Heading&nbsp;&nbsp;<span>&nbsp;[&nbsp;about_summary_subheading&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											<input id="about_summary_subheading" class="input100" type="text" value="<?php echo $data["about_summary_subheading"]; ?>" name="about_summary_subheading" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="about_summary_text">About Summary Text&nbsp;&nbsp;<span>&nbsp;[&nbsp;about_summary_text&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											<textarea id="about_summary_text" class="input100" name="about_summary_text" placeholder="Enter Text Here"><?php echo $data["about_summary_text"]; ?></textarea>
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="about_summary_button">About Summary Button Text&nbsp;&nbsp;<span>&nbsp;[&nbsp;about_summary_button&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											<input id="about_summary_button" class="input100" type="text" value="<?php echo $data["about_summary_button"]; ?>" name="about_summary_button" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
								</div>
							</fieldset>
							<br>
							<fieldset>
								<legend>Services Page</legend>
								<div style="margin: 30px 30px 30px 30px;">
									<div>
										<label class="label-input100" for="services_heading">Services Heading&nbsp;&nbsp;<span>&nbsp;[&nbsp;services_heading&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<input id="services_heading" class="input100" type="text" value="<?php echo $data["services_heading"]; ?>" name="services_heading" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="services_sub_heading">Services Sub Heading&nbsp;&nbsp;<span>&nbsp;[&nbsp;services_sub_heading&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<input id="services_sub_heading" class="input100" type="text" value="<?php echo $data["services_sub_heading"]; ?>" name="services_sub_heading" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="services_contact_heading">Services Contact Heading&nbsp;&nbsp;<span>&nbsp;[&nbsp;services_contact_heading&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											<input id="services_contact_heading" class="input100" type="text" value="<?php echo $data["services_contact_heading"]; ?>" name="services_contact_heading" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="services_contact_text">Services Contact Text&nbsp;&nbsp;<span>&nbsp;[&nbsp;services_contact_text&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											<textarea id="services_contact_text" class="input100" name="services_contact_text" placeholder="Enter Text Here"><?php echo $data["services_contact_text"]; ?></textarea>
											<span class="focus-input100"></span>
										</div>
									</div>
								</div>
							</fieldset>
							<br>
							<fieldset>
								<legend>Contact Page</legend>
								<div style="margin: 30px 30px 30px 30px;">
									<div>
										<label class="label-input100" for="contact_heading">Contact Heading&nbsp;&nbsp;<span>&nbsp;[&nbsp;contact_heading&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<input id="contact_heading" class="input100" type="text" value="<?php echo $data["contact_heading"]; ?>" name="contact_heading" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="contact_opening">Contact Opening&nbsp;&nbsp;<span>&nbsp;[&nbsp;contact_opening&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<input id="contact_opening" class="input100" type="text" value="<?php echo $data["contact_opening"]; ?>" name="contact_opening" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="contact_closing">Contact Closing&nbsp;&nbsp;<span>&nbsp;[&nbsp;contact_closing&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											<input id="contact_closing" class="input100" type="text" value="<?php echo $data["contact_closing"]; ?>" name="contact_closing" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="contact_form_heading">Contact Form Heading&nbsp;&nbsp;<span>&nbsp;[&nbsp;contact_form_heading&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100 ">
											<input id="contact_form_heading" class="input100" type="text" value="<?php echo $data["contact_form_heading"]; ?>" name="contact_form_heading" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="contact_form_subheading">Contact Form Sub Heading&nbsp;&nbsp;<span>&nbsp;[&nbsp;contact_form_subheading&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											<input id="contact_form_subheading" class="input100" type="text" value="<?php echo $data["contact_form_subheading"]; ?>" name="contact_form_subheading" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="contact_form_button">Contact Form Button&nbsp;&nbsp;<span>&nbsp;[&nbsp;contact_form_button&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											<input id="contact_form_button" class="input100" type="text" value="<?php echo $data["contact_form_button"]; ?>" name="contact_form_button" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
									<div>
										<label class="label-input100" for="contact_map_placeID">Contact Map PlaceID&nbsp;&nbsp;<span>&nbsp;[&nbsp;contact_map_placeID&nbsp;]&nbsp;</span></label>
										<div class="wrap-input100">
											<input id="contact_map_placeID" class="input100" type="text" value="<?php echo $data["contact_map_placeID"]; ?>" name="contact_map_placeID" placeholder="Enter Text Here">
											<span class="focus-input100"></span>
										</div>
									</div>
								</div>
							</fieldset>
						</div>
					</fieldset>
				</div>
				<br><br>
				<input type="submit" class='ind_btn_2 text-center' value="Save Details" align='center'>
			</form>
		</div>
	</body>
</html>