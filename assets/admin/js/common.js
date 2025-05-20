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






$(document).on("click", "#authenticateProduct", function () {
  if (authenticateProduct()) {
    var productId = $("input[name='productId']").val();
    var type = $("input[name='type']").val();
    var name = $("input[name='p_name']").val();
    var phone = $("input[name='p_phone']").val();
    var p_state = $("select[name='p_state']").val();
    var p_city = $("select[name='p_city']").val();
    var email = $("input[name='p_email']").val();
    var message = $("textarea[name='p_message']").val();
    var formData = new FormData();
    formData.append("type", type);
    formData.append("productId", productId);
    formData.append("name", name);
    formData.append("p_state", p_state);
    formData.append("p_city", p_city);
    formData.append("email", email);
    formData.append("phone", phone);
    formData.append("message", message);
    $.ajax({
      url: siteUrl+"save-product-enquiry",
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

function authenticateProduct() {
  var valid = true;
  var name = $("input[name='p_name']").val();
  var phone = $("input[name='p_phone']").val();
  var p_state = $("select[name='p_state']").val();
  var p_city = $("select[name='p_city']").val();
  var email = $("input[name='p_email']").val();
  var message = $("textarea[name='p_message']").val();
  $(".message").html("&nbsp;");
  $(".message").css("font-size", "13px");
  $(".message").css("color", "red");
  $(".message").css("float", "left");
  $(".message").hide();
  if (name.length == 0) {
    $("#msgpname").show();
    $("#msgpname").html("Enter name");
    valid = false;
  }
 
  if (email.length == 0 || vaildateEmail(email) == false) {
		valid = false;
		$('#msgpemail').show();
		$('#msgpemail').html('Enter email');
	}
  if (phone.length == 0 || checkcontactnumber(phone) == false) {
		valid = false;
		$('#msgpphone').show();
		$('#msgpphone').html('Enter phone');
	}

  if (p_state.length == 0) {
    $("#msgpstate").show();
    $("#msgpstate").html("Select state");
    valid = false;
  }
  if (p_city.length == 0) {
    $("#msgpcity").show();
    $("#msgpcity").html("Select city");
    valid = false;
  }
  if (message.length == 0) {
    $("#msgpmessage").show();
    $("#msgpmessage").html("Enter message");
    valid = false;
  }
  return valid;
}

$(document).on("click","#productpopupform",function(){
  var productId = $(this).attr("product-id");
  var productname = $(this).attr("product-type");
  $("#productId").val(productId); 
  $("#productname").text(productname); 
  $("#exampleModalproduct").modal("show");
})




$(document).on('click', '#ApointmentEnquiry', function () {
  if (validateAppointmentEnquiry()) {
      var type = $("input[name='a_type']").val();
      var name = $("input[name='a_name']").val();
      var email = $("input[name='a_email']").val();
      var message = $("input[name='a_subject']").val();
      
      var formData = new FormData();
      formData.append("name", name);
      formData.append("type", type);
      formData.append("email", email);
      formData.append("message", message);
      
      $.ajax({
          url: siteUrl + "apointment-enquiry",
          type: 'POST',
          data: formData,
          contentType: false,
          processData: false,
          success: function (result) {
            if(result==1){
              window.location.href = siteUrl + "thankyou";
            }else{
              window.location.reload();
            }
          }
      });
  }
});

function validateAppointmentEnquiry() {
  var valid = true;
  var name = $("input[name='a_name']").val();
  var email = $("input[name='a_email']").val();
  var message = $("input[name='a_subject']").val();
  
  $(".message").html("&nbsp;").css({
      "font-size": "13px",
      "color": "red",
      "float": "left",
  }).hide();

  if (name.length === 0) {
      $("#msganame").show();
      $("#msganame").html("Enter name");
      valid = false;
  }
  if (message.length === 0) {
      $("#msgasubject").show();
      $("#msgasubject").html("Enter subject");
      valid = false;
  }
  if (email.length == 0 || vaildateEmail(email) == false) {
		valid = false;
		$('#msgaemail').show();
		$('#msgaemail').html('Enter email');
	}
  
  return valid;
}



$(document).on('click', '#blogEnquiry', function () {
  if (blogEnquiry()){
      var blog_id = $("input[name='blog_id']").val();
      var blog_url = $("input[name='blog_url']").val();
      var type = $("input[name='btype']").val();
      var name = $("input[name='bname']").val();
      var email = $("input[name='bemail']").val();
      var message = $("textarea[name='bcomment']").val();
      
      var formData = new FormData();
      formData.append("blog_id", blog_id);
      formData.append("type", type);
      formData.append("name", name);
      formData.append("email", email);
      formData.append("message", message);
      
      $.ajax({
          url: siteUrl + "blog-enquiry",
          type: 'POST',
          data: formData,
          contentType: false,
          processData: false,
          success: function (result) {
            if(result==1){
              window.location.href = siteUrl + "blog/"+blog_url;
            }else{
              window.location.reload();
            }
          }
      });
  }
});

function blogEnquiry() {
  var valid = true;
  var name = $("input[name='bname']").val();
  var email = $("input[name='bemail']").val();
  var message = $("textarea[name='bcomment']").val();
  
  $(".message").html("&nbsp;").css({
      "font-size": "13px",
      "color": "red",
      "float": "left",
  }).hide();

  if (name.length === 0) {
      $("#msgbname").show();
      $("#msgbname").html("Enter name");
      valid = false;
  }
  if (message.length === 0) {
      $("#msgcomment").show();
      $("#msgcomment").html("Enter subject");
      valid = false;
  }
  if (email.length == 0 || vaildateEmail(email) == false) {
		valid = false;
		$('#msgbemail').show();
		$('#msgbemail').html('Enter email');
	}
  
  return valid;
}



$(document).on('click', '#subscribeEnquiry', function () {
  if (subscribeEnquiry()) {
      var type = $("input[name='s_type']").val();
      var name = $("input[name='s_name']").val();
      var email = $("input[name='s_email']").val();
      
      
      var formData = new FormData();
      formData.append("name", name);
      formData.append("type", type);
      formData.append("email", email);
      
      $.ajax({
          url: siteUrl + "subscribe-enquiry",
          type: 'POST',
          data: formData,
          contentType: false,
          processData: false,
          success: function (result) {
            if(result==1){
              window.location.href = siteUrl + "thankyou";
            }else{
              window.location.reload();
            }
          }
      });
  }
});

function subscribeEnquiry() {
  var valid = true;
  var name = $("input[name='s_name']").val();
  var email = $("input[name='s_email']").val();
  
  $(".message").html("&nbsp;").css({
      "font-size": "13px",
      "color": "red",
      "float": "left",
  }).hide();

  if (name.length === 0) {
      $("#msgsname").show().html("Enter name");
      valid = false;
  }
  
  if (email.length == 0 || vaildateEmail(email) == false) {
		valid = false;
		$('#msgsemail').show();
		$('#msgsemail').html('Enter email');
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


$(document).ready(function(){
  $("#p_state").on("change",function(){
  var state = $("select[name='p_state']").val();
  $.ajax({
    url: siteUrl + "get-city",
    type: "POST",
    data: { "state": state },
    success: function(result){
      $("#p_city").html('<option value="">--Select city--</option>'+result);
      
    },
  });
  });
})

