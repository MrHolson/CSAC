<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

    <div class="header-base white">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="title-base text-left">
                        <h1><?php echo html_escape($title); ?></h1>
                        <p>L<?php echo html_escape($description); ?></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <ol class="breadcrumb b white">
                    <li class="breadcrumb-item">
                            <a href="<?php echo lang_base_url(); ?>"><?php echo html_escape(trans("home")); ?></a>
                        </li>
                        <li class="breadcrumb-item active">Services</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>