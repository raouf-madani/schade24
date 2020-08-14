<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no" />
<!-- Bootstrap -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css"/>
<title><? the_title() ?> </title>

<link rel="icon" href="<?php bloginfo("template_directory"); ?>/images/favicons/favicon.ico">
<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo("template_directory"); ?>/images/favicons/favicon-16x16.png"> 
<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo("template_directory"); ?>/images/favicons/favicon-32x32.png"> 
<link rel="icon" type="image/png" sizes="128x128" href="<?php bloginfo("template_directory"); ?>/images/favicons/favicon-128x128.png"> 
<link rel="icon" type="image/png" sizes="192x192" href="<?php bloginfo("template_directory"); ?>/images/favicons/favicon-192x192.png"> 
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div class="insidepage">
<div id="left-side-bar">

	<div class="for-remove">

		
		<i class="fa fa-close remove-toggle pointer pull-right" style="font-size:18px;"></i>&nbsp;&nbsp;
	</div>
	

	<ul class="nav nav-pills nav-stacked" role="tablist">
		<!--<li><a href="<?=site_url()?>">Home</a></li>-->
		<!--<li><a href="<?=site_url()?>hoe-werkt-het">Hoe werkt het</a></li>-->
		<!--<li><a href="<?=site_url()?>blog">Blog</a></li>-->
		<!--<li><a href="<?=site_url()?>veelgestelde-vragen">Veel gestelde vragen</a></li>-->
		<!--<li><a href="<?=site_url()?>/schade-melden">Schade melden</a></li>-->
		<? if(isset($_COOKIE['ci_session'])) { ?>	
		   <?php
                    wp_nav_menu (
                        
                    array (
                              "theme_location" => "mobile-costumer-menu",
                            "menu_id" => "mobile-menu",
                            'container' => false ,
                             'items_wrap' => '%3$s'
                        
                        )    
               
                        )
                    
                    ?>
	
		<? } else { ?>
			
	            <?php
                    wp_nav_menu (
                        
                    array (
                              "theme_location" => "mobile-logged-out-menu",
                            "menu_id" => "mobile-menu",
                          'container' => false ,
                            'items_wrap' => '%3$s'
                        
                        )    
               
                        )
                    
                    ?>
		<? } ?>
		<a href="<?= site_url(); ?>/factsheet" class="btnRoundBlue" style="margin:15px 0 0 15px">Schade24 Factsheet</a>
	</ul>
	<div style="clear:both;height:150px">&nbsp;</div>
	<!-- TrustBox script -->
	<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
	<!-- End TrustBox script -->
	<!-- TrustBox widget - Micro Review Count -->
	<div class="trustpilot-widget" data-locale="en-US" data-template-id="5419b6a8b0d04a076446a9ad" data-businessunit-id="5b604a98406d5d0001c5b48d" data-style-height="24px" data-style-width="100%" data-theme="light" data-stars="1,2,3,4,5"> 	<a href="https://www.trustpilot.com/review/schade24.com" target="_blank">Trustpilot</a> 
	</div> 
	<!-- End TrustBox widget -->

</div>
<div id="left-side-bar-bg"></div>

<header class=" visible-xs visible-sm customvisiblemenu sticky">
<div class="container">
	<div class="row">
		<div class="col-xs-12 text-center">
				<div class="mobiletoggle">
					<i class="fa fa-bars click-toggle pointer"></i>
				</div>
				<a href="<?=site_url()?>"><img src="<?php bloginfo("template_directory");  ?>/images/schade-24-logo.png" class="logomobile img-responsive"></a>
			</div>
	</div>
</div>
</header>
<header class="hidden-xs hidden-sm customhiddenmenu sticky">
    <div class="container">
        <div class="row">
            <div class="col-md-12 padding0">
                <div class="col-md-6">
                    
                         <?php
                    wp_nav_menu (
                        
                    array (
                              "theme_location" => "top-left-menu",
                                "menu_id" => "main-menu",
                                "container" => "ul",
                                "menu_class" =>  "topmenulinks",
                        
                        )    
               
                        )
                    
                    ?>
      <!--              <ul class="topmenulinks">-->
      <!--                  <li><a href="<?=site_url()?>">Home</a></li>-->
						<!--<li><a href="<?=site_url()?>hoe-werkt-het">Hoe werkt het</a></li>-->
						<!--<li><a href="<?=site_url()?>blog">Blog</a></li>-->
						<!--<li><a href="<?=site_url()?>veelgestelde-vragen">Veel gestelde vragen</a></li>-->
      <!--              </ul>   	-->
                </div>
                <div class="col-md-6 text-righ+">
                    <div class="pull-right">
                        <div class="pull-left righttoplogin">
                            <?php
                                wp_nav_menu (
                                    
                                array (
                                          "theme_location" => "top-right-menu-commun",
                                         'container' => false ,
                                         'items_wrap' => '%3$s'
                                    
                                    )    
                           
                                    )
                    
                                ?>
                        
                        	
                        	<? if(isset($_COOKIE['ci_session'])){ ?>
                        	 
								  <div class="accountMenuWrapper btnRoundWhite caret-down">
	                                  <a href="javascript:void(0);" id="droploginmenu" class="">Dashboard <span class="caret"></span></a>
	                                     <?php
                                                    wp_nav_menu (
                                                        
                                                    array (
                                                            "theme_location" => "top-right-menu-customer",
                                                            "menu_id" => "customer-menu",
                                                            "container" => "ul",
                                                           

                                                        )    
                                               
                                                        )
                    
                    
                                        ?>
	                              </div>
	                             
	                
							<? } else { ?>
						
							  <?php
                                wp_nav_menu (
                                    
                                array (
                                          "theme_location" => "top-right-menu-logged-out",
                                            'container' => false,
                                            'items_wrap' => '%3$s'
                                    )    
                                    )
                    
                                ?>
							<? } ?>
                    </div>
                      </div>
                </div>
              
                <div class="headerlogo text-center mr-top-225 mr-bt-10">
                    <a href="<?=site_url()?>"><img src="<?php bloginfo("template_directory"); ?>/images/schade-24-logo.png" class="img-responsive"></a>
					<h4 class="text-center cathd">Jouw schade, onze zorg</h4>
				</div>
            </div>
        </div>
    </div>
</header>


