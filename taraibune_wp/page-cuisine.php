<?php
/* template name:Cuisine */
get_header(); ?>
<body>
    <div class="l-wrapper" id="wrapper">
        <?php get_template_part('inc', 'header'); ?>

        <main id="main" class="l-main">
            <section class="l-lower-section" id="cuisine">
                <div class="p-lower-kv p-lower-kv--sp">
                    <picture>
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/cuisine/kv_cuisine.webp" alt="料理" width="375" height="375" class="p-lower-kv__img">
                    </picture>
                </div>
                <div class="c-width">
                    <div class="p-lower-kv p-lower-kv--pc">
                        <picture>
                            <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/cuisine/kv_cuisine.webp" class="p-lower-kv__img" alt="料理" width="1400" height="500">
                        </picture>
                    </div>
                    <div class="p-lower-desc">
                        <div class="p-section-title">
                            <h1 class="c-section-title__text">Cuisine</h1>
                        </div>
                        <div class="p-lower-desc__cont">
                            <p class="p-lower-desc__text">佐渡は対馬暖流と寒流が交差する豊かな漁場であるとともに、「日本列島の縮図」とも言われるほど多様な植物が育つ土地です。水揚げされたばかりの新鮮な魚、豊かな土壌で育まれたお米や野菜、果物など、四季折々の旬の食材を使った佐渡の海鮮会席でおもてなしいたします。当旅館でしか味わえない味覚をゆっくりとお楽しみください。朝食はバイキング形式でご用意しております。佐渡産の食材を使った数々のメニューをご用意いたしますので、お好きな料理をお召し上がりください。</p>
                        </div>
                    </div>
                </div>





                <div class="p-lower-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide p-lower-slider__item">
                            <picture class="p-lower-slider__img">
                                <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/cuisine/image_cuisine_01.jpg 1x, <?php echo get_template_directory_uri(); ?>/asset/media/images/cuisine/image_cuisine_01@2x.jpg 2x">
                                <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/cuisine/image_cuisine_01.jpg">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/cuisine/image_cuisine_01.jpg" class="p-lower-slider__img" alt="料理1" width="840" height="600">
                            </picture>
                        </div>
                        <div class="swiper-slide p-lower-slider__item">
                            <picture class="p-lower-slider__img-wrap">
                                <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/cuisine/image_cuisine_02.jpg 1x, <?php echo get_template_directory_uri(); ?>/asset/media/images/cuisine/image_cuisine_02@2x.jpg 2x">
                                <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/cuisine/image_cuisine_02.jpg">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/cuisine/image_cuisine_02.jpg" class="p-lower-slider__img" alt="料理2" width="840" height="600">
                            </picture>
                        </div>
                        <div class="swiper-slide p-lower-slider__item">
                            <picture class="p-lower-slider__img-wrap">
                                <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/cuisine/image_cuisine_03.jpg 1x, <?php echo get_template_directory_uri(); ?>/asset/media/images/cuisine/image_cuisine_03@2x.jpg 2x">
                                <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/cuisine/image_cuisine_03.jpg">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/cuisine/image_cuisine_03.jpg" class="p-lower-slider__img" alt="料理3" width="840" height="600">
                            </picture>
                        </div>
                        <div class="swiper-slide p-lower-slider__item">
                            <picture class="p-lower-slider__img-wrap">
                                <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/cuisine/image_cuisine_04.jpg 1x, <?php echo get_template_directory_uri(); ?>/asset/media/images/cuisine/image_cuisine_04@2x.jpg 2x">
                                <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/cuisine/image_cuisine_04.jpg">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/cuisine/image_cuisine_04.jpg" class="p-lower-slider__img" alt="料理4" width="840" height="600">
                            </picture>
                        </div>
                    </div>
                </div>
            </section>
        </main><!-- / #main_area -->
        <?php get_template_part('inc', 'footer'); ?>
        <?php get_template_part('inc', 'sp_menu'); ?>
    </div><!--l-wrapper-->
    <?php get_template_part('inc', 'js'); ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/asset/js/swiper-bundle.min.js"></script>
    <script>
        $(function() {
            const swiper_slide = new Swiper(".p-lower-slider", {
                loop: true,
                loopAdditionalSlides: 1,
                centeredSlides: true,
                spaceBetween: 10,
                slidesPerView: 1.2,
                speed: 8000,
                allowTouchMove: false,
                autoplay: {
                    delay: 0,
                },
                breakpoints: {
                    480: {
                        slidesPerView: 1.99,
                        speed: 25000,
                    }
                },
            })
        });
    </script>
    <?php get_footer(); ?>
</body>

</html>