
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
		<style type="text/css">
		    /*#myPartnerRegister{
		        display: block;
		    }*/
		    div.datepicker{
		        top: 204px!important;
		    }
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
                        <li class="active">Dossier toevoegen</li>
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
												<h3 class="box-title">Wijzigen</h3>
											</div>
											<div class="pull-right">
												<a href="<?=site_url()?>page/managecasepartner" class="btn btn-md btn-primary btn-flat" style="color:#fff;">Terug naar overzicht</a>
											</div>
											<div class="sep25px">&nbsp;</div>
											<? if($success) { ?>
												<div class="alert alert-success"><?=$success?></div>
											<? } ?>
											<? if($warning) { ?>
												<div class="alert alert-warning"><?=$warning?></div>
											<? } ?>
											 <div class="sep15px">&nbsp;</div>
											 <div class="formcls">
												<form id="myPartnerRegister" method="post" name="myform" class="editmsform" action="<?=site_url()?>page/editcasepartner/<?=$caseID?>" enctype="multipart/form-data">
													<input type="hidden" name="hdnAction" class="hdnAction" value="editcase">   
						                          	<input type="hidden" name="hdnID" value="<?=$caseID?>">
						                          	<h5><strong>Dossiergegevens</strong></h5>
						                          	<div class="row">
														<div class="col-md-6">
										                    <input type="text" name="dateofdamage" class="form-control" value="<?=$this->Pagemodel->dateofdamage?>" id="datetimepicker1" data-date-format="yyyy/mm/dd" placeholder="Schadedatum">
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
							                                            <option value="<?=$rows->ID?>" <? if($this->Pagemodel->FKCATID==$rows->ID) { ?> selected <? } ?>><?=$rows->catDe?></option>
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
		                                                    <div class="sep20px">&nbsp;</div>
		                                                    <div class="col-md-12">
			                                                    <?
			                                                        $rsfiles = $this->Pagemodel->getCaseFilesbyFKCaseID($this->Pagemodel->ID);
			                                                        if($rsfiles->num_rows()>0) {
			                                                            echo '<h5><strong>Files</strong></h5>';
			                                                            foreach($rsfiles->result() as $rowsfiles) {
			                                                    ?>
			                                                        <div id="linkid-<?=$rowsfiles->ID?>">
			                                                            <a href="<?=base_url()?>uploadfiles/client-<?=$this->Pagemodel->FKClientID?>/<?=$rowsfiles->txtFile?>" target="_blank"><?=$rowsfiles->txtFile?></a> 
			                                                            &nbsp;&nbsp;|&nbsp;&nbsp;
			                                                            <a href="javascript:void(0)" onClick="deleteFile('<?=$this->Pagemodel->ID?>','<?=$rowsfiles->ID?>','<?=$this->Pagemodel->FKClientID?>')">Delete</a><br>
			                                                        </div>
			                                                    <? 
			                                                            }
			                                                    } 
			                                                    ?>
			                                                </div>
		                                                    <div class="sep20px">&nbsp;</div>
		                                                    <input type="submit" name="mypartnersubmit" value="<?=$this->Pagemodel->getSpecificTextLanguage('txtSubmitButtonTextEN','textDEValue')?>" class="btn btn-lg btn-primary">
										                </div>
										            </div><!--row-->
												</form>
											 </div>
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


		<!-- jQuery 2.0.2 -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?=base_url()?>src/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?=base_url()?>src/js/AdminLTE/app.js" type="text/javascript"></script>
        <script src="<?=themes_base_url()._DEFAULTTHEMEPATH_?>js/jquery.form.js"></script>
		
		<script src="<?=themes_base_url()._DEFAULTTHEMEPATH_?>js/bootstrap-datetimepicker.min.js"></script>
        <script src="<?=themes_base_url()._DEFAULTTHEMEPATH_?>js/de.js"></script>
        <script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
		<script src="<?=themes_base_url()._DEFAULTTHEMEPATH_?>js/schadeform.js"></script>
        <script type="text/javascript">

		    $(function() {
		       /* $("#msform").validate({
		            rules: {
		                'dateofdamage': {required:true},
		                'FKCATID': {required:true},
		            },
		            submitHandler: function(form) {
		                    $("#finishstep").empty().html('Loading...');
		                    //return false;
		                    $.ajax({
		                        url : "<?=site_url()?>page/editcasepartner/<?=$caseID?>",
		                        method : "POST",
		                        data: new FormData(form),
		                        contentType:false,
		                        processData:false,
		                        cache: false,
		                        success: function(data){
		                            //$('#txtuploadothers_select').val('');
		                            
		                            $("#finishstep").html(data);
		                            return false;
		                        }
		                    });
		                    return false;
		            }
		        });*/

		        $("#myPartnerRegister").validate({
					rules: {
						'FKCATID': {required:true},
						'dateofdamage': {required:true}
					}
				});

		        $('#datetimepicker1').datepicker({
		             format: 'yyyy-mm-dd',
					 language:'de',
		             orientation: 'left bottom',
		             autoclose: true,
		             endDate: new Date()
		        });
		        
		    });
		    
		    function checkforce() {
		        $('#txtchec').prop('checked', true);
		    }
		    
		    function validateValuesStep(step) {
		        if(step==1) {
		            if($("#txtLName").val()=='') {
		                $("#txtName").addClass('error');
		            }       }

		    }
		    function changequestion(vl) {
		        $("#questions").html('loading...')
		        $.ajax({
		             type: "POST",
		             /*url: "<?=base_url()?>index.php/schade/getquestion/<?=$caseID?>",*/
		             url: "<?=base_url()?>index.php/schade/getquestionforPartner/<?=$caseID?>",
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
		    
		    $('#txtuploadothers_select').change(function(){
		        $('#uploadothersval').submit();
		        var loading = $('<img>',{id:'loaderImg',src:'<?=themes_base_url()._DEFAULTTHEMEPATH_?>images/loadingdoc.gif', style: 'width:64px; margin:0 auto; display:block;'});
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
		    
		    changequestion(<?= $this->Pagemodel->FKCATID; ?>);

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
		});
		</script>
    </body>
</html>