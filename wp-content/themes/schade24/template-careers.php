<?php 
/*
* Template Name: Careers
*/
get_header("inside");
?>
	<section class="m-top-66" id="faqs">
		<div class="container">
	     	<div class="row">
	     	    <?php $the_query = new WP_Query( array( 'post_type' => 'page')); ?>

                <? if (have_posts() ) : ?>
                   
                   <? while (have_posts() ) :
                       the_post();
                   ?>
	     		<div class="col-xs-12">
			        <div class="sep60px">&nbsp;</div>
			        <div class="sep60px hidden-xs">&nbsp;</div>
			        <div class="sep60px hidden-xs">&nbsp;</div>
			        <h1 class="text-lightblue gothamrounded font28px margin0 text-center"><? echo the_title();?></h1>
			        <div class="sep60px">&nbsp;</div>
		        </div>
		        <?php $vacatures = get_field('vacatures'); ?>
	        	<div class="col-md-12">
					<div class="faqblock">
						<h2><?php echo $vacatures['junior_title']; ?></h2>
						<p class="content15 black"><?php echo $vacatures['opportunity_description_junior']; ?></p>	
	                    <div class="text-left">					
	                        <a href="<?php echo $vacatures['button_link']; ?>" class="btn btn-md btn-primary career"><?php echo $vacatures['button_text']; ?></a>
                            <div class="sep20px">&nbsp;</div>
                            <div id="<?php echo $vacatures['button_link']; ?>" class="" style="display:none">
                            	<?php echo $vacatures['body']; ?>
					</div>
					
					<div class="faqblock">
						<h2><?php echo $vacatures['senior_title']; ?></h2>
						<p class="content15 black"><?php echo $vacatures['opportunity_description_senior']; ?></p>		
	                    <div class="text-left">	
	                        <a href="<?php echo $vacatures['button_link_senior']; ?>" class="btn btn-md btn-primary career"><?php echo $vacatures['button_text_senior']; ?></a>
                            <div class="sep20px">&nbsp;</div>
                            <div id="<?php echo $vacatures['button_link_senior']; ?>" class="" style="display:none">
                            <?php echo $vacatures['body_senior']; ?>
					   </div>
					  </div>
                     </div>
                    </div>
                   </div>
	            </div><!-- col-md-12 -->
	        </div><!-- row -->	
	    </div><!--container-->
	    <div class="footerinsidebg">&nbsp;</div>
	</section>

</div><!--insidepage-->
<? endwhile; ?>
<? else : ?>
<? echo wpautop("SORRY! No page found.");?>

<?  endif;?>
</div>

<?php get_footer(); ?>
<script type="text/javascript">
$(function(){
	$('.career').click(function(e){
	    e.preventDefault();
		var id = $(this).attr('href');
		$('#'+id).slideToggle();
	});	
});
</script>
</body>
</html>