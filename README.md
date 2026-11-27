# Jobplus Shibuya HP

WordPress 向けのオリジナルテーマによるコーポレートサイトです。  
テーマディレクトリは `jobplus-shibuya-originaltheme` を使用します。

---

## 概要
- 目的：福祉事業所の LP/HP を WordPress テーマで提供
- 形態：**テーマ単体**（プラグイン依存を最小化）
- 目標：軽量・高速・保守性重視（BEM 設計、WPコーディング規約順守）

## 特徴
- **軽量**：必要最低限の jQuery と テンプレートファイルのみ（.php）
- **再利用性**：セクションをパーツ化し、テンプレ的に使い回し可能
- **SEO 基礎**：適切な見出し階層、メタ、OGP のためのフック/テンプレを用意

## 技術スタック
- **WordPress テーマ**（PHP 8.3 対応想定）
- **PHP / CSS / JavaScript**

## 作者
- **Leon.C / LazyGenius.dev**
- GitHub: [@Leon20200809](https://github.com/Leon20200809)


## 技術実験メモ

### 2026-11-27｜CSSスクロール駆動アニメーションとIntersectionObserver

**目的**：要素が画面に入ったときの下線演出を、追加JavaScriptなしで実装できるか検討する。

**確認した仕様（調査）**
- CSS の `animation-timeline: view()` と `animation-range` を使うと、要素のビューポート内での位置・見え方に応じてCSSアニメーションを進められる。スクロール検知のために新しく `IntersectionObserver` を書く必要はない。
- MDNでは `animation-timeline` / `view()` を **Baseline 2026（2026年10月）** としている。ただし古いブラウザまで含む完全対応ではない。
- `view()` は**経過時間ではなくスクロール進行度**に連動する。スクロール停止で止まり、戻すと逆方向に動き得るため、「表示時に0.75秒で一回だけ」という要件と同一ではない。

**この案件での採用判断（Issue #3 / PR #6）**
- 「安定の就職実績」の下線は **既存AOSによる表示検知＋CSS transition** を採用。約0.75秒・一度だけ伸びる演出を優先した。
- **新規JavaScript・新規ライブラリは追加しない**が、AOS自体はJavaScriptライブラリなので「完全CSSのみ」ではない。
- 文字は常時表示。AOS/JavaScriptが利用できない環境では下線を静止状態で表示し、`prefers-reduced-motion: reduce` でも完成状態を表示する設計。

**未検証・次の実験**
1. `animation-timeline: view()` を使う完全CSS版を別途試作し、スクロール停止・逆スクロール・再進入時の動作を比較する。
2. 非対応ブラウザでの静的下線、モーション軽減設定、PC・スマホ表示を比較する。
3. Windows Local `jobpshi` の実WordPressでAOS方式の実フォント・発火・表示を確認する。

**2026-11-27時点の結論**：CSSだけで*スクロール進行に応じた演出*は可能。しかし今回の*時間指定・一度だけ*の条件では既存AOS＋CSSが適する。完全CSS方式の実機検証は未実施。

参考：
- [MDN: animation-timeline](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/animation-timeline)
- [MDN: view()](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/animation-timeline/view)
- [MDN: Scroll-driven animation timelines](https://developer.mozilla.org/en-US/docs/Web/CSS/Guides/Scroll-driven_animations/Timelines)
- [関連PR #6](https://github.com/espo0901/jobplus-shibuya-hp/pull/6)
