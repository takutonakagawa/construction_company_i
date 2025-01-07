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

    // クッキーをチェック
    const lastAccess = getCookie('lastCutinAccess');
    const now = new Date().getTime();
    const thirtyMinutes = 30 * 60 * 1000;

    if (lastAccess && now - parseInt(lastAccess, 10) < thirtyMinutes) {
        // 30分以内ならスキップしてメインコンテンツを表示
        document.querySelector(".l-cutin").style.display = "none";

         // ヘッダーを表示
    header.style.display = 'block';
    header.style.opacity = '1';

    // メインコンテンツを表示
    topContent.style.display = 'block';
    topContent.style.opacity = '1';

    // フッターを表示
    footer.style.display = 'block';
    footer.style.opacity = '1';

    // スクロール位置をリセット
    window.scrollTo(0, 0);
        return;
    }

    // 30分以上経過していたらクッキーを更新
    setCookie('lastCutinAccess', now, 1); // 1日は有効期限として適当な値

    // l-cutinを白でフェードイン
    requestAnimationFrame(() => {
        cutinContainer.classList.add('show');
    });

    // スキップボタンのクリックイベント
    skipButton.addEventListener('click', () => {
        fadeOutCutin();
    });

    // 動画終了時にフェードアウトを開始
    video.addEventListener('ended', () => {
        fadeOutCutin();
    });

    // フェードアウトとメインコンテンツ表示処理を統一
    function fadeOutCutin() {
        cutinContainer.style.opacity = '0';

        cutinContainer.addEventListener('transitionend', () => {
            cutinContainer.style.display = 'none';
            showMainContent();
        }, { once: true });
    }

    // メインコンテンツを表示する処理
    function showMainContent() {
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
    }

    // クッキーを設定する関数
    function setCookie(name, value, days) {
        const expires = new Date();
        expires.setTime(expires.getTime() + days * 24 * 60 * 60 * 1000);
        document.cookie = `${name}=${value};expires=${expires.toUTCString()};path=/`;
    }

    // クッキーを取得する関数
    function getCookie(name) {
        const match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
        return match ? match[2] : null;
    }
});




// document.addEventListener('DOMContentLoaded', () => {
//     const cutinContainer = document.querySelector('.l-cutin'); // フェードアウト用コンテナ
//     const video = document.getElementById('cutin'); // 動画
//     const topContent = document.getElementById('top'); // メインコンテンツ
//     const header = document.querySelector('.l-header'); // ヘッダー
//     const footer = document.querySelector('.l-footer'); // フッター
//     const skipButton = document.getElementById('skip-button'); // スキップボタン

//     if (!cutinContainer || !video || !topContent || !header || !footer || !skipButton) {
//         console.error('Error: Missing required elements in DOM.');
//         return;
//     }

//     // l-cutinを白でフェードイン
//     requestAnimationFrame(() => {
//         cutinContainer.classList.add('show');
//     });

//     // スキップボタンのクリックイベント
//     skipButton.addEventListener('click', () => {
//         // 動画終了時と同じ処理を実行
//         fadeOutCutin();
//     });

//     // 動画終了時にフェードアウトを開始
//     video.addEventListener('ended', () => {

//         // フェードアウト処理を実行
//         fadeOutCutin();
//     });

//     // フェードアウトとメインコンテンツ表示処理を統一
//     function fadeOutCutin() {
//         // 動画コンテナをフェードアウト
//         cutinContainer.style.opacity = '0';

//         // フェードアウト後の処理
//         cutinContainer.addEventListener('transitionend', () => {
//             cutinContainer.style.display = 'none'; // 動画コンテナを非表示

//             // ヘッダーをフェードイン
//             header.style.display = 'block';
//             header.style.opacity = '0';
//             requestAnimationFrame(() => {
//                 header.style.opacity = '1';
//             });

//             // メインコンテンツをフェードイン
//             topContent.style.display = 'block';
//             topContent.style.opacity = '0';
//             requestAnimationFrame(() => {
//                 topContent.style.opacity = '1';
//             });

//             // フッターをフェードイン
//             footer.style.display = 'block';
//             footer.style.opacity = '0';
//             requestAnimationFrame(() => {
//                 footer.style.opacity = '1';
//             });

//             // スクロール位置をリセット
//             window.scrollTo(0, 0);
//         }, { once: true }); // transitionend イベントが複数回発火しないようにする
//     }
// });
