<?php get_header(); ?>

  <main>
    <div class="page-heading__wrap">
      <h2 class="page-heading heading-common en-title"><?php the_title()?></h2>
    </div>

    <?php get_template_part('template-parts/breadcrumb') ?>
    <!-- /breadcrumbs -->
    
    <div class="contents inner">
      <section id="works"  class="single">
        <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?> 

        <!-- サイトの情報 -->
        <div class="single-info single__wrapper s--inner">

          <div class="single-info__thum-wrap">
            <!-- サムネイル -->
            <div class="single-info__thum">
              <img src="<?php echo CFS()->get('cording-pc-image');?>" alt="<?php the_title(); ?>"  loading="lazy">
            </div>
            <!-- /サムネイル -->

            <div class="scrolldown"><span>Scroll</span></div>
          </div>
          <!-- /single-info__thum-wrap -->

          <div class="single-info__explain"> <div class="single-top__explain"><?php the_content(); ?></div></div>

          <div class="single-info__body">
            
            <dl class="single-info__list single__list">
              <dt class="single-info__list-title single__list-title">制作期間</dt>
              <dd class="single-info__list-desc single__list-desc"><?php echo CFS()->get('cording-period');?></dd>
            </dl>

            <dl class="single-info__list single__list">
              <dt class="single-info__list-title single__list-title">サイト構成</dt>
              <dd class="single-info__list-desc single__list-desc"><?php echo CFS()->get('cording-structure');?></dd>
            </dl>

            <dl class="single-info__list single__list">
              <dt class="single-info__list-title single__list-title">使用言語やツールなど</dt>
              <dd class="single-info__list-desc single__list-desc"><?php echo CFS()->get('cording-tools');?></dd>
            </dl>

            <dl class="single-info__list single__list">
              <dt class="single-info__list-title single__list-title">引用元サイト</dt>
              <dd class="single-info__list-desc single__list-desc cording__link"><?php echo CFS()->get('cording-quotedsite');?></dd>
            </dl>

          </div>
          <!-- /single-list__wrap -->
        
        </div>
        <!-- /single-info -->

        <!-- サイトの詳細 -->
        <div class="single-detail single__wrapper s--inner">

          <div class="single-detail__image-wrapper">

            <div class="pc-image-wrapper">
              <div class="toggle-btn" id="pcToggle"><i class="fas fa-desktop"></i>PCでのTopページ</div>
              <p class="click-open">※クリックで開閉できます</p>
              <div class="pc-image">
                <img src="<?php echo CFS()->get('cording-pc-image');?>" alt="<?php the_title(); ?>のpcイメージ画像">
              </div>
            </div>
            <!-- /pc-image-wrapper -->
  
            <div class="sp-image-wrapper">
              <div class="toggle-btn" id="spToggle"><i class="fas fa-mobile-alt"></i>SPでのTopページ</div>
              <p class="click-open">※クリックで開閉できます</p>

              <div class="sp-image">
                <img src="<?php echo CFS()->get('cording-sp-image');?>" alt="<?php the_title(); ?>のスマホイメージ画像">
              </div>
            </div>
            <!-- /sp-image-wrapper -->

          </div>
          <!-- /single__site-image-wrapper -->
            
        </div>
        <!-- /サイトの詳細 single__detail -->

        <?php get_template_part('template-parts/single-pagination'); ?>

        <?php endwhile; ?>
        <?php else : ?>
          <p>記事がありません</p>
        <?php endif; ?> 
  
      </section>
      <!-- /works -->

    </div>
    <!-- /inner -->

  </main>

  
<?php get_footer(); ?>