// Define rules validate for admin page

var RULES = {
	email: {
        email: true,
        required: true
    },

    password: {
    	required: true,
    	minlength: 6,
    	maxlength: 32
    },

    required: function () {
    	return {
    		required: true
    	}
    },
}
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
		return {
			required: getMessageEmpty(name),
		};
	}
}
// Validate form admin

$('#login-form').validate({
    rules: {
        email: RULES.email,
        password: RULES.password,
    },    
    messages: {
        email: MESSAGES_VALIDATE.email,
        password: MESSAGES_VALIDATE.password
    }
})

$('#form-add-admin').validate({
	rules: {
        email: RULES.email,
        name: RULES.required('name'),
    },    
    messages: {
        email: MESSAGES_VALIDATE.email,
        name: MESSAGES_VALIDATE.required("Tên")
    }
})

$('#form-filter-user').validate({
    rules: {
        pagination: RULES.required('pagination')
    },    
    messages: {
        pagination: MESSAGES_VALIDATE.required("Số lượng bản ghi")
    }
})
//# sourceMappingURL=validate.js.map
