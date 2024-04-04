<header class="l-hd" id="header">
    <div class="p-hd">
        <div class="p-hd__logo">
            <?php
            // トップと下層で出し分け
            if (is_home() || is_front_page()) { ?>
                <h1>
                    <picture class="p-hd__logo-img p-hd__logo-img--init">
                        <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/common/hd_logo_white.webp 1x, <?php echo get_template_directory_uri(); ?>/asset/media/images/common/hd_logo_white@2x.webp 2x">
                        <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/common/hd_logo_white.webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/common/hd_logo_white.webp" alt="佐渡の古民家旅館たらい舟" width="150" height="50">
                    </picture>

                    <picture class="p-hd__logo-img p-hd__logo-img--scroll">
                        <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/common/hd_logo_black.webp 1x, <?php echo get_template_directory_uri(); ?>/asset/media/images/common/hd_logo_black@2x.webp 2x">
                        <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/common/hd_logo_black.webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/common/hd_logo_black.webp" alt="佐渡の古民家旅館たらい舟" width="150" height="50">
                    </picture>
                </h1>
            <?php } else { ?>
                <a href="/">
                    <picture class="p-hd__logo-img">
                        <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/common/hd_logo_black.webp 1x, <?php echo get_template_directory_uri(); ?>/asset/media/images/common/hd_logo_black@2x.webp 2x">
                        <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/common/hd_logo_black.webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/common/hd_logo_black.webp" alt="佐渡の古民家旅館たらい舟" width="150" height="50">
                    </picture>
                </a>
            <?php } ?>
        </div>
    </div><!-- l-hd__inr -->
</header>