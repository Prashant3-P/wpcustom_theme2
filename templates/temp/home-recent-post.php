          <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>


          <?php if($the_query ->have_posts()):?>
          <?php while($the_query ->have_posts()):$the_query ->the_post(); ?>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">

            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><?php if ( has_post_thumbnail() ) { 
           the_post_thumbnail('medium', array('class' => 'home-recentimg img-fluid')); 
            } else { ?>
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap" class="img-responsive">
          <?php } ?>
              </a>
              <div class="media-body">
                <span class="meta-post"><?php the_time('F jS, Y'); ?></span>
                <h2 class="mt-2 mb-3"><a href="<?php the_permalink(); ?>"><?php $excerpt = get_the_excerpt();
                                  echo substr( $excerpt, 0, 50); ?></a></h2>
              </div>
            </div>

          </div>
          <?php endwhile; ?>
          <?php else:?> 
          <?php echo wpautop('Sorry, No posts were found'); ?>
          <?php endif; ?>

          <?php 
            wp_reset_query();
            wp_reset_postdata();
          ?>