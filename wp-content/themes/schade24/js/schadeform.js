$(document).ready(function() {
    var current_fs, next_fs, previous_fs;
    var left, opacity, scale;
    var animating;
    
    $(".next").click(function() {

        $('html, body').animate({
            scrollTop: $("#progressbar").offset().top - 80
        }, 500);

        $("#msform").validate({
            rules: {
				'txtName': {required:true},
				'txtLName': {required:true},
				'txtPO': {required:true},
				'txtAddress': {required:true},
				'txtStreet': {required:true},
				'txtCity': {required:true},
				'txtEmail': {required:true,email:true},
				'txtCEmail': {required:true, equalTo : "#txtEmail" },
				'txtPass': {required:true},
				'txtCPass': {required:true, equalTo : "#txtPass" },
				'txtPhone': {required:true},
				'dateofdamage': {required:true},
				'FKCATID': {required:true},
				'txtLicensePlate': {required:true},
				'txtOtherVehicleLicensePlate': {required:true},
				'txtMedicalCenterName': {required:true},
				'txtEmployerName': {required:true}
			},
			submitHandler: function(form) {
				alert(1);
				return false;
				/*$.ajax({
					url : "<?=site_url()?>/page/viewclaimdetailsupload/<?=$ID?>",
					method : "POST",
					data: new FormData(this),
					contentType:false,
					processData:false,
					cache: false,
					success: function(data){
						$('#txtuploadothers_select').val('');
						
					}
				});*/
			}
        });
        if ((!$('#msform').valid())) {
            return true;
        }
        if (animating) return false;
        animating = true;
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        next_fs.show();
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                scale = 1 - (1 - now) * 0.2;
                left = (now * 50) + "%";
                opacity = 1 - now;
                current_fs.css({
					'transform': 'scale('+scale+')',
					'position': 'absolute'
				  });
                next_fs.css({
                    'left': left,
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            easing: 'easeInOutExpo'
        });
    });
    $(".submit").click(function() {
        
        $('html, body').animate({
            scrollTop: $("#progressbar").offset().top - 80
        }, 500);

        $("#msform").validate({
           rules: {
				'txtName': {required:true},
				'txtLName': {required:true},
				'txtPO': {required:true},
				'txtAddress': {required:true},
				'txtStreet': {required:true},
				'txtCity': {required:true},
				'txtEmail': {required:true,email:true},
				'txtCEmail': {required:true, equalTo : "#txtEmail" },
				'txtPass': {required:true},
				'txtCPass': {required:true, equalTo : "#txtPass" },
				'txtPhone': {required:true},
				'dateofdamage': {required:true},
				'FKCATID': {required:true},
				'txtLicensePlate': {required:true},
				'txtOtherVehicleLicensePlate': {required:true},
				'txtMedicalCenterName': {required:true},
				'txtEmployerName': {required:true}
			},
			submitHandler: function(form) {
				alert(1);
				return false;
				/*$.ajax({
					url : "<?=site_url()?>/page/viewclaimdetailsupload/<?=$ID?>",
					method : "POST",
					data: new FormData(this),
					contentType:false,
					processData:false,
					cache: false,
					success: function(data){
						$('#txtuploadothers_select').val('');
						
					}
				});*/
			}
        });
        if ((!$('#msform').valid())) {
            return false;
        }
        if (animating) return false;
        animating = true;
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        next_fs.show();
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                scale = 1 - (1 - now) * 0.2;
                left = (now * 50) + "%";
                opacity = 1 - now;
                current_fs.css({
				'transform': 'scale('+scale+')',
				'position': 'absolute'
			  });
                next_fs.css({
                    'left': left,
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            easing: 'easeInOutExpo'
        });
    });
    $(".previous").click(function() {

        $('html, body').animate({
            scrollTop: $("#progressbar").offset().top - 80
        }, 500);

        if (animating) return false;
        animating = true;
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        previous_fs.show();
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                scale = 0.8 + (1 - now) * 0.2;
                left = ((1 - now) * 50) + "%";
                opacity = 1 - now;
                current_fs.css({
                    'left': left
                });
                previous_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'opacity': opacity,
                    /*'position': 'absolute'*/
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
                previous_fs.css({
                    'position': 'relative'
                });
            },
            easing: 'easeInOutExpo'
        });
    });
});