<?php

/*
Template Name: temp
*/ 
?>
<?php get_header()?>
<br>
<br>
<br>
<div class="the-title">
    <h1><?php the_title()?></h1>
    <div>
        <?php
        
            $slogan = get_field('slogan');
            if($slogan){
                echo ($slogan);
            }
        ?>
    </div>
</div>
<br>
<br>
<h1>Get to know <?php the_title()?>.</h1>
<br>
<br>
<br>
<br>
<h1>Explore the lineup.</h1>
<br>
<br>
<br>
<br>
<h1><?php the_title()?> essentials..</h1>
<br>
<br>
<br>
<br>
<h1>Significant others.</h1>
<br>
<br>
<br>
<br>
<h1><?php the_title()?>.</h1>
 //menu...
<br>
<br>
<br>
<br>

<?php get_footer()?> 
