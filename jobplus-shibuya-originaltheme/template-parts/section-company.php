<!-- section-company.php -->
<section class="p-company" id="company">
    <div class="l-container">

        <div class="p-company__head">
            <div class="c-section-title c-section-title--company">
                <h2 class="c-section-title__text">会社概要</h2>
            </div>

            <p class="p-company__lead">
                施設情報や公開資料を掲載しています。見学やご相談をご希望の方は、ページ下部のお問い合わせよりご連絡ください。
            </p>
        </div>

        <div class="p-company__body">
            <!-- 会社概要 -->
            <section class="c-company-summary">
                <h3 class="c-company-summary__title">施設情報</h3>

                <dl class="c-company-data">
                    <div class="c-company-data__item">
                        <dt>事業所名</dt>
                        <dd>ジョブぷらす渋谷</dd>
                    </div>

                    <div class="c-company-data__item">
                        <dt>会社名</dt>
                        <dd>株式会社シャンカラ</dd>
                    </div>

                    <div class="c-company-data__item">
                        <dt>住所</dt>
                        <dd>東京都渋谷区初台1-49-1<br>第30田中ビル4階</dd>
                    </div>

                    <div class="c-company-data__item">
                        <dt>電話番号</dt>
                        <dd>03-6276-1312</dd>
                    </div>

                    <div class="c-company-data__item">
                        <dt>メールアドレス</dt>
                        <dd>a.jobplusshibuya@gmail.com</dd>
                    </div>

                    <div class="c-company-data__item">
                        <dt>営業時間</dt>
                        <dd>9:00～17:00</dd>
                    </div>

                    <div class="c-company-data__item">
                        <dt>休業日</dt>
                        <dd>日・祝日・夏季休暇・年末年始<br><span>（土曜日は会社カレンダーにより休業します）</span></dd>
                    </div>
                </dl>
            </section>

            <!-- 公開資料 -->
            <?php
            $pdf_uri = get_theme_file_uri('/pdf');

            $document_items = [
                [
                    'title' => 'スコア表',
                    'text'  => '施設の評価に関する資料をご確認いただけます。',
                    'file'  => '令和6年度_ジョブプラス渋谷_スコア表.pdf',
                ],
                [
                    'title' => 'スコア表（全体）',
                    'text'  => '全体版のスコア表をダウンロードできます。',
                    'file'  => '令和6年度_ジョブプラス渋谷_スコア表全体.pdf',
                ],
                [
                    'title' => '地域連携活動実施状況報告書',
                    'text'  => '地域連携活動の実施状況について掲載しています。',
                    'file'  => '令和6年度　地域連携活動実施状況報告書.pdf',
                ],
                [
                    'title' => '利用者の知識・能力向上に係る実施状況報告書',
                    'text'  => '利用者支援に関する取り組み内容をご確認いただけます。',
                    'file'  => '令和6年度_ジョブプラス渋谷_利用者の知識・能力向上に係る実施状況報告書.pdf',
                ],
            ];
            ?>

            <section class="c-company-documents">
                <h3 class="c-company-documents__title">公開資料</h3>

                <div class="c-document-list">
                    <?php foreach ($document_items as $document): ?>
                        <article class="c-document-card">
                            <div class="c-document-card__body">
                                <h4 class="c-document-card__title">
                                    <?= esc_html($document['title']); ?>
                                </h4>

                                <p class="c-document-card__text">
                                    <?= esc_html($document['text']); ?>
                                </p>
                            </div>

                            <div class="c-document-card__footer">
                                <a
                                    class="c-btn c-btn--download c-document-card__btn"
                                    href="<?= esc_url($pdf_uri . '/' . $document['file']); ?>"
                                    target="_blank"
                                    rel="noopener noreferrer">
                                    詳細を表示
                                </a>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </section>

            <!-- CTA -->
            <section class="c-company-cta">
                <h3 class="c-company-cta__title">見学・お問い合わせをご希望の方へ</h3>
                <p class="c-company-cta__text">
                    ご不明な点や見学のご相談は、お問い合わせフォームよりお気軽にご連絡ください。
                </p>

                <div class="c-company-cta__btn">
                    <a class="c-btn c-btn--primary" href="#contact-form">
                        お問い合わせ・見学受付はこちら
                    </a>
                </div>
            </section>

        </div>
    </div>
</section>