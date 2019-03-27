  <?php get_header(); ?>
  <div class="main-wrapper">
    <div class="topbar-wrapper sticky-wrapper">
      <div class="main-topbar">
        <p>All Drawings</p>
        <p>Filter</p>
        <p>Sort By</p>
      </div>
    </div>
    <div class="post-wrapper main posts">
    <?php if (have_posts()):
      while (have_posts()):
        the_post(); ?>
    <div class="post">    
        <?php echo_thumbnail(); ?>     
        
    </div>
    <?php
      endwhile; ?>
    
    <?php
    else:
       ?>
    <p>Sorry no posts matched your criteria.</p>
    <?php
    endif; ?>

    </div>

    <?php get_footer(); ?>
  </div>
</body>