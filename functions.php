<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

// Loads styles and scripts
function load_em_up()
{
  $loadables = array(
    'main-style' => '/style.css',
    'home-style' => '/stylesheets/home.css',
    'about-page' => '/stylesheets/about-page.css',
    'post-style' => '/stylesheets/posts.css',
    'navbar' => '/stylesheets/nav.css',
    'general' => '/stylesheets/general.css',
    'colours' => '/stylesheets/colours.css',
    // Scripts
    'nav-script' => '/js/navbar.js',
    'post-hook' => '/js/post-hook.js',
    'search-script' => '/js/search.js'
  );
  foreach ($loadables as $key => $loadable) {
    $uri = get_template_directory_uri() . $loadable;
    $dir = filemtime(get_template_directory() . $script);
    if ($loadable[1] == 's') {
      // for stylesheets
      wp_enqueue_style($key, $uri, array(), $dir);
    } elseif ($loadable[1] == 'j') {
      // for scripts
      wp_enqueue_script($key, $uri, array(), $dir, true);
    }
  }
}
// calls function on enqueue lifecycle hook
add_action('wp_enqueue_scripts', 'load_em_up');

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
  echo '<p>';
  the_title();
  echo '</p>';
}
