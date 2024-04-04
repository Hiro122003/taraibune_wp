<?php
// template name:お部屋ページ 
get_header(); ?>
<body>
    <div class="l-wrapper" id="wrapper">
        <?php get_template_part('inc', 'header'); ?>

        <main id="main" class="l-main">
            <section class="l-lower-section" id="room">
                <div class="p-lower-kv p-lower-kv--sp">
                    <picture>
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/room/kv_room.webp" alt="宿泊部屋" width="375" height="375" class="p-lower-kv__img">
                    </picture>
                </div>

                <div class="c-width">
                    <div class="p-lower-kv p-lower-kv--pc">
                        <picture>
                            <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/room/kv_room.webp" alt="宿泊部屋" width="1400" height="500" class="-img">
                        </picture>
                    </div>

                    <div class="p-lower-desc">
                        <div class="c-section-title">
                            <h1 class="c-section-title__text">Room</h1>
                        </div>
                        <div class="p-lower-desc__cont">
                            <p class="p-lower-desc__text">築100年の古民家を、その良さは残しつつ、快適に過ごせるように最新の機能性を加えて改修を行いました。南を向いた大きな窓からは気持ちのいい光が入り、縁側は室内と庭を自然とつなぎます。囲炉裏がある部屋では、上を見上げると茅葺の屋根裏が見え、古民家ならでは雰囲気に心が落ち着きます。佐渡は、四季の変化に富み、豊かな自然環境に恵まれた島。 縁側から刻一刻と変わる空の色を楽しんだり、窓の外から微かに聞こえる季節の音を感じたり、他の旅では得られないスローな空気をお楽しみください。</p>
                        </div>
                    </div>
                </div>
                <div class="p-lower-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide p-lower-slider__item">
                            <picture class="p-lower-slider__img-wrap">
                                <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/room/image_room_01.webp 1x, <?php echo get_template_directory_uri(); ?>/asset/media/images/room/image_room_01@2x.webp 2x">
                                <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/room/image_room_01.webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/room/image_room_01.webp" class="p-lower-slider__img" alt="部屋1" width="840" height="600">
                            </picture>
                        </div>
                        <div class="swiper-slide p-lower-slider__item">
                            <picture class="p-lower-slider__img-wrap">
                                <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/room/image_room_02.webp 1x, <?php echo get_template_directory_uri(); ?>/asset/media/images/room/image_room_02@2x.webp 2x">
                                <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/room/image_room_02.webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/room/image_room_02.webp" class="p-lower-slider__img" alt="部屋2" width="840" height="600">
                            </picture>
                        </div>
                        <div class="swiper-slide p-lower-slider__item">
                            <picture class="p-lower-slider__img-wrap">
                                <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/room/image_room_03.webp 1x, <?php echo get_template_directory_uri(); ?>/asset/media/images/room/image_room_03@2x.webp 2x">
                                <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/room/image_room_03.webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/room/image_room_03.webp" class="p-lower-slider__img" alt="部屋3" width="840" height="600">
                            </picture>
                        </div>
                        <div class="swiper-slide p-lower-slider__item">
                            <picture class="p-lower-slider__img-wrap">
                                <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/room/image_room_04.webp 1x, <?php echo get_template_directory_uri(); ?>/asset/media/images/room/image_room_04@2x.webp 2x">
                                <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/room/image_room_04.webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/room/image_room_04.webp" class="p-lower-slider__img" alt="部屋4" width="840" height="600">
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