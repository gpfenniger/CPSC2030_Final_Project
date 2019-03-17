<nav>
    <h1><?php echo get_bloginfo('name'); ?></h1>
    <ul class="nav-menu">
        <li><a href="<?php echo get_bloginfo('wpurl'); ?>">
            Home
        </a></li>
        <?php wp_list_pages('&title_li='); ?>
    </ul>
</nav>

<script>
    // Switch all to slide
    if ($(window).width() < 480) {
        $("nav").on("mouseover", () => {
            $(".nav-menu").css("display", "inline");
        });

        $("nav").on("click", () => {
            $(".nav-menu").slideToggle();
        });

        $("nav").on("mouseout", () => {
            $(".nav-menu").css("display", "none");
        });
    }
</script>