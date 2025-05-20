var siteUrl = $("#siteUrl").attr("href");
$(document).on("click", "#authenticateAddProduct", function () {
  if (authenticateAddProduct()) {
    var product_name = $("input[name='product_name']").val();
    var slug = $("input[name='slug']").val();
    var image = $("#image").prop("files")[0];
    var og_image = $("#og_image").prop("files")[0];

    var description = CKEDITOR.instances["editor"].getData();
    var meta_title = $("textarea[name='meta_title']").val();
    var meta_description = $("textarea[name='meta_description']").val();

  
    var formData = new FormData();

    formData.append("product_name", product_name);
    formData.append("slug", slug);
    formData.append("image", image);
    formData.append("og_image", og_image);

    formData.append("description", description);
    formData.append("meta_title", meta_title);
    formData.append("meta_description", meta_description);
   
    $.ajax({
      url: siteUrl + "admin/save-myproduct",
      type: "POST",
      data: formData,
      async: false,
      contentType: false,
      processData: false,
      success: function (result) {
        if (result.indexOf("1") > -1) {
          $("#msgslug").html(" already exists");
          $("#msgslug").show();
        } else if (result.indexOf("2") > -1) {
          window.location.replace(siteUrl + "admin/myproduct");
        } else if (result.indexOf("3") > -1) {
          $("#msgslug").html("please try again");
          $("#msgslug").show();
        }
      },
    });
  }
});

function authenticateAddProduct() {
  var valid = true;
  var product_name = $("input[name='product_name']").val();
  var slug = $("input[name='slug']").val();
 

  $(".message").html("&nbsp;");
  $(".message").css("font-size", "13px");
  $(".message").css("color", "red");
  $(".message").css("float", "left");
  $(".message").hide();

  
  if (product_name.length == 0) {
    $("#msgproduct_name").show();
    $("#msgproduct_name").html("Enter product name");
    valid = false;
  }
  if (slug.length == 0) {
    $("#msgslug").show();
    $("#msgslug").html("Enter slug");
    valid = false;
  }
  return valid;
}


$(document).on("click", "#authenticateUpdateProduct", function () {
  if (authenticateUpdateProduct()) {
    var id = $("input[name='id']").val();
    var product_name = $("input[name='product_name']").val();
    var slug = $("input[name='slug']").val();
    var image = $("#image").prop("files")[0];
    var og_image = $("#og_image").prop("files")[0];

    var description = CKEDITOR.instances["editor"].getData();
    var meta_title = $("textarea[name='meta_title']").val();
    var meta_description = $("textarea[name='meta_description']").val();
      

    var formData = new FormData();

    formData.append("id", id);
    formData.append("product_name", product_name);
    formData.append("slug", slug);
    formData.append("og_image", og_image);
    formData.append("image", image);
    formData.append("description", description);
    formData.append("meta_title", meta_title);
    formData.append("meta_description", meta_description);

    $.ajax({
      url: siteUrl + "admin/myproduct-product",
      type: "POST",
      data: formData,
      async: false,
      contentType: false,
      processData: false,
      success: function (result) {
        console.log(result);
        if (result.indexOf("1") > -1) {
          $("#msgslug").html(" already exists");
          $("#msgslug").show();
        } else if (result.indexOf("2") > -1) {
          window.location.replace(siteUrl + "admin/myproduct");
        } else if (result.indexOf("3") > -1) {
          $("#msgslug").html("please try again");
          $("#msgslug").show();
        }
      },
    });
  }
});

function authenticateUpdateProduct() {
    var valid = true;
    var product_name = $("input[name='product_name']").val();
    var slug = $("input[name='slug']").val();
   
 

    $(".message").html("&nbsp;");
    $(".message").css("font-size", "13px");
    $(".message").css("color", "red");
    $(".message").css("float", "left");
    $(".message").hide();
  
    
    if (product_name.length == 0) {
      $("#msgproduct_name").show();
      $("#msgproduct_name").html("Enter product name");
      valid = false;
    }
    if (slug.length == 0) {
      $("#msgslug").show();
      $("#msgslug").html("Enter slug");
      valid = false;
    }
    return valid;
}


