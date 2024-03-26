document.addEventListener("DOMContentLoaded", () => {
	const title = document.querySelectorAll(".js-accordion-title");

	for (let i = 0; i < title.length; i++) {
		let titleEach = title[i];
		let content = titleEach.nextElementSibling;
		titleEach.addEventListener("click", () => {
			titleEach.classList.toggle("is-active");
			content.classList.toggle("is-open");
		});
	}
});

jQuery(function ($) {
	$(".openbtn").click(function () {
		//ボタンがクリックされたら
		$(this).toggleClass("active"); //ボタン自身に activeクラスを付与し
		$("#g-nav").toggleClass("panelactive"); //ナビゲーションにpanelactiveクラスを付与
	});

	$("#g-nav a").click(function () {
		//ナビゲーションのリンクがクリックされたら
		$(".openbtn").removeClass("active"); //ボタンの activeクラスを除去し
		$("#g-nav").removeClass("panelactive"); //ナビゲーションのpanelactiveクラスも除去
	});
});

jQuery(function ($) {
	$(".fm-booking").click(function () {
		//ボタンがクリックされたら
		$(this).toggleClass("active"); //ボタン自身に activeクラスを付与し
		$(".search-panel-frame").toggleClass("panelactive"); //ナビゲーションにpanelactiveクラスを付与
	});
});

// jQuery(function ($) {
// 	$(".mv-slider").slick({
// 		// autoplay: true,
// 		arrows: false,
// 		pauseOnHover: false,
// 		fade: true,
// 		speed: 1500,
// 		autoplaySpeed: 2500,
// 		cssEase: "ease-in-out",
// 		asNavFor: ".content-slider"
// 	});
// });

// jQuery(function ($) {
// 	$(".content-slider").slick({
// 		// autoplay: true,
// 		arrows: false,
// 		pauseOnHover: false,
// 		fade: true,
// 		speed: 1500,
// 		autoplaySpeed: 2500,
// 		cssEase: "ease-in-out",
// 		slidesToShow: 1,
// 		asNavFor: ".mv-slider"

// 	});
// });
jQuery(function ($) {
	function checkBreakPoint() {
		w = $(window).width();
		if (w <= 767) {
			// スマホ向け（767px以下のとき）
			$('.mv-slider-sp').not('.slick-initialized').slick({
				arrows: false,
				pauseOnHover: false,
				fade: true,
				speed: 1500,
				cssEase: "ease-in-out",
				asNavFor: ".content-slider-sp"
			});
			$('.content-slider-sp').not('.slick-initialized').slick({
				autoplay: true,
				arrows: false,
				pauseOnHover: false,
				fade: true,
				speed: 1500,
				autoplaySpeed: 2500,
				cssEase: "ease-in-out",
				slidesToShow: 1,
				asNavFor: ".mv-slider-sp"
			});
			$('.mv-slider-pc.slick-initialized, .content-slider-pc.slick-initialized').slick('unslick');
		} else {
			// PC向け
			$('.mv-slider-pc').not('.slick-initialized').slick({
				arrows: false,
				pauseOnHover: false,
				fade: true,
				speed: 1500,
				cssEase: "ease-in-out",
				asNavFor: ".content-slider-pc"
			});
			$('.content-slider-pc').not('.slick-initialized').slick({
				autoplay: true,
				arrows: false,
				pauseOnHover: false,
				fade: true,
				speed: 1500,
				autoplaySpeed: 2500,
				cssEase: "ease-in-out",
				slidesToShow: 1,
				asNavFor: ".mv-slider-pc"
			});
			$('.mv-slider-sp.slick-initialized, .content-slider-sp.slick-initialized').slick('unslick');
		}
	}
	// ウインドウがリサイズする度にチェック
	$(window).resize(function () {
		checkBreakPoint();
	});
	// 初回チェック
	checkBreakPoint();

})
/* 電話リンク */
let ua = navigator.userAgent;
if (ua.indexOf("iPhone") < 0 && ua.indexOf("Android") < 0) {
	jQuery('a[href^="tel:"]')
		.css("cursor", "default")
		.on("click", function (e) {
			e.preventDefault();
		});
}
