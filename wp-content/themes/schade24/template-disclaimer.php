<?php 
/*
* Template Name: Disclaimer
*/
get_header("inside");

?>
<section class="m-top-66" id="faqs">
		<div class="container">
         	<div class="row">
         	    <?php
           
                   $the_query = new WP_Query( array( 'post_type' => 'page')); ?>

                    <? if (have_posts() ) : ?>
                       
                       <? while (have_posts() ) :
                           the_post();
                       ?>
         		<div class="col-md-12">
         			<div class="sep60px">&nbsp;</div>
			        <div class="sep60px hidden-xs">&nbsp;</div>
			        <div class="sep60px hidden-xs">&nbsp;</div>
			        <h1 class="text-lightblue gothamrounded font28px margin0 text-center"><? echo the_title();?></h1>
			        <div class="sep60px">&nbsp;</div>
         		</div>
            	<div class="col-md-12">
				<? echo the_content();?>
                </div>
                <? endwhile; ?>
                <? else : ?>
                <? echo wpautop("SORRY! No page found.");?>
              
                  <?  endif;?>
            </div><!-- row -->
         </div><!-- .container -->
         <div class="footerinsidebg">&nbsp;</div>
	</section>
</div><!-- .insidepage -->
<?php  get_footer();?>