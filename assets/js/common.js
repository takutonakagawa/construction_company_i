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
  

      // オプションを渡す
      var rellax = new Rellax('.rellax', {
        speed: 8,
        center: false,
        wrapper: null,
        round: true,
        vertical: true,
        horizontal: false
      });

      var rellax = new Rellax('.rellax-2', {
        speed: 12,
        center: false,
        wrapper: null,
        round: true,
        vertical: true,
        horizontal: false
      });


      var rellax = new Rellax('.rellax-3', {
        speed: 2,
        center: false,
        wrapper: null,
        round: true,
        vertical: true,
        horizontal: false
      });


      var rellax = new Rellax('.rellax-4', {
        speed: 2,
        center: false,
        wrapper: null,
        round: true,
        vertical: true,
        horizontal: true
      });



      // scrollreavel

        // ScrollReveal().reveal('.fade-right', {
        //   delay: 300, // アニメーション開始までの時間
        //   duration: 1600, // アニメーション完了にかかる時間
        //   origin: 'right', // 要素がどの方向から来るか
        //   distance: '100%', // 移動する距離
        //   reset: true // フレームインの度に動かすか
        // });



        // ハンバーガーメニュー
        document.querySelector('.l-header__ham').addEventListener('click', function () {
          this.classList.toggle('open');
          document.querySelector(".l-header__sp").classList.toggle("is-open");
      });
      