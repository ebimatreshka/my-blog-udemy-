<!DOCTYPE html>
<!-- 言語を指定 -->
<html <?php language_attributes(); ?>>

<head>

  <?php get_header(); ?>

</head>

<body <?php body_class(); ?>>

  <!-- navはheaderで呼び出し -->
  <?php get_template_part("includes/header"); ?>


  <!-- ループを作る前にif構文を念のために作る -->
  <?php if (have_posts()) : ?>
    <!-- ループの作成(固定ページのデータがあるなら) -->
    <?php while (have_posts()) : the_post(); ?>
      <!-- 上記コードを書くことでループの中で様々な設定ができるようになる -->
      <!-- Page Header -->
      <?php
      $eyecatch = get_eyecatch_with_default();
      ?>
      <header class="masthead" style="background-image: url('<?php echo $eyecatch[0]; ?>')">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <div class="page-heading">
                <!-- タイトルの呼び出し -->
                <h1><?php the_title(); ?></h1>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Main Content -->
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <!-- 本文の呼び出し -->
            <?php the_content(); ?>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur voluptates odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam ducimus consectetur?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum in officia voluptas voluptatibus, minus!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi aliquid ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste neque sit tempora!</p> -->
          </div>
        </div>
      </div>

      <hr>

      <!-- ループの終了 -->
    <?php endwhile; ?>
  <?php endif; ?>

  <!-- footerの呼び出し -->
  <?php get_template_part("includes/footer"); ?>

  <?php get_footer(); ?>

</body>

</html>