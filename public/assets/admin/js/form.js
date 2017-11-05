$('.form-delete-record').submit(function () {
	return confirm("Bạn có thực sự muốn xóa dữ liệu này?")
})

$('.must-checked-one input[type="checkbox"]').change(function (e) {
	if (!$('.must-checked-one input[type="checkbox"]:checked').length) {
		$(this).prop('checked', true);
    }
})

// Remove params null in url
$('#form-filter-user').submit(function () {
	$(':input[value=""]').attr('disabled', true);
})
//# sourceMappingURL=form.js.map
