<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- 空で出力されているので削除 -->
<!-- <meta name="description" content="">
<meta name="author" content=""> -->
<!-- タイトルをそれぞれ表示 -->
<title><?php the_title(); ?></title>

<!-- Bootstrap core CSS 絶対パスで表記-->
<link href="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template 絶対パスで表記-->
<link href="<?php echo get_template_directory_uri(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<!-- //から書くことでhttpでもhttpsでもどちらでも読んでくれる -->
<link href='//fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

<!-- Custom styles for this template　絶対パスで表記 -->
<link href="<?php echo get_template_directory_uri(); ?>/css/clean-blog.min.css" rel="stylesheet">
<!-- 必須のテンプレートタグ -->
<?php wp_head(); ?>