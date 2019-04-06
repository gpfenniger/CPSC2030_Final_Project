<!DOCTYPE html>
<html lang="en">

    <?php get_header(); ?>

    <body>
        <div class="wrapper">
            <div class="main">
                <div class="main-topbar">
                </div>
                <div class="post-content-wrapper">
                    <?php while (have_posts()):
                      the_post();
                      the_content();
                    endwhile; ?>
                </div>
            </div>
            <div style="margin: auto;" class="bar"></div>
            <div style="margin: auto; width: 60%; margin-top: 10px;">
                <?php if (comments_open() || get_comments_number()) {
                  echo '<p>Number of comments: ';
                  get_num_of_comments($id);
                  echo '</p>';
                  comments_template();
                } ?>
                <?php get_footer(); ?>
            </div>
        </div>
    </body>
</html>