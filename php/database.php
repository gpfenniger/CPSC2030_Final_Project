<?php
function db_connect()
{
  try {
    require_once 'db_config.php';
    $connection = 'mysql:host=' . DBHOST;
    $connection .= ';dbname=' . DBNAME;
    $user = DBUSER;
    $pass = DBPASS;
    $pdo = new PDO($connection, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  } catch (PDOException $err) {
    die($e->getMessage());
  }
}

function get_num_of_comments($id)
{
  global $pdo;
  // If variable is not number does not make query to prevent SQL Injection
  if (is_numeric($id)) {
    $sql =
      'SELECT COUNT(*) FROM 2030final.wp_comments WHERE comment_post_ID=' .
      $id .
      ';';
    $result = $pdo->query($sql);
    while ($row = $result->fetch()) {
      echo $row[0];
    }
  }
}
?>
