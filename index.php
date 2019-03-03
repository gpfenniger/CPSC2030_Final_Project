<!DOCTYPE html>
<html lang="en">

    <?php require_once('header.php'); ?>

    <body>
        <div class="wrapper">
            <?php require_once('sidebar.php'); ?>
            <div class="main">
                Posts go here
                <?php 
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
            
                        get_template_part( 'content', get_post_format() );
        
                    endwhile; endif; 
                ?>

            </div>
        </div>
    </body>
</html>