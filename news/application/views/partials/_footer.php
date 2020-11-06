<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php if (!isset($_COOKIE["inf_cookies_warning"]) && $settings->cookies_warning): ?>
	<div class="cookies-warning">
		<div class="text"><?php echo $this->settings->cookies_warning_text; ?></div>
		<a href="javascript:void(0)" onclick="hide_cookies_warning();" class="icon-cl"> <i class="icon-close"></i></a>
	</div>
<?php endif; ?>
<!-- Scroll Up Link -->
<a href="#" class="scrollup"><i class="icon-arrow-up"></i></a>
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
