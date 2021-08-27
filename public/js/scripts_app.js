$(document).ready(function () {


    var $sections = $('.form-section');
    var index_step = 0;
    var total_size = 0;
    var remaining = 0;

   $('[data-toggle="tooltip"]').tooltip();

    $('.view-files').on('click', function(){

        $('#ModalImages .modal-body #thumblist').empty();

        for (var i = 0; i < $(this).data('file').length;  i++) {

            var tag_a = document.createElement("A");
            tag_a.setAttribute('href', '#image'+i);
            tag_a.setAttribute('id', 'img_'+i);
            $('#ModalImages .modal-body #thumblist').append(tag_a);


            var image = document.createElement("IMG");
            image.setAttribute('class', 'thumb');
            image.setAttribute('class', 'img-thumbnail');
            image.src="/registro/images/upload_forms/"+$(this).data('file')[i].files_name;
            $('#ModalImages .modal-body #thumblist a#img_'+i).append(image);

            var div = document.createElement("DIV");
            div.setAttribute('id', 'image'+i);
            div.setAttribute('class', 'lightbox');
            $('#ModalImages .modal-body #thumblist').append(div);

            if(i > 0){
                var tag_a_ = document.createElement("A");
                tag_a_.setAttribute('href', '#image'+(i-1));
                tag_a_.setAttribute('id', 'img_a_'+i);
                $('#ModalImages .modal-body #thumblist div#image'+i).append(tag_a_);

                var image_p = document.createElement("IMG");
                image_p.setAttribute('class', 'previous');
                image_p.setAttribute('id', 'img_p'+i);
                image_p.src="images/left.png";
                $('#ModalImages .modal-body #thumblist div#image'+i+' a#img_a_'+i).append(image_p);
            }

            var tag_b = document.createElement("A");
            tag_b.setAttribute('href', '#_');
            tag_b.setAttribute('id', 'img_b'+i);
            $('#ModalImages .modal-body #thumblist div#image'+i).append(tag_b);


            var image_o = document.createElement("IMG");
            image_o.src="images/upload_forms/"+$(this).data('file')[i].files_name;
            $('#ModalImages .modal-body #thumblist div#image'+i+' a#img_b'+i).append(image_o);


            var tag_c = document.createElement("A");
            tag_c.setAttribute('href', '#_');
            tag_c.setAttribute('id', 'img_c'+i);
            $('#ModalImages .modal-body #thumblist div#image'+i).append(tag_c);


            var image_c = document.createElement("IMG");
            image_c.setAttribute('class', 'exit');
            image_c.setAttribute('id', 'img_c'+i);
            image_c.src="images/close.png";
            $('#ModalImages .modal-body #thumblist div#image'+i+' a#img_c'+i).append(image_c);

            if(i < ($(this).data('file').length - 1)) {

                var tag_n = document.createElement("A");
                tag_n.setAttribute('href', '#_');
                tag_n.setAttribute('href', '#image' + (i + 1));
                tag_n.setAttribute('id', 'img_n' + i);
                $('#ModalImages .modal-body #thumblist div#image' + i).append(tag_n);

                var image_n = document.createElement("IMG");
                image_n.setAttribute('class', 'next');
                image_n.setAttribute('id', 'img_n' + i);
                image_n.src = "images/right.png";
                $('#ModalImages .modal-body #thumblist div#image' + i + ' a#img_n' + i).append(image_n);
            }

        }
        $("#ModalImages").modal("show");

    });


    $(document).on('click','.view-data', function(){
        $('#change-status-form-'+$(this).data('id')).submit();
    });

    // $(document).on('click','.edit-form', function(){
    //     $('#edit-form-'+$(this).data('id')).submit();
    // });

    $(document).on('click','.block-form-data', function(){
        $('#user-block-form-'+$(this).data('id')).submit();
    });

    $(document).on('click','.user-match-data', function(){
        $('#user-match-form-'+$(this).data('id')).submit();
    });

    $(document).on('click','.user-couple-data', function(){
        $('#user-couple-form-'+$(this).data('id')).submit();
    });

    $("#main_phone").keypress(function(tecla)
    {
        if(tecla.charCode < 48 || tecla.charCode > 57)
        {
            return false;
        }
    });

    $("#years_range_from").keypress(function(tecla)
    {
        if(tecla.charCode < 48 || tecla.charCode > 57)
        {
            return false;
        }
    });

    $("#years_range_to").keypress(function(tecla)
    {
        if(tecla.charCode < 48 || tecla.charCode > 57)
        {
            return false;
        }
    });


//---------------

    $(document).on('click','.btn-download', function(){
        $('#downloadFile').submit();
    });

//---------------------------------------

    $('.add-comment').on('click', function(){

        $("#ModalComment .modal-header h5").text('Agregar Comentario - '+ $(this).data('tit'));
        $("#ModalComment form#saveComment input#form-comment").val($(this).data('id'));
        $("#ModalComment form#saveComment #summary-ckeditor").val('');
        $("#ModalComment form#saveComment #caracteres").css('color','red').text("Máximo 250 caracteres: ");
        $("#ModalComment").modal("show");

    });

    $('#ModalComment .save-comment').on('click', function(){
        $('#saveComment').submit();
    });

    $('.see-comments').on('click', function(){

        $('#ModalSeeComment .modal-body').empty();
        $("#ModalSeeComment .modal-header h5").text('');

        $("#ModalSeeComment .modal-header h5").text('Comentarios del Formulario #'+$(this).data('id'));

         $.get("/registro/comments/"+$(this).data('id')+"",function(response){

             for(i=0; i<response.length; i++){
                 var date = response[i].created_at.substr(0,10);

                 $('#ModalSeeComment .modal-body').append("<span><b>"+date+" - Usuario "+response[i].user.name+" comentó :</b></span><br>");
                 $('#ModalSeeComment .modal-body').append("<span>"+response[i].comment+"</span><br><br>");
             }

         });

        $("#ModalSeeComment").modal("show");

    });

    $('.deleteForm').on('click', function(){
        $("#ModalDeleteForm .modal-header h5").text(' Eliminar Formulario ');
        $("#ModalDeleteForm .modal-body h6").text('¿Confirma eliminar el formulario del usuario '+$(this).data('user')+'?');
        $("#ModalDeleteForm input#form-delete").val($(this).data('id'));

        $("#ModalDeleteForm").modal("show");
    });

    $(document).on('click','.delete-form', function(){
        $('#delete-form-'+$("#ModalDeleteForm input#form-delete").val()).submit();
    });

    $(document).on('click','table.forms-action tr', function(){

        if($(this).hasClass('activo') ) {
            $(this).css('background-color','#fff');
            $(this).css('color','#000');
            $(this).removeClass('activo')
            if(($(this).attr('bgcolor') != '#f8fafc')) {
                $(this).removeClass('activo');
                $(this).removeAttr("style");
            }
        }else{
            $(this).addClass('activo')
            $(this).css('background-color','#606163');
            $(this).css('color','#fff');
        }
    });

    $("#ModalComment #summary-ckeditor").on('keypress', function() {
        var limit = 250;
        $("#ModalComment #summary-ckeditor").attr('maxlength', limit);
        var init = $(this).val().length;

        if(init<limit){
            init++;
            $('#caracteres').text("Máximo 250 caracteres: " + init);
        }

    });


    //***************************


    function navigateTo(index) {
        index_step = index;
        $sections.removeClass('current').eq(index).addClass('current');
        $('.form-navigation .previous').toggle(index>0);
        var atTheEnd = index >= $sections.length - 1;
        $('.form-navigation .next').toggle(!atTheEnd);
        //$('.form-navigation .send').toggle(atTheEnd);

        switch (index) {
            case 0:
                if ($(".step0 #gender").val() == 1) {
                    $(".step0 #mujer").removeClass('logo-mujer');
                    $(".step0 #mujer").addClass('logo-gender-select');
                    $(".step0 #varon").removeClass('logo-gender-select');
                    $(".step0 #varon").addClass('logo-varon');
                }
                if ($(".step0 #gender").val() == 2) {
                    $(".step0 #varon").addClass('logo-gender-select');
                    $(".step0 #varon").removeClass('logo-varon');
                    $(".step0 #mujer").removeClass('logo-gender-select');
                    $(".step0 #mujer").addClass('logo-mujer');
                }
            break;
            case 1:
                //
            break;
            case 2:
               //
            break;
            case 3:
                //
            break;
            case 4:
                //
            break;
            case 5:
               //
           break;
            case 6:
              //
            break;
            case 7:
              //
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

    //comportamiento cuando se preciona el boton next
    $('.form-navigation .next').click(function () {

        switch (index_step) {

            case 0:
                if($('.step0 #name').val() == ""){
                    toastr["error"]("Completar el campo","Campo Nombre");
                    $('.step0 #name').focus();
                    return false;
                }
                if($('.step0 #name_hebrew').val() == ""){
                    toastr["error"]("Completar el campo","Campo Nombre en Hebreo");
                    $('.step0 #name_hebrew').focus();
                    return false;
                }
                if($('.step0 #lastname').val() == ""){
                    toastr["error"]("Completar el campo","Campo Apellido Paterno");
                    $('.step0 #lastname').focus();
                    return false;
                }
                if($('.step0 #second_lastname').val() == ""){
                    toastr["error"]("Completar el campo","Campo Apellido Materno");
                    $('.step0 #second_lastname').focus();
                    return false;
                }
                if($('.step0 #date_of_birth').val() == ""){
                    toastr["error"]("Completar el campo","Campo Fecha de Nacimiento");
                    $('.step0 #date_of_birth').focus();
                    return false;
                }
                if($('.step0 #date_of_birth').val().length != 10){
                    toastr["error"]("Revisar que tenga el formato correcto Ej. dd/mm/yyyy","Campo Fecha de Nacimiento");
                    $('.step0 #date_of_birth').focus();
                    return false;
                }
                if($('.step0 #date_of_birth').val().split('/').length != 3) {
                    toastr["error"]("Revisar que tenga el formato correcto Ej. dd/mm/yyyy","Campo Fecha de Nacimiento");
                    $('.step0 #date_of_birth').focus();
                    return false;
                }

                var array_date = $('.step0 #date_of_birth').val().split('/');
                var anio_now = (new Date).getFullYear();
                var diff_anio = anio_now - array_date[2];

                if(diff_anio < 18) {
                    toastr["error"]("El año no es correcto.","Campo Fecha de Nacimiento");
                    $('.step0 #date_of_birth').focus();
                    return false;
                }
                if($('.step0 #age').val() == ""){
                    toastr["error"]("Completar el campo","Campo Edad");
                    $('.step0 #age').focus();
                    return false;
                }
                if($('.step0 #age').val() < 18) {
                    toastr["error"]("El año no es correcto.","Campo Edad");
                    $('.step0 #age').focus();
                    return false;
                }
                if(!$('.step0 #single').is(':checked') && !$('.step0 #divorced').is(':checked') && !$('.step0 #widower').is(':checked') ){
                    toastr["error"]("Seleccionar una opción","Campo Estado Civil");
                    $('.step0 #single').focus();
                    return false;
                }
                if($('.step0 #gender').val() == ""){
                    toastr["error"]("Seleccione Género","Campo Género");
                    $('.step0 #gender').focus();
                    return false;
                }
                if($('.step0 #profession').val() == ""){
                    toastr["error"]("Ingrese una Profesion","Campo Profesion");
                    $('.step0 #profession').focus();
                    return false;
                }

                navigateTo(curlIndex() + 1);
            break;
            case 1:
                if($('.step1 #email').val() == ""){
                    toastr["error"]("Completar el campo","Campo Email");
                    $('.step1 #email').focus();
                    return false;
                }
                if($(".step1 #email").val().indexOf('@', 0) == -1 || $(".step1 #email").val().indexOf('.', 0) == -1) {
                    toastr["error"]("Incorrecto", "Campo Email");
                    $('.step1 #email').focus();
                    return false;
                }
                if($('.step1 #main_phone').val() == ""){
                    toastr["error"]("Completar el campo","Campo Teléfono Celular");
                    $('.step1 #main_phone').focus();
                    return false;
                }
                if(isNaN($(".step1 #main_phone").val())) {
                    toastr["error"]("Sólo Números","Campo Teléfono Celular");
                    $('.step1 #main_phone').focus();
                    return false;
                }
                if($('.step1 #main_phone').val() < 0 ){
                    toastr["error"]("Incorrecto","Campo Teléfono Celular");
                    $('.step1 #main_phone').focus();
                    return false;
                }
                if($(".step1 #main_phone").val().length < 8 ) {
                    toastr["error"]("Debe tener minimo 8 digitos","Campo Teléfono Celular");
                    $('.step1 #main_phone').focus();
                    return false;
                }
                if($('.step1 select#count_sons').val() == ""){
                    toastr["error"]("Seleccione Cantidad","Campo Hijos");
                    $('.step1 select#count_sons').focus();
                    return;
                }
                if($('.step1 select#religiouscompliancelevel').val() == ""){
                    toastr["error"]("Seleccione Cumplimiento Religioso","Campo Cumplimiento Religioso");
                    $('.step1 select#religiouscompliancelevel').focus();
                    return;
                }
                if($('.step1 #community_assists').val() == ""){
                    toastr["error"]("Completar el campo","Campo Comunidad a la que asistís");
                    $('.step1 #community_assists').focus();
                    return false;
                }
                if(!$('.step1 #full_primary').is(':checked') && !$('.step1 #complete_secondary').is(':checked') && !$('.step1 #full_college').is(':checked') && !$('.step1 #postgraduate').is(':checked') && !$('.step1 #hebrew_elementary_school').is(':checked') && !$('.step1 #shiurim_one_per_week').is(':checked') && !$('.step1 #shiurim_two_per_week').is(':checked') && !$('.step1 #shiurim_more_two_per_week').is(':checked') && !$('.step1 #ieshiva').is(':checked') && !$('.step1 #hebrew_high_school').is(':checked')){
                    toastr["error"]("Seleccionar una opción","Campo Estudios");
                    $('.step1 #full_primary').focus();
                    return false;
                }
                if(!$('.step1 #spanish').is(':checked') && !$('.step1 #english').is(':checked') && !$('.step1 #hebrew').is(':checked')){
                    toastr["error"]("Seleccionar una opción","Campo Idiomas");
                    $('.step1 #spanish').focus();
                    return false;
                }
                navigateTo(curlIndex() + 1);
            break;
            case 2:
                if($('.step2 #name_school').val() == ""){
                    toastr["error"]("Completar el campo","Campo Nombre Colegio Primario");
                    $('.step2 #name_school').focus();
                    return false;
                }
                if($('.step2 select#smoke').val() == ""){
                    toastr["error"]("Seleccione opción","Campo Fumas");
                    $('.step2 select#smoke').focus();
                    return false;
                }
                if(!$('.step2 #more_sons').is(':checked') && !$('.step2 #no_more_sons').is(':checked') && !$('.step2 #want_sons').is(':checked') && !$('.step2 #dont_know').is(':checked') ){
                    toastr["error"]("Seleccionar una opción","Campo Hijos");
                    $('.step2 #more_sons').focus();
                    return false;
                }
                if($('.step2 select#location').val() == ""){
                    toastr["error"]("Seleccione opción","Campo Localidad donde vivis");
                    $('.step2 select#location').focus();
                    return false;
                }
                if(!$('.step2 #kasher_only_house').is(':checked') && !$('.step2 #forever_kasher').is(':checked') && !$('.step2 #kasher_shabat').is(':checked') && !$('.step2 #abrej').is(':checked') && !$('.step2 #tora').is(':checked') && !$('.step2 #kasher_shabat_study').is(':checked') && !$('.step2 #hebrew').is(':checked') && !$('.step2 #wherever').is(':checked') ){
                    toastr["error"]("Seleccionar una opción","Campo Nivel Aceptado");
                    $('.step2 #forever_kasher').focus();
                    return false;
                }
                if(!$('.step2 #single_seeker').is(':checked') && !$('.step2 #divorced_seeker').is(':checked') && !$('.step2 #widower_seeker').is(':checked') && !$('.step2 #wherever_seeker').is(':checked') ){
                    toastr["error"]("Seleccionar una opción","Campo Estado Civil");
                    $('.step2 #single_seeker').focus();
                    return false;
                }
                navigateTo(curlIndex() + 1);
            break;
            case 3:
                if(!$('.step3 #couple_sons_yes').is(':checked') && !$('.step3 #couple_sons_no').is(':checked') && !$('.step3 #couple_sons_maybe').is(':checked')){
                    toastr["error"]("Seleccionar una opción","Campo Hijos Anteriores");
                    $('.step3 #couple_sons_yes').focus();
                    return false;
                }
                if(!$('.step3 #full_primary_seek').is(':checked') && !$('.step3 #complete_secondary_seek').is(':checked') && !$('.step3 #full_college_seek').is(':checked') && !$('.step3 #postgraduate_seek').is(':checked') && !$('.step3 #hebrew_elementary_school_seek').is(':checked') && !$('.step3 #shiurim_one_per_week_seek').is(':checked') && !$('.step3 #hebrew_high_school_seek').is(':checked')){
                    toastr["error"]("Seleccionar una opción","Campo Nivel de Estudio");
                    $('.step3 #full_primary_seek').focus();
                    return false;
                }
                if($('.step3 #years_range_from').val() == ""){
                    toastr["error"]("Completar el campo campo","Campo Rango de Edad");
                    $('.step3 #years_range_from').focus();
                    return false;
                }
                if($('.step3 #years_range_to').val() == ""){
                    toastr["error"]("Completar el campo campo","Campo Rango de Edad");
                    $('.step3 #years_range_to').focus();
                    return false;
                }
                if(parseInt($('.step3 #years_range_from').val()) < 18 ){
                    toastr["error"]("Edad incorrecta","Campo Rango de Edad");
                    $('.step3 #years_range_from').focus();
                    return false;
                }
                if(parseInt($('.step3 #years_range_to').val()) < 18 ){
                    toastr["error"]("Edad incorrecta","Campo Rango de Edad");
                    $('.step3 #years_range_to').focus();
                    return false;
                }
                if(parseInt($(".step3 #years_range_from").val().length) < 2 ) {
                    toastr["error"]("Debe tener 2 digitos","Campo Rango de Edad");
                    $('.step3 #years_range_from').focus();
                    return false;
                }
                if(parseInt($(".step3 #years_range_to").val().length) < 2 ) {
                    toastr["error"]("Debe tener 2 digitos","Campo Rango de Edad");
                    $('.step3 #years_range_to').focus();
                    return false;
                }
                if(parseInt($('.step3 #years_range_from').val()) > parseInt($('.step3 #years_range_to').val()) ){
                    toastr["error"]("Edad incorrecta","Campo Rango de Edad");
                    $('.step3 #years_range_from').focus();
                    return false;
                }
                if(!$('.step3 #live_future_bs').is(':checked') && !$('.step3 #live_future_cp').is(':checked') && !$('.step3 #live_future_df').is(':checked') && !$('.step3 #live_future_c').is(':checked') && !$('.step3 #live_future_u').is(':checked') && !$('.step3 #live_future_ca').is(':checked') && !$('.step3 #live_future_i').is(':checked') && !$('.step3 #live_future_m').is(':checked') && !$('.step3 #live_future_ny').is(':checked') && !$('.step3 #live_future_la').is(':checked') && !$('.step3 #live_future_cor').is(':checked') && !$('.step3 #live_future_t').is(':checked') && !$('.step3 #live_future_ro').is(':checked') && !$('.step3 #live_future_esp').is(':checked')  && !$('.step3 #live_future_rdj').is(':checked') && !$('.step3 #live_future_sp').is(':checked') && !$('.step3 #live_future_wherever').is(':checked') ){
                    toastr["error"]("Seleccionar una opción","Campo Donde les gustaria vivir ");
                    $('.step3 #live_future_bs').focus();
                    return false;
                }
                navigateTo(curlIndex() + 1);
            break;
            case 4:
                if(!$('.step4 #find_partner_one').is(':checked') && !$('.step4 #find_partner_two').is(':checked') && !$('.step4 #find_partner_three').is(':checked') && !$('.step4 #find_partner_four').is(':checked') && !$('.step4 #find_partner_five').is(':checked') && !$('.step4 #find_partner_six').is(':checked') && !$('.step4 #find_partner_seven').is(':checked') && !$('.step4 #find_partner_eigth').is(':checked') && !$('.step4 #find_partner_nine').is(':checked') && !$('.step4 #find_partner_ten').is(':checked')){
                    toastr["error"]("Seleccionar una opción","Campo Encontrar Pareja ");
                    $('.step4 #find_partner_one').focus();
                    return false;
                }
                if(!$('.step4 #family_purity_laws_yes').is(':checked') && !$('.step4 #family_purity_laws_no').is(':checked') && !$('.step4 #family_purity_laws_maybe').is(':checked') && !$('.step4 #family_purity_laws_never').is(':checked')){
                    toastr["error"]("Seleccionar una opción","Campo Leyes de pureza familiar ");
                    $('.step4 #family_purity_laws_yes').focus();
                    return false;
                }
                navigateTo(curlIndex() + 1);
            break;
            case 5:
                if($('.step5 #about_u').val() == ""){
                    toastr["error"]("Seleccione opción","Campo Algo más de ti");
                    $('.step5 #about_u').focus();
                    return false;
                }
                if($('.step5 #about_u_partner').val() == ""){
                    toastr["error"]("Seleccione opción","Campo Que esperas de tu pareja");
                    $('.step5 #about_u_partner').focus();
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

    $(".step0 #age").on('change',function(tecla)
    {
        if(tecla.charCode < 48 || tecla.charCode > 57)
        {
            return false;
        }

        if ($(".step0 #age").val().length > 2){
            return false;
        }

        setTimeout(function(){
            var array_date = $('.step0 #date_of_birth').val().split('/');
            var anio_now = (new Date).getFullYear();
            var new_anio = anio_now - $(".step0 #age").val(); array_date[2];
            $(".step0 #date_of_birth").val(array_date[0]+'/'+array_date[1]+'/'+new_anio);
        }, 200);
    });

    $(".step0 #age").keypress('change',function(tecla)
    {
        if(tecla.charCode < 48 || tecla.charCode > 57)
        {
            return false;
        }

        if ($(".step0 #age").val().length > 2){
            return false;
        }

        setTimeout(function(){
            var array_date = $('.step0 #date_of_birth').val().split('/');
            var anio_now = (new Date).getFullYear();
            var new_anio = anio_now - $(".step0 #age").val(); array_date[2];
            $(".step0 #date_of_birth").val(array_date[0]+'/'+array_date[1]+'/'+new_anio);
        }, 200);
    });

   $(".step0 #date_of_birth").keypress(function(tecla)
    {
        if(tecla.charCode < 47 || tecla.charCode > 57)
        {
            return false;
        }

        if ($(".step0 #date_of_birth").val().length > 9){
            return false;
        }

        setTimeout(function(){
            var array_date = $('.step0 #date_of_birth').val().split('/');
            var anio_now = (new Date).getFullYear();
            var diff_anio = anio_now - array_date[2];
            $(".step0 #age").val(diff_anio);
        }, 200);
    });

    $(document).on('click', '.step0 .logo-mujer', function(){
        $(".step0 #gender").val(1);
        $(".step0 #mujer").removeClass('logo-mujer');
        $(".step0 #mujer").addClass('logo-gender-select');
        $(".step0 #varon").removeClass('logo-gender-select');
        $(".step0 #varon").addClass('logo-varon');

    });

    $(document).on('click', '.step0 .logo-varon', function(){
        $(".step0 #gender").val(2);
        $(".step0 #varon").addClass('logo-gender-select');
        $(".step0 #varon").removeClass('logo-varon');
        $(".step0 #mujer").removeClass('logo-gender-select');
        $(".step0 #mujer").addClass('logo-mujer');

    });

    $(document).on('click','td.edit-form', function(){
        window.location.href = $(this).attr('href');
    });

});








