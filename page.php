<?php get_header(); ?> <!--header.phpを読み込むテンプレートタグ（インクルードタグ）-->  

            <!--サイトメイン部分-->
            <?php if ( have_posts() ): 
                 while ( have_posts() ): 
                 the_post(); ?>
                 
            <article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?> class="p-content" >

                <!--メインの大きい画像-->
                    <div class="p-main-cover">

                        <img src=<?php if( has_post_thumbnail( )) {
                        echo get_the_post_thumbnail( $post->ID, 'medium_large', 
                        array( 'class' => 'thumbnail-cover-img'),false); } ?>
                        <h1 class="main-title"><?php the_title(); ?></h1>
                    </div>
                    <?php the_content(); ?>
            </article>

            


               
                    <?php endwhile; ?>
            <?php endif; ?>
            
           

        </div>

 <?php get_sidebar(); ?> <!--siderbar.phpを読み込むテンプレートタグ（インクルードタグ）-->



<?php get_footer(); ?> <!--footer.phpを読み込むテンプレートタグ（インクルードタグ）-->