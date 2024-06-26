<footer class="footer_01">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-md-6 col-lg-5 noPaddingRight">
                <aside class="widget">
                    <div class="about_widget">
                    	<h3 class="widget_title"><?php echo $data["footer_heading1"]; ?><span>.</span></h3>
                        <p style="white-space:wrap;">
                           <?php echo $data["footer_text"]; ?>
                        </p>                                   
                		<a href="tel:<?php echo $data["phone"]; ?>">
                        	<div class="caller">
                            	<i class="fal fa-headphones"></i>
                            	<span><?php echo $data["footer_contact_text"]; ?></span>
                            	<h3><?php echo $data["phone"]; ?></h3>
                        	</div>
                    	</a>
                    </div>
                </aside>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-3 pdl45 noPaddingRight">
                <aside class="widget">
                    <h3 class="widget_title"><?php echo $data["footer_heading2"]; ?><span>.</span></h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a target="_blank" href="BharatHubServices.pdf">Brochure</a></li>
                    </ul>
                </aside>
            </div>
            <div class="col-xl-4 col-md-6 col-lg-4 pdl65">
                <aside class="widget">
                    <h3 class="widget_title"><?php echo $data["footer_heading3"]; ?><span>.</span></h3>
                    <div class="recentServices"> 
                        <ul>
                            <li> 
                                <a href="services.php">                           
                                    <div class="serviceItem clearfix" style="display:inline-block;">
                                        <i class="icofont-truck icofont-3x"></i><h5><?php echo $data["service1"]; ?></h5>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="services.php">
                                    <div class="serviceItem clearfix" style="display:inline-block;">
                                        <i class="icofont-engineer icofont-3x"></i>
                                        <h5><?php echo $data["service2"]; ?></h5>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="services.php">
                                    <div class="serviceItem clearfix" style="display:inline-block;">
                                        <i class="icofont-recycle icofont-3x"></i>
                                        <h5><?php echo $data["service3"]; ?></h5>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</footer>
<section class="copyright_section">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="siteinfo" id="copyrights"></div>
            </div>
        </div>
    </div>
</section>
<a href="#" id="backtotop"><i class="fal fa-angle-double-up"></i></a>
<!-- Include All JS -->
<script src="js/jquery.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.appear.js"></script>

<script src="js/owl.carousel.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.shuffle.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/dlmenu.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/theme.js"></script>
<script src="js/extensions/revolution.extension.actions.min.js"></script>
<script src="js/extensions/revolution.extension.carousel.min.js"></script>
<script src="js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="js/extensions/revolution.extension.migration.min.js"></script>
<script src="js/extensions/revolution.extension.navigation.min.js"></script>
<script src="js/extensions/revolution.extension.parallax.min.js"></script>
<script src="js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="js/extensions/revolution.extension.video.min.js"></script>
<script src="js/lazyload.js"></script>
<script>
    $( document ).ready(function() {
        
        var d = new Date();
        var curr_year = d.getFullYear();
        document.getElementById("copyrights").innerHTML = "Copyright By &COPY; <?php echo $data["title"]; ?> - "+curr_year+"<br><a href='https://mycrolinks.com'>Website Designed and Maintained by MycroLinks</a>";
    });
</script>
