<?php
/* template name:TOPページ */
get_header(); ?>

<body id="home">
    <div class="l-wrapper" id="wrapper">
        <?php get_template_part('inc', 'header'); ?>
        <main id="main" class="l-main">
            <div class="p-first-view" id="first_view">
                <div class="p-first-view__fv-slide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide p-first-view__item">
                            <picture>
                                <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/home/kv_image_01.webp 1x, <?php echo get_template_directory_uri(); ?>/asset/media/images/home/kv_image_01@2x.webp 2x">

                                <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/home/kv_image_01.webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/home/kv_image_01.webp" class="p-first-view__img" alt="" width="1600" height="1000">
                            </picture>
                        </div>
                        <div class="swiper-slide p-first-view__item">
                            <picture>
                                <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/home/kv_image_02.webp 1x, <?php echo get_template_directory_uri(); ?>/asset/media/images/home/kv_image_02@2x.webp 2x">

                                <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/home/kv_image_02.webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/home/kv_image_02.webp" class="p-first-view__img" alt="" width="1600" height="1000">
                            </picture>
                        </div>
                        <div class="swiper-slide p-first-view__item">
                            <picture>
                                <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/home/kv_image_03.webp 1x, <?php echo get_template_directory_uri(); ?>/asset/media/images/home/kv_image_03@2x.webp 2x">

                                <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/home/kv_image_03.webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/home/kv_image_03.webp" class="p-first-view__img" alt="" width="1600" height="1000">
                            </picture>
                        </div>
                        <div class="swiper-slide p-first-view__item">
                            <picture>
                                <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/home/kv_image_04.webp 1x, <?php echo get_template_directory_uri(); ?>/asset/media/images/home/kv_image_04@2x.webp 2x">

                                <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/home/kv_image_04.webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/home/kv_image_04.webp" class="p-first-view__img" alt="" width="1600" height="1000">
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="p-first-view__fv-message">
                    <p class="p-first-view__fv-vertical">尖閣湾の近くに佇むたらい舟</p>
                    <p class="p-first-view__fv-vertical">佐渡の自然や歴史にふれた後は</p>
                    <p class="p-first-view__fv-vertical">日本海の幸を堪能して</p>
                    <p class="p-first-view__fv-vertical">ゆったりとした非日常の体験を</p>
                </div>
                <div class="p-first-view__fv-logo">
                    <picture>
                        <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/home/kv_logo.webp 1x, <?php echo get_template_directory_uri(); ?>/asset/media/images/home/kv_logo@2x.webp 2x">
                        <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/home/kv_logo.webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/home/kv_logo.webp" class="p-first-view__logo-img" alt="佐渡の古民家旅館たらい舟" width="448" height="170">
                    </picture>
                </div>

                <div class="p-first-view__pagination-wrap">
                    <div class="p-first-view__pagination"></div>
                </div>
            </div><!-- first_view -->

            <div class="p-reserve-btn">
                <a href="" class="p-reserve-btn__btn">ご予約</a>
            </div>

            <section class="l-home-section l-home-section--description" id="description">
                <div class="p-desc-flex">
                    <div class="p-desc-flex__box p-desc-flex__box--map">
                        <div class="p-desc-flex__img p-desc-flex__img--pc">
                            <picture>
                                <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/home/home_jpn_map.webp 1x, <?php echo get_template_directory_uri(); ?>/asset/media/images/home/home_jpn_map@2x.webp 2x">
                                <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/home/home_jpn_map.webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/home/home_jpn_map.webp" width="756" height="760" alt="新潟県佐渡市" class="-img">
                            </picture>
                        </div>
                        <div class="p-desc-flex__img p-desc-flex__img--sp">
                            <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/home/home_jpn_map_sp.webp" width="315" height="316" alt="新潟県佐渡市" class="-img">
                        </div>
                    </div>
                    <div class="p-desc-flex__box p-desc-flex__box--text">
                        <div class="p-desc-flex__detail">
                            <h2 class="p-desc-flex__detail-head"><span class="-span">築100年の古民家を</span><span class="-span">改修した<br class="u-sp-none"></span><span class="-span"> 佐渡の暮らしに</span><span class="-span">溶け込む旅館です</span></h2>

                            <p class="p-desc-flex__detail-text">日本海に浮かぶ離島・佐渡。佐渡屈指の景勝地 尖閣湾を一望する位置に「佐渡の古民家旅館 たらい船」はあります。築100年の古民家を、趣を残しつつ、快適に過ごせるように少しだけ新しさをとりいれました。客室からは、四季折々の佐渡の自然を満喫いただけます。当旅館で、くつろぎのひとときを心ゆくまでお楽しみください。</p>
                        </div>
                    </div>
                </div>
            </section><!-- description -->

            <?php
            $the_query = new WP_Query();
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 4,
                'post_status' => 'publish',
                'order' => 'DESC',
            );
            $the_query->query($args);
            if ($the_query->have_posts()) { ?>
                <section class="l-home-section l-home-section--news u-effect" id="news">
                    <div class="c-width c-width--narrow">
                        <div class="c-section-title c-section-title--link">
                            <h3 class="c-section-title__text"><a href="/news/">News</a></h3>
                        </div>
                        <div class="c-news-list">
                            <?php while ($the_query->have_posts()) {
                                $the_query->the_post(); ?>
                                <a href="<?php echo get_permalink(); ?>" class="c-news-item-link">
                                    <dl class="c-news-item">
                                        <dt class="c-news-item__date">
                                            <?php echo get_the_time('Y.m.d'); ?>
                                        </dt>
                                        <dd class="c-news-item__title">
                                            <?php echo get_the_title(); ?>
                                        </dd>
                                    </dl>
                                </a>
                            <?php };
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </section><!-- news -->
            <?php }; ?>

            <section class="l-home-section l-home-section--room" id="room">
                <div class="c-width">
                    <div class="p-lower-link-bnr">
                        <a href="/room/" class="p-lower-link-bnr__link">
                            <picture>
                                <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/home/image_room.webp 1x, <?php echo get_template_directory_uri(); ?>/asset/media/images/home/image_room@2x.webp 2x">
                                <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/home/image_room.webp">
                                <source media="(max-width:480px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/home/image_room_sp.webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/home/image_room.webp" class="p-lower-link-bnr__img" width="1400" height="500" alt="部屋イメージ">
                            </picture>
                            <h3 class="p-lower-link-bnr__text">Room</h3>
                        </a>
                    </div>
                </div>
            </section><!-- room -->

            <section class="l-home-section l-home-section--cuisine" id="cuisine">
                <div class="c-width">
                    <div class="p-lower-link-bnr">
                        <a href="/cuisine/" class="p-lower-link-bnr__link">
                            <picture>
                                <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/home/image_cuisine.webp 1x, <?php echo get_template_directory_uri(); ?>/asset/media/images/home/image_cuisine@2x.webp 2x">
                                <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/home/image_cuisine.webp">
                                <source media="(max-width:480px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/home/image_cuisine_sp.webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/home/image_cuisine.webp" class="p-lower-link-bnr__img" width="1400" height="500" alt="料理イメージ">
                            </picture>
                            <h3 class="p-lower-link-bnr__text">Cuisine</h3>
                        </a>
                    </div>
                </div>
            </section><!-- cuisine -->

            <section class="l-home-section l-home-section--onsen" id="onsen">
                <div class="c-width">
                    <div class="p-lower-link-bnr">
                        <a href="/onsen/" class="p-lower-link-bnr__link">
                            <picture>
                                <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/home/image_onsen.webp 1x, <?php echo get_template_directory_uri(); ?>/asset/media/images/home/image_onsen@2x.webp 2x">
                                <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/home/image_onsen.webp">
                                <source media="(max-width:480px)" srcset="<?php echo get_template_directory_uri(); ?>/asset/media/images/home/image_onsen_sp.webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/media/images/home/image_onsen.webp" class="p-lower-link-bnr__img" width="1400" height="500" alt="温泉イメージ">
                            </picture>
                            <h3 class="p-lower-link-bnr__text">Onsen</h3>
                        </a>
                    </div>
                </div>
            </section><!-- onsen -->

            <section class="l-home-section l-home-section--access" id="access">
                <div class="c-width c-width--narrow">
                    <div class="p-access-desc">
                        <div class="c-section-title">
                            <h3 class="c-section-title__text">Access</h3>
                        </div>
                        <div class="p-access-desc__detail">
                            <p class="p-access-desc__detail-text">佐渡汽船両津港フェリーターミナルより車で21分の場所に位置します。<br class="u-sp-none">両津港への送迎は無料で対応しておりますので、お気軽にご相談くださいませ。</p>
                        </div>
                    </div>
                </div>
                <div class="p-access-map">
                    <iframe class="p-access-map__iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3143.3369122790073!2d138.35757357578734!3d38.015924371925585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff366cc48a90cf9%3A0xdc2f1f3ebb1f39c4!2zdGFuZUNSRUFUSVZF44ix!5e0!3m2!1sja!2sjp!4v1682739675023!5m2!1sja!2sjp" width="1600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section><!-- access -->

            <section class="l-home-section l-home-section--reservation" id="reservation">
                <div class="c-width c-width--narrow">
                    <div class="p-reservation-desc">
                        <div class="c-section-title">
                            <h3 class="c-section-title__text">Reservation</h3>
                        </div>
                        <div class="p-reservation-desc__detail">
                            <p class="p-reservation-desc__detail-text">空室情報・宿泊料金・注意事項に関してはこちらをご確認ください。<br class="u-sp-none">皆様とお会いできるのを、心よりお待ち申し上げております。</p>
                        </div>
                    </div><!-- p-reservation-desc -->
                    <div class="p-reservation-btn">
                        <a class="p-reservation-btn__btn" href="">ご予約</a>
                    </div>
                </div>
            </section><!-- reservation -->

        </main><!-- / #main_area -->
        <?php get_template_part('inc', 'footer'); ?>
        <?php get_template_part('inc', 'sp_menu'); ?>
    </div><!--l-wrapper-->
    <script src="<?php echo get_template_directory_uri(); ?>/asset/js/swiper-bundle.min.js"></script>
    <?php get_template_part('inc', 'js'); ?>
    <script>
        const HEADER_FIXED_THRESHOLD = 120;

        function checkHeaderFixed() {
            if ($(this).scrollTop() > HEADER_FIXED_THRESHOLD) {
                $(".p-hd").addClass("scroll");
                $(".l-sp-menu-btn").addClass("scroll");
            } else {
                $(".p-hd").removeClass("scroll");
                $(".l-sp-menu-btn").removeClass("scroll");
            }
        }
        $(function() {
            checkHeaderFixed();

            let swiper_slide = new Swiper(".p-first-view__fv-slide", {
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                loop: true,
                loopAdditionalSlides: 1,
                effect: "fade",
                speed: 3000,
                pagination: {
                    el: ".p-first-view__pagination",
                    type: "bullets",
                    clickable: true
                },
                spaceBetween: 10, // スライド間の余白
            })
        });
        $(window).scroll(function() {
            checkHeaderFixed();
        });
    </script>
    <?php get_footer(); ?>
</body>

</html>