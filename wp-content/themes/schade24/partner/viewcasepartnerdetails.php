
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Schade24</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
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

        <style>
        	.flexWrap{
        		display: flex;
			    flex-wrap: wrap;
			    align-items: center;
        	}
        	.f-auto{
        		flex: auto;
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
                    
                </section>

                <!-- Main content -->
                <section class="content">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
                            	<div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="box box-primary">
                                        <?php
											$this->Pagemodel->getCaseDetails($caseID)
										?>
										<div class="box-header">
                                            <i class="fa fa-bar-chart-o"></i>
                                            <div class="pull-left">
												<h3 class="box-title"><h3 class="box-title">ZAAK#<?php echo $caseID; ?> Gegevens</h3></h3>
											</div>
											<div class="pull-right">
												<a href="<?=site_url()?>page/managecasepartner/<?=$isapproved?>" class="btn btn-md btn-primary btn-flat" style="color:#fff;">Terug naar Overzicht</a>
											</div>
                                        </div>
                                        <?php
											$this->Pagemodel->getClientDetails($this->Pagemodel->FKClientID);
										?>
                                        <div class="col-md-12">
                                        	<div class="flexWrap">
                                        		<h3 class="f-auto">Klantgegevens</h3> 
                                        		<a href="<?=site_url()?>page/editcasepartner/<?php echo $caseID; ?>" class="btn btn-md btn-primary">Wijzigen </a>		
                                        	</div>
                                        </div>
                                        <div class="col-md-12">
											<div class="dashboardblock">
												<div class="row">
													<div class="col-md-5"><strong>Naam</strong></div><div class="col-md-7"><?php echo $this->Pagemodel->txtName; ?> <?php echo $this->Pagemodel->txtLName; ?></div>
													<div class="sep10px">&nbsp;</div>
													<div class="col-md-5"><strong>Telefoon</strong></div><div class="col-md-7"><?php echo $this->Pagemodel->txtPhone; ?></div>
                                                    <div class="sep10px">&nbsp;</div>
                                                    <div class="col-md-5"><strong>Email</strong></div><div class="col-md-7"><?php echo $this->Pagemodel->txtEmail; ?></div>
                                                    
												</div>
											</div>
										</div>
                                        
                                        <?php
											$this->Pagemodel->getCaseDetails($caseID)
										?>
                                        <div class="col-md-12"><h3>Gegevens Zaak</h3></div>
                                        
										<div class="col-md-6">
											<div class="dashboardblock">
												<div class="row">
													<div class="col-md-5"><strong>Categorie</strong></div><div class="col-md-7"><?php echo $this->Pagemodel->getClaimCategoryName($this->Pagemodel->FKCATID,'De'); ?></div>
													<div class="sep10px">&nbsp;</div>
													<!--
													<div class="col-md-5"><strong>Verzekering</strong></div><div class="col-md-7"><?php echo $this->Pagemodel->txtNameofInsurance; ?></div>
													<div class="sep10px">&nbsp;</div>
													-->
													<div class="col-md-5"><strong>Ongevalsdatum</strong></div><div class="col-md-7"><?php echo formatDate($this->Pagemodel->dateofdamage); ?></div>
                                                    <div class="sep10px">&nbsp;</div>
                                                    <div class="sep10px">&nbsp;</div>
                                                    <div class="sep10px">&nbsp;</div>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="dashboardblock">
												<div class="row">
													<div class="col-md-5"><strong>Datum aangepast / Gewijzigd</strong></div><div class="col-md-7"><?php echo formatDate($this->Pagemodel->dateCreation); ?></div>
													<div class="sep10px">&nbsp;</div>
													<div class="col-md-5"><strong>Datum Aangepast</strong></div><div class="col-md-7"><?php echo formatDate($this->Pagemodel->updatedDate); ?></div>
													<div class="sep10px">&nbsp;</div>
													<div class="col-md-5"><strong>Status</strong></div><div class="col-md-7"><?php echo $this->Pagemodel->getStatus($this->Pagemodel->status,'De'); ?></div>
												</div>
											</div>
										</div>
										<div class="sep15px">&nbsp;</div>



										<? if($this->Pagemodel->txtMedicalCenterName != '' || $this->Pagemodel->txtNameofInsurance != '' || $this->Pagemodel->txtLicensePlate != '' || $this->Pagemodel->txtOtherVehicleLicensePlate != '' || $this->Pagemodel->txtEmployerName != ''){ ?>

											<div class="col-md-12">
						                      <div class="dashboardblock">
						                        <div class="row">

					                    <? } ?>

							                          <? if($this->Pagemodel->txtMedicalCenterName != ''): ?>
							                            <div class="col-md-5">Naam van het medisch centrum</div>
							                            <div class="col-md-7"><?= $this->Pagemodel->txtMedicalCenterName; ?></div>
							                            <div class="sep10px">&nbsp;</div>
							                          <? endif; ?>

							                          <? if($this->Pagemodel->txtNameofInsurance != ''): ?>
							                            <div class="col-md-5">Naam van het verzekeringsbedrijf</div>
							                            <div class="col-md-7"><?= $this->Pagemodel->txtNameofInsurance; ?></div>
							                            <div class="sep10px">&nbsp;</div>
							                          <? endif; ?>

							                          <? if($this->Pagemodel->txtLicensePlate != ''): ?>
							                            <div class="col-md-5">Eigen voertuig Lincense plaatnummer</div>
							                            <div class="col-md-7"><?= $this->Pagemodel->txtLicensePlate; ?></div>
							                            <div class="sep10px">&nbsp;</div>
							                          <? endif; ?>


							                          <? if($this->Pagemodel->txtOtherVehicleLicensePlate != ''): ?>
							                            <div class="col-md-5">Kentekenplaatnummer</div>
							                            <div class="col-md-7"><?= $this->Pagemodel->txtOtherVehicleLicensePlate; ?></div>
							                            <div class="sep10px">&nbsp;</div>
							                          <? endif; ?>

							                          <? if($this->Pagemodel->txtEmployerName != ''): ?>
							                            <div class="col-md-5">Werkgever Naam</div>
							                            <div class="col-md-7"><?= $this->Pagemodel->txtEmployerName; ?></div>
							                            <div class="sep10px">&nbsp;</div>
							                          <? endif; ?>


					                        <? if($this->Pagemodel->txtMedicalCenterName != '' || $this->Pagemodel->txtNameofInsurance != '' || $this->Pagemodel->txtLicensePlate != '' || $this->Pagemodel->txtOtherVehicleLicensePlate != '' || $this->Pagemodel->txtEmployerName != ''){ ?>

							                        </div>
							                      </div>
							                    </div>
						                	<? } ?>

                    					<div class="sep15p">&nbsp;</div>
										<div class="col-md-12">
											<div class="dashboardblock">
												<div class="row">
													<div class="col-md-3">
														<div class="rightborderdark">
															<strong>Bestanden</strong>
														</div>
													</div>
													
													<div class="col-md-9">
														<?php
														$rs = $this->Pagemodel->getCaseFilesbyFKCaseID($this->Pagemodel->ID);
														if($rs->num_rows()>0) {
															foreach($rs->result() as $rows) { 	
														?>
														<div class="col-md-6 text-left">
															<a href="<?=base_url()?>/uploadfiles/client-<?=$this->Pagemodel->FKClientID?>/<?=$rows->txtFile?>" target="_blank"><?=$rows->txtFile?></a>
															&nbsp;&nbsp;&nbsp;<a href="<?=site_url()?>page/managepartnerdeletefiles/<?=$rows->FKCaseID?>/<?=$rows->ID?>/<?=$this->Pagemodel->FKClientID?>" target="_parent"><i class="fa fa-trash"></i></a>
														</div>
														<? 
															}
														} else {
																
														?>
														<div class="text-left">
															<div class="sep15px">&nbsp;</div>
															Geen bestanden gevonden!
														</div>
														<? } ?>
													</div>
													
												</div>
											</div>
										</div>
										<div class="sep15px">&nbsp;</div>
										<div class="col-md-12">
											<div class="descripblock">
												<h3>Beschrijving</h3>
												<p>
													<?php echo $this->Pagemodel->caseDesc; ?>
												</p>
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
        <script type="text/javascript">
			$(function() {
				
				$("#myPartnerRegister").validate({
					rules: {
						txtName: {required:true},
						txtEmail: {required:true,email:true},
						txtPhone: {required:true}
						
					}
				});
				
			});
		</script>

    </body>
</html>