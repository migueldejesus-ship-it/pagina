function reCaptchaOnFocus() {
    let script = document.createElement('script');
    script.src = 'https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit';
    document.querySelector('form').appendChild(script);

    document.getElementById('txtEmail').removeEventListener('focus', reCaptchaOnFocus)
};
document.getElementById('txtEmail').addEventListener('focus', reCaptchaOnFocus, false);


var onloadCallback = function () {
    grecaptcha.render('google_recaptcha', {
        'sitekey': '6LenP8MgAAAAAOD0NJEur-vhlcLG8-LM69aCkwBs'
    });
};

$('#enviarComentario').on('click', function (evt) {
    var captcha = grecaptcha.getResponse();
    if ($("#opinionForm").valid()) {
        if (captcha.length == 0) {
            evt.preventDefault();
            Swal.fire({
                customClass: {
                    confirmButton: 'btnIEE'
                },
                with: '50rem',
                icon: 'warning',
                titleText: '¡Atención!',
                text: 'Marca el cuadro de "No soy un robot" para continuar.',
                showConfirmButton: true,
                buttonsStyling: false,
                confirmButtonText:
                    '<i class="fa fa-thumbs-up"></i> Entendido',
                confirmButtonAriaLabel: 'Entendido, continuar.',
            });
            return false;
        } else {
            var infConsultada = $("#infConsultada").val();
            var infUtilidad = $('input:radio[name=infUtilidad]:checked').val();
            var infClara = $('input:radio[name=infClara]:checked').val();
            var txtEmail = $("#txtEmail").val();
            var dudaSugerencia = $("#dudaSugerencia").val();
            console.log(`${captcha}`);
            var datos = new FormData();
            datos.append("infConsultada", infConsultada);
            datos.append("infUtilidad", infUtilidad);
            datos.append("infClara", infClara);
            datos.append("txtEmail", txtEmail);
            datos.append("dudaSugerencia", dudaSugerencia);
            datos.append("captcha", captcha);
            $.ajax({
                url: "/../contenido/ajax/opiniones.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success: function (respuesta) {
                    if (respuesta == "ok") {
                        Swal.fire({
                            customClass: {
                                confirmButton: 'btnIEE'
                            },
                            icon: 'success',
                            title: '¡Bien hecho!',
                            text: 'Tu Opinión ha sido enviada con éxito, agradecemos tu interés.',
                            showConfirmButton: true,
                            buttonsStyling: false,
                            confirmButtonText:
                                '<i class="fa fa-thumbs-up"></i> Continuar',
                            confirmButtonAriaLabel: 'Entendido, continuar.',
                        }).then(function (result) {
                            if (result.value) {
                                window.location = "";
                            }
                        })
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: '¡Error!',
                            text: respuesta,
                            showConfirmButton: false,
                            showCancelButton: true,
                            cancelButtonText:
                                '<i class="fa fa-thumbs-down"></i> Cancelar',
                        })
                    }
                }
            });
            return true;
        }
    }

});

$(function () {
    $.validator.addMethod("validCamposTexto", function (value, element) {
        var pattern = /^[,\\.\\a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ¿?¡! ]*$/;
        return this.optional(element) || pattern.test(value);
    }, "No se permiten caracteres especiales ( +*{}[]/()#$%& )");
    $.validator.setDefaults({
        debug: true,
        onsubmit: true,
        focusInvalid: true,
    });
    $("#opinionForm").validate({
        rules: {
            "infConsultada": { "required": true, "validCamposTexto": true },
            "infUtilidad": { "required": true },
            "infClara": { "required": true },
            "txtEmail": { "required": true, "email": true },
            "dudaSugerencia": { "required": true, "validCamposTexto": true },
            "google_recaptcha": { "required": true },
        },
        messages: {
            "infConsultada": { "required": "Este campo es obligatorio.", "validCamposTexto": "No se permiten caracteres especiales ( +*{}[]/()#$%& )" },
            "infUtilidad": "Debe elegir una opción.",
            "infClara": "Debe elegir una opción.",
            "txtEmail": { "required": "Escriba un correo electrónico.", "email": "Escriba un correo electrónico válido." },
            "dudaSugerencia": { "required": "Este campo es obligatorio.", "validCamposTexto": "No se permiten caracteres especiales ( +*{}[]/()#$%& )" },
            "google_recaptcha": "Validar 'No soy un robot'.",
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.validacionError').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid').addClass(validClass);
        },
        submitHandler: function (form) {
            $(form).find("#opinionForm").attr("disabled", true);
        }
    });
});