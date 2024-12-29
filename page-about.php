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

        <!-- 経営理念 -->
        <section class="philosophy" id="philosophy">
                    <div class="c-inner philosophy__inner">
                        <div class="bgMessage bgMessage--left">self-questioning.</div>
                    
                        <div class="whiteblock">
                                <div class="c-title-secondary title__about">
                                    <div class="en">management philosophy</div>
                                    <div class="ja">経営理念</div>
                                </div>
                                <div class="message">
                                    <p class="message__title">「自問自答」</p>
                                    <p class="message__desc">
                                        常に<span>選択肢</span>があり<span>決断</span>する状況に迫られる中でどのような状況下でもあらゆる<span>判断材料</span>を<span>収取</span>し<br>
                                        <span>自分自身</span>で自分に問いかけて<span>自分</span>で答えを出して<span>最終決断</span>する。
                                    </p>
                                </div>
                        </div>   
                        <div class="blueblock blueblock--reverse"></div>
                        
                    </div>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/about/bg-img.png'); ?>" class="philosophy__bg rellax-2">            
                </section>
                <!-- 経営理念 -->


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
                        <div class="block__skyblue"> </div>
                        <div class="block__blue"></div>
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


    <section class="company" id="company">
                    <div class="c-inner company__inner">
                        <div class="p-about-company__title">
                            <div class="c-title">
                                <span class="c-slash"></span>
                                <div class="ja">会社概要</div>
                                <div class="en">Profile</div>
                            </div>
                        </div>

                        <div class="p-recruitment__content">
                            <dl class="p-recruitment__list">
                                <dt class="p-recruitment__term">会社名</dt>
                                <dd class="p-recruitment__desc">株式会社池田総合設備</dd>
                                <dt class="p-recruitment__term">創立</dt>
                                <dd class="p-recruitment__desc">令和元年11月11日</dd>
                                <dt class="p-recruitment__term">法人設立</dt>
                                <dd class="p-recruitment__desc">令和4年1月20日</dd>
                                <dt class="p-recruitment__term">TEL</dt>
                                <dd class="p-recruitment__desc">078-754-9420</dd>
                                <dt class="p-recruitment__term">FAX</dt>
                                <dd class="p-recruitment__desc">078-754-9430</dd>
                                <dt class="p-recruitment__term">代表取締役</dt>
                                <dd class="p-recruitment__desc">池田 裕祐</dd>
                                <dt class="p-recruitment__term">資本金</dt>
                                <dd class="p-recruitment__desc">1,000,000円</dd>
                                <dt class="p-recruitment__term">業務内容</dt>
                                <dd class="p-recruitment__desc">機械設備工事（給排水・空調・換気・防災等の設備全般）<br>
                                    リフォーム、リノベーション工事（内装・外装・エクステリア）<br>
                                    不動産事業（売買）</dd>
                                <dt class="p-recruitment__term">許可登録免許</dt>
                                <dd class="p-recruitment__desc">兵庫県知事（般-4）第118464号<br>
                                    TOTOリモデルクラブ会員<br>
                                    全国優良リフォーム会員<br>
                                    LIXILリフォームネット会員<br>
                                    産業廃棄物収集運搬業 第02805243507号
                                </dd>
                                <dt class="p-recruitment__term">保有資格</dt>
                                <dd class="p-recruitment__desc">
                                    ・1級管工事施工管理技士/1名&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;・2級管工事施工管理技士/1名<br>
                                    ・給水装置工事主任技術者/1名&nbsp;&nbsp;&nbsp;&nbsp;・下水道排水設備工事責任技術者/1名<br>
                                    ・消防設備士　甲種4類/1名&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;・有機溶剤作業主任者/2名<br>
                                    ・酸素欠乏危険作業主任者/1名&nbsp;&nbsp;&nbsp;&nbsp;・石綿作業主任者/1名<br>
                                    ・石綿含有建材調査者/1名&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;・職長・安全衛生責任者/1名<br>
                                    ・その他特別教育</dd>
                            </dl>
                            <div class="block__blue"></div>
                            <div class="block__skyblue"></div>
                        </div>

                    </div>
                </section>

    <!-- コンタクト -->
    <section class="p-contact p-lead-sec">
        <img class="contact-line" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/lineBg.png'); ?>" alt="">
        <div class="c-inner">
            <h1 class="c-title">
                <div class="ja">お問い合わせ</div>
                <div class="en">contact</div>
            </h1>
            <div class="p-contact__content p-lead-sec__content">
                <p>
                    私たちのサービスや製品についてのご質問やご相談がございましたら、<br>
                    電話またはフォームからお問い合わせください。<br>
                    迅速にご対応させていただきます。
                </p>
                <div class="p-contact__btns p-lead-sec__btns">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c-btn">お問い合わせへ</a>
                <a href="tel:0787549420" class="c-btn">今すぐ電話</a>
            </div>
                </div>
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
            <div class="p-recruit__content p-lead-sec__content">
                <p>
                    弊社では一緒に働く仲間を募集しております。<br>
                    お電話、メールフォームどちらからでもお問い合わせ可能です。<br>
                    ご質問や、気になることがありましたらまずはお気軽にお問い合わせください！
                </p>
                <div class="p-recruit__btns p-lead-sec__btns">
                    <a href="/recruit.html" class="c-btn">採用情報へ</a>
                </div>
            </div>
        </div>
    </section>
    <!-- リクルート / -->
</main>

    <!-- footer -->
    <?php get_template_part('parts/footer'); ?>
    <!-- footer / -->


    <!-- 共通JS -->
<script src="<?php echo esc_url(get_template_directory_uri() . '/assets/js/_vendor/rellax.js'); ?>"></script>
<script src="<?php echo esc_url(get_template_directory_uri() . '/assets/js/_vendor/scrollreaveal.js'); ?>"></script>
<script src="<?php echo esc_url(get_template_directory_uri() . '/assets/js/common.js'); ?>"></script>
<!-- 共通JS -->

</body>
</html>