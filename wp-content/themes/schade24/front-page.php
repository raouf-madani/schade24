  <?php get_header(); ?>
  <section class="m-top-66" id="topscroll">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row row-gutter-31">
              <div class="m-top-320 clearfix blockWrapperAll">
                <div class="col-md-12 text-center">
                  <a href="<?= site_url(); ?>/schade-melden" id="claimBtn" class="btnRoundLightBlue width310max width100per blueshadow drkblue"><? echo get_field('blue_button_text');?></a>
                  <div class="sep30px">&nbsp;</div>
                </div>
                                   <?php 
        if ( have_posts() ) {
        	while ( have_posts() ) {
        		the_post(); 
        	
        	the_content();
        	
        		
        	} // end while
        } // end if
        ?>
                </div>
                <div id="loadContent" style="display: none; min-height: 900px;"></div>
              </div><!--m-top-250-->
            </div>
          </div>
        </div>
      </div> <!-- container -->
      <div class="sep20px hidden-xs">&nbsp;</div>
    <div class="footerinsidebg">&nbsp;</div>
  </section>
</div><!--insidepage-->
<section class="bluebg p-top-65 p-btm-65" id="schade-claim-text">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="sep40px hidden-xs">&nbsp;</div>
       <? echo get_field('video_block_title');?>
        <div class="sep20px">&nbsp;</div>
       <? echo get_field('video_block_text');?>
      </div>
      <div class="col-xs-12 col-sm-6">
        <a href="https://schade24.com/application/views/themes/PIX01/video/s24_video.mp4" class="block popup_video">
          <img src="<? echo get_field('video_image');?>" alt="Video" class="img-responsive ">
        </a>
      </div>
    </div>
  </div>
</section>


<section class=" p-top-65 p-btm-65" id="bodybgschade">
	<div class="container">
    	<div class="row">
        <div class="col-md-12 bgwhite">
          <? echo get_field('report_damage_title');?>
          <div class="sep20px hidden-xs">&nbsp;</div>
          <div class="sep20px">&nbsp;</div>
          <div class="perauto65">
            <p class="text-center gothamlight"><? echo get_field('report_damage_text');?></p>
          </div>
        </div>
      </div>
      <div class="sep60px hidden-xs">&nbsp;</div>
      <div class="20px hidden-sm hidden-md hidden-lg">&nbsp;</div>
      <div class="row">
        <div class="col-xs-12 col-sm-4">
          <div class="workBlock">
            <img src="<? echo get_field('column1_image');?>" class="img-responsive img-center">
            <div class="sep30px">&nbsp;</div>
            <h3><? echo get_field('column1_title');?></h3>
            <div class="sep20px">&nbsp;</div>
            <div class="perauto65">
              <p><? echo get_field('column1_text');?></p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4">
          <div class="workBlock">
            <img src="<? echo get_field('column2_image');?>" class="img-responsive img-center">
            <div class="sep30px">&nbsp;</div>
            <h3><? echo get_field('column2_title');?></h3>
            <div class="sep20px">&nbsp;</div>
            <div class="perauto65">
              <p><? echo get_field('column2_text');?></p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4">
          <div class="workBlock">
            <img src="<? echo get_field('column3_image');?>" class="img-responsive img-center">
            <div class="sep30px">&nbsp;</div>
            <h3><? echo get_field('column3_title');?></h3>
            <div class="sep20px">&nbsp;</div>
            <div class="perauto65">
              <p><? echo get_field('column3_text');?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>


