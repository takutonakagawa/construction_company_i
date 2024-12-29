<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>採用情報</title>

    <!-- 共通css -->
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/assets/css/common.css'); ?>">
    <!-- 共通css / -->
    <!-- 固有css -->
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/assets/css/recruitment.css'); ?>">

    <!-- 固有css/ -->
    <!-- SVGファビコン -->
    <link rel="icon" href="/assets/img/common/logo.svg" type="image/svg+xml">
</head>
<body>
      <!-- header -->
 
      <?php get_template_part('parts/header'); ?>

    <!-- header / -->

    <main class="l-main" id="recruitment">
        <!-- mv -->
        <section class="p-mv">
            <img class="p-mv__main" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/recruitment/mv-recruitment.png'); ?>" alt="">
            <img class="p-mv__mark rellax" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/MARK2.png'); ?>" alt="">

            <img class="p-mv__lines rellax-2" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/lines.png'); ?>" alt="">
            <h1 class="p-mv__title rellax-3">
                <div class="ja">採用情報</div>
                <div class="en">Recruitment</div>
            </h1>     
        </section>
        <!-- mv / -->

        <!-- recruitment -->
        <section class="recruitment" id="recruitment">
            <div class="c-inner recruitment__inner">
                <div class="c-title">
                    <span class="c-slash"></span>
                    <div class="ja">募集要項</div>
                    <div class="en">Job Description</div>
                </div>
                <div class="recruitment__content">
                    <dl class="recruitment__content-list">
                        <dt class="recruitment__content-list-term">募集要項</dt>
                        <dd class="recruitment__content-list-desc">営業、事務、施工管理、職人</dd>
                        <dt class="recruitment__content-list-term">業務内容</dt>
                        <dd class="recruitment__content-list-desc">設備工事・リフォーム・リノベ工事の設計、施工、管理、広報、営業、事務</dd>
                        <dt class="recruitment__content-list-term">応募資格</dt>
                        <dd class="recruitment__content-list-desc">
                            ・未経験者大歓迎　※業界経験者の方も、積極的に採用しております。<br>
                            ・現場管理、工事経験、営業経験者優遇<br>
                            ・施工管理、宅建等の資格保有者優遇
                        </dd>
                        <dt class="recruitment__content-list-term">給与</dt>
                        <dd class="recruitment__content-list-desc">
                            【正社員】　※経験者は給与優遇<br>
                            ・日給 10,000～<br>
                            ・月給 230,000～<br>
                            【アルバイト・パート】<br>
                            【賞与・補足事項】<br>
                            ・年一回　12月支給<br>
                            ・年四回　4月、7月、10月、1月支給　※営業のみ
                        </dd>
                        <dt class="recruitment__content-list-term">休暇・休日</dt>
                        <dd class="recruitment__content-list-desc">
                            ・週休2日制<br>
                            ・有給休暇・育児休暇あり<br>
                            ※相談可能です。お気軽にご相談ください。
                        </dd>
                        <dt class="recruitment__content-list-term">福利厚生</dt>
                        <dd class="recruitment__content-list-desc">
                            ・社員旅行<br>
                            ・交通費支給<br>
                            ・制服貸与<br>
                            ・社会保険完備
                        </dd>
                    </dl>
                </div>
                <div class="recruitment__btns">
                    <a href="" class="c-btn">LINEで応募<span class="c-arrow"></span></a>
                    <a href="" class="c-btn">フォームで応募<span class="c-arrow"></span></a>
                </div>
            </div>
        </section>
        
               

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