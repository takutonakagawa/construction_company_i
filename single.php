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
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/assets/css/detail.css'); ?>">
     <!-- 固有css/ -->
</head>
<body>

    <!-- header -->
    <?php get_template_part('parts/header'); ?>
    <!-- header / -->

    <!-- main内 各ページ固有ソース -->
    <main class="l-main" id="detail">

       <!-- mv -->
       <section class="p-mv p-mv--small">
        <h1 class="p-mv__title">
            <div class="ja">記事詳細</div>
            <div class="en">detail</div>
        </h1>
       </section>
       <!-- mv / -->



        <section class="detail">
            <div class="c-inner">
                <div class="detail__head">
                    <!-- 投稿タイトル -->
                    <h1><?php the_title(); ?></h1>

                    <div class="detail__status">
                        <div class="detail__info">
                            <!-- カテゴリを表示 -->
                            <div class="tag">
                                <?php
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                    echo esc_html($categories[0]->name);
                                }
                                ?>
                            </div>

                            <!-- カスタムフィールド情報 -->
                            <ul>
                                <?php if ($cost = get_post_meta(get_the_ID(), 'cost', true)) : ?>
                                    <li>
                                        <div class="key">工事費用</div>
                                        <div class="value">
                                            <?php echo esc_html($cost); ?>
                                        </div>
                                    </li>
                                <?php endif; ?>

                                <?php if ($location = get_post_meta(get_the_ID(), 'location', true)) : ?>
                                    <li>
                                        <div class="key">現場</div>
                                        <div class="value">
                                            <?php echo esc_html($location); ?>
                                        </div>
                                    </li>
                                <?php endif; ?>

                                <?php if ($duration = get_post_meta(get_the_ID(), 'duration', true)) : ?>
                                    <li>
                                        <div class="key">工期</div>
                                        <div class="value">
                                            <?php echo esc_html($duration); ?>
                                        </div>
                                    </li>
                                <?php endif; ?>
                            </ul>

                        </div>

                        <div class="detail__media">
                            <!-- アイキャッチ画像 -->
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>">
                            <?php else : ?>
                                <!-- デフォルト画像を表示 -->
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/no-image.png'); ?>" alt="No Image">
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <!-- 投稿本文 -->
                <div class="detail__content">
                    <?php while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>

                <!-- 一覧へ戻るボタン -->
                <a href="<?php echo esc_url(home_url('/posts/')); ?>" class="c-btn">一覧へ戻る</a>
            </div>
        </section>

        
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
    
</body>
</html>