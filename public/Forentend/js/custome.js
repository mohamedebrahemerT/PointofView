$(document).ready(function(){

    // toggle password
    $(".toggle-password").on('click', function () {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var inputt = $($(this).attr("toggle"));
        if (inputt.attr("type") == "password") {
            inputt.attr("type", "text");
        } else {
            inputt.attr("type", "password");
        }
    });


    // owl carousel
    $('.services .owl-carousel').owlCarousel({
        rtl:true,
        loop:true,
        autoplay:true,
        margin:10,
        nav:true,
        navText: ["<span class='icon-arrow-right'></span>","<span class='icon-arrow-left'></span>"],
        dots:false,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:4,
                nav:true,
                loop:false
            }
        }
    })

    // slider pause 
    $('.carousel').carousel({
        pause: false
    })

    // toggle radio buttons shipment details
    $("[name=toggler]").click(function(){
        $('.toHide').hide();
        $("#blk-"+$(this).val()).show();
    });

    // toggle fee details
    $('.details').click(function(){
        $('.fee_details').toggleClass('toHide')
    });

  });