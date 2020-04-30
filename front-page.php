<?php get_header(); ?>

<?php wp_head(); ?>

<div class="main-container contact-bg" style="background-image: url('<?php echo get_theme_mod("banner_theme_imageControl_setting"); ?>'); ">
  <div class="inside-container">
    <div class="row">
        <div class="col-12">
          <div class="contact-con"> 
            <h1><?php echo get_theme_mod('banner_theme_title_setting'); ?></h1>
            <p><?php echo get_theme_mod('banner_theme_description_setting'); ?></p>
        
           <div class="contact-btn"> <p class="ban-but"><a href="#" class="btn text-white py-3 px-4">Get In Touch</a></p> </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-section py-5">
      <div class="inside-container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="heading-39101 mb-5">
               <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h2 class="mb-3 text-dark"><?php the_title(); ?></h2>
                    <?php the_content(); ?>

                    <?php endwhile;
                      else :
                    ?>
                   <p>No content found</p>
                  <?php endif; ?>
            </div>
            
          </div>
          <div class="col-md-6" data-aos="fade-right">
            <?php if ( has_post_thumbnail() ) { 
           the_post_thumbnail('hell-ride', array('class' => 'homf-image img-fluid')); 
            } else { ?>
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap" class="img-responsive">
          <?php } ?>
        </div>
      </div>
    </div>
</div>


<section class="section blog-post-entry bg-pattern pt-5 pb-5">
      <div class="inside-container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Recent Blog Post</h2>
            <p class="lead" data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias. Sed.</p>
          </div>
        </div>
        <div class="row">
           <!--Add template part for 3 Recent Posts -->
           <?php get_template_part('templates/temp/home', 'recent-post'); ?>
        </div>
      </div>
    </section>








<?php get_footer(); ?> 
