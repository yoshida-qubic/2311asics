<?php
$inquiry = htmlspecialchars($_POST['inquiry'], ENT_QUOTES, "utf-8");
$name = htmlspecialchars($_POST['name'], ENT_QUOTES, "utf-8");
$email = htmlspecialchars($_POST['mail'], ENT_QUOTES, "utf-8");
$phone = htmlspecialchars($_POST['tel'], ENT_QUOTES, "utf-8");
$message = htmlspecialchars($_POST['msg'], ENT_QUOTES, "utf-8");
?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<!-- トップページの場合 <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#"> -->
	<!-- 記事の場合 <head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# article: https://ogp.me/ns/article#"> -->

	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no">
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-P9WC2JC');</script>
	<!-- End Google Tag Manager -->
	<title>playsure｜お問い合わせ内容確認</title>

	<!-- ファビコン -->
	<link rel="shortcut icon" href="./images/favicon.ico" />
	<link rel="apple-touch-icon" href="./images/favicon.ico" />
	<!-- ファビコン -->

	<!-- メタタグ -->
	<meta name="description" content="">
	<!-- メタタグ -->

	<!-- OGP設定 -->
	<!-- <meta property="og:url" content="ページの URL" /> -->
	<!-- TOPページの場合は「website」、WEBサイト上の記事ページなど、TOPページ以外には「article」 -->
	<!-- <meta property="og:type" content="ページの種類" />  -->
	<!-- <meta property="og:title" content="ページの タイトル" /> -->
	<!-- <meta property="og:description" content="ページのディスクリプション" /> -->
	<!-- <meta property="og:site_name" content="サイト名" /> -->
	<!-- <meta property="og:image" content="サムネイル画像の URL" /> -->
	<!-- FacebookのOGP設定 -->
	<!-- <meta property="fb:app_id" content="FacebookアプリID">  -->
	<!-- Summary・summary_large_image -->
	<!-- <meta name="twitter:card" content="カードの種類" />  -->
	<!-- <meta name="twitter:site" content="@ユーザー名" /> -->
	<!-- OGP設定 -->

	<!-- Googleフォント読み込み -->

	<!-- Googleフォント読み込み -->

	<!-- CSS読み込み -->
	<link rel="stylesheet" href="./style.css">
	<link rel="stylesheet" href="./css/desktop.css" media="screen and (min-width: 768px)">
	<link rel="stylesheet" href="./css/tab.css" media="screen and (min-width: 768px) and (max-width: 1025px)">
	<link rel="stylesheet" href="./css/smart.css" media="screen and (max-width: 767px)">
	<!-- CSS読み込み -->

	<!-- JS読み込み -->
	<script defer src="./js/all.min.js"></script>
	<!-- JS読み込み -->

	<!--[if lt IE 9]>
	<script type="text/javascript" src="./js/selectivizr-min.js" defer></script>
	<script type="text/javascript" src="./js/html5shiv.min.js" defer></script>
	<![endif]-->
</head>

