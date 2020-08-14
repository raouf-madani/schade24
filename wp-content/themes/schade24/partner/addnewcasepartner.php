
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Schade24</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta name="format-detection" content="telephone=no" />
        <meta name="format-detection" content="telephone=no" />
        <!-- bootstrap 3.0.2 -->
        <link href="<?=base_url()?>src/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?=base_url()?>src/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?=base_url()?>src/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        
        <!-- fullCalendar -->
        <link href="<?=base_url()?>src/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?=base_url()?>src/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Theme style -->
        <link href="<?=base_url()?>src/css/AdminLTE.css" rel="stylesheet" type="text/css" />
		<!--Defuatl CSS-->
		<link rel="stylesheet" href="<?=themes_base_url()._DEFAULTTHEMEPATH_?>css/partner.css">
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
		<link href="<?=themes_base_url()._DEFAULTTHEMEPATH_?>css/bootstrap-datetimepicker.css" rel="stylesheet">
		<style>
			.alert {margin-left: 0;}
			form#myPartnerRegister {
			    max-width: 550px;
			    width: 100%;
			    float: left;
			}
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
                padding-left: 15px;
            }
            #response h4{
                margin: 0;
            }
            div#response ul {
                margin: 0;
                padding: 0 0 0 20px;
                font-size: 14px;
                overflow-x: hidden;
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
		</style>
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <? include('topheader.php'); ?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <? include('leftContent.php'); ?>
            

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        
                    </h1>
                    <!--<ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Case</li>
                    </ol>-->
                </section>

                <!-- Main content -->
                <section class="content">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
                            	<div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="box box-primary">
                                        <div class="box-header">
                                            <i class="fa fa-bar-chart-o"></i>
                                            <div class="pull-left">
												<h3 class="box-title">Dossier toevoegen </h3>
											</div>
											<!--<div class="pull-right">
												<a href="<?=site_url()?>page/manageclients" class="btn btn-md btn-primary btn-flat" style="color:#fff;">Terug naar dossier</a>
											</div>-->
											<div class="sep25px">&nbsp;</div>
											<? if($success) { ?>
												<div class="alert alert-success"><?=$success?></div>
											<? } ?>
											<? if($warning) { ?>
											<div class="alert alert-warning"><?=$warning?></div>
											<? } ?>
											<form name="myPartnerRegister" id="myPartnerRegister" method="post" action="<?=site_url()?>page/addnewcasepartner/<?=$FKPRID?>" enctype="multipart/form-data">
												<input type="hidden" name="hdnAction" value="addnewcase">	
												<input type="hidden" name="FKPRID" value="<?=$FKPRID?>">
												<div class="formcls">
                                                	<h5><strong>Klantgegevens</strong></h5>
                                                    
                                                    <input type="text" name="CLID" id="CLID" value="" style="visibility: hidden!important">
                                                	<input type="hidden" name="hdnFilter" value="filter">
                                                	<input type="text" name="productIdTe" id="key" class="form-control" placeholder="Zoek een bestaande klant" value="" />
                                                    <div class="sep5px">&nbsp;</div>
                                                	<a href="javascript:void(0)" class="btn btn-sm btn-success" id="addClient" onClick="checkaddclient('New')" style="color:#fff">Cliënt Toevoegen</a>
                                                
                                                    <!--<select name="CLID" class="form-control" onChange="checkaddclient(this.value)">
														<option value="">Selecteer Cliente</option>
														<?
															$rs = $this->Pagemodel->getPartnerClients($FKPRID);
															if($rs->num_rows()>0) {
																foreach($rs->result() as $rows) {
														?>
															<option value="<?=$rows->ID?>"><?=$rows->txtEmail?></option>
														<? 
																}
															}
														?>
                                                        	<option value="New">Add New</option>
													</select>-->
                                                    <div id="emailBlck" style="display:none">
                                                    	<div class="sep20px">&nbsp;</div>
														<input type="text" name="txtName" class="form-control" placeholder="Naam">
                                                        <div class="sep20px">&nbsp;</div>
														<input type="text" name="txtPhone" class="form-control" placeholder="Telefoonnummer">
                                                        <div class="sep20px">&nbsp;</div>
														<input type="text" name="txtEmail" class="form-control" placeholder="Email cliënt">
                                                    </div>
												</div>
                                                <div class="sep20px">&nbsp;</div>
                                                


                                                <div class="formcls">
                                                	<h5><strong>Dossiergegevens</strong></h5>
													<!--<select name="FKCATID" class="form-control">
														<option value="">Selecteer categorie</option>
														<?
															$rs = $this->Pagemodel->getClaimCategories();
															if($rs->num_rows()>0) {
																foreach($rs->result() as $rows) {
														?>
															<option value="<?=$rows->ID?>"><?=$rows->catDe?></option>
														<? 
																}
															}
														?>
													</select> -->
													<div class="row">
														<div class="col-md-6">
										                    <input type="text" name="dateofdamage" class="form-control" value="" id="datetimepicker1" data-date-format="yyyy/mm/dd" placeholder="Schadedatum">
										                </div>
									               		<div class="sep10px hidden-md hidden-lg">&nbsp;</div>
										                <div class="col-md-6">
										                    
										                	<select name="FKCATID" class="form-control selectpicker" onChange="changequestion(this.value)">
										                        <option value="">Selecteer categorie</option>
										                        <?
										                            $rs = $this->Pagemodel->getClaimCategories();
										                            if($rs->num_rows()>0) {
										                                foreach($rs->result() as $rows) {
										                        ?>
										                            <? if($rows->ID != 6): //escape flight delay category from this form?>
		                                                                <option value="<?=$rows->ID?>" <? if($this->Adminmodel->FKCATID==$rows->ID) { ?> selected <? } ?>><?=$rows->catDe?></option>
		                                                            <? endif; ?>
										                        <? 
										                                }
										                            }
										                        ?>
										                    </select>
										                </div>
														<div class="sep20px">&nbsp;</div>
										                <div class="" id="questions"></div>
										                <div class="col-md-12">
										                	<h5><strong>document uploaden</strong></h5>
										                </div>
										                <div class="sep10px">&nbsp;</div>
										                <div class="col-md-12">
										                    <label class="restrict" for="">Geaccepteerde bestanden ("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx")</label>
										                    <div class="sep10px">&nbsp;</div>
										                    <div id="upload_block">
										                        <input type="file" name="txtFile[]" id="img_select" multiple>
										                    </div>
										                    <div id="response">
		                                                        <h4>Geuploade bestanden</h4>
		                                                        <div class="sep10px">&nbsp;</div>
		                                                        <ul></ul>
		                                                    </div>
										                </div>
										                <div class="sep20px">&nbsp;</div>
	                                                    <div class="col-md-12">
		                                                    <?
		                                                        $rsfiles = $this->Pagemodel->getCaseFilesbyFKCaseID($this->Adminmodel->ID);
		                                                        if($rsfiles->num_rows()>0) {
		                                                            echo '<h5><strong>Files</strong></h5>';
		                                                            foreach($rsfiles->result() as $rowsfiles) {
		                                                    ?>
		                                                        <div id="linkid-<?=$rowsfiles->ID?>">
		                                                            <a href="<?=base_url()?>uploadfiles/client-<?=$this->Adminmodel->FKClientID?>/<?=$rowsfiles->txtFile?>" target="_blank"><?=$rowsfiles->txtFile?></a> 
		                                                            &nbsp;&nbsp;|&nbsp;&nbsp;
		                                                            <a href="javascript:void(0)" onClick="deleteFile('<?=$this->Adminmodel->ID?>','<?=$rowsfiles->ID?>','<?=$this->Adminmodel->FKClientID?>')">Delete</a><br>
		                                                        </div>
		                                                    <? 
		                                                            }
		                                                    } 
		                                                    ?>
		                                                </div>
										            </div><!--row-->
													<div class="sep20px">&nbsp;</div>
													<input type="submit" name="mypartnersubmit" value="<?=$this->Pagemodel->getSpecificTextLanguage('txtSubmitButtonTextEN','textDEValue')?>" class="btn btn-lg btn-primary">
													<!--Beschrijf wat er gebeurd is
													<div class="sep10px">&nbsp;</div>
													<textarea name="caseDesc" class="form-control"></textarea>
													<div class="sep20px">&nbsp;</div>
													Selecteer de datum van het ongeval
													<div class="sep10px">&nbsp;</div>
													<input type="text" name="dateofdamage" class="form-control" value="" id="datetimepicker1">
													<div class="sep20px">&nbsp;</div>
													<input type="file" name="txtFile[]" class="form-control pull-left" style="width:88%; height:40px;"> <input type="button" name="myct" class="pull-left add_more btn btn-primary btn-flat" style=" padding-bottom:7px !important; padding-top:7px !important; height:40px; " value="Bestanden toevoegen">
													<div class="sep20px">&nbsp;</div>
													<input type="submit" name="mypartnersubmit" value="<?=$this->Pagemodel->getSpecificTextLanguage('txtSubmitButtonTextEN','textDEValue')?>" class="btn btn-lg btn-primary">-->
												</div>
											</form>  
											
											
                                        </div>
                                        
                                    </div>
                                 </div>
                                 <!--<div class="col-lg-4 col-md-4 col-sm-12">
                                 	<div class="box box-primary">
                                    	    
                                    </div>
                                 </div>   -->
                            </div>
						</div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


		<link rel="stylesheet" href="<?=base_url()?>src/css/easy-autocomplete.min.css?id=<?=strtotime(date('H:i:s'))?>"> 
        
        <!-- Additional CSS Themes file - not required-->
        <link rel="stylesheet" href="<?=base_url()?>src/css/easy-autocomplete.themes.min.css"> 
        <!-- jQuery 2.0.2 -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        
        <!-- Bootstrap -->
        <script src="<?=base_url()?>src/js/bootstrap.min.js" type="text/javascript"></script>
        
         <script src="<?=base_url()?>src/js/jquery.easy-autocomplete.min.js"></script> 
        <!-- AdminLTE App -->
        <script src="<?=base_url()?>src/js/AdminLTE/app.js" type="text/javascript"></script>
        <script src="<?=themes_base_url()._DEFAULTTHEMEPATH_?>js/jquery.form.js"></script>
		<script src="<?=themes_base_url()._DEFAULTTHEMEPATH_?>js/bootstrap-datetimepicker.min.js"></script>
        <script src="<?=themes_base_url()._DEFAULTTHEMEPATH_?>js/de.js"></script>
        <script type="text/javascript">
			$(function() {
				
				//Autocomplete
				var optionsbxs = {
					url: function(phrase) {
						return "<?=site_url()?>page/ajax_partners/<?=$FKPRID?>";
					},
					list: {
						match: {
							enabled: true
						},
						onChooseEvent: function() {
							var value = $("#key").getSelectedItemData().ID;
							$('#CLID').val(value);
							if($('#CLID').val() != ''){
								$('#addClient').hide();
							}else{
								$('#addClient').show();
							}
							
						}
					},	
					getValue: "txtName",
				};
				
				$("#key").easyAutocomplete(optionsbxs);
				
				
				$('#datetimepicker1').datepicker({
					 format: 'yyyy-mm-dd',
					 language:'de',
		             orientation: 'left bottom',
		             autoclose: true,
		             endDate: new Date()
					 
				});
				
				$("#myPartnerRegister").validate({
					rules: {
						'CLID': {required:true},
						'FKCATID': {required:true},
						'dateofdamage': {required:true}
					}
				});
				
				
				/*$('.add_more').click(function(e){
					e.preventDefault();
					$(this).after("<div class='sep5px'>&nbsp;</div><input name='txtFile[]' type='file'  class='form-control' style='margin-top:10px' />");
				});*/
				
			});
			
			function checkforce() {
				$('#txtchec').prop('checked', true);
			}
			
			function checkaddclient(vl) {
				if(vl=='New') {
					$("#emailBlck").show();	
					$("#CLID").val('New');
				} else {
					$("#emailBlck").hide();
				}
				
			}

			function changequestion(vl) {
		        $("#questions").html('<div class="col-md-6">loading...</div>')
				$.ajax({
					 type: "POST",
					 url: "<?=base_url()?>index.php/schade/getquestionforPartner",
					 data: "quesitonid="+vl,
					 success: function(data){
						$("#questions").html(data);
					 }
				});
			}

			function deleteFile(caseID,fileID,clientID) {
				$.ajax({
					 type: "POST",
					 url: "<?=site_url()?>page/deletefiles/"+caseID+"/"+fileID+"/"+clientID+"",
					 data: "",
					 success: function(data){
						//$("#supplierprice").html(data);
						//DO NOTHING OR SOMETHING
						$("#linkid-"+fileID).hide();
					 }
				});
			}

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

                    $('#response ul').html('loading...');

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
		</script>

    </body>
</html>