<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

	<div class="section-empty no-paddings">
        <div class="section-slider row-20 white">
            <div class="flexslider advanced-slider slider visible-dir-nav" data-options="animation:fade">
                <ul class="slides">
                    <li data-slider-anima="fade-left" data-time="1000">
                        <div class="section-slide">
                            <div class="bg-cover" style="background-image:url('../images/bg-7.jpg')">
                            </div>
                            <div class="container">
                                <div class="container-middle">
                                    <div class="container-inner text-left">
                                        <div class="row">
                                            <div class="col-md-8 anima">
                                                <h2 class="text-color">Architecture and business</h2>
                                                <h1 class="text-l text-normal">An architect is a person who plans, designs and reviews the construction of buildings and any other structure</h1>
                                                <hr class="space s" />
                                                <p class="width-500">
                                                    I enjoy art and museums but also churches, anything that gives me insight into the history and soul of the place I'm in.
                                                    I can also be a beach bum. I like to laze in the shade of a palm tree with a good book or float in a warm sea at sundown.
                                                    Check our awesome servive and learn more of this.
                                                </p>
                                            </div>
                                        </div>
                                        <hr class="space visible-sm" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-slider-anima="fade-left" data-time="1000">
                        <div class="section-slide">
                            <div class="bg-cover" style="background-image:url('../images/bg-7.jpg')">
                            </div>
                            <div class="container">
                                <div class="container-middle">
                                    <div class="container-inner text-left">
                                        <div class="row">
                                            <div class="col-md-8 anima">
                                                <h2 class="text-color">Architecture and business</h2>
                                                <h1 class="text-l text-normal">An architect is a person who plans, designs and reviews the construction of buildings and any other structure</h1>
                                                <hr class="space s" />
                                                <p class="width-500">
                                                    I enjoy art and museums but also churches, anything that gives me insight into the history and soul of the place I'm in.
                                                    I can also be a beach bum. I like to laze in the shade of a palm tree with a good book or float in a warm sea at sundown.
                                                    Check our awesome servive and learn more of this.
                                                </p>
                                            </div>
                                        </div>
                                        <hr class="space visible-sm" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-slider-anima="fade-left" data-time="1000">
                        <div class="section-slide">
                            <div class="bg-cover" style="background-image:url('../images/bg-7.jpg')">
                            </div>
                            <div class="container">
                                <div class="container-middle">
                                    <div class="container-inner text-left">
                                        <div class="row">
                                            <div class="col-md-8 anima">
                                                <h2 class="text-color">Architecture and business</h2>
                                                <h1 class="text-l text-normal">An architect is a person who plans, designs and reviews the construction of buildings and any other structure</h1>
                                                <hr class="space s" />
                                                <p class="width-500">
                                                    I enjoy art and museums but also churches, anything that gives me insight into the history and soul of the place I'm in.
                                                    I can also be a beach bum. I like to laze in the shade of a palm tree with a good book or float in a warm sea at sundown.
                                                    Check our awesome servive and learn more of this.
                                                </p>
                                            </div>
                                        </div>
                                        <hr class="space visible-sm" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
<?php if ($layout == "layout_1" || $layout == "layout_2" || $layout == "layout_3"):
	if (!empty($this->slider_posts)):?>
		<!-- Section: slider -->
		<section id="slider" style="margin-top: 0px;">
			<div class="container-fluid">
				<div class="row">
					<!--Show if enabled-->
					<?php if ($general_settings->slider_active == 1) {
						$this->load->view('partials/_slider', $this->slider_posts);
					} ?>
				</div><!-- /.row -->
			</div> <!-- /.container-fluid -->
		</section>
		<!-- /.Section: slider -->
	<?php endif;
endif; ?>

<!-- Section: main -->
<section id="main" class="margin-top-30">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8">
				<div class="content">

					<?php if ($layout == "layout_4" || $layout == "layout_5" || $layout == "layout_6"): ?>
						<div class="first-tmp-slider">
							<!--Show if enabled-->
							<?php if ($general_settings->slider_active == 1) {
								$this->load->view('partials/_slider_second', $this->slider_posts);
							} ?>
						</div>
					<?php endif; ?>

					<!-- posts -->
					<div class="col-xs-12 col-sm-12 posts <?php echo ($layout == "layout_3" || $layout == "layout_6") ? 'p-0 posts-boxed' : ''; ?>">
						<div class="row">
							<!-- printf posts -->
							<?php $count = 0; ?>

							<?php foreach ($posts as $item): ?>
								<?php if ($count != 0 && $count % 2 == 0): ?>
									<div class="col-sm-12 col-xs-12"></div>
								<?php endif; ?>

								<!-- post item -->
								<?php $this->load->view('post/_post_item', ['item' => $item]); ?>
								<!-- /.post item -->

								<?php if ($count == 1): ?>

									<?php $this->load->view("partials/_ad_spaces", ["ad_space" => "index_top"]); ?>

									<!-- increment count -->
								<?php endif; ?>

								<?php $count++; ?>
							<?php endforeach; ?>
						</div>
					</div><!-- /.posts -->

					<div class="col-xs-12 col-sm-12 col-xs-12">
						<div class="row">
							<?php $this->load->view("partials/_ad_spaces", ["ad_space" => "index_bottom"]); ?>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-xs-12">
						<div class="row">
							<?php echo $this->pagination->create_links(); ?>
						</div>
					</div>

				</div>

			</div>

			<div class="col-xs-12 col-sm-12 col-md-4">
				<!--Sidebar-->
				<?php $this->load->view('partials/_sidebar'); ?>
			</div><!--/col-->

		</div>
	</div>
