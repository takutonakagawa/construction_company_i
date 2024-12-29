<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOP</title>
   <!-- 共通css -->
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/assets/css/common.css'); ?>">
<!-- 共通css / -->
<!-- 固有css -->
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/assets/css/index.css'); ?>">
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/assets/css/cutin.css'); ?>">
    <!-- 固有css/ -->
    <!-- SVGファビコン -->
    <link rel="icon" href="/assets/img/common/logo.svg" type="image/svg+xml">
</head>

<body>
    <!-- cutin -->
    <div class="l-cutin">
        <video id="cutin" autoplay muted playsinline>
            <source src="/assets/video/cutin.mp4" type="video/mp4">
        </video>

        <div id="center-message">
            <span class="skyblue">人</span>
            <span class="normal">の</span>
            <span class="skyblue">想</span>
            <span class="normal">いを</span>
            <span class="skyblue">形</span>
            <span class="normal">で</span>
            <span class="blue">結果</span>
            <span class="normal">として</span>
            <span class="blue">応える会社</span>
        </div>
        <button id="skip-button" class="skip-button c-btn">スキップ</button>
    </div>

    <!-- header -->
    <?php get_template_part('parts/header'); ?>
    <!-- header / -->

    <!-- main内 各ページ固有ソース -->
    <main class="l-main" id="top">

        <!-- mv -->
        <section class="p-mv p-mv--top">
            <img class="p-mv__main" src="/assets/img/common/mv_top.png" alt="">
            <img class="p-mv__mark rellax" src="/assets/img/common/MARK2.png" alt="">

            <img class="p-mv__lines rellax-2" src="/assets/img/common/lines.png" alt="">
            <h1 class="p-mv__title">
                <span class="core">水</span>・<span class="core">空気</span>・<span class="core">住む</span>の<span class="kanji">未来</span>を<span class="kanji">創</span>る。<br>
                <span class="professional">プロフェッショナル</span>の<span class="kanji">力</span>で、<span class="kanji">社会</span>に<span class="kanji">貢献</span>を。
            </h1>
            
        </section>
        <!-- mv / -->

        <!--index -->
        <!--about -->
        <section class="about" id="about">
            <div class="c-inner about__inner">
                <div class="p-index__about-title">
                    <div class="c-title">
                        <span class="c-slash"></span>
                        <div class="ja">会社概要</div>
                        <div class="en">About</div>
                    </div>
                </div>
                <div class="p-index__about-catch">
                    水・空気・住む
                </div>
                <div class="p-index__about-desc">
                    <p>
                        人が生きて行くうえで必要不可欠なライフラインとなる
                        「水・空気・住む」これらを、付加価値の高いサービスで
                        提供しプロフェッショナルの集団として
                        輝かしい未来を創造して社会貢献に務めます。
                    </p>
                </div>
                <img class="index__about-img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/top_about_img.jpeg'); ?>" alt="">
                <div class="p-index__about-btn">
                    <a href="<?php echo esc_url(home_url('/about/')); ?>" class="c-btn irenovation__btn">会社概要へ<span class="c-arrow"></span></a>
                </div>
            </div>
        </section>

        <!--business -->
        <section class="business" id="business">
            <div class="c-inner business__inner">
                <div class="business__container">
                    <div class="p-index__business-imgs">
                        <div class="block__title">機械設備工事部</div>
                        <div class="block__blue"></div>
                        <div class="block__skyblue"></div>
                        <img class="index__about-img index__about-img--construction" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/business_construction.jpeg'); ?>" alt="">
                        <img class="business__mark business__mark--left" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/top_mark.png'); ?>" alt="">

                        <div class="block__title block__title--property">不動産</div>
                        <div class="block__blue block__blue--property"></div>
                        <div class="block__skyblue block__skyblue--property"></div>
                        <img class="index__about-img index__about-img--property" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/business_property.jpeg'); ?>" alt="">
                        <img class="business__mark business__mark--center" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/top_mark.png'); ?>" alt="">

                        <div class="block__title block__title--renovation">リフォーム・リノベ工事</div>
                        <div class="block__blue block__blue--renovation"></div>
                        <div class="block__skyblue block__skyblue--renovation"></div>
                        <img class="index__about-img index__about-img--renovation" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/business_renovation.jpeg'); ?>" alt="">
                        <img class="business__mark business__mark--right" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/top_mark.png'); ?>" alt="">

                        <div class="index__about-message">一括管理体制</div>
                    </div>
                    <div class="p-index__business-content">
                        <div class="p-index__business-title">
                            <div class="c-title">
                                <span class="c-slash"></span>
                                <div class="ja">事業内容</div>
                                <div class="en">Business</div>
                            </div>
                        </div>
                        <div class="p-index__business-desc">
                            <p>
                                私たちは機械設備、住宅設備、リノベーション、不動産の専門家として、快適で持続可能なライフラインと生まれ変わる空間を提供しています。
                                お客様のライフスタイルやニーズに応じた最適な空間を提案し、質の高いサービスを通じて、安心と満足をお届けします。
                                発想と思考の多様性を活かして、価値を最大限に引き出し、社会に貢献することを使命とし、未来を共に築いていきます。
                                あなたの理想を実現するために、私たちにお任せください。
                            </p>
                        </div>
                        <div class="p-index__business-btn">
                            <a href="<?php echo esc_url(home_url('/business/')); ?>" class="c-btn">事業内容へ<span class="c-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <img class="mark-text" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/business.svg'); ?>" alt="">
        </section>

        <!--business -->

        <!-- achivements -->
        <section class="achivements" id="achivements">
            <div class="c-inner achivements__inner">
                <div class="p-index__achivements-title">
                    <div class="c-title">
                        <span class="c-slash"></span>
                        <div class="ja">施工実績</div>
                        <div class="en">Achivements</div>
                    </div>
                </div>

                <div class="p-index__achivements-catch">
                    これまで入札物件から民間企業または物件のオーナー様、個人宅など幅広いお客様や元請企業様にご依頼をいただき、安心・安全・丁寧な施工で取り組み実績を積んできました。
                </div>

                <div class="p-index__achivements-list">
                    <div class="p-index__achivements-list-right">
                        <div class="p-index__achivements-category">機械設備工事</div>
                        <div class="p-index__achivements-desc">
                            <p>
                                当社の設備工事は、住宅やマンション、商業施設などに欠かせない水道、空調、換気、防災設備の工事を設計〜申請、施工までを一括管理で行い、確かな技術でご提供することをお約束します。
                            </p>
                        </div>
                        <div class="p-index__achivements-btn">
                            <a href="<?php echo esc_url(home_url('/archive/')); ?>" class="c-btn">実績一覧へ<span class="c-arrow"></span></a>
                        </div>
                    </div>
                    <div class="p-index__achivements-list-left">
                        <div class="block__skyblue"></div>
                        <div class="block__blue"></div>
                        <img class="index__achivements-img index__achivements-img--1" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/top_achive_construction_left.jpg'); ?>" alt="">
                        <img class="index__achivements-img index__achivements-img--3" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/top_achive_construction_right.jpg'); ?>" alt="">
                    </div>
                </div>

                <div class="p-index__achivements-list p-index__achivements-list--float-off">
                    <div class="p-index__achivements-list-right">
                        <div class="p-index__achivements-category">アイリノベ(i renovation)実績</div>
                        <div class="p-index__achivements-desc">
                            <p>
                                当社のリノベーションサービスは、水回りと空調につよみを持った観点から古い住宅や商業施設に新たな価値を与えます。
                                お客様のライフスタイルに合わせたデザインを提案し、機能性と美しさを両立。最新の素材と技術で、快適で持続可能な住環境を実現し、理想の住まいを形にするお手伝いをします。
                            </p>
                        </div>
                        <div class="p-index__achivements-btn">
                            <a href="<?php echo esc_url(home_url('/archive/')); ?>" class="c-btn">実績一覧へ<span class="c-arrow"></span></a>
                        </div>
                    </div>
                    <div class="p-index__achivements-list-left">
                        <div class="block__skyblue block__skyblue--1"></div>
                        <div class="block__blue block__blue--1"></div>
                        <img class="index__achivements-img index__achivements-img--5" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/top_achive_renove_left.jpg'); ?>" alt="">
                        <img class="index__achivements-img index__achivements-img--6" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/top_achive_renove_right.jpg'); ?>" alt="">
                    </div>
                </div>

                <img class="mark" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/archive_MARK.png'); ?>" alt="">
                <img class="mark-text" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/We prove our work is reliable..svg'); ?>" alt="">
            </div>
        </section>
        <!-- achivements / -->

        <!--price -->
        <section class="price" id="price">
            <div class="c-inner price__inner">
                <div class="p-index__price-title">
                    <div class="c-title">
                        <span class="c-slash"></span>
                        <div class="ja">料金案内</div>
                        <div class="en">Price</div>
                    </div>
                </div>
                <div class="p-index__price-catch">
                    TOTO・LIXIL・INAX・Panasonic・タカラスタンダード・クリナップなど各メーカーの商品取扱をしております。
                    メーカー加盟店や全国優良リフォーム会員加入。
                </div>

                <ul class="price__list">
                    <li>
                        <img class="p-index__price-img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/S__124305416.jpg'); ?>" alt="">
                    </li>
                    <li>
                        <img class="p-index__price-img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/S__124305418.jpg'); ?>" alt="">
                    </li>
                    <li>
                        <img class="p-index__price-img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/S__124305419.jpg'); ?>" alt="">
                    </li>
                    <li>
                        <img class="p-index__price-img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/S__124305420.jpg'); ?>" alt="">
                    </li>
                </ul>

                <div class="p-index__price-btn">
                    <a href="<?php echo esc_url(home_url('/price/')); ?>" class="c-btn">料金案内へ<span class="c-arrow"></span></a>
                </div>

                <img class="mark" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/price_mark.png'); ?>" alt="">
            </div>
        </section>
        <!--price / -->


        <!-- info -->
        <section class="infomation" id="infomation">
            <div class="c-inner infomation__inner">
                <div class="infomation__content c-anim-fade-in">
                    <div class="infomation__wrapper">
                        <div class="infomation__title">
                            <h2 class="c-title infomation__title-text">
                                <div class="ja">
                                    物件情報
                                </div>
                                <div class="en">
                                    Infomation
                                </div>
                            </h2>
                        </div>
                        <div class="infomation__desc">
                            <p>当社の物件情報は、地域やライフスタイルに応じた多彩な選択肢を提供します。新築やリノベーション物件を多数取り揃え、詳細情報や写真を通じて実際の生活をイメージできるよう配慮しています。安心して住まえる環境を整えた物件を揃え、お客様の理想の住まい探しをサポートします。お気軽にお問い合わせください。</p>
                        </div>
                    </div>
 

                    <img src="/assets/img/top/info_mark.png" alt="" class="mark">
                </div>

            </div>
            <a href="/archive.html" class="c-btn infomation__btn c-anim-fade-in">物件一覧へ</a>
            <div class="infomation__bg">
                <ul>
                    <li>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/infobg.png'); ?>" alt="">
                    </li>
                    <li>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/infobg.png'); ?>" alt="">
                    </li>
                    <li>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/infobg.png'); ?>" alt="">
                    </li>
                    <li>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/infobg.png'); ?>" alt="">
                    </li>
                    <li>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/infobg.png'); ?>" alt="">
                    </li>
                    <li>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/infobg.png'); ?>" alt="">
                    </li>
                    <li>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/infobg.png'); ?>" alt="">
                    </li>
                    <li>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/infobg.png'); ?>" alt="">
                    </li>
                </ul>
            </div>

        </section>
        <!-- info / -->
        
        <!--insta -->
        <?php get_template_part('parts/insta'); ?>
        <!--insta / -->

        <!--line -->
        <?php get_template_part('parts/line'); ?>
        <!--line / -->

        <!--コンタクト -->
        <?php get_template_part('parts/contact'); ?>
        <!--コンタクト / -->

        <!-- リクルート -->
        <?php get_template_part('parts/recruit'); ?>
        <!-- リクルート / -->
    </main>
     <!-- main内 各ページ固有ソース / -->

    <!-- footer -->
    <?php get_template_part('parts/footer'); ?>
    <!-- footer / -->

<!-- 共通JS -->
<script src="<?php echo esc_url(get_template_directory_uri() . '/assets/js/_vendor/rellax.js'); ?>"></script>
<script src="<?php echo esc_url(get_template_directory_uri() . '/assets/js/common.js'); ?>"></script>
<!-- 共通JS -->

<!-- 固有JS -->
<script src="<?php echo esc_url(get_template_directory_uri() . '/assets/js/top/top.js'); ?>"></script>
<!-- 固有JS / -->

</body>
</html>