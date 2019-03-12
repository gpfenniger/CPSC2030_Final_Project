<!DOCTYPE html>
<html lang="en">

    <?php require_once 'header.php'; ?>

    <!-- Page specific CSS -->
    <link href="<?php echo get_bloginfo(
        'template_directory'
    ); ?>/stylesheets/home.css" rel="stylesheet">

    <body>
        <div class="wrapper">
            <?php require_once 'nav.php'; ?>
            <div class="main">
            <?php if (have_posts()):
                while (have_posts()):
                    the_post(); ?>
            <div>    
                <h2 id="post-<?php the_ID(); ?>">
                <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
                <?php the_title(); ?></a></h2>    
                <?php the_content(); ?>      
            </div>
            <?php
                endwhile; ?>
            
            <?php
            else:
                 ?>
            <p>Sorry no posts matched your criteria.</p>
            <?php
            endif; ?>

            </div>
        </div>
    </body>
</html>