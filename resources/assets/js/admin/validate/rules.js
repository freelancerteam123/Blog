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