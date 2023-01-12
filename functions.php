<!-- 管理画面にアイキャッチ画像の項目を作る -->
<?php
add_theme_support('post-thumbnails');

// 再利用する関数を定義する
// アイキャッチ画像がなければ標準画像を取得する
// functionの定義
function get_eyecatch_with_default()
{
    // 中カッコの中にfunctionの内容を書く
    if (has_post_thumbnail()) :
        $id = get_post_thumbnail_id();
        $img = wp_get_attachment_image_src($id, "large");
    else :
        $img = array(get_template_directory_uri() . "/img/post-bg.jpg");
    endif;
    // 作った変数を返す
    return $img;
}
