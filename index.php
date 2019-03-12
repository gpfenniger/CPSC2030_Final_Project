<!DOCTYPE html>
<html lang="en">

    <?php require_once('header.php'); ?>
    <link href="<?php echo get_bloginfo( 'template_directory' );?>/home.css" rel="stylesheet">

    <body>
        <div class="wrapper">
            <?php require_once('nav.php'); ?>
            <div class="main">
                <?php 
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
            
                        get_template_part( 'content', get_post_format() );
        
                    endwhile; endif; 
                ?>

            </div>
        </div>
    </body>
</html>