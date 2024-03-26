<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package BusinessPress
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-NQVFX7W');
	</script>
	<!-- End Google Tag Manager -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php if (is_page() && get_post_meta(get_the_ID(), 'description', true)) {
		$description = SCF::get('description', get_the_ID());
		echo '<meta name="description" content="' . $description . '"/>' . "\n";
	}; ?>
	<?php my_hreflang_description(); ?>
	<?php wp_head(); ?>
	<script src="https://kit.fontawesome.com/b092efee5b.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<link rel="stylesheet" href="https://d-reserve.jp/hotel-business/search-panel/directin-search-panel-2.0.css"><!-- 1 -->
	<script src="https://d-reserve.jp/hotel-business/search-panel/directin-search-panel-2.0.js" data-hotel="0000000834" data-target=".search-panel-frame"></script><!-- 2 -->
	<script>
		directInSearchPanelConfig = {
			rooms: "1..3", // 部屋数の選択可能範囲
			guests: [{
				type: 0,
				range: "1..5", // 人数 (大人) の選択可能範囲
			}, ],
		}
	</script><!-- 3 -->
	<?php if (is_page('gallery')) : ?>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>
	<?php endif; ?>
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NQVFX7W" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'businesspress'); ?></a>

		<header id="masthead" class="site-header">
			<?php
			global $domainName;
			$domainName = $_SERVER['SERVER_NAME'];

			//JP Domain
			function jpDomainFunc()
			{
				$jpDomain = '';
				if (isset($_SERVER['HTTPS'])) {
					$jpDomain .= 'https://';
				} else {
					$jpDomain .= 'http://';
				}
				global $domainName;
				$jpDomain .= $domainName;
				return $jpDomain;
			}
			// global $siteJPDomain;
			$siteJPDomain = jpDomainFunc();

			//EN Domain
			function enDomainFunc()
			{
				$enDomain = '';
				if (isset($_SERVER['HTTPS'])) {
					$enDomain .= 'https://';
				} else {
					$enDomain .= 'http://';
				}
				global $domainName;
				$enDomain .= $domainName;
				$enDomain .= '/en';
				return $enDomain;
			}
			// global $siteENDomain;
			$siteENDomain = enDomainFunc();

			//SC Domain
			function scDomainFunc()
			{
				$enDomain = '';
				if (isset($_SERVER['HTTPS'])) {
					$enDomain .= 'https://';
				} else {
					$enDomain .= 'http://';
				}
				global $domainName;
				$enDomain .= $domainName;
				$enDomain .= '/zh-cn';
				return $enDomain;
			}
			// global $siteSCDomain;
			$siteSCDomain = scDomainFunc();

			//TC Domain
			function tcDomainFunc()
			{
				$enDomain = '';
				if (isset($_SERVER['HTTPS'])) {
					$enDomain .= 'https://';
				} else {
					$enDomain .= 'http://';
				}
				global $domainName;
				$enDomain .= $domainName;
				$enDomain .= '/zh-tw';
				return $enDomain;
			}
			// global $siteTCDomain;
			$siteTCDomain = tcDomainFunc();

			//Now Page
			$nowPage = $_SERVER['REQUEST_URI'];
			$nowPage = str_replace("/en", "", $nowPage);
			?>
			<?php if (get_theme_mod('businesspress_enable_top_bar')) : ?>
				<div class="top-bar">
					<div class="top-bar-content">
						<?php businesspress_top_bar_main(); ?>
						<?php businesspress_header_social_link(); ?>
					</div><!-- .top-bar-content -->
				</div><!-- .top-bar -->
			<?php endif; ?>

			<div class="main-header main-header-original">
				<div class="main-header-content">
					<div class="site-branding">
						<?php businesspress_logo(); ?>
						<?php businesspress_title(); ?>
					</div><!-- .site-branding -->
					<?php businesspress_main_navigation(); ?>
					<!-- <button class="drawer-hamburger">
					<span class="screen-reader-text"><?php esc_html_e('Menu', 'businesspress'); ?></span>
					<span class="drawer-hamburger-icon"></span>
				</button> -->
					<span class="link-language">
						<a class="link-jp" href="<?php echo $siteJPDomain . $nowPage; ?>">JP</a>&nbsp;|&nbsp;<a class="link-en" href="<?php echo $siteENDomain . $nowPage; ?>">EN</a>&nbsp;|&nbsp;<a class="link-en" href="<?php echo $siteSCDomain . $nowPage; ?>">SC</a>&nbsp;|&nbsp;<a class="link-en" href="<?php echo $siteTCDomain . $nowPage; ?>">TC</a>
					</span>
				</div><!-- .main-header-content -->
				<div class="drawer-overlay"></div>
				<div class="drawer-navigation">
					<div class="drawer-navigation-content">
						<?php businesspress_main_navigation(); ?>
						<?php if (get_theme_mod('businesspress_enable_top_bar')) : ?>
							<?php businesspress_header_social_link(); ?>
						<?php endif; ?>
					</div><!-- .drawer-navigation-content -->
				</div><!-- .drawer-navigation -->
			</div><!-- .main-header -->

			<?php if (is_front_page() && get_theme_mod('businesspress_enable_home_header')) : ?>
				<?php get_template_part('template-parts/content', 'home-header'); ?>
			<?php elseif (is_page() && !get_post_meta(get_the_ID(), 'businesspress_hide_page_title', true)) : ?>
				<div class="jumbotron" <?php businesspress_post_background(); ?>>
					<div class="jumbotron-overlay">
						<div class="jumbotron-content">
							<?php if (!get_theme_mod('businesspress_hide_subheader')) : ?>
								<?php if (is_page('tourist')) : ?>
									<div class="subheader">Sightseeing Information</div>
								<?php else : ?>
									<div class="subheader"><?php echo esc_attr(str_replace('-', ' ', get_post_field('post_name', get_the_ID()))); ?></div>
								<?php endif; ?>
							<?php endif; ?>
							<h2 class="jumbotron-title"><?php the_title(); ?></h2>
						</div><!-- .jumbotron-content -->
					</div><!-- .jumbotron-overlay -->
				</div><!-- .jumbotron -->
			<?php elseif (is_category('news') || in_category('1')) : ?>
				<div class="jumbotron" <?php businesspress_post_background(get_post_thumbnail_id(get_option('page_for_posts'))); ?>>
					<div class="jumbotron-overlay">
						<div class="jumbotron-content">
							<?php if (!get_theme_mod('businesspress_hide_subheader')) : ?>
								<div class="subheader">Topics</div>
							<?php endif; ?>
							<h1 class="jumbotron-title">新着情報</h1>
						</div><!-- .jumbotron-content -->
					</div><!-- .jumbotron-overlay -->
				</div><!-- .jumbotron -->
			<?php endif; ?>

			<?php if (is_home() && !is_paged() && get_theme_mod('businesspress_enable_featured_slider')) : ?>
				<div class="featured-post">
					<?php
					$featured = new WP_Query(array(
						'cat'                 => get_theme_mod('businesspress_featured_category'),
						'posts_per_page'      => get_theme_mod('businesspress_featured_slider_number', '4'),
						'no_found_rows'       => true,
						'ignore_sticky_posts' => true
					));
					if ($featured->have_posts()) :
						while ($featured->have_posts()) : $featured->the_post();
							get_template_part('template-parts/content', 'featured');
						endwhile;
					endif;
					wp_reset_postdata(); ?>
				</div><!-- .featured-post -->
			<?php elseif (is_home() && !is_paged() && !is_front_page() && !get_post_meta(get_option('page_for_posts'), 'businesspress_hide_page_title', true)) : ?>
				<div class="jumbotron" <?php businesspress_post_background(get_post_thumbnail_id(get_option('page_for_posts'))); ?>>
					<div class="jumbotron-overlay">
						<div class="jumbotron-content">
							<?php if (!get_theme_mod('businesspress_hide_subheader')) : ?>
								<div class="subheader"><?php echo esc_attr(str_replace('-', ' ', get_post_field('post_name', get_option('page_for_posts')))); ?></div>
							<?php endif; ?>
							<h1 class="jumbotron-title"><?php echo get_the_title(get_option('page_for_posts')); ?></h1>
						</div><!-- .jumbotron-content -->
					</div><!-- .jumbotron-overlay -->
				</div><!-- .jumbotron -->
			<?php endif; ?>
			<?php if (is_front_page() || is_home()) : ?>
				<div class="sp-lang-nav">
					<span class="link-language">
						<a class="link-jp" href="<?php echo $siteJPDomain . $nowPage; ?>">JP</a>&nbsp;|&nbsp;<a class="link-en" href="<?php echo $siteENDomain . $nowPage; ?>">EN</a>&nbsp;|&nbsp;<a class="link-en" href="<?php echo $siteSCDomain . $nowPage; ?>">SC</a>&nbsp;|&nbsp;<a class="link-en" href="<?php echo $siteTCDomain . $nowPage; ?>">TC</a>
					</span>
				</div>
			<?php endif; ?>
		</header><!-- #masthead -->


		<div id="content" class="site-content">