var siteUrl = $("#siteUrl").attr("href");
$(document).on("click", "#authenticateUpdateTestimonial", function () {
    if (authenticateUpdateTestimonial()) {
      var id = $("input[name='id']").val();
      var name = $("input[name='name']").val();
      var designation = $("input[name='designation']").val();
      var image = $("#image").prop("files")[0];
      var content = $("textarea[name='content']").val();
      
      var formData = new FormData();
  
      formData.append("id", id);
      formData.append("name", name);
      formData.append("designation", designation);
      formData.append("image", image);
      formData.append("content", content);
     
      $.ajax({
        url: siteUrl + "admin/update-testimonial",
        type: "POST",
        data: formData,
        async: false,
        contentType: false,
        processData: false,
        success: function (result) {
          console.log(result);
          if (result.indexOf("1") > -1) {
            window.location.replace(siteUrl + "admin/testimonial");
          } else if (result.indexOf("2") > -1) {
            $("#msgname").html("please try again");
            $("#msgname").show();
          }
        },
      });
    }
  });
  function authenticateUpdateTestimonial() {
    var valid = true;
    var name = $("input[name='name']").val();
  
    $(".message").html("&nbsp;");
    $(".message").css("font-size", "13px");
    $(".message").css("color", "red");
    $(".message").css("float", "left");
    $(".message").hide();
  
    if (name.length == 0) {
      $("#msgname").show();
      $("#msgname").html("Enter name");
      valid = false;
    }
    return valid;
  }
  