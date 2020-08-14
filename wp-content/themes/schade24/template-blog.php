<?php 
/*
* Template Name: Blog
*/
get_header("inside");
?>
<section class="m-top-66" id="faqs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="sep60px">&nbsp;</div>
          <div class="sep60px hidden-xs">&nbsp;</div>
          <div class="sep60px hidden-xs">&nbsp;</div>
          <h1 class="text-lightblue gothamrounded font28px margin0 text-center">BLOG</h1>
          <div class="sep60px">&nbsp;</div>
        </div>
      </div><!--row-->
     
       
      
       
      <div class="row">

                 <?php
                         $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $the_query = new WP_Query( array( 'post_type' => 'post','posts_per_page' => 6 ,'paged' => $paged) ); ?>

        <? if ( $the_query->have_posts() ) : ?>
           
           <? while ( $the_query->have_posts() ) :
                $the_query->the_post();
           ?>
                
          <div class="col-sm-6 col-md-4">
            <div class="blog-box">
                <a href="<? the_permalink();?>">
                  <?  if(has_post_thumbnail()) : ?>
                  <div class="blog-box-image">
                   
                    <img src="<?echo get_the_post_thumbnail_url();?>" class="img-responsive" alt="qsd">
                   
                  </div>
                   <?  endif;?>
                </a>
            <div class="blog-box-content">
                 <h4><a href="<? the_permalink();?>"><? the_title();?> </a></h4>
                  <p><?echo get_the_excerpt();?></p>
                </div>
            </div><!--blog-box-->
          </div><!--col-md-4-->
        <? endwhile; ?>
        <? else : ?>
        <? echo wpautop("SORRY no articles");?>
              
                  <?  endif;?>

     
      </div><!--row-->
      <div class="row">
        <div class="col-xs-12">
          <!--render pagination-->
          <ul class="blogpagination text-center">
         <?
 $total_pages =99999999999;

     echo  paginate_links( array(
          'base' => str_replace( $total_pages, '%#%', get_pagenum_link( $total_pages ) ),
          'format' => '?paged=%#%',
          'current' => max( 1, get_query_var('paged') ),
          'total' => $the_query->max_num_pages,
          'prev_text' => '&laquo;',
          'next_text' => '&raquo;',
           
          ));

wp_reset_postdata();
?>
          </ul>
        </div>
      </div>
    </div><!--container-->
    <!-- <div class="sep60px">&nbsp;</div> -->
    <div class="footerinsidebg">&nbsp;</div>
  </section>
</div>
<?php get_footer(); ?>
<script>
  $(document).ready(function(){
    $(".blog-box").tilt({
      maxTilt: 0,
      perspective: 1400,
      easing: "cubic-bezier(.03,.98,.52,.99)",
      speed: 1200,
      glare: false,
      maxGlare: 0.2,
      scale: 1
    });
  });
</script>
</body>
</html>