</section>
<!-- /.Section: main -->
<div class="section-bg-color">
        <div class="container content">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="advs-box niche-box-team" data-anima="scale-up" data-trigger="hover">
                                <a class="img-box">
                                    <img class="anima" src="<?php echo base_url(); ?>images/users/user-16.jpg" alt="" />
                                </a>
                                <div class="content-box">
                                    <h2>Jessica Larry</h2>
                                    <h4>Founder</h4>
                                    <hr class="e" />
                                    <div class="btn-group social-group">
                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                    </div>
                                    <p>Nibh atque suspendisse netus veritatis eveniet pariaturo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="advs-box niche-box-team" data-anima="scale-up" data-trigger="hover">
                                <a class="img-box">
                                    <img class="anima" src="<?php echo base_url(); ?>images/users/user-17.jpg" alt="" />
                                </a>
                                <div class="content-box">
                                    <h2>Casey Neistat</h2>
                                    <h4>Project manager</h4>
                                    <hr class="e" />
                                    <div class="btn-group social-group">
                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                        <a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <p>Nibh atque suspendisse netus veritatis eveniet pariaturo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="advs-box niche-box-team" data-anima="scale-up" data-trigger="hover">
                                <a class="img-box">
                                    <img class="anima" src="<?php echo base_url(); ?>images/users/user-15.jpg" alt="" />
                                </a>
                                <div class="content-box">
                                    <h2>Sarah Rodrigo</h2>
                                    <h4>Administration</h4>
                                    <hr class="e" />
                                    <div class="btn-group social-group">
                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                        <a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <p>Nibh atque suspendisse netus veritatis eveniet pariaturo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="title-base text-left">
                        <hr />
                        <h2>Funny people</h2>
                        <p>People behind the company</p>
                    </div>
                    <p>
                        Tincidunt integer eu augue augue nunc elit dolor, luctus placerat scelerisque euismod, iaculis eu lacus nunc mi elito
                        vehicula ut laoreet ac, aliquam sit amet justo nunc tempor, metus velo atque suspendisse netus verita.
                    </p>
                    <hr class="space s" />
                    <div class="row">
                        <div class="col-md-6">
                            <div class="icon-box icon-box-top-bottom counter-box-icon text-left">
                                <div class="icon-box-cell">
                                    <b><label class="counter text-l" data-speed="2000" data-to="60">60</label></b>
                                    <p class="text-s">Team memebers</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box icon-box-top-bottom counter-box-icon text-left">
                                <div class="icon-box-cell">
                                    <b><label class="counter text-l" data-speed="2000" data-to="2000">2000</label></b>
                                    <p class="text-s">Monthly clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="space m" />
                    <a href="#" class="btn btn-lg">View all members</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty">
        <div class="container content">
            <div class="flexslider carousel outer-navs png-over text-center" data-options="numItems:6,minWidth:100,itemMargin:30,controlNav:false,directionNav:true">
                <ul class="slides">
                    <li>
                        <a class="img-box" href="#">
                            <img src="<?php echo base_url(); ?>images/logos/logo_1.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="img-box" href="#">
                            <img src="<?php echo base_url(); ?>images/logos/logo_2.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="img-box" href="#">
                            <img src="<?php echo base_url(); ?>images/logos/logo_3.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="img-box" href="#">
                            <img src="<?php echo base_url(); ?>images/logos/logo_4.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="img-box" href="#">
                            <img src="<?php echo base_url(); ?>images/logos/logo_5.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="img-box" href="#">
                            <img src="<?php echo base_url(); ?>images/logos/logo_6.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="img-box" href="#">
                            <img src="<?php echo base_url(); ?>images/logos/logo_7.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="img-box" href="#">
                            <img src="<?php echo base_url(); ?>images/logos/logo_8.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="img-box" href="#">
                            <img src="<?php echo base_url(); ?>images/logos/logo_1.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="img-box" href="#">
                            <img src="<?php echo base_url(); ?>images/logos/logo_2.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
  