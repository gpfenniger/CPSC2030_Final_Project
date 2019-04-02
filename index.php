  <?php get_header(); ?>
  <div class="search-wrapper">
    <?php get_search_form(); ?>
    <button name="exit-search-btn">Exit</button>
  </div>
  <div class="main-wrapper">
    <div class="topbar-wrapper sticky-wrapper">
      <div class="main-topbar">
        <p>All Drawings</p>
        <p>Filter</p>
        <button class="search-btn">Search</button>
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

<style scoped>
  .search-btn {
    background-color: white;
    margin: auto;
    padding: 10px;
    padding-left: 20px;
    padding-right: 20px;
    border: none;
  }

  .search-btn:hover {
    color: white;
    background-color: #407f7f;
  }

  .search-wrapper {
        display: none;
        position: fixed;
        background-color: yellow;
        padding: 200px;
        top: 100px;
        left: 100px;
        z-index: 10;
  }
</style>