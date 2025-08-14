<section class="p-mainvisual">

    <div class="p-mainvisual__image" style="margin-top:-20px;" >
		<img src="<?= get_theme_file_uri('/img/p-mainvisual__image2.webp'); ?>" alt="メイン画像" data-aos="fade" data-aos-duration="1800">
		
		<!--2025 6 16　変更↓-->
		<div class="p-mainvisual__mess" >
			<p>
				ジョブプラス渋谷では<br>就労継続支援A型&nbsp;と&nbsp;就労定着支援、両方のサービスを提供しています。
			</p>
			<div class="bottom-button-cover">
				<a href="#A-gata">
					<p class="bottom-button bottom-button-Agata">
						<span class="bottom-button-large-text">A型</span>&nbsp;について<br>詳しくはこちら
					</p>
				</a>
				<a href="#state">
					<p class="bottom-button bottom-button-Teichaku">
						<span class="bottom-button-large-text">定着支援</span>&nbsp;について<br>詳しくはこちら
					</p>
				</a>
			</div>
		</div><!--p-mainvisual__mess↑-->
		
		<style>
		/* ===== Base ===== */
		.p-mainvisual__mess {
		  position: absolute;
		  left: 50%;
		  bottom: 3%;
		  transform: translateX(-50%);
		  display: flex;
		  flex-direction: column;
		  width: 60%;
		  height: auto;
		  padding: 30px 30px;
		  background-color: rgba(255, 255, 255, 0.9);
		  border: 3px solid #FAD380;
		  border-radius: 20px;
		  font-size: 1.2rem;
		  color: #444444;
		}

		.mess-under-line { border-bottom: 6px solid #FEFBC5; }

		.bottom-button-cover {
		  margin-top: 20px;
		  display: flex;
		  justify-content: center;
		}

		.bottom-button { /* ボタン共通 */
		  width: 300px;
		  padding: 10px 0;
		  font-size: 1rem;
		  border-radius: 40px;
		  cursor: pointer;
		  box-shadow: 0 4px 6px rgba(0,0,0,0.5);
		  transition: all 0.2s ease;
		  color: #fff;
		}

		.bottom-button:hover {
		  box-shadow: 0 9px 13px rgba(0,0,0,0.5);
		  transform: translateY(-4px);
		}

		.bottom-button:active {
		  box-shadow: 0 2px 4px rgba(0,0,0,0.2);
		  transform: translateY(1px);
		}

		.bottom-button-large-text { font-size: 1.5rem; }

		.bottom-button-Agata { background-color: #2D97FC; margin-right: 50px; }
		.bottom-button-Teichaku { background-color: #FDA92F; }

		/* ===== <=1400px ===== */
		@media screen and (max-width: 1400px) {
		  .p-mainvisual__mess {
			width: 80%;
			bottom: -6%;
		  }
		}

		/* ===== <=1100px ===== */
		@media screen and (max-width: 1100px) {
		  .p-mainvisual__mess {
			width: 90%;
			bottom: -18%;
		  }
		}

		/* ===== <=820px ===== */
		@media screen and (max-width: 820px) {
		  .p-mainvisual__mess {
			width: 95%;
			bottom: -25%;
			font-size: 1rem;
		  }

		  .bottom-button {
			width: 250px;
			font-size: 0.8rem;
		  }

		  .bottom-button-large-text { font-size: 1.2rem; }
		}

		/* ===== <=615px ===== */
		@media screen and (max-width: 615px) {
		  .p-mainvisual__mess {
			/* width 95% と font-size 1rem は <=820px で指定済み */
			bottom: -40%;
			padding: 20px 10px;
		  }

		  .bottom-button {
			width: 160px;
			font-size: 0.7rem;
		  }

		  .bottom-button-large-text { font-size: 1rem; }
		  .bottom-button-cover { margin-top: 8px; }
		}

		/* ===== <=400px ===== */
		@media screen and (max-width: 400px) {
		  .p-mainvisual__mess {
			/* width 95% / font-size 1rem / padding は上で指定済み */
			bottom: -60%;
		  }

		  .bottom-button {
			width: 145px;            /* font-size 0.7rem は <=615px で指定済み */
		  }

		  /* large-text の 1rem も <=615px で指定済み */
		  .bottom-button-cover { margin-top: 5px; }
		}

		</style>

		<!--2025 6 16　変更↑-->
		
     
    </div>
    
</section>

<div class="c-fixed-menu">
    <ul class="c-nav__list">
        <li class="c-nav__item"><a href="#">ホーム</a></li>
        <li class="c-nav__item"><a href="#business">ジョブぷらす渋谷について</a></li>
        <li class="c-nav__item"><a href="#company">会社概要</a></li>
        <li class="c-nav__item"><a href="#state">定着支援</a></li>
        <li class="c-nav__item"><a href="#contact">アクセス・お問い合わせ</a></li>
    </ul>
</div>
