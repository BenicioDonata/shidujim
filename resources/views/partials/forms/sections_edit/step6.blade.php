<div class="form-section step6">
    <div class="row bg-dark">
        <div class="form-group col-md-6">
            <label for="files"><i class="far fa-check-circle"></i> Fotos Subidas </label>
            @foreach($form['form']['files'] as $file)
                <div class="form-group col-md-12">
                    <img  src="images/upload_forms/{{$file->files_name}}" alt="{{$file->files_name}}" width="100" height="100">
                </div>
            @endforeach
        </div>
    </div>

</div>
