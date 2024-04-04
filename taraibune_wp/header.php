<!doctype html>
<html <?php language_attributes(); ?> class="loading">

<head>
  <meta charset="utf-8">
  <?php $response_code = http_response_code();
  if ($response_code == 404) { ?>
    <meta name="robots" content="noindex">
  <?php } ?>
  <?php

  // *****************************************************************************
  // meta情報設定
  // *****************************************************************************
  $common_title = 'たらい舟 | 佐渡の古民家旅館';
  $common_desc = '佐渡の古民家旅館　たらい舟。　日本海の幸を堪能して、ゆったりとした非日常体験を。';

  $og_site_name = get_bloginfo('name');
  $og_title = $common_title;
  $og_desc = $common_desc;
  $ogp_img = '';

  if (is_home() || is_front_page()) {
    $title = $common_title;
    $desc = $common_desc;
  } elseif (is_archive()) {
    $title = "News | 佐渡の古民家旅館";
    $desc = "たらい舟のNews一覧ページです。";
  } elseif (is_single()) {
    $title = get_the_title() . " | 佐渡の古民家旅館";
    $desc = get_the_title() . "の詳細ページです。";
  } elseif (is_page()) {
    $title = get_the_title() . " | 佐渡の古民家旅館";
    $desc = get_the_title() . "のページです。";
  } else if (is_404()) {
    $title = "お探しのページは見つかりませんでした | 佐渡の古民家旅館";
    $desc = "お探しのページは一時的にアクセスができない状況にあるか、移動もしくは削除された可能性があります。URLをご確認いただくか、トップページを表示しメニューより目的のページをお探しください。";
  } else {
    $title = $common_title;
    $desc = $common_desc;
  }

  // *****************************************************************************
  // OGP設定
  // *****************************************************************************
  $common_og_title = "たらい舟 | 佐渡の古民家旅館";
  $common_og_site_name = get_bloginfo('name');
  $common_og_img = get_template_directory_uri() . "/asset/media/images/og.webp";

  $og_img = $common_og_img;

  // *****************************************************************************
  // 構造化データ作成
  // *****************************************************************************
  $site_name = get_bloginfo('name');
  $site_url = get_home_url();
  $author = '佐渡の古民家旅館　たらい舟';
  $adress = array(
    "@type" => "PostalAddress",
    "addressLocality" => "新潟県",
    "addressRegion" => "JP",
    "postalCode" => "952-1211",
    "streetAddress" => "佐渡市中興乙1427"
  );
  $main_logo = get_template_directory_uri() . '/asset/media/images/home/kv_logo.webp';

  if (is_home() || is_front_page()) {
    // 構造化データを生成する
    $structured_data = array(
      '@context' => 'https://schema.org',
      '@type' => 'WebSite',
      'name' => $site_name,
      'description' => $desc,
      'url' => $site_url,
      "image" => $og_img,
      "publisher" => array(
        '@type' => 'Organization',
        "name" => get_bloginfo('name'),
        'logo' =>  $main_logo,
        'url' => $site_url,
      ),
      'author' => array(
        '@type' => "Organization",
        'name' => $author,
        'url' => $site_url,
      ),
    );

    // パンくずリストの構造化データを生成する
    $breadcrumb = array(
      '@context' => 'https://schema.org',
      '@type' => 'BreadcrumbList',
      'itemListElement' => array(
        array(
          '@type' => 'ListItem',
          'position' => 1,
          'name' => 'Home',
          'item' => $site_url,
        )
      ),
    );
  } elseif (is_single()) {
    $current_page_id = get_queried_object_id();

    // 親カテゴリーを取得
    $parent_categories = get_the_category($current_page_id);
    $parent_category = $parent_categories[0];

    // 親カテゴリーの親カテゴリー（もしあれば）を取得
    $grandparent_category = null;
    if ($parent_category->parent != 0) {
      $grandparent_category = get_category($parent_category->parent);
    }

    // パンくずリストを生成
    $breadcrumb = array(
      '@context' => 'https://schema.org',
      '@type' => 'BreadcrumbList',
      'itemListElement' => array(
        array(
          '@type' => 'ListItem',
          'position' => 1,
          'name' => 'Home',
          'item' => home_url(),
        )
      ),
    );

    // 親カテゴリーの親カテゴリーがある場合は、パンくずリストに追加
    if ($grandparent_category) {
      $breadcrumb['itemListElement'][] = array(
        '@type' => 'ListItem',
        'position' => 2,
        'name' => $grandparent_category->name,
        'item' => get_category_link($grandparent_category->term_id),
      );
      $breadcrumb['itemListElement'][] = array(
        '@type' => 'ListItem',
        'position' => 3,
        'name' => $parent_category->name,
        'item' => get_category_link($parent_category->term_id),
      );
    } else {
      $breadcrumb['itemListElement'][] = array(
        '@type' => 'ListItem',
        'position' => 2,
        'name' => $parent_category->name,
        'item' => get_category_link($parent_category->term_id),
      );
    }

    // シングルページのタイトルをパンくずリストに追加
    $breadcrumb['itemListElement'][] = array(
      '@type' => 'ListItem',
      'position' => count($breadcrumb['itemListElement']) + 1,
      'name' => get_the_title($current_page_id),
      'item' => get_permalink($current_page_id),
    );

    $categories = get_the_category(); //現在のシングルページに関連するカテゴリ情報を取得
    $parent_category = $categories[0]; //親カテゴリに属する子カテゴリの情報を取得

    // 構造化データを生成する
    $structured_data = array(
      "@context" => "https://schema.org",
      "@type" => "WebPage",
      "mainEntity" => array(
        "@type" => "Article",
        "headline" => get_the_title(),
        "description" => get_the_excerpt(),
        "publisher" => array(
          "@type" => "Organization",
          "name" => get_bloginfo('name'),
          'url' => $site_url
        ),
        "datePublished" => get_the_date('c'),
        "dateModified" => get_the_modified_date('c'),
        'author' => array(
          '@type' => "Organization",
          'name' => $author,
          'url' => $site_url
        ),
        "mainEntityOfPage" => array(
          "@type" => "WebPage",
          "@id" => get_permalink()
        ),
      )
    );
  } elseif (is_category()) {
    $category = get_queried_object(); //現在表示されているカテゴリーの情報を取得
    $category_childlen = get_term_children($category->cat_ID, 'category');

    if ($category->category_parent == 0) { //現在表示されているページが親カテゴリーなら
      $slug = $category->slug;
      $name = $category->name;
      // パンくずリストの構造化データを生成する
      //第二階層まで
      $breadcrumb = array(
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => array(
          array(
            '@type' => 'ListItem',
            'position' => 1,
            'name' => 'Home',
            'item' => get_site_url(),
          ),
          array(
            '@type' => 'ListItem',
            'position' => 2,
            'name' => $name,
            'item' =>  "https://hon-hikidashi.jp/$slug/",
          ),
        ),
      );

      // 構造化データを生成する
      $structured_data = array(
        '@context' => 'https://schema.org',
        '@type' => 'ItemList',
        'name' => $cat_name,
        'description' => $desc,
        'itemListElement' => array(),
      );


      // 子カテゴリが無い時は記事の内容を出力
      if (empty($category_childlen)) {
        $category_id = $category->cat_ID;

        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 5, // 1ページに表示される記事数
          'paged' => get_query_var('paged') ?: 1, // ページ番号を取得する。存在しない場合は1とする。
          'cat' =>  $category_id, // カテゴリーIDを指定する
        );
        $posts = new WP_Query($args);

        // 記事ごとに構造化データを生成する
        if ($posts->have_posts()) {
          $count = 1;
          while ($posts->have_posts()) {
            $posts->the_post();
            $structured_data['itemListElement'][] = array(
              '@type' => 'ListItem',
              'position' => $count,
              'name' => get_the_title(),
              'url' => get_permalink(),
            );
            $count++;
          }
        }
      }
    } else { //現在表示されているページが子カテゴリーなら
      $parent_id = $category->parent;
      $parent_category = get_category($parent_id);
      $parent_name = $parent_category->name;
      $category_id = $category->cat_ID;
      $name = $category->name;
      // パンくずリストの構造化データを生成する
      //第三階層まで
      $breadcrumb = array(
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => array(
          array(
            '@type' => 'ListItem',
            'position' => 1,
            'name' => 'Home',
            'item' => get_site_url(),
          ),
          array(
            '@type' => 'ListItem',
            'position' => 2,
            'name' => $parent_name,
            'item' =>  get_term_link($parent_id),
          ),
          array(
            '@type' => 'ListItem',
            'position' => 2,
            'name' => $name,
            'item' => get_category_link($category_id),
          ),
        ),
      );

      // カテゴリーの記事を取得する
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 12, // 1ページに表示される記事数
        'paged' => get_query_var('paged') ?: 1, // ページ番号を取得する。存在しない場合は1とする。
        'cat' =>  $category_id, // カテゴリーIDを指定する
      );
      $posts = new WP_Query($args);

      // 構造化データを生成する
      $structured_data = array(
        '@context' => 'https://schema.org',
        '@type' => 'ItemList',
        'name' => $cat_name,
        'description' => $desc,
        'itemListElement' => array(),
        'author' => array(
          '@type' => "Organization",
          'name' => $author
        ),
      );

      // 記事ごとに構造化データを生成する
      if ($posts->have_posts()) {
        $count = 1;
        while ($posts->have_posts()) {
          $posts->the_post();
          $structured_data['itemListElement'][] = array(
            '@type' => 'ListItem',
            'position' => $count,
            'url' => get_permalink(),
            'headline' => get_the_title(),
          );
          $count++;
        }
      }
    }
  } elseif (is_page()) {

    //  最初にTOPをパンくずリストに追加
    $breadcrumb = array(
      '@context' => 'https://schema.org',
      '@type' => 'BreadcrumbList',
      'itemListElement' => array(
        array(
          '@type' => 'ListItem',
          'position' => 1,
          'name' => 'Home',
          'item' => $site_url,
        )
      ),
    );

    //  親ページがあったらパンくずリストに追加
    $content_count = 2;
    if ($post->post_parent > 0) {
      $ancestors = array_reverse(get_post_ancestors($post->ID));
      foreach ($ancestors as $ancestor) {
        $breadcrumb['itemListElement'][] = array(
          '@type' => 'ListItem',
          'position' => $content_count,
          'name' => get_the_title($ancestor),
          'item' =>  get_permalink($ancestor),
        );
      }
    }

    //  現在のページをパンくずリストに追加
    $breadcrumb['itemListElement'][] = array(
      '@type' => 'ListItem',
      'position' => $content_count,
      'name' => get_the_title(),
      'item' =>  get_permalink(),
    );


    // 構造化データを生成する
    $structured_data = array(
      "@context" => "https://schema.org",
      "@type" => "WebPage",
      "name" => get_the_title(),
      "description" => $desc,
      "publisher" => array(
        "@type" => "Organization",
        "name" => get_bloginfo('name'),
        'logo' =>  $main_logo,
        'url' => $site_url,
      ),
      'author' => array(
        '@type' => "Organization",
        'name' => $author,
        'url' => $site_url
      ),
    );
  } elseif (is_404()) {
    //  最初にTOPをパンくずリストに追加
    $breadcrumb = array(
      '@context' => 'https://schema.org',
      '@type' => 'BreadcrumbList',
      'itemListElement' => array(
        array(
          '@type' => 'ListItem',
          'position' => 1,
          'name' => 'Home',
          'item' => $site_url,
        ),
        array(
          '@type' => 'ListItem',
          'position' => 2,
          'name' => '404エラー',
        )
      ),
    );
    // 構造化データを生成する
    $structured_data = array(
      "@context" => "https://schema.org",
      "@type" => "WebPage",
      "name" => "404エラー",
      "description" => $desc,
      "publisher" => array(
        "@type" => "Organization",
        "name" => get_bloginfo('name'),
        'logo' =>  $main_logo,
        'url' => $site_url,
      ),
      'author' => array(
        '@type' => "Organization",
        'name' => $author,
        'url' => $site_url
      ),
    );
  }; ?>


  <title><?php echo esc_html($title); ?></title>
  <base href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST']; ?>/">
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=0">
  <meta name="description" content="<?php echo esc_html($desc) ?>">
  <meta property="format-detection" content="telephone=no" />
  <meta property="og:url" content="<?php echo esc_html(get_permalink()); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php echo esc_html($title); ?>" />
  <meta property="og:image" content="<?php echo esc_html($og_img); ?>" />
  <meta property="og:image:alt" content="<?php echo $site_name; ?>" />
  <meta property="og:description" content="<?php echo esc_html($desc); ?>" />
  <meta property="og:site_name" content="<?php echo esc_html($og_site_name); ?>" />
  <meta property="og:locale" content="ja_JP" />
  <link rel="shortcut icon" href="/favicon.ico">

  <!-- googleフォント -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&display=swap" rel="stylesheet">
  <?php
  // TOPページかどうかのフラグ
  $is_home = false;

  // CSS読込
  if (is_home() || is_front_page()) {
    $is_home = true;
  ?>
    <link rel="preload" as="image" media="(min-width: 769px)" href="<?php echo get_template_directory_uri() . "/asset/media/images/home/kv_image_01.webp" ?>" imagesrcset="<?php echo get_template_directory_uri() . "/asset/media/images/home/kv_image_01@2x.webp 2x" ?>">
    <link rel="preload" as="image" media="(max-width: 768px)" href="<?php echo get_template_directory_uri() . "/asset/media/images/home/kv_image_01.webp" ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/asset/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/asset/css/home.css" ?>">

  <?php } elseif (is_page("room")) { ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/asset/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/asset/css/room.css" ?>">

    <link rel="preload" as="image" media="(min-width: 769px)" href="<?php echo get_template_directory_uri() . "/asset/media/images/room/kv_room.webp" ?>" imagesrcset="<?php echo get_template_directory_uri() . "/asset/media/images/room/kv_room@2x.webp 2x" ?>">
    <link rel="preload" as="image" media="(max-width: 768px)" href="<?php echo get_template_directory_uri() . "/asset/media/images/room/kv_room.webp" ?>">
  <?php } elseif (is_page("onsen")) { ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/asset/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/asset/css/onsen.css" ?>">

    <link rel="preload" as="image" media="(min-width: 769px)" href="<?php echo get_template_directory_uri() . "/asset/media/images/onsen/kv_onsen.webp" ?>" imagesrcset="<?php echo get_template_directory_uri() . "/asset/media/images/onsen/kv_onsen@2x.webp 2x" ?>">
    <link rel="preload" as="image" media="(max-width: 768px)" href="<?php echo get_template_directory_uri() . "/asset/media/images/onsen/kv_onsen.webp" ?>">
  <?php } elseif (is_page("cuisine")) { ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/asset/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/asset/css/cuisine.css" ?>">

    <link rel="preload" as="image" media="(min-width: 769px)" href="<?php echo get_template_directory_uri() . "/asset/media/images/cuisine/kv_cuisine.webp" ?>" imagesrcset="<?php echo get_template_directory_uri() . "/asset/media/images/cuisine/kv_cuisine@2x.webp 2x" ?>">
    <link rel="preload" as="image" media="(max-width: 768px)" href="<?php echo get_template_directory_uri() . "/asset/media/images/cuisine/kv_cuisine.webp" ?>">
  <?php } elseif (is_category("news") || in_category("news")) { ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/asset/css/news.css" ?>">
  <?php }



  // ファーストビューのCSSを直接出力
  $first_view_css = "lower_first_view";
  $first_view = '';
  if ($is_home) {
    $first_view_css = "home_first_view";
  }

  ob_start();
  include(get_template_directory() . "/asset/css/" . $first_view_css . ".css");
  $first_view = ob_get_contents();
  ob_end_clean();
  $first_view = str_replace('@charset "UTF-8";', '', $first_view);
  $first_view = str_replace('../', '' . get_template_directory_uri() . '/asset/', $first_view);
  echo "<style>
    " . $first_view . "
  </style>"
  ?>

  <?php

  // 構造化データ出力
  echo '<script type="application/ld+json">
      ' . json_encode(array($structured_data, $breadcrumb), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)  . '
    </script>';

  // ループ後の処理
  wp_reset_postdata();
  ?>

  <?php wp_head(); ?>
</head>