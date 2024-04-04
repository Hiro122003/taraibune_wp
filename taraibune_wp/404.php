<?php
/* template name:404 */
get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/asset/css/404.css" ?>">
</head>

<body>
  <div class="l-wrapper" id="wrapper">
    <?php get_template_part('inc', 'header'); ?>
    <main id="main" class="l-main">
      <section class="l-lower-section">
        <div class="c-width">
          <div class="c-section-title">
            <h1 class="c-section-title__text">404</h1>
          </div>
          <div class="p-404_cont">
            <p class="p-404_cont__text">お探しの記事・ページはございません。</p>

            <div class="p-404_cont__link">
              <a class="c-link" href="/">TOPに戻る</a>
            </div>
          </div>
        </div>
      </section>
    </main><!-- / #main_area -->
    <?php get_template_part('inc', 'footer'); ?>
    <?php get_template_part('inc', 'sp_menu'); ?>
  </div><!--l-wrapper-->
  <?php get_template_part('inc', 'js'); ?>
  <?php get_footer(); ?>
</body>

</html>