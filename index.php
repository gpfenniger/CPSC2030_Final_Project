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
            <div class="main-wrapper">
              <div class="main-topbar">
                <h3>My Drawings</h3>
                <p>Filter</p>
                <p>Sort By</p>
              </div>
              <div class="main posts">
              <?php if (have_posts()):
                while (have_posts()):
                  the_post(); ?>
              <div class="post">    
                  <?php if (get_the_post_thumbnail($post_id) != '') {
                    echo '<a href="';
                    the_permalink();
                    echo '" class="thumbnail-wrapper">';
                    the_post_thumbnail();
                    echo '</a>';
                  } else {
                    echo '<a href="';
                    the_permalink();
                    echo '" class="thumbnail-wrapper">';
                    echo '<img src="';
                    echo catch_that_image();
                    echo '" alt="" />';
                    echo '</a>';
                  } ?>      
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
        </div>
    </body>
</html>