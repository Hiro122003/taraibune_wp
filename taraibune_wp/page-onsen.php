<?php
/* template name:Onsen */
get_header();
?>

<body>
    <div class="l-wrapper" id="wrapper">
        <?php get_template_part('inc', 'header'); ?>

        <main id="main" class="l-main">
            <section class="l-lower-section" id="onsen">
                <div class="p-lower-kv p-lower-kv--sp">
                    <picture>
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/onsen/kv_onsen.webp" alt="温泉" width="375" height="375" class="p-lower-kv__img">
                    </picture>
                </div>
                <div class="c-width">
                    <div class="p-lower-kv p-lower-kv--pc">
                        <picture>
                            <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/onsen/kv_onsen.webp" class="p-lower-kv__img" alt="温泉" width="1400" height="500">
                        </picture>
                    </div>
                    <div class="p-lower-desc">
                        <div class="c-section-title">
                            <h1 class="c-section-title__text">Onsen</h1>
                        </div>
                        <div class="p-lower-desc__cont">
                            <p class="p-lower-desc__text">お風呂は日本海に面しています。波の音が聞こえるほど海が近く、晴れた日には藍色の日本海の景色と、夕刻には茜色に染まる夕景を眺めながらお寛ぎいただけます。また、当旅館のお風呂は佐渡海洋深層水を使用しています。佐渡海洋深層水とは、水深200mより深いところを流れる海水のことで、太陽光線が届かない低温・高圧の深海を流れるため、一般の温泉にはみられないミネラル成分が豊富に含まれております。湯船で体を伸ばし、身も心もほぐされる、癒しの時間をお過ごしください。</p>
                        </div>
                    </div>
                </div>
                <div class="p-lower-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide p-lower-slider__item">
                            <picture class="p-lower-slider__img-wrap">
                                <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/onsen/image_onsen_01.webp 1x, <?php echo get_template_directory_uri(); ?>/asset/media/images/onsen/image_onsen_01@2x.webp 2x">
                                <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/onsen/image_onsen_01.webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/onsen/image_onsen_01.webp" class="p-lower-slider__img" alt="温泉イメージ1" width="840" height="600">
                            </picture>
                        </div>
                        <div class="swiper-slide p-lower-slider__item">
                            <picture class="p-lower-slider__img-wrap">
                                <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/onsen/image_onsen_02.webp 1x, <?php echo get_template_directory_uri(); ?>/asset/media/images/onsen/image_onsen_02@2x.webp 2x">
                                <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/onsen/image_onsen_02.webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/onsen/image_onsen_02.webp" class="p-lower-slider__img" alt="温泉イメージ2" width="840" height="600">
                            </picture>
                        </div>
                        <div class="swiper-slide p-lower-slider__item">
                            <picture class="p-lower-slider__img-wrap">
                                <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/onsen/image_onsen_03.webp 1x, <?php echo get_template_directory_uri(); ?>/asset/media/images/onsen/image_onsen_03@2x.webp 2x">
                                <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/onsen/image_onsen_03.webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/onsen/image_onsen_03.webp" class="p-lower-slider__img" alt="温泉イメージ3" width="840" height="600">
                            </picture>
                        </div>
                        <div class="swiper-slide p-lower-slider__item">
                            <picture class="p-lower-slider__img-wrap">
                                <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/onsen/image_onsen_04.webp 1x, <?php echo get_template_directory_uri(); ?>/asset/media/images/onsen/image_onsen_04@2x.webp 2x">
                                <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/onsen/image_onsen_04.webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/onsen/image_onsen_04.webp" class="p-lower-slider__img" alt="温泉イメージ4" width="840" height="600">
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