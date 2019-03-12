<nav>
    <h1>Navbar</h1>
    <ul class="nav-menu">
        <li>Hello</li>
        <li>A page</li>
    </ul>
</nav>

<script>
    $("nav").on("mouseover", () => {
        $(".nav-menu").css("display", "inline");
    });

    $("nav").on("mouseout", () => {
        $(".nav-menu").css("display", "none");
    });
</script>