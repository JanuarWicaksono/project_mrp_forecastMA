$(document).ready(function(){

    //v_employees
    $('#employee-form').validate({
        rules: {
            'name': {
                required: true
            },
            'level': {
                required: true
            },
            'gender': {
                required: true
            },
            'email': {
                required: true
            },
            'phone': {
                required: true,
                number: true
            },
            'username': {
                required: true
            },
            'password': {
                required: true
            },
            'cpassword': {
                required: true,
                equalTo: "#form-password"
            },
            'address': {
                required: false
            }
        },
        highlight: function (input) {
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.form-group').append(error);
        }
    });

    //v_levels
    $('#level-form').validate({
        rules: {
            'level-name': {
                required: true
            }
        },
        highlight: function (input) {
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.form-group').append(error);
        }
    });


});