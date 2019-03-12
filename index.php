<!DOCTYPE html>
<html lang="en">

    <?php require_once('header.php'); ?>

    <!-- Page specific CSS -->
    <link href="<?php echo get_bloginfo( 'template_directory' );?>/stylesheets/home.css" rel="stylesheet">

    <body>
        <div class="wrapper">
            <?php require_once('nav.php'); ?>
            <div class="main">
            <?php
                // checks if there are any posts that match the query
                if (have_posts()) :
                    
                    // If there are posts matching the query then start the loop
                    while ( have_posts() ) : the_post();
                    
                    // the code between the while loop will be repeated for each post
            ?>
            <div>    
                <h2 id="post-<?php the_ID(); ?>">
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
                <?php the_title(); ?></a></h2>    
                <?php the_content(); ?>      
            </div>
            <?php
                endwhile;  
                else :
            ?>
            <p>Sorry no posts matched your criteria.</p>
            <?php endif; ?>

            </div>
        </div>
    </body>
</html>