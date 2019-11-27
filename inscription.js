
$(document).ready(function(){
    var error_email = '';
    var error_password = '';
    var error_password2 = '';
    var error_user = '';
    $('#email').keyup(function(){
        var email = $('#email').val();
        var dataString = 'email='+email;
        $.ajax({
            type: 'POST',
            url: '../core/check_mail.php',
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

    $('#user').keyup(function(){
        var pseudo = $('#user').val();
        var dataString = 'pseudo='+pseudo;

        $.ajax({
            type: 'POST',
            url: '../core/check_user.php',
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


    $('#btn_login_details').click(function(){


        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var userValid = /^[a-zA-Z0-9]+$/;
        if($.trim($('#email').val()).length == 0 || error_email!='')
        {
            error_email = 'Email is required';
            $('#error_email').text(error_email);
            $('#email').addClass('has-error');
        }


        if($.trim($('#password').val()).length == 0)
        {
            error_password = 'Password is required';
            $('#error_password').text(error_password);
            $('#password').addClass('has-error');
        }
        else
        {
            error_password = '';
            $('#error_password').text(error_password);
            $('#password').removeClass('has-error');
        }
        if($('#password2').val().length == 0)
        {
            error_password2 = 'confrim Password';
            $('#error_password2').text(error_password2);
            $('#password2').addClass('has-error');
        }
        else
        {
            error_password2 = '';
            $('#error_password2').text(error_password2);
            $('#password2').removeClass('has-error');
        }

        if($.trim($('#password2').val())!=$.trim($('#password').val()))
        {
            error_password2 = 'Password does not match';
            $('#error_password2').text(error_password2);
            $('#password2').addClass('has-error');
        }

        else
        {
            error_password2 = '';
            $('#error_password2').text(error_password2);
            $('#password2').removeClass('has-error');
        }
        if($.trim($('#user').val()).length == 0 || error_user!='')
        {
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
        if(!userValid.test($('#user').val()))
        {            $('.check_ok').hide();
            error_user = 'Username invalid';
            $('#error_username').text(error_user);
            $('#user').addClass('has-error');
        }
        else
        {

            error_user = '';
            $('#error_username').text(error_user);
            $('#user').removeClass('has-error');
        }

        if(error_email != '' || error_password != ''|| error_password2 != '' ||  error_user!='')
        {
            return false;
        }
        else
        {
            $('#list_login_details').removeClass('active active_tab1');
            $('#list_login_details').removeAttr('href data-toggle');
            $('#login_details').removeClass('active');
            $('#list_login_details').addClass('inactive_tab1');
            $('#list_personal_details').removeClass('inactive_tab1');
            $('#list_personal_details').addClass('active_tab1 active');
            $('#list_personal_details').attr('href', '#personal_details');
            $('#list_personal_details').attr('data-toggle', 'tab');
            $('#personal_details').addClass('active in');
        }
    });

    $('#previous_btn_personal_details').click(function(){
        $('#list_personal_details').removeClass('active active_tab1');
        $('#list_personal_details').removeAttr('href data-toggle');
        $('#personal_details').removeClass('active in');
        $('#list_personal_details').addClass('inactive_tab1');
        $('#list_login_details').removeClass('inactive_tab1');
        $('#list_login_details').addClass('active_tab1 active');
        $('#list_login_details').attr('href', '#login_details');
        $('#list_login_details').attr('data-toggle', 'tab');
        $('#login_details').addClass('active in');
    });

    $('#btn_personal_details').click(function(){
        var error_first_name = '';
        var error_last_name = '';
        var error_birth_day = '';
        var error_birth_day2 = '';
        var error_birth_day3 = '';
        if($.trim($('#first_name').val()).length == 0)
        {
            error_first_name = 'First Name is required';
            $('#error_first_name').text(error_first_name);
            $('#first_name').addClass('has-error');
        }
        else
        {
            error_first_name = '';
            $('#error_first_name').text(error_first_name);
            $('#first_name').removeClass('has-error');
        }

        if($.trim($('#last_name').val()).length == 0)
        {
            error_last_name = 'Last Name is required';
            $('#error_last_name').text(error_last_name);
            $('#last_name').addClass('has-error');
        }
        else
        {
            error_last_name = '';
            $('#error_last_name').text(error_last_name);
            $('#last_name').removeClass('has-error');
        }
        if($.trim($('#birthday').val()).length == 0)
        {
            error_birth_day = 'birthday is required';
            $('#error_birthday').text(error_birth_day);
            $('#birthday').addClass('has-error');
        }
        else
        {
            error_birth_day = '';
            $('#error_birthday').text(error_birth_day);
            $('#birthday').removeClass('has-error');
        }
        var Cnow=new Date();
        var birthday=new Date($.trim($('#birthday').val()));
        if(Cnow.getFullYear()- birthday.getFullYear()<18 && Cnow.getFullYear()- birthday.getFullYear()>0)
        {
            error_birth_day3 = ' under 18 YO ';
            $('#error_birthday3').text(error_birth_day3);
            $('#birthday').addClass('has-error');
        }
        else
        {
            error_birth_day3 = '';
            $('#error_birthday3').text(error_birth_day3);
            $('#birthday').removeClass('has-error');
        }
        if(Cnow.getFullYear()- birthday.getFullYear()>90 ||Cnow.getFullYear()- birthday.getFullYear()<=0 )
        {
            error_birth_day2 = 'invalid date ';
            $('#error_birthday2').text(error_birth_day2);
            $('#birthday').addClass('has-error');
        }
        else
        {
            error_birth_day2 = '';
            $('#error_birthday2').text(error_birth_day2);
            $('#birthday').removeClass('has-error');
        }
        if(error_first_name != '' || error_last_name != '' ||  error_birth_day!=''||  error_birth_day2!=''||  error_birth_day3!='')
        {
            return false;
        }
        else
        {
            $('#list_personal_details').removeClass('active active_tab1');
            $('#list_personal_details').removeAttr('href data-toggle');
            $('#personal_details').removeClass('active');
            $('#list_personal_details').addClass('inactive_tab1');
            $('#list_contact_details').removeClass('inactive_tab1');
            $('#list_contact_details').addClass('active_tab1 active');
            $('#list_contact_details').attr('href', '#contact_details');
            $('#list_contact_details').attr('data-toggle', 'tab');
            $('#contact_details').addClass('active in');
        }
    });

    $('#previous_btn_contact_details').click(function(){
        $('#list_contact_details').removeClass('active active_tab1');
        $('#list_contact_details').removeAttr('href data-toggle');
        $('#contact_details').removeClass('active in');
        $('#list_contact_details').addClass('inactive_tab1');
        $('#list_personal_details').removeClass('inactive_tab1');
        $('#list_personal_details').addClass('active_tab1 active');
        $('#list_personal_details').attr('href', '#personal_details');
        $('#list_personal_details').attr('data-toggle', 'tab');
        $('#personal_details').addClass('active in');
    });

    $('#btn_contact_details').click(function(){
        var error_address = '';
        var error_mobile_no = '';
        var mobile_validation = /^\d{8}$/;
        if($.trim($('#address').val()).length == 0)
        {
            error_address = 'Address is required';
            $('#error_address').text(error_address);
            $('#address').addClass('has-error');
        }
        else
        {
            error_address = '';
            $('#error_address').text(error_address);
            $('#address').removeClass('has-error');
        }

        if($.trim($('#mobile_no').val()).length == 0)
        {
            error_mobile_no = 'Mobile Number is required';
            $('#error_mobile_no').text(error_mobile_no);
            $('#mobile_no').addClass('has-error');
        }
        else
        {
            if (!mobile_validation.test($('#mobile_no').val()))
            {
                error_mobile_no = 'Invalid Mobile Number';
                $('#error_mobile_no').text(error_mobile_no);
                $('#mobile_no').addClass('has-error');
            }
            else
            {
                error_mobile_no = '';
                $('#error_mobile_no').text(error_mobile_no);
                $('#mobile_no').removeClass('has-error');
            }
        }
        if(error_address != '' || error_mobile_no != '')
        {
            return false;
        }
        else
        {
            $('#btn_contact_details').attr("disabled", "disabled");
            $(document).css('cursor', 'prgress');
            $("#register_form").submit();
        }

    });

});
