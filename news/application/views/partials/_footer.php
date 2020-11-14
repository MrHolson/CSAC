<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
	


<style>
	footer a, footer p{
		color:#fff!important;
	}
</style>

<i class="scroll-top scroll-top-mobile show fa fa-sort-asc"></i>
	<footer id="footer" >
		<div class="content">
			<div class="container ">
				<div class="row footer-widgets">
					<!-- footer widget about-->
					<div class="col-sm-4 col-xs-12">
						<div class="footer-widget f-widget-about">
							<div class="col-sm-12">
								<div class="row">
									<h4 class="title"><?php echo html_escape(trans("about")); ?></h4>
									<div class="title-line"></div>
									<p>
										<?php echo html_escape($settings->about_footer); ?>
									</p>
									<div class="col-md-7 col-sm-12">
										<ul>
											<li><a href="<?php echo base_url(); ?>">Accueil</a> </li>
											<li><a href="<?php echo base_url(); ?>actualites">Actualités</a> </li>
											<li><a href="<?php echo base_url(); ?>blog">Nos articles</a> </li>
											<li><a href="<?php echo base_url(); ?>communiques/presse ">Presse </a> </li>
											<li><a href="<?php echo base_url(); ?>communiques/communiques-officiels">Officiels</a> </li>
											<li><a href="<?php echo base_url(); ?>members">Membres du CSAC</a> </li>
										</ul>
									</div>
									<div class="col-md-5 col-sm-12">
										<ul>
											<li><a href="<?php echo base_url(); ?>contact">Contact</a> </li>
											<li><a href="<?php echo base_url(); ?>gallery">Multimédias</a> </li>
											<li><a href="<?php echo base_url(); ?>documents/constitution">Constitution </a> </li>
											<li><a href="<?php echo base_url(); ?>communiques">Communiqués</a> </li>
										</ul>
									</div>

								</div>
							</div>
						</div>

						
					</div><!-- /.col-sm-4 -->


					<!-- footer widget random posts-->
					<div class="col-sm-4 col-xs-12">

					
						<!--Include footer random posts partial-->
						<?php $this->load->view('partials/_footer_random_posts'); ?>
					</div><!-- /.col-sm-4 -->

					<!-- footer widget follow us-->
					<div class="col-sm-4 col-xs-12">
						<div class="col-sm-12">
							<div class="row">
								<div class="footer-widget f-widget-follow">
									<div class="col-sm-12">
										<div class="row">
											<h4 class="title"><?php echo html_escape(trans("social_media")); ?></h4>
											<div class="title-line"></div>
											<ul>
												<?php $this->load->view("partials/_social_links"); ?>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- newsletter -->
						<div class="col-sm-12">
							<div class="row">
								<p><?php echo html_escape(trans("newsletter_exp")); ?></p>
								<?php echo form_open('home_controller/add_to_newsletter'); ?>
								<div class="newsletter">
									<div class="left">
										<input type="email" name="email" id="newsletter_email" maxlength="199" placeholder="<?php echo html_escape(trans("email")); ?>" required <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
									</div>
									<div class="right">
										<button type="submit" class="newsletter-button"><?php echo trans("subscribe"); ?></button>
									</div>
								</div>
								<?php echo form_close(); ?>
							</div>
							<div class="row">
								<p id="newsletter">
									<?php
									if ($this->session->flashdata('news_error')):
										echo '<span class="text-danger">' . $this->session->flashdata('news_error') . '</span>';
									endif;

									if ($this->session->flashdata('news_success')):
										echo '<span class="text-success">' . $this->session->flashdata('news_success') . '</span>';
									endif;
									?>
								</p>
							</div>
						</div>

						<div class="col-sm-12">
							<div class="row">
								<div class="languages-dropdown">
									<?php if ($general_settings->multilingual_system == 1 && count($languages) > 1): ?>
										<div class="dropdown">
											<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
												<i class="icon-language"></i><?php echo html_escape($selected_lang->name); ?>&nbsp;<span class="icon-arrow-down"></span>
											</button>
											<ul class="dropdown-menu">
												<?php foreach ($languages as $language):
													$lang_url = base_url() . $language->short_form . "/";
													if ($language->id == $this->general_settings->site_lang) {
														$lang_url = base_url();
													} ?>
													<li><a href="<?php echo $lang_url; ?>" class="<?php echo ($language->id == $selected_lang->id) ? 'selected' : ''; ?>"><?php echo $language->name; ?></a></li>
												<?php endforeach; ?>
											</ul>
										</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
					<!-- .col-md-3 -->
				</div>
				<!-- .row -->

				<!-- Copyright -->
				<div class="footer-bottom">
					<div class="row">
						<div class="col-md-12">
							<div class="footer-bottom-left">
								<p><?php echo $settings->copyright; ?><br/>Powered by <a href="https://bit.ly/Holduix">Holduix</a></p>
							</div>
							<div class="footer-bottom-right">
								<ul class="nav-footer">
									<li><a href="<?php echo base_url(); ?>faq">Faq</a></li>									
									<li><a href="<?php echo base_url(); ?>about-us">A propos du CSAC</a></li>									
									<li><a href="<?php echo base_url(); ?>services">Services du CSAC</a></li>									
									<li><a href="<?php echo base_url(); ?>terms-conditions">Termes et Conditions</a></li>									
								</ul>
							</div>
						</div>
					</div>
					<!-- .row -->
				</div>
			</div>
		</div>
	</footer>	
<?php if (!isset($_COOKIE["csac_cookies_warning"]) && $settings->cookies_warning): ?>
	<div class="cookies-warning">
		<div class="text"><?php echo $this->settings->cookies_warning_text; ?></div>
		<a href="javascript:void(0)" onclick="hide_cookies_warning();" class="icon-cl"> <i class="icon-close"></i></a>
	</div>
<?php endif; ?>
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
