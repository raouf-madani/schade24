<?php 
/*
* Template Name: Schade Melden
*/
get_header("inside");

?>
  <style>
    /*div.datepicker{
        top: 500px!important;
    }*/
    #upload_block {
        border: 1px dashed #000;
        width: 65%;
        height: 200px;
        position: relative;
        float: left;
    }
    #response{
        width: 35%;
        float: left;
        padding: 0 0 0 15px;
    }
    #response h4{
        margin: 0;
        text-align: left;
        font-size: 15px;
    }
    div#response ul {
        margin: 0;
        padding: 0 0 0 20px;
        font-size: 14px;
        overflow-x: hidden;
        text-align:left;
    }
    #img_select {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        width: 100%;
        margin: auto!important;
        height: 100%;
        font-size: 0!important;
        text-indent: -1000px;
        cursor: pointer;
        border: 0!important;
        padding: 0!important;
    }
    #img_select::before {
        content: "Drop File Here";
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        font-size: 32px;
        color: #999;
        text-indent: 0;
        text-align: center;
        line-height: 165px;
        margin: auto;
    }
    @media screen and (max-width: 767px){
        #upload_block{
            width: 100%;
        }
        #response{
            margin-top: 20px;
            width: 100%
        }
    }
</style>

<section class="m-top-66">
    <div class="container">
    	<div class="sep60px">&nbsp;</div>
        <div class="sep60px hidden-xs">&nbsp;</div>
        <div class="sep60px hidden-xs">&nbsp;</div>
    	<div class="formblock">
            <form id="msform" method="post" name="myform" action="javascript:void(0)" enctype="multipart/form-data">
              <!-- progressbar -->
              <ul id="progressbar">
                <? if(empty($_SESSION['REGID']) && !isset($_SESSION['REGID'])): ?>
                    <li class="active">Persoonlijke<br>gegevens</li>
                    <li>Contactgegevens</li>
                    <li>Schadedetails</li>
                    <li>Uploaden</li>
                    <li>Afronden</li>
                <? else: ?>
                    <li style="width:33.33%" class="active">Schadedetails</li>
                    <li style="width:33.33%">Uploaden</li>
                    <li style="width:33.33%">Afronden</li>
                <? endif; ?>
              </ul>
              <!-- fieldsets -->

            <? if(empty($_SESSION['REGID']) && !isset($_SESSION['REGID'])): ?>
                  <fieldset>
                    <h2 class="fs-title">schadeformulier</h2>
                    <div class="col-md-2 p-rl-5">
                    	<select name="txtGender"  class="form-control selectpicker">
                   			<option value="Mister">Dhr.</option>
                            <option value="Madam">Mw.</option>
                            <option value="Anders">Anders</option>
                   		</select>
                    </div>
                    <div class="sep10px hidden-md hidden-lg">&nbsp;</div>
                    <div class="col-md-3 p-rl-5">
                    	 <input type="text" name="txtName" id="txtName" class="form-control" placeholder="Voornaam" value="" >
                    </div>
                    <div class="sep10px hidden-md hidden-lg">&nbsp;</div>
                    <div class="col-md-3 p-rl-5">
                         <input type="text" name="txtMName" id="txtMName" class="form-control" placeholder="Tussenvoegsel" value="" >
                    </div>
                    <div class="sep10px hidden-md hidden-lg">&nbsp;</div>
                    <div class="col-md-4 p-rl-5">
                    	<input type="text" name="txtLName" id="txtLName" class="form-control" placeholder="Achternaam" value="">
                    </div>
                    <div class="sep10px">&nbsp;</div>
                    <div class="col-md-3 p-rl-5">
                    	<input type="text" name="txtPO" id="txtPO" class="form-control" placeholder="Postcode" value="">
                    </div>
                    <div class="sep10px hidden-md hidden-lg">&nbsp;</div>
                    <div class="col-md-6 p-rl-5">
                        <input name="txtAddress" id="txtAddress" class="form-control" style="height: 50px" placeholder="Huisnummer"></input>
                    </div>
                    <div class="sep10px hidden-md hidden-lg">&nbsp;</div>
                    <div class="col-md-3 p-rl-5">
                        <input name="txtAddressExtra" id="txtAddressExtra" class="form-control" style="height: 50px" placeholder="Toevoeging"></input>
                    </div>
                    <div class="sep10px">&nbsp;</div>
                    <div class="col-md-6 p-rl-5">
                    	<input type="text" name="txtStreet" class="form-control" placeholder="Straat" value="">
                    </div>
                    <div class="sep10px hidden-md hidden-lg">&nbsp;</div>
                    <div class="col-md-6 p-rl-5">
                    	<input type="text" name="txtCity" class="form-control" placeholder="Plaats" value="">
                    </div>
                    <!-- <div class="sep10px hidden-md hidden-lg">&nbsp;</div>
                    <div class="col-md-4 p-rl-5">
                        <input type="text" name="txtState" id="txtState" class="form-control" placeholder="Provincie" value="">
                    </div> -->
                    <div class="sep20px">&nbsp;</div>
                    <input type="button" data-page="1" name="next" class="next action-button" value="Volgende" />
                  </fieldset>
              
                  <fieldset>
                    <h2 class="fs-title">Account gegevens invullen</h2>
                    <div class="col-md-6 p-rl-5">
                    	<input type="text" name="txtEmail" id="txtEmail" class="form-control" placeholder="Emailadres">
                    </div>
                    <div class="sep10px hidden-md hidden-lg">&nbsp;</div>
                    <div class="col-md-6 p-rl-5">
                    	<input type="text" name="txtCEmail" class="form-control" placeholder="Bevestig emailadres">
                    </div>
                    <div class="sep10px">&nbsp;</div>
                    <div class="col-md-6 p-rl-5">
                    	<input type="password" name="txtPass" id="txtPass" class="form-control" placeholder="Wachtwoord">
                    </div>
                    <div class="sep10px hidden-md hidden-lg">&nbsp;</div>
                    <div class="col-md-6 p-rl-5">
                    	<input type="password" name="txtCPass" class="form-control" placeholder="Herhaal wachtwoord">
                    </div>
                    <div class="sep10px">&nbsp;</div>
                    <div class="col-md-12 p-rl-5">
                    	<input type="text" name="txtPhone" class="form-control" placeholder="Telefoonnummer">
                    </div>
                    <div class="sep20px">&nbsp;</div>
                    <input type="button" name="previous" class="btn-halfed-left previous action-button" value="Vorige" />
                    <div class="sep20px hidden-md hidden-lg">&nbsp;</div>
                    <input type="button" name="submit" class="btn-halfed-right next action-button" value="Volgende" />
                  </fieldset>
            <? else: ?>
                    <input type="hidden" name="hdnUserID" value="<?= $_SESSION['REGID']; ?>">
            <? endif; ?>
              <fieldset>
                <h2 class="fs-title">Vul de schadegegevens in</h2>
                <div class="col-md-6 p-rl-5">
                    <div class="calendarIcon">
                	   <input type="text" name="dateofdamage" class="form-control" value="" id="datetimepicker1" data-date-format="yyyy/mm/dd" placeholder="Schadedatum">
                       <i class="fa fa-calendar"></i>
                    </div>
                </div>
               <div class="sep10px hidden-md hidden-lg">&nbsp;</div>
                <div class="col-md-6 p-rl-5">
                    <? $redirectFromID = $this->uri->segment(3); ?>

                	<select name="FKCATID" class="form-control selectpicker" onChange="changequestion(this.value)">
                        <option value="">Selecteer categorie</option>
                        <?
                            $rs = $this->Pagemodel->getClaimCategories();
                            if($rs->num_rows()>0) {
                                foreach($rs->result() as $rows) {
                        ?>
                            <option value="<?=$rows->ID?>" <? if($rows->ID == $redirectFromID): echo 'selected="selected"'; endif; ?>><?=$rows->catDe?></option>
                        <? 
                                }
                            }
                        ?>
                    </select>
                </div>
                <div class="sep10px">&nbsp;</div>
                <div class="" id="questions"></div>
                
                <? if(empty($_SESSION['REGID']) && !isset($_SESSION['REGID'])): ?>
                    <div class="sep20px">&nbsp;</div>
                    <input type="button" name="previous" class="btn-halfed-left previous action-button" value="Vorige" />
                    <div class="sep10px hidden-md hidden-lg">&nbsp;</div>
                    <input type="button" name="submit" class="btn-halfed-right next action-button" value="Volgende" />
                <? else: ?>
                    <div class="sep20px">&nbsp;</div>
                    <input type="button" name="submit" class="next action-button" value="Volgende" />
            <? endif; ?>
              </fieldset>
              <fieldset>
                <h2 class="fs-title">Bestand uploaden</h2>
                <!-- <div class="sep10px">&nbsp;</div> -->
                <div class="col-md-12 p-rl-5">
                    <label for="">Geaccepteerde bestanden ("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx")</label>
                    <div class="sep15px">&nbsp;</div>
                    <div id="upload_block">
                        <input type="file" name="txtFile[]" id="img_select" multiple>
                    </div>
                    <div id="response">
                        <h4>Geuploade bestanden </h4>
                        <div class="sep10px">&nbsp;</div>
                        <ul></ul>
                    </div>
                </div>
                <div class="col-md-3 p-rl-5 text-right nopadding hide">
                <input type="button" name="myct" class="add_more btn btn-primary btn-lg" style="margin-left:5px; padding-top:13.5px; padding-bottom:13.5px; border-radius:0px !important; color: #fff;" value="Bestanden toevoegen">
                </div>
                <div class="hereadd"></div>
                <div class="sep20px">&nbsp;</div>
                <input type="button" name="previous" class="btn-halfed-left previous action-button" value="Vorige" />
                <div class="sep10px hidden-md hidden-lg">&nbsp;</div>
                <input type="submit" name="submit" class="btn-halfed-right submit action-button" value="Afronden" />
              </fieldset>
              <fieldset>
                <h2 class="fs-title">Schademelding afronden</h2>
               
                <div class="" id="finishstep"></div>
                
              </fieldset>
            </form>
        </div>
    </div>
    <!-- <div class="sep60px">&nbsp;</div> -->
    <div class="footerinsidebg">&nbsp;</div>
  </section>
