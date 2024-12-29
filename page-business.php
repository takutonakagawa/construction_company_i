<?php
/*
Template Name: Business Page
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>事業内容</title>

    <!-- 共通css -->
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/assets/css/common.css'); ?>">
    <!-- 共通css / -->
    <!-- 固有css -->
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/assets/css/business.css'); ?>">

    <!-- SVGファビコン -->
    <link rel="icon" href="/assets/img/common/logo.svg" type="image/svg+xml">
</head>
<body>

    <!-- header -->
    <?php get_template_part('parts/header'); ?>
    <!-- header / -->
    <main>
        <!-- mv -->
        <section class="p-mv">
            <img class="p-mv__main" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/mv_top.png'); ?>" alt="">
            <img class="p-mv__mark rellax" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/MARK2.png'); ?>" alt="">
        
            <img class="p-mv__lines rellax-2" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/lines.png'); ?>" alt="">
            <h1 class="p-mv__title rellax-3">
                <div class="ja">事業内容</div>
                <div class="en">Buisiness</div>
            </h1>     
        </section>
        <!-- mv / -->

        <!-- business -->
        <section class="business" id="construction-section">
            <div class="c-inner business__inner">
                <div class="c-title">
                    <span class="c-slash"></span>
                    <div class="ja">事業内容</div>
                    <div class="en">Details</div>
                </div>

                <div class="p-business__contents">
                    <div class="p-business__content">
                        <div class="p-business__title">機械設備工事部</div>
                        <img class="p-business__content--visual" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/business_construction.jpeg'); ?>" alt="">
                        
                        <div class="p-business__desc business_desc--p01">
                            <p>水と空気は人にとって言わば必要不可欠なもの。それを先人から培った経
                                験と知識を考慮し、時代にそった発想・思考の多様性を最大限に生かし確
                                かな技術で安心、安全、丁寧な施工を提供いたします。
                                
                                （新築、改修等の給排水衛生設備・空調設備・換気設備・防災設備・プラント設備・土木工事を設計から申請、施工を一括管理）</p>
                        </div>
                        <div class="business__btn--p01">
                            <a href="/archive.html" class="c-btn">実績一覧へ<span class="c-arrow"></span></a>
                        </div>
                        <div class="business__design-block--construction_blue-p01"></div>
                        <div class="business__design-block--construction_skyblue-p01"></div>
                    </div>
                    <div class="p-business__content" id="renovation-section">
                        <div class="p-business__title">アイリノベ(i renovation)事業部</div>
                        <img class="p-business__content--visual business__visual-rightside" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/business_renovation.jpeg'); ?>" alt="">
                        <div class="clearbox"></div>
                        <div class="p-business__desc business_desc--p02">
                            <p>戸建て、マンション、店舗などの水まわりを中心としたリフォーム・リノ
                                ベーション専門事業。<br>
                                
                                住居者様、オ ナー様などの理想や想いを形で結果として応え生まれ変わ
                                る空間に心が踊るような体験をお約束します。<br>
                                
                                （内装・外装・エクステリアのリフォーム・リノベーション専門部隊で設
                                計から施工を一括管理）</p>
                        </div>
                        <div class="business__btn--p02">
                            <a href="https://i--renovation.com/" class="c-btn c-btn__2lines business__btn--detail" >アイリノベ<br>(i renovation)特設サイトへ<span class="c-arrow"></span></a>
                            <a href="/archive.html" class="c-btn">実績一覧へ<span class="c-arrow"></span></a>
                        </div>
                        <div class="business__design-block--construction_blue-p02"></div>
                        <div class="business__design-block--construction_skyblue-p02"></div>

                    </div>
                    <div class="p-business__content" id="property-section">
                        <div class="p-business__title">不動産事業部</div>
                        <img class="p-business__content--visual" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/business_property.jpeg'); ?>" alt="">
                        <div class="p-business__desc business_desc--p01">
                            <p>賃貸、売買、中古物件リノベ再販事業

                                ライフスタイルに合わせた空間のご提案をさせていただきます。</p>
                        </div>
                        <div class="business__btn--p03">
                            <a href="/archive.html" class="c-btn">実績一覧へ<span class="c-arrow"></span></a>
                        </div>
                        <div class="business__design-block--construction_blue-p03"></div>
                        <div class="business__design-block--construction_skyblue-p03"></div>
                    </div>
                    
                </div>

            </div>
        </section>
        <!-- business / -->

        <!--コンタクト -->
         <?php get_template_part('parts/contact'); ?>
        <!--コンタクト / -->

        <!-- リクルート -->
        <?php get_template_part('parts/recruit'); ?>
        <!-- リクルート / -->
    </main>
    <!-- footer -->
    <?php get_template_part('parts/footer'); ?>
    <!-- footer / -->


    <!-- 共通JS -->
    <script src="<?php echo esc_url(get_template_directory_uri() . '/assets/js/_vendor/rellax.js'); ?>"></script>
    <script src="<?php echo esc_url(get_template_directory_uri() . '/assets/js/common.js'); ?>"></script>
    <!-- 共通JS -->
</body>
</html>