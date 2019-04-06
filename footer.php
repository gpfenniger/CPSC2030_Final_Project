    <footer>
        <?php get_template_part('template-parts/footer/footer', 'widgets'); ?>
        <div class="site-info">
            <?php $blog_info = get_bloginfo('name'); ?>
            <?php if (!empty($blog_info)): ?>
                <a class="site-name right-border focus-colour" href="<?php echo esc_url(
                  home_url('/')
                ); ?>" 
                rel="home"><?php bloginfo('name'); ?> Dashboard</a>
                <p class="right-border">Powered With Love by WordPress.org</p>
                <a class="message-btn focus-colour" href="#">Want to reach out to us?</a>
                <?php endif; ?>
        </div>
        <div class="feedback-wrapper">
        <?php get_template_part(
          'template-parts/forms/contact-form',
          get_post_format()
        ); ?>
        </div>
    </footer>
</main>
<?php wp_footer(); ?>
