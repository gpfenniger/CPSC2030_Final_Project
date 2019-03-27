<!DOCTYPE html>
<html lang="en">

    <?php get_header(); ?>

    <body>
        <div class="wrapper">
            <?php require_once 'nav.php'; ?>
            <div class="main">
                <div class="main-topbar">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="post-content-wrapper">
                    <?php while (have_posts()):
                      the_post();
                      the_content();
                      get_template_part(
                        'template-parts/content/content',
                        'single'
                      );
                    endwhile; ?>
                </div>
            </div>
            <?php get_footer(); ?>
        </div>
    </body>

</html>