<?php
/*
Template Name: About Page
*/
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会社概要</title>

<!-- 共通css -->
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/assets/css/common.css'); ?>">
<!-- 共通css / -->
<!-- 固有css -->
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/assets/css/about.css'); ?>">


    <!-- 固有css/ -->
    <!-- SVGファビコン -->
    <link rel="icon" href="/assets/img/common/logo.svg" type="image/svg+xml">
</head>
<body id="about">
    <div class="l-cutin">
    </div>
    <!-- header -->
    <?php get_template_part('parts/header'); ?>
    <!-- header / -->
    <main>
    <!-- mv -->
    <section class="p-mv">
        <img class="p-mv__main" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/about/mv-about.png'); ?>" alt="">
        <img class="p-mv__mark rellax" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/MARK2.png'); ?>" alt="">
        <img class="p-mv__mark--2 rellax-4" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/MARK.png'); ?>" alt="">
        <img class="p-mv__lines rellax-2" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/lines.png'); ?>" alt="">
        <h1 class="p-mv__title rellax-3">
            <div class="ja">会社概要</div>
            <div class="en">About</div>
        </h1>
    </section>
    <!-- mv / -->

    <section class="greeting" id="greeting">
        <div class="c-inner greeting__inner">
            <div class="c-title">
                <div class="ja">代表挨拶</div>
                <div class="en">Greeting</div>
            </div>
            <div class="eco-box">
                <div class="ceo-message__inner">
                    <div class="ceo__message">
                        <p>
                            弊社のホームページをご覧いただき、誠にありがとうございます。<br>
                            弊社ではキャッチフレーズとして企業理念に掲げている「<span class="ceo__message-strong">人の想いを形で結果として応える会社</span>」の通り過程がそうであるから、結果が表れる。
                        </p>
                        <div class="ceo__name">
                            <p>
                                株式会社池田総合設備<br>
                                代表取締役社長 <span class="ceo__name-strong">池田 裕祐</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="ceo-img__inner">
                    <img class="ceo__img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/about/greeting.png'); ?>" alt="">
                </div>
            </div>
        </div>
        <img class="line__img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/lines.png'); ?>" alt="">
    </section>

    <!-- 企業理念 -->
    <section class="philosophy" id="philosophy">
        <div class="c-inner philosophy__inner">
            <div class="bgMessage bgMessage--right">respond to people's wishes.</div>
            <div class="whiteblock">
                <div class="c-title-secondary title__about">
                    <div class="en">Corporate philosophy</div>
                    <div class="ja">企業理念</div>
                </div>
                <div class="message">
                    <p class="message__title">"人の想いを形で結果として応える会社"</p>
                    <p class="message__desc">多様性の思考と工夫でお客様により良い<span>快適</span>な<span>環境</span>、空間作りの提供に努め...</p>
                </div>
            </div>
            <div class="blueblock"></div>
        </div>
    </section>
    <!-- 企業理念 / -->

    <!-- ロゴ -->
    <section class="logo" id="logo">
        <div class="c-inner logo__inner">
            <div class="p-about-logo__title">
                <div class="c-title">
                    <span class="c-slash"></span>
                    <div class="ja">ロゴの由来</div>
                    <div class="en">Logo</div>
                </div>
            </div>
            <div class="p-about-logo__content">
                <div class="p-about-logo__leftside">
                    <div class="block__logo">
                        <img class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/logo.svg'); ?>" alt="">
                    </div>
                </div>
                <div class="p-about-logo__rightside">
                    <div class="logo__desc">
                        <div class="block__skyblue fade-right">
                            <p>社名で<span>ロゴ</span>が形成されている</p>
                            <div class="block__blue"></div>
                        </div>
                        <div class="block__skyblue">
                            <p>∞インフィニティ、無限の<span>可能性</span>を表現</p>
                            <div class="block__blue"></div>
                        </div>
                        <div class="block__skyblue">
                            <p>人との<span>つながり</span></p>
                            <div class="block__blue"></div>
                        </div>
                        <div class="block__skyblue">
                            <p>色は広い青空に<span>飛躍</span>するイメージ</p>
                            <div class="block__blue"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ロゴ / -->

    <!-- コンタクト -->
    <section class="p-contact p-lead-sec">
        <img class="contact-line" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/lineBg.png'); ?>" alt="">
        <div class="c-inner">
            <h1 class="c-title">
                <div class="ja">お問い合わせ</div>
                <div class="en">contact</div>
            </h1>
            <div class="p-contact__btns">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c-btn">お問い合わせへ</a>
                <a href="tel:0787549420" class="c-btn">今すぐ電話</a>
            </div>
        </div>
    </section>
    <!-- コンタクト / -->

    <!-- リクルート -->
    <section class="p-recruit p-lead-sec">
        <div class="c-inner">
            <h1 class="c-title p-recruit__title">
                <div class="ja">採用情報</div>
                <div class="en">recruitment</div>
            </h1>
            <div class="p-recruit__btns">
                <a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="c-btn">採用情報へ</a>
            </div>
        </div>
    </section>
    <!-- リクルート / -->
