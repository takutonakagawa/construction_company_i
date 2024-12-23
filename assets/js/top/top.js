document.addEventListener('DOMContentLoaded', () => {
    const cutinContainer = document.querySelector('.l-cutin'); // フェードアウト用コンテナ
    const video = document.getElementById('cutin'); // 動画
    const topContent = document.getElementById('top'); // メインコンテンツ
    const header = document.querySelector('.l-header'); // ヘッダー
    const footer = document.querySelector('.l-footer'); // フッター
    const skipButton = document.getElementById('skip-button'); // スキップボタン

    if (!cutinContainer || !video || !topContent || !header || !footer || !skipButton) {
        console.error('Error: Missing required elements in DOM.');
        return;
    }

    // l-cutinを白でフェードイン
    requestAnimationFrame(() => {
        cutinContainer.classList.add('show');
    });

    // スキップボタンのクリックイベント
    skipButton.addEventListener('click', () => {
        // 動画終了時と同じ処理を実行
        fadeOutCutin();
    });

    // 動画終了時にフェードアウトを開始
    video.addEventListener('ended', () => {

        // フェードアウト処理を実行
        fadeOutCutin();
    });

    // フェードアウトとメインコンテンツ表示処理を統一
    function fadeOutCutin() {
        // 動画コンテナをフェードアウト
        cutinContainer.style.opacity = '0';

        // フェードアウト後の処理
        cutinContainer.addEventListener('transitionend', () => {
            cutinContainer.style.display = 'none'; // 動画コンテナを非表示

            // ヘッダーをフェードイン
            header.style.display = 'block';
            header.style.opacity = '0';
            requestAnimationFrame(() => {
                header.style.opacity = '1';
            });

            // メインコンテンツをフェードイン
            topContent.style.display = 'block';
            topContent.style.opacity = '0';
            requestAnimationFrame(() => {
                topContent.style.opacity = '1';
            });

            // フッターをフェードイン
            footer.style.display = 'block';
            footer.style.opacity = '0';
            requestAnimationFrame(() => {
                footer.style.opacity = '1';
            });

            // スクロール位置をリセット
            window.scrollTo(0, 0);
        }, { once: true }); // transitionend イベントが複数回発火しないようにする
    }
});
