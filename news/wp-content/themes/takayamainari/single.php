 <!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $post->post_title;  ?> | 高山稲荷神社</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url');?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php bloginfo('template_url');?>/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?php bloginfo('template_url');?>/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/nav.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP&display=swap" rel="stylesheet">
    <style type="text/css">
    html,
    body,
    header,
    .carousel {
        height: 100%;
    }

    @media (min-width: 800px) and (max-width: 850px) {
        .navbar:not(.top-nav-collapse) {
            background: #1C2331 !important;
        }
    }
    </style>
    <?php wp_head(); ?>
</head>

<body>
    <div class="loading-Bar"></div>
    <img class="loading-Img" src="<?php bloginfo('template_url');?>/img/logo_s.png" alt="ロゴ" style="display:none;">
    <!-- Navbar -->
    <div class="nav">
        <div class="nav__wrapper bg-white">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-md-2 d-flex flex-column align-items-center justify-content-center bars menu p-0" style="height:100vh;">
                        <ul>
                            <li><a href="../../index.php">トップページ</a></li>
                            <li><a href="../../map.html">境内案内図</a></li>
                            <li><a href="../../howto-pray.html">参拝・御祈祷</a></li>
                            <li><a href="/takayamainari/news">お知らせ</a></li>
                            <li><a href="../../access.html">神社までのご案内</a></li>
                            <li><a href="../../policy.html">サイトのご利用について</a></li>
                            <li><a href="../../sitemap.html">当サイトについて</a></li>
                            <li><a href="../../contact.html">お問い合わせ</a></li>
                            <li><a href="../../faq.html">よくあるご質問</a></li>
                        </ul>
                    </div>
                    <div class="col-md-10 p-0" style="height:100vh;">
                        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="view">
                                        <video class="video-intro" autoplay loop muted>
                                            <source src="<?php bloginfo('template_url');?>/#" type="video/mp4">
                                        </video>
                                        <div class="mask pattern-3 d-flex justify-content-center align-items-center">
                                            <div class="text-center white-text mx-5 wow fadeIn">
                                                <h1 class="mb-4">
                                                    <strong><img src="<?php bloginfo('template_url');?>/img/logo.png" alt="" width="300"></strong>
                                                </h1>
                                                <p>Official SNS</p>
                                                <ul class="list-inline d-flex justify-content-center align-items-center">
                                                    <li class="list-inline-item"><a href="https://www.facebook.com/takayamainari/"><i class="fab fa-facebook-square fa-2x text-white"></i></a></li>
                                                    <li class="list-inline-item"><a href="https://www.instagram.com/takayamainari/"><i class="fab fa-instagram fa-2x text-white"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar -->
    <!-- Header -->
    <header style="height:60vh;">
        <div class="view" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); background-repeat: no-repeat; background-size: cover; background-position:center;">
            <!-- Mask & flexbox options-->
            <div class="mask pattern-3 d-flex justify-content-center align-items-center">
                <!-- Content -->
                <div class="text-center white-text mx-5 wow fadeIn text-white">
                    <div class="row d-flex flex-column justify-content-center align-items-center wow fadeIn">
                        <p class="d-none d-md-block title-v vertical h2 font-sm-" style="letter-spacing: 0.5em"><?php echo $post->post_title;  ?></p>
                        <p class="d-block d-md-none title-v vertical h5 font-sm-" style="letter-spacing: 0.5em"><?php echo $post->post_title;  ?></p>
                        <span style="position:absolute;bottom:0;left:50%;"><img src="<?php bloginfo('template_url');?>/img/line.gif" alt="line"></span>
                    </div>
                </div>
                <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
        </div>
    </header>
    <!-- Header -->
    <!--Main layout-->
    <main class="contents">
      <section id="history" class="py-5 my-5">
        <div class="container">
          <?php if ( have_posts() ) : ?>
            <?php while( have_posts() ) : the_post(); ?>
              <div class="row">
                <div class="col-12">
                  <p class="text-muted"><small><?php the_time('Y年m月d日'); ?> 投稿者：<?php the_author(); ?></small></p>
                  <hr>
                  <!-- <?php the_post_thumbnail('full', array('class' => 'img-fluid'));?> -->
                </div>
                <div class="col-12">
                  <p class="mb-5">
                    <?php the_content(); ?>
                  </p>
                <?php endwhile;?>

              <?php endif; ?>
            </div>
            <div class="col-12 mt-5">
              <p class="text-center"><a href="<?php echo home_url() ?>" class="btn btn-outline-dark">お知らせ一覧へ戻る</a></p>
            </div>
          </div>
        </div>
      </section>
      <hr>
      <section id="footer" class="py-5">
        <div class="container">
          <div class="text-center wow fadeIn">
            <ul class="p-0 list-unstyled mt-5 d-flex justify-content-center align-items-start">
              <li class="vertical mx-3">
                <a href="../../faq.html">
                  よくあるご質問
                </a>
              </li>
              <li class="vertical mx-3">
                <a href="../../contact.html">
                  お問い合わせ
                </a>
              </li>
              <li class="vertical mx-3">
                <a href="../../sitemap.html">
                  当サイトについて
                </a>
              </li>
              <li class="vertical mx-3">
                <a href="../../policy.html">
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