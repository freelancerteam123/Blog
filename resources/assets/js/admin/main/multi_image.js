var sources = [];

var showImage = function () {
    var html = "";
    for (var i = 0; i < sources.length; i++) {
        var img = '<div class="card col-md-3">'
		  	+ '<img class="card-img-top" src="' + sources[i] + '">'
		  	+ '<div class="card-block">'
		    	+ '<a class="btn btn-danger btn-sm btn-delete">Xóa</a>'
		  	+ '</div>'
		+ '</div>';
		html += img;
    }

   	$('.list-multi-image').css('display', html ? 'block' : 'none');
   	$('.btn-clear-all').css('display', html ? 'inline-block' : 'none');
    $('.list-multi-image').html(html);
    $(".multi-image-component input[type='file']").val('');
}

function readURL(input) {
    if (input.files && input.files.length) {
        var imgs = [];
        for (var key in input.files) {
            if (key != 'length' && key != 'item')
                imgs.push(input.files[key]);
        }

        var loadImage = function () {
            var img = imgs.shift();
            if (img.name) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    sources.push(e.target.result)
                    if (imgs.length) {
                        loadImage();
                    } else {
                        showImage();
                    }
                }

                reader.readAsDataURL(img);
            }
        }

        loadImage();
    }

    $(document).on('click', '.multi-image-component .btn-delete', function() {
    	var src = $(this).parent().parent().find('img').attr('src');
    	var index = sources.indexOf(src);
    	sources.splice(index, 1);
    	showImage();
    });
}


$(".multi-image-component input[type='file']").change(function() {
    readURL(this);
});

$(".multi-image-component .btn-clear-all").click(function() {
    sources = [];
    showImage();
});