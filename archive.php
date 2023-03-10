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
            <!--  カテゴリーの一覧ページ -->
            <?php if (is_category()) : ?>
              <h1>Category</h1>
              <!-- 記事を書いた人の一覧ページ -->
            <?php elseif (is_author()) : ?>
              <h1>Author</h1>
              <!-- 日付別表示 -->
            <?php elseif (is_date()) : ?>
              <h1>Date</h1>
              <!-- タグの一覧ページ -->
            <?php else : ?>
              <h1>Tag</h1>
            <?php endif; ?>
            <span class="subheading"><?php wp_title(""); ?></span>
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
            <!-- <a class="btn btn-primary float-left" href="#">&larr; 新しい記事へ </a> -->
            <!-- 新しい記事 -->
            <?php
            $link = get_previous_posts_link("&larr; 新しい記事へ");
            // var_dump($link);
            if ($link) {
              $link = str_replace('<a', '<a class="btn btn-primary float-left"', $link);
              echo $link;
            }
            ?>
            <!-- <a class="btn btn-primary float-right" href="#">古い記事へ &rarr;</a> -->
            <!-- 古い記事 -->
            <?php
            $link = get_next_posts_link("古い記事へ &rarr;");
            // var_dump($link);
            if ($link) {
              $link = str_replace('<a', '<a class="btn btn-primary float-right"', $link);
              echo $link;
            }
            ?>
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