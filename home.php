<?php get_header(); ?>

<div class="main-container connect" style="background-image: url('<?php echo get_theme_mod("custom_theme_imageControl_setting"); ?>'); ">
    <div class="inside-container">
        <div class="row">
              <div class="col-12 subhead">
                    <h1 class="text-center">blog</h1>
                    <nav class="breadcrumb page-linker">
                        <a class="breadcrumb-item" href="#">Home</a>
                        <span class="breadcrumb-item active">Blogs</span>
                     </nav>
              </div>
        </div>
    </div>
</div>


<div class="main-container blog-container">
   <div class="inside-container">
      <div class="row">
      	<!-- posts -->
          <div class="col-lg-8 " >
          	<?php  if (have_posts()) : while ( have_posts() ) : the_post();   ?>
            <div class="row blog-row-padd">
                <div class="col-md-12  ">
                
                  <div class="blog-post">

                    <div></div><?php if ( has_post_thumbnail() ) { 
           the_post_thumbnail('hell-ride', array('class' => 'blog-image img-fluid')); 
            } else { ?>
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap" class="img-responsive">
          <?php } ?>
                    <div class="blog-description">
                      <div class="text-center">  
                      	   <?php get_template_part('templates/temp/post','categories'); ?>
                             <h2><?php the_title(); ?></h2>
                                <div class="post-info"> <p> <span class="info-over"> By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span> <span class="spc-line"> |</span> <span class="info-over"><?php the_time('F jS, Y'); ?></span> 
                                  <span class="spc-line"> | </span> 
                                  <span class="info-over"> <?php echo get_comments_number(); ?> Comments </span> </p> </div>
                         </div>   
                            
                         <p><?php $excerpt = get_the_excerpt();
                                  echo substr( $excerpt, 0, 450); ?>          
                          </p>
                               
                        <div class="rd-btn">
                               <a href="<?php the_permalink(); ?>" class="read-more"> read more</a>
                        </div>
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


          <!-- Sidebar -->
          <div class=" col-lg-4 side-bar-colon" >
              <?php get_sidebar(); ?>
          </div>
      </div>
   </div>
</div>

<nav class="pagin-nr">
        <ul class="pagination pb-5 justify-content-center">
          	 <?php echo paginate_links();
          	 ?>
        </ul>
</nav>


<?php get_footer(); ?> 
