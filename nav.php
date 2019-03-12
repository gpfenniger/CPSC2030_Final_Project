<nav>
    <h1>Navbar</h1>
    <ul class="nav-menu">
        <li><a href="<?php echo get_bloginfo( 'wpurl' );?>">
            <!-- site title -->
            Maya's Drawing Site
        </a></li>
        <?php wp_list_pages( '&title_li=' ); ?>
    </ul>
</nav>

<script>
    $("nav").on("mouseover", () => {
        $(".nav-menu").css("display", "inline");
    });

    $("nav").on("mouseout", () => {
        if ($(window).width() < 480)
            $(".nav-menu").css("display", "none");
    });
</script>