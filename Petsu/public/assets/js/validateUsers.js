if ($("#form-users").length > 0) {
    $('#form-users').validate({
        rules: {
            name: {
                required: true,
                maxlength: 30
            },


            email: {
                required: true,
                maxlength: 50
            },

            rol_id: {
                required: true,
                maxlength: 20
            },

            password: {
                required: true,
                maxlength: 20

            },
            password_confirmation: {
                required: true,
                maxlength: 20

            },

        },
        messages: {

            name: {
                required: "Enter the name",
                maxlength: "The name cannot exceed 30 characters",
            },
            dni: {
                required: "Enter the dni",
                maxlength: "The dni is not valid",
                number: "Please enter a valid number"
            },

            email: {
                required: "Enter the email",
                maxlength: "The lenght of the email is not valid",


            },

            rol_id: {
                required: "select a role user",
                maxlength: 20
            },

            password: {
                required: "Enter the password",
                maxlength: 20

            },
            password_confirmation: {
                required: "Confirm the password",
                maxlength: 20

            },



        }
    });


}