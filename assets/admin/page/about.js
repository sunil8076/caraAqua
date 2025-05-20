var siteUrl = $("#siteUrl").attr("href");
$(document).on("click", "#authenticateUpdateAbout", function () {
    if (authenticateUpdateAbout()) {
      var id = $("input[name='id']").val();
      var heading = $("input[name='heading']").val();
      var description = CKEDITOR.instances["editor"].getData();
      var image = $("#image").prop("files")[0];
      var image1 = $("#image1").prop("files")[0];
      var vision_heading = $("input[name='vision_heading']").val();
      var vision_description = CKEDITOR.instances["editor1"].getData();
      var mission_heading = $("input[name='mission_heading']").val();
      var mission_description = CKEDITOR.instances["editor2"].getData();
     
      
      var formData = new FormData();
  
      formData.append("id", id);
      formData.append("heading", heading);
      formData.append("description", description);
      formData.append("image", image);
      formData.append("image1", image1);
      formData.append("vision_heading", vision_heading);
      formData.append("vision_description", vision_description);
      formData.append("mission_heading", mission_heading);
      formData.append("mission_description", mission_description);
      
     
      $.ajax({
        url: siteUrl + "admin/update-about",
        type: "POST",
        data: formData,
        async: false,
        contentType: false,
        processData: false,
        success: function (result) {
          console.log(result);
          if (result.indexOf("1") > -1) {
            window.location.replace(siteUrl + "admin/about");
          } else if (result.indexOf("2") > -1) {
            $("#msgheading").html("please try again");
            $("#msgheading").show();
          }
        },
      });
    }
  });
  function authenticateUpdateAbout() {
    var valid = true;
    var heading = $("input[name='heading']").val();
  
    $(".message").html("&nbsp;");
    $(".message").css("font-size", "13px");
    $(".message").css("color", "red");
    $(".message").css("float", "left");
    $(".message").hide();
  
    if (heading.length == 0) {
      $("#msgheading").show();
      $("#msgheading").html("Enter Heading");
      valid = false;
    }
    return valid;
  }
  