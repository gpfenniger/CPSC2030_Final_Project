<div class="side">
    <a href="<?php echo get_bloginfo( 'wpurl' );?>">
        <!-- site title -->
        Maya's Drawing Site
    </a>
    <?php echo get_bloginfo( 'description' ); ?>
    <div class="page-nav">
        <?php wp_list_pages( '&title_li=' ); ?>
    </div>
</div>