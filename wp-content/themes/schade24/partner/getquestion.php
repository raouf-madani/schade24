<style>
	.error {
		border-bottom:2px solid #ff0d05 !important;
	}
</style>
<?php

    $ID = $this->uri->segment(3);
    if($ID != ''){

        $this->Pagemodel->getCaseDetails($ID);
    }


	//PERSONAL INJURY
	if($_POST['quesitonid']==1) {
?>
	<div class="col-md-12"><h5><strong>Gegevens tegenpartij</strong></h5></div>
    <div class="sep10px">&nbsp;</div>
    
    <div class="col-md-6">
    	<input type="radio" name="detailsothervehicle" value="1" onchange="showdetailothervehicle(1)" <? if($this->Pagemodel->FKCATID == 1 && $this->Pagemodel->detailsothervehicle == 1){ ?> checked <? } ?>/>&nbsp;&nbsp;Verkeersongeval
    </div>
    <div class="col-md-6">
    	<input type="radio" name="detailsothervehicle" value="2" onchange="showdetailothervehicle(0)" <? if($this->Pagemodel->FKCATID == 1 && $this->Pagemodel->detailsothervehicle == 2){ ?> checked <? } ?> /> Geen verkeersongeval
    </div>
    <div class="" id="detailsothervehicle" <? if($this->Pagemodel->FKCATID == 1 && $this->Pagemodel->detailsothervehicle == 1){ }else{ ?>style="display:none" <? } ?>>
        <div class="sep20px">&nbsp;</div>
    	<div class="col-md-6">
	    	<input type="radio" value="1" name="iknownumber" onchange="showothervehiclelicensenumber(1)" <? if($this->Pagemodel->FKCATID == 1 && $this->Pagemodel->iknownumber == 1){ ?> checked <? } ?> /> Kenteken tegenpartij bekend&nbsp;&nbsp;
        </div>
        <div class="col-md-6">
    	    <input type="radio" value="0" name="iknownumber" onchange="showothervehiclelicensenumber(0)" <? if($this->Pagemodel->FKCATID == 1 && $this->Pagemodel->iknownumber == 0){ ?> checked <? } ?> /> Kenteken tegenpartij onbekend&nbsp;&nbsp;
        </div>
    </div>
    <div class="" id="othervehiclelicensenumber" <? if($this->Pagemodel->FKCATID == 1 && $this->Pagemodel->iknownumber == 1){} else{ ?>style="display:none" <? } ?>>
      <div class="sep20px">&nbsp;</div>
  	  <div class="col-md-12"><input type="text" name="txtOtherVehicleLicensePlate" value="<?= $this->Pagemodel->txtOtherVehicleLicensePlate ?>" placeholder="Kenteken tegenpartij" class="form-control" /></div>
    </div>
    <div class="col-md-12">
        <div class="sep20px">&nbsp;</div>
        <textarea name="caseDesc" class="form-control" placeholder="Geef een korte omschrijving van de geleden schade"><? if($this->Pagemodel->FKCATID == 1): echo $this->Pagemodel->caseDesc; endif; ?></textarea>
    </div>
<? } ?>
<?php
	//MEDICAL CLAIM
	if($_POST['quesitonid']==2) {
?>
	<div class="col-md-12"><h5><strong>Gegevens van de medische instantie</strong></h5></div>
    <div class="sep10px">&nbsp;</div>
    <div class="col-md-12"><input type="text" name="txtMedicalCenterName" value="<?= $this->Pagemodel->txtMedicalCenterName; ?>" placeholder="Naam van de medische instantie" class="form-control" /></div>
    <div class="sep20px">&nbsp;</div>
    <div class="col-md-12">
        <textarea name="caseDesc" class="form-control" placeholder="Geef een korte omschrijving van de geleden schade"><? if($this->Pagemodel->FKCATID == 2): echo $this->Pagemodel->caseDesc; endif; ?></textarea>
    </div>
<? } ?>
<?php
	//STORM DAMAGE
	if($_POST['quesitonid']==3) {
?>
	<div class="col-md-12"><h5><strong>Gegevens van de verzekeringsmaatschappij</strong></h5></div>
    <div class="sep10px">&nbsp;</div>
    <div class="col-md-12">
        <input type="text" name="txtNameofInsurance" value="<?= $this->Pagemodel->txtNameofInsurance ?>" placeholder="Naam verzekeringsmaatschappij" class="form-control" />
    </div>
    <div class="sep20px">&nbsp;</div>
    <div class="col-md-12">
        <textarea name="caseDesc" class="form-control" placeholder="Geef een korte omschrijving van de geleden schade"><? if($this->Pagemodel->FKCATID == 3): echo $this->Pagemodel->caseDesc; endif; ?></textarea>
    </div>
<? } ?>
<?php
	//VEHICLE DAMAGE
	if($_POST['quesitonid']==4) {
?>
	<div class="col-md-12"><h5><strong>Gegevens eigen voertuig</strong></h5></div>
    <div class="sep10px">&nbsp;</div>
    <div class="col-md-12"><input type="text" name="txtLicensePlate" value="<?= $this->Pagemodel->txtLicensePlate ?>" placeholder="Kenteken tegenpartij" class="form-control" /></div>
    <div class="sep20px">&nbsp;</div>
    <div class="col-md-12"><h5><strong>Details ander voertuig</strong></h5></div>
    <div class="sep10px">&nbsp;</div>
    <div class="col-md-6">
        <input type="radio" name="detailsothervehicle" value="1" onchange="showdetailothervehicle(1)" <? if($this->Pagemodel->FKCATID == 4 && $this->Pagemodel->detailsothervehicle == 1){ ?> checked <? } ?> />&nbsp;&nbsp;Yes
    </div>
    <div class="col-md-6">
        <input type="radio" name="detailsothervehicle" value="2" onchange="showdetailothervehicle(0)" <? if($this->Pagemodel->FKCATID == 4 && $this->Pagemodel->detailsothervehicle == 2){ ?> checked <? } ?> />&nbsp;&nbsp;No
    </div>
    <div class="" id="detailsothervehicle" <? if($this->Pagemodel->FKCATID == 4 && $this->Pagemodel->detailsothervehicle == 1){}else{ ?>style="display:none"<? } ?>>
        <div class="sep20px">&nbsp;</div>
    	<div class="col-md-6">
        	<input type="radio" value="1" name="iknownumber" onchange="showothervehiclelicensenumber(1)" <? if($this->Pagemodel->FKCATID == 4 && $this->Pagemodel->iknownumber == 1){ ?> checked <? } ?> /> Kenteken tegenpartij bekend&nbsp;&nbsp;
        </div>
        <div class="col-md-6">
	        <input type="radio" value="0" name="iknownumber" onchange="showothervehiclelicensenumber(0)" <? if($this->Pagemodel->FKCATID == 4 && $this->Pagemodel->iknownumber == 0){ ?> checked <? } ?> /> Kenteken tegenpartij onbekend&nbsp;&nbsp;
        </div>
    </div>
    <div class="" id="othervehiclelicensenumber" <? if($this->Pagemodel->FKCATID == 4 && $this->Pagemodel->iknownumber == 1){}else{ ?>style="display:none"<? } ?>>
        <div class="sep20px">&nbsp;</div>
  	  <div class="col-md-6"><input type="text" name="txtOtherVehicleLicensePlate" value="<?= $this->Pagemodel->txtOtherVehicleLicensePlate ?>" placeholder="Kenteken tegenpartij" class="form-control" /></div>
    </div>
    <div class="col-md-6">
        <div class="sep20px">&nbsp;</div>
        <textarea name="caseDesc" class="form-control" placeholder="Geef een korte omschrijving van de geleden schade"><? if($this->Pagemodel->FKCATID == 4): echo $this->Pagemodel->caseDesc; endif; ?></textarea>
    </div>
<? } ?>
<?php
	//INDUSTRIAL ACCIDENT
	if($_POST['quesitonid']==5) {
?>
	<div class="col-md-12"><h5><strong>Gegevens van de werkgever</strong></h5></div>
    <div class="sep10px">&nbsp;</div>
    <div class="col-md-12">
        <input type="text" name="txtEmployerName" value="<?= $this->Pagemodel->txtEmployerName ?>" placeholder="Bedrijfsnaam werkgever" class="form-control" />
    </div>
<? } ?>
<?php
	//Flight Delay
	if($_POST['quesitonid']==6) {
?>
	<div class="col-md-12"><h5><strong>Gegevens tegenpartij</strong> </h5></div>
    <div class="sep10px">&nbsp;</div>
    
    <div class="col-md-6">
    	<input type="radio" name="detailsothervehicle" value="1" onchange="showdetailothervehicle(1)" />&nbsp;&nbsp;Verkeersongeval
    </div>
    <div class="col-md-6">
    	<input type="radio" name="detailsothervehicle" value="2" onchange="showdetailothervehicle(0)" /> Geen verkeersongeval
    </div>
    <div class="" id="detailsothervehicle" style="display:none">
        <div class="sep20px">&nbsp;</div>
    	<div class="col-md-6">
	    	<input type="radio" value="1" name="iknownumber" onchange="showothervehiclelicensenumber(1)" /> Kenteken tegenpartij bekend&nbsp;&nbsp;
        </div>
        <div class="col-md-6">
    	    <input type="radio" value="0" name="iknownumber" onchange="showothervehiclelicensenumber(0)" /> Kenteken tegenpartij onbekend&nbsp;&nbsp;
        </div>
    </div>
    <div class="" id="othervehiclelicensenumber" style="display:none">
        <div class="sep20px">&nbsp;</div>
  	  <div class="col-md-12"><input type="text" name="txtOtherVehicleLicensePlate" value="" placeholder="Kenteken tegenpartij" class="form-control" /></div>
    </div>
    <div class="sep20px">&nbsp;</div>
    <div class="col-md-12">
        <textarea name="caseDesc" class="form-control" placeholder="Geef een korte omschrijving van de geleden schade"></textarea>
    </div>
<? } ?>
<div class="sep20px">&nbsp;</div>
<script src="<?=themes_base_url()._DEFAULTTHEMEPATH_?>js/jquery.form.js"></script>
<script type="text/javascript">
    //alert('test');
	function showdetailothervehicle(vl) {
        if(vl==1) {
            $("#detailsothervehicle").slideDown();
        }
        if(vl==0) {
            $("#detailsothervehicle").slideUp();
        }
	}
	
	function showothervehiclelicensenumber(vl) {
		if(vl==1) {
			$("#othervehiclelicensenumber").slideDown();
		}
		if(vl==0) {
			$("#othervehiclelicensenumber").slideUp();
		}
	}
</script>