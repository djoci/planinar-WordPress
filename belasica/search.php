<?php
		get_header();
	?>
	<main>
		<section>
			<article>
				<?php
					if( have_posts() ) {
						while( have_posts() ){
							the_post();
							get_template_part( 'template-parts/content', 'archive' );
						}
					}
				?>
			</article>
		</section>

		
    </main>  
	
	<?php
	get_footer();
	?>
	