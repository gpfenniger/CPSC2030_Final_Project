<?php require_once 'header.php'; ?>
<body>
	<div class="wrapper">
		<div>
			<?php require_once 'nav.php'; ?>
		</div>
		<div style="background-color: rgb(238, 238, 238);">
			<div class="row main">
				<div class="col-sm-12">

					<?php if (have_posts()):
       while (have_posts()):
         the_post();

         get_template_part('content', get_post_format());
       endwhile;
     endif; ?>

				</div> <!-- /.col -->
				<?php require_once 'footer.php'; ?>

			</div> <!-- /.row -->
		</div>

	</div>
</body>