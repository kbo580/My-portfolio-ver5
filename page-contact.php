<?php get_header(); ?>

  <main>
    <div class="page-heading__wrap">
      <h2 class="page-heading heading-common en-title">contact</h2>
    </div>

    <?php get_template_part('template-parts/breadcrumb') ?>
    <!-- /breadcrumbs -->
    
    <div class="contents inner">
      <section class="contact-page">
        <div class="contact__wrapper inner padding-container">
          <p class="contact__text">お忙しい中ご覧いただきありがとうございます。<br>お仕事の話はもちろん、サイトの感想など何でもお聞かせください。</p>
  
          <?php the_content()?>
          
        </div>
        <!-- /contact__wrapper -->
  
      </section>
      <!-- /contact-page -->

    </div>
    <!-- /inner -->

  </main>

<?php get_footer(); ?>
