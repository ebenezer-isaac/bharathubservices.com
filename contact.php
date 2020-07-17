<!DOCTYPE HTML>
<html lang="en">
    <head>
        <?php include "admin/parser.php"; ?>
        <meta charset="UTF-8">
        <title><?php echo $data["contact_heading"]; ?> | <?php echo $data["title"]; ?></title>
        <meta name="viewport" content="width=device-width">

        <!-- Include All CSS here-->
        <style>@charset "UTF-8";:root{--blue:#007bff;--indigo:#6610f2;--purple:#6f42c1;--pink:#e83e8c;--red:#dc3545;--orange:#fd7e14;--yellow:#ffc107;--green:#28a745;--teal:#20c997;--cyan:#17a2b8;--white:#fff;--gray:#6c757d;--gray-dark:#343a40;--primary:#007bff;--secondary:#6c757d;--success:#28a745;--info:#17a2b8;--warning:#ffc107;--danger:#dc3545;--light:#f8f9fa;--dark:#343a40;--breakpoint-xs:0;--breakpoint-sm:576px;--breakpoint-md:768px;--breakpoint-lg:992px;--breakpoint-xl:1200px;--font-family-sans-serif:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-family-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}*,::after,::before{box-sizing:border-box}html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%}section{display:block}body{margin:0;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:left;background-color:#fff}h2{margin-top:0;margin-bottom:.5rem}ul{margin-top:0;margin-bottom:1rem}a{color:#007bff;text-decoration:none;background-color:transparent}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}h2{margin-bottom:.5rem;font-weight:500;line-height:1.2}h2{font-size:2rem}.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:576px){.container{max-width:540px}}@media (min-width:768px){.container{max-width:720px}}@media (min-width:992px){.container{max-width:960px}}@media (min-width:1200px){.container{max-width:1170px}}.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.col-lg-3,.col-md-6,.col-xl-12,.col-xl-3{position:relative;width:100%;padding-right:15px;padding-left:15px}@media (min-width:768px){.col-md-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}}@media (min-width:992px){.col-lg-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}}@media (min-width:1200px){.col-xl-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-xl-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}}.text-center{text-align:center!important}.fal{-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;display:inline-block;font-style:normal;font-variant:normal;text-rendering:auto;line-height:1}.fa-clock:before{content:"\f017"}.fa-envelope:before{content:"\f0e0"}.fa-map-marker-alt:before{content:"\f3c5"}.fa-phone:before{content:"\f095"}@font-face{font-display:swap;font-family:'Font Awesome 5 Pro';font-style:normal;font-weight:300;font-display:auto;src:url(/fonts/fa-light-300.eot);src:url(/fonts/fa-light-300.eot) format("embedded-opentype"),url(/fonts/fa-light-300.woff2) format("woff2"),url(/fonts/fa-light-300.woff) format("woff"),url(/fonts/fa-light-300.ttf) format("truetype"),url(/fonts/fa-light-300.svg) format("svg")}.fal{font-family:'Font Awesome 5 Pro';font-weight:300}@font-face{font-display:swap;font-family:'Font Awesome 5 Pro';font-style:normal;font-weight:400;font-display:auto;src:url(/fonts/fa-regular-400.eot);src:url(/fonts/fa-regular-400.eot) format("embedded-opentype"),url(/fonts/fa-regular-400.woff2) format("woff2"),url(/fonts/fa-regular-400.woff) format("woff"),url(/fonts/fa-regular-400.ttf) format("truetype"),url(/fonts/fa-regular-400.svg) format("svg")}@font-face{font-display:swap;font-family:'Font Awesome 5 Pro';font-style:normal;font-weight:900;font-display:auto;src:url(/fonts/fa-solid-900.eot);src:url(/fonts/fa-solid-900.eot) format("embedded-opentype"),url(/fonts/fa-solid-900.woff2) format("woff2"),url(/fonts/fa-solid-900.woff) format("woff"),url(/fonts/fa-solid-900.ttf) format("truetype"),url(/fonts/fa-solid-900.svg) format("svg")}body,html{margin:0;padding:0}body{font-family:Rubik,sans-serif;font-size:14px;line-height:26px;color:#959ba9;font-weight:400;letter-spacing:0}h2{font-family:'Barlow Condensed',sans-serif;font-weight:600;color:#06163a;margin:0 0 15px}a{color:#ff5e14;text-decoration:none}.commonSection{padding:120px 0;position:relative;background:#fff}.bgtp,.commonSection.bgtp{background:0 0}.noPaddingBottom{padding-bottom:0}.page_banner_contact{position:relative;background:url(images/contact.jpg) no-repeat center center/cover;padding:110px 0 120px}.page_banner:after{position:absolute;left:0;top:0;width:100%;height:100%;content:'';background:rgba(6,22,58,.8)}.page_banner .container{position:relative;z-index:2}.page_banner h2{font-size:100px;line-height:.8;text-transform:capitalize;letter-spacing:-3px;margin:0 0 47px;color:#fff}.breadcrumbs{position:relative;font-size:14px;letter-spacing:0;font-weight:500;text-transform:uppercase;color:#949bac;line-height:.8}.breadcrumbs a{color:inherit}.breadcrumbs span{color:#fff}.breadcrumbs i{font-style:normal;margin:0 8px 0 7px}.contactInfoSection{position:relative;z-index:3}.icon_box_05{position:relative;padding-top:59px;text-align:center}.icon_box_05 i{width:120px;height:120px;border:1px solid #ecebff;color:#ff5e14;text-align:center;line-height:118px;border-radius:50%;background:#fff;font-size:36px;position:absolute;left:0;right:0;top:0;margin:0 auto}.ib5_inner{border:1px solid #ecebff;padding:100px 25px 32px;background:#fff}@media (min-width:992px) and (max-width:1199px){.ib5_inner{padding-left:15px;padding-right:15px}}@media (max-width:991px){.icon_box_05{margin-bottom:30px}}@media (max-width:767px){.page_banner h2{font-size:50px;line-height:50px}.icon_box_05{margin-bottom:30px}}</style>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="print" onload="this.media='all'">
        <link rel="stylesheet" type="text/css" href="css/fontawesome-all.css" media="print" onload="this.media='all'">
        <link rel="stylesheet" type="text/css" href="css/line-awesome.css" media="print" onload="this.media='all'">
        <link rel="stylesheet" type="text/css" href="css/icofont.css" media="print" onload="this.media='all'">
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css" media="print" onload="this.media='all'">
        <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css" media="print" onload="this.media='all'">
        <link rel="stylesheet" type="text/css" href="css/slick.css" media="print" onload="this.media='all'">
        <link rel="stylesheet" type="text/css" href="css/animate.css" media="print" onload="this.media='all'">
        <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" media="print" onload="this.media='all'">
        <link rel="stylesheet" type="text/css" href="css/preset.css" media="print" onload="this.media='all'">

        <link rel="stylesheet" type="text/css" href="css/settings.css" media="print" onload="this.media='all'">
        <link rel="stylesheet" type="text/css" href="css/navigation.css" media="print" onload="this.media='all'">

        <link rel="stylesheet" type="text/css" href="css/theme.css" media="print" onload="this.media='all'">
        <link rel="stylesheet" type="text/css" href="css/responsive.css" media="print" onload="this.media='all'">
        <link rel="stylesheet" type="text/css" href="css/presets/color1.css" id="colorChange" media="print" onload="this.media='all'">
        <!-- End Include All CSS -->

        <!-- Favicon Icon -->
        <link rel="icon" type="image/png" href="images/favicon.png">
        <meta name="description" content="Final Year B.C.A Student at Maharaja Sayajirao University of Baroda | IoT and Java Web Developer | CEH | Transcriptionist | Freelancer">
        <meta name="author" content="Ebenezer Isaac">
        <meta name="theme-color" content="#FF5E14">
        <meta name="keywords" content="<?php echo $data["title"]; ?>, bharathubservices, <?php echo $data["service1"]; ?>, truck driver vadodara, recyclable waste vadodara, goods transportation vadodara">
        <meta property="og:title" content="<?php echo $data["contact_heading"]; ?> | <?php echo $data["title"]; ?>">
        <meta property="og:site_name" content="Click To Know More">
        <meta property="og:url" content="https://bharathubservices.com">
        <meta property="og:description" content="Transportation &amp; Labor">
        <meta property="og:image" content="https://bharathubservices.com/images/favicon.png">
        <meta property="og:image:width" content="686">
        <meta property="og:image:height" content="788">
        <meta property="og:type" content="website">
    </head>
    <body>
        
        <?php include "pre-header.html";?>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li class=" menu-item-has-children">
            <a href="javascript:void(0);">Services</a>
            <ul class="sub_menu">
                <li><a href="services.php">Industrial Goods<br><br>Transportation</a></li>
                    <li><a href="services.php">Labor Force</a></li>
                <li><a href="services.php">Recyclable Waste<br><br>Transportation</a></li>
            </ul>
        </li>
        <li class="current-menu-item"><a href="contact.php">Contact</a></li>
        <li><a target="_blank" href="BharatHubServices.pdf">Brochure</a></li>
        <?php include "post-header.php";?>

        <section class="page_banner_contact page_banner">
            <div class="container">
                <div class="col-xl-12 text-center">
                    <h2><?php echo $data["contact_heading"]; ?></h2>
                    <div class="breadcrumbs">
                        <a href="index.html">Home</a><i>|</i><span>Contact</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="commonSection contactInfoSection noPaddingBottom bgtp">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="icon_box_05">
                            <i class="fal fa-map-marker-alt"></i>
                            <div class="ib5_inner">
                                <h3>Office Location</h3>
                                <p>
                                    <?php echo $data["address"]; ?>
                                </p>
                                <a href="https://goo.gl/maps/ir9RMYPf6t4YTmCq7">Find Us On Map</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="icon_box_05">
                            <i class="fal fa-clock"></i>
                            <div class="ib5_inner">
                                <h3>Office Hours</h3>
                                <p>
                                    <span>Mon - Fri</span><br>
                                    Opening : <?php echo $data["contact_opening"]; ?><br>Closing : <?php echo $data["contact_closing"]; ?> <br><span>Sat - Sun: Off Day</span>
                                </p>
                                <a href="https://goo.gl/maps/ir9RMYPf6t4YTmCq7">Get Directions</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="icon_box_05">
                            <i class="fal fa-phone"></i>
                            <div class="ib5_inner">
                                <h3>Call Us</h3>
                                <p>
                                    <br><br><?php echo $data["phone"]; ?><br><br>
                                </p>
                                <a href="tel:<?php echo $data["phone"]; ?>">Call Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="icon_box_05">
                            <i class="fal fa-envelope"></i>
                            <div class="ib5_inner">
                                <h3>Email Address</h3>
                                <p>
                                    <br><br><?php echo $data["email"]; ?><br><br>
                                </p>
                                <a href="mailto:<?php echo $data["email"]; ?>">Mail Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="formSections">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <h6 class="sub_title dark_sub_title "><?php echo $data["contact_form_subheading"]; ?></h6>
                        <h2 class="sec_title dark_sec_title mb45">
                            <span><?php echo $data["contact_form_heading"]; ?></span>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cotactForm">
                            <form method="post" action="mail.php" class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="iconInput">
                                        <input class="required" type="text" name="con_name" id="con_name" placeholder="ENTER YOUR NAME HERE" />
                                        <i class="fal fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="iconInput">
                                        <input class="required" type="text" name="con_phone" id="con_phone" placeholder="ENTER YOUR NUMBER HERE" />
                                        <i class="fal fa-phone"></i>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="iconInput">
                                        <input class="required" type="text" name="con_email" id="con_email" placeholder="ENTER YOUR EMAIL HERE" />
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="iconInput">
                                        <input class="required" type="text" name="con_subject" id="con_subject" placeholder="ENTER YOUR SUBJECT HERE" />
                                        <i class="fal fa-edit"></i>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="iconInput">
                                        <textarea class="required" name="con_message" id="con_message" placeholder="ENTER YOUR MESSAGE HERE"></textarea>
                                        <i class="fal fa-pencil-alt"></i>
                                    </div>
                                </div>
                                <div style="margin: auto;text-align: center;" id="recaptcha" class="g-recaptcha" data-sitekey="6LewA6kZAAAAAIf8YY2KuH9X1WvVoooRza1b3wK5"></div>
                                <div class="col-xl-12 text-center">
                                    <input type="submit" value="<?php echo $data["contact_form_button"]; ?>" id="con_submit" name="con_submit"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="googleMapSection">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 noPadding">
                        <div class="gmap">
                            <iframe id="gmap_canvas" src="https://www.google.com/maps/embed/v1/place?q=place_id:<?php echo $data["contact_map_placeID"]; ?>&key=AIzaSyALdABFwL2JcF9Jb4WlXwakvD2UFQ47eGg" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript">
            var _captchaTries = 0;
            function recaptchaOnload() {
                _captchaTries++;
                if (_captchaTries > 9)
                    return;
                if ($('.g-recaptcha').length > 0) {
                    grecaptcha.render("recaptcha", {
                        sitekey: '6LewA6kZAAAAAIf8YY2KuH9X1WvVoooRza1b3wK5',
                        callback: function() {
                            console.log('recaptcha callback');
                        }
                    });
                    return;
                }
                window.setTimeout(recaptchaOnload, 1000);
            }
        </script>
        <script src='https://www.google.com/recaptcha/api.js?onload=recaptchaOnload&render=explicit' async defer></script>
        <?php include "footer.php";?>
    </body>
</html>