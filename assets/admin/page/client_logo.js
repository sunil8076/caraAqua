var siteUrl = $("#siteUrl").attr("href");
$(document).on("click", "#authenticateClientLogoCreate", function () {
  if (authenticateClientLogoCreate()) {
    var image = $("#image").prop("files")[0];
    var formData = new FormData();
    formData.append("image", image);
    $.ajax({
      url: siteUrl + "admin/clientlogo/save",
      type: "POST",
      data: formData,
      async: false,
      contentType: false,
      processData: false,
      success: function (result) {
        if (result.indexOf("1") > -1) {
          window.location.replace(siteUrl + "admin/client-logo");
        } else if (result.indexOf("2") > -1) {
          $("#msgimage").show();
          $("#msgimage").html("Please try again later.");
        }
      },
    });
  }
});

function authenticateClientLogoCreate() {
  var valid = true;
  var image = $("input[name='image'").val();
  
  $(".message").html("&nbsp;");
  $(".message").css("font-size", "13px");
  $(".message").css("color", "red");
  $(".message").css("float", "left");
  $(".message").hide();

  if (image.length == 0) {
    $("#msgimage").show();
    $("#msgimage").html("choose image");
    valid = false;
  }
  
  return valid;
}

$(document).on("click", "#authenticateClientLogoUpdate", function () {
    var id = $("input[name='id']").val();
    var image = $("#image").prop("files")[0];
    var formData = new FormData();
    formData.append("id", id);
    formData.append("image", image);
    
    $.ajax({
      url: siteUrl + "admin/update-clientlogo",
      type: "POST",
      data: formData,
      async: false,
      contentType: false,
      processData: false,
      success: function (result) {
        if (result.indexOf("1") > -1) {
          window.location.replace(siteUrl + "admin/client-logo");
        } else if (result.indexOf("2") > -1) {
          $("#msgheading").show();
          $("#msgheading").html("Please try again later.");
        }
      },
    });
  
});

