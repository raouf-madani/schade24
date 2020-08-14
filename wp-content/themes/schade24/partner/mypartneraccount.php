
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
                        Dashboard
                        
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
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
                                            <h3 class="box-title">Welcome to your dashboard</h3>
											<div class="sep25px">&nbsp;</div>
											<!--<a href="<?=site_url()?>page/addnewclients">
												<div class="col-md-3 col-xs-6 text-center">
													<div class="dasboardblock">
														<img src="<?=themes_base_url()._DEFAULTTHEMEPATH_?>images/acc-new-case.jpg" class="img-responsive">
													</div>
													Clienten Toevoegen
												</div>
											</a>
											<a href="<?=site_url()?>page/manageclients">
												<div class="col-md-3 col-xs-6 text-center">
													<div class="dasboardblock">
														<img src="<?=themes_base_url()._DEFAULTTHEMEPATH_?>images/appointments.jpg" class="img-responsive">
													</div>
													Clienten Beheren
												</div>
											</a>-->
											<a href="<?=site_url()?>page/managecasepartner/1">
												<div class="col-md-3 col-xs-6 text-center">
													<div class="dasboardblock">
														<img src="<?=themes_base_url()._DEFAULTTHEMEPATH_?>images/manage-case.jpg" class="img-responsive">
													</div>
													Dossiers Beheren
												</div>
											</a>
											<a href="<?=site_url()?>page/managepartnerpersonaldetails">
												<div class="col-md-3 col-xs-6 text-center">
													<div class="dasboardblock">
														<img src="<?=themes_base_url()._DEFAULTTHEMEPATH_?>images/manage-personal-details.jpg" class="img-responsive">
													</div>
													Persoonlijke Gegevens
												</div>
											</a>
											
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
        
        <script type="text/javascript">
			
		</script>

    </body>
</html>