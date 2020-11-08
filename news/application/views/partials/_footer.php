<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
	

	<!-- Start Footer Section -->
    <i class="scroll-top scroll-top-mobile show fa fa-sort-asc"></i>
    <footer class="footer-base">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-center text-left">
                        <img width="120" src="../images/logo.png" alt="" />
                        <hr class="space m" />
                        <p class="text-s">Collins Street West 8007, San Fransico, United States.</p>
                        <div class="tag-row text-s">
                            <span>support@company.com</span>
                            <span>+02 3205550678</span>
                        </div>
                        <hr class="space m" />
                        <div class="btn-group social-group btn-group-icons">
                            <a target="_blank" href="#" data-social="share-facebook">
                                <i class="fa fa-facebook text-xs circle"></i>
                            </a>
                            <a target="_blank" href="#" data-social="share-twitter">
                                <i class="fa fa-twitter text-xs circle"></i>
                            </a>
                            <a target="_blank" href="#" data-social="share-google">
                                <i class="fa fa-google-plus text-xs circle"></i>
                            </a>
                            <a target="_blank" href="#" data-social="share-linkedin">
                                <i class="fa fa-linkedin text-xs circle"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 footer-left text-left">
                        <div class="row">
                            <div class="col-md-6 text-s">
                                <h3>Menu</h3>
                                <a href="#">Home</a><br />
                                <a href="#">Contacts</a><br />
                                <a href="#">Future projects</a><br />
                                <a href="#">Locations</a><br />
                                <a href="#">Latest news</a><br />

                            </div>
                            <div class="col-md-6 text-s">
                                <h3>Pages</h3>
                                <a href="#">Support</a><br />
                                <a href="#">Terms of services</a><br />
                                <a href="#">RSS Feeds</a><br />
                                <a href="#">Partnerships</a><br />
                                <a href="#">Latest news</a><br />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 footer-left text-left">
                        <h3>You can trust us</h3>
                        <p class="text-s">
                            Utenim ad minim veniam quis nostrud exercitation ullamco lorem ipsum dolor sit ametullamco lorem ipsum dolor sit ametullamco lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmo.
                        </p>
                        <hr class="space xs" />
                        <img src="../images/cards-icon.png" alt="" />
                    </div>
                </div>
            </div>
            <div class="row copy-row">
                <div class="col-md-12 copy-text">
                    © 2018 Yellow Business - Multipurpose & Construction Template Handmade by <a href="http://schiocco.io/">schiocco.io</a>
                </div>
            </div>
        </div>
    </footer>
	<!-- End Footer Section -->
<?php if (!isset($_COOKIE["csac_cookies_warning"]) && $settings->cookies_warning): ?>
	<div class="cookies-warning">
		<div class="text"><?php echo $this->settings->cookies_warning_text; ?></div>
		<a href="javascript:void(0)" onclick="hide_cookies_warning();" class="icon-cl"> <i class="icon-close"></i></a>
	</div>
<?php endif; ?>
<!-- Scroll Up Link -->
<!-- Slider js -->
<script src="<?php echo base_url(); ?>assets/vendor/slick/slick.min.js"></script>
<!-- Bootstrap js -->
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- Plugins -->
<script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
<!-- Theme js -->
<script src="<?php echo base_url(); ?>assets/js/script-3.9.min.js"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>themes/scripts/font-awesome/css/font-awesome.css">	
        <script async src="<?php echo base_url(); ?>themes/scripts/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>themes/scripts/imagesloaded.min.js"></script>
        <script src="<?php echo base_url(); ?>themes/scripts/parallax.min.js"></script>
        <script src="<?php echo base_url(); ?>themes/scripts/flexslider/jquery.flexslider-min.js"></script>
        <script async src="<?php echo base_url(); ?>themes/scripts/isotope.min.js"></script>
        <script async src="<?php echo base_url(); ?>themes/scripts/php/contact-form.js"></script>
        <script async src="<?php echo base_url(); ?>themes/scripts/jquery.progress-counter.js"></script>
        <script async src="<?php echo base_url(); ?>themes/scripts/jquery.tab-accordion.js"></script>
        <script async src="<?php echo base_url(); ?>themes/scripts/bootstrap/js/bootstrap.popover.min.js"></script>
        <script async src="<?php echo base_url(); ?>themes/scripts/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo base_url(); ?>themes/scripts/social.stream.min.js"></script>
        <script src="<?php echo base_url(); ?>themes/scripts/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url(); ?>themes/scripts/google.maps.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script src="<?php echo base_url(); ?>themes/scripts/smooth.scroll.min.js"></script>
<?php if (isset($page_type)):
	echo $general_settings->facebook_comment;
endif; ?>
<script>$('<input>').attr({type: 'hidden', name: 'lang_folder', value: '<?php echo $this->selected_lang->folder_name; ?>'}).appendTo('form[method=post]');</script>
<?php echo $general_settings->google_adsense_code; ?>
<?php echo $general_settings->google_analytics; ?>
</body>
</html>
