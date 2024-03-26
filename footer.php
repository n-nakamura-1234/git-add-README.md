<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package BusinessPress
 */
?>

	</div><!-- #content -->

<div class="footer-banner">
	<div class="site-content">
	<div class="f-box3">
		<div class="f-item"><a href="https://menekiup.club/" target="_blank"><img src="https://hakuryuko-resort.co.jp/wp-content/uploads/2021/11/f-banner1.jpg" alt="おいしく食べて楽しくスリムに"></a></div>
		<div class="f-item"><a href="http://www.pressnet.co.jp/hkg/hakuryuko/" target="_blank"><img src="https://hakuryuko-resort.co.jp/wp-content/uploads/2021/11/f-banner2.jpg" alt="憩いの料亭 白竜湖"></a></div>
		<div class="f-item"><a href="http://www.pressnet.co.jp/hkg/jiromaru/" target="_blank"><img src="https://hakuryuko-resort.co.jp/wp-content/uploads/2021/11/f-banner3.jpg" alt="和菜亭 次郎丸"></a></div>
		<div class="f-item"><a href="http://hotelvancornell.jp/" target="_blank"><img src="https://hakuryuko-resort.co.jp/wp-content/uploads/2021/11/f-banner4.jpg" alt="ホテル ヴァンコーネル"></a></div>
		<div class="f-item"><a href="http://fmhigashi.jp/" target="_blank"><img src="https://hakuryuko-resort.co.jp/wp-content/uploads/2021/11/f-banner5.jpg" alt="東広島FM"></a></div>
		<div class="f-item"><a href="http://www.pressnet.co.jp/hkg/" target="_blank"><img src="https://hakuryuko-resort.co.jp/wp-content/uploads/2021/11/f-banner6.jpg" alt="白竜湖グループ"></a></div>
	</div>
	</div>
</div>

	<footer id="colophon" class="site-footer">

		<?php get_sidebar( 'footer' ); ?>

		<?php if ( has_nav_menu( 'footer' ) || has_nav_menu( 'footer-social' ) || ! get_theme_mod( 'businesspress_hide_footer_text' ) || ! get_theme_mod( 'businesspress_hide_credit' ) ) : ?>
		<div class="site-bottom">
			<div class="site-bottom-content">

				<div class="footer-address">
					<h2 class="mt0" style="margin-bottom: 0.5em;"><img src="https://hakuryuko-resort.co.jp/wp-content/uploads/2022/02/logo_black.svg" alt="<?php bloginfo(); ?>"></h2>
					<div class="footer-address__body">
            広島県三原市大和町箱川4007-7<br>
            TEL:0847-34-0006<br>FAX:0847-34-1100<br>
            <p class="email">
              <span class="email__left">E-mail:</span><span class="email__right">rezortha@mail.mcat.ne.jp<br>
              matsuda@pressnet.co.jp
              </span>
            </p>
          </div>
				</div>

				<?php if ( has_nav_menu( 'footer' ) || has_nav_menu( 'footer-social' ) ) : ?>
				<div class="footer-menu">
					<?php if ( has_nav_menu( 'footer' ) ) : ?>
					<nav class="footer-navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'footer' , 'depth' => 1 ) ); ?>
					</nav><!-- .footer-navigation -->
					<?php endif; ?>
					<?php if ( has_nav_menu( 'footer-social' ) ) : ?>
					<nav class="footer-social-link social-link-menu">
						<?php wp_nav_menu( array( 'theme_location' => 'footer-social', 'depth' => 1, 'link_before'  => '<span class="screen-reader-text">', 'link_after'  => '</span>' ) ); ?>
					</nav><!-- .footer-social-link -->
					<?php endif; ?>
				</div><!-- .footer-menu -->
				<?php endif; ?>

				
			</div><!-- .site-bottom-content -->
			<?php businesspress_footer(); ?>
		</div><!-- .site-bottom -->
		<?php endif; ?>

	</footer><!-- #colophon -->
</div><!-- #page -->

<div class="back-to-top"></div>

<nav id="g-nav">
	<div class="text-c" style="padding: 1.5em 0;"><?php businesspress_logo(); ?></div>
	<div id="g-nav-list" class="font-min">
		<?php businesspress_main_navigation(); ?>
	</div>
</nav>
<div class="f-menu-sp">
	<div class="fm-item fm-booking">
		<i class="far fa-calendar-alt"></i>
		Booking
	</div>
	<div class="fm-item fm-tel">
		<a href="tel:0847340006">
		<i class="fas fa-mobile-alt"></i>
		0847-34-0006</a>
	</div>
	<div class="fm-item fm-menu">
		<div class="openbtn"><span></span><span></span><span></span></div>
		MENU
	</div>
</div>

<?php wp_footer(); ?>


<div class="search-panel-frame"></div>

</body>
</html>
