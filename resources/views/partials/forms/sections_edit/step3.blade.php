<div class="form-section step3">
    <div class="row bg-dark">
        <div class="form-group col-md-6">
            <label for="couple_sons"><i class="far fa-check-circle"></i> ¿Aceptarías una pareja con hijos?</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="couple_sons" id="couple_sons_yes" {{ ($form['form']['coupleson_id'] ==  1) ? 'checked' : '' }} value="1">
                <label class="form-check-label" for="couple_sons_yes"> Si </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="couple_sons" id="couple_sons_no" {{ ($form['form']['coupleson_id'] ==  2) ? 'checked' : '' }} value="2">
                <label class="form-check-label" for="couple_sons_no"> No </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="couple_sons" id="couple_sons_maybe" {{ ($form['form']['coupleson_id'] ==  3) ? 'checked' : '' }} value="3">
                <label class="form-check-label" for="couple_sons_maybe"> Tal vez </label>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="studies_lvl_seek"><i class="far fa-check-circle"></i> ¿Qué nivel de estudios te gustaría que tenga?</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="studies_lvl_seek[]" id="full_primary_seek" {{ (in_array(1,$form['studiesseeks'])) ? 'checked' : '' }} value="1">
                <label class="form-check-label" for="full_primary_seek"> Primario Completo </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="studies_lvl_seek[]" id="complete_secondary_seek" {{ (in_array(2,$form['studiesseeks'])) ? 'checked' : '' }} value="2">
                <label class="form-check-label" for="complete_secondary_seek"> Secundario Completo </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="studies_lvl_seek[]" id="full_college_seek" {{ (in_array(3,$form['studiesseeks'])) ? 'checked' : '' }} value="3">
                <label class="form-check-label" for="full_college_seek"> Universitario Completo </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="studies_lvl_seek[]" id="postgraduate_seek" {{ (in_array(4,$form['studiesseeks'])) ? 'checked' : '' }} value="4">
                <label class="form-check-label" for="postgraduate_seek"> Posgrado </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="studies_lvl_seek[]" id="hebrew_elementary_school_seek" {{ (in_array(5,$form['studiesseeks'])) ? 'checked' : '' }} value="5">
                <label class="form-check-label" for="hebrew_elementary_school_seek"> Escuela Primaria Hebrea </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="studies_lvl_seek[]" id="shiurim_one_per_week_seek" {{ (in_array(6,$form['studiesseeks'])) ? 'checked' : '' }} value="6">
                <label class="form-check-label" for="shiurim_one_per_week_seek"> Shiurim 1 por semana </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="studies_lvl_seek[]" id="hebrew_high_school_seek" {{ (in_array(7,$form['studiesseeks'])) ? 'checked' : '' }} value="7">
                <label class="form-check-label" for="hebrew_high_school_seek"> Secundaria Hebrea </label>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="years_range"><i class="far fa-check-circle"></i> ¿Qué rango de edad te gustaría que tenga?</label>
            <div class="input-group">
                <input type="number" id="years_range_from"  min ="18" class="form-control col-md-2" name="years_range_from"  placeholder="Desde" value="{{$form['form']['years_range_from']}}">
                <span class="col-md-1"></span>
                <input type="number" id="years_range_to" min="18" class="form-control col-md-2" name="years_range_to"  placeholder="Hasta" value="{{$form['form']['years_range_to']}}">
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="live_future"><i class="far fa-check-circle"></i> ¿En dónde les gustaría vivir? (Puedes elegir varios)</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_bs" {{ (in_array(1,$form['locations'])) ? 'checked' : '' }} value="1">
                <label class="form-check-label" for="live_future_bs"> Buenos Aires </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_cp" {{ (in_array(3,$form['locations'])) ? 'checked' : '' }} value="3">
                <label class="form-check-label" for="live_future_cp"> Ciudad de Panamá </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_df" {{ (in_array(14,$form['locations'])) ? 'checked' : '' }} value="14">
                <label class="form-check-label" for="live_future_df"> Distrito Federal </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_c" {{ (in_array(4,$form['locations'])) ? 'checked' : '' }} value="4">
                <label class="form-check-label" for="live_future_c"> Chile </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_u" {{ (in_array(5,$form['locations'])) ? 'checked' : '' }} value="5">
                <label class="form-check-label" for="live_future_u"> Uruguay </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_ca" {{ (in_array(6,$form['locations'])) ? 'checked' : '' }} value="6">
                <label class="form-check-label" for="live_future_cas"> Caracas </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_i" {{ (in_array(8,$form['locations'])) ? 'checked' : '' }} value="8">
                <label class="form-check-label" for="live_future_i"> Israel </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_m" {{ (in_array(15,$form['locations'])) ? 'checked' : '' }} value="15">
                <label class="form-check-label" for="live_future_m"> Miami </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_ny" {{ (in_array(16,$form['locations'])) ? 'checked' : '' }} value="16">
                <label class="form-check-label" for="live_future_ny"> New York </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_la" {{ (in_array(17,$form['locations'])) ? 'checked' : '' }} value="17">
                <label class="form-check-label" for="live_future_la"> Los Angeles </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_cor" {{ (in_array(9,$form['locations'])) ? 'checked' : '' }} value="9">
                <label class="form-check-label" for="live_future_cor"> Córdoba </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_t" {{ (in_array(10,$form['locations'])) ? 'checked' : '' }} value="10">
                <label class="form-check-label" for="live_future_t"> Tucumán </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_ro" {{ (in_array(11,$form['locations'])) ? 'checked' : '' }} value="11">
                <label class="form-check-label" for="live_future_ro"> Rosario </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_sp" {{ (in_array(19,$form['locations'])) ? 'checked' : '' }} value="19">
                <label class="form-check-label" for="live_future_sp"> San Pablo </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_rdj" {{ (in_array(20,$form['locations'])) ? 'checked' : '' }} value="20">
                <label class="form-check-label" for="live_future_rdj"> Río de Janeiro </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_esp" {{ (in_array(21,$form['locations'])) ? 'checked' : '' }} value="21">
                <label class="form-check-label" for="live_future_esp"> España </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_wherever" {{ (in_array(18,$form['locations'])) ? 'checked' : '' }} value="18">
                <label class="form-check-label" for="live_future_wherever"> Me da lo mismo </label>
            </div>
        </div>
    </div>
</div>
