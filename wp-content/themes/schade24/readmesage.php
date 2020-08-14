<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no" />
<title>Schade24 </title>
<? $this->load->view(_DEFAULTTHEMEPATH_.'css.php'); ?>
<link href="<?=themes_base_url()._DEFAULTTHEMEPATH_?>css/colorbox.css" rel="stylesheet" type="text/css" />
</head>
<body>

<section class="">
	<div class="">
		<div class="container">
        	<div class="sep25px">&nbsp;</div>
         	<div class="row">
            	<div class="col-md-12">
                	<h2>MESSAGE</h2>
                    <?php
						$this->Adminmodel->getclientnotificationDetails($messageID);
						$this->Pagemodel->updateReadNotification($messageID)
					?>
                        
                         <div class="datablock clearfix">
                        	<p>
                            	<?
									$spli1 = explode("#CASEID - ",$this->Adminmodel->logdesc);
									if(count($spli1)>1) {
										$spli2 = explode(" ",$spli1[1]);
										$linktext = site_url()."/page/viewcasedetails/".$spli2[0];
										
										echo $spli1[0]." <a href='".$linktext."' target='_parent'>#CASEID - </a>".$spli1[1];
									} else { 
										echo $rows->logdesc;
									}
								
								?>
                            </p>
                         </div>
                     
                </div>
            </div>
            <div class="sep25px">&nbsp;</div>	
         </div>
	</div>
</section>

<? $this->load->view(_DEFAULTTHEMEPATH_.'commonjs.php'); ?>
</body>
</html>