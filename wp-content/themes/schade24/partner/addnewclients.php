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
                        Klant
                        
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Klant</li>
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
												<h3 class="box-title">Clienten Toevoegen</h3>
											</div>
											<div class="pull-right">
												<a href="<?=site_url()?>page/mypartneraccount" class="btn btn-md btn-primary btn-flat" style="color:#fff;">Terug naar Dashboard</a>
											</div>
											<div class="sep25px">&nbsp;</div>
											<? if($success) { ?>
												<div class="alert alert-success"><?=$success?></div>
											<? } ?>
											 <? if($warning) { ?>
												<div class="alert alert-warning"><?=$warning?></div>
											<? } ?>   
											
											<form name="myPartnerRegister" id="myPartnerRegister" method="post" action="<?=site_url()?>page/addnewclients">
												<input type="hidden" name="hdnAction" value="register">	
												<input type="hidden" name="FKPRID" value="<?=$_SESSION['PRREGID']?>">	
												<div class="formcls">
													<input type="text" name="txtName" class="form-control" placeholder="Naam Klant">
													<div class="sep20px">&nbsp;</div>
													<input type="text" name="txtEmail" class="form-control" placeholder="E-mail Klant">
													<div class="sep20px">&nbsp;</div>
													<input type="text" name="txtPhone" class="form-control" placeholder="Telefoonnummer Klant">
													
													<div class="sep20px">&nbsp;</div>
													<input type="submit" value="<?=$this->Pagemodel->getSpecificTextLanguage('txtSubmitButtonTextEN','textDEValue')?>" class="btn btn-lg btn-primary">
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