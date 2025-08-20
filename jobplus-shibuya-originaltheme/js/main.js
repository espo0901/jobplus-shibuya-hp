jQuery(document).ready(function($){
    const BREAK_POINT_SP_MAX = 600;
    const BREAK_POINT_TB_MIN = 601; 
    const BREAK_POINT_TB_MAX = 1024;

    // トップへ戻るボタン
    const $ttb = $('.c-to-top-btn');

    // ハンバーガーボタン
    const $hamburger_btn = $('#hamburger-btn');
    const $nav = $('nav');
    const isMenuOpen = 'isOpen';

    // スクロールメニュー表示
    const $fixed_menu = $('.c-fixed-menu');
    /*=================================================
    トップへ戻るボタン
    ===================================================*/
    $ttb.hide();
    $fixed_menu.hide();

    // 規定値以上スクロールでボタン表示
    $(window).scroll(function(){
        if(window.innerWidth >= BREAK_POINT_TB_MIN){ //PC画面の場合のみ処理
            if($(this).scrollTop() > 700){
                $ttb.fadeIn();
            }else{
                $ttb.fadeOut();
            }

            // ＃headerのfixed
            if($(this).scrollTop() > 400){
                $fixed_menu.fadeIn();
                $(".site-menu-fixed").addClass("fixed");
            }else{
                $fixed_menu.fadeOut();
                $(".site-menu-fixed").removeClass("fixed");
            }
        }
    })

    // #to-top-btnクリック時のイベント
    $ttb.click(function () {
        $('body,html').animate({scrollTop: 0}, 600, "swing");
        return false;
    })

    /*=================================================
    スムーススクロール
    ===================================================*/
    $('a[href^="#"]').click(function(event){
        event.preventDefault(); // デフォルトの動作（ページジャンプ）を防ぐ

        let href = $(this).attr("href");
        let target = $(href == "#" || href == "" ? 'html' : href);
        let position = target.offset().top;
        $("html, body").animate({scrollTop:position}, 600, "swing");
    })

    /*=================================================
    ハンバーガーメニュー on-off スマホ用
    ===================================================*/
    $($hamburger_btn).on('click', function(){
        hamburger();
    })

    $('nav a').on('click', function(){
        hamburger();
    })

    // ハンバーガーmethod
    function hamburger(){
        $hamburger_btn.toggleClass(isMenuOpen);
            if($hamburger_btn.hasClass(isMenuOpen)){
                $($nav).addClass(isMenuOpen);
            } else {
                $($nav).removeClass(isMenuOpen);
    }}

    /*=================================================
    コンタクトフォーム7のフォーム送信成功後にサンクスページに飛ばす
    ===================================================*/
    $(document).on('wpcf7mailsent', function() {
        window.location.href = "/thanks";
    });
    
    // AOSの初期化 これせんとうごかねぇ
    AOS.init();
})