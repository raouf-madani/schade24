
        
       <?php
$the_query = new WP_Query( array( 'post_type' => 'post','posts_per_page' => -1 ) ); ?>

<? if ( $the_query->have_posts() ) : ?>
   
   <? while ( $the_query->have_posts() ) :
        $the_query->the_post();
   ?>
        
          <div class="col-sm-6 col-md-4">
            <div class="blog-box">
                <a href="">
                  <?  if(has_post_thumbnail()) : ?>
                  <div class="blog-box-image">
                   
                    <img src="<?echo get_the_post_thumbnail_url();?>" class="img-responsive" alt="qsd">
                   
                  </div>
                   <?  endif;?>
                </a>
                <div class="blog-box-content">
                  <h4><a href="<? the_permalink();?>"><? the_title();?> </a></h4>
                  <p></p>
                </div>
            </div><!--blog-box-->
          </div><!--col-md-4-->
        <? endwhile; ?>
        <? else : ?>
        <? echo wpautop("SORRY no articles");?>
              
                  <?  endif;?>