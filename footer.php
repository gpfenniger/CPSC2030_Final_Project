<div class="footer">
    <?php get_template_part('template-parts/footer/footer', 'widgets'); ?>
    <div class="site-info">
        <?php $blog_info = get_bloginfo('name'); ?>
        <?php if (!empty($blog_info)): ?>
			<a class="site-name" href="<?php echo esc_url(home_url('/')); ?>" 
            rel="home"><?php bloginfo('name'); ?></a>
			<?php endif; ?>
    </div>
</div>