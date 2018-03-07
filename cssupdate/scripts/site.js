$(document).ready(function(){
    $('#contactForm').validate({
        rules: {
            name: {
                required: true
            },            
            email: {
                required: true,
                email: true
            },
            commentsFeedback: {
                required: true
            }
        },
        messages: {
            name: {
                required: 'First name is required.'
            },           
            email: {
                required: 'Email address is required.',
                email: 'Invalid email address.'
            },
            commentsFeedback: {
                required: 'Message section is required.'
            }
        }
    });
       
    $('#submitBtn').click(function(){
        if($('#contactForm').valid){
            $('#contactForm').submit();
        }
    });
});