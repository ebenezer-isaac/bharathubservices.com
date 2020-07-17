                    </ul>
                </nav>
            </div>
            <div class="col-lg-2 text-right col-md-12" id='callButton'></div>
        </div>
    </div>
</header>
<section class="topbar_02">
    <div class="header-container">
        <div class="row">
            <div class="col-lg-6 col-md-7">
                <div class="topbar_left text-left">
                	<a href="mailto:<?php echo $data["email"]; ?>">
                        <div class="topbar_element info_element">
                            <i class="fa fa-envelope"></i>
                            <h5>Email Address</h5>
                            <p><?php echo $data["email"]; ?></p>
                        </div>
                    </a>
                    <a href="tel:<?php echo $data["phone"]; ?>">
                        <div class="topbar_element info_element">
                            <i class="fa fa-phone"></i>
                            <h5>Phone Number</h5>
                            <p><?php echo $data["phone"]; ?></p>
                        </div>
                	</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-5">
                <div class="social_and_settings text-right clearfix">
                    <span>
                        <?php 
                            if($data["fb"]!=""){
                                $link = $data["fb"];
                                echo '<a href="$link" class="socs"><i class="fab fa-facebook-f"></i></a>';
                            }
                            if($data["tw"]!=""){
                                $link = $data["fb"];
                                echo '<a href="$link" class="socs"><i class="fab fa-twitter-f"></i></a>';
                            }
                            if($data["yt"]!=""){
                                $link = $data["fb"];
                                echo '<a href="$link" class="socs"><i class="fab fa-youtube-f"></i></a>';
                            }
                            if($data["insta"]!=""){
                                $link = $data["fb"];
                                echo '<a href="$link" class="socs"><i class="fab fa-instagram-f"></i></a>';
                            }
                        ?>
                    </span>
                    <a href="#" class="toggler hamburger" id="open-overlay-nav"><i class="fal fa-bars"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Overlay Menu -->
<div class="popup popup__menu">
    <div class="header-container mobileContainer">
        <div class="row">
            <div class="col-lg-8 text-left">
                <div class="popup_logos">
                    <a href="index.php"><?php echo $data["title"]; ?></a>
                </div>
            </div>
            <div class="col-lg-4 text-right">
                <a href="" id="close-popup" class="close-popup"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="popup-inner">
                    <div class="dl-menu__wrap dl-menuwrapper">
					
                        <ul class="dl-menu dl-menuopen">
                        	<li>
                        		<div class="popup_logos" id='overlayLogo'></div>
                        	</li>
                            <li class="current-menu-item">
                                <a href="index.php">Home</a>
	                        </li>
                            <li><a href="about.php">About</a></li>
                            <li class="menu-item-has-children">
                                <a href="services.php">Services</a>
                                <ul class="dl-submenu">
                                    <li><a href="services.php"><?php echo $data["service1"]; ?></a></li>
                                    <li><a href="services.php"><?php echo $data["service2"]; ?></a></li>
                                    <li><a href="services.php"><?php echo $data["service3"]; ?></a></li>
                                </ul>
                            </li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a target="_blank" href="BharatHubServices.pdf">Brochure</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-xs-12 text-left">
                <ul class="footer__contacts">
                    <li><i class="fa fa-phone"></i>&nbsp;&nbsp;Phone: <?php echo $data["phone"]; ?></li>
                    <li><i class="fa fa-envelope"></i>&nbsp;&nbsp;Email: <?php echo $data["email"]; ?></li>
                    <li><i class="fas fa-building"></i>&nbsp;&nbsp;Address: <?php echo $data["address"]; ?></li>
                </ul>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12 col-xs-12">
                <div class="foo_social popUp_social text-right">
                     <?php 
                        if($data["fb"]!=""){
                            $link = $data["fb"];
                            echo '<a href="$link"><i class="fab fa-facebook-f"></i></a>';
                        }
                        if($data["tw"]!=""){
                            $link = $data["fb"];
                            echo '<a href="$link"><i class="fab fa-twitter-f"></i></a>';
                        }
                        if($data["yt"]!=""){
                            $link = $data["fb"];
                            echo '<a href="$link"><i class="fab fa-youtube-f"></i></a>';
                        }
                        if($data["insta"]!=""){
                            $link = $data["fb"];
                            echo '<a href="$link"><i class="fab fa-instagram-f"></i></a>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    if(screen.width>600){
        document.getElementById("callButton").innerHTML='<a href="tel:<?php echo $data["phone"]; ?>" class="ind_btn_2 text-center"><span>Make a call</span></a>';
        document.getElementById("overlayLogo").innerHTML='<a href="index.php"><img src="images/favicon.png" alt=""></a>';
    };
</script>