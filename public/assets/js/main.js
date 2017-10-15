    $(document).ready(function() {
        $("#login-box #password").keypress(function(event) {
            var keycode = (event.keyCode ? event.keyCode : event.which);
            if (keycode == '13') {
                logInSubmit();
            }
        })

        hexAnimate();
    });

    function hexAnimate() {
        $.each($('.hexagon'), function(i, el) {
            setTimeout(function() {
                $(el).animate({
                    'opacity': 1.0
                }, 450);
            }, 500 + (i * 200));

        });
    }

    function b(element) {
        console.log(element);
    }

    function menuSelect(element) {
        $('.navbar-nav li.active').removeClass('active');
        $(element).addClass('active');
    }

    function logInSubmit() {
        var username = $('#login-box #username').val();
        var password = $('#login-box #password').val();
        $('#login-box .alert-box').hide();
        if (username != 'admin' || password != 'password') {
            $('#login-box .alert-box').fadeIn(500);
        } else {

        }
    }

    function registerSubmit() {
        var pasword = $('#register-box #password').val();
        var rePassword = $('#register-box #re-password').val();
        $('#register-box .alert-box').hide();
        if (pasword != rePassword) {
            $('#register-box .alert-box').fadeIn(500);
        } else {

        }
    }

    function showBalance() {
        if ($('.header-inventory').hasClass('show')) {
            $('.header-inventory').removeClass('show')
            $('.header-inventory').hide();
            $('.header-btn').show()
        } else {
            $('.header-btn').hide()
            $('.header-inventory').addClass('show')
            $('.header-inventory').show();
        }

    }

    function paymentToggle(element, data) {
        if (data == 'counter') {
            $('.payment-type-btn').removeClass('active');
            $(element).addClass('active')
            $('.payment-card-main').addClass('hidden');
            $('.payment-counter-main').removeClass('hidden');
        } else {
            $('.payment-type-btn').removeClass('active');
            $(element).addClass('active')
            $('.payment-counter-main').addClass('hidden');
            $('.payment-card-main').removeClass('hidden');
        }

    }

    function teacherMenuToggle(element, data) {
        if (data == 'profile') {
            $('.teacher-menu-btn').removeClass('active');
            $(element).addClass('active')
            $('.teach-profile-main').removeClass('hidden');
            $('.teach-edu-main').addClass('hidden');
            $('.teach-card-main').addClass('hidden');
            $('.teach-money-main').addClass('hidden');
        } else if (data == 'edu') {
            $('.teacher-menu-btn').removeClass('active');
            $(element).addClass('active')
            $('.teach-edu-main').removeClass('hidden');
            $('.teach-profile-main').addClass('hidden');
            $('.teach-card-main').addClass('hidden');
            $('.teach-money-main').addClass('hidden');
        } else if (data == 'card') {
            $('.teacher-menu-btn').removeClass('active');
            $(element).addClass('active')
            $('.teach-card-main').removeClass('hidden');
            $('.teach-profile-main').addClass('hidden');
            $('.teach-edu-main').addClass('hidden');
            $('.teach-money-main').addClass('hidden');
        } else {
            $('.teacher-menu-btn').removeClass('active');
            $(element).addClass('active')
            $('.teach-money-main').removeClass('hidden');
            $('.teach-profile-main').addClass('hidden');
            $('.teach-card-main').addClass('hidden');
            $('.teach-edu-main').addClass('hidden');

        }

    }