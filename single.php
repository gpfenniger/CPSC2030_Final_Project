<!DOCTYPE html>
<html lang="en">

    <?php require_once 'header.php'; ?>

    <body>
        <div class="wrapper">
            <?php require_once 'nav.php'; ?>
            <div class="main">
                <div class="main-topbar">
                    <h1><?php the_title(); ?></h1>
                </div>

                <?php while (have_posts()):
                  the_post();
                  the_content();
                  get_template_part('template-parts/content/content', 'single');
                endwhile; ?>
            </div>
        </div>
    </body>

</html>