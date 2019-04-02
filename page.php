<?php get_header(); ?>
<body>
	<div class="wrapper">
		<div>
			<div class="row main page-wrapper">
				<div class="col-sm-12">

					<?php if (have_posts()):
       while (have_posts()):
         the_post();

         get_template_part('template-parts/content/content', get_post_format());
       endwhile;
     endif; ?>

				</div> <!-- /.col -->
				<?php get_footer(); ?>
			</div> <!-- /.row -->
		</div>
	</div>
</body>