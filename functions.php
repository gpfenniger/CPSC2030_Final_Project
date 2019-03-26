<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

// Loads styles and scripts
function style_loader()
{
  $styles = array(
    'main-style' => '/style.css',
    'footer-style' => '/stylesheets/footer.css',
    'home-style' => '/stylesheets/home.css',
    'navbar-style' => '/stylesheets/navbar.css',
    'page-specific' => '/stylesheets/page-spec.css',
    'about-page' => '/stylesheets/about-page.css'
  );

  // Loads stylesheets based on the array above
  // unique name, stylesheet url, dependency array, version number
  foreach ($styles as $key => $sheet) {
    wp_enqueue_style(
      $key,
      get_template_directory_uri() . $sheet,
      array(),
      filemtime(get_template_directory() . $sheet)
    );
  }
}

function script_loader()
{
  $scripts = array(
    'nav-script' => '/js/navbar.js'
  );
  foreach ($scripts as $key => $script) {
    wp_enqueue_script(
      $key,
      get_template_directory_uri() . $script,
      array(),
      filemtime(get_template_directory() . $script),
      true
    );
  }
}
// calls function on enqueue lifecycle hook
add_action('wp_enqueue_scripts', 'style_loader');
add_action('wp_enqueue_scripts', 'script_loader');

require_once 'php/database.php';
$pdo = db_connect();

function catch_that_image()
{
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all(
    '/<img.+src=[\'"]([^\'"]+)[\'"].*>/i',
    $post->post_content,
    $matches
  );
  $first_img = $matches[1][0];

  if (empty($first_img)) {
    $first_img = '/path/to/default.png';
  }
  return $first_img;
}

function echo_thumbnail()
{
  if (get_the_post_thumbnail($post_id) != '') {
    echo '<a href="';
    the_permalink();
    echo '" class="thumbnail-wrapper">';
    the_post_thumbnail();
    echo '</a>';
  } else {
    echo '<a href="';
    the_permalink();
    echo '" class="thumbnail-wrapper">';
    echo '<img src="';
    echo catch_that_image();
    echo '" alt="" />';
    echo '</a>';
  }
  echo '<h3><i>';
  the_title();
  echo '</i></h3>';
  echo '<div class="stat-block">';
  echo '<p>Likes: 0</p>';
  echo '<p>Comments:';
  if ($post_id != '') {
    echo get_the_id();
    get_num_of_comments($post_id);
  }
  echo '</p></div>';
}
?>
