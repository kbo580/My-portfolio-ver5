<?php get_header(); ?>

    <main>
      <div class="page-heading__wrap">
        <h2 class="page-heading heading-common en-title">404 page</h2>
      </div>

      <?php get_template_part('template-parts/breadcrumb') ?>
      <!-- /breadcrumbs -->
      
      <div class="contents">

        <!-- nf-page -->
        <section class="nf-page">
          <div class="nf-page__wrapper">
            <p class="nf-page__text">申し訳ありません<br>お探しのページはありませんでした。</p>
            <p class="nf-page__to-link"><a href="<?php echo home_url(); ?>" class="nf-page__link">コチラ</a>からTopページに戻ることができます。</p>
          </div>
        </section>
        <!-- /nf-page -->
  
      </div>
      <!-- /inner -->
  
    </main>

<?php get_footer(); ?>