<?php
// 年度更新時はここで就職者数・定着率・就職先を差し替えます。
$employment_results = [
	['year' => 2025, 'hires' => 4, 'retention' => 100],
	['year' => 2026, 'hires' => 6, 'retention' => 100],
];
$employment_industries = ['人材関連事業', 'IT', 'メディア事業', '情報通信', '行政関連', '警備', '農園'];
?>

<section id="employment-results" class="p-employment-results l-container" aria-labelledby="employment-results-title">
	<h2 id="employment-results-title" class="p-employment-results__title">
		ジョブぷらす渋谷から一般企業へ
		<span class="p-employment-results__title-emphasis" data-aos="employment-underline" data-aos-once="true" data-aos-offset="0">安定の就職実績</span>
	</h2>

	<div class="p-employment-results__years">
		<?php foreach ($employment_results as $result): ?>
			<div class="p-employment-results__card">
				<h3 class="p-employment-results__year"><?= esc_html((string) $result['year']); ?>年度</h3>
				<dl class="p-employment-results__metrics">
					<div>
						<dt>一般就職者数</dt>
						<dd><?= esc_html((string) $result['hires']); ?><span>名</span></dd>
					</div>
					<div>
						<dt>定着率</dt>
						<dd><?= esc_html((string) $result['retention']); ?><span>%</span></dd>
					</div>
				</dl>
			</div>
		<?php endforeach; ?>
	</div>

	<h3 class="p-employment-results__industries-title">主な就職先</h3>
	<ul class="p-employment-results__industries" role="list">
		<?php foreach ($employment_industries as $industry): ?>
			<li><?= esc_html($industry); ?></li>
		<?php endforeach; ?>
	</ul>
</section>
