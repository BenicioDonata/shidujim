<div class="form-section step2">
    <div class="row bg-dark">
        <div class="form-group col-md-6">
            <label for="name_school"><i class="far fa-check-circle"></i> Nombre del Colegio Primario <h6 class="asterics">*</h6></label>
            <input type="text" id="name_school" class="form-control" name="name_school"  placeholder="Tu respuesta" maxlength="254" value="{{$form['form']['name_school']}}">
        </div>
        <div class="form-group col-md-6">
            <label for="name_secondary_school"><i class="far fa-check-circle"></i> Nombre del Colegio Secundario</label>
            <input type="text" id="name_secondary_school" class="form-control" name="name_secondary_school"  placeholder="Tu respuesta" maxlength="254" value="{{$form['form']['name_secondary_school']}}">
        </div>
        <div class="form-group col-md-6">
            <label for="smoke"><i class="far fa-check-circle"></i> ¿Fumas? <h6 class="asterics">*</h6></label>
            <select class="form-control" id="smoke" name="smoke" tabindex="-1" aria-hidden="true" required>
                <option value="" selected>Elige</option>
                @foreach($smokers as $smoker)
                    <option value="{{$smoker->id}}" {{$form['form']['smoker_id'] == $smoker->id ? 'selected' : '' }} > {{ $smoker->smokers_title }} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="sons"><i class="far fa-check-circle"></i> Hijos <h6 class="asterics">*</h6></label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sons" id="more_sons" {{ ($form['form']['son_id'] ==  1) ? 'checked' : '' }} value="1">
                <label class="form-check-label" for="more_sons"> Ya tengo hijos y quiero más </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sons" id="no_more_sons" {{ ($form['form']['son_id'] ==  2) ? 'checked' : '' }} value="2">
                <label class="form-check-label" for="no_more_sons"> Ya tengo hijos y no quiero más </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sons" id="want_sons" {{ ($form['form']['son_id'] ==  3) ? 'checked' : '' }} value="3">
                <label class="form-check-label" for="want_sons"> Si quiero tener hijos </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sons" id="dont_know" {{ ($form['form']['son_id'] ==  4) ? 'checked' : '' }} value="4">
                <label class="form-check-label" for="dont_know"> No lo sé aun </label>
            </div>
        </div>
        <div class="form-group col-md-12">
            <h6>* Campos Obligatorios</h6>
        </div>
    </div>
    <div class="row bg-dark">
        <div class="form-group col-md-6">
            <label for="location"><i class="far fa-check-circle"></i> ¿En qué Localidad Vivis Actualmente? <h6 class="asterics">*</h6></label>
            <select class="form-control" id="location" name="location" tabindex="-1" aria-hidden="true" required>
                <option value="" selected>Elige</option>
                @foreach($localities as $location)
                    @if($location->id <= 13)
                        <option value="{{$location->id}}" {{ $form['form']['location_id'] == $location->id ? 'selected' : '' }} > {{ $location->localities_title }} </option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="qualities"><i class="far fa-check-circle"></i> ¿Qué cualidad consideras que tienes tu? (Puedes elegir una, varias o ninguna).</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="qualities[]" id="sympathetic" {{ (isset($form['quality']) && (in_array(1,$form['quality']))) ? 'checked' : '' }} value="1">
                <label class="form-check-label" for="sympathetic"> Simpático/a </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="qualities[]" id="professional" {{ (isset($form['quality']) && (in_array(2,$form['quality']))) ? 'checked' : '' }} value="2">
                <label class="form-check-label" for="professional"> Profesional </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="qualities[]" id="worship" {{ (isset($form['quality']) && (in_array(3,$form['quality']))) ? 'checked' : '' }} value="3">
                <label class="form-check-label" for="worship"> Culto </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="qualities[]" id="good_mood" {{ (isset($form['quality']) && (in_array(4,$form['quality']))) ? 'checked' : '' }} value="4">
                <label class="form-check-label" for="good_mood"> Buen Humor </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="qualities[]" id="organized" {{ (isset($form['quality']) && (in_array(5,$form['quality']))) ? 'checked' : '' }} value="5">
                <label class="form-check-label" for="organized"> Ordenada/o </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="qualities[]" id="family_member" {{ (isset($form['quality']) && (in_array(6,$form['quality']))) ? 'checked' : '' }} value="6">
                <label class="form-check-label" for="family_member"> Familiero </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="qualities[]" id="affectionate" {{ (isset($form['quality']) && (in_array(7,$form['quality']))) ? 'checked' : '' }} value="7">
                <label class="form-check-label" for="affectionate"> Cariñoso/a </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="qualities[]" id="irat_shamaim" {{ (isset($form['quality']) && (in_array(8,$form['quality']))) ? 'checked' : '' }} value="8">
                <label class="form-check-label" for="irat_shamaim"> Irat Shamaim </label>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="accepted_level"><i class="far fa-check-circle"></i> ¿Qué nivel seria aceptado por vos? (Puedes elegir varios) <h6 class="asterics">*</h6></label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="accepted_level[]" id="kasher_only_house" {{ (in_array(1,$form['acceptancelevel'])) ? 'checked' : '' }} value="1">
                <label class="form-check-label" for="kasher_only_house"> Kasher solo en Casa </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="accepted_level[]" id="forever_kasher" {{ (in_array(2,$form['acceptancelevel'])) ? 'checked' : '' }} value="2">
                <label class="form-check-label" for="forever_kasher"> Siempre Kasher </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="accepted_level[]" id="kasher_shabat" {{ (in_array(3,$form['acceptancelevel'])) ? 'checked' : '' }} value="3">
                <label class="form-check-label" for="kasher_shabat"> Kasher siempre + Shabat </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="accepted_level[]" id="abrej" {{ (in_array(4,$form['acceptancelevel'])) ? 'checked' : '' }} value="4">
                <label class="form-check-label" for="abrej"> Abrej (que estudie todo el dia) </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="accepted_level[]" id="tora" {{ (in_array(5,$form['acceptancelevel'])) ? 'checked' : '' }} value="5">
                <label class="form-check-label" for="tora"> Que estudie Tora medio dÍa y trabaje </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="accepted_level[]" id="kasher_shabat_study" {{ (in_array(6,$form['acceptancelevel'])) ? 'checked' : '' }} value="6">
                <label class="form-check-label" for="kasher_shabat_study"> Kasher siempre + Shabat + un minimo de estudio semanal </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="accepted_level[]" id="hebrew" {{ (in_array(7,$form['acceptancelevel'])) ? 'checked' : '' }} value="7">
                <label class="form-check-label" for="hebrew"> Que sepa hebreo </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="accepted_level[]" id="wherever" {{ (in_array(8,$form['acceptancelevel'])) ? 'checked' : '' }} value="8">
                <label class="form-check-label" for="wherever"> Me da lo mismo cumpla o no </label>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="civil_status_seeker"><i class="far fa-check-circle"></i> Estado Civil Que Buscas (Puedes elegir varios) <h6 class="asterics">*</h6></label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="civil_status_seeker[]" id="single_seeker" {{ (in_array(1,$form['maritalstatuses'])) ? 'checked' : '' }} value="1">
                <label class="form-check-label" for="single_seeker"> Soltero/a </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="civil_status_seeker[]" id="divorced_seeker" {{ (in_array(2,$form['maritalstatuses']) ) ? 'checked' : '' }} value="2">
                <label class="form-check-label" for="divorced_seeker"> Divorciado/a
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="civil_status_seeker[]" id="widower_seeker" {{ (in_array(3,$form['maritalstatuses'])) ? 'checked' : '' }} value="3">
                <label class="form-check-label" for="widower_seeker"> Viudo/a </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="civil_status_seeker[]" id="wherever_seeker" {{ (in_array(4,$form['maritalstatuses'])) ? 'checked' : '' }} value="4">
                <label class="form-check-label" for="wherever_seeker"> Me da igual </label>
            </div>
        </div>
        <div class="form-group col-md-12">
            <h6>* Campos Obligatorios</h6>
        </div>
    </div>
</div>