<!-- <section class=" p-top-65 p-btm-65" id="brandLogos">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <ul class="logos row">
          <li class="col-xs-3">
            <div class="logoBlock">
              <img src="<?php bloginfo("template_directory");  ?>/images/brands/airbus.jpg" class="img-responsive img-center" alt="">
            </div>
          </li>
          <li class="col-xs-3">
            <div class="logoBlock">
              <img src="<?php bloginfo("template_directory");  ?>/images/brands/comfly.jpg" class="img-responsive img-center" alt="">
            </div>
          </li>
          <li class="col-xs-3">
            <div class="logoBlock">
              <img src="<?php bloginfo("template_directory");  ?>/images/brands/editas.jpg" class="img-responsive img-center" alt="">
            </div>
          </li>
          <li class="col-xs-3">
            <div class="logoBlock">
              <img src="<?php bloginfo("template_directory");  ?>/images/brands/zerox.jpg" class="img-responsive img-center" alt="">
            </div>
          </li>
          <li class="col-xs-3">
            <div class="logoBlock">
              <img src="<?php bloginfo("template_directory");  ?>/images/brands/airbus.jpg" class="img-responsive img-center" alt="">
            </div>
          </li>
          <li class="col-xs-3">
            <div class="logoBlock">
              <img src="<?php bloginfo("template_directory");  ?>/images/brands/comfly.jpg" class="img-responsive img-center" alt="">
            </div>
          </li>
          <li class="col-xs-3">
            <div class="logoBlock">
              <img src="<?php bloginfo("template_directory");  ?>/images/brands/editas.jpg" class="img-responsive img-center" alt="">
            </div>
          </li>
          <li class="col-xs-3">
            <div class="logoBlock">
              <img src="<?php bloginfo("template_directory");  ?>/images/brands/zerox.jpg" class="img-responsive img-center" alt="">
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section> -->

<section class="p-top-65 p-btm-65">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
          <? echo get_field('awards_block_title');?>
       
        <div class="sep20px hidden-xs">&nbsp;</div>
        <div class="sep20px">&nbsp;</div>
        <p class="text-center gothamlight">
             <? echo get_field('awards_block_text');?>
          </p>
          <div class="sep15px">&nbsp;</div>
          <a href="<? echo get_field('awards_button_link');?>" class="btnRoundLightBlue width310max width100per brownshadow drkbrown">
              <? echo get_field('awards_button_text');?>
          <img src="<? echo get_field('awards_button_image');?>" class="img-responsive"></a>
      </div>
    </div>
  </div>
</section>

<section class=" p-top-65 p-btm-65" id="reviews">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1 class="text-center sectionTitle black"><? echo get_field('reviews_block_title');?></h1>
        <div class="sep20px hidden-xs">&nbsp;</div>
        <div class="sep30px">&nbsp;</div>
        <img src="<? echo get_field('reviews_block_image');?>" alt="Schade24" title="Schade24" class="max300w img-responsive img-center" width="300">
        <div class="sep30px">&nbsp;</div>
        <ul id="trust-pilot">
                            
        </ul>
        <div class="sep30px">&nbsp;</div>
        <a title="Schade24" href="<? echo get_field('button_reviews_link');?>" target="_blank" class="btn btn-lg btn-review max200w btn-center"><? echo get_field('reviews_button_text');?></a>
        <!-- TrustBox widget - Slider --> 
        <!-- <div class="trustpilot-widget" data-locale="nl-NL" data-template-id="54ad5defc6454f065c28af8b" data-businessunit-id="5b604a98406d5d0001c5b48d" data-style-height="240px" data-style-width="100%" data-theme="light" data-stars="4,5" data-schema-type="Organization"> <a href="https://nl.trustpilot.com/review/schade24.com" target="_blank" rel="noopener">Trustpilot</a> </div>  -->
        <!-- End TrustBox widget -->
      </div>
    </div>
  </div>
</section>

<div class="modal animated fadeInUp full" id="categoryPopupModal" tabindex="-1" role="dialog" style="overflow: hidden;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div id="showContent">

        </div>
    </div><!--modal Content-->
  </div><!--modal Dialog-->
</div><!--modal-->
<?php get_footer(); ?>




<!-- <script src="<?php bloginfo("template_directory"); ?>/js/videopopup.js"></script>
<script type="">
  $(function () {
       $('.popup_video').VideoPopUp({
        backgroundColor: "#17212a",
        opener: "video1",
        maxweight: "340",
        idvideo: "v1"
      });
    });
</script> -->

