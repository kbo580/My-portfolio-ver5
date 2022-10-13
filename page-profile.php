<?php get_header(); ?>

  <main>
    <div class="page-heading__wrap">
      <h2 class="page-heading heading-common en-title">profile</h2>
    </div>

    <?php get_template_part('template-parts/breadcrumb') ?>
    <!-- /breadcrumbs -->
    
    <div class="contents inner">

      <article class="about-me s--inner prof-sec">

        <div class="prof__wrap about-me__wrap">
          <h3 class="prof__heading en-title heading-common">about me</h3>

          <p class="about-me__title en-title">Kobayashi Yuta</p>

          <ul class="about-me__list en-title">
            <li class="about-me__item">1985年生まれ愛知県名古屋市出身。<br>大学を卒業後、約４０年続く実家の飲食店で５年間勤務</li>
  
            <li class="about-me__item">母の体調が悪くなってきたのを機に閉店</li>
  
            <li class="about-me__item">その後、小さい頃から本が好きでご縁のあったアルバイト先の書店で正社員となり販売接客を中心に計４年間勤務</li>
  
            <li class="about-me__item">店内のレイアウト用にデザインを学んでいたところ、Webデザインに興味を持ち学習を始める。</li>

            <li class="about-me__item">退社し独学で２年ほどWebデザインやコーディングを学び日々学習中</li>
  
            <li class="about-me__item">得意なことは…
              <ul class="about-me__">
                <li>わからないことは納得いくまで調べることができる</li>
                <li>接客業の経験を活かして話を聞き、コミュニケーションを取ること</li>
              </ul>
            </li>

          </ul>
          <!-- /about-me__content-list -->

        </div>
        <!-- prof__wrap about-me__wrap -->
        
      </article>
      <!--/ about-me -->

      <article class="skills s--inner">

        <div class="skills-wrap prof__wrap">
          <h3 class="prof__heading posi-left en-title heading-common">skills</h3>

          <div class="skills__cont en-title">

            <ul class="skills-list">
              <li>
                <ul class="skills-list__cont">
                  <li class="skills-list__title">HTML / CSS</li>
                  <li class="skills-list__image-wrap"><img src="<?php echo get_template_directory_uri(); ?>/images/icon/html&css-icon.png" alt="" class="skills-list__image"></li>
                </ul>
              </li>

              <li class="skills-list__desc">PhotoshopやXDなどで作成したワイヤーフレームからHTMLやCSSを使ってマークアップができます。またCSSを記述する際はSassを使用しております。</li>
            </ul>
            
            <ul class="skills-list">
              <ul class="skills-list__cont">
                <li class="skills-list__title">Java Script / jQuery</li>
                <li class="skills-list__image-wrap"><img src="<?php echo get_template_directory_uri(); ?>/images/icon/javascript_icon.png" alt="" class="skills-list__image"></li>
              </ul>

              <li class="skills-list__desc">JavaScriptやjQueryを使ってWebサイトに動きをつけることができます。基本的な文法は学習しましたので理解はでき、外部のライブラリを使用したパーツの製作もできます。 </li>
            </ul>

            <ul class="skills-list">
              <ul class="skills-list__cont">
                <li class="skills-list__title">PHP</li>
                <li class="skills-list__image-wrap"><img src="<?php echo get_template_directory_uri(); ?>/images/icon/php_icon.png" alt="" class="skills-list__image"></li>
              </ul>

              <li class="skills-list__desc">WordPress用のテーマを作成する程度のPHPの文法は理解しています。</li>
            </ul>

            <ul class="skills-list">
              <ul class="skills-list__cont">
                <li class="skills-list__title">Word Press</li>
                <li class="skills-list__image-wrap"><img src="<?php echo get_template_directory_uri(); ?>/images/icon/wordpress_icon.png" alt="" class="skills-list__image"></li>
              </ul>

              <li class="skills-list__desc">HTMLで作成したサイトをWord Press化し、更新、管理がしやすいようにすることができます。 また個人的なブログもWord Pressで運営しておりますので記事の更新や仕様には慣れております。</li>
            </ul>

            <ul class="skills-list">
              <ul class="skills-list__cont">
                <li class="skills-list__title">Adobe XD</li>
                <li class="skills-list__image-wrap"><img src="<?php echo get_template_directory_uri(); ?>/images/icon/xd_icon.png" alt="" class="skills-list__image"></li>
              </ul>

              <li class="skills-list__desc">ワイヤーフレームを作成するのに使用していますので基本的な使用はできます。</li>
            </ul>

            <ul class="skills-list">
              <ul class="skills-list__cont">
                <li class="skills-list__title">Photoshop</li>
                <li class="skills-list__image-wrap"><img src="<?php echo get_template_directory_uri(); ?>/images/icon/photoshop-icon.png" alt="" class="skills-list__image"></li>
              </ul>

              <li class="skills-list__desc">画像の修正や編集、合成などの基本的な操作はできます。</li>
            </ul>

            <ul class="skills-list">
              <ul class="skills-list__cont">
                <li class="skills-list__title">illustrator</li>
                <li class="skills-list__image-wrap"><img src="<?php echo get_template_directory_uri(); ?>/images/icon/illustrator_icon.png" alt="" class="skills-list__image"></li>
              </ul>

              <li class="skills-list__desc">アイコンやロゴなどを作成する際に使用しており基本的な操作は可能です。</li>
            </ul>

            <ul class="skills-list">
              <ul class="skills-list__cont">
                <li class="skills-list__title">MySQL</li>
                <li class="skills-list__image-wrap"><img src="<?php echo get_template_directory_uri(); ?>/images/icon/sql_icon.png" alt="" class="skills-list__image"></li>
              </ul>

              <li class="skills-list__desc">基本的なデータベースの操作や検索ができます。</li>
            </ul>

          </div>
          <!-- /skills__cont -->

        </div>
        <!-- /prof__wrap skills-wrap -->
  
      </article>

    </div>
    <!-- /inner -->

  </main>

<?php get_footer(); ?>
