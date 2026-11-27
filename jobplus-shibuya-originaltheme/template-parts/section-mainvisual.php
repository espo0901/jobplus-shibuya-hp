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

		<div class="p-mainvisual__image">
			<img
				src="<?= esc_url(lg_get_img_uri('/p-mainvisual__image.png')); ?>"
				alt="メイン画像"
				data-aos="fade"
				data-aos-duration="1800"
			>
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