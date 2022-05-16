			<section class="newsletter">
          <div id="primary" class="site-content row text-center">
    <div id="content" role="main" class="col-7 prikaz">
			<h3>Kontakt</h3>
      <?php while ( have_posts() ) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

            <div class="entry-content">
              <?php the_content(); ?>

              <div id="respond">
                <?php echo $response; ?>
                <form action="<?php the_permalink(); ?>" method="post">
                  <div class="mb-3" style="justify-content: center;"><label for="message_name" class="text-start form-label">Ime: <span>*</span> <br><input type="text" name="message_name" class="form-control" id="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>"></label></div>
                  <div class="mb-3"><label for="message_email" class="text-start form-label">Email: <span>*</span> <br><input type="text" name="message_email" class="form-control" id="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>" aria-describedby="message_email"></label></div>
                  <div class="mb-3"><label for="message_text" class="text-start form-label">Poruka: <span>*</span> <br><textarea id="message_text" name="message_text" class="form-control"><?php echo esc_textarea($_POST['message_text']); ?></textarea></label></div>
                  <div class="mb-3"><label for="message_human" class="text-start form-label">Potvrdi da nisi robot: <span>*</span> <br><input type="text" name="message_human" id="message_human" class="form-control verification"><span class="form-text"> + 3 = 5</span></label></div>
                  <input type="hidden" name="submitted" value="1">
                  <button type="submit" class="btn za-formu">Pošalji</button>
                </form>
              </div>


            </div><!-- .entry-content -->

          </article><!-- #post -->

      <?php endwhile; // end of the loop. ?>

    </div><!-- #content -->
  </div><!-- #primary -->
	</section>
