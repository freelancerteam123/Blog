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