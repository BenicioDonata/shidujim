<div class="form-section step0">
    <div class="row bg-dark">
        <div class="form-group col-md-6">
            <label for="name"><i class="far fa-check-circle"></i> Nombre</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Tu respuesta" maxlength="254" value="{{$form['form']['name']}}">
        </div>
        <div class="form-group col-md-6">
            <label for="name_hebreo"><i class="far fa-check-circle"></i> Nombre en Hebreo</label>
            <input type="text" name="name_hebrew" id="name_hebrew" class="form-control" placeholder="Tu respuesta" maxlength="254" value="{{$form['form']['name_hebrew']}}">
        </div>

        <div class="form-group col-md-6">
            <label for="lastname"><i class="far fa-check-circle"></i> Apellido Paterno</label>
            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Tu respuesta" maxlength="254" value="{{$form['form']['lastname']}}">
        </div>
        <div class="form-group col-md-6">
            <label for="second_lastname"><i class="far fa-check-circle"></i> Apellido Materno</label>
            <input type="text" name="second_lastname" id="second_lastname" class="form-control" placeholder="Tu respuesta" maxlength="254" value="{{$form['form']['second_lastname']}}">
        </div>
    </div>

    <div class="row bg-dark">
        <div class="form-group col-md-6">
            <label for="date_of_birth"><i class="far fa-check-circle"></i> Fecha de Nacimiento</label>
            <input type="text" id="date_of_birth" class="form-control" name="date_of_birth"  placeholder="Tu respuesta" value="{{$form['form']['date_of_birth']}}">
        </div>
        <div class="form-group col-md-6">
            <label for="civil_status"><i class="far fa-check-circle"></i> Estado Civil</label>
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
            <label for="gender"><i class="far fa-check-circle"></i> Género</label>
            <select class="form-control" id="gender" name="gender" tabindex="-1" aria-hidden="true" required>
                <option value="" selected>Elige</option>
                @foreach($genders as $gender)
                    <option value="{{$gender->id}}" {{ $form['form']['gender_id'] == $gender->id ? 'selected' : '' }} > {{$gender->genders_title }} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="profession"><i class="far fa-check-circle"></i> Profesión</label>
            <input type="text" id="profession" class="form-control" name="profession"  placeholder="Tu respuesta" maxlength="254" value="{{$form['form']['profession']}}">
        </div>
    </div>
</div>
