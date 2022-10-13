<?php get_header(); ?>
  <main>
    <div class="page-heading__wrap">
      <h2 class="page-heading heading-common en-title">banners</h2>
    </div>

    <?php get_template_part('template-parts/breadcrumb') ?>
    <!-- /breadcrumbs -->
    
    <div class="contents inner">
      <section class="banners">
  
        <div class="content-body  s--inner">
          <h3 class="sub-heading heading-common">バナー制作</h3>
            <p class="works__desc">バナー制作の練習です</p>

            <ul class="banners__list works__list">
              
              <?php if(have_posts()): while(have_posts()) : the_post(); ?>

              <li class="banners__item item--responsive works__item">
                <a href="#">
                  <figure class="banners__image-wrap">
                    <img src="<?php echo CFS()->get('banner');?>" alt="" class="banners__image">
                  </figure>
                </a>
              </li>
      
            <?php endwhile; ?>
            <?php else : ?>
              <p>記事がありません</p>
            <?php endif; ?>

          </ul>

          <!-- モーダル -->
          <div class="modal-wrapper" id="modal-wrapper">
            <div class="close" id="close"></div>
            
            <div id="modal-image-wrapper" class="modal-image-wrapper">
              <img src="" alt="">  
            </div>
          </div>
          <!-- /モーダル -->

        </div>
        <!-- /content-body -->

      </section>
      <!-- /banners -->

    </div>
    <!-- /inner -->

  </main>

<?php get_footer(); ?>
