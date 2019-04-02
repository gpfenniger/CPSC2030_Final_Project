    <footer>
        <?php get_template_part('template-parts/footer/footer', 'widgets'); ?>
        <div class="site-info">
            <?php $blog_info = get_bloginfo('name'); ?>
            <?php if (!empty($blog_info)): ?>
                <a class="site-name right-border" href="<?php echo esc_url(
                  home_url('/')
                ); ?>" 
                rel="home"><?php bloginfo('name'); ?> Dashboard</a>
                <p class="right-border">Want to reach out to us?</p>
                <p>Powered With Love by WordPress.org</p>
                <?php endif; ?>
        </div>
    </footer>
</main>
<?php wp_footer(); ?>

<style>
    .site-info {
        justify-content: center;
        display: grid;
        grid-template-columns: max-content max-content max-content;
    }

    .site-info p {
        margin: 0;
        padding-right: 10px;
        padding-left: 10px;
    }

    .right-border {
        border-right: solid black 1px;
    }

    .site-info a {
        text-decoration: none;
        padding-right: 10px;
    }
    </style>