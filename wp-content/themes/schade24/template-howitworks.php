<?php 
/*
* Template Name: How it works
*/
get_header("inside");

?>
<section class="m-top-66">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="sep60px">&nbsp;</div>
                <div class="sep60px hidden-xs">&nbsp;</div>
                <div class="sep60px hidden-xs">&nbsp;</div>
                <h1 class="text-lightblue gothamrounded font28px margin0 text-center">Hoe werkt het</h1>
                <div class="sep60px">&nbsp;</div>
            </div><!--col-xs-12-->
        </div><!--row-->
    </div><!--container-->
</section>

<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
	
	the_content();
	
		
	} // end while
} // end if
?>
<!--area-6 ends-->
<div class="sep60px hidden-xs">&nbsp;</div>
<div class="sep30px hidden-sm">&nbsp;</div>
<div class="footerinsidebg">&nbsp;</div>
</div>


<?php 
get_footer();

?>
<script type="text/javascript">
	$(function() {
		
		$("#myPartnerRegister").validate({
			rules: {
				txtPassword: {required:true},
				txtEmail: {required:true,email:true},
				txtPhone: {required:true},
				txtPass: {required:true}
			}
		});
		
	});
</script>

</body>
</html>