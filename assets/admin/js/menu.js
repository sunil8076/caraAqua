var siteUrl = $("#siteUrl").attr('href');



$(document).on('click','#createMenu',function() {
	if (createMenu()) {


        var image = $("#image").prop("files")[0];
        var pdf = $("#pdf").prop("files")[0];
        var meta_title = $("textarea[name='meta_title']").val();
        var meta_keyword = $("textarea[name='meta_keyword']").val();
        var meta_description = $("textarea[name='meta_description']").val();
        var formData = new FormData();
        formData.append('image',image);
        formData.append('pdf',pdf);
        formData.append('meta_title', meta_title);
        formData.append('meta_keyword', meta_keyword);
        formData.append('meta_description', meta_description);
		$.ajax({
			url : siteUrl+'admin/menu/save',
			type : 'POST',
			data : formData,
			async: false,
            contentType:false,
            processData:false,
			success : function(result) {
                    window.location.href = siteUrl+'admin/menu';
			}
		});
	}	
});

function createMenu() {
	var valid = true;

    
        var image = $("#image").val();
        var pdf = $("#pdf").val();

        $(".message").html("&nbsp;");
	$(".message").css("font-size", "13px");
	$(".message").css("color", "red");
	$(".message").css("float", "left");
	$(".message").hide();
    
    if (pdf.length == 0) {
		valid = false;
		$('#msgpdf').show();
		$('#msgpdf').html(' choose pdf');
	}if (image.length == 0) {
		valid = false;
		$('#msgimage').show();
		$('#msgimage').html(' choose image');
	}
	return valid;
}

$(document).on('click','#updateMenu',function() {


    var id = $("#id").val();
        var image = $("#image").prop("files")[0];
        var pdf = $("#pdf").prop("files")[0];
        var meta_title = $("textarea[name='meta_title']").val();
        var meta_keyword = $("textarea[name='meta_keyword']").val();
        var meta_description = $("textarea[name='meta_description']").val();
        var formData = new FormData();
        formData.append('id',id);
        formData.append('image',image);
        formData.append('pdf',pdf);
        formData.append('meta_title', meta_title);
        formData.append('meta_keyword', meta_keyword);
        formData.append('meta_description', meta_description);
		$.ajax({
			url : siteUrl+'admin/menu/update',
			type : 'POST',
			data : formData,
			async: false,
            contentType:false,
            processData:false,
			success : function(result) {
                    window.location.href = siteUrl+'admin/menu';
			}
		});	
});



$(document).on('click','#updateMenuBottomless',function() {
	if (updateMenuBottomless()) {

        var id = $("#id").val();
        var image = $("#image").prop("files")[0];
        var image1 = $("#image1").prop("files")[0];
        var image2 = $("#image2").prop("files")[0];
        var image3 = $("#image3").prop("files")[0];
        var image4 = $("#image4").prop("files")[0];
        var image5 = $("#image5").prop("files")[0];
        var image6 = $("#image6").prop("files")[0];
        var heading = $("input[name='heading']").val();
        var sub_heading = $("input[name='sub_heading']").val();
        var description = $("textarea[name='description']").val();
        var description1 = CKEDITOR.instances['editor'].getData();
        var meta_title = $("textarea[name='meta_title']").val();
        var meta_keyword = $("textarea[name='meta_keyword']").val();
        var meta_description = $("textarea[name='meta_description']").val();
        var formData = new FormData();
        formData.append('id',id);
        formData.append('image',image);
        formData.append('image1',image1);
        formData.append('image2',image2);
        formData.append('image3',image3);
        formData.append('image4',image4);
        formData.append('image5',image5);
        formData.append('image6',image6);
        formData.append('heading',heading);
        formData.append('sub_heading',sub_heading);
        formData.append('description',description);
        formData.append('description1',description1);
        formData.append('meta_title', meta_title);
        formData.append('meta_keyword', meta_keyword);
        formData.append('meta_description', meta_description);
		$.ajax({
			url : siteUrl+'admin/menu/update',
			type : 'POST',
			data : formData,
			async: false,
            contentType:false,
            processData:false,
			success : function(result) {
                    window.location.href = siteUrl+'admin/menu';
			}
		});
	}	
});

function updateMenuBottomless() {
	var valid = true;


        var heading = $("input[name='heading']").val();
        var sub_heading = $("input[name='sub_heading']").val();
        var description = $("textarea[name='description']").val();
        var description1 = CKEDITOR.instances['editor'].getData();
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
    if (sub_heading.length == 0) {
		valid = false;
		$('#msgsub_heading').show();
		$('#msgsub_heading').html(' enter sub_heading');
	}
    if (description.length == 0) {
		valid = false;
		$('#msgdescription').show();
		$('#msgdescription').html(' enter description');
	}
    if (description1.length == 0) {
		valid = false;
		$('#msgdescription1').show();
		$('#msgdescription1').html(' enter description');
	}
	return valid;
}