</div>

<?php 
get_footer();
?>
<script type="text/javascript">
	$(function() {
		$("#msform").validate({
			rules: {
			    
				'txtName': {required:true},
                /*'txtMName': {required:true},*/
				'txtLName': {required:true},
				'txtPO': {required:true},
				'txtAddress': {required:true},
				'txtStreet': {required:true},
				'txtCity': {required:true},
                // 'txtState': {required:true},
				'txtEmail': {required:true,email:true},
				'txtCEmail': {required:true, equalTo : "#txtEmail" },
				'txtPass': {required:true},
				'txtCPass': {required:true, equalTo : "#txtPass" },
				'txtPhone': {required:true},
				'dateofdamage': {required:true},
				'FKCATID': {required:true},
				'txtLicensePlate': {required:true},
				'txtOtherVehicleLicensePlate': {required:true},
				'txtMedicalCenterName': {required:true},
				'txtEmployerName': {required:true},
                'caseDesc': {required:true}
			},
			submitHandler: function(form) {
					$("#finishstep").empty().html('Laden...');
					//return false;
					$.ajax({
						url : "<?=site_url()?>/schade/submitclaimform",
						method : "POST",
						data: new FormData(form),
						contentType:false,
						processData:false,
						cache: false,
						success: function(data){
							$("#finishstep").html('Uw schademelding is verzonden. Er is een dossier aangemaakt met nummer '+ data +'. U wordt over 5 seconden doorgezonden naar uw dossier.');
                            setTimeout(function(){
                                window.location = '<?=site_url()?>/page/viewcasedetails/'+data;
                            }, 2000);
							//return false;
						}
					});
					return false;
			}
		});
		$('#datetimepicker1').datepicker({
			 format: 'dd-mm-yyyy',
			 language:'de',
             container:'.calendarIcon',
             orientation: 'left bottom',
             autoclose: true,
             endDate: new Date()
		});
		
		$("#myPartnerRegister").validate({
			rules: {
				FKCATID: {required:true},
				caseDesc: {required:true},
				txtDateofDamage: {required:true}
			}
		});
		
		
		$('.add_more').click(function(e){
			e.preventDefault();
			$('.hereadd').after("<div class='sep5px'>&nbsp;</div><div class='col-md-12 nopadding'><input name='txtFile[]' type='file'  class='form-control' style='margin-top:10px' /></div>");
		});
	});
	
	function checkforce() {
		$('#txtchec').prop('checked', true);
	}
	
	/*function changequestion(vl) {
		
	}*/
	function showmorequestion(vl) {
		
	}
	
	function validateValuesStep(step) {
		if(step==1) {
			if($("#txtLName").val()=='') {
				$("#txtName").addClass('error');
			}		}

	}
	function changequestion(vl) {
        $("#questions").html('Laden...<div class="sep10px">&nbsp;</div>')
		$.ajax({
			 type: "POST",
			 url: "<?=base_url()?>index.php/schade/getquestion",
			 data: "quesitonid="+vl,
			 success: function(data){
				$("#questions").html(data);
			 }
		});
	}

	$('#txtuploadothers_select').change(function(){
		$('#uploadothersval').submit();
		var loading = $('<img>',{id:'loaderImg',src:'<?php echo get_template_directory_uri(); ?>/images/loadingdoc.gif', style: 'width:64px; margin:0 auto; display:block;'});
		$("#responsetxtuploadothers").html(loading);
	});
	$('#uploadothersval').on('submit', function(e){
		e.preventDefault();
		$.ajax({
			url : "<?=site_url()?>/page/viewclaimdetailsupload/<?=$ID?>",
			method : "POST",
			data: new FormData(this),
			contentType:false,
			processData:false,
			cache: false,
			success: function(data){
				$('#txtuploadothers_select').val('');
				
			}
		});
	});
	
</script>
<script>
$(document).ready(function(){
    $('#img_select').change(function(){
        var imageCollection = [];
        var files = document.getElementById("img_select").files;
        console.log('test');
        var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'doc', 'docx', 'pdf'];
        if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
            alert("Only formats are allowed : "+fileExtension.join(', '));
            $('#response ul').html('');
            $('#img_select').val('');
        }else{

            $('#response ul').html('Laden...');

            setTimeout(function(){
                $('#response ul').html('');
                for (var i = 0; i < imageCollection.length; i++)
                {
                  $('#response ul').append('<li>'+ imageCollection[i].name +'</li>');
                } 
            }, 300);

            $.each(files, function(i, file){
                imageCollection.push(file);
            });
        }
    });

    var redirectFromID = '<?= $redirectFromID; ?>';
    if(redirectFromID != ''){
        changequestion(redirectFromID)
    }
});
</script>


<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '635560553686711'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=635560553686711&ev=PageView
&noscript=1"/>
</noscript>

</body>
</html>
