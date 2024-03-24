<?php
/*
* this template for displaying the header
*/
?>


<!DOCTYPE html>
<html lang="<?php language_attributes( )?>" class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head( );?>
</head>
<body <?php body_class( ); ?> >
<div id="header_area">
    <div class="containar">
        <div class="row">
            <div class="col-md-3">
                <a href=""><img src="<?php echo get_theme_mod( 'pro_logo' ); ?>" alt=""></a>
            </div>
            <div class="col-md-9">
                <ul id="nav">
                    <li><a href="">Home</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Service
                        <ul id="li"><a href="">Dropdown Menu</a></ul>
                        <ul id="li"><a href="">Dropdown Menu</a></ul>
                        <ul id="li"><a href="">Dropdown Menu</a></ul>
                           <ul id="li"><a href="">Dropdown Menu</a>
                           <ul id="li"><a href="#"></a>Dropdown Menu 2</ul>
                           <ul id="li"><a href="#"></a>Dropdown Menu 2</ul>
                           <ul id="li"><a href="#"></a>Dropdown Menu 2</ul>
                           <ul id="li"><a href="#"></a>Dropdown Menu 2</ul>
                    </ul>
                    </a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Concact Us</a></li>
                    <li><a href="">Projects</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
    


 <?php wp_footer( );?>
</body>
</html>