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