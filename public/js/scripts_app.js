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
            image.src="images/upload_forms/"+$(this).data('file')[i].files_name;
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

});








