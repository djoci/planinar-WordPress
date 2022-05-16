<div class="container mb-5 mt-3">
    <div class="media">
        <img class="img-fluid" src="<?php the_post_thumbnail_url('belasica-destinacije-img'); ?>" alt="">
            
        <div class="media-body">
            <h3><a href="<?php the_permalink();  ?>"><?php the_title();  ?></a></h3>
            <div class="meta">
                <span><?php the_date();  ?></span>
                <span><a href="#"><?php comments_number(); ?></a></span>
            </div>
            <div class="intro">
                <?php
                the_excerpt();
                ?>
            </div>
            <div class="mb-5">
            	<a class="btn btn-outline-primary" href="<?php the_permalink();  ?>">Dalje...</a>
            </div>
            
        </div>
    </div>
</div>