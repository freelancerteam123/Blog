$('.form-delete-record').submit(function () {
	return confirm("Bạn có thực sự muốn xóa dữ liệu này?")
})

$('.must-checked-one input[type="checkbox"]').change(function (e) {
	if (!$('.must-checked-one input[type="checkbox"]:checked').length) {
		$(this).prop('checked', true);
    }
})
//# sourceMappingURL=form.js.map
