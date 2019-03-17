<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

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
?>
