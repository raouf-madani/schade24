
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
            #tableSort th {
                border: 1px solid #ddd!important;
                border-bottom: 0!important;
                border-left: 0!important;
            }
            #tableSort th:first-child{
                border-left: 1px solid #ddd!important;   
            }
            #tableSort_wrapper{
                padding:15px;
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
                                        <div class="box-header">
                                            <i class="fa fa-bar-chart-o"></i>
                                            <div class="pull-left">
                                            	<?
													if($isapproved==1) {
														$approvetext = 'Aangenomen';	
													}
													if($isapproved==2) {
														$approvetext = 'In afwachting';	
													}
													if($isapproved==0) {
														$approvetext = 'Afgekeurd';	
													}
												?>
												<h3 class="box-title">Dossiers Beheren - <?=$approvetext?></h3>
											</div>
											<!--<div class="pull-right">
												<a href="<?=site_url()?>page/mypartneraccount" class="btn btn-md btn-primary btn-flat" style="color:#fff;">Terug naar Dashboard</a>
											</div>-->
                                        </div>
                                        <div class="row">
                                            <form name="myfilterForm" action="<?=site_url()?>page/managecasepartner/<?=$isapproved?>" method="post">
                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <h3>Filter</h3>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="hidden" name="hdnFilter" value="filter">
                                                    <input type="text" name="txtName" class="form-control" placeholder="Naam" value="" />
                                                    <div class="sep10px">&nbsp;</div>
                                                    <input type="text" name="txtEmail" class="form-control" placeholder="Email cliënt" value="" />
                                                
                                                </div>
                                                
                                               
                                                <div class="col-md-6">
                                                    <div class="clearfix">&nbsp;</div>
                                                  <input type="submit" name="myfiltersubmit" value="Filter" class="btn btn-md btn-primary">
                                                </div>
                                            </div> 
                                            </form>
                                        </div>
                                        <div class="clearfix">&nbsp;</div>
                                        <div class="sep20px">&nbsp;</div>
											<div class="col-lg-12 col-md-12 col-sm-12">
                                            <a href="<?=site_url()?>page/managecasepartner/1" class="btn btn-sm btn-primary">Aangenomen</a>&nbsp;&nbsp;<a href="<?=site_url()?>page/managecasepartner/2" class="btn btn-sm btn-info">In afwachting</a>&nbsp;&nbsp;<a href="<?=site_url()?>page/managecasepartner/0" class="btn btn-sm btn-warning">Afgekeurd</a>
											</div>
                                            <div class="clearfix">&nbsp;</div>
											<?php
												$rs = $this->Pagemodel->getPartnerCasesbyClientID($CLID,$_SESSION['PRREGID'],$isapproved);
												if($rs->num_rows()>0) {
											?>
                                            
											<div class="box-body table-responsive no-padding">
												<table id="tableSort" class="table table-hover">
													<thead>
														<tr>
															
															<th> #Dossiernummer.</th>
															<th>Naam</th>
															<th>Datum aangemaakt</th>
															<th>Status</th>
															<th>Betaald</th>
															<th>&nbsp;</th>
														</tr>
                                                    </thead>
                                                    <tbody>
														<? foreach($rs->result() as $rows) { ?>
														<tr>
															
															<td>
																<? 
                               
																  echo "Case#".$rows->ID;
																
																?>
																
															</td>
															<td><?=$rows->clientName?></td>
                                                            <td><?=formatDate($rows->dateCreation)?></td>
															
															<td><?=$this->Pagemodel->getStatus($rows->status,'De')?></td>
															<td>
															<? if($rows->partnerPaid==0) { ?>
																Nog niet betaald
															<? } else { ?>
																Betaald
															<? } ?>
															</td>
															<td>
																<a href="<?=site_url()?>page/viewcasepartnerdetails/<?=$rows->ID?>/<?=$isapproved?>" class="btn btn-sm btn-primary">Bekijk Dossier</a>
																<!--<a href="<?=site_url()?>page/editcasepartner/<?=$rows->ID?>" class="btn btn-sm btn-primary">Wijzigen </a>-->
															</td>
														</tr>
														<? } ?>
													</tbody>
												</table>
											</div>     
												<? } else { ?>
                                                <div class="box-body table-responsive no-padding">
                                                	<div class="alert alert-info">Geen dossiers gevonden</div>
                                                </div>
                                                <? } ?>
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
        <!-- Sortable jquery & css -->
         <!-- <link rel="stylesheet" href="<?=base_url()?>src/css/jsRapTable.css"> 
         <script src="<?=base_url()?>src/js/jsRapTable.js"></script>  -->
         <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> 
         <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
         <!-- <script src="<?=base_url()?>src/js/fancyTable.min.js"></script>  -->
        <script type="text/javascript">
			$(function() {

                // $('#tableSort').jsRapTable({
                //   onSort:function(i,d){
                //     $('tbody').find('td').filter(function(){
                //       return $(this).index() === i;
                //     }).sortElements(function(a, b){
                //       if(i)
                //         return $.text([a]) > $.text([b]) ?  d ? -1 : 1 : d ? 1 : -1;
                //       else
                //         return Number($.text([a])) > Number($.text([b])) ?  d ? -1 : 1 : d ? 1 : -1;
                //     }, function(){
                //       return this.parentNode;
                //     });
                //   }
                // });

                $('#tableSort').DataTable({
                    "pageLength": 50
                });
				
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