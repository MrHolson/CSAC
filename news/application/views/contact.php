<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="section-map box-middle-container row-20">
        <div class="google-map" data-coords="40.741895,-73.989308" data-zoom="12" data-skin="gray" data-marker-pos-top="30" data-marker-pos="col-md-6-right" data-marker="http://templates.framework-y.com/yellowbusiness/images/marker-map.png"></div>
        <div class="overlaybox overlaybox-side overlaybox">
            <div class="container content">
                <div class="row">
                    <div class="col-md-6 overlaybox-inner box-middle" data-anima="fade-left">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="text-m text-normal">CSAC RDC</h4>
                                <p class="text-left">
                                    Ligula aenean, voluptatem a lorem laoreet quod dolores acnatoque modiignani merto inventore.
                                </p>
                                <hr class="space s" />
                                <div class="btn-group btn-group-icons" role="group">
                                    <a class="btn btn-default">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a class="btn btn-default">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-default">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                    <a class="btn btn-default">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <hr class="space visible-xs" />
                                <h4 class="text-m text-normal">Contacts</h4>
                                <p>
                                    05, Martin Street A598, Polo Alto,<br /> San Francisco
                                    United States of America
                                </p>
                                <ul class="fa-ul">
                                    <li><i class="fa-li fa-envelope fa"></i> hello@company.com</li>
                                    <li><i class="fa-li fa-phone-square fa"></i> (123) 456-78910</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty">
        <div class="container content">
            <div class="row">
                <div class="col-md-6 col-sm-12 text-left">
                    <div class="title-base text-left">
                        <hr />
                        <h2>Keep in touch</h2>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                        Utenim ad minim veniam quis nostrudo.
                    </p>
                    <hr class="space s" />
                    <?php $this->load->view('partials/_messages'); ?>
                    <?php echo form_open('home_controller/contact_post', ['id' => 'form_validate', 'class' => 'validate_terms form-box form-ajax']); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <p>Name</p>
                                <input id="name" name="name" placeholder="" type="text" class="form-control form-value" required>
                            </div>
                            <div class="col-md-6">
                                <p>Email</p>
                                <input id="email" name="email" placeholder="" type="email" class="form-control form-value" required>
                            </div>
                        </div>
                        <hr class="space xs" />
                        <div class="row">
                            <div class="col-md-12">
                                <p>Messagge</p>
                                <textarea id="messagge" name="messagge" placeholder="" class="form-control form-value" required></textarea>
                                <hr class="space s" />
                                <button class="btn-sm btn" type="submit"><i class="fa fa-envelope-open-o"></i>Send messagge</button>
                            </div>
                        </div>
                        <div class="success-box">
                            <div class="alert alert-success">Congratulations. Your message has been sent successfully</div>
                        </div>
                        <div class="error-box">
                            <div class="alert alert-warning">Error, please retry. Your message has not been sent</div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="advs-box advs-box-top-icon boxed-inverse no-icon">
                                <h3>Timetable</h3>
                                <p>
                                    From monday to friday from 9am to 12am and from 3pm to 8pm. Saturday from 8am to 8pm. Sunday closed.
                                </p>
                            </div>
                            <hr class="space s" />
                            <ul class="fa-ul ul-squares">
                                <li>Building or infrastructure</li>
                                <li>Mass civil or heavy engineering</li>
                                <li>Construction delays and bidding</li>
                                <li>Financial advisors</li>
                                <li>Standard Industrial Classification</li>
                            </ul>    
                        </div>
                        <div class="col-md-6 ">
                            <div class="advs-box advs-box-top-icon boxed-inverse no-icon">
                                <h3>Special offerts</h3>
                                <p>
                                    Tincidunt integer eu augue augue nunc elit dolor, luctus placerat scelerisque euismod, iaculis eu lacussano vento.
                                </p>
                            </div>
                            <hr class="space s" />
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elitsed d luctus placerat scelerisque o eiusmod tempor incididunt utlabore et dolore magna aliqua.
                                Utenim ad minim veniam quis nostrudoat sceleris.
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
   
