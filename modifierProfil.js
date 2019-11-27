$(document).ready(function(){
    var error_email = '';
    var error_user = '';
    $('#email').keyup(function(){
        var email = $('#email').val();
        var dataString = 'email='+email;
        $.ajax({
            type: 'POST',
            url: '../core/check_mail2.php',
            data: dataString,
            success:function(data){
                var responseData = jQuery.parseJSON(data)
                if(responseData.status=='error')
                {
                    $('.check_ok1').hide();
                    $('.check_false1').fadeIn();
                    $('.check_false1').text(responseData.message);
                    error_email = 'error';
                    $('#error_email').hide();
                    return false;
                }
                else
                {
                    $('.check_false1').hide();
                    $('.check_ok1').fadeIn();
                    $('.check_ok1').text(responseData.message);
                    error_email = '';
                    $('#error_email').hide();
                }
            }
        });
        return false;
    });

    $('.check_ok').hide();
    $('.check_false').hide();

    $('#username').keyup(function(){
        var pseudo = $('#user').val();
        var dataString = 'pseudo='+pseudo;

        $.ajax({
            type: 'POST',
            url: '../core/check_user2.php',
            data: dataString,
            success:function(data){
                var responseData = jQuery.parseJSON(data)
                if(responseData.status=='error')
                {
                    $('.check_ok').hide();
                    error_user='';
                    $('#error_username').text(error_user);
                    $('.check_false').fadeIn();
                    $('.check_false').text(responseData.message);
                    error_user = 'error';
                    $('#error_user').hide();
                    return false;
                }
                else
                {      error_user='';
                    $('#error_username').text(error_user);
                    $('.check_false').hide();
                    $('.check_ok').fadeIn();
                    $('.check_ok').text(responseData.message);
                    error_user = '';
                    $('#error_user').hide();
                }
            }
        });
        return false;
    });
    $('#id').click(function(){


        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var userValid = /^[a-zA-Z0-9]+$/;
        if($.trim($('#email').val()).length == 0 || error_email!='')
        {
            error_email = 'Email is required';
            $('#error_email').text(error_email);
            $('#email').addClass('has-error');
        }

        if($.trim($('#username').val()).length == 0 || error_user!='')
        {          $('.check_false').hide();
            error_user = 'Username is required';
            $('#error_username').text(error_user);
            $('#user').addClass('has-error');
        }
        else
        {
            error_user = '';
            $('#error_username').text(error_user);
            $('#user').removeClass('has-error');
        }
        if(!userValid.test($('#username').val()))
        {            $('.check_ok').hide();
            error_user = 'Username invalid';
            $('#error_username').text(error_user);
            $('#user').addClass('has-error');
        }
        else
        {
            $('.check_false').hide();
            error_user = '';
            $('#error_username').text(error_user);
            $('#user').removeClass('has-error');
        }

        if(error_email != '' ||  error_user!='')
        {
            return false;
        }

    });

});
