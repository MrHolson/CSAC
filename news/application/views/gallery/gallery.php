<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="header-base white">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="title-base text-left">
                    <?php if ($page->title_active) : ?>
                            <h1 class=""><?php echo html_escape($page->title); ?></h1>
                        <?php endif; ?>
                        <p>When words become unclear, I shall focus with photographs. When images become inadequate, I shall be content with silence.</p>
                    </div>
                </div>
                <div class="col-md-3">
                <?php if ($page->breadcrumb_active == 1): ?>
                <div class="page-breadcrumb">
                    <ol class="breadcrumb  b white">
                        <li class="breadcrumb-item">
                            <a href="<?php echo lang_base_url(); ?>"><?php echo html_escape(trans("home")); ?></a>
                        </li>
                        <li class="breadcrumb-item active"><?php echo html_escape($page->title); ?></li>
                    </ol>
                </div>
            <?php else: ?>
                <div class="page-breadcrumb m-t-45">
                </div>
            <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<!-- Section: main -->
<div class="section-empty">
        <div class="container content">

            <div class="page-content">
                <div class="col-sm-12">
                    <div class="content page-about page-gallery">

                        <div class="row row-masonry">
                            <div id="masonry" class="gallery">
                                <!--Load Items-->
                                <div class="grid">
                                    <?php foreach ($gallery_albums as $item):
                                        $cover = get_gallery_cover_image($item->id); ?>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 gallery-item">
                                            <div class="item-inner gallery-image-cover">
                                                <a href="<?php echo lang_base_url(); ?>gallery/album/<?php echo $item->id; ?>">
                                                    <?php if (!empty($cover)): ?>
                                                        <img src="<?php echo base_url() . html_escape($cover->path_small); ?>" alt="<?php echo html_escape($item->name); ?>" class="img-responsive"/>
                                                    <?php else: ?>
                                                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="<?php echo html_escape($item->name); ?>" class="img-responsive img-gallery-empty"/>
                                                    <?php endif; ?>
                                                    <div class="caption">
                                                        <span class="album-name">
                                                            <?php echo html_escape(character_limiter($item->name, 100, '...')); ?>
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="<?php echo base_url(); ?>assets/vendor/masonry-filter/imagesloaded.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/masonry-filter/masonry-3.1.4.min.js"></script>
<script>
    $(document).ready(function () {
        $(function () {
            var a = $("#masonry");
            a.imagesLoaded(function () {
                a.masonry({gutterWidth: 0, isAnimated: true, itemSelector: ".gallery-item"})
            });
        })
    });
</script>