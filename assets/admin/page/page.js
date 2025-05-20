var siteUrl = $("#siteUrl").attr('href');	
$(document).on('click','#authenticatePageUpdate',function(){
    var id = $("input[name='id']").val();
    var og_image = $("#og_image").prop("files")[0];
    var meta_title = $("textarea[name='meta_title']").val();
    var meta_description = $("textarea[name='meta_description']").val();
    
    var formData = new FormData();
    formData.append("id",id);
    formData.append("og_image",og_image);
    formData.append("meta_title",meta_title);
    formData.append("meta_description",meta_description);
    $.ajax({
        url:siteUrl+"admin/page/save",
        type:'POST',
        data:formData,
        async:false,
        contentType:false,
        processData:false,
        success:function(result){
            if (result.indexOf("1") > -1) {
                window.location.replace(siteUrl+"admin/page");
            }else if (result.indexOf("2") > -1) {
                $("#msgname").show();
                $("#msgname").html("Please try again later");
            }
        }
    })
})
