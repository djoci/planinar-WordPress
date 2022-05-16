<?php
		get_header();
	?>	
		
		<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-pause="false">
		  <div class="carousel-indicators">
		    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
		    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
		  </div>
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <?php $slider = get_posts(array('post_type' => 'slider', 'posts_per_page' => 6)); ?>
		      <?php $count = 0; ?>
		      <?php foreach($slider as $slide): ?>
		      <div class="carousel-item <?php echo ($count == 0) ? 'active' : ''; ?>">
			      <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($slide->ID)) ?>" class="d-block mw-100 carousel-mobile animacija-big" height="640" alt="<?php echo $alt = get_post_meta(get_post_thumbnail_id($slide->ID), '_wp_attachment_image_alt', true); ?>"/>
				  <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($slide->ID)) ?>" class="d-block w-100 carousel-desktop animacija-big" alt="<?php echo $alt = get_post_meta(get_post_thumbnail_id($slide->ID), '_wp_attachment_image_alt', true); ?>"/>
				<div class="carousel-caption animacija animated">
					<h5>
					  <?php echo get_the_title($slide->ID); ?>
					</h5>
					
					  <?php echo $slide->post_content ?>
					
      			</div>
		      </div>
		      <?php $count++; ?>
		    <?php endforeach; ?>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Next</span>
		  </button>
		</div>
		
<!-- 	<section>
	<article>
			    <h2>Neki widget</h2>
				<?php
					if( have_posts() ) {
						while( have_posts() ){
							the_post();
							the_content();
						}
					}
				?>
			</article>
	</section>	 -->
			
		

		<section class="blog-list">
					<div class="text-center mb-5">
						<h3>Galerije</h3>
					</div>
					<article>
											    <div class="pb-12">
						    	<div class="container">
						    		<div class="row">
										<?php
										
										$args = array( 'numberposts' => 3, 'order'=> 'rsort', 'orderby' => 'date' );
										$postslist = get_posts( $args );
										foreach ($postslist as $post) :  setup_postdata($post); ?> 
				
										    			<div class="col-xl-4 col-lg-4 col-md-6 col-12">
										    				<div class="card mb-4 shadow-lg ">
											    				<a href="<?php the_permalink() ?>" class="card-img">
																<?php the_post_thumbnail(); ?>
																</a>
																<div class="card-img-overlay">
																	<!-- <p class="fs-6 mb-0"><?php the_date(); ?></p> -->
															        
																	<h5><a href="<?php the_permalink() ?>" class="text-inherit stretched-link"><?php the_title(); ?></a></h5>   
															        <p class="fs-6 mb-0"><?php the_excerpt(__('(more…)')); ?></p>
<!-- 																	<p class="fs-6 mb-0">
																		<a href="<?php the_permalink() ?>" class="fw-semi-bold d-block mb-3 text-primary">
																		Dalje... <i class="fa fa-angle-double-right"> </i>
																		</a>
																	</p> -->
																</div>

										    				</div>									    				
										    				
										    				

										    			</div>
				
				
										<?php endforeach; ?>
						    		</div>
						    		
						    		<div class="text-center mb-5 mt-5">
										<a href="https://planinar.rs/destinacije/" class="btn za-formu">Sve akcije</a>						    		
						    		</div>

						    	</div>

						    </div>

					</article>				
						
		</section>

		 <section class="prednosti text-center">
		   
				<h2>Planinarenje jača dušu i telo </h2>
				<p class="par">Planinarenje je za čoveka u današnjem vremenu najzdravija fizička aktivnost koja se odvija u prirodi.</p>
				<div class="container-fluid">
					<div class="row text-start">
						<div class="col-lg-4 text-left nabrojano nab1"><p>Ko planinari, duže živi.</p></div>
						<div class="col-lg-4 text-left nabrojano nab2"><p>Troši kalorije.</p></div>
						<div class="col-lg-4 text-left nabrojano nab3"><p>Jača mišiće čitavog tela.</p></div>
						<div class="col-lg-4 text-left nabrojano nab4"><p>Smanjuje rizik od srčanih bolesti.</p></div>
						<div class="col-lg-4 text-left nabrojano nab5"><p>Smanjuje stres i podstiče san.</p></div>
						<div class="col-lg-4 text-left nabrojano nab6"><p>Povećava kreativnost u rešavanju problema. </p></div>
					</div>
				</div>

		</section>	      

<?php include get_template_directory() . '/inc/contact_form.php'; ?>	
	
   	
<!-- 	<div id="moj modal">
    <p id="poslato" class="vidimsse">Vaši podaci će biti poslati!</p>	
	</div> -->
	
	<?php
	get_footer();
	?>
	