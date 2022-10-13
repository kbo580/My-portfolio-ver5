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
              <img src="<?php echo CFS()->get('works_pc-image');?>" alt="<?php the_title(); ?>"  loading="lazy">
            </div>
            <!-- /サムネイル -->

            <div class="scrolldown"><span>Scroll</span></div>
          </div>
          <!-- /single-info__thum-wrap -->

          <div class="single-info__explain"> <div class="single-top__explain"><?php the_content(); ?></div></div>

          <div class="single-info__body">
            
            <dl class="single-info__list single__list">
              <dt class="single-info__list-title single__list-title">制作期間</dt>
              <dd class="single-info__list-desc single__list-desc"><?php echo CFS()->get('works_period');?></dd>
            </dl>

            <dl class="single-info__list single__list">
              <dt class="single-info__list-title single__list-title">サイト構成</dt>
              <dd class="single-info__list-desc single__list-desc"><?php echo CFS()->get('works_structure');?></dd>
            </dl>

            <dl class="single-info__list single__list">
              <dt class="single-info__list-title single__list-title">使用言語やツールなど</dt>
              <dd class="single-info__list-desc single__list-desc"><?php echo CFS()->get('works_tools');?></dd>
            </dl>

            <p class="ashirai single-info__ashirai en-title">infomation</p>

          </div>
          <!-- /single-list__wrap -->

          <div class="square__btn-wrap">
            <a href="<?php echo CFS()->get('works_url');?>" class="square__btn --single" target="_blank" >サイトへ<i class="fa-solid fa-up-right-from-square"></i></a>
          </div>
          
          <p  class="single-info__attention">※BASIC認証をかけてあります。<br>お手数ですがid”<span class="fwb">portfolio</span>”, パスワード”<span class="fwb"><?php echo CFS()->get('works_pass');?></span>”を入力してご覧ください</p>     

        </div>
        <!-- /single-info -->

        <!-- サイトの詳細 -->
        <div class="single-detail single__wrapper s--inner">
          <div class="sub-heading__wrapper">
            <h3 class="sub-heading single-sub-heading">サイトの詳細</h3>
          </div>

          <ul class="single-detail__list">
            <li class="single-detail__item single__list">
              <p class="single-detail__list-title single__list-title">サイト制作の概要</p>

              <ul class="single-detail__desc-wrap single__list-desc"> 
                <li class="single-detail__desc"><?php echo CFS()->get('works_concept');?></li>
              </ul>
            </li>

            <li class="single-detail__item single__list">
              <p class="single-detail__list-title single__list-title">ターゲットの基本情報</p>

              <ul class="single-detail__desc-wrapper  single__list-desc"> 
                <?php
                  $fields = $cfs->get('works_target-list'); 
                  foreach ((array)$fields as $field) :
                ?>
                <li class="single-detail__desc --list">
                  <?php echo $field['works_target']; ?>
                </li>
                <?php endforeach; ?>
              </ul>
            </li>

            <li class="single-detail__item single__list">
              <p class="single-detail__list-title single__list-title">ゴール</p>

              <ul class="single-detail__desc-wrap  single__list-desc"> 
                <li class="single-detail__desc"><?php echo CFS()->get('works_goal');?></li>
              </ul>
            </li>

            <li class="single-detail__item single__list">
              <p class="single-detail__list-title single__list-title">ゴールまでのポイント</p>

              <ul class="single-detail__desc-wrap  single__list-desc"> 
                <?php
                  $fields = $cfs->get('works_points'); 
                  foreach ((array)$fields as $field) :
                ?>

                <li class="single-detail__desc --list">
                  <?php echo $field['works_point']; ?>
                </li>
                <?php endforeach; ?>

              </ul>
            </li>

            <li class="ashirai single-info__ashirai en-title">details</li>

          </ul>
          <!-- /single-detail__list -->

          <div class="single-detail__image-wrapper">

            <div class="pc-image-wrapper">
              <div class="toggle-btn" id="pcToggle"><i class="fas fa-desktop"></i>PCでのTopページ</div>
              <p class="click-open">※クリックで開閉できます</p>
              <div class="pc-image">
                <img src="<?php echo CFS()->get('works_pc-image');?>" alt="<?php the_title(); ?>のpcイメージ画像">
              </div>
            </div>
            <!-- /pc-image-wrapper -->
  
            <div class="sp-image-wrapper">
              <div class="toggle-btn" id="spToggle"><i class="fas fa-mobile-alt"></i>SPでのTopページ</div>
              <p class="click-open">※クリックで開閉できます</p>

              <div class="sp-image">
                <img src="<?php echo CFS()->get('works_sp-image');?>" alt="<?php the_title(); ?>のスマホイメージ画像">
              </div>
            </div>
            <!-- /sp-image-wrapper -->

          </div>
          <!-- /single__site-image-wrapper -->
            
        </div>
        <!-- /サイトの詳細 single__detail -->

        <!-- 制作のポイント -->
        <div id="singlePoint" class="single-point single__wrapper s--inner">
          <div class="sub-heading__wrapper">
            <h3 class="sub-heading single-sub-heading">制作のポイント</h3>
          </div>
          
          <p class="ashirai single-point__ashirai en-title">points</p>

          <div class="swiper-area">
  
            <div class="pointSwiper swiper">
              <div class="swiper-pagination pointSwiper__pagination"></div>
              <div class="swiper-button-prev pointSwiper__button --left">前の<br>ポイント</div>
              <div class="swiper-button-next pointSwiper__button --right">次の<br>ポイント</div>

              <div class="swiper-wrapper">
                <?php
                  $fields = $cfs->get('point-container'); 
                  foreach ((array)$fields as $field) :
                ?>

                
                <div class="swiper-slide pointSwiper__swiper-slide">
                  <div class="single-point__wrap">
          
                    <p class="single-point__page-title single__list-title"><?php echo $field['point-page']; ?></p>
        
                    <!-- ポイントのコンテナ -->
                    <div class="single-point__cont">

                      <!-- 左側の画像 -->
                      <div class="single-point__image">
                        <img src="<?php echo $field['point-image']; ?>" alt="<?php echo $field['point-page']; ?>" alt="" loading="lazy">
                      </div>
        
                      <!-- 右側のポイント -->
                      <div class="single-point__list">

                        <?php
                          $fields = $field['point-list']; 
                          foreach ((array)$fields as $field) :
                        ?>

                        <div class="single-point__item">
                          <p class="single-point__heading"><?php echo $field['point-place']; ?></p> 
                          <p class="single-point__desc"><?php echo $field['point-text']; ?></p> 
                        </div>
                        <!-- /single-point__item -->

                        <?php endforeach; ?>

                      </div>
                      <!-- /single-point__list -->
                      
                    </div>
                    <!-- /single-point__cont -->

                  </div>
                  <!-- /single-point__wrapper -->

                </div>
                <!-- /swiper-slide -->
                
                <?php endforeach; ?>

              </div>
              <!-- /swiper-wrapper -->
    
            </div>
            <!-- /swiper -->
            
          </div>
          <!-- /swiper-area -->    

        </div>
        <!-- /制作のポイント single-point -->

        <!-- 固定ページネーション -->
        <div class="fixed-pagination-btn__wrapper" id="paginationFade">
          <div class="fixed-pagination-btn --left">
            <?php previous_post_link('%link', '<img src="'.get_template_directory_uri().'/images/svg/arrow-left.svg" alt="前の記事へ">'); ?>
          </div>

          <div class="fixed-pagination-btn --right">
            <?php next_post_link('%link', '<img src="'.get_template_directory_uri().'/images/svg/arrow-right.svg" alt="次の記事へ">'); ?>
          </div>
        </div>
        <!-- /固定ページネーション fixed-pagination-btn__wrapper -->

        <ul class="pagination">
          <li class="prev"><?php previous_post_link('%link', '<i class="fas fa-angle-left"></i>PREV'); ?></li>
          <li class="to-works"><a href="<?php echo home_url(); ?>/works" class=""><i class="fa-solid fa-table-cells-large"></i> WORKS</a></li>
          <li class="next"><?php next_post_link('%link','NEXT<i class="fas fa-angle-right"></i>'); ?></li>
        </ul>

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