<?php
/**
 * Header Template
 */
?>
<header class="l-header">
    <div class="l-header__container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
            <i>
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/logo.svg'); ?>" alt="<?php bloginfo('name'); ?>">
            </i>
            <div class="text">
                <div class="title">株式会社池田総合設備</div>
                <div class="copy">人の想いを形で結果として応える会社</div>
            </div>
        </a>
        <nav class="l-header__nav">
            <ul class="l-header__menu">
                <li class="l-header__list">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="<?php echo is_front_page() ? 'is-current' : ''; ?>">TOP</a>
                </li>
                <li class="l-header__list">
                    <a href="<?php echo esc_url(home_url('/about/')); ?>" class="<?php echo is_page('about') ? 'is-current' : ''; ?>">会社概要</a>
                </li>
                <li class="l-header__list">
                    <a href="<?php echo esc_url(home_url('/archive/')); ?>" class="<?php echo is_page('archive') ? 'is-current' : ''; ?>">施工実績 / 物件案内</a>
                </li>
                <li class="l-header__list">
                    <a href="<?php echo esc_url(home_url('/price/')); ?>" class="<?php echo is_page('price') ? 'is-current' : ''; ?>">料金案内</a>
                </li>
                <li class="l-header__list">
                    <a href="<?php echo esc_url(home_url('/business/')); ?>" class="<?php echo is_page('business') ? 'is-current' : ''; ?>">事業内容</a>
                </li>
                <li class="l-header__list">
                    <a href="<?php echo esc_url(home_url('/recruitment/')); ?>" class="<?php echo is_page('recruitment') ? 'is-current' : ''; ?>">採用情報</a>
                </li>
                <li class="l-header__list">
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="<?php echo is_page('contact') ? 'is-current' : ''; ?>">お問い合わせ</a>
                </li>
            </ul>

            <div class="l-header__sns">
                <a href="#">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/LINE.png'); ?>" alt="LINE">
                </a>
                <a href="#">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/Instagram.png'); ?>" alt="Instagram">
                </a>
                <a href="#">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/TikTok.png'); ?>" alt="TikTok">
                </a>
            </div>
        </nav>

        <div class="l-header__sp">
        <ul class="l-header__sp-menu">
            <li class="l-header__sp-list">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="<?php echo is_front_page() ? 'is-current' : ''; ?>">TOP</a>
            </li>
            <li class="l-header__sp-list">
                <a href="<?php echo esc_url(home_url('/about/')); ?>" class="<?php echo is_page('about') ? 'is-current' : ''; ?>">会社概要</a>
            </li>
            <li class="l-header__sp-list">
                <a href="<?php echo esc_url(home_url('/archive/')); ?>" class="<?php echo is_page('archive') ? 'is-current' : ''; ?>">施工実績 / 物件案内</a>
            </li>
            <li class="l-header__sp-list">
                <a href="<?php echo esc_url(home_url('/price/')); ?>" class="<?php echo is_page('price') ? 'is-current' : ''; ?>">料金案内</a>
            </li>
            <li class="l-header__sp-list">
                <a href="<?php echo esc_url(home_url('/business/')); ?>" class="<?php echo is_page('business') ? 'is-current' : ''; ?>">事業内容</a>
            </li>
            <li class="l-header__sp-list">
                <a href="<?php echo esc_url(home_url('/recruitment/')); ?>" class="<?php echo is_page('recruitment') ? 'is-current' : ''; ?>">採用情報</a>
            </li>
            <li class="l-header__sp-list">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="<?php echo is_page('contact') ? 'is-current' : ''; ?>">お問い合わせ</a>
            </li>
        </ul>

            <div class="l-header__sp-sns">
                <a href="#">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/LINE.png'); ?>" alt="LINE">
                </a>
                <a href="#">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/Instagram.png'); ?>" alt="Instagram">
                </a>
                <a href="#">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/common/TikTok.png'); ?>" alt="TikTok">
                </a>
            </div>
        </div>

        <div class="l-header__ham">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>
