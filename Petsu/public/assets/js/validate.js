if ($("#form-client").length > 0) {
    $('#form-client').validate({
        rules: {
            name: {
                required: true,
                maxlength: 30
            },

            dni: {
                required: true,
                maxlength: 10,
                number: true
            },

            email: {
                required: true,
                maxlength: 50
            },

            addres: {
                required: true,
                maxlength: 50

            },

        },
        messages: {

            name: {
                required: "Ingrese el nombre ",
                maxlength: "El nombre no puede sobrepasar los 30 caracteres",
            },
            dni: {
                required: "Ingrese el numero de cedula",
                maxlength: "La cedula no es valida",
                number: "Ingrese porfavor un numero valido"
            },

            email: {
                required: "Ingrese el email",
                maxlength: "La longitud del email no es valida",


            },

            addres: {
                required: "Ingrese la direccion",
                maxlength: "Direccion no valida"


            },

        }
    });


}