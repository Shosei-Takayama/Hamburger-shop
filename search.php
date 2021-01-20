<?php get_header(); ?> <!--header.phpを読み込むテンプレートタグ（インクルードタグ）-->

            <!--サイトメイン部分-->
            <article class="p-content">

                <!--メインの大きい画像-->
                    <div class="p-archive-main-cover">

                        <img src="<?php echo get_template_directory_uri(); ?>/image/component_archivepage/archive-main.png" alt="ハンバーガーの画像" class="archive-cover-img">
                        <p class="heading-title">search:<span class="product-name"><?php wp_title( '' ); ?></span></p>
                      
                    </div>

                <!--ページの見出し-->
              

                <?php if ( have_posts() ): 
                 while ( have_posts() ): 
                 the_post(); ?>

                 <?php echo esc_url( get_category_link( 55 ) ); ?>

                <!--カード-->
                
                <div class="c-card">   
                    <figure class="card__thumbnail">
                    <?php if( has_post_thumbnail( )) {
                        echo get_the_post_thumbnail( 
                        $post->ID, 'medium_large', array( 'class' => 'img-responsive'),false); 
                    }
                        ?>
                    
                    </figure>  

                    <div class="c-card-inner card-text"> 
                        <h3><?php the_title(); ?></h3>
                        <h4>小見出しが入ります</h4>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                            <div class="card-button">
                                <a href="<?php the_permalink(); ?>">詳しく見る</a>
                            </div>
                    </div>
                </div>
                


                <?php endwhile; ?>
                <?php else: ?>
                    <div class="searchnotfound">
                        <p>検索結果はありませんでした</p>
                    </div>
            <?php endif; ?>
               


            </article>

            <?php my_pagenavi(); ?>
                
        </div>


        <?php get_sidebar(); ?> <!--siderbar.phpを読み込むテンプレートタグ（インクルードタグ）-->



    <?php get_footer(); ?> <!--footer.phpを読み込むテンプレートタグ（インクルードタグ）-->
