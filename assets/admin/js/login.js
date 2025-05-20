var siteUrl = $("#siteUrl").attr('href');	
$(document).ready(function(){
    $('#authenticateAdminLogin').keydown(function(event){ 
        var id = event.key || event.which || event.keyCode || 0;   
        if (id == 13) {
            $('#authenticateAdminLogin').trigger('click');
        }
    });
    
    var id = event.key || event.which || event.keyCode || 0;   
    if (id == 13) {
        $('#authenticateAdminLogin').trigger('click');
    }
});
$(document).on('click','#authenticateAdminLogin',function() {
	if (authenticateAdminLogin()) {
		var frm = $("#login-frm").serialize();
		$.ajax({
			url : siteUrl+'admin/User/adminlogin',
			type : 'POST',
			data : frm,
			async: false,
			success : function(result) {
				if (result.indexOf("1") > -1) {
					window.location.replace(siteUrl+"admin/dashboard");
				}else if (result.indexOf("2") > -1) {
					$("#msgemail").show();
					$("#msgemail").html("Invalid Email & Pssword.");
				}
			}
		});
	}	
});

function authenticateAdminLogin() {
	var valid = true;
	var email = $("input[name='email']").val();
	var password = $("input[name='password']").val();	

    $(".message").html("&nbsp;");
	$(".message").css("font-size", "13px");
	$(".message").css("color", "red");
	$(".message").css("float", "left");
	$(".message").hide();
	if (email.length == 0 || emailValidate(email) == false) {
		valid = false;
		$('#msgemail').show();
		$('#msgemail').html('Enter email');
	}if (password.length == 0 || passwordValidate(password) == false) {
		valid = false;
		$("#msgpassword").html("Enter password");
		$("#msgpassword").show();
	}
	return valid;
}

function emailValidate(email) {
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
}
function checkcontactnumber(mobile) {
	var contactRegexStr = /^\d{10}$/;
	var isvalid = contactRegexStr.test(mobile);
	return isvalid;
}
function checkPincode(pincode) {
	var contactRegexStr = /^\d{6}$/;
	var isvalid = contactRegexStr.test(pincode);
	return isvalid;
}
function passwordValidate(password) {
    var reg = /^[^%\s]{6,}$/;
    var reg2 = /[a-zA-Z]/;
    var reg3 = /[0-9]/;
    return reg.test(password) && reg2.test(password) && reg3.test(password);
}

function checkOnlyDigit(mobile) {
	var regex = /^[0-9]+$/;
	return regex.test(mobile);
}

function validateName(e) {
    return /^[A-Z a-z]+$/.test(e)
}