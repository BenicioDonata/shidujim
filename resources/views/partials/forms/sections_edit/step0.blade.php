<div class="form-section step0">
    <div class="row bg-dark">
        <div class="form-group col-md-6">
            <label for="name"><i class="far fa-check-circle"></i> Nombre <h6 class="asterics">*</h6></label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Tu respuesta" maxlength="254" value="{{$form['form']['name']}}">
        </div>
        <div class="form-group col-md-6">
            <label for="name_hebreo"><i class="far fa-check-circle"></i> Nombre en Hebreo <h6 class="asterics">*</h6></label>
            <input type="text" name="name_hebrew" id="name_hebrew" class="form-control" placeholder="Tu respuesta" maxlength="254" value="{{$form['form']['name_hebrew']}}">
        </div>

        <div class="form-group col-md-6">
            <label for="lastname"><i class="far fa-check-circle"></i> Apellido Paterno <h6 class="asterics">*</h6></label>
            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Tu respuesta" maxlength="254" value="{{$form['form']['lastname']}}">
        </div>
        <div class="form-group col-md-6">
            <label for="second_lastname"><i class="far fa-check-circle"></i> Apellido Materno <h6 class="asterics">*</h6></label>
            <input type="text" name="second_lastname" id="second_lastname" class="form-control" placeholder="Tu respuesta" maxlength="254" value="{{$form['form']['second_lastname']}}">
        </div>
        <div class="form-group col-md-12">
            <h6>* Campos Obligatorios</h6>
        </div>
    </div>

    <div class="row bg-dark">
        <div class="form-group col-md-6">
            <div class="input-group div-edition-fechnac">
                    <div class="form-group col-md-5">
                        <label for="date_of_birth"><i class="far fa-check-circle"></i> Fecha de Nac. <h6 class="asterics">*</h6></label>
                        <input type="text" id="date_of_birth" class="form-control" name="date_of_birth"  placeholder="Tu respuesta" value="{{$form['form']['date_of_birth']}}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="age"><i class="far fa-check-circle"></i> Edad <h6 class="asterics">*</h6></label>
                        <input type="number" id="age" min="18" class="form-control" name="age"  placeholder="Tu respuesta" value="{{$form['form']['age']}}">
                    </div>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="civil_status"><i class="far fa-check-circle"></i> Estado Civil <h6 class="asterics">*</h6></label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="civil_status" id="single" {{ ($form['form']['maritalstatus_id'] ==  1) ? 'checked' : '' }} value="1">
                <label class="form-check-label" for="single"> Soltero </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="civil_status" id="divorced" {{ ($form['form']['maritalstatus_id']  ==  2) ? 'checked' : '' }} value="2" >
                <label class="form-check-label" for="divorced"> Divorciado </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="civil_status" id="widower" {{ ($form['form']['maritalstatus_id']  ==  3) ? 'checked' : '' }} value="3" >
                <label class="form-check-label" for="widower"> Viudo </label>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="gender"><i class="far fa-check-circle"></i> Género <h6 class="asterics">*</h6></label>
            <div class="row ">
                <div class=" col-md-3  offset-md-2 img-div-center">
                    <img id="mujer" class="logo-mujer" alt="Logo mujer" src=" {{ asset('images/mujer.jpg') }}" width="130" height="130" />
                </div>
                <div class=" col-md-3 div-top img-div-center">
                    <img id="varon" class="logo-varon" alt="Logo varon" src=" {{ asset('images/varon.jpg') }}" width="130" height="130" />
                    <input type="hidden" id="gender" name="gender" value="{{$form['form']['gender_id']}}">
                </div>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="profession"><i class="far fa-check-circle"></i> Profesión <h6 class="asterics">*</h6></label>
            <input type="text" id="profession" class="form-control" name="profession"  placeholder="Tu respuesta" maxlength="254" value="{{$form['form']['profession']}}">
        </div>
        <div class="form-group col-md-12">
            <h6>* Campos Obligatorios</h6>
        </div>
    </div>
</div>