<script type="text/javascript">
  // function categoryPopup(id){
  //   $(function(){
  //     $.ajax({
  //       type: "POST",
  //       url: "<? echo site_url(); ?>/page/showCategoryInPopup",
  //       data: "cat_id=" + id,
  //       success: function(data){
  //         $('#categoryPopupModal #showContent').html(data);
  //         showdiv(id);
  //         $('#categoryPopupModal').modal('show');
  //         listenForScrollEvent($(".modal-body"));
  //       }
  //     });
  //   });
  // }
  $(document).ready(function() {
    var pathname = window.location.pathname;
    console.log(pathname);
    switch (pathname) { 
      case '/letselschade': 
        categoryPopup(1);
        break;
      case '/medische-missers': 
        categoryPopup(2);
        break;
      case '/stormschade': 
        categoryPopup(3);
        break;    
      case '/vluchtvertraging': 
        categoryPopup(4);
        break;
      case '/voertuigschade': 
        categoryPopup(5);
        break;
      case '/bedrijfsongeval': 
        categoryPopup(6);
        break;   
      default:
        console.log("default page");
    }
  });


  function categoryPopup(id){
    $(function(){
      switch (id) { 
        case 1: 
          history.pushState(null,"Schade24 | Letselschade",'/letselschade');
          break;
        case 2: 
          history.pushState(null,"Schade24 | Medische missers",'/medische-missers');
          break;
        case 3: 
          history.pushState(null,"Schade24 | Stormschade",'/stormschade');
          break;    
        case 4: 
          history.pushState(null,"Schade24 | Vluchtvertraging",'/vluchtvertraging');
          break;
        case 5: 
          history.pushState(null,"Schade24 | Voertuigschade",'/voertuigschade');
          break;
        case 6: 
          history.pushState(null,"Schade24 | Bedrijfsongeval",'/bedrijfsongeval');
          break;   
        default:
          console.log("default page");
      }
      if (id == 4) { 
        history.pushState({urlPath:'/vluchtvertraging'},"",'/vluchtvertraging');
      }
      $.ajax({
        type: "POST",
        url: "<? echo site_url(); ?>/page/showCategoryInPopup",
        data: "cat_id=" + id,
        // beforeSend: function(){
        //   $('#loadContent').html('<div class="col-md-12"></div>');
        //   $('#loadContent').show();
        // },
        success: function(data){
          $('#claimBtn').hide();
          $('#loadContent').html(data);
          $('#loadContent').slideDown();
		  showdiv(id);
		  if($(window).width() <= 480){
			  $('html, body').animate({
			  scrollTop: $("#loadContent").offset().top + 200
			  }, 700);
		  }
        }
      });
    });
  }

  function showdiv(id){
    $(function(){
      if(id != ''){
        $('.blockWrapperAll').find('.catlbock').removeClass('active');
        $('.blockWrapperAll').find('.catblock_'+id).addClass('active');
  

        $('.allWrapper').find('#'+id).addClass('fadeInUp');
        $('.allWrapper').find('#'+id).removeClass('none');
        setTimeout(function(){
          $('.allWrapper').find('#'+id).removeClass('fadeInUp');
        }, 1000);

        $('.allWrapper').find('#'+id).siblings().addClass('none');
        $('.allWrapper').find('#'+id).siblings().removeClass('fadeInUp');
      }
    });
  }

  function modalClose(){
    $(function(){
       $('#categoryPopupModal').modal('hide');
       $('.catlbock').removeClass('active');
    });
  }

  $(window).scroll(function() {
      if ($(this).scrollTop() > 20){  
        $('header').addClass("sticky");
      }
      else{
        $('header').removeClass("sticky");
      }
  });

 $(document).on('custom-scroll', '.modal-body', function() {
      if ($(this).scrollTop() > 20){  
        $('.modal-header header').addClass("sticky");
      }
      else{
        $('.modal-header header').removeClass("sticky");
      }
  });

  function listenForScrollEvent(el){
    el.on("scroll", function(){
        el.trigger("custom-scroll");
    })
  }
</script>


</body>
</html>