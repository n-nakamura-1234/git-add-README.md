<?php

/**
 * The template for the blog posts index page.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package BusinessPress
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<!-- instagram & blog link -->
		<div class="linkArea">
			<ul class="linkArea__list">
				<li class="linkArea__item">
					<a class="linkArea__link" href="https://www.instagram.com/bailonghurizotonootsuru/"><img src="https://hakuryuko-resort.co.jp/wp-content/uploads/2022/10/logo_instagram.png" alt="ロゴ"></a>
				</li>
				<li class="linkArea__item">
					<a class="linkArea__link" href="https://ameblo.jp/hakuryuko/"><img src="https://hakuryuko-resort.co.jp/wp-content/uploads/2022/10/logo_blog.png" alt="ロゴ"></a>
				</li>
			</ul>
		</div>
		<!-- instagram & blog link -->

		<!-- 貸切風呂 -->
		<!-- 貸切風呂 -->

		<!-- banner -->
		<div class="bannerArea">
			<div class="bannerArea__inner">
				<div class="bannerArea__block2">
					<img src="https://hakuryuko-resort.co.jp/wp-content/uploads/2023/04/top-banner230417.jpg" alt="白竜湖リゾートゴルフパックプラン">
				</div>
			</div>
		</div>
		<!-- banner -->

		<section class="section mt0 js-acc-single">
			<div class="js-accordion-title is-active">
				<h2 class="title"><span>Concept</span></h2>
				<div class="sub-title">コンセプト</div>
			</div>

			<div class="accordion__content is-open">
				<div class="f-box2">
					<div class="f-item order2">
						<h3 class="caption">免疫力向上ホテル<br>
							「ホテル白竜湖リゾート」について</h3>
						<p>豊かな自然に囲まれた非日常の空間でリラックス。<br>
							地元の食材と発酵食品を取り入れたおいしい料理を楽しみ、筋肉量や体脂肪、バランス能力などをチェックできるジムで楽しく体を動かす。<br>
							ホテル白竜湖リゾートは病気を防いで健康的に過ごすための免疫力向上空間です。
						</p>
						<p class="text-c"><a href="https://hakuryuko-resort.co.jp/concept/" class="btn btn-main">ホテル白竜湖リゾートについて</a></p>
						<p class="text-c"><a href="https://menekiup.club/" target="_blank" class="btn btn-main">免疫力向上プロジェクト</a></p>
					</div>
					<div class="f-item order1">
						<p class="text-c"><img src="https://hakuryuko-resort.co.jp/wp-content/uploads/2022/10/img_top_concept.jpg" alt=""></p>
					</div>
				</div>
			</div>
		</section>


		<section class="section">
			<div class="js-accordion-title">
				<h2 class="title"><span>Topics</span></h2>
				<div class="sub-title">新着情報</div>
			</div>
			<div class="accordion__content">
				<?php if (have_posts()) : ?>

					<div class="home-topics-list innerS">
						<?php /* Start the Loop */ ?>
						<?php while (have_posts()) : the_post();
							get_template_part('template-parts/content-list');
						endwhile; ?>
					</div><!-- .loop-wrapper -->

					<?php
					the_posts_pagination(array(
						'prev_text' => esc_html__('&laquo; Previous', 'businesspress'),
						'next_text' => esc_html__('Next &raquo;', 'businesspress'),
					));
					?>

				<?php else : ?>

					<?php get_template_part('template-parts/content', 'none'); ?>

				<?php endif; ?>

				<p class="text-c"><a href="https://hakuryuko-resort.co.jp/category/news/" class="btn btn-main">すべて見る</a></p>
			</div>
		</section>


		<section class="section">
			<div class="top-3point">
				<a href="<?php echo esc_url(home_url('/menu')); ?>" class="top-3point__item">
					<div class="top-3point__head">
						<img src="https://hakuryuko-resort.co.jp/wp-content/uploads/2022/10/img_top_3point01.jpg" alt="料理の写真">
						<span class="top-3point__text">お料理</span>
					</div>
					<div class="top-3point__body">
						<p>「山の幸と海の幸の出会い」<br>
							「料理で体を元気にする」がコンセプトの料理を提供しています</p>
					</div>
				</a>
				<a href="<?php echo esc_url(home_url('/facility')); ?>" class="top-3point__item">
					<div class="top-3point__head">
						<img src="https://hakuryuko-resort.co.jp/wp-content/uploads/2022/10/img_top_3point02.jpg" alt="お部屋の写真">
						<span class="top-3point__text">お部屋</span>
					</div>
					<div class="top-3point__body">
						<p>洋室、特別和室、スイートルームなど個性的で趣のあるお部屋でごゆるりとお過ごしください</p>
					</div>
				</a>
				<a href="<?php echo esc_url(home_url('/facility')); ?>" class="top-3point__item">
					<div class="top-3point__head">
						<img src="https://hakuryuko-resort.co.jp/wp-content/uploads/2022/10/img_top_3point03.jpg" alt="施設の写真">
						<span class="top-3point__text">施設</span>
					</div>
					<div class="top-3point__body">
						<p>大岩風呂、貸切風呂、天文台、プラネタリウム、カラオケルームに新感覚のジムなどリフレッシュ、リラックスのための施設でお楽しみください</p>
					</div>
				</a>
			</div>
		</section>

		<section class="section">
			<div class="js-accordion-title">
				<h2 class="title"><span>Facility</span></h2>
				<div class="sub-title">施設紹介</div>
			</div>
			<div class="accordion__content">
				<div class="f-box2">
					<div class="f-item order2">
						<h3 class="caption">すべてのお客様がゆったり過ごせる客室<br>
							天然緑石の大岩風呂も</h3>
						<p>客室は全室レイクビュー。24㎡の洋室ツイン、16畳の離れ、18畳の古民家風の和室のいごこちのよいお部屋をご用意しています。<br>
							のんびり、ゆっくりとお過ごしください。<br>
							大岩風呂は温泉ではありませんが、地下水を沸かしたやわらかなお湯と、湖の景色、天然緑石と湯けむりの醸し出す独特の雰囲気で、温泉気分を十分に味わうことができます。</p>
						<p class="text-c"><a href="https://hakuryuko-resort.co.jp/facility/" class="btn btn-main">詳しくはこちら</a></p>
					</div>
					<div class="f-item order1">
						<p class="text-c"><img src="https://hakuryuko-resort.co.jp/wp-content/uploads/2022/01/home_facility.jpg" alt=""></p>
					</div>
				</div>
			</div>
		</section>

		<section class="section">
			<div class="js-accordion-title">
				<h2 class="title"><span>Day Use</span></h2>
				<div class="sub-title">日帰りプラン</div>
			</div>
			<div class="accordion__content">
				<div class="f-box2">
					<div class="f-item order2">
						<h3 class="caption">各種宴会や観光のご休憩にも</h3>
						<p>年祝い、結婚記念日、お誕生日のお祝い、法事の後のお食事など、いろいろなお集まりを湖を望む宴会場やレストランでどうぞ。<br>
							湖畔の四季を感じながらゆっくりとお過ごしください。<br>
							送迎も承っております。ご相談ください。</p>
						<p class="text-c"><a href="https://hakuryuko-resort.co.jp/plan/" class="btn btn-main">日帰りプランについて</a></p>
					</div>
					<div class="f-item order1">
						<p class="text-c"><img src="https://hakuryuko-resort.co.jp/wp-content/uploads/2023/02/home_dayuse2.jpg" alt=""></p>
					</div>
				</div>
			</div>
		</section>

		<section class="section">
			<div class="js-accordion-title">
				<h2 class="title"><span>Stay</span></h2>
				<div class="sub-title">宿泊プラン</div>
			</div>
			<div class="accordion__content">
				<div class="f-box2">
					<div class="f-item order2">
						<h3 class="caption">ゆっくりと時が流れる和みの宿</h3>
						<p>日常を離れた空間で料理を楽しんでゆっくりとくつろぎ、リラックス、リフレッシュしていただけるプランをご用意いたしました。</p>
						<p class="text-c"><a href="https://hakuryuko-resort.co.jp/plan/#stay" class="btn btn-main">宿泊プランについて</a></p>
					</div>
					<div class="f-item order1">
						<p class="text-c"><img src="https://hakuryuko-resort.co.jp/wp-content/uploads/2022/01/home_stay.jpg" alt=""></p>
					</div>
				</div>
			</div>
		</section>

		<section class="section">
			<div class="js-accordion-title">
				<h2 class="title"><span>Restaurant</span></h2>
				<div class="sub-title">レストラン</div>
			</div>
			<div class="accordion__content">
				<div class="f-box2">
					<div class="f-item order2">
						<h3 class="caption">湖畔の四季を満喫しながらお食事を</h3>
						<p>館内にある湖に面したレストラン。美しい景色が楽しめる開放感あふれる空間です。<br>
							旬の食材を使用した料理をお楽しみいただけます。</p>
						<p class="text-c"><a href="https://hakuryuko-resort.co.jp/restaurant/" class="btn btn-main">詳しくはこちら</a></p>
					</div>
					<div class="f-item order1">
						<p class="text-c"><img src="https://hakuryuko-resort.co.jp/wp-content/uploads/2022/01/home_restaurant.jpg" alt=""></p>
					</div>
				</div>
			</div>
		</section>

		<section class="section">
			<div class="js-accordion-title">
				<h2 class="title"><span>Access</span></h2>
				<div class="sub-title">アクセス</div>
			</div>
			<div class="accordion__content">
				<h3 class="text-c">広島県央の白竜湖畔にてお待ちしています</h3>
				<p class="text-c"><strong>【お車でお越し場合】</strong><br>
					山陽自動車道河内ICより約25分、三原・久井ICより約20分。<br>
					広島空港より車で約20分。<br><br>
					<strong>【JRをご利用の場合】</strong><br>
					山陽本線河内駅下車。タクシーで約8分。
				<p>
				<div class="gmap">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3287.9231151111567!2d132.89309231526147!3d34.50483340119066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3550f57d0015c701%3A0xb1ca0ffb41414f3f!2z55m956uc5rmW44Oq44K-44O844OI!5e0!3m2!1sja!2sjp!4v1642381293227!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
		</section>

		<section class="section">
			<div class="js-accordion-title">
				<h2 class="title"><span>Tourist</span></h2>
				<div class="sub-title">観光情報</div>
			</div>
			<div class="accordion__content">
				<div class="f-box2">
					<div class="f-item order2">
						<h3 class="caption">四季折々 自然の恵みと共に…</h3>
						<p>自然に囲まれた当館の周辺には恵まれた自然を活かした観光スポットがたくさんあります。リラックス&リフレッシュに最適です。<br>
							また、当館は広島県のほぼ中央に位置していますので、宮島、呉、竹原、大久野島、尾道など広島観光の基地として宿泊される方もおられます。</p>
						<p class="text-c"><a href="https://hakuryuko-resort.co.jp/tourist/" class="btn btn-main">詳しくはこちら</a></p>
					</div>
					<div class="f-item order1">
						<p class="text-c"><img src="https://hakuryuko-resort.co.jp/wp-content/uploads/2022/02/home_tourist.jpg" alt=""></p>
					</div>
				</div>
			</div>
		</section>


		<section class="section">
			<div class="home-recruit-area innerS">
				<h2 class="title">Recruit</h2>
				<div class="sub-title">求人情報</div>
				<p class="text-c"><img src="https://hakuryuko-resort.co.jp/wp-content/uploads/2022/02/bnr_recruit.jpg" alt="求人イメージ" class="img70"></p>
				<h3 class="caption">わたしたちと一緒に働きませんか?</h3>
				<!-- <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています</p> -->
				<p class="text-c"><a href="https://hakuryuko-resort.co.jp/recruit/" class="btn btn-main">詳しくはこちら</a></p>
			</div>
		</section>


	</main><!-- #main -->
</div><!-- #primary -->

<?php if ('3-column' !== get_theme_mod('businesspress_content')) : ?>
	<?php get_sidebar(); ?>
<?php endif; ?>
<?php get_footer(); ?>