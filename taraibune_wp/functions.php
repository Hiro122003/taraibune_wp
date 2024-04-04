<?php

//////////////////////  セキュリティ対策  //////////////////////

//投稿者アーカイブが不要な場合（ユーザーID漏洩防止）
add_filter('author_rewrite_rules', '__return_empty_array');

// authorページ削除
function author_custom_redirection()
{
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
  $wp_rewrite->author_base = '';
  $wp_rewrite->author_structure = '/';
  if (isset($_REQUEST['author']) && !empty($_REQUEST['author'])) {
    wp_redirect(home_url());
    exit;
  }
}
add_action('init', 'author_custom_redirection');


//////////////////////  不用なソースコード削除  //////////////////////

//type属性、style属性を完璧に消す
function html5_validation($buffer)
{
  $buffer = preg_replace('/\s?type=(\'|")text\/(javascript|css)(\'|")/is', '', $buffer);
  return $buffer;
}
function buf_start()
{
  ob_start('html5_validation');
}
function buf_end()
{
  if (ob_get_length()) {
    ob_end_flush();
  }
}
add_action('after_setup_theme', 'buf_start');
add_action('shutdown', 'buf_end');


// 余計なソース削除
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
function disable_emoji()
{
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'disable_emoji');


//////////////////////  カテゴリページ  //////////////////////

// カテゴリページのURLから /category/ を消す
function rename_cat_function($link)
{
  return str_replace("/category/", "/", $link);
}
add_filter('user_trailingslashit', 'rename_cat_function');

function rename_cat_flush_rules()
{
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action('init', 'rename_cat_flush_rules');

function rename_cat_rewrite($wp_rewrite)
{
  $new_rules = array('(.+)/page/(.+)/?' => 'index.php?category_name=' . $wp_rewrite->preg_index(1) . '&paged=' . $wp_rewrite->preg_index(2));
  $wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
}
add_filter('generate_rewrite_rules', 'rename_cat_rewrite');