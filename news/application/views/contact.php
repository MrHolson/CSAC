<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<style>
    .btn-group .btn{
        background:#3e7cc4
    }
</style>
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
                    <?php echo form_open('home_controller/contact_post', ['id' => 'form_validate', 'class' => 'validate_terms form-box ']); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <p>Nom</p>
                                <input id="name" name="name" placeholder="" type="text" class="form-control form-value" placeholder="<?php echo trans("name"); ?>" maxlength="199" minlength="1"
                                               pattern=".*\S+.*" value="<?php echo old('name'); ?>" required <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
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
                                <textarea id="messagge" class="form-control form-input form-textarea" name="message"
                                              placeholder="<?php echo trans("message"); ?>" maxlength="4970"
                                              minlength="5"
                                              required <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>><?php echo old('message'); ?></textarea>
                                <hr class="space s" />
                                <?php generate_recaptcha(); ?>
                                <hr class="space s" />
                                <div class="form-group">
                                        <label class="custom-checkbox">
                                            <input type="checkbox" class="checkbox_terms_conditions" required>
                                            <span class="checkbox-icon"><i class="icon-check"></i></span>
                                            <?php echo trans("terms_conditions_exp"); ?>&nbsp;<a href="<?php echo lang_base_url(); ?>terms-conditions" class="link-terms" target="_blank"><strong><?php echo trans("terms_conditions"); ?></strong></a>
                                        </label>
                                    </div>                                
                                <button class="btn-sm btn" type="submit"><i class="fa fa-envelope-open-o"></i><?php echo html_escape(trans("submit")); ?></button>
                            </div>
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
   

<script>
    var iframe = document.getElementById("contact_iframe");
    iframe.src = iframe.src;
</script>
<style>
    #footer {
        margin-top: 0;
    }
</style>
