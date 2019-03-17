<!DOCTYPE html>
<html lang="en">

    <?php require_once 'header.php'; ?>


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
                  <?php
                  if (get_the_post_thumbnail($post_id) != '') {
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
                  }
                  echo '<div class="stat-block">';
                  echo '<p>Likes: 0</p>';
                  echo '<p>Comments:';
                  if ($post_id != '') {
                    echo get_the_id();
                    get_num_of_comments($post_id);
                  }
                  echo '</p></div>';
                  ?>     
                  
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
              <?php require_once 'footer.php'; ?>
            </div>
        </div>
    </body>
</html>