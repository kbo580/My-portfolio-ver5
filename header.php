<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- googlefont -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DotGothic16&family=Montserrat:wght@400;700&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">


  <?php wp_head(); ?>
</head>

<body>

    <header class="header">
        <h1 class="site-title">
          <a href="<?php echo home_url(); ?>" class="site-link en-title">Yuta Kobayashi’s <br>Portfolio</a>
        </h1>

      <div class="burger">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>

      <!-- topページの時 -->
      <?php if(is_front_page()):?>
        <!-- sp用nav -->
        <nav class="sp-nav nav">
          <ul class="sp-nav__list nav__list en-title">
    
            <li class="sp-nav__list-item nav__list-item">
              <a href="<?php echo home_url(); ?>" class="sp-nav__link nav__link">home</a>
            </li>
    
            <li class="sp-nav__list-item nav__list-item">
              <a href="#works" class="sp-nav__link nav__link">works</a>
            </li>
    
            <li class="sp-nav__list-item nav__list-item">
              <a href="#about" class="sp-nav__link nav__link">about</a>
            </li>
    
            <li class="sp-nav__list-item nav__list-item">
              <a href="#can" class="sp-nav__link nav__link">i can do</a>
            </li>
            <li class="sp-nav__list-item nav__list-item">
              <a href="#contact" class="sp-nav__link nav__link">contact</a>
            </li>
    
            <li class="sp-nav__list-item nav__list-item">
              <a href="#" class="sp-nav__link nav__link nav__blog-wrap">blog<img src="<?php echo get_template_directory_uri(); ?>/images/svg/external-link-white.svg" alt=""></a>
            </li>

            <li class="nav__contact-btn-wrap">
              <a href="<?php echo home_url(); ?>/contact" class="nav__contact-btn"><img src="<?php echo get_template_directory_uri(); ?>/images/svg/mail.svg" alt="お問い合わせ"></a>
            </li>
            
          </ul>
        </nav>
        <!-- /sp用nav -->
  
        <!-- pc用nav -->
        <nav class="pc-nav nav">
          <ul class="pc-nav__list nav__list en-title">
    
            <li class="pc-nav__list-item nav__list-item">
              <a href="<?php echo home_url(); ?>" class="pc-nav__link nav__link">home</a>
            </li>
    
            <li class="pc-nav__list-item nav__list-item">
              <a href="#works" class="pc-nav__link nav__link">works</a>
            </li>
    
            <li class="pc-nav__list-item nav__list-item">
              <a href="#about" class="pc-nav__link nav__link">about</a>
            </li>
    
            <li class="pc-nav__list-item nav__list-item">
              <a href="#can" class="pc-nav__link nav__link">i can do</a>
            </li>
            <li class="pc-nav__list-item nav__list-item">
              <a href="#contact" class="pc-nav__link nav__link">contact</a>
            </li>
    
            <li class="pc-nav__list-item nav__list-item nav__blog-wrap">
              <a href="404.html" class="pc-nav__link nav__link">blog<img src="<?php echo get_template_directory_uri(); ?>/images/svg/external-link.svg" alt=""></a>
            </li>
            
          </ul>
        </nav>
        <!-- /pc用nav -->

      <!--トップページ以外の時-->
      <?php else:?>
        <!-- sp用nav -->
        <nav class="sp-nav nav">
          <ul class="sp-nav__list nav__list en-title">
    
            <li class="sp-nav__list-item nav__list-item">
              <a href="<?php echo home_url(); ?>" class="sp-nav__link nav__link">home</a>
            </li>
    
            <li class="sp-nav__list-item nav__list-item">
              <a href="<?php echo home_url(); ?>/#works" class="sp-nav__link nav__link">works</a>
            </li>
    
            <li class="sp-nav__list-item nav__list-item">
              <a href="#about" class="sp-nav__link nav__link">about</a>
            </li>
    
            <li class="sp-nav__list-item nav__list-item">
              <a href="#can" class="sp-nav__link nav__link">i can do</a>
            </li>
            <li class="sp-nav__list-item nav__list-item">
              <a href="#contact" class="sp-nav__link nav__link">contact</a>
            </li>
    
            <li class="sp-nav__list-item nav__list-item">
              <a href="#" class="sp-nav__link nav__link nav__blog-wrap">blog<img src="<?php echo get_template_directory_uri(); ?>/images/svg/external-link-white.svg" alt=""></a>
            </li>

            <li class="nav__contact-btn-wrap">
              <a href="<?php echo home_url(); ?>/contact" class="nav__contact-btn"><img src="<?php echo get_template_directory_uri(); ?>/images/svg/mail.svg" alt="お問い合わせ"></a>
            </li>
            
          </ul>
        </nav>
        <!-- /sp用nav -->
    
        <!-- pc用nav -->
        <nav class="pc-nav nav">
          <ul class="pc-nav__list nav__list en-title">
    
            <li class="pc-nav__list-item nav__list-item">
              <a href="<?php echo home_url(); ?>" class="pc-nav__link nav__link">home</a>
            </li>
    
            <li class="pc-nav__list-item nav__list-item">
              <a href="<?php echo home_url(); ?>/#works" class="pc-nav__link nav__link">works</a>
            </li>
    
            <li class="pc-nav__list-item nav__list-item">
              <a href="<?php echo home_url(); ?>/#about" class="pc-nav__link nav__link">about</a>
            </li>
    
            <li class="pc-nav__list-item nav__list-item">
              <a href="<?php echo home_url(); ?>/#can" class="pc-nav__link nav__link">i can do</a>
            </li>
            <li class="pc-nav__list-item nav__list-item">
              <a href="<?php echo home_url(); ?>/#contact" class="pc-nav__link nav__link">contact</a>
            </li>
    
            <li class="pc-nav__list-item nav__list-item nav__blog-wrap">
              <a href="" class="pc-nav__link nav__link">blog<img src="<?php echo get_template_directory_uri(); ?>/images/svg/external-link.svg" alt=""></a>
            </li>
            
          </ul>
        </nav>
        <!-- /pc用nav -->


      


      

      
      <?php endif;?> 

      <p class="nav__contact-btn-wrap --pc">
        <a href="<?php echo home_url(); ?>/contact" class="nav__contact-btn"><img src="<?php echo get_template_directory_uri(); ?>/images/svg/mail.svg" alt="お問い合わせ"></a>
      </p>

    </header>