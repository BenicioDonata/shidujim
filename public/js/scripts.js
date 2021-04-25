$(document).ready(function () {

    const MAXIMO_TAMANIO_BYTES = 15000000; // 1MB = 1 millón de bytes

    var $sections = $('.form-section');
    var index_step = 0;
    var total_size = 0;


    function navigateTo(index) {
        index_step = index;
        $sections.removeClass('current').eq(index).addClass('current');
        $('.form-navigation .previous').toggle(index>0);
        var atTheEnd = index >= $sections.length - 1;
        $('.form-navigation .next').toggle(!atTheEnd);
        $('.form-navigation .send').toggle(atTheEnd);

        if(index == $sections.length - 1) {
            $('.form-navigation .previous').hide();
        }



        $('.card .card-header').css('background-color','#00C6D7').css('border-top-left-radius', '11px').css('border-top-right-radius', '11px').css('height', '46px');
        $('.progress-div-bar .progress').css('background', '#e9ecef');

        switch (index) {

            case 0:
                $('.card .card-header h5').text('');
                $('.contact-form .step0 p').text('En el proceso de matchmaking, la diferencia de Shidujim.com es el fa  ctor humano, en forma totalmente desinteresada, analizamos cada registro en forma individual, somos profesionales, discretas y ponemos lo mejor, creemos que no mereces un algoritmo automatizado que decida por tu futuro, como sabes esto es un proceso que lleva tiempo, por más que no te contactemos,  podes dar por sentado que te tendremos en cuenta, aunque no podemos garantizar encontrar a alguien, si garantizamos que pondremos mucho esfuerzo.');
                $('.card .card-header').css('height', '15px');
                $('.progress-div-bar').css('display', 'none');
                $('.progress-div-bar .progress .progress-bar').attr('aria-valuenow', '11.11');
                $('.progress-div-bar .progress .progress-bar').css('width', '11.11%');
                $('.progress-div-bar p').text('Página 1 de 9');
                $('.progress-div-bar').css('display', 'inline-flex');
                $('.step0 select').focus();

                break;

            case 1:
                $('.card .card-header h5').text('Bienvenido!');
                $('.contact-form .step1 p').text('Todos tus datos tienen que estar correctos y completos para poder ser tomados en cuenta. (al final se te pedirá que subas dos fotos lo mas actuales posibles). Toda la información es confidencial, puedes ingresarla con total confianza.');
                $('.progress-div-bar .progress .progress-bar').attr('aria-valuenow', '22.22');
                $('.progress-div-bar .progress .progress-bar').css('width', '22.22%');
                $('.progress-div-bar p').text('Página 2 de 9');
                $('.progress-div-bar').css('display', 'inline-flex');
                $('.step1 .divorced').hide();
                $('.step1 .widower').hide();
                $('.step1 .single').show();
                $('.step1 label#widower').text('¿Eres Viudo?');
                $('.step1 label#divorced').text('¿Eres Divorciado?');
                $('.step1 label#single').text('¿Eres Soltero?');
                if($('.step0 select').val() == 1){
                    $('.card .card-header h5').text('Bienvenida!');
                    $('.step1 label#widower').text('¿Eres Viuda?');
                    $('.step1 label#divorced').text('¿Eres Divorciada?');
                    $('.step1 label#single').text('¿Eres Soltera?');
                }

                break;

            case 2:
                $('.card .card-header h5').text('Bienvenido!');
                $('.contact-form .step2 p').text('Todos tus datos tienen que estar correctos y completos para poder ser tomados en cuenta. (al final se te pedirá que subas dos fotos lo mas actuales posibles). Toda la información es confidencial, puedes ingresarla con total confianza.');
                $('.card .card-form h5').text('Datos Personales');
                $('.progress-div-bar .progress .progress-bar').attr('aria-valuenow', '33.33');
                $('.progress-div-bar .progress .progress-bar').css('width', '33.33%');
                $('.progress-div-bar p').text('Página 3 de 9');
                datetimeComponent();
                $('.step2 #name').focus();
                if($('.step0 select').val() == 1){
                    $('.card .card-header h5').text('Bienvenida!');
                }

                break;

            // case 3:
            //     $('.card .card-header h5').text('Bienvenido!');
            //     $('.contact-form .step3 p').text('Todos tus datos tienen que estar correctos y completos para poder ser tomados en cuenta. (al final se te pedirá que subas dos fotos lo mas actuales posibles). Toda la información es confidencial, puedes ingresarla con total confianza.');
            //     $('.card .card-step3-header h5').text('Referencias Personales');
            //     $('.card .card-step3-body p').text('Escribe Nombre, Apellido, Teléfono, email y comunidad a la que asisten 2 personas que puedan dar referencias de vos.');
            //     $('.progress-div-bar .progress .progress-bar').attr('aria-valuenow', '33.33');
            //     $('.progress-div-bar .progress .progress-bar').css('width', '33.33%');
            //     $('.progress-div-bar p').text('Página 3 de 9');
            //     $('.step3 #reference_one').focus()
            //     break;

            case 3:
                $('.card .card-header h5').text('Bienvenido!');
                $('.contact-form .step4 p').text('Todos tus datos tienen que estar correctos y completos para poder ser tomados en cuenta. (al final se te pedirá que subas dos fotos lo mas actuales posibles). Toda la información es confidencial, puedes ingresarla con total confianza.');
                $('.card .card-form h5').text('Referencias Comunitarias');
                $('.progress-div-bar .progress .progress-bar').attr('aria-valuenow', '44.44');
                $('.progress-div-bar .progress .progress-bar').css('width', '44.44%');
                $('.progress-div-bar p').text('Página 4 de 9');
                $('.step4 #community_assists').focus();
                if($('.step0 select').val() == 1){
                    $('.card .card-header h5').text('Bienvenida!');
                }

                break;

            case 4:
                $('.card .card-header h5').text('Bienvenido!');
                $('.contact-form .step5 .card-step5 p').text('Todos tus datos tienen que estar correctos y completos para poder ser tomados en cuenta. (al final se te pedirá que subas dos fotos lo mas actuales posibles). Toda la información es confidencial, puedes ingresarla con total confianza.');
                $('.card .card-form h5').text('Tus Estudios');
                $('.progress-div-bar .progress .progress-bar').attr('aria-valuenow', '50');
                $('.progress-div-bar .progress .progress-bar').css('width', '55.55%');
                $('.progress-div-bar p').text('Página 5 de 9');
                if($('.step0 select').val() == 1){
                    $('.card .card-header h5').text('Bienvenida!');
                }
                $('.step5 #full_primary').focus();

                break;

            case 5:
                $('.card .card-header h5').text('Bienvenido!');
                $('.contact-form .step6 .card-step6 p').text('Todos tus datos tienen que estar correctos y completos para poder ser tomados en cuenta. (al final se te pedirá que subas dos fotos lo mas actuales posibles). Toda la información es confidencial, puedes ingresarla con total confianza.');
                $('.card .card-form h5').text('Información Personal');
                $('.progress-div-bar .progress .progress-bar').attr('aria-valuenow', '66.66');
                $('.progress-div-bar .progress .progress-bar').css('width', '66.66%');
                $('.progress-div-bar p').text('Página 6 de 9');
                if($('.step0 select').val() == 1){
                    $('.card .card-header h5').text('Bienvenida!');
                }
                $('.step6 select#smoke').focus();

                break;

            case 6:

                $('.card .card-header h5').text('Bienvenido!');
                $('.contact-form .step7 .card-step7 p').text('Todos tus datos tienen que estar correctos y completos para poder ser tomados en cuenta. (al final se te pedirá que subas dos fotos lo mas actuales posibles). Toda la información es confidencial, puedes ingresarla con total confianza.');
                $('.card .card-form h5').text('¿Qué buscas?');
                $('.progress-div-bar .progress .progress-bar').attr('aria-valuenow', '77.77');
                $('.progress-div-bar .progress .progress-bar').css('width', '77.77%');
                $('.progress-div-bar p').text('Página 7 de 9');
                if($('.step0 select').val() == 1){
                    $('.card .card-header h5').text('Bienvenida!');
                }
                $('.step7 #single_seeker').focus();


                // initialize with defaults
                 $(".step7 #input-id").fileinput();

                $(".step7 #input-id").fileinput({
                    //uploadUrl: "http://localhost/file-upload.php",
                    languaje:'es',
                    enableResumableUpload: true,
                    resumableUploadOptions: {
                        // uncomment below if you wish to test the file for previous partial uploaded chunks
                        // to the server and resume uploads from that point afterwards
                        // testUrl: "http://localhost/test-upload.php"
                    },
                    uploadExtraData: {
                        'uploadToken': 'SOME-TOKEN', // for access control / security
                    },
                    //maxFileCount: 5,
                    allowedFileExtensions: ['jpg','jpeg', 'png'],
                    allowedFileTypes: ['image'],    // allow only images
                    showCancel: true,
                    showClose: false,
                    initialPreviewAsData: false,
                    overwriteInitial: false,
                    showUpload:false,
                    previewFileType:['image'],
                    dropZoneEnabled: false,
                    theme: 'fa',
                    // initialPreview: [],          // if you have previously uploaded preview files
                    // initialPreviewConfig: [],    // if you have previously uploaded preview files
                    //deleteUrl: "http://localhost/file-delete.php"
                });

                $(".step7 .file-caption").hide();
                $(".step7 .file-drop-zone-title").hide();
                $(".step7 .file-preview button").hide();
                $(".step7 .file-preview").css('display','none');


                $('.step7 div.input-group-btn.input-group-append span').text('Examinar');
                $('.step7 input.file-caption-name').attr('placeholder','Seleccione los archivos...');

                break;

            case 7:
                // $('.card .card-header h5').text('Bienvenido!');
                // $('.contact-form .step8 .card-step8 p').text('Todos tus datos tienen que estar correctos y completos para poder ser tomados en cuenta. (al final se te pedirá que subas dos fotos lo mas actuales posibles). Toda la información es confidencial, puedes ingresarla con total confianza.');
                $('.card .card-form h5').text('ACEPTACION FINAL');
                $('.progress-div-bar .progress .progress-bar').attr('aria-valuenow', '88.88');
                $('.progress-div-bar .progress .progress-bar').css('width', '88.88%');
                $('.progress-div-bar p').text('Página 8 de 9');
                $('.step8 #accept_share').focus();

                break;

            case 8:
                // $('.card .card-header h5').text('Bienvenido!');
                // $('.contact-form .step9 .card-step9 p').text('Todos tus datos tienen que estar correctos y completos para poder ser tomados en cuenta. (al final se te pedirá que subas dos fotos lo mas actuales posibles). Toda la información es confidencial, puedes ingresarla con total confianza.');
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

            case 0:
                if($('.step0 select').val() == ""){
                    toastr["error"]("Seleccione Género","Campo Género");
                    $('.step0 select').focus();
                    return false;
                }
                navigateTo(curlIndex() + 1);

                break;

            case 1:
                if(!$('.step1 #single_yes').is(':checked') && !$('.step1 #divorced_yes').is(':checked') && !$('.step1 #widower_yes').is(':checked') ){
                    toastr["error"]("Seleccionar una opción","Campo Estado Civil");
                    $('.step1 #single').focus();
                    return false;
                }
                navigateTo(curlIndex() + 1);
            break;

            case 2:
                if($('.step2 #name').val() == ""){
                    toastr["error"]("Completar el campo","Campo Nombre");
                    $('.step2 #name').focus();
                    return false;
                }
                if($('.step2 #name_hebrew').val() == ""){
                    toastr["error"]("Completar el campo","Campo Nombre en Hebreo");
                    $('.step2 #name_hebrew').focus();
                    return false;
                }
                if($('.step2 #lastname').val() == ""){
                    toastr["error"]("Completar el campo","Campo Apellido Paterno");
                    $('.step2 #lastname').focus();
                    return false;
                }
                if($('.step2 #second_lastname').val() == ""){
                    toastr["error"]("Completar el campo","Campo Apellido Materno");
                    $('.step2 #second_lastname').focus();
                    return false;
                }
                if($('.step2 #date_of_birth').val() == ""){
                    toastr["error"]("Completar el campo","Campo Fecha de Nacimiento");
                    $('.step2 #date_of_birth').focus();
                    return false;
                }
                if($('.step2 #profession').val() == ""){
                    toastr["error"]("Completar el campo","Campo Profesion");
                    $('.step2 #profession').focus();
                    return false;
                }
                if($('.step2 #email').val() == ""){
                    toastr["error"]("Completar el campo","Campo Email");
                    $('.step2 #email').focus();
                    return false;
                }
                if($(".step2 #email").val().indexOf('@', 0) == -1 || $(".step2 #email").val().indexOf('.', 0) == -1) {
                    toastr["error"]("Incorrecto", "Campo Email");
                    $('.step2 #email').focus();
                    return false;
                }
                if($('.step2 #main_phone').val() == ""){
                    toastr["error"]("Completar el campo","Campo Teléfono Principal");
                    $('.step2 #main_phone').focus();
                    return false;
                }
                if(isNaN($(".step2 #main_phone").val())) {
                    toastr["error"]("Sólo Números","Campo Teléfono Principal");
                    $('.step2 #main_phone').focus();
                    return false;
                }
                if($('.step2 #main_phone').val() < 0 ){
                    toastr["error"]("Incorrecto","Campo Teléfono Principal");
                    $('.step2 #main_phone').focus();
                    return false;
                }
                if($(".step2 #main_phone").val().length !== 12 ) {
                    toastr["error"]("Debe tener 12 digitos","Campo Teléfono Celular");
                    $('.step2 #main_phone').focus();
                    return false;
                }
                if($('.step2 select#count_sons').val() == ""){
                    toastr["error"]("Seleccione Cantidad","Campo Hijos");
                    $('.step2 select#count_sons').focus();
                    return;
                }
                if($('.step2 select#religiouscompliancelevel').val() == ""){
                    toastr["error"]("Seleccione Cumplimiento Religioso","Campo Cumplimiento Religioso");
                    $('.step2 select#religiouscompliancelevel').focus();
                    return;
                }

                navigateTo(curlIndex() + 1);
            break;

            // case 3:
            //     if($('.step3 #reference_one').val() == ""){
            //         toastr["error"]("Completar el campo","Campo Referencia 1");
            //         $('.step3 #reference_one').focus();
            //         return false;
            //     }
            //
            //     navigateTo(curlIndex() + 1);
            //
            // break;

            case 3:
                if($('.step4 #community_assists').val() == ""){
                    toastr["error"]("Completar el campo","Campo Comunidad a la que asistís");
                    $('.step4 #community_assists').focus();
                    return false;
                }

                navigateTo(curlIndex() + 1);
            break;

            case 4:
                if(!$('.step5 #full_primary').is(':checked') && !$('.step5 #complete_secondary').is(':checked') && !$('.step5 #full_college').is(':checked') && !$('.step5 #postgraduate').is(':checked') && !$('.step5 #hebrew_elementary_school').is(':checked') && !$('.step5 #shiurim_one_per_week').is(':checked') && !$('.step5 #shiurim_two_per_week').is(':checked') && !$('.step5 #shiurim_more_two_per_week').is(':checked') && !$('.step5 #ieshiva').is(':checked') && !$('.step5 #hebrew_high_school').is(':checked')){
                    toastr["error"]("Seleccionar una opción","Campo Estudios");
                    $('.step5 #full_primary').focus();
                    return false;
                }
                if(!$('.step5 #spanish').is(':checked') && !$('.step5 #english').is(':checked') && !$('.step5 #hebrew').is(':checked')){
                    toastr["error"]("Seleccionar una opción","Campo Idiomas");
                    $('.step5 #spanish').focus();
                    return false;
                }
                if($('.step5 #name_school').val() == ""){
                    toastr["error"]("Completar el campo","Campo Nombre Colegio Primario");
                    $('.step5 #name_school').focus();
                    return false;
                }

                navigateTo(curlIndex() + 1);
            break;

            case 5:
                if($('.step6 select#smoke').val() == ""){
                    toastr["error"]("Seleccione opción","Campo Fumas");
                    $('.step6 select#smoke').focus();
                    return false;
                }
                if(!$('.step6 #more_sons').is(':checked') && !$('.step6 #no_more_sons').is(':checked') && !$('.step6 #want_sons').is(':checked') && !$('.step6 #dont_know').is(':checked') ){
                    toastr["error"]("Seleccionar una opción","Campo Hijos");
                    $('.step6 #more_sons').focus();
                    return false;
                }
                if($('.step6 select#location').val() == ""){
                    toastr["error"]("Seleccione opción","Campo Localidad donde vivis");
                    $('.step6 select#location').focus();
                    return false;
                }
                if(!$('.step6 #kasher_only_house').is(':checked') && !$('.step6 #forever_kasher').is(':checked') && !$('.step6 #kasher_shabat').is(':checked') && !$('.step6 #abrej').is(':checked') && !$('.step6 #tora').is(':checked') && !$('.step6 #kasher_shabat_study').is(':checked') && !$('.step6 #hebrew').is(':checked') && !$('.step6 #wherever').is(':checked') ){
                    toastr["error"]("Seleccionar una opción","Campo Nivel Aceptado");
                    $('.step6 #forever_kasher').focus();
                    return false;
                }


                navigateTo(curlIndex() + 1);

            break;

            case 6:
                if(!$('.step7 #single_seeker').is(':checked') && !$('.step7 #divorced_seeker').is(':checked') && !$('.step7 #widower_seeker').is(':checked') && !$('.step7 #wherever_seeker').is(':checked') ){
                    toastr["error"]("Seleccionar una opción","Campo Estado Civil");
                    $('.step7 #single_seeker').focus();
                    return false;
                }
                if(!$('.step7 #couple_sons_yes').is(':checked') && !$('.step7 #couple_sons_no').is(':checked') && !$('.step7 #couple_sons_maybe').is(':checked')){
                    toastr["error"]("Seleccionar una opción","Campo Hijos Anteriores");
                    $('.step7 #couple_sons_yes').focus();
                    return false;
                }
                if(!$('.step7 #full_primary_seek').is(':checked') && !$('.step7 #complete_secondary_seek').is(':checked') && !$('.step7 #full_college_seek').is(':checked') && !$('.step7 #postgraduate_seek').is(':checked') && !$('.step7 #hebrew_elementary_school_seek').is(':checked') && !$('.step7 #shiurim_one_per_week_seek').is(':checked') && !$('.step7 #hebrew_high_school_seek').is(':checked')){
                    toastr["error"]("Seleccionar una opción","Campo Nivel de Estudio");
                    $('.step7 #full_primary_seek').focus();
                    return false;
                }
                if($('.step7 #years_range_from').val() == ""){
                    toastr["error"]("Completar el campo campo","Campo Rango de Edad");
                    $('.step7 #years_range_from').focus();
                    return false;
                }
                if($('.step7 #years_range_to').val() == ""){
                    toastr["error"]("Completar el campo campo","Campo Rango de Edad");
                    $('.step7 #years_range_to').focus();
                    return false;
                }
                if($('.step7 #years_range_from').val() < 18 ){
                    toastr["error"]("Edad incorrecta","Campo Rango de Edad");
                    $('.step7 #years_range_from').focus();
                    return false;
                }
                if($('.step7 #years_range_to').val() < 18 ){
                    toastr["error"]("Edad incorrecta","Campo Rango de Edad");
                    $('.step7 #years_range_to').focus();
                    return false;
                }
                if($(".step7 #years_range_from").val().length < 2 ) {
                    toastr["error"]("Debe tener 2 digitos","Campo Rango de Edad");
                    $('.step7 #years_range_from').focus();
                    return false;
                }
                if($(".step7 #years_range_to").val().length < 2 ) {
                    toastr["error"]("Debe tener 2 digitos","Campo Rango de Edad");
                    $('.step7 #years_range_to').focus();
                    return false;
                }
                if($('.step7 #years_range_from').val() > $('.step7 #years_range_to').val() ){
                    toastr["error"]("Edad incorrecta","Campo Rango de Edad");
                    $('.step7 #years_range_from').focus();
                    return false;
                }
                if(!$('.step7 #live_future_bs').is(':checked') && !$('.step7 #live_future_cp').is(':checked') && !$('.step7 #live_future_df').is(':checked') && !$('.step7 #live_future_c').is(':checked') && !$('.step7 #live_future_u').is(':checked') && !$('.step7 #live_future_ca').is(':checked') && !$('.step7 #live_future_i').is(':checked') && !$('.step7 #live_future_m').is(':checked') && !$('.step7 #live_future_ny').is(':checked') && !$('.step7 #live_future_la').is(':checked') && !$('.step7 #live_future_cor').is(':checked') && !$('.step7 #live_future_t').is(':checked') && !$('.step7 #live_future_ro').is(':checked') && !$('.step7 #live_future_wherever').is(':checked') ){
                    toastr["error"]("Seleccionar una opción","Campo Donde les gustaria vivir ");
                    $('.step7 #live_future_bs').focus();
                    return false;
                }
                if(!$('.step7 #find_partner_one').is(':checked') && !$('.step7 #find_partner_two').is(':checked') && !$('.step7 #find_partner_three').is(':checked') && !$('.step7 #find_partner_four').is(':checked') && !$('.step7 #find_partner_five').is(':checked') && !$('.step7 #find_partner_six').is(':checked') && !$('.step7 #find_partner_seven').is(':checked') && !$('.step7 #find_partner_eigth').is(':checked') && !$('.step7 #find_partner_nine').is(':checked') && !$('.step7 #find_partner_ten').is(':checked')){
                    toastr["error"]("Seleccionar una opción","Campo Encontrar Pareja ");
                    $('.step7 #find_partner_one').focus();
                    return false;
                }
                if (parseInt($("input[type='file']").get(0).files['length'])< 1 ){
                    toastr["error"]("Carga Minima 1 Foto","Campo Cargar Foto");
                    $(".step7 input[type='file']").focus();
                    return false;
                }
                if($("input[type='file']").get(0).files['length'] > 1){

                    for(i=0; (i<$("input[type='file']").get(0).files['length']); i++) {

                        total_size = total_size + $("input[type='file']").get(0).files[i].size;
                    }
                }
                if(total_size > MAXIMO_TAMANIO_BYTES) {
                    toastr["error"]("Supera el tamaño máximo","Campo Cargar Fotos");
                    $(".step7 input[type='file']").focus();
                    return false;
                }

                if(!$('.step7 #family_purity_laws_yes').is(':checked') && !$('.step7 #family_purity_laws_no').is(':checked') && !$('.step7 #family_purity_laws_maybe').is(':checked') && !$('.step7 #family_purity_laws_never').is(':checked')){
                    toastr["error"]("Seleccionar una opción","Campo Leyes de pureza familiar ");
                    $('.step7 #family_purity_laws_yes').focus();
                    return false;
                }
                if($('.step7 #about_u').val() == ""){
                    toastr["error"]("Seleccione opción","Campo Algo más de ti");
                    $('.step7 #about_u').focus();
                    return false;
                }
                if($('.step7 #about_u_partner').val() == ""){
                    toastr["error"]("Seleccione opción","Campo Que esperas de tu pareja");
                    $('.step7 #about_u_partner').focus();
                    return false;
                }

                navigateTo(curlIndex() + 1);

            break;

            case 7:
                if(!$('.step8 #no_accept_share').is(':checked') && !$('.step8 #accept_share').is(':checked')){
                    toastr["error"]("Seleccionar una opción","Compartir Datos y Fotos");
                    $('.step8 #accept_share').focus();
                    return false;
                }
                if($('.step8 #no_accept_share').is(':checked')){
                    navigateTo(0);
                    return false;
                }

                if(!$('.step8 #accept_chek_ref').is(':checked')){
                    toastr["error"]("Seleccionar una opción","Chequeo de Información");
                    $('.step8 #accept_chek_ref').focus();
                    return false;
                }
                if(!$('.step8 #no_accept_condition').is(':checked') && !$('.step8 #accept_condition').is(':checked')){
                    toastr["error"]("Seleccionar una opción","Aceptar las condiciones");
                    $('.step8 #no_accept_condition').focus();
                    return false;
                }
                if($('.step8 #no_accept_condition').is(':checked')){
                    navigateTo(0);
                    return false;
                }

                navigateTo(curlIndex() + 1);

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
        "showDuration": "5000",
        "hideDuration": "1000",
        "timeOut": "5000",
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

    $(".step7 input[type='file']").change(function(){
        $(".step7 .fileinput-remove-button").text('Quitar');
        $(".step7 .fileinput-upload").hide();
        $(".step7 .file-preview").css('display','block');
        $(".step7 .file-drop-zone-title").css('display','block');
        $(".step7 .btn-file").css('margin-left','6px');



    });

    $(document).on('click', '.step7 .fileinput-remove', function(){
        $(".step7 .file-preview").css('display','none');
        $(".step7 .file-drop-zone-title").css('display','none');
        $(".step7 .btn-file").css('margin-left','0px');
    });


    if ($('.step10').is(":visible")) {

        $('.card .card-header h5').text('');
        $('.step10 h6').css('text-align','center').css('color','#297ca5').css('font-size', '19px');
        $('.step10 h6').text('¡Formulario cargado con EXITO!');
        $('.card .card-header').css('height', '15px');

    }

    $('.step1 #single_no').on('click', function(){
        $('.step1 .single').hide();
        $('.step1 .divorced').show();
    });

    $('.step1 #divorced_no').on('click', function(){
        $('.step1 .divorced').hide();
        $('.step1 .widower').show();
    });

    $('.step1 #widower_no').on('click', function(){
        $('.step1 .widower').hide();
        $('.step1 .single').show();
    });


    $(".step2 #main_phone").keypress(function(tecla)
    {
        if(tecla.charCode < 48 || tecla.charCode > 57)
        {
            return false;
        }
    });

    $(".step2 #years_range_from").keypress(function(tecla)
    {
        if(tecla.charCode < 48 || tecla.charCode > 57)
        {
            return false;
        }
    });

    $(".step2 #years_range_to").keypress(function(tecla)
    {
        if(tecla.charCode < 48 || tecla.charCode > 57)
        {
            return false;
        }
    });


});




