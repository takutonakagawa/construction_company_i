<!DOCTYPE html>
<html lang="en">
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
            <div class="en">news</div>
            <div class="ja">情報一覧</div>
        </div>

        <!-- tag -->
        <div class="archive__tag-list">
            <div class="archive__tag">
                <a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>">ALL</a>
            </div>
            <?php
            $categories = get_categories();
            foreach ($categories as $category) : ?>
                <div class="archive__tag">
                    <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
                        <?php echo esc_html($category->name); ?>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- article -->
        <ul class="archive__article-list">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <li class="archive__article-item">
                    <div class="archive__article">
                        <a href="<?php the_permalink(); ?>">
                            <img class="archive__article-img" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>">
                            <div class="archive__article-content">
                                <div class="archive__article-line01">
                                    <div class="archive__article-date">
                                        <?php echo get_the_date('Y/m/d'); ?>
                                    </div>
                                    <?php $category = get_the_category(); ?>
                                    <?php if (!empty($category)) : ?>
                                        <div class="archive__tag">
                                            <?php echo esc_html($category[0]->name); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="archive__article-line02">
                                    <div class="archive__article-title">
                                        <?php the_title(); ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
            <?php endwhile; else : ?>
                <p>記事が見つかりませんでした。</p>
            <?php endif; ?>
        </ul>

        <!-- pagination -->
        <div class="archive__pagination">
            <?php
            echo paginate_links(array(
                'total' => $wp_query->max_num_pages,
                'prev_text' => '&laquo; 前へ',
                'next_text' => '次へ &raquo;',
            ));
            ?>
        </div>
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