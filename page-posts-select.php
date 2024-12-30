<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>実績・物件一覧</title>

 
    <!-- 共通css -->
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/assets/css/common.css'); ?>">
    <!-- 共通css / -->
    <!-- 固有css -->
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/assets/css/archive.css'); ?>">

    <!-- SVGファビコン -->
    <link rel="icon" href="/assets/img/common/logo.svg" type="image/svg+xml">
</head>
<body>
    <!-- header -->
    <?php get_template_part('parts/header'); ?>
    <!-- header / -->

    <main id="archive" class="l-main">
        <!-- mv -->
        <section class="p-mv p-mv--small">
                <h1 class="p-mv__title">
                    <span class="ja">施工実績 / 物件案内</span><br>
                    <span class="en">archive/property</span>
                </h1>
        </section>
        <!-- mv / -->

        <!-- archive -->
        <section class="archive">
            <div class="c-inner archive__inner">
                <!-- title -->
                <div class="c-title-secondary c-title-secondary--archive">
                    <div class="en">news select</div>
                    <div class="ja">投稿選択一覧</div>
                </div>

                <p class="category-desc">
                    弊社では様々な事業を行なっております。<br>
                    下記より事業をお選びください
                </p>
                <ul class="category-list">
                    <li class="category-item">
                        <a href="<?php echo esc_url(home_url('/posts/')); ?>">ALL</a>
                    </li>
                    <li class="category-item">
                        <a href="<?php echo esc_url(home_url('/equipment/')); ?>">設備工事事業</a>
                    </li>
                    <li class="category-item">
                        <a href="<?php echo esc_url(home_url('/irenovation/')); ?>">irenovation事業</a>
                    </li>
                    <li class="category-item">
                        <a href="<?php echo esc_url(home_url('/estate/')); ?>">不動産事業</a>
                    </li>
                    <li class="category-item">
                        <a href="<?php echo esc_url(home_url('/other/')); ?>">その他</a>
                    </li>
                </ul>


            
            </div>
        </section>

        <!-- archive / -->

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