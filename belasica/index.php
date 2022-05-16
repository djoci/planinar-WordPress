<?php
		get_header();
	?>
	  <main>
		<!-- <section class="naslov">
            <h1>
                <?php the_title();  ?>
            </h1>
        </section> -->

<!--         <?php
			dynamic_sidebar('sidebar-1');
		?> -->
			<div class="container">
			  <div class="row">
			    <div class="col-lg-8">
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
										
										
						
										<?php
											the_posts_pagination();
										?>
						
									</article>
								</section>
			    </div>
			    
			  </div>

			</div>
		
      </main>  
	
	<?php
	get_footer();
	?>
	