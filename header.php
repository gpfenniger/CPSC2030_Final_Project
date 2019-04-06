<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title><?php echo get_bloginfo('name'); ?></title>
    <script src="//code.jquery.com/jquery-latest.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <main>
  <?php require_once 'template-parts/components/nav.php'; ?>
