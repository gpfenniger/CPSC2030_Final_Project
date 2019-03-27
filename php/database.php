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

/*
// Handle form submission
function handle_form_submission() {
  global $pdo;

  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    // TODO
    // Prepare the submitted form data and insert it to the database
    if (isset($_POST['email']) && isset($_POST['comment'])) {
      $sql = 'INSERT INTO a7.comments (date, mood, email, commentText) VALUES (?,?,?,?)';
      $statement = $pdo -> prepare($sql);
      $statement -> bindValue(1, date("Y-m-d"));
      $statement -> bindValue(2, $_POST['mood']);
      $statement -> bindValue(3, $_POST['email']);
      $statement -> bindValue(4, $_POST['comment']);
      $result = $statement -> execute();
    }
  }
}

// Get all comments from database and store in $comments
function get_comments() {
  global $pdo;
  global $comments;

  //TODO
  $sql = 'SELECT * FROM a7.comments ORDER BY date DESC;';
  $comments = query_base($sql);
} 
*/

function get_num_of_comments($id)
{
  global $pdo;
  $sql =
    'SELECT COUNT(*) FROM 2030final.wp_comments WHERE comment_post_ID=' .
    $id .
    ';';
  $result = $pdo->query($sql);
  while ($row = $result->fetch()) {
    echo $row[0];
  }
}

?>
