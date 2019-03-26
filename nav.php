<nav>
    <div class="sticky-wrapper nav-wrapper">
        <h1><?php echo get_bloginfo('name'); ?></h1>
        <ul class="nav-menu">
            <li><a href="<?php echo get_bloginfo('wpurl'); ?>">
                Home
            </a></li>
            <?php wp_list_pages('&title_li='); ?>
        </ul>
    </div>
</nav>