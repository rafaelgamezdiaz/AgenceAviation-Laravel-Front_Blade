/* Send the Get In Touch Form */
$("#contact_form_submit").submit(function(e){
    e.preventDefault();
    var url = '/getintouch';

    var name = $('#name').val();
    var email = $('#email').val();
    var message = $('#message').val();

    
    if(!name || !email || !message) {
        /* VALIDATIONS */
        if (!name) {
            $('#name').removeClass('error');
            $('#name').addClass('error').attr('placeholder','Please Enter Name');
        }else{
            $('#name').removeClass('error');
        }
        if (!email) {
                $('#email').removeClass('error');
                $('#email').addClass('error').attr('placeholder','Please Enter Email')
            }else{
                $('#email').removeClass('error');
            }
        if (!message) {
                $('#message').removeClass('error');
                $('#message').addClass('error').attr('placeholder','Please Enter Your Message')
            }else{
                $('#message').removeClass('error');
            }
    }else{
        var token = $('#token').val(); // Token CSRF
        $.ajax({
            type: 'POST',
            url: url,
            data: {
                name: name,
                email: email,
                message: message
            },
            dataType: 'json',
            headers: { 'X-CSRF-TOKEN': token },
            beforeSend: function(){
                $('#submit-btn').html('SENDING ...');
            },
            success: function(result){
                $('#submit-btn').html('Get in Touch');
                toast = toastr['info'](result.message, 'Success!'); 
            },
            error: function(message){
                console.log('Something happend!');
                toast = toastr['error']('Something happend!', 'Sorry'); 
            }
        });
    }
});