<?php require_once('header.php'); ?>
<body>
	<div class="wrapper">
		<?php require_once('sidebar.php'); ?>
		<div class="row main">
			<div class="col-sm-12">

				<?php 
					if ( have_posts() ) : while ( have_posts() ) : the_post();
		
						get_template_part( 'content', get_post_format() );
	
					endwhile; endif; 
				?>

			</div> <!-- /.col -->
		</div> <!-- /.row -->
	</div>
</body>