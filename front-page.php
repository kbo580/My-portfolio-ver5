<?php get_header(); ?>
    <main>
      
      <div class="mv">
        <div class="mv__wrap">

          <div class="mv-swiper swiper">
    
            <div class="swiper-wrapper">
    
              <div class="swiper-slide slide-media">
                <img src="<?php echo get_template_directory_uri(); ?>/images/mv-webdesign-pc.png" alt="webdesign">
                <div class="mv__slide-title en-title">Web design</div>
              </div>
              
              <div class="swiper-slide slide-media">
                <img src="<?php echo get_template_directory_uri(); ?>/images/mv-cording-pc.png" alt="cording">
                <div class="mv__slide-title en-title">Cording</div>
              </div>
              
              <div class="swiper-slide slide-media">
                <img src="<?php echo get_template_directory_uri(); ?>/images/mv-cms-pc.png" alt="cms">
                <div class="mv__slide-title en-title">CMS</div>
              </div>
            </div>

            <p class="mv__site-title en-title">
              <span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger"><span class="first-letter--change">Y</span>uta</span></span><br>
              <span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger"><span class="first-letter--change">K</span>obayashi's</span></span><br>
              <span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger"><span class="first-letter--change">P</span>ortfolio</span></span>
            </p>
    
          </div>
          <!-- /swiper -->

        </div>
        <!-- /mv__wrap -->
      </div>
      <!-- /mv -->
      
      <div class="contents inner">
        <section id="works"  class="works">
          <h2 class="sec-heading heading-common works__heading en-title">works</h2>
    
          <div class="works__body content-body">

            <!-- web制作 -->
            <div class="webdesign__wrap works__cont s--inner">
              <h3 class="sub-heading heading-common">Web制作</h3>
              <p class="works__desc">実案件や架空案件、練習サイトを掲載しております</p>

              <ul class="webdesign__item-list works__list">

                <?php get_template_part('template-parts/works-loop') ?>

                <li class="ashirai webdesign__ashirai en-title">webdesign</li>
    
              </ul>
      
              <div class="btn-wrap">
                <a href="<?php echo home_url(); ?>/works" class="btn btn--more">More View</a>
              </div>

            </div>
            <!-- /web制作 works__cont -->
      
            <!-- ブログ -->
            <div class="blog__wrap works__cont s--inner">
              <h3 class="sub-heading heading-common">ブログ</h3>
              <p class="works__desc">学習のアウトプットと備忘録のためのブログです<img src="<?php echo get_template_directory_uri(); ?>/images/svg/external-link.svg" alt=""><br>（外部サイトへ移動します）</p>

              <div class="blog__body">
                <a href="https://kbyt-programming.com/" target="_blank" class="blog__image-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/blog-image.png" alt="ブログ">
                </a>
  
                <span class="ashirai blog__ashirai en-title">BLOG</span>
              </div>

            </div>
            <!-- /ブログ works__cont -->
      
            <!-- バナー -->
            <div class="banner__wrap works__cont s--inner">
              <h3 class="sub-heading heading-common">バナー制作</h3>
              <p class="works__desc">架空サイトなどで使用する為に作成したバナーです</p>

              <!-- スライダー -->
              <div class="banner-swiper-container">
                <div class="banner-swiper swiper">
  
                  <ul class="banners-list swiper-wrapper">
                    <!-- サブループ -->
                    <?php 
                      $query = new WP_Query(
                        array(
                          'post_type' => 'banners', 
                          'posts_per_page' => -1, 
                        )
                      );
                    ?>

                    <?php if($query -> have_posts()) : ?> 
                    <?php while($query -> have_posts()) : $query -> the_post(); ?> 

                      <li class="banners-item swiper-slide">
                        <img src="<?php echo CFS()->get('banner');?>" alt="<?php the_title(); ?>" loading="lazy" class="banners-image thum">
                      </li>

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?> 
                    <?php else : ?>
                      <h2>記事がありません</h2>
                    <?php endif; ?>
                    
                  </ul>
                </div>
                <!-- /banner-swiper swiper -->
                
                <div class="swiper-button-prev banners-swiper-button-prev"></div>
                <div class="swiper-button-next banners-swiper-button-next"></div>
                
                <span class="ashirai banners__ashirai en-title">banners</span>

              </div>
              <!-- /banner-swiper-container -->
              
              <div class="btn-wrap">
                <a href="<?php echo home_url(); ?>/banners" class="btn btn--more">More View</a>
              </div>
            </div>
            <!-- /バナー works__cont -->

          </div>
          <!-- /works__body -->
    
        </section>
        <!-- /works -->
  
        <section id="about"  class="about topPage-section">
          <h2 class="about-heading sec-heading heading-common en-title">about</h2>

          <div class="about__wrap content-body">
            
            <div class="about-right">

              <figure class="about-right__image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/kbyt.png" alt="こばゆたくん"  loading="lazy">
              </figure>
      
              <div class="about-right__content-frame">
                <p class="about-right__text TextTyping">ポートフォリオ を ご覧いただきありがとうございます</p>
              </div>

            </div>
            <!-- /about-right -->

            <div class="about-left">

              <h3 class="about-left__heading sub-heading en-title">Kobayashi Yuta</h3>

              <ul class="about-left__list">
                <li class="about-left__item">大学を卒業後、実家の家業である飲食店で勤務。その後、書店にて正社員として接客販売を中心に勤めてきました。</li>
                <li class="about-left__item">店内のレイアウト用にデザインを学んでいたところ、 Webデザインに興味を持ち独学で学習を始めました。</li>
                <li class="about-left__item">趣味は野球観戦、音楽制作、御朱印集め</li>
              </ul>

              <div class="btn-wrap">
                <a href="<?php echo home_url(); ?>/profile" class="btn btn--more">More View</a>
              </div>

            </div>
            <!-- /about-left -->

          </div>
          <!-- /about__body -->
    
        </section>
        <!-- /about -->
  
        <section id="can" class="can topPage-section">
          <h2 class="can-heading sec-heading heading-common en-title">i can do</h2>

          <div class="can__wrap content-body ">

            <ul class="can__list fadeUpTrigger">
              <li class="can__title"><span class="can__title-num en-title">01</span>.Webデザイン</li>
              <li class="can__image-wrap"><img src="<?php echo get_template_directory_uri(); ?>/images/icd-webdesihn.png" alt="" class="can__image"></li>
              <li class="can__desc">サイトマップの設計からデザインを作成し、それをもとにWebサイトを製作します。またタブレットやスマートフォンに対応させたレスポンシブデザインもできます。</li>
            </ul>
      
            <ul class="can__list fadeUpTrigger delay-2">
              <li class="can__title"><span class="can__title-num en-title">02</span>.コーディング</li>
              <li class="can__image-wrap"><img src="<?php echo get_template_directory_uri(); ?>/images/icd-cording.png" alt="" class="can__image"></li>
              <li class="can__desc">ワイヤーフレームをもとに忠実に再現をすることを心がけています。またコードを書く際はわかりやすく、メンテナンスがし易いコードを書くように努めています。</li>
            </ul>

            <ul class="can__list fadeUpTrigger delay-3">
              <li class="can__title"><span class="can__title-num en-title">03</span>.CMS化</li>
              <li class="can__image-wrap"><img src="<?php echo get_template_directory_uri(); ?>/images/icd-cms.png" alt="" class="can__image"></li>
              <li class="can__desc">Word Pressなどに代表されるものでHTMLとCSSで作成されたサイトを自身で容易に管理、更新ができるようにオリジナルテーマを作成できます。</li>
            </ul>
      
            <ul class="can__list fadeUpTrigger delay-4">
              <li class="can__title"><span class="can__title-num en-title">04</span>.コミュニケーション</li>
              <li class="can__image-wrap"><img src="<?php echo get_template_directory_uri(); ?>/images/icd-communication.png" alt="" class="can__image"></li>
              <li class="can__desc">接客業での経験を活かした話を傾聴力とコミュニケーションを取ることが得意です。</li>
            </ul>
          </div>
          <!-- /can__wrap -->
    
        </section>
        <!-- /contact -->
  
        <section id="contact" class="contact topPage-section">
          <h2 class="sec-heading heading-common en-title">contact</h2>
          <div class="contact__wrap content-body">

            <p class="contact__desc">お忙しい中ご覧いただきありがとうございます。<br>お仕事の話はもちろん、サイトの感想など何でもお聞かせください。</p>
      
            <div class="square__btn-wrap">
              <a href="<?php echo home_url(); ?>/contact" class="square__btn">お問い合わせ</a>
            </div>

          </div>
          <!-- /contact__wrap -->
    
        </section>
        <!-- /contact -->
      </div>
      <!-- /inner -->
  
    </main>

    <?php get_footer(); ?>