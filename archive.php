<!DOCTYPE html>
<html lang="en">

<head>

  <!-- headerを入れ込むテンプレートタグ -->
  <?php get_header(); ?>
</head>

<body>
  <!-- 今年の年を表示させたい -->
  <!-- <?php echo date("Y"); ?> -->

  <!-- 切り取ったパーツを呼び出す -->
  <? get_template_part("includes/header"); ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Category</h1>
            <span class="subheading"><?php wp_title(); ?></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php if (have_posts()) : ?>
          <!-- ループの開始は2つをまとめて書く -->
          <?php while (have_posts()) : the_post(); ?>
            <div class="post-preview">
              <a href="<?php the_permalink(); ?>">
                <h2 class="post-title">
                  <!-- Man must explore, and this is exploration at its greatest -->
                  <!-- WPで設定された投稿のタイトルをh2タグの中に表示 -->
                  <?php the_title(); ?>

                </h2>
                <h3 class="post-subtitle">
                  <?php the_excerpt(); ?>
                </h3>
              </a>
              <p class="post-meta">Posted by
                <!-- <a href="#">Start Bootstrap</a> -->
                <!-- 著者名の表示 -->
                <?php the_author(); ?>
                on <?php the_time(get_option("date_format")); ?>
              </p>
            </div>
            <hr>
          <?php endwhile; ?>

          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>
        <?php else : ?>
          <p>記事が見つかりませんでした</p>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <hr>

  <!-- 切り取ったパーツを呼び出す -->
  <?php get_template_part("includes/footer"); ?>

  <!-- footerを入れ込むテンプレートタグ -->
  <?php get_footer(); ?>
</body>

</html>