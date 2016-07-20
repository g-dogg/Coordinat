$(document).ready(function() {

	$(".mainHead").parallax({imageSrc: "img/bg.jpg"});

	function heightDetect($percentage) {
		$(".mainHead").css("height", $(window).height() * $percentage );
		$(".about").css("height", $(window).height() * $percentage );
		$(".contacts").css("height", $(window).height() * $percentage );
	};
	heightDetect(1);
	$(window).resize(function() {
		heightDetect();
	});

      function changePwd(userID) {
		console.log("js - changePwd()");
            $.ajax({
		type: 'POST',
		async: false,
		url: '/cabinet/changePwd',
		dataType: 'json'
            });
        };


            $(".logon").click(function(){
			$(".logonForm").css("opacity", ".95");
			$(".logonForm").fadeIn(800);

		//$(".logonForm").removeClass("hidden");
		//$("logonForm").animated("FadeInDown", "fadeOutUp");
            });


        function getData(formObject) {
		var hData = [];
		$('input, textarea,select', formObject).each(function() {
			if(this.name && this.name !== '') {
				hData[this.name] = this.value;
				console.log('hData[' + this.name + ']=' + hData[this.name]);
			}
		});
		return hData;
	}

        function logonUser() {
		//var postData = getData('#registerBox');
		var login = $('#username').val();
		var pwd = $('#password').val();
		var postData = "username="+login+"&password="+pwd;


		$.ajax({
                    type: 'POST',
                    async: false,
                    url: "/user/logonUser/", //TODO: url до action регистрацииюзера
                    data: postData,
                    dataType: 'json',
                    success: function(data) {
				if(data['success']) {
                            alert('Регистрация успешна'); //TODO: заменить на что-то более симпатичное
                            //Тут скрываем форму и показываем инфо о юзере
				}
				else {
                            alert(data['message']);
				}
                    }
		});
	}

	$('#changePwd').bind('click', function() {
		document.location.replace('changePassword');
	});
	$('#addProblem').bind('click', function() {
		document.location.replace('addProblem');
	});
	$('#editPersonal').bind('click', function() {
		document.location.replace('editPersonal');
	});

	$("#pfGrid").mixItUp();

	$(".toggle_mnu").click(function() {
		$(".sandwich").toggleClass("active");
	});

	$(".top_mnu ul a").click(function() {
		$(".top_mnu").fadeOut(600);
		$(".sandwich").toggleClass("active");
		$(".top_text").css("opacity", "1");
	}).append("<span>");

	$(".toggle_mnu").click(function() {
		if ($(".top_mnu").is(":visible")) {
			$(".top_text").css("opacity", "1");
			$(".top_mnu").fadeOut(600);
			$(".top_mnu li a").removeClass("fadeInUp animated");
		} else {
			$(".top_text").css("opacity", ".1");
			$(".top_mnu").fadeIn(600);
			$(".top_mnu li a").addClass("fadeInUp animated");
		};
	});

        function showLogon() {
            $(".logon").click(function(){
			$(".logonForm").css("opacity", ".95");
			$(".logonForm").fadeIn(800);

		//$(".logonForm").removeClass("hidden");
		//$("logonForm").animated("FadeInDown", "fadeOutUp");
            });
        }
	//form validation
	$(".newPassword, .confirmNewPassword").jqBootstrapValidation();
	$(".oldPassword").jqBootstrapValidation();



/*
	$('#oldPassword').valid8('Введите старый пароль');
	function doesPasswordFieldsMatch(values){
    		if(values.password == values.verification) {
    			return {valid:true};
        			//$(".fa fa-check-square").removeClass("hidden");
    		}
    		else {
    			return {valid:false, message:'Passwords does not match'}
    		}

		}

	$('#inputPassword').valid8('Password is required');
	$('#inputConfirmPassword').valid8({
    	'jsFunctions': [
        		{ function: doesPasswordFieldsMatch, values: function(){
                		return { password: $('#inputPassword').val(), verification: $('#inputConfirmPassword').val() }
            		}
        		}
    	]
	});
	 $('#inputPassword').valid8({
        		'regularExpressions': [
            		{ expression: /^[a-z0-9_-]{8,18}$/, errormessage: 'You can only use the letters A-Z and numbers'}
        		]
    	});
*/


    $(".titleWrapper .logo").animated("fadeInDown", "bounceOut");
	$(".titleWrapper h3").animated("fadeInDown", "fadeOutUp");
	$(".about .abImg1").animated("flipInX", "flipOutX");
	$(".about .abImg2").animated("flipInX", "flipOutX");
	$(".about .abImg3").animated("flipInX", "flipOutX");
	$(".about .abImg4").animated("flipInX", "flipOutX");

	$(".top_mnu ul a, .sendRequest a").mPageScroll2id();

});

$(window).load(function() {

	$(".loaderInner").fadeOut();
	$(".loader").delay(300).fadeOut("slow");
	$(".mainHead .titleWrapper h1").animated("fadeInDown", "fadeOutUp");
	$(".mainHead .titleWrapper p").animated("fadeInUp", "fadeOutDown");
	$(".mainHead .titleWrapper .sendRequest").animated("fadeIn", "pulse");

});