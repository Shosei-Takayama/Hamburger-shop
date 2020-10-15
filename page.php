<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>コーディング課題</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" />
</head>

<body>

    <div class="l-wrapper">

        <div class="l-main-wrapper">

            <header class="l-header">

                <!--ショップ名-->
                    <div class="l-header-title">
                        <h1>Hamburger</h1>
                    </div>

                <!--検索フォーム-->
                    <div class="p-header-form">
                        <form action="" class="c-search-form" method="post">
                            <input type="search" class="c-search-box " placeholder="" >
                            <input type="submit" value="検索" class="c-submit-button">
                        </form>
                    </div>

                <!--ハンバーガーメニューのボタン-->
                        <button class="p-hamburger p-gmenu-btn is-hamburger">

                            <span>Menu</span>

                        </button>
            </header>




            <!--サイトメイン部分-->
            <article class="p-content ">

                <!--メインの大きい画像-->
                    <div class="p-main-cover">

                        <img src="image/component_page/page-image_main.png" alt="チーズバーガーの画像" class="index-cover-img">
                        <h1 class="main-title">ショップについて</h1>

                    </div>

                <section class="heading-content">
                     <!--ページの見出し-->
                <div class="p-page-heading">
                    <h2>小見出しが入ります</h2>
                    <p>Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。</p>
                </div>

                 <div class="p-heading-item">   
                <h3>見出し h3</h3>
                <h4>見出し h4</h4>
                <h3>見出し h3</h3>
                <h4>見出し h4</h4>
                <h5>見出し h5</h5>
                <h6>見出し h6</h6>
                </div>

                <div class="c-blockquote-wrapper">
                <blockquote cite="" class="c-blockquote">
                    <p>Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</p>
                 出典元：<cite><a href="">○○○○○○○○○○○○</a></cite>
                </blockquote>
                </div>

                </section>

                <section class="p-single-content"> 

                    <div class="content-wrapper-center">
                    <figure class="content-center-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/componet_singlepage/single-page_image.png" alt="ハンバーガーとポテトが並んだ画像" class="content-center-img">
                    </figure>
                    </div>

                    <div class="content-wrapper-left">
                        <figure class="content-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/componet_singlepage/content-image.png" alt="ハンバーガーとポテトが並んだ画像" class="content-left-img">
                        </figure>
                        <p> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります </p>
                    </div>

                    <div class="content-wrapper-right">
                        <figure class="content-right">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/componet_singlepage/content-image.png" alt="ハンバーガーとポテトが並んだ画像" class="content-right-img">
                        </figure>
                        <p> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
                    </div>


                </section>

                <section class="c-grid">
                    
                    <div class="grid-wrapper">
                        <div class="grid-heading-img-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/componet_singlepage/content-image.png" alt="ハンバーガーとポテトが並んだ画像" class="content-heading-img">
                        </div>
                    </div>

                        <div class="c-grid-content">
                            <div class="grid-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/componet_singlepage/content-image.png" alt="ハンバーガーとポテトが並んだ画像" class="content-img">
                            </div>
                            <div class="grid-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/componet_singlepage/content-image.png" alt="ハンバーガーとポテトが並んだ画像" class="content-img">
                            </div>
                            <div class="grid-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/componet_singlepage/content-image.png" alt="ハンバーガーとポテトが並んだ画像" class="content-img">
                            </div>
                            <div class="grid-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/componet_singlepage/content-image.png" alt="ハンバーガーとポテトが並んだ画像" class="content-img">
                            </div>
                            <div class="grid-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/componet_singlepage/content-image.png" alt="ハンバーガーとポテトが並んだ画像" class="content-img">
                            </div>
                            <div class="grid-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/componet_singlepage/content-image.png" alt="ハンバーガーとポテトが並んだ画像" class="content-img">
                            </div>
                            <div class="grid-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/componet_singlepage/content-image.png" alt="ハンバーガーとポテトが並んだ画像" class="content-img">
                            </div>
                            <div class="grid-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/componet_singlepage/content-image.png" alt="ハンバーガーとポテトが並んだ画像" class="content-img">
                            </div>
                            <div class="grid-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/componet_singlepage/content-image.png" alt="ハンバーガーとポテトが並んだ画像" class="content-img">
                            </div>
 
                    
                </div>
                </section>

                <div class="p-list-content">
                <div class="list-content-wrapper">
                    <ol class="list-content">
                        <li>リストリストリスト</li>
                        <li>リストリストリスト
                            <ol>
                            <li>リストリストリスト</li>
                            <li>リストリストリスト</li>
                            </ol>
                        </li>
                    </ol>

                    <ol >
                        <li>リストリストリスト</li>
                        <li>リストリストリスト</li>
                    </ol>   
                    
                    <ul class="list-content-1">
                        <li>リストリストリスト</li>
                        <li>リストリストリスト
                            <ul class="list-content-2">
                                <li>リスト2リスト2リスト2</li>
                                <li>リスト2リスト2リスト2</li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="list-content-3">
                        <li>リストリストリスト</li>
                        <li>リストリストリスト</li>
                    </ul>
                </div>  
                </div>

                <section class="c-sourceview">
                    <pre>
                        <code>      
                            &lt;html&gt;
                                &lt;head&gt;
                                &lt;/head&gt;
                                &lt;body&gt;
                                &lt;/body&gt;
                            &lt;/html&gt;
                                
                        </code>
                    </pre>
                    
                </section>

                <div class="table-wrapper">
                    <table id="table-bdr">
                        <tr>
                            <th>テーブル</th>
                            <td>テーブル2</td>    
                        </tr>
                        <tr>
                            <th>テーブル</th>
                            <td>テーブル2</td>
                        </tr>
                        <tr>
                            <th>テーブル</th>
                            <td>テーブル2</td>
                        </tr>
                        <tr>
                            <th>テーブル</th>
                            <td>テーブル2</td>
                        </tr>
                       
                    </table>
                </div>

                    <input type="button" value="ボタン" class="c-button">


                    <p><b>boldboldboldboldboldboldboldbold</b></p>
                

               
               

            </article>

        </div>


        <!--サイドバーメニュー-->
        
        
            

            <nav class="p-gmenu p-sidebar">
                

                    <h3>Menu</h3>

                    
                        
                        <h4>バーガー</h4>

                        <ul>

                            <li>ハンバーガー</li>
                            <li>チーズバーガー</li>
                            <li>テリヤキバーガー</li>
                            <li>アボカドバーガー</li>
                            <li>フィッシュバーガー</li>
                            <li>ベーコンバーガー</li>
                            <li>チキンバーガー</li>
                        </ul>

                        <h4>サイド</h4>

                        <ul>

                            <li>ポテト</li>
                            <li>サラダ</li>
                            <li>ナゲット</li>
                            <li>コーン</li>
                        </ul>

                        <h4>ドリンク</h4>
                        <ul>

                            <li>コーラ</li>
                            <li>ファンタ</li>
                            <li>オレンジ</li>
                            <li>アップル</li>
                            <li>紅茶(Ice/Hot)</li>
                            <li>コーヒー(Ice/Hot)</li>
                        </ul>   
           
                    </nav>

                    <!--サイドバーメニュー開いたときのグレー掛け-->
                    <div class="l-sidebar-overlay ">

                    </div>
                    
    </div>



    <!--フッター-->
    <footer class="l-footer">

        <div class="footer-bg-img">

            <img src="image/layout/footer-cover-img.png" alt="背景画像" class="footer-img">

        </div>
        
        <div class="c-footer">

            <ul>
                <li><a href="#">ショップ情報</a>|<a href="#">ヒストリー</a></li>
            </ul>

            <p class="copyright">Copyright: RaiseTech</p>

        </div>

    </footer>



    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/JavaScript/hamburger.js"></script>
    
</body>

</html>