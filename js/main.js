$(document).ready(function(){
    
    new WOW().init();
    
    $(".burger").click(function(){
        $(".navlinks").toggle();
    });
    
    
    //Counter For Coming Event
    var eventDate = new Date("Oct 13, 2017 9:0:0").getTime();
    
    var counter = setInterval(countdown, 1000);
    
    function countdown() {
        var now = new Date().getTime();
        var timeLeft = eventDate - now;
        
        var hPd = 24 * 60 * 60 * 1000;    //Minutes Per Day
        var sPh = 60 * 60 * 1000;         // Seconds Per Hour
        var mPs = 60 * 1000;              // Millisecond Per Second
        
        var days = Math.floor(timeLeft / hPd);              //Num of Days
        var hours = Math.floor( (timeLeft%hPd) / sPh);      //Num of Hours
        var minutes = Math.floor( (timeLeft%sPh) / mPs);    //Num of Minutes
        var seconds = Math.floor( (timeLeft%mPs) / 1000);   //Num of Seconds
        
        $("#days").text(days + '\n Days');
        $("#hours").text(hours + '\n Hours');
        $("#minutes").text(minutes + '\n Minutes');
        $("#seconds").text(seconds + '\n Seconds');
        
        if(eventDate === 0) {
            clearInterval(counter);
            $("#finish").text("Living Now");
        }
    }
    
    var todayDate = new Date();
    
    $("#year").text(todayDate.getFullYear());
    
    //Animate When Click on navbar Elements
    
    //1- About Section
    $("[href='#about']").click(function() {
        $('html, body').animate({
            scrollTop: $("#about").offset().top
        }, 2000);
    });
    
    //2- Team Section
    $("[href='#team']").click(function() {
        $('html, body').animate({
            scrollTop: $("#team").offset().top
        }, 2000);
    });
    
    //3- Events Section
    $("[href='#events']").click(function() {
        $('html, body').animate({
            scrollTop: $("#events").offset().top
        }, 2000);
    });
    
    //4- IWD17 Section
    $("[href='#iwd17']").click(function() {
        $('html, body').animate({
            scrollTop: $("#iwd17").offset().top
        }, 2000);
    });
    
    //5- Membership Section
    $("[href='#membership']").click(function() {
        $('html, body').animate({
            scrollTop: $("#membership").offset().top
        }, 2000);
    });
    
    //6- Sponsers Section
    $("[href='#sponsers']").click(function() {
        $('html, body').animate({
            scrollTop: $("#sponsers").offset().top
        }, 2000);
    });
    
    //7- Sponsers Section
    $("[href='#contactus']").click(function() {
        $('html, body').animate({
            scrollTop: $("#contactus").offset().top
        }, 2000);
    });
    
    //GO TO TOP
    
    if ($('.gotoup').length) {
        var scrollTrigger = 0, // px
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('.gotoup').addClass('show');
                } else {
                    $('.gotoup').removeClass('show');
                }
            };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $('.gotoup').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }
    
    
    

});