<?php 
/*
* Template Name: FAQ
*/
get_header("inside");

?>




<section class="m-top-66" id="accordians">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="sep60px">&nbsp;</div>
          <div class="sep60px hidden-xs">&nbsp;</div>
          <div class="sep60px hidden-xs">&nbsp;</div>
          <h1 class="text-lightblue gothamrounded font28px margin0 text-center">VEELGESTELDE VRAGEN</h1>
          <div class="sep60px">&nbsp;</div>
        </div>
        <div class="col-xs-12">
          <ul class="nodot">
         
            
            <?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
	
	the_content();
	
		
	} // end while
} // end if
?>
          </ul>
        </div>
      </div>
    </div>
    <!-- <div class="sep60px">&nbsp;</div> -->
    <div class="footerinsidebg">&nbsp;</div>
  </section>
</div>


<?php 

get_footer();

?>
<script>
  $(document).ready(function(){
    $('ul > li').click(function(){
      $(this).find('div.ans').slideToggle('slow');
      $(this).find('strong > i').toggleClass('fa-angle-right fa-angle-down');
    });
  });
</script>

</body>
</html>