<nav>
    <div class="sticky-wrapper nav-wrapper">
        <h3 style="color: #226666"><?php echo get_bloginfo('name'); ?></h3>
        <ul class="nav-menu" role="menu" aria-expanded="true">
            <li><a role="menuitem" href="<?php echo get_bloginfo('wpurl'); ?>">
                Home
            </a></li>
            <?php wp_list_pages('&title_li='); ?>
        </ul>
    </div>
</nav>