var siteUrl = $("#siteUrl").attr('href');
$(document).on('click','#enquiry',function(){
    if(enquiry()){
    var name = $("input[name='pop_upname']").val();
    var number = $("input[name='number']").val();
    var address = $("input[name='address']").val();
    var pop_upstate = $("select[name='fpop_upstate']").val();
    var pop_upcity = $("select[name='fpop_upcity']").val();
    var email = $("input[name='pop_upemail']").val();
    var pincode = $("input[name='pincode']").val();
    var formData = new FormData();
    formData.append("name",name);
    formData.append("number",number);
    formData.append("address",address);
    formData.append("pop_upstate",pop_upstate);
    formData.append("pop_upcity",pop_upcity);
    formData.append("email",email);
    formData.append("pincode",pincode);
    $.ajax({
        url:siteUrl+"enquiry",
        type:'POST',
        data:formData,
        async:false,
        contentType:false,
        processData:false,
        success:function(result){
          if(result==1){
          window.location.href = siteUrl+"thankyou";
          }
        }
    })
  }
})

function enquiry() {
  var valid = true;
  var name = $("input[name='pop_upname']").val();
  var number = $("input[name='number']").val();
  var address = $("input[name='address']").val();
  var pop_upstate = $("select[name='fpop_upstate']").val();
  var pop_upcity = $("select[name='fpop_upcity']").val();
  var email = $("input[name='pop_upemail']").val();
  var pincode = $("input[name='pincode']").val();
  
  $(".message").html("&nbsp;");
  $(".message").css("font-size", "13px");
  $(".message").css("color", "red");
  $(".message").css("float", "left");
  $(".message").hide();

  if (name.length == 0) {
    $("#msgpop_upname").show();
    $("#msgpop_upname").html("Enter name");
    valid = false;
  }
  if (address.length == 0) {
    $("#msgpop_upaddress").show();
    $("#msgpop_upaddress").html("Enter address");
    valid = false;
  }
  if (pop_upstate.length == 0) {
    $("#msgpop_upstate").show();
    $("#msgpop_upstate").html("Select state");
    valid = false;
  }
  if (pop_upcity.length == 0) {
    $("#msgpop_upcity").show();
    $("#msgpop_upcity").html("Select city");
    valid = false;
  }
  if (pincode.length == 0) {
    $("#msgpop_uppincode").show();
    $("#msgpop_uppincode").html("Enter pincode");
    valid = false;
  }
  if (email.length == 0 || vaildateEmail(email) == false) {
  valid = false;
  $('#msgpop_upemail').show();
  $('#msgpop_upemail').html('Enter email');
}
if (number.length == 0 || checkcontactnumber(number) == false) {
  valid = false;
  $('#msgpop_upnumber').show();
  $('#msgpop_upnumber').html('Enter number');
}
  
  return valid;
}



$(document).on("click","#popupform",function(){
    var servicetype = $(this).attr("service-type");
    $("#servicename").val(servicetype); 
    $("#servicenameshow").text(servicetype); 
    $("#exampleModalService").modal("show");
})


$(document).on('click','#serviceEnquiry',function(){
    if(serviceEnquiry()){
        var service_name = $("input[name='service_type']").val();
        var name = $("input[name='en-name']").val();
        var phone = $("input[name='en-phone']").val();
        var address = $("input[name='en-address']").val();
        var state = $("select[name='pop_upstate']").val();
        var city = $("select[name='pop_upcity']").val();
        var email = $("input[name='en-email']").val();
        var pincode = $("input[name='en-pincode']").val();
        var formData = new FormData();
        formData.append("service_name",service_name);
        formData.append("name",name);
        formData.append("phone",phone);
        formData.append("address",address);
        formData.append("state",state);
        formData.append("city",city);
        formData.append("email",email);
        formData.append("pincode",pincode);
        $.ajax({
            url:siteUrl+"service-enquiry",
            type:'POST',
            data:formData,
            async:false,
            contentType:false,
            processData:false,
            success:function(result){
              if(result==1){
                window.location.href = siteUrl+"thankyou";
              }
            }
        })
    }
})
function serviceEnquiry() {
    var valid = true;
    var name = $("input[name='en-name']").val();
    var phone = $("input[name='en-phone']").val();
    var address = $("input[name='en-address']").val();
    var email = $("input[name='en-email']").val();
    var pincode = $("input[name='en-pincode']").val();
    var state = $("select[name='pop_upstate']").val();
    var city = $("select[name='pop_upcity']").val();
    
    $(".message").html("&nbsp;");
    $(".message").css("font-size", "13px");
    $(".message").css("color", "red");
    $(".message").css("float", "left");
    $(".message").hide();
  
    if (state.length == 0) {
      $("#msgstate").show();
      $("#msgstate").html("Select state");
      valid = false;
    }
    if (city.length == 0) {
      $("#msgcity").show();
      $("#msgcity").html("Select city");
      valid = false;
    }
    if (name.length == 0) {
      $("#msgname").show();
      $("#msgname").html("Enter name");
      valid = false;
    }
    if (address.length == 0) {
      $("#msgaddress").show();
      $("#msgaddress").html("Enter address");
      valid = false;
    }
    if (pincode.length == 0) {
      $("#msgpincode").show();
      $("#msgpincode").html("Enter pincode");
      valid = false;
    }
    if (email.length == 0 || vaildateEmail(email) == false) {
		valid = false;
		$('#msgemail').show();
		$('#msgemail').html('Enter email');
	  }
  if (phone.length == 0 || checkcontactnumber(phone) == false) {
		valid = false;
		$('#msgphone').show();
		$('#msgphone').html('Enter phone');
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


  $(document).on("change","#pop_upstate",function(){
  var state = $(this).val();
  $.ajax({
    url: siteUrl + "get-city",
    type: "POST",
    data: { "state": state },
    success: function(result){
      $("#pop_upcity").html('<option value="">--Select city--</option>'+result);
      
    },
  });
  });
  
  $(document).on("change","#fpop_upstate",function(){
  var state = $(this).val();
  $.ajax({
    url: siteUrl + "get-city",
    type: "POST",
    data: { "state": state },
    success: function(result){
      $("#fpop_upcity").html('<option value="">--Select city--</option>'+result);
      
    },
  });
  });


