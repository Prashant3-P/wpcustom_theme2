<?php 
$args = array(
  'post_type' =>'post',
  'post_per_page'=>5,
  'orderby'=> 'rand',
  'order'=> 'ASC'
);

$loop = new Wp_Query($args);
?>


<?php if($loop->have_posts()):?>
<?php while($loop->have_posts()):$loop->the_post(); ?>
<hr>
<div class="row ltl-blog">
  <div class="col-4"> 
    <?php if ( has_post_thumbnail() ) { 
           the_post_thumbnail('small', array('class' => 'recent-img img-fluid')); 
            } else { ?>
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap" class="img-responsive">
          <?php } ?>
  </div>
  <div class="col-8 max-award">
      <?php $excerpt = get_the_excerpt();
            echo substr( $excerpt, 0, 50); ?><br>
      <span class="blog-vl"> | </span><span><a href="<?php the_permalink(); ?>" class="bar-post"> read more</a> </span>  
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


