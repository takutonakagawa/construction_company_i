<?php
/*
Template Name: Contact Page
*/
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ</title>

     <!-- 共通css -->
     <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/assets/css/common.css'); ?>">
    <!-- 共通css / -->
    <!-- 固有css -->
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/assets/css/contact.css'); ?>">

    <!-- SVGファビコン -->
    <link rel="icon" href="/assets/img/common/logo.svg" type="image/svg+xml">
</head>
<body>
      <!-- header -->
      <?php get_template_part('parts/header'); ?>
    <!-- header / -->

    <main>
        <!-- mv -->
        <section class="p-mv p-mv--contact">
            <h1 class="p-mv__title">
                <div class="ja">お問い合わせ</div>
                <div class="en">Contact</div>
            </h1>
        </section>
        <!-- mv / -->

        <!-- contact -->
        <section class="contact" id="contact">
            <img class="p-mv__mark rellax" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/MARK2.png'); ?>" alt="">


            <div class="c-inner contact__inner">
                <h1 class="c-title-secondary">
                    <div class="en">Contact form</div>
                    <div class="ja">お問い合わせ</div>
                </h1>
        
                <div class="contact__form">
                    <div class="c-contact__form contact__form-item">
                        <label for="name" class="contact__label">
                            お名前 <span class="c-required">※</span>
                        </label>
                        <div class="contact__input contact__input--compact">
                            <input class="c-forms" id="name">
                        </div>
                        <div class="contact__error contact__error--name">お名前が正確に入力されていません</div>
                    </div>
        
                    <div class="c-contact__form contact__form-item">
                        <label for="furigana" class="contact__label">
                            ふりがな <span class="c-required">※</span>
                        </label>
                        <div class="contact__input contact__input--compact">
                            <input class="c-forms" id="furigana" size="43">
                        </div>
                        <div class="contact__error contact__error--furigana">ふりがなが正確に入力されていません</div>
                    </div>
        
                    <div class="c-contact__form contact__form-item">
                        <label for="tel" class="contact__label">
                            電話番号 <span class="c-required">※</span>
                        </label>
                        <div class="contact__input">
                            <input class="c-forms" id="tel" size="89">
                        </div>
                        <div class="contact__error contact__error--tel">電話番号が正確に入力されていません</div>
                    </div>
        
                    <div class="c-contact__form contact__form-item">
                        <label for="email" class="contact__label">
                            アドレス <span class="c-required">※</span>
                        </label>
                        <div class="contact__input">
                            <input class="c-forms" id="email" size="89">
                        </div>
                        <div class="contact__error contact__error--email">アドレスが正確に入力されていません</div>
                    </div>
        
                    <div class="c-contact__form contact__form-item">
                        <label for="address" class="contact__label">
                            住所 <span class="c-required">※</span>
                        </label>
                        <div class="contact__input">
                            <input class="c-forms" id="address" size="89">
                        </div>
                        <div class="contact__error contact__error--address">住所が正確に入力されていません</div>
                    </div>
        
                    <div class="c-contact__form contact__form-item">
                        <div class="contact__label">
                            種別 <span class="c-required">※</span>
                        </div>
                        <div class="contact__radio-group">
                            <div class="contact__radio-item">
                                <input type="radio" name="contact_reason" value="採用について" id="recruitment" checked>
                                <label for="recruitment">採用について</label>
                            </div>
                            <div class="contact__radio-item">
                                <input type="radio" name="contact_reason" value="お仕事のご依頼" id="work_request">
                                <label for="work_request">お仕事のご依頼</label>
                            </div>
                            <div class="contact__radio-item">
                                <input type="radio" name="contact_reason" value="ご質問" id="questions">
                                <label for="questions">ご質問</label>
                            </div>
                            <div class="contact__radio-item">
                                <input type="radio" name="contact_reason" value="その他" id="other">
                                <label for="other">その他</label>
                            </div>
                        </div>
                        <div class="contact__error contact__error--category">種別が正確に選択されていません</div>
                    </div>
        
                    <div class="c-contact__form contact__form-item">
                        <label for="message" class="contact__label">
                            内容 <span class="c-required">※</span>
                        </label>
                        <textarea id="message" class="contact__textarea"></textarea>
                        <div class="contact__error contact__error--content">内容が正確に入力されていません</div>
                    </div>
                </div>
        
                <div class="contact__privacy">
                    <p>プライバシーポリシーが入ります。</p>
                </div>
        
                <div class="contact__btn">
                    <a href="" class="c-btn">送信する</a>
                </div>
            </div>
        </section>
        <!-- contact / -->


        <!--insta -->
        <?php get_template_part('parts/insta'); ?>
        <!--insta / -->
         <!--line -->
         <?php get_template_part('parts/line'); ?>
        <!--line / -->
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