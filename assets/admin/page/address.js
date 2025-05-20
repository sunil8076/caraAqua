var siteUrl = $("#siteUrl").attr("href");
$(document).on("click", "#authenticateCreateAddress", function () {
  if (authenticateCreateAddress()) {
    var address = $("textarea[name='address']").val()
    var country = $("input[name='country']").val()
    var state = $("input[name='state']").val()
    var city = $("input[name='city']").val()
    var pincode = $("input[name='pincode']").val()
    var formData = new FormData();
    formData.append("address", address);
    formData.append("country", country);
    formData.append("state", state);
    formData.append("city", city);
    formData.append("pincode", pincode);

    $.ajax({
      url: siteUrl + "admin/address/save",
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      success: function (result) {
        if (result.indexOf("1") > -1) {
          window.location.replace(siteUrl + "admin/address");
        } else {
          $("#msgaddress").html("Please try again.");
          $("#msgaddress").show();
        }
      },
    });
  }
});

function authenticateCreateAddress() {
  var valid = true;
  var address = $("textarea[name='address']").val();

  $(".message").html("&nbsp;");
  $(".message").css("font-size", "13px");
  $(".message").css("color", "red");
  $(".message").css("float", "left");
  $(".message").hide();
  if (address.length === 0) {
    valid = false;
    $("#msgaddress").html("Enter address");
    $("#msgaddress").show();
  }

  return valid;
}


$(document).on("click", "#authenticateUpdateAddress", function () {
  if (authenticateUpdateAddress()) {
    var id = $("input[name='id']").val()
    var address = $("textarea[name='address']").val()
    var country = $("input[name='country']").val()
    var state = $("input[name='state']").val()
    var city = $("input[name='city']").val()
    var pincode = $("input[name='pincode']").val()
    var formData = new FormData();
    formData.append("id", id);
    formData.append("address", address);
    formData.append("country", country);
    formData.append("state", state);
    formData.append("city", city);
    formData.append("pincode", pincode);

    $.ajax({
      url: siteUrl + "admin/address/update",
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      success: function (result) {
        if (result.indexOf("1") > -1) {
          window.location.replace(siteUrl + "admin/address");
        } else {
          $("#msgaddress").html("Please try again.");
          $("#msgaddress").show();
        }
      },
    });
  }
});

function authenticateUpdateAddress() {
  var valid = true;
  var address = $("textarea[name='address']").val();
  // var country = $("input[name='country']").val()
  // var state = $("input[name='state']").val()
  // var city = $("input[name='city']").val()
  // var pincode = $("input[name='pincode']").val()

  $(".message").html("&nbsp;");
  $(".message").css("font-size", "13px");
  $(".message").css("color", "red");
  $(".message").css("float", "left");
  $(".message").hide();
  if (address.length === 0) {
    valid = false;
    $("#msgaddress").html("Enter address");
    $("#msgaddress").show();
  }
  // if (country.length === 0) {
  //   valid = false;
  //   $("#msgcountry").html("Enter country");
  //   $("#msgcountry").show();
  // }
  // if (state.length === 0) {
  //   valid = false;
  //   $("#msgstate").html("Enter state");
  //   $("#msgstate").show();
  // }
  // if (city.length === 0) {
  //   valid = false;
  //   $("#msgcity").html("Enter city");
  //   $("#msgcity").show();
  // }
  // if (pincode.length === 0) {
  //   valid = false;
  //   $("#msgpincode").html("Enter pincode");
  //   $("#msgpincode").show();
  // }

  return valid;
}

// $(document).on("change","#country",function(){
//   var country = $(this).val();
//   $.ajax({
//     url:siteUrl+"admin/state-list",
//     type:"POST",
//     data:{"country":country},
//     success:function(result){
//       $("#state").html('<option value="">--Select State--</option>'+result);
//        $("#city").html('<option value="">--Select city--</option>');
//     }
//   })
// })


// $(document).on("change","#state",function(){
//   var state = $(this).val();
//   $.ajax({
//     url:siteUrl+"admin/city-list",
//     type:"POST",
//     data:{"state":state},
//     success:function(result){
//       $("#city").html('<option value="">--Select city--</option>'+result);
//     }
//   })
// })


// $(document).ready(function(){
//     var country = $("select[name='country']").val();
//     var id = $("input[name='id']").val();
//     $.ajax({
//       url:siteUrl+"admin/state",
//       type:"POST",
//       data:{"country":country,"id":id},
//       success:function(result){
//         $("#state").html('<option value="">--Select State--</option>'+result);
//       }
//     })
//     setTimeout(function() {
//       var state = $("select[name='state']").val();
//       var id = $("input[name='id']").val();
//       $.ajax({
//           url: siteUrl + "admin/city",
//           type: "POST",
//           data: { "state": state,"id":id },
//           success: function(result) {
//             $("#city").html('<option value="">--Select State--</option>'+result);
//           }
//       });

//   }, 300);
//   })