</main>

    <!-- footer -->
    <footer class="l-footer">
        <div class="l-footer__container">
            <div class="l-footer__content">
                <div class="l-footer__text">
                    <a href="" class="logo">
                        <i>
                            <img src="/assets/img/common/logo.svg" alt="">
                        </i>
                        <div class="text">
                            <div class="title">株式会社池田総合設備</div>
                            <div class="copy">人の想いを形で結果として応える会社</div>
                        </div>
                    </a>
                    <div class="l-footer__sns">
                        <a href="">
                            <img src="/assets/img/common/LINE.png" alt="">
                        </a>
                        <a href="">
                            <img src="/assets/img/common/Instagram.png" alt="">
                        </a>
                        <a href="">
                            <img class="l-footer__sns--tiktok" src="/assets/img/common/TikTok.png" alt="">
                        </a>
                    </div>
                    <div class="l-footer__info">
                        <p>TEL：<a href>078-754-9420</a></p>
                        <p>〒655-0852</a></p>
                        <p>兵庫県神戸市垂水区名谷497-5</p>
                    </div>
                </div>
                <div class="l-footer__menu">
                    <ul>
                        <li>
                            <a href="/index.html" class="main">TOP</a>
                        </li>
                        <li>
                            <a href="/index.html#about">会社概要</a>
                        </li>
                        <li>
                            <a href="/index.html#business">事業内容</a>
                        </li>
                        <li>
                            <a href="/index.html#achivements">施工実績</a>
                        </li>
                        <li>
                            <a href="/index.html#price">料金案内</a>
                        </li>
                        <li>
                            <a href="/index.html#infomation">物件情報</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="/about.html" class="main">会社概要</a>
                        </li>
                        <li>
                            <a href="/about.html#greeting">代表挨拶</a>
                        </li>
                        <li>
                            <a href="/about.html#philosophy">理念</a>
                        </li>
                        <li>
                            <a href="/about.html#logo">ロゴの由来</a>
                        </li>
                        <li>
                            <a href="/about.html#company">会社概要</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="/archive.html" class="main">施工実績/物件案内</a>
                        </li>
                        <li>
                            <a href="">ALL</a>
                        </li>
                        <li>
                            <a href="">機械設備工事</a>
                        </li>
                        <li>
                            <a href="">アイリノベ<br>(i renovation)</a>
                        </li>
                        <li>
                            <a href="">不動産事業</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="" class="main">料金案内</a>
                        </li>
                        <li>
                            <a href="/price.html#construction">機械設備工事</a>
                        </li>
                        <li>
                            <a href="/price.html#irenovation">アイリノベ<br>(i renovation)</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="" class="main">事業内容</a>
                        </li>
                        <li>
                            <a href="/business.html#construction-section">機械設備工事部</a>
                        </li>
                        <li>
                            <a href="/business.html#renovation-section">アイリノベ<br>(i renovation)事業部</a>
                        </li>
                        <li>
                            <a href="/business.html#property-section">不動産事業部</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="" class="main">採用情報</a>
                        </li>
                        <li>
                            <a href="/recruitment.html#recruitment">募集要項</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="" class="main">お問い合わせ</a>
                        </li>
                        <li>
                            <a href="/contact.html#contact">お問合せフォーム</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="copyright">コピーライトコピーライト</div>
    </footer>
    <!-- footer / -->


    <!-- 共通JS -->
<script src="<?php echo esc_url(get_template_directory_uri() . '/assets/js/_vendor/rellax.js'); ?>"></script>
<script src="<?php echo esc_url(get_template_directory_uri() . '/assets/js/_vendor/scrollreaveal.js'); ?>"></script>
<script src="<?php echo esc_url(get_template_directory_uri() . '/assets/js/common.js'); ?>"></script>
<!-- 共通JS -->

</body>
</html>
