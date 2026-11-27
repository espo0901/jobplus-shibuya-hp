<!-- section-mainvisual.php -->
<?php
	$service_buttons = [
		[
			'href' => '#A-gata',
			'label' => 'A型',
			'text' => 'について詳しくはこちら',
			'modifier' => 'is-agata',
		],
		[
			'href' => '#state',
			'label' => '定着支援',
			'text' => 'について詳しくはこちら',
			'modifier' => 'is-teichaku',
		],
		[
			'href' => '#choice',
			'label' => '就労選択支援',
			'text' => 'について詳しくはこちら',
			'modifier' => 'is-choice',
		],
	];
?>


<section class="p-mainvisual">
	<div class="p-mainvisual__inner">

		<div class="p-mainvisual__stage">
			<div class="p-mainvisual__image">
				<img
					src="<?= esc_url(lg_get_img_uri('/p-mainvisual__image.png')); ?>"
					alt="メイン画像"
					data-aos="fade"
					data-aos-duration="1800"
				>
			</div>

			<div class="p-mainvisual__bubbles">
				<div class="p-mainvisual__bubble p-mainvisual__bubble--visits">
					<p class="p-mainvisual__bubble-title">利用者募集！</p>
					<p>見学・体験受付中</p>
					<a class="p-mainvisual__bubble-link" href="#contact-form">お問合せ・見学受付はこちらから<span aria-hidden="true">▶</span></a>
				</div>
				<div class="p-mainvisual__bubble p-mainvisual__bubble--employment">
					<p class="p-mainvisual__bubble-title">一般就労を目指すならお任せください！</p>
					<p>一人ひとりの「働きたい」を形にします。</p>
					<a class="p-mainvisual__bubble-link" href="#employment-results">就職実績はこちらから</a>
				</div>
			</div>
		</div>

		<div class="p-mainvisual__message">
			<p class="p-mainvisual__lead">
				ジョブぷらす渋谷では<br>
				<span class="p-mainvisual__highlight">就労継続支援A型</span>・
				<span class="p-mainvisual__highlight">就労定着支援</span>・
				<span class="p-mainvisual__highlight">就労選択支援</span>
				サービスを提供しています。
			</p>

			<div class="p-mainvisual__buttons">
				<?php foreach ($service_buttons as $button) : ?>
					<a
						href="<?= esc_attr($button['href']); ?>"
						class="c-service-button <?= esc_attr($button['modifier']); ?>"
					>
						<span class="c-service-button__label">
							<?= esc_html($button['label']); ?>
						</span>
						<span class="c-service-button__text">
							<?= esc_html($button['text']); ?>
						</span>
					</a>
				<?php endforeach; ?>
			</div>
		</div>

	</div>
</section>