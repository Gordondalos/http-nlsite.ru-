$(document).ready(function(){


// судя по всему валидация формы
    $("#order").validate();
// судя по всему обратный отсчет
    count.seconds = parseInt($("#seconds_remain").text(), 10);
    count.minutes = parseInt($("#minutes_remain").text(), 10);
    count.hours = parseInt($("#hours_remain").text(), 10);
    count.days = parseInt($("#days_remain").text(), 10);
    function count () {
        count.seconds--;
        if(count.seconds < 0){
            count.seconds = 59;
            count.minutes--;
            if(count.minutes < 0){
                count.minutes = 59;
                count.hours--;
                if(count.hours < 0) {
                    count.hours = 23;
                    count.days--;
                }
            }
        }

        $("#seconds_remain").html(count.seconds);
        $("#minutes_remain").html(count.minutes);
        $("#hours_remain").html(count.hours);
        $("#days_remain").html(count.days);
    }

    setInterval(count, 1000);
// конец обратного отсчета



// какойто код от тарифов
        $('.btn-primary').on('click', function(){
        });
        $('.krest').on('click', function(){
            $('.fade').css('display','none')
        });
        $("form.contact").validate();

    $(document).on("click", ".modalOrder", function () {
        var tariff = $(this).data('tariff');
        $(".contact #tariff").val(tariff);
    });


        $("button.submit").click(function(){
            $.ajax({
                type: "POST",
                url: "mail.php", //process to mail
                data: $('form.contact').serialize(),
                success: function(msg){
                    $(".modal").modal('hide'); //hide popup
                },
                error: function(){
                    alert("Ошибка отправки. Попробуйте позже или свяжитесь с нами");
                }
            });
        });

// какойто код от тарифов

















    var $container = $('.portfolioContainer');
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });

    //$('.portfolioFilter a').click(function () {
    //    $('.portfolioFilter .current').removeClass('current');
    //    $(this).addClass('current');
    //
    //    var selector = $(this).attr('data-filter');
    //    $container.isotope({
    //        filter: selector,
    //        animationOptions: {
    //            duration: 750,
    //            easing: 'linear',
    //            queue: false
    //        }
    //    });
    //    return false;
    //});

// вау эфекты
    new WOW().init();
// вау эфекты


    $('.countBox').CountUpCircle({
        duration: 500, // In ms, default: 5000
        opacity_anim: false,
        step_divider: 1
    });



    function winOpen() {
        var win;
        var w = 300,
            h = 300,
            l = (screen.width - w) / 2,
            t = (screen.height - h) / 2,
            p = "width="+w+", height="+h+", top="+t+", left="+l;
        win = window.open("", "", p);
        win.focus();
    }


    var is_chrome = navigator.userAgent.indexOf('Chrome') > -1;
    var is_explorer = navigator.userAgent.indexOf('MSIE') > -1;
    var is_firefox = navigator.userAgent.indexOf('Firefox') > -1;
    var is_safari = navigator.userAgent.indexOf("Safari") > -1;
    var is_opera = navigator.userAgent.toLowerCase().indexOf("op") > -1;


// прокрутка к элементу
    $(".rigth-sidebar").click(function () {
        //var elementClick = $(this).attr("name");
        //var destination = $('.'+elementClick).offset().top-100;
        var destination = $('.article').offset().top-100;
        if (is_safari) {
            $('body').animate({ scrollTop: destination }, 1000); //1100 - ñêîðîñòü
        } else {
            $('html').animate({ scrollTop: destination }, 1000);
        }
        return false;
    });


    $(function() {
        $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
        $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
        $("#tabs li a").css("outline","none");
    });




});











