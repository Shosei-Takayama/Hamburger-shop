 <!--サイドバーメニュー-->
        <nav class="p-gmenu p-sidebar l-sidebar">
                
                <h3>Menu</h3>              
                    
                <?php wp_nav_menu( array(
                        'menu'      => 'categorymenu', 
                        'container' => 'nav'
                        ) );                        
                ?>
       
        </nav>

                <!--サイドバーメニュー開いたときのグレー掛け-->
                <div class="l-sidebar-overlay ">

                </div>
                
    </div>
