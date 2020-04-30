<?php get_header(); ?>

<div class="main-container blog-container">
   <div class="inside-container">
      <div class="row">
      	<!-- posts -->
          <div class="col-lg-12" >
          	<?php  if (have_posts()) : while ( have_posts() ) : the_post();   ?>
            <div class="row blog-row-padd">
                <div class="col-md-12">
                
                  <div class="blog-post">

                    <div><?php if ( has_post_thumbnail() ) { 
           the_post_thumbnail('hell-ride', array('class' => 'blog-image img-fluid')); 
            } else { ?>
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap" class="img-responsive">
          <?php } ?></div>
                    <div class="blog-description">
                      <div class="text-center">  
                      	   <?php get_template_part('templates/temp/post','categories'); ?>
                        <h1 class="text-left font-weight-bold"><?php the_title(); ?></h1>
                      </div>   
                            
                         <p><?php the_content(); ?>          
                          </p>
                    </div>

                  </div>
                </div>
            </div>
            <?php endwhile;
                  else :
            ?>
            <p>Sorry no posts matched your criteria.</p>
            <?php endif; ?>
          </div>

      </div>
   </div>
</div>

<?php get_footer(); ?> 
