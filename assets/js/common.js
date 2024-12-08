// fadein
function checkVisibility() {
    const elements = document.querySelectorAll('.c-anim-fade-in'); // 全ての .c-anim-fade-in 要素を取得
    const windowHeight = window.innerHeight;
  
    elements.forEach((element) => {
      const elementTop = element.getBoundingClientRect().top;
  
      // 画面の半分の位置までスクロールされてきたらアニメーション発火
      if (elementTop < windowHeight / 2) {
        element.classList.add('is-visible');
      }
    });
  }
  
  // スクロールイベントを監視
  window.addEventListener('scroll', checkVisibility);
  
  // 初回実行（ページロード時）
  checkVisibility();
  