<?php include('pre-footer.php'); ?>
<footer id="footer">
	<div class="container">
    	<div class="row">
				<div class="col-xs-12 col-sm-3 col-md-3">
					
					<?php dynamic_sidebar( 'footer_1' ); ?>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3">
					<?php dynamic_sidebar( 'footer_2' ); ?>
					<div class="sep5px hidden-lg hidden-md">&nbsp;</div>
				</div>
				<div class="col-xs-12 col-sm-2 col-md-2">
					<ul class="footerlinks">
						<? if(isset($_SESSION['REGID'])) { ?>	
						  <li><a href="<?=site_url()?>page/myclientaccount">Dashboard</a></li>
						  <li><a href="<?=site_url()?>page/logout">Uitloggen</a></li>
						<? } else if(isset($_SESSION['PRREGID'])) { ?>
						  <li><a href="<?=site_url()?>page/managecasepartner">Dashboard</a></li>
						  <li><a href="<?=site_url()?>page/logout">Uitloggen</a></li>
						<? } else { ?>
							<?php dynamic_sidebar( 'footer_3' );
							} ?>
					</ul>
					<div class="sep5px hidden-lg hidden-md">&nbsp;</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					 <?php dynamic_sidebar('footer_4'); ?>
				</div>
				<div class="col-xs-12">
					<div class="sep15px">&nbsp;</div>
				       <?php dynamic_sidebar('footer_copyright'); ?>
					<div class="sep15px">&nbsp;</div>
				</div>
        </div>
    </div>
</footer>




<?php wp_footer();?>

<script type="text/javascript">

$(".click-toggle").click(function () {
	$("#left-side-bar").addClass("left-side-bar-animated");

	$('#left-side-bar-bg').css('display', 'block');
});
$(".remove-toggle").click(function () {
	$("#left-side-bar").removeClass("left-side-bar-animated");

	$('#left-side-bar-bg').css('display', 'none');
});
$("#left-side-bar-bg").click(function () {
	$("#left-side-bar").removeClass("left-side-bar-animated");

	$('#left-side-bar-bg').css('display', 'none');
});

$('#droploginmenu').click(function(){
    $('.accountMenuWrapper > ul').slideToggle();
});
// $( function () {

//     var height_diff = $( window ).height() - $( 'body' ).height();
//     if ( height_diff > 0 ) {
//         $( '#footer' ).css( 'margin-top', height_diff );
//     }
	
// });
</script>
<!-- $ (necessary for Bootstrap's JavaScript plugins) --> 
<!--<script src="https://ajax.googleapis.com/ajax/libs/$/1.10.1/$.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159168447-1"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>


<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-159168447-1');
</script>



<script>
  $(document).ready(function(){
    $('.catlbock img').each(function(){
      var jQueryimg = $(this);
      var imgID = jQueryimg.attr('id');
      var imgClass = jQueryimg.attr('class');
      var imgURL = jQueryimg.attr('src');

      $.get(imgURL, function(data) {
          // Get the SVG tag, ignore the rest
          var jQuerysvg = $(data).find('svg');

          // Add replaced image's ID to the new SVG
          if(typeof imgID !== 'undefined') {
              jQuerysvg = jQuerysvg.attr('id', imgID);
          }
          // Add replaced image's classes to the new SVG
          if(typeof imgClass !== 'undefined') {
              jQuerysvg = jQuerysvg.attr('class', 'img-responsive replaced-svg');
          }

          // Remove any invalid XML tags as per http://validator.w3.org
          jQuerysvg = jQuerysvg.removeAttr('xmlns:a');

          // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
          if(!jQuerysvg.attr('viewBox') && jQuerysvg.attr('height') && jQuerysvg.attr('width')) {
              jQuerysvg.attr('viewBox', '0 0 ' + jQuerysvg.attr('height') + ' ' + jQuerysvg.attr('width'))
          }

          // Replace image with new SVG
          jQueryimg.replaceWith(jQuerysvg);

      }, 'xml');

  });

  $('.popup_video').magnificPopup({
      /*disableOn: 700,*/
    type: 'iframe',
    closeOnContentClick: true,
    iframe: {
      markup: '<div class="mfp-with-zoom">'+
            '<div class="mfp-content">'+
            '<div class="mfp-iframe-scaler">'+
                '<div class="mfp-close"></div>'+
                '<iframe class="mfp-iframe zoomIn animated" width="848" height="480" frameborder="0" allowfullscreen></iframe>'+
                '</div>'+
                '</div>'+
              '</div>', // HTML markup of popup, `mfp-close` will be replaced by the close button

      patterns: {
        youtube: {
          index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).

          id: 'v=', // String that splits URL in a two parts, second part should be %id%
          // Or null - full URL will be returned
          // Or a function that should return %id%, for example:
          // id: function(url) { return 'parsed id'; }

          src: '//www.youtube.com/embed/%id%?autoplay=1&showinfo=0&controls=0&rel=0&loop=1&modestbranding=0' // URL that will be set as a source for iframe.
        },
        vimeo: {
          index: 'vimeo.com/',
          id: '/',
          src: '//player.vimeo.com/video/%id%?autoplay=1'
        }

        // you may add here more sources

      },

      srcAction: 'iframe_src', // Templating object key. First part defines CSS selector, second attribute. "iframe_src" means: find "iframe" and set attribute "src".
    },
    mainClass: 'mfp-with-zoom',
    zoom: {
        enabled: true, // By default it's false, so don't forget to enable it
        duration: 300, // duration of the effect, in milliseconds
        easing: 'ease-in-out', // CSS transition easing function
        opener: function(element) {
        return element.find('iframe');
      }
    },
    /*removalDelay: 160,*/
    preloader: true,
    // other options
  });


    $(".workBlock").tilt({
      maxTilt: 0,
      perspective: 1400,
      easing: "cubic-bezier(.03,.98,.52,.99)",
      speed: 1200,
      glare: true,
      maxGlare: 0.2,
      scale: 1
    });

    $('.logos').slick({
      dots: false,
      infinite: true,
      arrows: true,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      prevArrow: '<span class="arrow_left">Previous</span>',
      nextArrow: '<span class="arrow_right">Next</span>',
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });

  });
</script>


<style>
  video{
    width: 100%!important;
    background: transparent!important;
  }
</style>
<!-- TrustBox script -->
<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
<!-- End TrustBox script -->
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '635560553686711');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=635560553686711&ev=PageView&noscript=1"
/></noscript>


