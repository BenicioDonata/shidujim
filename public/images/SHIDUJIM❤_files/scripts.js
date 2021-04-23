$(document).ready(function () {


    var $sections = $('.form-section');
    var index_step = 0;

    function navigateTo(index) {
        index_step = index;
        $sections.removeClass('current').eq(index).addClass('current');
        $('.form-navigation .previous').toggle(index>0);
        var atTheEnd = index >= $sections.length - 1;
        $('.form-navigation .next').toggle(!atTheEnd);
        $('.form-navigation .send').toggle(atTheEnd);
        $('.card .card-header').css('background-color','rgb(91, 92, 40)').css('border-top-left-radius', '11px').css('border-top-right-radius', '11px').css('height', '46px');
        $('.progress-div-bar .progress').css('background', '#e9ecef');

        switch (index) {

            case 0:
                $('.card .card-header h5').text('');
                $('.contact-form .step0 p').text('En el proceso de matchmaking, la diferencia de Shidujim.com es el factor humano, en forma totalmente desinteresada, analizamos cada registro en forma individual, somos profesionales, discretas y ponemos lo mejor, creemos que no mereces un algoritmo automatizado que decida por tu futuro, como sabes esto es un proceso que lleva tiempo, por más que no te contactemos,  podes dar por sentado que te tendremos en cuenta, aunque no podemos garantizar encontrar a alguien, si garantizamos que pondremos mucho esfuerzo.');
                $('.card .card-header').css('height', '15px');
                $('.progress-div-bar').css('display', 'none');
                break;

            case 1:
                $('.card .card-header h5').text('Bienvenido!');
                $('.contact-form .step1 p').text('Todos tus datos tienen que estar correctos y completos para poder ser tomados en cuenta. (al final se te pedirá que subas dos fotos lo mas actuales posibles). Toda la información es confidencial, puedes ingresarla con total confianza.');
                $('.progress-div-bar .progress .progress-bar').attr('aria-valuenow', '11.11');
                $('.progress-div-bar .progress .progress-bar').css('width', '11.11%');
                $('.progress-div-bar p').text('Página 1 de 9');
                $('.progress-div-bar').css('display', 'inline-flex');
                break;

            case 2:
                $('.card .card-header h5').text('Bienvenido!');
                $('.contact-form .step2 p').text('Todos tus datos tienen que estar correctos y completos para poder ser tomados en cuenta. (al final se te pedirá que subas dos fotos lo mas actuales posibles). Toda la información es confidencial, puedes ingresarla con total confianza.');
                $('.card .card-form h5').text('Datos Personales');
                $('.progress-div-bar .progress .progress-bar').attr('aria-valuenow', '22.22');
                $('.progress-div-bar .progress .progress-bar').css('width', '22.22%');
                $('.progress-div-bar p').text('Página 2 de 9');
                datetimeComponent();
                break;

            case 3:
                $('.card .card-header h5').text('Bienvenido!');
                $('.contact-form .step3 p').text('Todos tus datos tienen que estar correctos y completos para poder ser tomados en cuenta. (al final se te pedirá que subas dos fotos lo mas actuales posibles). Toda la información es confidencial, puedes ingresarla con total confianza.');
                $('.card .card-step3-header h5').text('Referencias Personales');
                $('.card .card-step3-body p').text('Escribe Nombre, Apellido, Teléfono, email y comunidad a la que asisten 2 personas que puedan dar referencias de vos.');
                $('.progress-div-bar .progress .progress-bar').attr('aria-valuenow', '33.33');
                $('.progress-div-bar .progress .progress-bar').css('width', '33.33%');
                $('.progress-div-bar p').text('Página 3 de 9');
                break;

            case 4:
                $('.card .card-header h5').text('Bienvenido!');
                $('.contact-form .step4 p').text('Todos tus datos tienen que estar correctos y completos para poder ser tomados en cuenta. (al final se te pedirá que subas dos fotos lo mas actuales posibles). Toda la información es confidencial, puedes ingresarla con total confianza.');
                $('.card .card-form h5').text('Referencias Comunitarias');
                $('.progress-div-bar .progress .progress-bar').attr('aria-valuenow', '44.44');
                $('.progress-div-bar .progress .progress-bar').css('width', '44.44%');
                $('.progress-div-bar p').text('Página 4 de 9');
                break;

            case 5:
                $('.card .card-header h5').text('Bienvenido!');
                $('.contact-form .step5 .card-step5 p').text('Todos tus datos tienen que estar correctos y completos para poder ser tomados en cuenta. (al final se te pedirá que subas dos fotos lo mas actuales posibles). Toda la información es confidencial, puedes ingresarla con total confianza.');
                $('.card .card-form h5').text('Estudios');
                $('.progress-div-bar .progress .progress-bar').attr('aria-valuenow', '55.55');
                $('.progress-div-bar .progress .progress-bar').css('width', '55.55%');
                $('.progress-div-bar p').text('Página 5 de 9');
                break;

            case 6:
                $('.card .card-header h5').text('Bienvenido!');
                $('.contact-form .step6 .card-step6 p').text('Todos tus datos tienen que estar correctos y completos para poder ser tomados en cuenta. (al final se te pedirá que subas dos fotos lo mas actuales posibles). Toda la información es confidencial, puedes ingresarla con total confianza.');
                $('.card .card-form h5').text('Información Personal');
                $('.progress-div-bar .progress .progress-bar').attr('aria-valuenow', '66.66');
                $('.progress-div-bar .progress .progress-bar').css('width', '66.66%');
                $('.progress-div-bar p').text('Página 6 de 9');
                break;

            case 7:
                $('.card .card-header h5').text('Bienvenido!');
                $('.contact-form .step7 .card-step7 p').text('Todos tus datos tienen que estar correctos y completos para poder ser tomados en cuenta. (al final se te pedirá que subas dos fotos lo mas actuales posibles). Toda la información es confidencial, puedes ingresarla con total confianza.');
                $('.card .card-form h5').text('Que buscas?');
                $('.progress-div-bar .progress .progress-bar').attr('aria-valuenow', '77.77');
                $('.progress-div-bar .progress .progress-bar').css('width', '77.77%');
                $('.progress-div-bar p').text('Página 7 de 9');
                break;

            case 8:
                $('.card .card-header h5').text('Bienvenido!');
                $('.contact-form .step8 .card-step8 p').text('Todos tus datos tienen que estar correctos y completos para poder ser tomados en cuenta. (al final se te pedirá que subas dos fotos lo mas actuales posibles). Toda la información es confidencial, puedes ingresarla con total confianza.');
                $('.card .card-form h5').text('ACEPTACION FINAL');
                $('.progress-div-bar .progress .progress-bar').attr('aria-valuenow', '88.88');
                $('.progress-div-bar .progress .progress-bar').css('width', '88.88%');
                $('.progress-div-bar p').text('Página 8 de 9');

                //TODO validar que si presiona siguiente y seleccion que NO QUIERE CONTINUAR lo lleve al step0 SINO que lo lleve al step9

                break;

            case 9:
                $('.card .card-header h5').text('Bienvenido!');
                $('.contact-form .step9 .card-step9 p').text('Todos tus datos tienen que estar correctos y completos para poder ser tomados en cuenta. (al final se te pedirá que subas dos fotos lo mas actuales posibles). Toda la información es confidencial, puedes ingresarla con total confianza.');
                $('.progress-div-bar .progress .progress-bar').attr('aria-valuenow', '100');
                $('.progress-div-bar .progress .progress-bar').css('width', '100%');
                $('.progress-div-bar p').text('Página 9 de 9');
                break;
        }

    }

    function curlIndex()
    {
        return $sections.index($sections.filter('.current'));
    }

    $('.form-navigation .previous').click(function () {
        navigateTo(curlIndex() - 1);
    });

    $('.form-navigation .next').click(function () {

        switch (index_step) {
            case 1:
                // if($('.step1 select').val() == ""){
                //     toastr["error"]("Seleccione Género","Campo Género");
                //     $('.step1 select').focus();
                //     return false;
                // }
                    navigateTo(curlIndex() + 1);
            break;

            case 2:
                // if($('.step2 #name').val() == ""){
                //     toastr["error"]("Completar el campo","Campo Nombre");
                //     $('.step2 #name').focus();
                //     return false;
                // }
                // if($('.step2 #lastname').val() == ""){
                //     toastr["error"]("Completar el campo","Campo Apellido Paterno");
                //     $('.step2 #lastname').focus();
                //     return false;
                // }
                // if($('.step2 #second_lastname').val() == ""){
                //     toastr["error"]("Completar el campo","Campo Apellido Materno");
                //     $('.step2 #second_lastname').focus();
                //     return false;
                // }
                // if($('.step2 #date_of_birth').val() == ""){
                //     toastr["error"]("Completar el campo","Campo Fecha de Nacimiento");
                //     $('.step2 #date_of_birth').focus();
                //     return false;
                // }
                // if(!$('.step2 #single').is(':checked') && !$('.step2 #divorced').is(':checked') && !$('.step2 #widower').is(':checked') ){
                //     toastr["error"]("Seleccionar una opción","Campo Estado Civil");
                //     $('.step2 #single').focus();
                //     return false;
                // }
                // if($('.step2 #profession').val() == ""){
                //     toastr["error"]("Completar el campo","Campo Profesion");
                //     $('.step2 #profession').focus();
                //     return false;
                // }
                // if($('.step2 #email').val() == ""){
                //     toastr["error"]("Completar el campo","Campo Email");
                //     $('.step2 #email').focus();
                //     return false;
                // }
                // if($(".step2 #email").val().indexOf('@', 0) == -1 || $(".step2 #email").val().indexOf('.', 0) == -1) {
                //     toastr["error"]("Incorrecto", "Campo Email");
                //     $('.step2 #email').focus();
                //     return false;
                // }
                // if($('.step2 #main_phone').val() == ""){
                //     toastr["error"]("Completar el campo","Campo Teléfono Principal");
                //     $('.step2 #main_phone').focus();
                //     return false;
                // }
                // if(isNaN($(".step2 #main_phone").val())) {
                //     toastr["error"]("Sólo Números","Campo Teléfono Principal");
                //     $('.step2 #main_phone').focus();
                //     return false;
                // }
                // if($('.step2 #main_phone').val() < 0 ){
                //     toastr["error"]("Incorrecto","Campo Teléfono Principal");
                //     $('.step2 #main_phone').focus();
                //     return false;
                // }
                // if($(".step2 #main_phone").val().length !== 10 ) {
                //     toastr["error"]("Debe tener 9 caracteres","Campo Teléfono Principal");
                //     $('.step2 #main_phone').focus();
                //     return false;
                // }
                // if($('.step2 #alternative_phone').val() == "") {
                // toastr["error"]("Completar el campo","Campo Teléfono Alternativo");
                // $('.step2 #alternative_phone').focus();
                // return false;
                // }
                // if(isNaN($(".step2 #alternative_phone").val())) {
                //     toastr["error"]("Sólo Números","Campo Teléfono Alternativo");
                //     $('.step2 #alternative_phone').focus();
                //     return false;
                // }
                // if($('.step2 #alternative_phone').val() < 0 ){
                //     toastr["error"]("Incorrecto","Campo Teléfono Alternativo");
                //     $('.step2 #main_phone').focus();
                //     return false;
                // }
                // if($(".step2 #alternative_phone").val().length !== 10 ) {
                //     toastr["error"]("Debe tener 9 caracteres","Campo Teléfono Alternativo");
                //     $('.step2 #alternative_phone').focus();
                //     return false;
                // }
                // if($('.step2 select#lineage').val() == ""){
                //     toastr["error"]("Seleccione Linaje","Campo Linaje");
                //     $('.step1 select#lineage').focus();
                //     return;
                // }
                // if($('.step2 select#religiouscompliancelevel').val() == ""){
                //     toastr["error"]("Seleccione Cumplimiento Religioso","Campo Cumplimiento Religioso");
                //     $('.step1 select#religiouscompliancelevel').focus();
                //     return;
                // }
                // if(!$('.step2 #kasher_only_house').is(':checked') && !$('.step2 #forever_kasher').is(':checked') && !$('.step2 #Kasher_shabat').is(':checked') && !$('.step2 #Kasher_shabat_tzniut').is(':checked') && !$('.step2 #wherever').is(':checked') ){
                //     toastr["error"]("Seleccionar una opción","Campo Nivel Aceptado");
                //     $('.step2 #forever_kasher').focus();
                //     return false;
                // }

                navigateTo(curlIndex() + 1);
            break;

            case 3:
                // if($('.step3 #reference_one').val() == ""){
                //     toastr["error"]("Completar el campo","Campo Referencia 1");
                //     $('.step3 #reference_one').focus();
                //     return false;
                // }

                navigateTo(curlIndex() + 1);

            break;

            case 4:
                if($('.step1 select').val() == ""){
                    toastr["error"]("Seleccione Género","Campo Género");
                    $('.step1 select').focus();
                }else{
                    navigateTo(curlIndex() + 1);
                }
                break;

            case 5:
                if($('.step1 select').val() == ""){
                    toastr["error"]("Seleccione Género","Campo Género");
                    $('.step1 select').focus();
                }else{
                    navigateTo(curlIndex() + 1);
                }
                break;

            case 6:
                if($('.step1 select').val() == ""){
                    toastr["error"]("Seleccione Género","Campo Género");
                    $('.step1 select').focus();
                }else{
                    navigateTo(curlIndex() + 1);
                }
                break;

            case 7:
                if($('.step1 select').val() == ""){
                    toastr["error"]("Seleccione Género","Campo Género");
                    $('.step1 select').focus();
                }else{
                    navigateTo(curlIndex() + 1);
                }
                break;


            default:
                navigateTo(curlIndex() + 1);
        }

    });

    $sections.each(function (index,section) {
        $(section).find(':input').attr('data-parsley-group','block-'+index);
    });

    navigateTo(0);

    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "2500",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

    function datetimeComponent(){

        $.datepicker.regional['es'] = {
            closeText: 'Cerrar',
            prevText: '<Ant',
            nextText: 'Sig>',
            currentText: 'Hoy',
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
            dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
            dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
            weekHeader: 'Sm',
            dateFormat: 'dd/mm/yy',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        };
        $.datepicker.setDefaults($.datepicker.regional['es']);

        $('#date_of_birth').datepicker({
            dateFormat: 'dd/mm/yy',
            showButtonPanel: false,
            changeMonth: false,
            changeYear: false,
            inline: true

        });
    }

    // //Estado civil
    // // TODO crear migracion
    // $('.step2 #single').on('click', function () {
    //     $('.step2 #single').val('1');
    //     $('.step2 #divorced').val('0');
    //     $('.step2 #widower').val('0');
    // });
    //
    // $('.step2 #divorced').on('click', function () {
    //     $('.step2 #divorced').val('1');
    //     $('.step2 #single').val('0');
    //     $('.step2 #widower').val('0');
    // });
    //
    // $('.step2 #widower').on('click', function () {
    //     $('.step2 #widower').val('1');
    //     $('.step2 #single').val('0');
    //     $('.step2 #divorced').val('0');
    // });
    //
    //
    // // nivel de aceptacion religioso
    // //TODO crear migracion
    // $('.step2 #kasher_only_house').on('click', function () {
    //     $('.step2 #kasher_only_house').val('1');
    //     $('.step2 #forever_kasher').val('0');
    //     $('.step2 #Kasher_shabat').val('0');
    //     $('.step2 #Kasher_shabat_tzniut').val('0');
    //     $('.step2 #wherever').val('0');
    // });
    //
    // $('.step2 #kasher_only_house').on('click', function () {
    //     $('.step2 #kasher_only_house').val('1');
    //     $('.step2 #forever_kasher').val('0');
    //     $('.step2 #Kasher_shabat').val('0');
    //     $('.step2 #Kasher_shabat_tzniut').val('0');
    //     $('.step2 #wherever').val('0');
    // });







});





