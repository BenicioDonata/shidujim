$(document).ready(function () {

    const MAXIMO_TAMANIO_BYTES = 2000000; // 1MB = 1 millón de bytes

    var $sections = $('.form-section');
    var index_step = 0;
    var total_size = 0;

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
                image_p.src="/registro/images/left.png";
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
            image_c.src="/registro/images/close.png";
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
                image_n.src = "/registro/images/right.png";
                $('#ModalImages .modal-body #thumblist div#image' + i + ' a#img_n' + i).append(image_n);
            }

        }
        $("#ModalImages").modal("show");

    });


    $(document).on('click','.view-data', function(){
        $('#change-status-form-'+$(this).data('id')).submit();
    });

    $(document).on('click','.edit-form', function(){
        $('#edit-form-'+$(this).data('id')).submit();
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

        $("#ModalComment .modal-header h5").text('Agregar Comentario Al Formulario #'+$(this).data('id'));
        $("#ModalComment form#saveComment input#form-comment").val($(this).data('id'));
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

        if($(this).hasClass('activo')){
            $(this).css('background-color','#fff');
            $(this).css('color','#000');
            $(this).removeClass('activo')
        }else{
            $(this).addClass('activo')
            $(this).css('background-color','#606163');
            $(this).css('color','#fff');
        }

    });


});








