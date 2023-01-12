<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <?php get_header(); ?>

</head>

<body <?php body_class(); ?>>


  <?php get_template_part("includes/header"); ?>

  <!-- 投稿ページでも決まり文句としてif構文を書いておく -->
  <?php if (have_posts()) : ?>
    <!-- ループの開始は2つをまとめて書く -->
    <?php while (have_posts()) : the_post(); ?>

      <!-- Page Header -->
      <?php
      // functions.phpに定義したアイキャッチ画像取得のオリジナルの関数を呼び出す
      $img = get_eyecatch_with_default();
      // 下記コードはfunctions.phpに関数として定義したものの元の形
      // if (has_post_thumbnail()) :
      //   $id = get_post_thumbnail_id();
      //   $img = wp_get_attachment_image_src($id, "large");
      // else :
      //   $img = array(get_template_directory_uri() . "/img/post-bg.jpg");
      // endif;
      ?>
      <header class="masthead" style="background-image: url('<?php echo $img[0]; ?>')">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <div class="post-heading">
                <h1><?php the_title(); ?></h1>
                <!-- <h2 class="subheading">Problems look mighty small from 150 miles up</h2> -->
                <span class="meta">Posted by
                  <?php the_author(); ?>
                  <!-- 詳細ページは常に1件しか表示しないのでthe_dateでOK -->
                  on <?php the_date(); ?></span>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Post Content -->
      <article>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <?php the_post_thumbnail(array(32, 32), array("alt" => "アイキャッチ画像")); ?>
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </article>

      <hr>

      <!-- ループの終わり -->
    <?php endwhile; ?>
  <?php endif; ?>

  <?php get_template_part("includes/footer"); ?>

  <?php get_footer(); ?>

</body>

</html>