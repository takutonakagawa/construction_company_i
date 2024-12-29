<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>料金詳細</title>

    <!-- 共通css -->
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/assets/css/common.css'); ?>">
    <!-- 共通css / -->
    <!-- 固有css -->
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/assets/css/price.css'); ?>">
    <!-- 固有css/ -->
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
        
            <img class="p-mv__main"  src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/price/mv-price.png'); ?>" alt="">
            <img class="p-mv__mark rellax" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/MARK2.png'); ?>" alt="">
        
            <img class="p-mv__lines rellax-2" ssrc="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/lines.png'); ?>" alt="">
            <h1 class="p-mv__title rellax-3">
                <div class="ja">料金案内</div>
                <div class="en">Price</div>
            </h1>     
        </section>
        <!-- mv / -->

        <!-- price -->
        <section class="price" id="construction">
            <div class="c-inner price__inner">
                <div class="c-title">
                    <span class="c-slash"></span>
                    <div class="ja">料金一覧</div>
                    <div class="en">Price</div>
                </div>

                <div class="p-price__contents">
                    <div class="p-price__content">
                        <div class="p-price__explain irenovation__explain">
                                <div class="p-price__subtitle irenovation__subtitle">トイレ工事費</div>
                                <div class="price__list">
                                    <div class="p-price__price irenovation__price-title">本体(60%~70%off)</div>
                                    <div class="irenovation__price">¥33,000~</div>
                                </div>
                                <div class="price__list">
                                    <div class="p-price__price irenovation__price-title">タンクトイレ</div>
                                    <div class="irenovation__price">¥19,000</div>
                                </div>
                                <div class="price__list">
                                    <div class="p-price__price irenovation__price-title">タンクレストイレ</div>
                                    <div class="irenovation__price">¥22,000</div>
                                </div>
                                <div class="price__list">
                                    <div class="p-price__price irenovation__price-title">キャビネットタイプ</div>
                                    <div class="irenovation__price">¥35,000</div>
                                </div>
                                <div class="price__list">
                                    <div class="p-price__price irenovation__price-title">ウォシュレット</div>
                                    <div class="irenovation__price">¥8,000</div>
                                </div>
                                <div class="price__list">
                                    <div class="p-price__price irenovation__price-title">機能部取り替え</div>
                                    <div class="irenovation__price">¥12,000</div>
                                </div>
                            </div>
                            <img class="p-price__img irenovation__img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/toilet.jpg'); ?>" alt="">
                            <div class="p-price__btn--center">
                                <!-- ボタン -->
                            </div>
                        </div>

                        <div class="p-price__content">
                            <div class="p-price__explain irenovation__explain">
                                <div class="p-price__subtitle irenovation__subtitle">洗面化粧台工事費</div>
                                <div class="price__list">
                                    <div class="p-price__price irenovation__price-title">本体(60%~70%off)</div>
                                    <div class="irenovation__price">¥30,000~</div>
                                </div>
                                <div class="price__list">
                                    <div class="p-price__price irenovation__price-title">W900mm</div>
                                    <div class="irenovation__price">¥19,000</div>
                                </div>
                                <div class="price__list">
                                    <div class="p-price__price irenovation__price-title">W1200mm~1500mm</div>
                                    <div class="irenovation__price">¥29,000</div>
                                </div>
                                <div class="price__list">
                                    <div class="p-price__price irenovation__price-title">W1650mm~1800mm</div>
                                    <div class="irenovation__price">¥50,000</div>
                                </div>
                                <div class="price__list">
                                    <div class="p-price__price irenovation__price-title">サイドキャビネット</div>
                                    <div class="irenovation__price">¥15,000/台</div>
                                </div>
                                <div class="price__list">
                                    <div class="p-price__price irenovation__price-title">止水栓交換</div>
                                    <div class="irenovation__price">¥6,000/ヶ</div>
                                </div>
                            </div>
                            <img class="p-price__img irenovation__img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/price/price-kesho.jpg'); ?>" alt="">
                            <div class="p-price__btn--center">
                                <!-- ボタン -->
                            </div>
                        </div>

                        <div class="p-price__content">
                            <div class="p-price__explain irenovation__explain">
                                <div class="p-price__subtitle irenovation__subtitle">システムキッチン工事費</div>
                                <div class="price__list">
                                    <div class="p-price__price irenovation__price-title">本体(60%~70%off)</div>
                                    <div class="irenovation__price">¥130,000~</div>
                                </div>
                                <div class="price__list">
                                    <div class="p-price__price irenovation__price-title">キッチン組立施工費</div>
                                    <div class="irenovation__price">¥40,000~¥150,000</div>
                                </div>
                                <div class="price__list">
                                    <div class="p-price__price irenovation__price-title">解体費</div>
                                    <div class="irenovation__price">¥30,000~¥50,000</div>
                                </div>
                            </div>
                            <img class="p-price__img irenovation__img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/price/price-kitchen.jpg'); ?>" alt="">
                            <div class="p-price__btn--center">
                                <!-- ボタン -->
                            </div>
                        </div>

                        <div class="p-price__content">
                            <div class="p-price__explain irenovation__explain">
                                <div class="p-price__subtitle irenovation__subtitle">ユニットバス工事費</div>
                                <div class="price__list">
                                    <div class="p-price__price irenovation__price-title">本体(40%~75%off)</div>
                                    <div class="irenovation__price">¥300,000~</div>
                                </div>
                                <div class="price__list">
                                    <div class="p-price__price irenovation__price-title">UB解体撤去</div>
                                    <div class="irenovation__price">¥40,000~100,000</div>
                                </div>
                                <div class="price__list">
                                    <div class="p-price__price irenovation__price-title">在来風呂解体</div>
                                    <div class="irenovation__price">¥100,000~150,000</div>
                                </div>
                                <div class="price__list">
                                    <div class="p-price__price irenovation__price-title">UB組立施工費</div>
                                    <div class="irenovation__price">¥80,000~150,000</div>
                                </div>
                            </div>
                            <img class="p-price__img irenovation__img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/price/price-ub.jpg'); ?>" alt="">
                            <div class="p-price__btn--center">
                                <!-- ボタン -->
                            </div>
                        </div>

                        <div class="p-price__content">
                            <div class="p-price__explain irenovation__explain">
                                <div class="p-price__subtitle irenovation__subtitle">給湯器工事費</div>
                                <div class="price__list">
                                    <div class="p-price__price irenovation__price-title">給湯専用</div>
                                    <div class="irenovation__price">¥23,000</div>
                                </div>
                                <div class="price__list">
                                    <div class="p-price__price irenovation__price-title">追い炊き機能</div>
                                    <div class="irenovation__price">¥28,000</div>
                                </div>
                                <div class="price__list">
                                    <div class="p-price__price irenovation__price-title">エコキュート</div>
                                    <div class="irenovation__price">¥80,000</div>
                                </div>
                            </div>
                            <img class="p-price__img irenovation__img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/business_renovation.jpeg'); ?>" alt="">
                            <div class="p-price__btn--center">
                            </div>
                        </div>

                        <div class="p-price__content">
                        <div class="p-price__explain irenovation__explain">
                            <div class="p-price__subtitle irenovation__subtitle">給湯器工事費</div>
                            <div class="price__list">
                                <div class="p-price__price irenovation__price-title">給湯専用</div>
                                <div class="irenovation__price">¥23,000</div>
                            </div>
                            <div class="price__list">
                                <div class="p-price__price irenovation__price-title">追い炊き機能</div>
                                <div class="irenovation__price">¥28,000</div>
                            </div>
                            <div class="price__list">
                                <div class="p-price__price irenovation__price-title">エコキュート</div>
                                <div class="irenovation__price">¥80,000</div>
                            </div>
                        </div>
                        <img class="p-price__img irenovation__img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/business_renovation.jpeg'); ?>" alt="">
                        
                        <div class="p-price__btn--center">
                            <!-- <a href="/business.html#renovation-section" class="c-btn">詳細へ</a> -->
                        </div>
                    </div>

                    <div class="p-price__content">
                        <div class="p-price__explain irenovation__explain">
                            <div class="p-price__subtitle irenovation__subtitle">【壁】内装工事費</div>
                            <div class="price__list">
                                <div class="p-price__price irenovation__price-title">量産品</div>
                                <div class="irenovation__price">¥950/㎡</div>
                            </div>
                            <div class="price__list">
                                <div class="p-price__price irenovation__price-title">千番台</div>
                                <div class="irenovation__price">¥1,200/㎡</div>
                            </div>
                            <div class="price__list">
                                <div class="p-price__price irenovation__price-title">エコカラット</div>
                                <div class="irenovation__price">¥9,600~/㎡</div>
                            </div>
                        </div>
                        <img class="p-price__img irenovation__img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/business_renovation.jpeg'); ?>" alt="">
                        <div class="p-price__btn--center">
                            <!-- <a href="/business.html#renovation-section" class="c-btn">詳細へ</a> -->
                        </div>
                    </div>

                    <div class="p-price__content">
                        <div class="p-price__explain irenovation__explain">
                            <div class="p-price__subtitle irenovation__subtitle">【床】内装工事費</div>
                            <div class="price__list">
                                <div class="p-price__price irenovation__price-title">クッションフロア</div>
                                <div class="irenovation__price">¥3,000/㎡</div>
                            </div>
                            <div class="price__list">
                                <div class="p-price__price irenovation__price-title">フロアタイル</div>
                                <div class="irenovation__price">¥4,500/㎡</div>
                            </div>
                            <div class="price__list">
                                <div class="p-price__price irenovation__price-title">タイルカーペット</div>
                                <div class="irenovation__price">¥2,500/㎡</div>
                            </div>
                            <div class="price__list">
                                <div class="p-price__price irenovation__price-title">長尺シート</div>
                                <div class="irenovation__price">¥3,500/㎡</div>
                            </div>
                            <div class="price__list">
                                <div class="p-price__price irenovation__price-title">フローリング</div>
                                <div class="irenovation__price">¥3,000/㎡</div>
                            </div>
                            <div class="price__list">
                                <div class="p-price__price irenovation__price-title">フローリング捲り</div>
                                <div class="irenovation__price">¥2,100/㎡</div>
                            </div>
                            <div class="price__list">
                                <div class="p-price__price irenovation__price-title">カーペット捲り</div>
                                <div class="irenovation__price">¥1,500/㎡</div>
                            </div>
                        </div>
                        <img class="p-price__img irenovation__img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/business_renovation.jpeg'); ?>" alt="">
                        <div class="p-price__btn--center">
                            <!-- <a href="/business.html#renovation-section" class="c-btn">詳細へ</a> -->
                        </div>
                    </div>

                    <div class="p-price__content">
                        <div class="p-price__explain irenovation__explain">
                            <div class="p-price__subtitle irenovation__subtitle">エアコン工事費</div>
                            <div class="price__list">
                                <div class="p-price__price irenovation__price-title">壁掛け</div>
                                <div class="irenovation__price">¥20,000</div>
                            </div>
                            <div class="price__list">
                                <div class="p-price__price irenovation__price-title">業務用</div>
                                <div class="irenovation__price">¥80,000</div>
                            </div>
                            <div class="price__list">
                                <div class="p-price__price irenovation__price-title">化粧カバー</div>
                                <div class="irenovation__price">¥4,000/1m</div>
                            </div>
                        </div>
                        <img class="p-price__img irenovation__img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/business_renovation.jpeg'); ?>" alt="">
                        <div class="p-price__btn--center">
                            <!-- <a href="/business.html#renovation-section" class="c-btn">詳細へ</a> -->
                        </div>
                    </div>

                    <div class="p-price__btn--center-W">
                        <a href="/business.html#renovation-section" class="c-btn irenovation__btn">アイリノベ(i renovation)一覧へ<span class="c-arrow"></span></a>
                        <a href="https://i--renovation.com/" class="c-btn c-btn__2lines irenovation__btn">アイリノベ<br>(i renovation)特設サイトへ<span class="c-arrow"></span></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- price / -->

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