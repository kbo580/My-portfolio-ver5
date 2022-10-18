<?php get_header(); ?>
  <main>
    <div class="page-heading__wrap">
      <h2 class="page-heading heading-common en-title">works</h2>
    </div>

    <?php get_template_part('template-parts/breadcrumb') ?>
    <!-- /breadcrumbs -->
    
    <div class="contents inner">
      <section class="works-archive">
  
        <div class="works__body content-body">

          <!-- web制作 -->
          <div class="webdesign__wrap  s--inner">
            <h3 class="sub-heading heading-common">Web制作</h3>
            <p class="works__desc">実案件や架空案件、練習サイトを掲載しております</p>

            <ul class="webdesign__item-list works__list">
              <?php get_template_part('template-parts/works-loop') ?>
            </ul>

          </div>
          <!-- /web制作 works__cont -->

          <div class="s--inner">
            <h3 class="sub-heading heading-common">練習用コーディング</h3>
            <p class="works__desc">デザインカンプからコーディングしたサイトです。<br>デザインは他サイト様からお借りしております。デザインデータからの制作の目安にどうぞ</p>

            <ul class="webdesign__item-list works__list">

              <!-- サブループ -->
              <?php 
                $query = new WP_Query(
                  array(
                    'post_type' => 'cording', 
                    'posts_per_page' => -1, 
                  )
                );
              ?>
  
              <?php if($query -> have_posts()) : ?> 
                <?php while($query -> have_posts()) : $query -> the_post(); ?> 

                  <li class="webdesign__item works__item cordingItem">
  
                    <a href="<?php the_permalink(); ?>" class="webdesign__link">
                      <div class="mask">
                        <div class="webdesign__body">
                          <h3 class="webdesign__title">タイトルタイトルタイトル</h3>
                          <p class="webdesign__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>

                        <figure class="webdesign__thum">
                          <img src="<?php echo CFS()->get('cording-image');?>" alt="<?php the_title(); ?>" loading="lazy" class="webdesign__img thum">
                        </figure>
                        
                      </div>
                      <!-- /mask -->

                    </a>
  
                  </li>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?> 
                <?php else : ?>
                  <h2>記事がありません</h2>
                <?php endif; ?>
  
            </ul>
            <!-- /works__item-list -->

          </div>
          <!-- /works__cont -->

        </div>
        <!-- /works__body -->
  
      </section>
      <!-- /works -->

    </div>
    <!-- /inner -->

  </main>

<?php get_footer(); ?>
