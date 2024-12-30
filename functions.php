<?php
    function add_custom_menu_li_class($classes, $item, $args) {
        if (isset($args->theme_location) && $args->theme_location === 'header-menu') {
            $classes[] = 'l-header__list';
        }
        return $classes;
    }
    add_filter('nav_menu_css_class', 'add_custom_menu_li_class', 10, 3);
    


    function custom_archive_rewrite_rule() {
        add_rewrite_rule(
            '^archive/?$',
            'index.php?post_type=post',
            'top'
        );
    }
    add_action('init', 'custom_archive_rewrite_rule');
    

    // メタボックス
    // カスタムメタボックスを追加
function add_custom_meta_boxes() {
    add_meta_box(
        'custom_meta_box', // メタボックスのID
        '工事情報', // メタボックスのタイトル
        'render_custom_meta_box', // コールバック関数
        'post', // 投稿タイプ
        'normal', // 表示位置 (normal, side, etc.)
        'high' // 表示優先度
    );
}
add_action('add_meta_boxes', 'add_custom_meta_boxes');

// メタボックスの内容を表示
function render_custom_meta_box($post) {
    // 保存済みの値を取得
    $cost = get_post_meta($post->ID, 'cost', true);
    $location = get_post_meta($post->ID, 'location', true);
    $duration = get_post_meta($post->ID, 'duration', true);

    // セキュリティフィールド
    wp_nonce_field('custom_meta_box_nonce', 'custom_meta_box_nonce_field');

    // メタボックスのHTML
    ?>
    <p>
        <label for="cost">工事費用</label><br>
        <input type="text" name="cost" id="cost" value="<?php echo esc_attr($cost); ?>" style="width: 100%;">
    </p>
    <p>
        <label for="location">現場</label><br>
        <input type="text" name="location" id="location" value="<?php echo esc_attr($location); ?>" style="width: 100%;">
    </p>
    <p>
        <label for="duration">工期</label><br>
        <input type="text" name="duration" id="duration" value="<?php echo esc_attr($duration); ?>" style="width: 100%;">
    </p>
    <?php
}

// メタボックスのデータを保存
function save_custom_meta_boxes($post_id) {
    // セキュリティチェック
    if (!isset($_POST['custom_meta_box_nonce_field']) || !wp_verify_nonce($_POST['custom_meta_box_nonce_field'], 'custom_meta_box_nonce')) {
        return;
    }

    // 自動保存時は何もしない
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // ユーザー権限の確認
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // 入力値を保存
    if (isset($_POST['cost'])) {
        update_post_meta($post_id, 'cost', sanitize_text_field($_POST['cost']));
    }
    if (isset($_POST['location'])) {
        update_post_meta($post_id, 'location', sanitize_text_field($_POST['location']));
    }
    if (isset($_POST['duration'])) {
        update_post_meta($post_id, 'duration', sanitize_text_field($_POST['duration']));
    }
}
add_action('save_post', 'save_custom_meta_boxes');


// アイキャッチ画像を有効化
add_theme_support('post-thumbnails');

// アイキャッチ画像のサイズを設定（必要に応じて調整）
set_post_thumbnail_size(300, 200, true); // 幅300px、高さ200px、トリミング有効



function limit_one_category($post_id) {
    // 自動保存や権限のないユーザーによる保存を防ぐ
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // 投稿のカテゴリを取得
    $categories = wp_get_post_categories($post_id);

    // 複数カテゴリが設定されている場合、最初のカテゴリ以外を解除
    if (count($categories) > 1) {
        $first_category = array_shift($categories); // 最初のカテゴリを取得
        wp_set_post_categories($post_id, [$first_category]); // 最初のカテゴリのみ設定
    }
}
add_action('save_post', 'limit_one_category');

?>