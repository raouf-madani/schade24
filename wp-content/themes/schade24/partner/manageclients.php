
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
                        Clienten
                        
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Clienten</li>
                    </ol>
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
												<h3 class="box-title">Clienten Beheren</h3>
											</div>
											<div class="pull-right">
												<a href="<?=site_url()?>page/mypartneraccount" class="btn btn-md btn-primary btn-flat" style="color:#fff;">Terug naar Dashboard</a>
											</div>
                                        </div>
                                        <div class="sep20px">&nbsp;</div>
										<?php
												$rs = $this->Pagemodel->getClientsbyPartnerID($_SESSION['PRREGID']);
												if($rs->num_rows()>0) {
											?>
											<div class="box-body table-responsive no-padding">
												<table id="tableSort" class="table table-hover">
													<thead>
														<tr>
															
															<th>Naam</th>
															<th>Emailadres</th>
															<th>Telefoonnummer</th>
															<th>Beheren </th>
														</tr>
                                                    </thead>
                                                    <tbody>
														<? foreach($rs->result() as $rows) { ?>
														<tr>
															
															<td>
																<?=$rows->txtName?>
																
															</td>
															<td><?=$rows->txtEmail?></td>
															<td><?=$rows->txtPhone?></td>
															<td>
																<a class="btn btn-primary btn-flat" href="<?=site_url()?>page/editclientpartner/<?=$rows->ID?>"><i class="fa fa-edit"></i> Aanpassen / wijzigen </a>
																
																<a href="<?=site_url()?>page/addnewcasepartner/<?=$rows->FKPRID?>/<?=$rows->ID?>" class="btn btn-primary btn-flat"><i class="fa fa-user"></i>  Dossier Toevoegen</a>
																
																<a class="btn btn-primary btn-flat" href="<?=site_url()?>page/managecasepartner/<?=$rows->ID?>"><i class="fa fa-user"></i>  Dossiers Beheren </a>
															</td>
														</tr>
														<? } ?>
													</tbody>
												</table>
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