<div class="form-section step6">
    <div class="row bg-dark">
        <div class="form-group col-md-6">
            <label for="files"><i class="far fa-check-circle"></i> Fotos Subidas </label>
        </div>
        <div class="form-group col-md-6 text-center">
        </div>
        @php
            @endphp
            @foreach($form['form']['files'] as $file)
                <div class="form-group col-md-6 text-center border">
                    <img  src="/registro/images/upload_forms/{{$file->files_name}}" alt="{{$file->files_name}}" width="300" height="300">
                </div>
            @endforeach
    </div>

</div>
