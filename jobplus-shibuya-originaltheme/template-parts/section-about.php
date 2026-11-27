<!-- section-about.php -->
<?php
$about_assets = [
	'balloon'           => lg_get_img_uri('/ジョブぷらす渋谷_風船02.svg'),
	'intro_bg_pc'       => lg_get_img_uri('/ジョブぷらす渋谷_木目_背景画像02PC.png'),
	'intro_bg_sp'       => lg_get_img_uri('/ジョブぷらす渋谷_木目_背景画像02_SP.png'),
	'intro_bg_sp_small' => lg_get_img_uri('/ジョブぷらす渋谷_木目_背景画像SP.png'),
];
?>

<section class="p-about" id="job">
	<div class="l-container p-about__inner" data-aos="fade-up" data-aos-duration="1000">

		<header
			class="p-about__hero"
			style="
				--about-balloon-image: url('<?= esc_url($about_assets['balloon']); ?>');
			">
			<h1 class="p-about__hero-title">
				<span class="p-about__hero-title-text c-underline-2">
					働くことへの不安がある<br>ジョブぷらす渋谷にお任せください！
				</span>
			</h1>
		</header>

		<div
			class="p-about__hero-panel c-text-box"
			style="
				--about-intro-bg-pc: url('<?= esc_url($about_assets['intro_bg_pc']); ?>');
				--about-intro-bg-sp: url('<?= esc_url($about_assets['intro_bg_sp']); ?>');
				--about-intro-bg-sp-small: url('<?= esc_url($about_assets['intro_bg_sp_small']); ?>');
			">

			<div class="p-about__hero-content">
				<p class="p-about__hero-lead">
					「はたらく」が、ちょっと楽しくなるジョブぷらす渋谷。<br>
					経験がなくても、ブランクがあっても大丈夫。<br>
					あなたの“はたらきたい”を一緒にサポートします。<br>
					今日の小さな成功が、明日の自信に。<br>
					成長を感じられるジョブぷらす渋谷で、一緒に働いてみませんか？
				</p>
			</div>

			<div class="p-about__hero-actions c-btn-area-about c-btn-area-about-top">
				<a class="c-btn c-btn--primary p-about__hero-button" href="#contact-form">
					お問い合わせ・見学受付は<br>こちらをクリック
				</a>
			</div>
		</div>

		<!-- A型作業所 -->
		<div id="A-gata" class="l-container" data-aos="fade" data-aos-duration="1000">

			<div class="c-section-title c-section-title__y">
				<h2 class="c-section-title__text">就労継続支援A型</h2>
			</div>

			<div class="c-media">
				<div class="c-media__text">
					<p>
						就労継続支援A型は、障害や難病のある方が雇用契約を結んで働くことができる福祉サービスです。<br>
						一般企業で働くのがまだ難しい方に、働く場と必要なサポートを提供しながら、将来的な一般就労を目指すことを目的としています。<br>
					</p>
				</div>
			</div>
		</div>

		<!-- 施設内作業 -->
		<div class="l-container" data-aos="fade" data-aos-duration="1000">
			<h2 class="p-about__title">
				<img
					src="<?= esc_url(lg_get_img_uri('/ジョブプラス渋谷_施設内でのお仕事.svg')); ?>"
					alt="出品代行">
			</h2>

			<div class="c-media">
				<div class="c-media__img">
					<img
						src="<?= esc_url(lg_get_img_uri('/ジョブプラス渋谷_出品代行_イラスト.png')); ?>"
						alt="出品代行イラスト">
				</div>

				<div class="c-media__text">
					<p>
						人気のフリマアプリを使用して検品、採寸、撮影、発送を行います。<br>
						その他、さまざまな軽作業を行っています。
					</p>
				</div>
			</div>
		</div>

		<!-- 施設外就労 -->
		<div class="l-container" data-aos="fade" data-aos-duration="1000">
			<h2 class="p-about__title">
				<img
					src="<?= esc_url(lg_get_img_uri('/ジョブプラス渋谷_施設外就労でのお仕事.svg')); ?>"
					alt="施設外就労">
			</h2>

			<div class="c-media c-media--reverse">
				<div class="c-media__img">
					<img
						src="<?= esc_url(lg_get_img_uri('/ジョブプラス渋谷_施設外就労_イラスト.png')); ?>"
						alt="施設外就労">
				</div>

				<div class="c-media__text">
					<p>
						ジョブぷらす渋谷と連携した企業様へ訪問し、作業を行います。<br>
						※詳しい作業内容についてはお気軽にお問い合わせください。
					</p>
				</div>
			</div>
		</div>

		<!-- 就労定着支援 -->
		<div id="state" class="l-container" data-aos="fade" data-aos-duration="1000">
			<div class="c-section-title c-section-title__b">
				<h2 class="c-section-title__text">就労定着支援</h2>
			</div>

			<div class="c-media">
				<div class="c-media__img">
					<img
						src="<?= esc_url(lg_get_img_uri('/ジョブプラス渋谷_定着支援イラスト.png')); ?>"
						alt="就労定着支援イラスト">
				</div>

				<div class="c-media__text">
					<p>
						一般企業への就労後も、安心して長く働き続けられるように、職場や生活に関する不安をサポートします。<br>
						就労定着支援サービスをご利用いただくことで、最長3年間にわたり長期的な支援を提供いたします。
					</p>
				</div>
			</div>
		</div>

		<!-- 就労選択支援 -->
		<div id="choice" class="l-container" data-aos="fade" data-aos-duration="1000">
			<div class="c-section-title c-section-title__y">
				<h2 class="c-section-title__text">就労選択支援</h2>
			</div>

			<div class="c-media c-media--reverse">
				<div class="c-media__img">
					<img
						src="<?= esc_url(lg_get_img_uri('/ジョブプラス渋谷_就労選択支援イラスト.png')); ?>"
						alt="就労定着支援イラスト">
				</div>

				<div class="c-media__text">
					<p>
						障害のある方が、自分に合った働き方や就労先を選択できるよう支援するサービスです。<br>
						ご希望や強み、適性を丁寧に整理し、就労継続支援Ａ・Ｂ型や就労移行支援など、さまざまな就労支援サービスや働き方の中から、主体的に選べるよう支援します。<br>
						「自分らしく働く」を実現するための第一歩を、一緒に考えていきます。
					</p>
				</div>
			</div>
		</div>

		<!-- みなさんの安心のために -->
		<div class="l-container" data-aos="fade" data-aos-duration="1000">
			<div class="c-section-title c-section-title__b">
				<h2 class="c-section-title__text">みなさんの安心のために</h2>
			</div>

			<div class="c-media">
				<div class="c-media__img">
					<img
						src="<?= esc_url(lg_get_img_uri('/皆さんの安心のためにイラスト.png')); ?>"
						alt="皆さんの安心のためにイラスト">
				</div>

				<div class="c-media__text">
					<p>
						はじめての場所、はじめてのお仕事。
						「ちゃんと通えるかな」「人とうまくやれるかな」――そんな不安を抱えている方も多いと思います。

						私たちは、「ジョブぷらす渋谷なら大丈夫」って思っていただけるよう、安心できる環境づくりを何より大切にしています。

						ひとりひとりの気持ちやペースに寄りそって、ムリなく少しずつ「はたらくこと」に慣れていけるよう、スタッフみんなでサポートします。
					</p>
				</div>
			</div>
		</div>

	</div>

	<?php get_template_part('template-parts/section-employment-results'); ?>
</section>