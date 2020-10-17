
<!--フッター-->
<footer class="l-footer">

<div class="footer-bg-img">

    <img src="<?php echo get_template_directory_uri(); ?>/image/layout/footer-cover-img.png" alt="背景画像" class="footer-img">

</div>

<div class="c-footer">

<?php wp_nav_menu( array('menu' => 'footer_nav') ); ?>

    <p class="copyright">Copyright: RaiseTech</p>

</div>


</footer>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/JavaScript/hamburger.js"></script>
    

<?php wp_footer(); ?>


</body>

</html>