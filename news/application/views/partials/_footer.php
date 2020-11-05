<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Start Footer Section -->
<footer id="footer">
	<div class="container">
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
						<p><?php echo $settings->copyright; ?></p>
					</div>
					<div class="footer-bottom-right">
						<ul class="nav-footer">
							<?php foreach ($main_menu as $menu_item): ?>
								<?php if ($menu_item->item_location == "footer"): ?>
									<li>
										<a href="<?php echo generate_menu_item_url($menu_item); ?>"><?php echo html_escape($menu_item->item_name); ?> </a>
									</li>
								<?php endif; ?>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
			<!-- .row -->
		</div>
	</div>
</footer>
<!-- End Footer Section -->
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


  <!-- JS Global Compulsory -->

  <script src="<?php echo base_url(); ?>themes/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="<?php echo base_url(); ?>themes/vendor/popper.js/dist/umd/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>themes/vendor/bootstrap/bootstrap.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="<?php echo base_url(); ?>themes/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="<?php echo base_url(); ?>themes/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="<?php echo base_url(); ?>themes/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="<?php echo base_url(); ?>themes/vendor/custombox/dist/custombox.min.js"></script>
  <script src="<?php echo base_url(); ?>themes/vendor/custombox/dist/custombox.legacy.min.js"></script>
  <script src="<?php echo base_url(); ?>themes/vendor/slick-carousel/slick/slick.js"></script>

  <!-- JS Space -->
  <script src="<?php echo base_url(); ?>themes/js/hs.core.js"></script>
  <script src="<?php echo base_url(); ?>themes/js/components/hs.header.js"></script>
  <script src="<?php echo base_url(); ?>themes/js/components/hs.unfold.js"></script>
  <script src="<?php echo base_url(); ?>themes/js/components/hs.validation.js"></script>
  <script src="<?php echo base_url(); ?>themes/js/helpers/hs.focus-state.js"></script>
  <script src="<?php echo base_url(); ?>themes/js/components/hs.malihu-scrollbar.js"></script>
  <script src="<?php echo base_url(); ?>themes/js/components/hs.modal-window.js"></script>
  <script src="<?php echo base_url(); ?>themes/js/components/hs.show-animation.js"></script>
  <script src="<?php echo base_url(); ?>themes/js/components/hs.slick-carousel.js"></script>
  <script src="<?php echo base_url(); ?>themes/js/components/hs.go-to.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(window).on('load', function () {
      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 991,
        hideTimeOut: 0
      });
    });

    $(document).on('ready', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#header'));

      // initialization of unfold component
      $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
        afterOpen: function () {
          if (!$('body').hasClass('IE11')) {
            $(this).find('input[type="search"]').focus();
          }
        }
      });

      // initialization of form validation
      $.HSCore.components.HSValidation.init('.js-validate', {
        rules: {
          confirmPassword: {
            equalTo: '#password'
          }
        }
      });

      // initialization of forms
      $.HSCore.helpers.HSFocusState.init();

      // initialization of malihu scrollbar
      $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

      // initialization of autonomous popups
      $.HSCore.components.HSModalWindow.init('[data-modal-target]', '.js-signup-modal', {
        autonomous: true
      });

      // initialization of show animations
      $.HSCore.components.HSShowAnimation.init('.js-animation-link');

      // initialization of slick carousel
      $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>




<?php if (isset($page_type)):
	echo $general_settings->facebook_comment;
endif; ?>
<script>$('<input>').attr({type: 'hidden', name: 'lang_folder', value: '<?php echo $this->selected_lang->folder_name; ?>'}).appendTo('form[method=post]');</script>
<?php echo $general_settings->google_adsense_code; ?>
<?php echo $general_settings->google_analytics; ?>
</body>
</html>
