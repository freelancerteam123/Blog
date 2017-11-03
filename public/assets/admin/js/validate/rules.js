// Define rules validate for admin page

RULES = {
	email: {
        email: true,
        required: true
    },

    password: {
    	required: true,
    	minlength: 6,
    	maxlength: 32
    },

    required: function (name) {
    	var result = {};
    	result[name] = {
    		required: true
    	}

    	return result;
    },
}