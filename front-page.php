<?php get_header(); ?> <!--header.phpを読み込むテンプレートタグ（インクルードタグ）-->

            <!--サイトメイン部分-->
            <article class="p-content ">

                <!--メインの大きい画像-->
                    <div class="p-main-cover">

                        <img src="<?php echo get_template_directory_uri(); ?>/image/layout/index_ttl.png" alt="ハンバーガーの画像" class="index-cover-img">
                        <p class="main-title">ダミーサイト</p>
                    </div>

                <!--ブランチメニュー-->
                <div class="c-branch-menu l-branch-menu">

                    <ul>
                        
                        <li>
                            
                            
                                <div class="p-index-menu-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/component_frontpage/index-bg-1.png" alt="ハンバーガーの画像" class="index-menu-img">
                                </div>

                                    <div class="p-content-menu">

                                        <h2>Take Out </h2>
                                        <p>__</p>


                                        <div class="l-summary c-summary">
                                            <?php $my_cat_name = 'Take out';
                                            $category_id = get_cat_ID( $my_cat_name );
                                            $category_link = get_category_link( $category_id ); ?>
                                            
                                        <a class="l-summary" 
                                        href="<?php echo esc_url( $category_link ) ;?>" title="<?php echo $my_cat_name; ?>"  > 
                                        
                                            <dl>    
                                                <dt>小見出しが入ります</dt>
                                                <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                                </dd>
                                            </dl>

                                            <dl>
                                                <dt>小見出しが入ります</dt>
                                                <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                                </dd>
                                            </dl>
                                        </a>  
                                        </div>

                                    </div>

                        </li>
                    





                        <li>
                        <a href="<?php echo get_permalink(); ?>">

                                <div class="p-index-menu-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/component_frontpage/index.bg-2.png" alt="ハンバーガーの画像" class="index-menu-img">
                                </div>

                                    <div class="p-content-menu">

                                        <h2>Eat In </h2>
                                        <p>__</p>

                                        <div class="l-summary c-summary">
                                        <?php $my_cat_name = 'Eat In';
                                            $category_id = get_cat_ID( $my_cat_name );
                                            $category_link = get_category_link( $category_id ); ?>
                                            
                                        <a class="l-summary" 
                                        href="<?php echo esc_url( $category_link ) ;?>" title="<?php echo $my_cat_name; ?>"  > 
                                            <dl>    
                                                <dt>小見出しが入ります</dt>
                                                <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                                </dd>
                                            </dl>

                                            <dl>
                                                <dt>小見出しが入ります</dt>
                                                <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                                </dd>
                                            </dl>
                                        </a>  
                                        </div>
                                        
                                    </div>
                                    </a>
                        </li>
                    </ul>
                </div>


                <!--サイトのアクセス情報-->
                <section class="p-access">
                    
                    <div class="p-index-access-bgimg">

                    <img src="<?php echo get_template_directory_uri(); ?>/image/layout/index-access-map.png" alt="地図の画像" class="index-access-map-img">

                    </div>
                    <a href="<?php echo get_category('page'); ?>">
                        <div class="c-access-info">

                            <h3>見出しが入ります</h3>
                            <p>_______</p>
                            <p class="access-map-text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            </p>
                            
                        </div>
                    </a>
                </section>

            </article>

        </div>


    <?php get_sidebar(); ?> <!--siderbar.phpを読み込むテンプレートタグ（インクルードタグ）-->

  <?php get_footer(); ?> <!--footer.phpを読み込むテンプレートタグ（インクルードタグ）-->




   
    
