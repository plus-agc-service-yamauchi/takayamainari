    <?php get_header();?>
    <!--Main layout-->
    <main class="contents">
        <section id="history" class="py-5 my-5">
            <div class="container">
                <div class="py-5">
                    <div class="row">
                      <?php
                      if (have_posts()) :
                        while (have_posts()) :
                            the_post(); ?>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-5">
                              <!-- Card -->
                              <div class="card">
                                <!-- Card image -->
                                <div class="view overlay">

                                  <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!-- Card content -->
                            <div class="card-body">
                              <!-- Title -->
                              <h4 class="card-title"><?php the_title();?>
                          </h4>
                          <!-- Text -->
                          <p class="card-text"><?php echo get_the_date();?>
                      </p>
                      <?php the_post_thumbnail('medium', array('class' => 'w-100'));?>
                      <p class="my-3">
                      </p>
                      <!-- Button -->
                      <a href="<?php the_permalink();?>" class="btn btn-outline-dark">続きを読む</a>
                  </div>
              </div>
              <!-- Card -->
          </div>
      <?php endwhile;
  else :
    ?>
    <p>表示する記事がありません</p>
    <?php
endif;?>
</div><!-- /.row -->
</div>
</div>
</section>
<hr>
<section id="footer" class="py-5">
    <div class="container">
        <div class="text-center wow fadeIn">
            <ul class="p-0 list-unstyled mt-5 d-flex justify-content-center align-items-start">
                <li class="vertical mx-3">
                    <a href="../faq.html">
                        よくあるご質問
                    </a>
                </li>
                <li class="vertical mx-3">
                    <a href="../contact.html">
                        お問い合わせ
                    </a>
                </li>
                <li class="vertical mx-3">
                    <a href="../sitemap.html">
                        当サイトについて
                    </a>
                </li>
                <li class="vertical mx-3">
                    <a href="../policy.html">
                        サイトのご利用について
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>
</main>
<!--Main layout-->
<?php get_footer();?>