<div class="faqblock">
<h2><?php block_field('title'); ?></h2>
	<p class="content15 black"><?php block_field('title-description'); ?></p>	
    <div class="text-left">					
        <a href="<?php block_field('button-link'); ?>" class="btn btn-md btn-primary career"><?php block_field('button-text'); ?></a>
        <div class="sep20px">&nbsp;</div>
        <div id="<?php block_field('button-link'); ?>" class="" style="display:none">
        	<strong class="content18 black"><?php block_field('button-text'); ?></strong>
            <div class="sep15px">&nbsp;</div>
            <?php block_field('body'); ?>
        </div>
    </div>
</div>