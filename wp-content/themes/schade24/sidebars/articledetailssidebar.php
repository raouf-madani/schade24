<div class="knowledgebasesidebar" id="accordians">
	<h3 class="heading">Categories</h3>
	<div class="sep20px">&nbsp;</div>
	<ul class="nodot flex-column">
		<? 

		$rows = $this->Pagemodel->getClaimCategoriesbyID($FKCATID);

		//echo 'id is '. $FKCATID;

		if($rows->num_rows()>0){

			foreach($rows->result() as $row ): ?>
				
				<li>
					<strong class="font16px black gothamroundedmedium"><?= $row->catDe ?></strong>
					<div class="sep10px">&nbsp;</div>
					<div id="<?= $row->ID ?>" class="ans open">
						<ul class="bullets font15px black gothamroundedlight">
							<?
							
							$insiderows = $this->Pagemodel->getknowledgebaseAllByID($row->ID);

							if($insiderows->num_rows() > 0){
								foreach($insiderows->result() as $insiderow):
							?>
							<li><a href="<?= site_url(); ?>page/article/<?=$insiderow->ID?>/<?= friendlyURL($rows->PageName);?>"><?= $insiderow->PageName?></a></li>
							<?
								endforeach;
							}
							?>
						</ul>
					</div>
				</li>

		<?
			endforeach;
		}
		?>
	</ul>
    <div class="sep20px">&nbsp;</div>
    <a href="<?= site_url(); ?>page/knowledge_base_all" class="btnRoundLightBlue width100per blueshadow drkblue">Bekijk alles</a>
</div>