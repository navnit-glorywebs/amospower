jQuery(document).ready(function ($) {

    $('#phone').keypress(function(event) {
        var keycode = event.which;
        if (!(event.shiftKey == false && (keycode == 43 || keycode == 46 || keycode == 8 || keycode == 37 || keycode == 39 || (keycode >= 48 && keycode <= 57)))) {
            event.preventDefault();
        }
    });

    //Input validation text only
    $('#fname, #lname').bind('keyup blur', function () {
        var node = $(this);
        node.val(node.val().replace(/[^A-Za-z ']/g, ''));
    });

    $(".signupbtn").click(function() {
        var form = $("#signupform");
        form.validate({
            errorElement: 'span',
            errorClass: 'help-block',
            rules: {
                emailadd: {
                    required: true,
                    email: true
                },
            },
        });
    });

    $(".submitnow").click(function() {
        var form = $("#getintouch");
        form.validate({
            errorElement: 'span',
            errorClass: 'help-block',
            rules: {
                fname: {
                    required: true,
                },
                lname: {
                    required: true,
                },
                emailadd: {
                    required: true,
                    email: true
                },
                contact: {
                    required: true,
                    minlength: 9,
                    maxlength: 14,
                }
            },
        });
    });


    // Main Menu 
    $( '.hamburger-menu' ).on( 'click', function() {
        $(this).toggleClass('open');
        $('.site-navigation').toggleClass('show');
    });

    // Solution Slider
    $('.solution-box .owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots: true,
        responsive:{
            0:{
                items:1
            }
        }
    });

    $('.autonomous-box .owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots: true,
        responsive:{
            0:{
                items:1
            }
        }
    });

});


$(window).scroll(function() {
    if ($(this).scrollTop() > 10){  
        $('#site-header').addClass("sticky");
    }
    else{
        $('#site-header').removeClass("sticky");
    }
});
