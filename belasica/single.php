<?php
		get_header();
	?>



		 <section>
			<article>
				<?php
					if( have_posts() ) {
						while( have_posts() ){
							the_post();
							get_template_part( 'template-parts/content', 'article' );
						}
					}
				?>
			</article>
		 </section> 

		
     
	
	<?php
	get_footer();
	?>
	