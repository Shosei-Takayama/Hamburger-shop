


<?php //テーマサポート
function custom_theme_support() {
    add_theme_support( 'html5' , array(
        'search-form' ,
        'comment-form',
        'comment-list',
        'gallery',
        'caption',   
    ) );

    add_theme_support( 'post-thumbnails' ); 
    set_post_thumbnail_size(640, 480, false ); 
    add_theme_support('title-tag'); 
    register_nav_menus( array(
        'categorymenu' => 'category navigation',
        'footer_nav'   => 'footer navigation',
    ) );
}
add_action( 'after_setup_theme' ,'custom_theme_support');





//タイトル出力
function hamburger_title( $title ) {
    if ( is_front_page() && is_home() ) { //トップページなら
        $title = get_bloginfo( 'name','display' );
    } elseif ( is_singular() ) {//シングルページなら
        $title = single_post_title( '', false );
    }
    return $title;
}
add_filter( 'pre_get_document_title','hamburger_title' );

function hamburger_script(){
    // jQueryの読み込み
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', '3.5.1', true );
    // ハンバーガーメニューJS
    wp_enqueue_script( 'smart-script',get_template_directory_uri().'/JavaScript/hamburger.js',true);
    // font-awesomeの読み込み
    wp_enqueue_style('font-awesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css', '5.9.0' );
    // reset CSSの読み込み
    wp_enqueue_style('reset','https://unpkg.com/ress/dist/ress.min.css',array());
    // サイト共通のCSSの読み込み
    wp_enqueue_style('style',get_template_directory_uri().'/CSS/style.css',array());
    //google-font('Roboto')
    wp_enqueue_style('Roboto-bold','https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap',array());
}
add_action( 'wp_enqueue_scripts', 'hamburger_script' );


//ページネーション
function my_pagenavi( $args=array()){
    if( !function_exists( 'wp_pagenavi') ) return;

    $defaults = array(
        'before' => '<div id="pagenation-wrapper">', 
        'after'  => '</div>', 
        'wrapper_tag' => 'ul', 
        'wrapper_class' => 'c-pagenation'
    );
    $args = is_array($args) ? array_merge($defaults, $args) : $args;

 
    wp_pagenavi($args);

}

//サーチフォーム

function search_wp_title($title) {
    if (is_search(  )) {
        $title = get_search_query() ;
    }
    return $title ;

}
add_filter( 'wp_title', 'search_wp_title');

