var siteUrl = $("#siteUrl").attr('href');



$(document).on('click','#facilities',function() {
	if (facilities()) {

        var heading = $("input[name='heading']").val();
        var image = $("#image").prop("files")[0];
        var meta_title = $("textarea[name='meta_title']").val();
        var meta_keyword = $("textarea[name='meta_keyword']").val();
        var meta_description = $("textarea[name='meta_description']").val();
        var formData = new FormData();
        formData.append('heading',heading);
        formData.append('image',image);
        formData.append('meta_title', meta_title);
        formData.append('meta_keyword', meta_keyword);
        formData.append('meta_description', meta_description);
		$.ajax({
			url : siteUrl+'admin/facilities/save',
			type : 'POST',
			data : formData,
			async: false,
            contentType:false,
            processData:false,
			success : function(result) {
                if(result == 1){
                    window.location.href = siteUrl+'admin/facilities';
                }else{
                    $('#msgheading').show();
                    $('#msgheading').html(' already exists');
                }
			}
		});
	}	
});

function facilities() {
	var valid = true;

    var heading = $("input[name='heading']").val();
        var image = $("#image").val();

        $(".message").html("&nbsp;");
	$(".message").css("font-size", "13px");
	$(".message").css("color", "red");
	$(".message").css("float", "left");
	$(".message").hide();
    
    if (heading.length == 0) {
		valid = false;
		$('#msgheading').show();
		$('#msgheading').html(' enter heading');
	}if (image.length == 0) {
		valid = false;
		$('#msgimage').show();
		$('#msgimage').html(' choose image');
	}
	return valid;
}

$(document).on('click','#facilitiesUpdate',function() {
	if (facilitiesUpdate()) {
        var id = $("input[name='id']").val();
        var heading = $("input[name='heading']").val();
        var image = $("#image").prop("files")[0];
        var meta_title = $("textarea[name='meta_title']").val();
        var meta_keyword = $("textarea[name='meta_keyword']").val();
        var meta_description = $("textarea[name='meta_description']").val();
        var formData = new FormData();
        formData.append('id',id);
        formData.append('heading',heading);
        formData.append('image',image);
        formData.append('meta_title', meta_title);
        formData.append('meta_keyword', meta_keyword);
        formData.append('meta_description', meta_description);
		$.ajax({
			url : siteUrl+'admin/facilities/update',
			type : 'POST',
			data : formData,
			async: false,
            contentType:false,
            processData:false,
			success : function(result) {
                if(result == 1){
                    window.location.href = siteUrl+'admin/facilities';
                }else{
                    $('#msgheading').show();
                    $('#msgheading').html(' already exists');
                }
			}
		});
	}	
});

function facilitiesUpdate() {
	var valid = true;

    var heading = $("input[name='heading']").val();

        $(".message").html("&nbsp;");
	$(".message").css("font-size", "13px");
	$(".message").css("color", "red");
	$(".message").css("float", "left");
	$(".message").hide();
    
    if (heading.length == 0) {
		valid = false;
		$('#msgheading').show();
		$('#msgheading').html(' enter heading');
	}
	return valid;
}

