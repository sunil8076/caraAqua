var siteUrl = $("#siteUrl").attr("href");
$(document).on("click", "#authenticateUpdateHome", function () {
    if (authenticateUpdateHome()) {
      var id = $("input[name='id']").val();
      var service_heading = $("input[name='service_heading']").val();
      var service_content = $("textarea[name='service_content']").val();
      var about_heading = $("input[name='about_heading']").val();
      var about_description = CKEDITOR.instances["editor"].getData();
      var about_description1 = CKEDITOR.instances["editor1"].getData();
      var about_image = $("#about_image").prop("files")[0];
      var about_image1 = $("#about_image1").prop("files")[0];
      var about_image2 = $("#about_image2").prop("files")[0];
      var about_image3 = $("#about_image3").prop("files")[0];
      var about_image4 = $("#about_image4").prop("files")[0];
      var work_heading = $("input[name='work_heading']").val();
      var work_heading1 = $("input[name='work_heading1']").val();
      var work_content1 = $("textarea[name='work_content1']").val();
      var work_heading2 = $("input[name='work_heading2']").val();
      var work_content2 = $("textarea[name='work_content2']").val();
      var work_heading3 = $("input[name='work_heading3']").val();
      var work_content3 = $("textarea[name='work_content3']").val();
      var work_heading4 = $("input[name='work_heading4']").val();
      var work_content4 = $("textarea[name='work_content4']").val();
      var partner_heading = $("input[name='partner_heading']").val();
      var partner_description = CKEDITOR.instances["editor2"].getData();
      
      
      var formData = new FormData();
  
      formData.append("id", id);
      formData.append("service_heading", service_heading);
      formData.append("service_content", service_content);
      formData.append("about_heading", about_heading);
      formData.append("about_description", about_description);
      formData.append("about_description1", about_description1);
      formData.append("about_image", about_image);
      formData.append("about_image1", about_image1);
      formData.append("about_image2", about_image2);
      formData.append("about_image3", about_image3);
      formData.append("about_image4", about_image4);
      formData.append("work_heading", work_heading);
      formData.append("work_heading1", work_heading1);
      formData.append("work_heading2", work_heading2);
      formData.append("work_heading3", work_heading3);
      formData.append("work_heading4", work_heading4);
      formData.append("work_content1", work_content1);
      formData.append("work_content2", work_content2);
      formData.append("work_content3", work_content3);
      formData.append("work_content4", work_content4);
      formData.append("partner_heading", partner_heading);
      formData.append("partner_description", partner_description);
     
      $.ajax({
        url: siteUrl + "admin/update-home",
        type: "POST",
        data: formData,
        async: false,
        contentType: false,
        processData: false,
        success: function (result) {
          console.log(result);
          if (result.indexOf("1") > -1) {
            window.location.replace(siteUrl + "admin/home");
          } else if (result.indexOf("2") > -1) {
            $("#msgservice_heading").html("please try again");
            $("#msgservice_heading").show();
          }
        },
      });
    }
  });
  function authenticateUpdateHome() {
    var valid = true;
    var service_heading = $("input[name='service_heading']").val();
  
    $(".message").html("&nbsp;");
    $(".message").css("font-size", "13px");
    $(".message").css("color", "red");
    $(".message").css("float", "left");
    $(".message").hide();
  
    if (service_heading.length == 0) {
      $("#msgservice_heading").show();
      $("#msgservice_heading").html("Enter Service heading");
      valid = false;
    }
    return valid;
  }
  