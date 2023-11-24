'use strict';

const w = $(window).width();
const spwidth = 767;
const tabletwidth = 1025;

{
	const openMenu = document.getElementById('menu_open');
	const Nav = document.querySelector('header nav');

	openMenu.addEventListener('click', function () {
		openMenu.classList.toggle('active');
		Nav.classList.toggle('active');
	});
}

// let endDate = new Date('2021/10/9 23:59:59'); // キャッシュ削除の最終日
// //カウントダウンタイマー関数
// function countdownTimer() {
// 	let nowDate = new Date(); //現在時間
// 	let period = endDate - nowDate; // 最終日から現在時間を引く（この時点ではミリ秒扱い）
// 	if (period >= 0) { //残り時間がある場合の処理
// 		$('link[href*="desktop"]').attr('href', './css/desktop.css?' + period);
// 		$('link[href*="tab"]').attr('href', './css/tab.css?' + period);
// 		$('link[href*="smart"]').attr('href', './css/smart.css?' + period);
// 		$('script[src*="myscript"]').attr('src', './js/myscript.js?' + period);
// 	}
// }
// countdownTimer(); // 上で作成したカウントダウンタイマーを実行


$(function () {

	//SP メニュー開閉時ロゴ切り替え
	$('#menu_open').on('click', function() {
		if($(this).hasClass('active')) {
			$('#header_logo').attr('src', './images/common/logo_w.png');
		} else {
			$('#header_logo').attr('src', './images/common/logo.png');
		}
	});



	$(".question").on('click', function () {
    //クリックしたjs-accordion-title以外の全てのopenを取る
    $(".question").not(this).removeClass("open");
    //クリックされたjs-accordion-title以外のcontentを閉じる
    $(".question").not(this).next().slideUp(300);
    //thisにopenクラスを付与
    $(this).toggleClass("open");
    //thisのcontentを展開、開いていれば閉じる
    $(this).next().slideToggle(300);
  });


});


$(window).on('load scroll', function () {

	//フェードイン
	$(".fadein").each(function () {
		const ePos = $(this).offset().top;
		const scroll = $(window).scrollTop();
		const windowHeight = $(window).height();
		if (scroll > ePos - windowHeight + windowHeight / 12) {
			$(this).addClass('active');
		}
	});

});
// 一番最後に記述
$("body").removeClass("preload");