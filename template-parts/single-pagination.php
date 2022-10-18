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

<!-- ページネーション -->
<ul class="pagination">
  <li class="prev"><?php previous_post_link('%link', '<i class="fas fa-angle-left"></i>PREV'); ?></li>
  <li class="to-works"><a href="<?php echo home_url(); ?>/works" class=""><i class="fa-solid fa-table-cells-large"></i> WORKS</a></li>
  <li class="next"><?php next_post_link('%link','NEXT<i class="fas fa-angle-right"></i>'); ?></li>
</ul>
<!-- /ページネーション -->