<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>コーディング課題</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="./CSS/style.css">
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
                    <div class="c-header-form">
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
            <article class="p-content">

                <!--メインの大きい画像-->
                    <div class="p-archive-main-cover">

                        <img src="image/component_archivepage/archive-main.png" alt="ハンバーガーの画像" class="archive-cover-img">
                        <p class="heading-title">menu:<span class="product-name">チーズバーガー</span></p>
                      
                    </div>

                <!--ページの見出し-->
                <div class="p-page-heading">
                    <h2>小見出しが入ります</h2>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </div>

                <!--カード-->
                <div class="c-card">   
                    <figure class="card__thumbnail">
                        <img src="./image/component_archivepage/archive-c-card-pc.png" alt="窓際に置かれたハンバーガーの画像" class="card-image">
                    </figure>  

                        <div class="c-card-inner card-text"> 
                        <h3>チーズバーガー</h3>
                        <h4>小見出しが入ります</h4>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        <div class="card-button">
                        <a href="">詳しく見る</a>
                        </div>
                        </div>
                </div>

                <div class="c-card">   
                    <figure class="card__thumbnail">
                        <img src="./image/component_archivepage/archive-c-card-pc.png" alt="窓際に置かれたハンバーガーの画像" class="card-image">
                    </figure>  

                        <div class="c-card-inner card-text"> 
                        <h3>ダブルチーズバーガー</h3>
                        <h4>小見出しが入ります</h4>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        <div class="card-button">
                        <a href="">詳しく見る</a>
                        </div>
                        </div>
                </div>

                <div class="c-card">   
                    <figure class="card__thumbnail">
                        <img src="./image/component_archivepage/archive-c-card-pc.png" alt="窓際に置かれたハンバーガーの画像" class="card-image">
                    </figure>  

                        <div class="c-card-inner card-text"> 
                        <h3>スペシャルチーズバーガー</h3>
                        <h4>小見出しが入ります</h4>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        <div class="card-button">
                        <a href="">詳しく見る</a>
                        </div>
                        </div>
                </div>
               


            </article>

            <div class="pagenation-wrapper">
                
                <h4>page 1/10</h4>
                <ul class="c-pagenation">
                    <li><a href=""><<</a></li>
                    <li class="prev"><a href="">前へ</a></li>
                    <li><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                    <li><a href="">5</a></li>
                    <li><a href="">6</a></li>
                    <li><a href="">7</a></li>
                    <li><a href="">8</a></li>
                    <li><a href="">9</a></li>
                    <li class="Next"><a href="">次へ</a></li>
                    <li ><a href="">>></a></li>
                </ul>
               

            </div>
                
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
    <script src="./JavaScript/hamburger.js"></script>
    
    
</body>
</html>