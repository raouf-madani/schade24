<?php 

get_header("inside");

?>




 <section class="m-top-66">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="sep60px">&nbsp;</div>
                    <div class="sep60px hidden-xs">&nbsp;</div>
                    <div class="sep60px hidden-xs">&nbsp;</div>
                </div>
                
                
                <div class="col-xs-12">
                    <!--BLOG Starts-->
                    <div class="row ">  
                    
        <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) :1;
            $the_query = new WP_Query( array( 'post_type' => 'post','posts_per_page' => 6 ,'paged' => $paged) ); ?>

                    <? if (have_posts() ) : ?>
                       
                       <? while (have_posts() ) :
                           the_post();
                       ?>
                        <!--THE CONTENT-->
                        <div class="col-md-12 blogcontent text-left">
                            <h2 class="text-center" style="text-align:center"><? echo the_title();?></h2>
                            <div class="sep15px">&nbsp;</div>
                            <div class="text-center">
                            <img src="<?echo get_the_post_thumbnail_url();?>" class="img-responsive full" alt="">
                            </div>
                            <div class="sep15px">&nbsp;</div>
                            <? the_content();?>

                        </div> <!-- End Col -->             
                    <div class="sep25px">&nbsp;</div>  
                       <!--THE CONTENT END-->
                    
                    <!--THE AUTHOR-->
                    
                     <div class="col-md-12 authordetails smallcenter">
                         
                            
                            <div class="col-md-12"><h4 class="">Over auteur</h4></div>
                            <div class="col-md-1">
                                
                                <? $image = get_field('picture');
                                if( !empty( $image ) ): 
                                
                                ?>
                                <img src="<?echo $image;?>" class="img-responsive img-circle">
                            <?php endif; ?>
                            
                            
                            
                            </div>
                            <div class="col-md-11">
                                <p>
                                <h5><strong><?php the_field('author-name'); ?></strong></h5>
                                 <?
                                the_field('author-occupation'); 
                            ?>&nbsp;
                                </p>
                            </div>
                            
                            
                        </div>
                         <div class="sep15px">&nbsp;</div>
                        <!--THE AUTHOR END-->
                    
                     <!--Meer Blogposts Button-->
                     <div class="text-center">
                            <a href="<? site_url()?>/page/blog" class="btn btn-md btn-custompri">Meer Blogposts</a>
                        </div>
                      <div class="sep25px">&nbsp;</div>
                       <h2 class="text-center font16px">MISSCHIEN OOK INTERESSANT</h2>
                        <div class="sep25px">&nbsp;</div>
                      <!--Meer Blogposts Button END-->
                    
                    
                    
                    <!--Related articles-->
                    
                      <div class="realted-blogs">
                           <?php echo do_shortcode('[lastest-post]'); ?>
                        </div>
                    
                    
                    <!--Related articles END -->
                    
                    
                        <!--BLOG Ends-->
                    </div><!--row-->
                </div><!--col-xs-12-->
                
                    <? endwhile; ?>
        <? else : ?>
        <? echo wpautop("SORRY no articles");?>
              
                  <?  endif;?>
            </div><!--row-->
            
            
            
        </div><!--container-->
        <div class="footerinsidebg">&nbsp;</div>
    </section>
</div><!--insidepage-->


<?php 

get_footer();

?>


</body>
</html>