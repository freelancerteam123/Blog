// Define message validate for admin page

function getMessageEmpty (name) {
	return name + " không được bỏ trống."
}

function getMessageMinLength (name, size) {
	return name + " phải lớn hơn " + size + " ký tự";
}

function getMessageMaxLength (name, size) {
	return name + " phải nhỏ hơn " + size + " ký tự";
}

var MESSAGES_VALIDATE = {
	email: {
		required: getMessageEmpty("Email"),
		email: "Hãy nhập đúng định dạng email."
	},

	password: {
		required: getMessageEmpty("Mật khẩu"),
		minlength: getMessageMinLength("Mật khẩu", 6),
    	maxlength: getMessageMaxLength("Mật khẩu", 32)
	},

	required: function (name) {
		var result = {};
		result[name] = {
			required: getMessageEmpty(name)
		}

		return result;
	}
}