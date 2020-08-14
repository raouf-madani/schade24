<?php 
/*
* Template Name: Factsheet
*/
get_header("inside");
?>
<section class="m-top-66">
		<div class="container">
	    	<div class="sep25px">&nbsp;</div>
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
	        </div><!--row-->
	        <div class="row">
	        	<div class="col-xs-12">
	        		<? echo the_content();?>
	            </div><!--col-xs-12-->
	        </div><!--row-->
	        <div class="sep20px">&nbsp;</div>
	        <div class="row">
	            <?php $factsheet = get_field('factsheet'); ?>
	        	<!-- <div class="progresswrapper"> -->
		        	<div class="col-xs-4 col-sm-3 col-sm-offset-2">
		        		<div class="progressbar" data-animate="false">
						    <div class="circle" data-percent="<?php echo $factsheet['first_circle_percentage']; ?>">
						          <div><?php echo $factsheet['first_circle_percentage']; ?>%</div>
						    </div>
						</div>
						<div class="sep15px">&nbsp;</div>
						<p class="valtext"><?php echo $factsheet['first_circle_title']; ?></p>
		        	</div><!--col-sm--4-->

		        	<div class="col-xs-4 col-sm-3">
		        		<div class="progressbar" data-animate="false">
						    <div class="circle" data-percent="<?php echo $factsheet['second_circle_percentage']; ?>">
						          <div><?php echo $factsheet['second_circle_percentage']; ?>%</div>
						    </div>
						</div>
						<div class="sep15px">&nbsp;</div>
						<p class="valtext"><?php echo $factsheet['second_circle_title']; ?></p>
		        	</div><!--col-sm--4-->

		        	<div class="col-xs-4 col-sm-3">
		        		<div class="progressbar" data-animate="false">
						    <div class="circle" data-percent="<?php echo $factsheet['third_circle_percentage']; ?>">
						          <div><?php echo $factsheet['third_circle_percentage']; ?>%</div>
						    </div>
						</div>
						<div class="sep15px">&nbsp;</div>
						<p class="valtext"><?php echo $factsheet['third_circle_title']; ?></p>
		        	</div><!--col-sm--4-->
		        <!-- </div> --><!--progresswrapper-->
	        </div><!--row-->
	        <div class="sep20px">&nbsp;</div>
	        <div class="sep20px">&nbsp;</div>
	        <div class="row">
	        	<div class="col-xs-12 col-md-offset-1 col-md-10">
	        		<div class="col-xs-7 nopadding">
	        			<div class="relative">
	        				<div class="bubble69"><?php echo $factsheet['minor_injuries_percentage']; ?>%</div>
	        				<div class="sep20px">&nbsp;</div>
	        				<div class="<?php echo 'bar'.$factsheet['minor_injuries_percentage']; ?>"><?php echo $factsheet['minor_injuries']; ?></div>
	        			</div>
	        		</div>
	        		<div class="col-xs-5 nopadding">
	        			<div class="relative">
	        				<div class="bubble31"><?php echo $factsheet['major_injuries_percentage']; ?>%</div>
	        				<div class="sep20px">&nbsp;</div>
	        				<div class="<?php echo 'bar'.$factsheet['major_injuries_percentage']; ?>"><?php echo $factsheet['major_injuries']; ?></div>
	        			</div>
	        		</div>
	        	</div>
	        </div><!--row-->
	        <div class="sep20px">&nbsp;</div>
	        <div class="row">
	        	<div class="col-xs-12 col-sm-6 col-md-offset-2 col-md-4">
	        		<img src="<?php echo $factsheet['left_image']; ?>" class="img-responsive" alt="" title="">
	        	</div>
	        	<div class="col-xs-12 col-sm-6 col-md-4">
	        		<div class="sep20px">&nbsp;</div>
	        		<div class="sep20px hidden-xs">&nbsp;</div>
	        		<div class="sep20px hidden-xs">&nbsp;</div>
	        		<div class="sep20px hidden-xs">&nbsp;</div>
	        		<img src="<?php echo $factsheet['right_image']; ?>" class="img-responsive" alt="" title="">
	        	</div>
	        </div><!--row-->
	        <div class="sep20px">&nbsp;</div>
			<div class="row">
				<div class="col-xs-12 col-md-offset-1 col-md-10">
					<div class="col-xs-7 col-sm-9 nopadding">
						<div class="relative">
							<div class="bargr">82%</div>
						</div>
					</div>
					<div class="col-xs-5 col-sm-3 nopadding">
						<div class="relative">
							<div class="barpl">verkeersongeval</div>
						</div>
					</div>
				</div>
			</div><!--row-->
			<div class="15px">&nbsp;</div>
			<div class="row">
				<div class="col-xs-12 col-md-offset-1 col-md-10">
					<div class="col-xs-4 col-sm-3 nopadding">
						<div class="relative">
							<div class="bargr">12%</div>
						</div>
					</div>
					<div class="col-xs-8 col-sm-9 nopadding">
						<div class="relative">
							<div class="barpl">bedrijfsongeval</div>
						</div>
					</div>
				</div>
			</div><!--row-->
			<div class="15px">&nbsp;</div>
			<div class="row">
				<div class="col-xs-12 col-md-offset-1 col-md-10">
					<div class="col-xs-3 col-sm-2 nopadding">
						<div class="relative">
							<div class="bargr">4%</div>
						</div>
					</div>
					<div class="col-xs-9 col-sm-10 nopadding">
						<div class="relative">
							<div class="barpl">medische misser</div>
						</div>
					</div>
				</div>
			</div><!--row-->
			<div class="15px">&nbsp;</div>
			<div class="row">
				<div class="col-xs-12 col-md-offset-1 col-md-10">
					<div class="col-xs-2 col-sm-1 nopadding">
						<div class="relative">
							<div class="bargr">2%</div>
						</div>
					</div>
					<div class="col-xs-10 col-sm-11 nopadding">
						<div class="relative">
							<div class="barpl">letselschade door overige omstandigheden</div>
						</div>
					</div>
				</div>
			</div><!--row-->
			<div class="15px">&nbsp;</div>
			<div class="row">
				<div class="col-xs-12 col-md-offset-1 col-md-10">
					<div class="col-xs-7 col-sm-7 nopadding">
						<div class="relative">
							<div class="bargr">51%</div>
						</div>
					</div>
					<div class="col-xs-5 col-sm-5 nopadding">
						<div class="relative">
							<div class="barpl">bestuurder auto</div>
						</div>
					</div>
				</div>
			</div><!--row-->
			<div class="15px">&nbsp;</div>
			<div class="row">
				<div class="col-xs-12 col-md-offset-1 col-md-10">
					<div class="col-xs-3 col-sm-3 nopadding">
						<div class="relative">
							<div class="bargr">21%</div>
						</div>
					</div>
					<div class="col-xs-9 col-sm-9 nopadding">
						<div class="relative">
							<div class="barpl">bestuurder ongemoteriseerd voertuig</div>
						</div>
					</div>
				</div>
			</div><!--row-->
			<div class="15px">&nbsp;</div>
			<div class="row">
				<div class="col-xs-12 col-md-offset-1 col-md-10">
					<div class="col-xs-4 col-sm-4 nopadding">
						<div class="relative">
							<div class="bargr">16%</div>
						</div>
					</div>
					<div class="col-xs-8 col-sm-8 nopadding">
						<div class="relative">
							<div class="barpl">scooter/bromfiets</div>
						</div>
					</div>
				</div>
			</div><!--row-->
			<div class="15px">&nbsp;</div>
			<div class="row">
				<div class="col-xs-12 col-md-offset-1 col-md-10">
					<div class="col-xs-3 col-sm-3 nopadding">
						<div class="relative">
							<div class="bargr">12%</div>
						</div>
					</div>
					<div class="col-xs-9 col-sm-9 nopadding">
						<div class="relative">
							<div class="barpl">voetganger</div>
						</div>
					</div>
				</div>
			</div><!--row-->
			<div class="sep20px">&nbsp;</div>
			<div class="row">
				<div class="flex-wrapper-fact">
					<div class="col-xs-12 col-md-4">
						<img src="<?php echo $factsheet['taxi_image']; ?>" class="img-responsive img-center taxi-img" alt="" title="">
					</div>
					<div class="col-xs-12 col-md-4">
						<div class="sep15px hidden-lg">&nbsp;</div>
						<div class="relative h360px">
							<div class="wrappedCenter">
								<div class="roundedBlockLight">&nbsp;</div>
								<div class="roundedBlockDark">
									<strong><?php echo $factsheet['quote_percentage']; ?>%</strong>
									<div class="sep15px">&nbsp;</div>
									<span><?php echo $factsheet['quote']; ?></span>
								</div>
							</div>
						</div>
						<div class="sep15px hidden-lg">&nbsp;</div>
					</div>
					<div class="col-xs-12 col-md-4">
						<img src="<?php echo $factsheet['driver_image']; ?>" class="img-responsive img-center driver-img" alt="" title="">
					</div>
				</div><!--flex-wrapper-fact-->
			</div><!--row-->
			<div class="sep20px">&nbsp;</div>
			<div class="row">
				<div class="col-xs-12">
					<img src="<?php echo $factsheet['map']; ?>" class="img-responsive img-center" alt="" title="">
					<div class="sep20px">&nbsp;</div>
					<a href="<?php echo get_template_directory_uri(); ?>/images/factsheet.pdf" class="btnRoundBlue width200max width100per" download>Download Factsheet</a>
					<div class="sep20px">&nbsp;</div>
					<div class="sep20px">&nbsp;</div>
				</div>
			</div>
	     </div><!--container-->
	     <div class="footerinsidebg">&nbsp;</div>
	</section>
	<? endwhile; ?>
    <? else : ?>
    <? echo wpautop("SORRY! No page found.");?>
    
    <?  endif;?>
</div><!-- insidepage -->
<?php get_footer(); ?>
<script>
$(document).ready(function($) {
  function animateElements() {
    $('.progressbar').each(function() {
      var elementPos = $(this).offset().top;
      var topOfWindow = $(window).scrollTop();
      var percent = $(this).find('.circle').attr('data-percent');
      var percentage = parseInt(percent, 10) / parseInt(100, 10);
      var animate = $(this).data('animate');
      if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
        $(this).data('animate', true);
        $(this).find('.circle').circleProgress({
          startAngle: -Math.PI / 2,
          value: percent / 100,
          size: 1000,
          thickness: 40,
          fill: {
            //color: '#4988be'
            gradient: ['#5EC3D1', '#4275B8'],
    		gradientAngle: Math.PI*1
          }
        }).on('circle-animation-progress', function(event, progress, stepValue) {
          //$(this).find('div').text((stepValue * 100).toFixed(0) + "%");
        }).stop();
      }
    });
  }

  // Show animated elements
  animateElements();
  $(window).scroll(animateElements);
});
</script>
</body>
</html>