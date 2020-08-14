<?php 
/*
* Template Name: Awards
*/
get_header("inside");
?>
<section class="">
     <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) :1;
        $the_query = new WP_Query( array( 'post_type' => 'post','posts_per_page' => 6 ,'paged' => $paged) ); ?>

        <? if (have_posts() ) : ?>
           
           <? while (have_posts() ) :
               the_post();
      ?>
	<div class="silder">
		<div class="hidden-md hidden-lg" style="clear: both;height: 53px">&nbsp;</div>
		<img src="<?echo get_the_post_thumbnail_url();?>" class="" alt="" title="">
	</div>

	<div class="page-bg-c">

		<div class="text-c">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php the_field('body'); ?>

					</div>
				</div>
			</div>
		</div>

		<div class="schades-c">
			
			<div class="container-cc">
				<!-- <div class="row">
					<div class="col-md-12">
						<img class="img-responsive life-line-c" src="<?php bloginfo("template_directory"); ?>/images/life-line-c.png">
					</div>
				</div> -->

				<!-- <div class="sep30px">&nbsp;</div> -->
                <?php the_content(); ?>

				

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>Achmea</p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>8.7</p>
						</div>
					</div>
				</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>ASR</p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>8.4</p>
						</div>
					</div>
				</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>NH1816</p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>8.2</p>
						</div>
					</div>
				</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>De Goudse</p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>8.1</p>
						</div>
					</div>
				</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>Bovemij</p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>7.9</p>
						</div>
					</div>
				</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>Klaverblad</p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>7.9</p>
						</div>
					</div>
				</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>Unive</p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>7.7</p>
						</div>
					</div>
				</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>TVM </p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>7.6</p>
						</div>
					</div>
				</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>Leaseplan</p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>7.6</p>
						</div>
					</div>
				</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>Amlin</p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>7.4</p>
						</div>
					</div>
				</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>Reaal</p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>7.3</p>
						</div>
					</div>
				</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>De Vereende/Waarborgfonds</p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>7.2</p>
						</div>
					</div>
				</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>VGA</p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>7.1</p>
						</div>
					</div>
				</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>AIG</p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>7</p>
						</div>
					</div>
				</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>Ansvar Idea</p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>6.9</p>
						</div>
					</div>
				</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>Aegon</p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>6.9</p>
						</div>
					</div>
				</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>ZLM</p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>6.6</p>
						</div>
					</div>
				</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>HDI </p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>6.3</p>
						</div>
					</div>
				</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>Medirisk</p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>6.2</p>
						</div>
					</div>
				</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>VvAA</p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>6.1</p>
						</div>
					</div>
				</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>Allianz/Allsecur</p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>5.6</p>
						</div>
					</div>
				</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>Hema verzekeringen</p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>5.5</p>
						</div>
					</div>
				</div>

				<!-- Header wave again -->

				<!-- <div class="row">
					<div class="col-md-12">
						<img class="img-responsive life-line-c2" src="<?php bloginfo("template_directory"); ?>/images/life-line-c.png">
					</div>
				</div> -->

				<div class="sep30px">&nbsp;</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p class="black"><strong>Schaderegelaar in opdracht van verzekeraar</strong></p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p class="black"><strong>Totaal</strong></p>
						</div>
					</div>
				</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>DEKRA</p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>8.1</p>
						</div>
					</div>
				</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>Cordaet</p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>7.9</p>
						</div>
					</div>
				</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>Andriessen</p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>7.3</p>
						</div>
					</div>
				</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>Raasveld</p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>7.2</p>
						</div>
					</div>
				</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>OAK advocaten</p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>7.1</p>
						</div>
					</div>
				</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>GRM</p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>7</p>
						</div>
					</div>
				</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>Sedgwick</p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>6.9</p>
						</div>
					</div>
				</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>R.P. van Dijk</p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>6.6</p>
						</div>
					</div>
				</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>AMS</p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>6.5</p>
						</div>
					</div>
				</div>

				<div class="row margin-cc tablet-lg">
					<div class="col-sm-10 col-xs-9 padding-right">
						<div class="big-c-captiion">
							<p>van Ameyde</p>
						</div>
					</div>

					<div class="col-sm-2 col-xs-3 padding-left">
						<div class="big-c-captiion">
							<p>6.2</p>
						</div>
					</div>
				</div>

			</div>

		</div>
		 <? endwhile; ?>
        <? else : ?>
        <? echo wpautop("SORRY no page is found");?>
              
                  <?  endif;?>
            </div><!--row-->

	</div>
    <div class="footerinsidebg">&nbsp;</div>
</section>
<?php get_footer(); ?>