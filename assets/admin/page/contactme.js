var siteUrl = $("#siteUrl").attr("href");
$(document).on("click", "#authenticateContact", function () {
  if (authenticateContact()) {
    var name = $("input[name='name']").val();
    var type = $("input[name='type']").val();
    var email = $("input[name='email']").val();
    var phone = $("input[name='phone']").val();
    var message = $("textarea[name='message']").val();
    var formData = new FormData();
    formData.append("type", type);
    formData.append("name", name);
    formData.append("email", email);
    formData.append("phone", phone);
    formData.append("message", message);
    $.ajax({
      url: siteUrl+"save-contact",
      type: "POST",
      data: formData,
      async: false,
      contentType: false,
      processData: false,
      success: function (result) {
        console.log(result);
        if (result == 1) {
          window.location.href = siteUrl + "thankyou";
        } else {
          window.location.reload();
        }
      },
    });
  }
});

function authenticateContact() {
  var valid = true;
  var name = $("input[name='name']").val();
  var email = $("input[name='email']").val();
  var phone = $("input[name='phone']").val();
  var message = $("textarea[name='message']").val();
  $(".message").html("&nbsp;");
  $(".message").css("font-size", "13px");
  $(".message").css("color", "red");
  $(".message").css("float", "left");
  $(".message").hide();
  if (name.length == 0) {
    $("#msgcname").show();
    $("#msgcname").html("Enter name");
    valid = false;
  }
 
  if (email.length == 0 || vaildateEmail(email) == false) {
		valid = false;
		$('#msgcemail').show();
		$('#msgcemail').html('Enter email');
	}
  if (phone.length == 0 || checkcontactnumber(phone) == false) {
		valid = false;
		$('#msgcphone').show();
		$('#msgcphone').html('Enter phone');
	}

  if (message.length == 0) {
    $("#msgmessage").show();
    $("#msgmessage").html("Enter message");
    valid = false;
  }
  return valid;
}

var siteUrl = $("#siteUrl").attr("href");

$(document).on("click", "#authenticateUpdateContactDetail", function () {
  if (authenticateUpdateContactDetail()) {
    var id = $("input[name='id']").val();
    var footer_image = $("#footer_image").prop("files")[0];
    var phone1 = $("input[name='phone1']").val();
    var phone2 = $("input[name='phone2']").val();
    var email1 = $("input[name='email1']").val();
    var email2 = $("input[name='email2']").val();
    var facebook_url = $("textarea[name='facebook_url']").val();
    var twitter_url = $("textarea[name='twitter_url']").val();
    var instagram_url = $("textarea[name='instagram_url']").val();
    var youtube_url = $("textarea[name='youtube_url']").val();

    var formData = new FormData();
    formData.append("id", id);
    formData.append("footer_image", footer_image);
    formData.append("phone1", phone1);
    formData.append("phone2", phone2);
    formData.append("email1", email1);
    formData.append("email2", email2);
    formData.append("facebook_url", facebook_url);
    formData.append("twitter_url", twitter_url);
    formData.append("instagram_url", instagram_url);
    formData.append("youtube_url", youtube_url);
    

    $.ajax({
      url: siteUrl + "admin/contact-detail/update",
      type: "POST",
      data: formData,
      async: false,
      contentType: false,
      processData: false,
      success: function (result) {
        if (result.indexOf("1") > -1) {
         window.location.replace(siteUrl +"admin/contact-detail");
        }else{
            $("#msgphone1").html("please try again.");
            $("#msgphone1").show();
        }
      },
    });
  }
});

function authenticateUpdateContactDetail() {
  var valid = true;
  var phone1 = $("input[name='phone1']").val();
  var phone2 = $("input[name='phone2']").val();
  var email1 = $("input[name='email1']").val();
  var email2 = $("input[name='email2']").val();

  $(".message").html("&nbsp;");
  $(".message").css("font-size", "13px");
  $(".message").css("color", "red");
  $(".message").css("float", "left");
  $(".message").hide();
  if (email1.length == 0 || vaildateEmail(email1) == false) {
    valid = false;
    $('#msgemail1').show();
    $('#msgemail1').html('Enter email1');
  }
  if (email2.length == 0 || vaildateEmail(email2) == false) {
    valid = false;
    $('#msgemail2').show();
    $('#msgemail2').html('Enter email2');
  }
if (phone1.length == 0 || checkcontactnumber(phone1) == false) {
    valid = false;
    $('#msgphone1').show();
    $('#msgphone1').html('Enter phone1');
}
  
if (phone2.length == 0 || checkcontactnumber(phone2) == false) {
    valid = false;
    $('#msgphone2').show();
    $('#msgphone2').html('Enter phone2');
}
  return valid;
}

function checkcontactnumber(mobile) {
	var contactRegexStr = /^\d{10}$/;
	var isvalid = contactRegexStr.test(mobile);
	return isvalid;
}

function vaildateEmail(email) {
  var regex =
    /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;   
  return regex.test(email);
}