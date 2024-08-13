<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake-Apple</title>
</head>
<body>
    <?php wp_head()?>
    <div class="the-header-container" style="position: sticky;top: 0;z-index:10;">
        <div class="menu-main-nav-container parent">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-nav',
                'container' => 'div', 
                'menu_class' => 'main-nav-class' 
            ));
            ?>
                       <div class="mac submenus">


                       <!-- All of this had to be done with js and DOM -->
                <div>
                    <h6>Explore Mac</h6>
                    <br>
                    <a href="localhost/fake-apple/mac">Explore All Mac</a>
                </div>
            </div>
            <div class="ipad submenus">
            <div>
                    <h6>Explore ipad</h6>
                    <br>
                    <a href="localhost/fake-apple/ipad">Explore All ipad</a>
                </div>
            </div>
            <div class="iphone submenus">
            <div>
                    <h6>Explore iphone</h6>
                    <br>
                    <a href="localhost/fake-apple/iphone">Explore All iphone</a>
                </div>
            </div>
            <div class="watch submenus">
            <div>
                    <h6>Explore watch</h6>
                    <br>
                    <a href="localhost/fake-apple/watch">Explore All watch</a>
                </div>
            </div>
            <div class="airpods submenus">
            <div>
                    <h6>Explore airpods</h6>
                    <br>
                    <a href="localhost/fake-apple/airpods">Explore All airpods</a>
                </div>
            </div>
            <div class="tv submenus">
            <div>
                    <h6>Explore tv & Home </h6>
                    <br>
                    <a href="localhost/fake-apple/tv-home">Explore tv & Home</a>
                </div>
            </div>
            <div class="entertain submenus">
            <div>
                    <h6>Explore Entertain</h6>
                    <br>
                    <a href="localhost/fake-apple/entertain">Explore Entertain</a>
                </div>
            </div>
            <div class="support submenus">
            <div>
                    <h6>Explore support</h6>
                    
                </div>
            </div>
            <div class="where submenus">
            <div>
                    <h6>Explore </h6>
                </div>
            </div>
        </div>
        <div class="fix"></div>
        <div class="overlay"></div>
    </div>