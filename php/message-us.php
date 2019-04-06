<?php
// Backend validation for message us form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['type-of-comment']) && isset($_POST['message'])) {
    $name = isset($_POST['name-field']) ? $_POST['name-field'] : 'anonymous';
    $type = $_POST['type-of-comment'];
    // If type of comment is one of the accepted it will move on to send email
    if ($type == 'welldone' || $type == 'improve') {
      // Send email to artist
    } elseif ($type == 'problem') {
      // Send email to site maintainer
    }
  }
}
?>
