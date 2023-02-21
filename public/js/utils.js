let datePickerConfig  = {
    locale: {
        "format": 'DD/MM/YYYY',
        "separator": " - ",
        "applyLabel": "Aplicar",
        "cancelLabel": "Cancelar",
        "fromLabel": "De",
        "toLabel": "A",
        "customRangeLabel": "Elegir",
        "daysOfWeek": [
            "Dom",
            "Lun",
            "Mar",
            "Mie",
            "Jue",
            "Vie",
            "Sab"
        ],
        "monthNames": [
            "Enero",
            "Febrero",
            "Marzo",
            "Abril",
            "Mayo",
            "Junio",
            "Julio",
            "Agosto",
            "Septiembre",
            "Octubre",
            "Noviembre",
            "Diciembre"
        ],
        "firstDay": 1
    },
    linkedCalendars: false,
    minDate: new Date(2022, 9, 21),
    maxDate: new Date(2022, 9, 23)
}

function validate(element){
    let inputs = element.find('input');
    let valid = true;

    inputs.each(function (index, value){
        let input = $(value);

        switch (input.attr('name')){
            case 'phone':
                if(validatePhone(input.val())){
                    input.removeClass('is-invalid').addClass('is-valid');
                    input.next().html("&nbsp;")
                }else {
                    input.removeClass('is-valid').addClass('is-invalid');
                    input.next().html("El número de teléfono es invalido.")
                    valid = false;
                }
                break;
            case 'dni':
                if(validateDNI(input.val())){
                    input.removeClass('is-invalid').addClass('is-valid');
                    input.next().html("&nbsp;")
                }else {
                    input.removeClass('is-valid').addClass('is-invalid');
                    input.next().html("El DNI es incorrecto.")
                    valid = false;
                }
                break;
            default:
                if(validateTextField(input.val())){
                    input.removeClass('is-invalid').addClass('is-valid');
                    input.next().html("&nbsp;")
                }else {
                    input.removeClass('is-valid').addClass('is-invalid');
                    input.next().html("Este campo es obligatorio.")
                    valid = false;
                }
        }
    });
    return valid;
}

function validateTextField(text){
    return text.length >= 1;
}

function validatePhone(phone){
    return phone.length >= 9;
}

function validateDNI(dni) {
    let letters ='TRWAGMYFPDXBNJZSQVHLCKET';
    let number;
    let letter;

    if(/^\d{8}[a-zA-Z]$/.test(dni)){
        number = dni.substring(0, dni.length-1) %23;
        letter = dni.substring(dni.length -1);
        letters = letters.substring(number, number+1);
        if (letters === letter.toUpperCase()) return true;
    }
    return false;
}
