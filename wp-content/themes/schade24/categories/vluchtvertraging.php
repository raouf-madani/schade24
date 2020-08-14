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
		                <?php include('_category-buttons.php'); ?>
		                <div class="sep40px">&nbsp;</div>
		            </div><!--col-xs-12-->
		        </div><!--row-->
		    </div><!--container-->
		</section>
<div class="container">
	<div class="row">
	     <?php
           
                   $the_query = new WP_Query( array( 'post_type' => 'page')); ?>

                    <? if (have_posts() ) : ?>
                       
                       <? while (have_posts() ) :
                           the_post();
                       ?>
                        <!--THE CONTENT-->
		<div class="col-xs-12 col-sm-8">
			<div class="hidden-sm hidden-md hidden-lg">
				<a href="<?php site_url(); ?>/schade/schade-melden" class="btnRoundLightBlue width310max width100per blueshadow">Schade melden</a>
				<div class="sep20px">&nbsp;</div>
			</div>
			 <?php $category = get_field('category'); ?>
			<div class="sep20px">&nbsp;</div>
			<h1 class="text-lightblue gothamrounded font28px margin0"><? echo the_title();?></h1>
			<div class="sep20px">&nbsp;</div>
			<div class="sep20px">&nbsp;</div>
		<?php echo $category['first_column']; ?>
		</div>
		<div class="col-xs-12 col-sm-4">
			<div class="hidden-xs">
				<div class="sep40px">&nbsp;</div>
				<div class="sep10px">&nbsp;</div>
				<a href="<?php site_url(); ?>/schade/schade-melden" class="btnRoundLightBlue width310max width100per blueshadow" target="_blank">Schade Melden</a>
			</div>
			<div class="sep20px">&nbsp;</div>
			<?php $image= $category['second_column'];
				         if(!empty($image)):
				    ?>
			<img src="<?php echo $image; ?>"" class="img-responsive" alt="" title="">
			<?php endif; ?>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="sep20px">&nbsp;</div>
			<div class="sep20px">&nbsp;</div>	
		<?php echo $category['third_column']; ?>
		</div>
	</div>
		<? endwhile; ?>
            <? else : ?>
            <? echo wpautop("SORRY! No page found.");?>
          
              <?  endif;?>
</div>
<div class="sep60px hidden-xs">&nbsp;</div>
<div class="sep30px hidden-sm">&nbsp;</div>
<div class="footerinsidebg">&nbsp;</div>

<?php get_footer(); ?>