<div class="form-section step1">
    <div class="row bg-dark">
        <div class="form-group col-md-6">
            <label for="email"><i class="far fa-check-circle"></i> Tu email</label>
            <input type="email" id="email" class="form-control" name="email"  placeholder="Tu respuesta" maxlength="254" value="{{$form['form']['email']}}">
        </div>
        <div class="form-group col-md-6">
            <label for="main_phone"><i class="far fa-check-circle"></i> Teléfono Celular (Pais + Ciudad + Numero)</label>
            <input type="number" id="main_phone" class="form-control" name="main_phone" min="0"   placeholder="Tu respuesta" value="{{$form['form']['main_phone']}}">
        </div>
        <div class="form-group col-md-6">
            <label for="count_sons"><i class="far fa-check-circle"></i> ¿Tenes hijos, cuantos? </label>
            <select class="form-control" id="count_sons" name="count_sons" tabindex="-1" aria-hidden="true" >
                <option value="" selected>Elige</option>
                @for($i=0; $i<11; $i++)
                    <option value="{{$i}}" {{ $form['form']['count_sons'] == $i ? 'selected' : '' }} > {{ $i }} </option>
                @endfor
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="religiouscompliancelevel"><i class="far fa-check-circle"></i> ¿Cual es tu nivel de cumplimiento religioso?</label>
            <select class="form-control" id="religiouscompliancelevel" name="religiouscompliancelevel" tabindex="-1" aria-hidden="true" >
                <option value="" selected>Elige</option>
                @foreach($religiouscompliancelevels as $religiouscompliancelevel)
                    @if($form['form']['gender_id'] == 1 && $religiouscompliancelevel->id != 5 )
                        <option value="{{$religiouscompliancelevel->id}}" {{ $form['form']['religiouscompliancelevel_id'] == $religiouscompliancelevel->id ? 'selected' : '' }} > {{ $religiouscompliancelevel->religious_compliance_lvl }} </option>
                    @endif
                    @if($form['form']['gender_id'] == 2 && $religiouscompliancelevel->id != 4 )
                        <option value="{{$religiouscompliancelevel->id}}" {{ $form['form']['religiouscompliancelevel_id'] == $religiouscompliancelevel->id ? 'selected' : '' }} > {{ $religiouscompliancelevel->religious_compliance_lvl }} </option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
    <div class="row bg-dark">
        <div class="form-group col-md-6">
            <label for="community_assists"><i class="far fa-check-circle"></i> ¿A que comunidad asistís?</label>
            <input type="text" name="community_assists" id="community_assists" class="form-control" placeholder="Tu respuesta" maxlength="254" value="{{$form['form']['community_assists']}}">
        </div>
        <div class="form-group col-md-6">
            <label for="module"><i class="far fa-check-circle"></i> ¿Que Rabanim te conocen?</label>
            <input type="text" name="rabanim_know" id="rabanim_know" class="form-control" placeholder="Tu respuesta" maxlength="254" value="{{$form['form']['rabanim_know']}}">
        </div>
        <div class="form-group col-md-6">
            <label for="studies"><i class="far fa-check-circle"></i> Estudios seculares y judíos (Puedes elegir varios)</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="studies[]" id="full_primary" {{ (in_array(1,$form['studies'])) ? 'checked' : '' }} value="1">
                <label class="form-check-label" for="full_primary"> Primario Completo </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="studies[]" id="complete_secondary" {{ (in_array(2,$form['studies'])) ? 'checked' : '' }} value="2">
                <label class="form-check-label" for="complete_secondary"> Secundario Completo </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="studies[]" id="full_college" {{ (in_array(3,$form['studies'])) ? 'checked' : '' }} value="3">
                <label class="form-check-label" for="full_college"> Universitario Completo </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="studies[]" id="postgraduate" {{ (in_array(4,$form['studies'])) ? 'checked' : '' }} value="4">
                <label class="form-check-label" for="postgraduate"> Posgrado </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="studies[]" id="hebrew_elementary_school" {{ (in_array(5,$form['studies'])) ? 'checked' : '' }} value="5">
                <label class="form-check-label" for="hebrew_elementary_school"> Escuela Primaria Hebrea </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="studies[]" id="shiurim_one_per_week" {{ (in_array(6,$form['studies'])) ? 'checked' : '' }} value="6">
                <label class="form-check-label" for="shiurim_one_per_week"> Shiurim 1 por semana </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="studies[]" id="shiurim_two_per_week" {{ (in_array(7,$form['studies'])) ? 'checked' : '' }} value="7">
                <label class="form-check-label" for="shiurim_two_per_week"> Shiurim 2 por Semana </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="studies[]" id="shiurim_more_two_per_week" {{ (in_array(8,$form['studies'])) ? 'checked' : '' }} value="8">
                <label class="form-check-label" for="shiurim_more_two_per_week"> Shiurim mas de dos por semana </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="studies[]" id="ieshiva" {{ (in_array(9,$form['studies'])) ? 'checked' : '' }} value="9">
                <label class="form-check-label" for="ieshiva"> Ieshiva/Seminario </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="studies[]" id="hebrew_high_school" {{ (in_array(10,$form['studies'])) ? 'checked' : '' }} value="10">
                <label class="form-check-label" for="hebrew_high_school"> Secundaria Hebrea </label>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="languages"><i class="far fa-check-circle"></i> ¿Que idiomas hablas?</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="languages[]" id="spanish" {{ (in_array(1,$form['languages'])) ? 'checked' : '' }} value="1">
                <label class="form-check-label" for="spanish"> Español </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="languages[]" id="english" {{ (in_array(2,$form['languages'])) ? 'checked' : '' }} value="2">
                <label class="form-check-label" for="english"> Ingles </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="languages[]" id="hebrew" {{ (in_array(3,$form['languages'])) ? 'checked' : '' }} value="3">
                <label class="form-check-label" for="hebrew"> Hebreo </label>
            </div>
        </div>
    </div>
</div>
