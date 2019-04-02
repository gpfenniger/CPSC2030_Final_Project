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
            <?php get_footer(); ?>
        </div>
    </body>

    <script>
        
    </script>

    <style>
        .bar { 
            padding-top: 40px;
            width: 80%;
            border-bottom: solid #226666 3px;
        }
    </style>
</html>