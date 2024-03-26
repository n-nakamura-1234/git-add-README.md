<?php get_header(); ?>

<?php if (!post_password_required($post->ID)) :  ?>
	<section>
		<h2 id="day" class="title">部屋</h2>
		<p class="sub-title">Room</p>
		<div class="gallery-photo-group gallery-photo-group--3col">
			<?php
			$page_id = get_page_by_path('/gallery/gallery-room');
			$page_id = $page_id->ID;
			$photo_list = SCF::get('gallery-room_top', $page_id);
			$img_url = $photo_list[0]['gallery-room_top-img'];
			if ($img_url !== '') :
				foreach ($photo_list as $item) :
					$itemUrl = wp_get_attachment_image_src($item['gallery-room_top-img'], 'full');
					if ($itemUrl !== '') :
			?>
						<div class="gallery-photo-group__item">
							<div class="gallery-photo-group__img-box">
								<a href="<?php echo $itemUrl[0]; ?>" data-lightbox="room" data-title="<?php echo $item['gallery-room_top-text']; ?>">
									<img class="gallery-photo-group__img" src="<?php echo $itemUrl[0]; ?>" alt="">
								</a>
							</div>
							<p class="gallery-photo-group__text js-textTrim">
								<?php echo $item['gallery-room_top-text']; ?>
							</p>
						</div>
			<?php
					endif;
				endforeach;
			endif;
			?>
		</div>
		<div class="gallery-photo-group gallery-photo-group--5col">
			<?php
			$page_id = get_page_by_path('/gallery/gallery-room');
			$page_id = $page_id->ID;
			$photo_list = SCF::get('gallery-room', $page_id);
			foreach ($photo_list as $item) :
				$itemUrl = wp_get_attachment_image_src($item['gallery-room_img'], 'full');
				if ($itemUrl !== '') :
			?>
					<div class="gallery-photo-group__item">
						<div class="gallery-photo-group__img-box">
							<a href="<?php echo $itemUrl[0]; ?>" data-lightbox="room" data-title="<?php echo $item['gallery-room_text']; ?>">
								<img class="gallery-photo-group__img" src="<?php echo $itemUrl[0]; ?>" alt="">
							</a>
						</div>
						<p class="gallery-photo-group__text js-textTrim">
							<?php echo $item['gallery-room_text']; ?>
						</p>
					</div>
			<?php
				endif;
			endforeach; ?>
		</div>
	</section>

	<!-- 風呂 -->
	<section>
		<h2 id="day" class="title">風呂・貸切風呂</h2>
		<p class="sub-title">Bath Room</p>
		<div class="gallery-photo-group gallery-photo-group--3col">
			<?php
			$page_id = get_page_by_path('/gallery/gallery-bath');
			$page_id = $page_id->ID;
			$photo_list = SCF::get('gallery-bath_top', $page_id);
			foreach ($photo_list as $item) :
				$itemUrl = wp_get_attachment_image_src($item['gallery-bath_top-img'], 'full');
				if ($itemUrl !== '') :
			?>
					<div class="gallery-photo-group__item">
						<div class="gallery-photo-group__img-box">
							<a href="<?php echo $itemUrl[0]; ?>" data-lightbox="bath" data-title="<?php echo $item['gallery-bath_top-text']; ?>">
								<img class="gallery-photo-group__img" src="<?php echo $itemUrl[0]; ?>" alt="">
							</a>
						</div>
						<p class="gallery-photo-group__text js-textTrim">
							<?php echo $item['gallery-bath_top-text']; ?>
						</p>
					</div>
			<?php
				endif;
			endforeach; ?>
		</div>
		<div class="gallery-photo-group gallery-photo-group--5col">
			<?php
			$page_id = get_page_by_path('/gallery/gallery-bath');
			$page_id = $page_id->ID;
			$photo_list = SCF::get('gallery-bath', $page_id);
			$img_url = $photo_list[0]['gallery-bath_img'];
			if ($img_url !== '') :
				foreach ($photo_list as $item) :
					$itemUrl = wp_get_attachment_image_src($item['gallery-bath_img'], 'full');
					if ($itemUrl !== '') :
			?>
						<div class="gallery-photo-group__item">
							<div class="gallery-photo-group__img-box">
								<a href="<?php echo $itemUrl[0]; ?>" data-lightbox="bath" data-title="<?php echo $item['gallery-bath_text']; ?>">
									<img class="gallery-photo-group__img" src="<?php echo $itemUrl[0]; ?>" alt="">
								</a>
							</div>
							<p class="gallery-photo-group__text js-textTrim">
								<?php echo $item['gallery-bath_text']; ?>
							</p>
						</div>
			<?php
					endif;
				endforeach;
			endif;
			?>
		</div>
	</section>

	<!-- 料理 -->
	<section>
		<h2 id="day" class="title">料理</h2>
		<p class="sub-title">Menu</p>
		<div class="gallery-photo-group gallery-photo-group--3col">
			<?php
			$page_id = get_page_by_path('/gallery/gallery-menu');
			$page_id = $page_id->ID;
			$photo_list = SCF::get('gallery-menu_top', $page_id);
			foreach ($photo_list as $item) :
				$itemUrl = wp_get_attachment_image_src($item['gallery-menu_top-img'], 'full');
				if ($itemUrl !== '') :
			?>
					<div class="gallery-photo-group__item">
						<div class="gallery-photo-group__img-box">
							<a href="<?php echo $itemUrl[0]; ?>" data-lightbox="menu" data-title="<?php echo $item['gallery-menu_top-text']; ?>">
								<img class="gallery-photo-group__img" src="<?php echo $itemUrl[0]; ?>" alt="">
							</a>
						</div>
						<p class="gallery-photo-group__text js-textTrim">
							<?php echo $item['gallery-menu_top-text']; ?>
						</p>
					</div>
			<?php
				endif;
			endforeach; ?>
		</div>
		<div class="gallery-photo-group gallery-photo-group--5col">
			<?php
			$page_id = get_page_by_path('/gallery/gallery-menu');
			$page_id = $page_id->ID;
			$photo_list = SCF::get('gallery-menu', $page_id);
			foreach ($photo_list as $item) :
				$itemUrl = wp_get_attachment_image_src($item['gallery-menu_img'], 'full');
				if ($itemUrl !== '') :
			?>
					<div class="gallery-photo-group__item">
						<div class="gallery-photo-group__img-box">
							<a href="<?php echo $itemUrl[0]; ?>" data-lightbox="menu" data-title="<?php echo $item['gallery-menu_text']; ?>">
								<img class="gallery-photo-group__img" src="<?php echo $itemUrl[0]; ?>" alt="">
							</a>
						</div>
						<p class="gallery-photo-group__text js-textTrim">
							<?php echo $item['gallery-menu_text']; ?>
						</p>
					</div>
			<?php
				endif;
			endforeach; ?>
		</div>
	</section>

	<!-- 施設 -->
	<section>
		<h2 id="day" class="title">施設</h2>
		<p class="sub-title">Facility</p>
		<div class="gallery-photo-group gallery-photo-group--3col">
			<?php
			$page_id = get_page_by_path('/gallery/gallery-facility');
			$page_id = $page_id->ID;
			$photo_list = SCF::get('gallery-facility_top', $page_id);
			foreach ($photo_list as $item) :
				$itemUrl = wp_get_attachment_image_src($item['gallery-facility_top-img'], 'full');
				if ($itemUrl !== '') :
			?>
					<!-- 
							test
							<?php var_dump($img_url); ?>
							-->
					<div class="gallery-photo-group__item">
						<div class="gallery-photo-group__img-box">
							<a href="<?php echo $itemUrl[0]; ?>" data-lightbox="facility" data-title="<?php echo $item['gallery-facility_top-text']; ?>">
								<img class="gallery-photo-group__img" src="<?php echo $itemUrl[0]; ?>" alt="">
							</a>
						</div>
						<p class="gallery-photo-group__text js-textTrim">
							<?php echo $item['gallery-facility_top-text']; ?>
						</p>
					</div>
			<?php
				endif;
			endforeach;
			?>
		</div>
		<div class="gallery-photo-group gallery-photo-group--5col">
			<?php
			$page_id = get_page_by_path('/gallery/gallery-facility');
			$page_id = $page_id->ID;
			$photo_list = SCF::get('gallery-facility', $page_id);
			$img_url = $photo_list[0]['gallery-facility_img'];
			if ($img_url !== '') :
				foreach ($photo_list as $item) :
					$itemUrl = wp_get_attachment_image_src($item['gallery-facility_img'], 'full');
					if ($itemUrl !== '') :
			?>
						<div class="gallery-photo-group__item">
							<div class="gallery-photo-group__img-box">
								<a href="<?php echo $itemUrl[0]; ?>" data-lightbox="facility" data-title="<?php echo $item['gallery-facility_text']; ?>">
									<img class="gallery-photo-group__img" src="<?php echo $itemUrl[0]; ?>" alt="">
								</a>
							</div>
							<p class="gallery-photo-group__text js-textTrim">
								<?php echo $item['gallery-facility_text']; ?>
							</p>
						</div>
			<?php
					endif;
				endforeach;
			endif;
			?>
		</div>
	</section>

	<!-- 外観 -->
	<section>
		<h2 id="day" class="title">外観</h2>
		<p class="sub-title">Exterior</p>
		<div class="gallery-photo-group gallery-photo-group--3col">
			<?php
			$page_id = get_page_by_path('/gallery/gallery-exterior');
			$page_id = $page_id->ID;
			$photo_list = SCF::get('gallery-exterior_top', $page_id);
			foreach ($photo_list as $item) :
				$itemUrl = wp_get_attachment_image_src($item['gallery-exterior_top-img'], 'full');
				if ($itemUrl !== '') :
			?>
					<div class="gallery-photo-group__item">
						<div class="gallery-photo-group__img-box">
							<a href="<?php echo $itemUrl[0]; ?>" data-lightbox="exterior" data-title="<?php echo $item['gallery-exterior_top-text']; ?>">
								<img class="gallery-photo-group__img" src="<?php echo $itemUrl[0]; ?>" alt="">
							</a>
						</div>
						<p class="gallery-photo-group__text js-textTrim">
							<?php echo $item['gallery-exterior_top-text']; ?>
						</p>
					</div>
			<?php
				endif;
			endforeach; ?>
		</div>
		<div class="gallery-photo-group gallery-photo-group--5col">
			<?php
			$page_id = get_page_by_path('/gallery/gallery-exterior');
			$page_id = $page_id->ID;
			$photo_list = SCF::get('gallery-exterior', $page_id);
			$img_url = $photo_list[0]['gallery-exterior_img'];
			if ($img_url !== '') :
				foreach ($photo_list as $item) :
					$itemUrl = wp_get_attachment_image_src($item['gallery-exterior_img'], 'full');
					if ($itemUrl !== '') :
			?>
						<div class="gallery-photo-group__item">
							<div class="gallery-photo-group__img-box">
								<a href="<?php echo $itemUrl[0]; ?>" data-lightbox="exterior" data-title="<?php echo $item['gallery-exterior_text']; ?>">
									<img class="gallery-photo-group__img" src="<?php echo $itemUrl[0]; ?>" alt="">
								</a>
							</div>
							<p class="gallery-photo-group__text js-textTrim">
								<?php echo $item['gallery-exterior_text']; ?>
							</p>
						</div>
			<?php
					endif;
				endforeach;
			endif;
			?>
		</div>
	</section>

	<!-- 周辺・景観 -->
	<section>
		<h2 id="day" class="title">周辺</h2>
		<p class="sub-title">Scenery</p>
		<div class="gallery-photo-group gallery-photo-group--3col">
			<?php
			$page_id = get_page_by_path('/gallery/gallery-scenery');
			$page_id = $page_id->ID;
			$photo_list = SCF::get('gallery-scenery_top', $page_id);
			foreach ($photo_list as $item) :
				$itemUrl = wp_get_attachment_image_src($item['gallery-scenery_top-img'], 'full');
				if ($itemUrl !== '') :
			?>
					<div class="gallery-photo-group__item">
						<div class="gallery-photo-group__img-box">
							<a href="<?php echo $itemUrl[0]; ?>" data-lightbox="scenery" data-title="<?php echo $item['gallery-scenery_top-text']; ?>">
								<img class="gallery-photo-group__img" src="<?php echo $itemUrl[0]; ?>" alt="">
							</a>
						</div>
						<p class="gallery-photo-group__text js-textTrim">
							<?php echo $item['gallery-scenery_top-text']; ?>
						</p>
					</div>
			<?php
				endif;
			endforeach; ?>
		</div>
		<div class="gallery-photo-group gallery-photo-group--5col">
			<?php
			$page_id = get_page_by_path('/gallery/gallery-scenery');
			$page_id = $page_id->ID;
			$photo_list = SCF::get('gallery-scenery', $page_id);
			$img_url = $photo_list[0]['gallery-scenery_img'];
			if ($img_url !== '') :
				foreach ($photo_list as $item) :
					$itemUrl = wp_get_attachment_image_src($item['gallery-scenery_img'], 'full');
					if ($itemUrl !== '') :
			?>
						<div class="gallery-photo-group__item">
							<div class="gallery-photo-group__img-box">
								<a href="<?php echo $itemUrl[0]; ?>" data-lightbox="scenery" data-title="<?php echo $item['gallery-scenery_text']; ?>">
									<img class="gallery-photo-group__img" src="<?php echo $itemUrl[0]; ?>" alt="">
								</a>
							</div>
							<p class="gallery-photo-group__text js-textTrim">
								<?php echo $item['gallery-scenery_text']; ?>
							</p>
						</div>
			<?php
					endif;
				endforeach;
			endif;
			?>
		</div>
	</section>
	<script>
		function textTrim() {
			// テキストをトリミングする要素
			var selector = document.getElementsByClassName('js-textTrim');

			// 表示したい行数
			var row = 2;

			// 文末に追加したい文字
			var clamp = '…';

			for (i = 0; i < selector.length; i++) {
				//CSSプロパティを取得
				var style = window.getComputedStyle(selector[i]);
				var fontsize = parseFloat(style.fontSize); //font-sizeを取得
				var width = parseFloat(style.width); //widthを取得
				var letterSpacing = parseFloat(style.letterSpacing); //letter-spacingを取得

				// 収まる文字数を計算
				var wordCount = Math.floor(width / fontsize) * row;

				// letter-spacingも含めて計算する場合
				// var wordCount = Math.floor(width / (fontsize + letterSpacing)) * row;

				// 文字数を超えたら
				if (selector[i].innerText.length > wordCount) {
					var str = selector[i].innerText; //文字数を取得
					str = str.substr(0, (wordCount - 1)); //1文字削る
					selector[i].innerText = str + clamp; //文末にテキストを足す
				}
			}
		}
		textTrim();
	</script>
<?php else :  ?>
	<?php echo get_the_password_form(); ?>
<?php endif;  ?>
<?php get_footer(); ?>