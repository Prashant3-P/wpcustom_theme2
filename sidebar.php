<div class="row">
                <div class="col-12  side-bar-bg"> 
                  <div class="our-header text-center">
                    <span>Search</span>
                      <div class="text-center">
                          <hr> 
                      </div>
                    </div>

                    <div class="input-group">
                        <?php get_search_form(); ?>
                    </div>
                  
                </div>
              </div>
            <div class="row blog-row-padd">
                        <div class="col-12  side-bar-bg"> 
                            <div class="our-header text-center">
                            <span>categories</span>
                              <div class="text-center">
                                  <hr>
                              </div>
                            </div>
                            <!-- Get template part of Categories & numbers -->
                            <?php get_template_part('templates/temp/sidebar','categories'); ?>
              </div>
            </div>      
            <div class="row blog-row-padd">
                <div class="col-12 side-bar-bg"> 
                        <div class="our-header text-center">
                          <span>recent post</span>
                          <div class="text-center">
                              <hr>
                          </div>
                        </div> 
                          <!-- Get template part of Recent Post -->                      	   
                          <?php get_template_part('templates/temp/sidebar','latest-post'); ?>
                 </div>
            </div>   
             <div class="row blog-row-padd">
              <div class="col-12 side-bar-bg"> 
                  <div class="our-header text-center">
                    <span>popular tags</span>
                    <div class="text-center">
                        <hr>
                    </div>
                  </div>
                <div class="popular-link">
                  <!-- To display tags in sidebar -->
                  <?php 
                    $tags = get_tags();
                  ?>
                  
                  <?php if($tags): ?>
                    <?php foreach($tags as $tag): ?>
                      <a href="<?php echo get_tag_link($tag->term_id); ?>"><button><?php echo $tag->name; ?></button></a>

                  <?php endforeach; ?>
                  <?php endif; ?>
                  </div>
                 </div>
              </div> 