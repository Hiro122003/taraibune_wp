<?php
// template name:お部屋ページ 
get_header(); ?>

<body>
    <div class="l-wrapper" id="wrapper">

        <?php get_template_part('inc', 'header'); ?>

        <main id="main" class="l-main">
            <section class="l-lower-section" id="news">
                <div class="c-width">
                    <div class="l-news-wrap">
                        <div class="c-section-title">
                            <h1 class="c-section-title__text">News</h1>
                        </div>
                        <div class="p-news-detail">
                            <p class="p-news-detail__date"><?php echo get_the_time('Y.m.d'); ?></p>
                            <p class="p-news-detail__title"><?php echo get_the_title(); ?></p>
                        </div>
                        <div class="p-news-contents">
                            <?php the_content(); ?>
                        </div>

                        <div class="c-paging-nav">
                            <div class="c-paging-nav__prev">
                                <?php previous_post_link('%link', '前へ'); ?>
                            </div>
                            <div class="c-paging-nav__back">
                                <a href="/news/">一覧へ</a>
                            </div>
                            <div class="c-paging-nav__next">
                                <?php next_post_link('%link', '次へ'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php get_template_part('inc', 'footer'); ?>
        <?php get_template_part('inc', 'sp_menu'); ?>
    </div><!--l-wrapper-->
    <?php get_template_part('inc', 'js'); ?>
    <?php get_footer(); ?>
</body>

</html>