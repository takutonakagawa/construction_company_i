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
                <h1>プライバシーポリシー</h1>

                    <p>池田総合設備株式会社（以下，「当社」といいます。）は，本ウェブサイト上で提供するサービス（以下，「本サービス」といいます。）における，ユーザーの個人情報の取扱いについて，以下のとおりプライバシーポリシー（以下，「本ポリシー」といいます。）を定めます。</p>

                    <h2>第1条（個人情報）</h2>
                    <p>「個人情報」とは，個人情報保護法にいう「個人情報」を指すものとし，生存する個人に関する情報であって，当該情報に含まれる氏名，生年月日，住所，電話番号，連絡先その他の記述等により特定の個人を識別できる情報及び容貌，指紋，声紋にかかるデータ，及び健康保険証の保険者番号などの当該情報単体から特定の個人を識別できる情報（個人識別情報）を指します。</p>

                    <h2>第2条（個人情報の収集方法）</h2>
                    <p>当社は，ユーザーが利用登録をする際に氏名，生年月日，住所，電話番号，メールアドレス，銀行口座番号，クレジットカード番号，運転免許証番号などの個人情報をお尋ねすることがあります。また，ユーザーと提携先などとの間でなされたユーザーの個人情報を含む取引記録や決済に関する情報を,当社の提携先（情報提供元，広告主，広告配信先などを含みます。以下，｢提携先｣といいます。）などから収集することがあります。</p>

                    <h2>第3条（個人情報を収集・利用する目的）</h2>
                    <p>当社が個人情報を収集・利用する目的は，以下のとおりです。</p>
                    <ul>
                        <li>当社サービスの提供・運営のため</li>
                        <li>ユーザーからのお問い合わせに回答するため（本人確認を行うことを含む）</li>
                        <li>ユーザーが利用中のサービスの新機能，更新情報，キャンペーン等及び当社が提供する他のサービスの案内のメールを送付するため</li>
                        <li>メンテナンス，重要なお知らせなど必要に応じたご連絡のため</li>
                        <li>利用規約に違反したユーザーや，不正・不当な目的でサービスを利用しようとするユーザーの特定をし，ご利用をお断りするため</li>
                        <li>ユーザーにご自身の登録情報の閲覧や変更，削除，ご利用状況の閲覧を行っていただくため</li>
                        <li>有料サービスにおいて，ユーザーに利用料金を請求するため</li>
                        <li>上記の利用目的に付随する目的</li>
                    </ul>

                    <h2>第4条（利用目的の変更）</h2>
                    <p>当社は，利用目的が変更前と関連性を有すると合理的に認められる場合に限り，個人情報の利用目的を変更するものとします。利用目的の変更を行った場合には，変更後の目的について，当社所定の方法により，ユーザーに通知し，または本ウェブサイト上に公表するものとします。</p>

                    <h2>第5条（個人情報の第三者提供）</h2>
                    <p>当社は，次に掲げる場合を除いて，あらかじめユーザーの同意を得ることなく，第三者に個人情報を提供することはありません。ただし，個人情報保護法その他の法令で認められる場合を除きます。</p>
                    <ul>
                        <li>人の生命，身体または財産の保護のために必要がある場合であって，本人の同意を得ることが困難であるとき</li>
                        <li>公衆衛生の向上または児童の健全な育成の推進のために特に必要がある場合であって，本人の同意を得ることが困難であるとき</li>
                        <li>国の機関もしくは地方公共団体またはその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって，本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがあるとき</li>
                    </ul>
                    <h2>第6条（個人情報の開示）</h2>
                    <p>当社は，本人から個人情報の開示を求められたときは，本人に対し，遅滞なくこれを開示します。ただし，開示することにより次のいずれかに該当する場合は，その全部または一部を開示しないこともあり，開示しない決定をした場合には，その旨を遅滞なく通知します。</p>
                    <ul>
                        <li>本人または第三者の生命，身体，財産その他の権利利益を害するおそれがある場合</li>
                        <li>当社の業務の適正な実施に著しい支障を及ぼすおそれがある場合</li>
                        <li>その他法令に違反することとなる場合</li>
                    </ul>
                    <p>前項の定めにかかわらず，履歴情報および特性情報などの個人情報以外の情報については，原則として開示いたしません。</p>

                    <h2>第7条（個人情報の訂正および削除）</h2>
                    <p>ユーザーは，当社の保有する自己の個人情報が誤った情報である場合には，当社が定める手続きにより，当社に対して個人情報の訂正，追加または削除（以下，「訂正等」といいます。）を請求することができます。</p>
                    <p>当社は，ユーザーから前項の請求を受けてその請求に応じる必要があると判断した場合には，遅滞なく，当該個人情報の訂正等を行うものとします。</p>
                    <p>当社は，前項の規定に基づき訂正等を行った場合，または訂正等を行わない旨の決定をしたときは遅滞なく，これをユーザーに通知します。</p>

                    <h2>第8条（個人情報の利用停止等）</h2>
                    <p>当社は，本人から，個人情報が，利用目的の範囲を超えて取り扱われているという理由，または不正の手段により取得されたものであるという理由により，その利用の停止または消去（以下，「利用停止等」といいます。）を求められた場合には，遅滞なく必要な調査を行います。</p>
                    <p>前項の調査結果に基づき，その請求に応じる必要があると判断した場合には，遅滞なく，当該個人情報の利用停止等を行います。</p>
                    <p>当社は，前項の規定に基づき利用停止等を行った場合，または利用停止等を行わない旨の決定をしたときは，遅滞なく，これをユーザーに通知します。</p>
                    <p>前2項にかかわらず，利用停止等に多額の費用を有する場合その他利用停止等を行うことが困難な場合であって，ユーザーの権利利益を保護するために必要なこれに代わるべき措置をとれる場合は，この代替策を講じるものとします。</p>


                    <h2>第9条（プライバシーポリシーの変更）</h2>
                    <p>本ポリシーの内容は，法令その他本ポリシーに別段の定めのある事項を除いて，ユーザーに通知することなく，変更することができるものとします。 当社が別途定める場合を除いて，変更後のプライバシーポリシーは，本ウェブサイトに掲載したときから効力を生じるものとします。</p>

                </div>
        
                <div class="contact__privacy-note" style="margin-bottom: 40px;">
                    ※「送信する」を押下された場合プライバシーポリシーに同意したとみなします。
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