<?php require_once 'header.php'; ?>
<body>
	<div class="wrapper">
		<div>
			<?php require_once 'nav.php'; ?>
		</div>
		<div class="row main">
			<div class="col-sm-12">

				<?php if (have_posts()):
      while (have_posts()):
        the_post();

        get_template_part('content', get_post_format());
      endwhile;
    endif; ?>

			</div> <!-- /.col -->
		</div> <!-- /.row -->
	</div>
</body>