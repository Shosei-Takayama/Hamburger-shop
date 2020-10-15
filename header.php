<!DOCTYPE html>
<html lang="<?php language_attributes();?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >


   

            <header class="l-header">

                <!--ショップ名-->
                    <h1 class="l-header-title">
                        <a href="<?php echo esc_url( home_url('/')); ?>">Hamburger</a>
                    </h1>
                <!--検索フォーム-->
                    <?php get_search_form(); ?>   

                <!--ハンバーガーメニューのボタン-->
                    
                        <button class="p-hamburger p-gmenu-btn is-hamburger">

                            <span>Menu</span>

                        </button>
            </header>