<body class="preload">
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9WC2JC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<div id="wrapper">
		<main>
			<header>
				<div class="header_in">
					<p class="logo">
						<a href="./">
							<img src="./images/common/logo.png" alt="playsure" id="header_logo">
						</a>
					</p>
					<nav>
						<ul>
							<li>
								<a href="./">保険事業</a>
							</li>
							<li>
								<a href="./">サステナビリティ事業</a>
							</li>
							<li>
								<a href="./">会社概要</a>
							</li>
							<li>
							<li>
								<a href="./">news</a>
							</li>
							<li>
								<a href="./contact.html">お問い合わせ</a>
							</li>
						</ul>
					</nav>
					<div class="menu_open is_sp" id="menu_open">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
			</header>
			<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ お問い合わせ01 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
			<section class="contact01">
				<div class="m_container">
					<div class="box">
						<h1>お問い合わせ</h1>
					</div>
				</div>
			</section>
			<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ お問い合わせ01 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->

			<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ お問い合わせ02 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
			<div class="contact02 section">
				<div class="m_container">
					<ul class="flow">
						<li><span class="txt">情報入力</span></li>
						<li class="current"><span class="txt">内容確認</span></li>
						<li><span class="txt">お問い合わせ完了</span></li>
					</ul>

					<form action="./mail.php" method="post">
						<p class="txt01">このフォームはアシックス・プレイシュア株式会社に関するお問い合わせの際に、ご利⽤ください。</p>
						<div class="item">
							<div class="inner"><label for="inquiry">1. *お問い合わせの内容を下記よりお選びください</label></div>
							<div class="inner confirm">
								<p><?php echo $inquiry; ?></p>
							</div>
						</div>
						<div class="item">
							<div class="inner"><label for="name">2. *お名前</label></div>
							<div class="inner confirm">
								<p><?php echo $name; ?></p>
							</div>
						</div>
						<div class="item">
							<div class="inner"><label for="mail">3. *メールアドレス</label></div>
							<div class="inner confirm">
								<p><?php echo $email; ?></p>
							</div>
						</div>
						<div class="item">
							<div class="inner"><label for="tel">4. 電話</label></div>
							<div class="inner confirm">
								<p><?php echo $phone; ?></p>
							</div>
						</div>
						<div class="item">
							<div class="inner">
								<label for="msg">5. *ご質問・ご相談</label>
							</div>
							<div class="inner confirm">
								<p><?php echo $message; ?></p>
							</div>
						</div>

						<div class="privacy">
							<label for="privacy_check">
								<input type="checkbox" name="privacy_check" id="privacy_check" class="checkbox_input" required checked disabled="disabled">
								<span class="checkbox_parts">*アシックス・プレイシュア株式会社が個⼈情報をプライバシーポリシーに定める利⽤⽬的の(1)、(2)、(3)、(4)に従い、アシックスグループにおいて利⽤することに同意します。</span>
							</label>
						</div>

						<input type="hidden" name="inquiry" value="<?php echo $inquiry; ?>">
						<input type="hidden" name="name" value="<?php echo $name; ?>">
						<input type="hidden" name="mail" value="<?php echo $email; ?>">
						<input type="hidden" name="tel" value="<?php echo $phone; ?>">
						<input type="hidden" name="msg" value="<?php echo $message; ?>">

						<div class="btn_wrap">
							<button type="button" onclick="history.back();">
								戻る<span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="9.71" height="16" viewBox="0 0 9.71 16">
										<path id="chevron-right-solid" d="M36.947,46.279,29.826,53.4a.879.879,0,0,1-1.244,0l-.831-.831a.879.879,0,0,1,0-1.242l5.643-5.67-5.643-5.67a.879.879,0,0,1,0-1.242l.831-.831a.879.879,0,0,1,1.244,0l7.121,7.121A.879.879,0,0,1,36.947,46.279Z" transform="translate(-27.494 -37.657)" fill="#001e62" />
									</svg></span>
							</button>
							<button type="submit">
								送信する<span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="9.71" height="16" viewBox="0 0 9.71 16">
										<path id="chevron-right-solid" d="M36.947,46.279,29.826,53.4a.879.879,0,0,1-1.244,0l-.831-.831a.879.879,0,0,1,0-1.242l5.643-5.67-5.643-5.67a.879.879,0,0,1,0-1.242l.831-.831a.879.879,0,0,1,1.244,0l7.121,7.121A.879.879,0,0,1,36.947,46.279Z" transform="translate(-27.494 -37.657)" fill="#fffeff" />
									</svg></span>
							</button>
						</div>

					</form>
				</div>
			</div>
			<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ お問い合わせ02 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->
		</main>
		<footer>
			<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ フッター ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
			<div class="container">
				<div class="footer_inner">
					<ul>
						<li>
							<a href="https://www.asics.com/jp/ja-jp/mk/playsure/privacy" target="_blank">プライバシーポリシー</a>
						</li>
						<li>
							<a href="https://www.asics.com/jp/ja-jp/mk/playsure/kanyu" target="_blank">勧誘方針</a>
						</li>
						<li>
							<a href="https://playsure.asics.com" target="_blank">アシックス・プレイシュアTOP</a>
						</li>
						<li>
							<a href="https://www.asics.com/jp/ja-jp/" target="_blank">アシックスオンラインTOP</a>
						</li>
						<li>
							<a href="https://corp.asics.com/jp" target="_blank">ASICS CORPORATION TOP</a>
						</li>
					</ul>
					<p class="copyright">&copy;ASICS playsure corporation. All Rights Reserved.</p>
				</div>
			</div>
			<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ フッター ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->
		</footer>
	</div>
	<!-- JS読み込み -->
	<script src="./js/jquery-3.2.1.min.js" defer></script>
	<script src="./js/ofi.min.js"></script> <!-- defer つけるとコンソールエラー出る -->
	<script src="./js/picturefill.min.js" defer></script>
	<script src="./js/myscript.js" defer></script>
	<script>
		objectFitImages();
	</script> <!-- defer つけるとコンソールエラー出る -->
	<!-- JS読み込み -->

</body>

</html>