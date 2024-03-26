<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css', array(), '1.0.1', 'all');
	wp_enqueue_style('style-child', get_stylesheet_directory_uri() . '/css/additional.css?231213', array('parent-style'));
}

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
function theme_enqueue_scripts()
{
	//子テーマのjs
	if (is_home()) {
		wp_enqueue_script('slick', get_theme_file_uri('/js/slick.js'), array('jquery'), '1.9.0', true);
		wp_enqueue_style('slick-style', get_theme_file_uri('/css/slick.css'), array(), '1.9.0');
	}
	wp_enqueue_script('orignal-script', get_stylesheet_directory_uri() . '/js/hkg.js', array('jquery'), '1.0.3', true);
}

/* PHPの読み込み
---------------------------------------------------------- */
function my_php_Include($params = array())
{
	extract(shortcode_atts(array('file' => 'default'), $params));
	ob_start();
	include(STYLESHEETPATH . "/template-parts/$file.php");
	return ob_get_clean();
}
add_shortcode('myphp', 'my_php_Include');

/* SVGアップロード
---------------------------------------------------------- */
function custom_mime_types($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'custom_mime_types');

/* 自動形成OFF（固定ページ）
---------------------------------------------------------- */
function disable_page_wpautop()
{
	if (is_page()) remove_filter('the_content', 'wpautop');
}
add_action('wp', 'disable_page_wpautop');

/* 不要なタイトル
---------------------------------------------------------- */
add_filter('get_the_archive_title', function ($titname) {
	if (is_category()) {
		$titname = single_cat_title('', false);
	} elseif (is_date()) {
		$titname = get_the_time('Y年 n月');
	} elseif (is_tag()) {
		$titname = single_tag_title('', false);
	} elseif (is_tax()) {
		$titname = single_term_title('', false);
	} elseif (is_404()) {
		$titname = '404 Not Found';
	} else {
	}
	return $titname;
});

/* Contact Form 7　メールアドレス確認用
---------------------------------------------------------- */
add_filter('wpcf7_validate_email', 'wpcf7_validate_email_filter_confrim', 11, 2);
add_filter('wpcf7_validate_email*', 'wpcf7_validate_email_filter_confrim', 11, 2);
function wpcf7_validate_email_filter_confrim($result, $tag)
{
	$type = $tag['type'];
	$name = $tag['name'];
	if ('email' == $type || 'email*' == $type) {
		if (preg_match('/(.*)_confirm$/', $name, $matches)) { //確認用メルアド入力フォーム名を ○○○_confirm としています。
			$target_name = $matches[1];
			$posted_value = trim((string) $_POST[$name]); //前後空白の削除
			$posted_target_value = trim((string) $_POST[$target_name]); //前後空白の削除
			if ($posted_value != $posted_target_value) {
				$result->invalidate($tag, "確認用のメールアドレスが一致していません");
			}
		}
	}
	return $result;
}
// hreflang
function my_hreflang_description()
{
	$exclude_page_list = [
		'xxx',
		'yyy',
		'zzz',
	];
	if (!is_page($exclude_page_list) && !is_singular('post') && !is_category()) {
		$lang_list = [
			['ja', '/'],
			['en', '/en/'],
			['zh-Hant', '/zh-cn/'],
			['zh-Hans', '/zh-tw/'],
			['x-default', '/en/'],
		];
		$base_url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'];
		$current_url = $base_url . $_SERVER["REQUEST_URI"];
		$home_url = esc_url(home_url('/'));
		$page_url = str_replace($home_url, '', $current_url);
		foreach ($lang_list as $lang) {
			$url = $base_url . $lang[1] . $page_url;
			echo '<link rel="alternate" hreflang="' . $lang[0] . '" href="' . $url . '">' . "\n";
		}
	}
}
