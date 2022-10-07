$(function(){
   // --------------------メインビジュアルののびるやつここから ---------------------
  function BgFadeAnime(){
    $('.bgLRextendTrigger').each(function(){
      var elemPos = $(this).offset().top-50;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight){
        $(this).addClass('bgLRextend');
      }else{
        $(this).removeClass('bgLRextend');
      }
    });	

    $('.bgappearTrigger').each(function(){ 
      var elemPos = $(this).offset().top-50;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight){
        $(this).addClass('bgappear');
      }else{
        $(this).removeClass('bgappear');
      }
    });		
  }

	$(window).on('load', function(){
		BgFadeAnime();
	});
  // --------------------メインビジュアルののびるやつここまで ---------------------

  // ----------------メインビジュアルのタイピング -----------------
  function TextTypingAnime() {
    $('.TextTyping').each(function () {
      var elemPos = $(this).offset().top - 50;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      var thisChild = "";
      if (scroll >= elemPos - windowHeight) {
        thisChild = $(this).children();
        thisChild.each(function (i) {
          var time = 100;
          $(this).delay(time * i).fadeIn(time);
        });
      } else {
        thisChild = $(this).children();
        thisChild.each(function () {
          $(this).stop(); 
          $(this).css("display", "none");
        });
      }
    });
  }
  
  $(window).scroll(function () {
    TextTypingAnime();
  });
  
  $(window).on('load', function () {
    var element = $(".TextTyping");
    element.each(function () {
      var text = $(this).html();
      var textbox = "";
      text.split('').forEach(function (t) {
        if (t !== " ") {
          textbox += '<span>' + t + '</span>';
        } else {
          textbox += t;
        }
      });
      $(this).html(textbox);

    });

    $('.TextTyping span:nth-child(14)').append('<br>');
  });
  // ----------------メインビジュアルのタイピングここまで -----------------

  //------------------スクロールメニューここから------------------
  $('.nav__link').on('click', function(){
    var id =$(this).attr('href');
    var pos = $(id).offset().top; 
    $('html, body').animate({'scrollTop': pos}, 300);
  });

  //------------------スクロールメニューここまで------------------

  //-------------------ハンバーガーメニューここから-------------------
  $('.burger').on('click', function(){
    $(this).toggleClass('active');
    $('.sp-nav').toggleClass('active');
    $('body').toggleClass('active');
    // $('.sp-nav').fadeToggle();
  });
  
  // $('.gnav--sp__link').on('click', function () {
  //   $('.burger').removeClass('active');
  //   $('.nav').removeClass('active');
  //   $('body').removeClass('active');
  // });
  //-------------------ハンバーガーメニューここまで-------------------


  // --------------------スクロールでfadeinする動きここから -----------------------
  //スクロールで使う変数
  var mvHight = $('.mv').outerHeight(true);
  var pageHeadingHight = $('.page-heading').outerHeight(true);

  // スクロールで固定されるヘッダー
  $(window).on('scroll', function(){
    var scrollTop = $(this).scrollTop();
    if(scrollTop > mvHight || scrollTop > pageHeadingHight){ 
      $('.site-link').addClass('fixed');
      $('.burger').addClass('fixed');
    }
    
    else{
      $('.site-link').removeClass('fixed');
      $('.burger').removeClass('fixed');
    }
  });
  // --------------------スクロールでfadeinする動きここまで -----------------------


  //----------------「topへ戻る」関連ここから ---------------------
  $('#top').hide();
  $(window).scroll(function(){
    if($(this).scrollTop()>mvHight || $(this).scrollTop() > pageHeadingHight){
      $('#top').fadeIn(400);
    }
    else{
      $('#top').fadeOut(400);
    }
  });

  $('#top').click(function(){ 
    $('html,body').animate({'scrollTop':0},600);
  });

  //----------------「topへ戻る」関連ここまで ---------------------

  


  // --------------------フェードインここから ---------------------
  //itemの下からフェードイン
  function fadeUpAnime(){
    $('.fadeUpTrigger').each(function(){ 
      var elemPos = $(this).offset().top-100; 
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight){
      $(this).addClass('fadeUpAnime');
      }else{
      $(this).removeClass('fadeUpAnime');
      }
    });
  }
  
  $(window).scroll(function (){
    fadeUpAnime();
  });

  // --------------------フェードインここまで ---------------------


 


});