<!-- Section: main -->
<section id="main">
    <div class="container">
        <div class="row">

            <!--Check breadcrumb active-->
            <?php if ($page->breadcrumb_active == 1): ?>
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?php echo lang_base_url(); ?>"><?php echo trans("home"); ?></a>
                        </li>

                        <li class="breadcrumb-item active"><?php echo html_escape($page->title); ?></li>
                    </ol>
                </div>
            <?php else: ?>
                <div class="col-sm-12 page-breadcrumb"></div>
            <?php endif; ?>

            <div id="content" class="col-sm-12">

                <div class="row">
                    <!--Check page title active-->
                    <?php if ($page->title_active == 1): ?>
                        <div class="col-sm-12">
                            <h1 class="page-title"><?php echo html_escape($page->title); ?></h1>
                        </div>
                    <?php endif; ?>

                    <div class="col-sm-12">
                        <div class="page-contact">

                            <div class="row row-contact-text">
                                <div class="col-sm-12 font-text">
                                    <?php echo $settings->contact_text; ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 font-text">
                                    <h2 class="contact-leave-message"><?php echo trans("leave_message"); ?></h2>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-xs-12 contact-left">
                                    <!-- include message block -->
                                    <?php $this->load->view('partials/_messages'); ?>

                                    <!-- form start -->
                                    <?php echo form_open('home_controller/contact_post', ['id' => 'form_validate', 'class' => 'validate_terms']); ?>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-input" name="name"
                                               placeholder="<?php echo trans("name"); ?>" maxlength="199" minlength="1"
                                               pattern=".*\S+.*" value="<?php echo old('name'); ?>" required <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-input" name="email" maxlength="199"
                                               placeholder="<?php echo trans("email"); ?>"
                                               value="<?php echo old('email'); ?>" required <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
                                    </div>
                                    <div class="form-group">
                                    <textarea class="form-control form-input form-textarea" name="message"
                                              placeholder="<?php echo trans("message"); ?>" maxlength="4970"
                                              minlength="5"
                                              required <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>><?php echo old('message'); ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="custom-checkbox">
                                            <input type="checkbox" class="checkbox_terms_conditions" required>
                                            <span class="checkbox-icon"><i class="icon-check"></i></span>
                                            <?php echo trans("terms_conditions_exp"); ?>&nbsp;<a href="<?php echo lang_base_url(); ?>terms-conditions" class="link-terms" target="_blank"><strong><?php echo trans("terms_conditions"); ?></strong></a>
                                        </label>
                                    </div>
                                    <?php generate_recaptcha(); ?>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-md btn-custom">
                                            <?php echo html_escape(trans("submit")); ?>
                                        </button>
                                    </div>

                                    </form><!-- form end -->


                                </div>

                                <div class="col-sm-6 col-xs-12 contact-right">

                                    <?php if ($settings->contact_phone): ?>
                                        <div class="contact-item">
                                            <div class="col-sm-2 col-xs-2 contact-icon">
                                                <i class="icon-phone" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-sm-10 col-xs-10 contact-info">
                                                <?php echo html_escape($settings->contact_phone); ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($settings->contact_email): ?>
                                        <div class="contact-item">
                                            <div class="col-sm-2 col-xs-2 contact-icon">
                                                <i class="icon-envelope" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-sm-10 col-xs-10 contact-info">
                                                <?php echo html_escape($settings->contact_email); ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($settings->contact_address): ?>
                                        <div class="contact-item">
                                            <div class="col-sm-2 col-xs-2 contact-icon">
                                                <i class="icon-map-marker" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-sm-10 col-xs-10 contact-info">
                                                <?php echo html_escape($settings->contact_address); ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
<!-- /.Section: main -->

<?php if (!empty($settings->contact_address)): ?>
    <div class="container-fluid">
        <div class="row">
            <div class="contact-map-container">
                <iframe id="contact_iframe" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=<?php echo $settings->contact_address; ?>&ie=UTF8&t=&z=15&iwloc=B&output=embed&disableDefaultUI=true" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
    </div>
<?php endif; ?>
<script>
    var iframe = document.getElementById("contact_iframe");
    iframe.src = iframe.src;
</script>
<style>
    #footer {
        margin-top: 0;
    }
</style>
