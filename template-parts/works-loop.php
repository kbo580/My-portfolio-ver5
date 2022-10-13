<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?> 

    <li class="webdesign__item works__item">
    
      <a href="<?php the_permalink(); ?>" class="webdesign__link">
        <div class="mask">

          <!-- webdesign__body -->
          <div class="webdesign__body">
            <h3 class="webdesign__title"><?php the_title(); ?></h3>
            <p class="webdesign__text"><?php the_excerpt(); ?></p>
          </div>
          <!-- /webdesign__body -->

          <!-- webdesign__thum -->
          <figure class="webdesign__thum">
            <img src="<?php echo CFS()->get('works_thumb');?>" alt="<?php the_title(); ?>"  class="webdesign__img thum">
          </figure>
          <!-- /webdesign__thum-->

        </div>
        <!-- /mask -->
      </a>
    </li>

  <?php endwhile; ?>
<?php else : ?> 
  <p>記事がありません</p>
<?php endif; ?>