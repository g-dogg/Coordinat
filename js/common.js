$(document).ready(function () {

    $(".mainHead").parallax({imageSrc: "img/bg.jpg"});

    function heightDetect($percentage) {
        $(".mainHead").css("height", $(window).height() * $percentage);
        $(".about").css("height", $(window).height() * $percentage);
        $(".contacts").css("height", $(window).height() * $percentage);
        $(".mainMap").css("height", $(window).height() * $percentage);
    }
    ;
    heightDetect(1);
    $(window).resize(function () {
        heightDetect();
    });

    /*
     *   map
     */
     /**
      * [description]
      * @param  {[type]} ){                  	var login [description]
      * @return {[type]}     [description]
      */
     $('#registerButton').on('click', function(){
     	var login = $('#regusername').val();
    	var email = $('#regemail').val();
    	var pwd = $('#regpassword').val();
    	var postData = "username="+login+"&email="+email+"&password="+pwd;
    	console.log(postData);

        $.ajax({
            type: 'POST',
            cache: false,
            async: false,
            url: "/user/register/",
            data: postData,
            dataType: 'json',
            success: function (data) {
                if (data['success']) {
                    console.log('Успех');
                    alert(data['message']);
                }
                else {
                    console.log('Не Успех');
                }
            }
        });
     });

    $(".logon").click(function () {
        $(".logonForm").css("opacity", ".95");
        $(".logonForm").fadeIn(800);

        //$(".logonForm").removeClass("hidden");
        //$("logonForm").animated("FadeInDown", "fadeOutUp");
    });
    $(".close").on('click', function(){
        $(".logonForm").css("opacity", "0");
        $(".logonForm").fadeOut(800);
    });

    $('#loginUser').on('click', function(){

    });


    $('#changePwd').bind('click', function () {
        document.location.replace('changePassword');
    });
    $('#addProblem').bind('click', function () {
        document.location.replace('addProblem');
    });
    $('#editPersonal').bind('click', function () {
        document.location.replace('editPersonal');
    });

    $("#pfGrid").mixItUp();

    $(".toggle_mnu").click(function () {
        $(".sandwich").toggleClass("active");
    });

    $(".top_mnu ul a").click(function () {
        $(".top_mnu").fadeOut(600);
        $(".sandwich").toggleClass("active");
        $(".top_text").css("opacity", "1");
    }).append("<span>");

    $(".toggle_mnu").click(function () {
        if ($(".top_mnu").is(":visible")) {
            $(".top_text").css("opacity", "1");
            $(".top_mnu").fadeOut(600);
            $(".top_mnu li a").removeClass("fadeInUp animated");
        } else {
            $(".top_text").css("opacity", ".1");
            $(".top_mnu").fadeIn(600);
            $(".top_mnu li a").addClass("fadeInUp animated");
        }
        ;
    });


    $(".titleWrapper .logo").animated("fadeInDown", "bounceOut");
    $(".titleWrapper h3").animated("fadeInDown", "fadeOutUp");
    $(".about .abImg1").animated("flipInX", "flipOutX");
    $(".about .abImg2").animated("flipInX", "flipOutX");
    $(".about .abImg3").animated("flipInX", "flipOutX");
    $(".about .abImg4").animated("flipInX", "flipOutX");

    $(".top_mnu ul a, .sendRequest a").mPageScroll2id();

});

$(window).load(function () {

    $(".loaderInner").fadeOut();
    $(".loader").delay(300).fadeOut("slow");
    $(".mainHead .titleWrapper h1").animated("fadeInDown", "fadeOutUp");
    $(".mainHead .titleWrapper p").animated("fadeInUp", "fadeOutDown");
    $(".mainHead .titleWrapper .sendRequest").animated("fadeIn", "pulse");

});

/*
    function getData(formObject) {
        var hData = [];
        $('input, textarea, select', formObject).each(function () {
            if (this.name && this.name !== '') {
                hData[this.name] = this.value;
                console.log('hData[' + this.name + ']=' + hData[this.name]);
            }
        });
        return hData;
    }

    function registerUser() {
	var login = $('#regusername').val();
    	var email = $('#regemail').val();
    	var pwd = $('#regpassword').val();
    	var postData = "username="+login+"&email="+email+"&password="+pwd;
    	console.log(postData);

        $.ajax({
            type: 'POST',
            cache: false,
            async: false,
            url: "/user/register/",
            data: postData,
            dataType: 'json',
            success: function (data) {
                if (data['success']) {
                    console.log('Успех');
                }
                else {
                    console.log('Не Успех');
                }
            }
        });
    }
    */