var siteUrl = $("#siteUrl").attr("href");
$(document).on("click", "#authenticateBlogCreate", function () {
  if (authenticateBlogCreate()) {
    var image = $("#image").prop("files")[0];
    var thumb_image = $("#thumb_image").prop("files")[0];
    var heading = $("input[name='heading']").val();
    var heading_slug = $("input[name='heading_slug']").val();
    var og_image = $("#og_image").prop("files")[0];
    var meta_title = $("textarea[name='meta_title']").val();
    var meta_description = $("textarea[name='meta_description']").val();
    var short_description = $("textarea[name='short_description']").val();
    var description = CKEDITOR.instances["editor"].getData();
    var blog_date = $("input[name='blog_date']").val();
    
    var formData = new FormData();
    formData.append("image", image);
    formData.append("thumb_image", thumb_image);
    formData.append("heading", heading);
    formData.append("heading_slug", heading_slug);
    formData.append("blog_date", blog_date);
    formData.append("description", description);
    formData.append("short_description", short_description);
    formData.append("og_image", og_image);
    formData.append("meta_title", meta_title);
    formData.append("meta_description", meta_description);

    $.ajax({
      url: siteUrl + "admin/blog/save",
      type: "POST",
      data: formData,
      async: false,
      contentType: false,
      processData: false,
      success: function (result) {
        console.log(result);
        if (result.indexOf("1") > -1) {
          $("#msgheading_slug").html(" already exists");
          $("#msgheading_slug").show();
        } else if (result.indexOf("2") > -1) {
          window.location.replace(siteUrl + "admin/blog");
        } else if (result.indexOf("3") > -1) {
          $("#msgheading_slug").html("please try again");
          $("#msgheading_slug").show();
        }
      },
    });
  }
});

function authenticateBlogCreate() {
  var valid = true;
  var heading = $("input[name='heading']").val();
  var heading_slug = $("input[name='heading_slug']").val();

  $(".message").html("&nbsp;");
  $(".message").css("font-size", "13px");
  $(".message").css("color", "red");
  $(".message").css("float", "left");
  $(".message").hide();

  if (heading.length == 0) {
    $("#msgheading").show();
    $("#msgheading").html(" Enter heading");
    valid = false;
  }
  if (heading_slug.length == 0) {
    $("#msgheading_slug").show();
    $("#msgheading_slug").html("Enter heading slug");
    valid = false;
  }
  
  return valid;
}


$(document).on("click", "#authenticateBlogUpdate", function () {
  if (authenticateBlogUpdate()) {
    var id = $("input[name='id']").val();
    var image = $("#image").prop("files")[0];
    var thumb_image = $("#thumb_image").prop("files")[0];
    var heading = $("input[name='heading']").val();
    var heading_slug = $("input[name='heading_slug']").val();
    var og_image = $("#og_image").prop("files")[0];
    var meta_title = $("textarea[name='meta_title']").val();
    var meta_description = $("textarea[name='meta_description']").val();
    var short_description = $("textarea[name='short_description']").val();
    var blog_date = $("input[name='blog_date']").val();
    var description = CKEDITOR.instances["editor"].getData();

    var formData = new FormData();
    formData.append("id", id);
    formData.append("image", image);
    formData.append("thumb_image", thumb_image);
    formData.append("heading", heading);
    formData.append("heading_slug", heading_slug);
    formData.append("og_image", og_image);
    formData.append("meta_title", meta_title);
    formData.append("meta_description", meta_description);
    formData.append("short_description", short_description);
    formData.append("blog_date", blog_date);
    formData.append("description", description);

    $.ajax({
      url: siteUrl + "admin/blog/update",
      type: "POST",
      data: formData,
      async: false,
      contentType: false,
      processData: false,
      success: function (result) {
        if (result.indexOf("1") > -1) {
          $("#msgheading_slug").html(" already exists");
          $("#msgheading_slug").show();
        } else if (result.indexOf("2") > -1) {
          window.location.replace(siteUrl + "admin/blog");
        } else if (result.indexOf("3") > -1) {
          $("#msgheading_slug").html("please try again");
          $("#msgheading_slug").show();
        }
      },
    });
  }
});

function authenticateBlogUpdate() {
  var valid = true;
  var heading = $("input[name='heading']").val();
  var heading_slug = $("input[name='heading_slug']").val();

  $(".message").html("&nbsp;");
  $(".message").css("font-size", "13px");
  $(".message").css("color", "red");
  $(".message").css("float", "left");
  $(".message").hide();
  if (heading.length == 0) {
    $("#msgheading").show();
    $("#msgheading").html(" enter heading");
    valid = false;
  }
  if (heading_slug.length == 0) {
    $("#msgheading_slug").show();
    $("#msgheading_slug").html(" Enter heading slug");
    valid = false;
  }
  return valid;
}
