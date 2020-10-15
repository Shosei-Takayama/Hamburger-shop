

<?php //テーマサポート
add_theme_support('menus'); 
add_theme_support('title_-tag'); 


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
    // WPのjquery.jsを読み込まない
    wp_deregister_script( 'jquery' );
    // jQueryの読み込み
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', '3.5.1',true);
    // サイト共通JS
    wp_enqueue_script( 'smart-script', '<?php echo get_template_directory_uri(); ?>./JavaScript/hamburger.js',true);
    // font-awesomeの読み込み
    wp_enqueue_style('font-awesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css', '5.9.0' );
    // reset CSSの読み込み
    wp_enqueue_style('reset','https://unpkg.com/ress/dist/ress.min.css',array());
    // サイト共通のCSSの読み込み
    wp_enqueue_style('style',get_template_directory_uri().'/CSS/style.css',array());
}
add_action( 'wp_enqueue_scripts', 'hamburger_script');
