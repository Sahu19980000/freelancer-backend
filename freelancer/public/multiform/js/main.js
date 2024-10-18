$(function(){
	/*$("#wizard").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        transitionEffectSpeed: 500,
        labels: {
            finish: "Submit",
            next: "Next",
            previous: "Previous"
        }
    });
    
    $('.wizard > .steps li a').click(function(){
    	$(this).parent().addClass('checked');
		$(this).parent().prevAll().addClass('checked');
		$(this).parent().nextAll().removeClass('checked');
    });
    */

    var formWizard = $("#wizard");
    // alert('hiiii');
    // Form validation with jQuery
    formWizard.validate({
        rules: {
            first_name: "required",
            last_name: "required",
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
            },
            confirm_password: {
                required: true,
                minlength: 5,
                equalTo: "#password"
            },
            address: "required",
            city: "required",
            zipcode: "required",
            country: "required",
            agree: "required"
        },
        messages: {
            first_name: "Please enter your first name",
            last_name: "Please enter your last name",
            email: "Please enter a valid email address",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            confirm_password: {
                required: "Please confirm password",
                minlength: "Your password must be at least 5 characters long",
                equalTo: "Please enter the same password as above"
            },
            address: "Please enter your address",
            city: "Please enter your city",
            zipcode: "Please enter your zipcode",
            country: "Please select your country",
            agree: "Please accept our policy"
        }
    });

    // Multi-step form handler
    formWizard.steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        transitionEffectSpeed: 500,
        labels: {
            finish: "Submit",
            next: "Next",
            previous: "Previous"
        },
        onStepChanging: function (event, currentIndex, newIndex){
            formWizard.validate().settings.ignore = ":disabled,:hidden";
            if(formWizard.valid()){
                $('.wizard > .steps li a#wizard-t-'+newIndex).parent().addClass('checked');
                $('.wizard > .steps li a#wizard-t-'+newIndex).parent().prevAll().addClass('checked');
                $('.wizard > .steps li a#wizard-t-'+newIndex).parent().nextAll().removeClass('checked');
            }
            return formWizard.valid();
        },
        onFinishing: function (event, currentIndex){
            formWizard.validate().settings.ignore = ":disabled";
            return formWizard.valid();
        },
        onFinished: function (event, currentIndex){
            // Submit form data
            formSubmission();
        }
    });

    // Custom jQuery steps button
    $('.forward').click(function(){
    	$("#wizard").steps('next');
    });
    $('.backward').click(function(){
        $("#wizard").steps('previous');
    });
});

// Post form data via ajax request
function formSubmission(){
    $.ajax({
        type:'POST',
        url:'rajaform_submit.php',
        dataType: "json",
        data: $('#wizard').serialize()+'&submit=1',
        beforeSend: function () {
            $('.form-content').css('opacity', '.5');
            $('.actions ul li:nth-child(3) a').css('pointer-events', 'none');
            $( '.actions ul li:nth-child(3) a' ).text('Submitting...');
        },
        success:function(data){
            if(data.status == 1){
                $('#wizard')[0].reset();
                $('.steps').remove();
                $('.actions').remove();
                $('.image-holder img').attr('src', 'images/wizard-4.png');
                $('.form-content').css('position', 'relative');
                $('.form-content').html('<div class="status"><p class="success">'+data.msg+'</p></div>');
            }else{
                $('.status').html('<p class="error">'+data.msg+'</p>');
            }

            $('.actions ul li:nth-child(3) a').css("pointer-events", "auto");
            $( ".actions ul li:nth-child(3) a" ).text( "Submit" );
            $('.form-content').css('opacity', '');
        }
    });
}
