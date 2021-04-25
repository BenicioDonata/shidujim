<div class="form-section step7">
    <div class="card card-step7">
        <div class="card-header">
            <h5></h5>
        </div>
        <div class="card-body">
            <p></p>
        </div>
    </div>
    <div class="card ">
        <div class="card-header card-form">
            <h5></h5>
        </div>
        <div class="card-body">
            <div class="form-group col-md-6">
                <label for="civil_status_seeker"><h6 class="asterics">*</h6> Estado Civil (Puedes elegir varios)</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="civil_status_seeker[]" id="single_seeker" {{ (old('single_seeker') ===  1) ? 'checked' : '' }} value="1">
                    <label class="form-check-label" for="single_seeker">
                        Soltero/a
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="civil_status_seeker[]" id="divorced_seeker" {{ (old('divorced_seeker') ===  2) ? 'checked' : '' }} value="2">
                    <label class="form-check-label" for="divorced_seeker">
                        Divorciado/a
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="civil_status_seeker[]" id="widower_seeker" {{ (old('widower_seeker') ===  3) ? 'checked' : '' }} value="3">
                    <label class="form-check-label" for="widower_seeker">
                        Viudo/a
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="civil_status_seeker[]" id="wherever_seeker" {{ (old('wherever_seeker') ===  4) ? 'checked' : '' }} value="4">
                    <label class="form-check-label" for="wherever_seeker">
                        Me da igual
                    </label>
                </div>
            </div>
            <h6>* Obligatorio</h6>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="form-group col-md-8">
                <label for="couple_sons"><h6 class="asterics">*</h6> ¿Aceptarías que ya tenga hijos anteriormente?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="couple_sons" id="couple_sons_yes" {{ (old('couple_sons_yes') ===  1) ? 'checked' : '' }} value="1">
                    <label class="form-check-label" for="couple_sons_yes">
                        Si
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="couple_sons" id="couple_sons_no" {{ (old('couple_sons_no') ===  2) ? 'checked' : '' }} value="2">
                    <label class="form-check-label" for="couple_sons_no">
                        No
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="couple_sons" id="couple_sons_maybe" {{ (old('couple_sons_maybe') ===  3) ? 'checked' : '' }} value="3">
                    <label class="form-check-label" for="couple_sons_maybe">
                        Tal vez
                    </label>
                </div>
            </div>
            <h6>* Obligatorio</h6>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="form-group col-md-6">
                 <label for="studies_lvl_seek"><h6 class="asterics">*</h6> ¿Qué nivel de estudios te gustaría que tenga?</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies_lvl_seek[]" id="full_primary_seek" {{ (old('full_primary_seek') ===  1) ? 'checked' : '' }} value="1">
                    <label class="form-check-label" for="full_primary_seek">
                        Primario Completo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies_lvl_seek[]" id="complete_secondary_seek" {{ (old('complete_secondary_seek') ===  2) ? 'checked' : '' }} value="2">
                    <label class="form-check-label" for="complete_secondary_seek">
                        Secundario Completo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies_lvl_seek[]" id="full_college_seek" {{ (old('full_college_seek') ===  3 ) ? 'checked' : '' }} value="3">
                    <label class="form-check-label" for="full_college_seek">
                        Universitario Completo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies_lvl_seek[]" id="postgraduate_seek" {{ (old('postgraduate_seek') ===  4 ) ? 'checked' : '' }} value="4">
                    <label class="form-check-label" for="postgraduate_seek">
                        Posgrado
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies_lvl_seek[]" id="hebrew_elementary_school_seek" {{ (old('hebrew_elementary_school_seek') ===  5 ) ? 'checked' : '' }} value="5">
                    <label class="form-check-label" for="hebrew_elementary_school_seek">
                        Escuela Primaria Hebrea
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies_lvl_seek[]" id="shiurim_one_per_week_seek" {{ (old('shiurim_one_per_week_seek') ===  6 ) ? 'checked' : '' }} value="6">
                    <label class="form-check-label" for="shiurim_one_per_week_seek">
                        Shiurim 1 por semana
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies_lvl_seek[]" id="hebrew_high_school_seek" {{ (old('hebrew_high_school_seek') ===  7 ) ? 'checked' : '' }} value="7">
                    <label class="form-check-label" for="hebrew_high_school_seek">
                        Secundaria Hebrea
                    </label>
                </div>
            </div>
            <h6>* Obligatorio</h6>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="form-group col-md-12">
                 <label for="years_range"><h6 class="asterics">*</h6> ¿Qué rango de edad te gustaría que tenga?</label>
                <div class="input-group">
                    <input type="number" id="years_range_from"  min ="18" class="form-control col-md-2" name="years_range_from"  placeholder="Desde" value="{{old('years_range_from')}}">
                    <span class="col-md-1"></span>
                    <input type="number" id="years_range_to" min="18" class="form-control col-md-2" name="years_range_to"  placeholder="Hasta" value="{{old('years_range_to')}}">
                </div>
            </div>
            <h6>* Obligatorio</h6>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="form-group col-md-12">
                <label for="live_future"><h6 class="asterics">*</h6> ¿En dónde les gustaría vivir? (Puedes elegir varios)</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_bs" {{ (old('live_future_bs') ===  1) ? 'checked' : '' }} value="1">
                    <label class="form-check-label" for="live_future_bs">
                        Buenos Aires
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_cp" {{ (old('live_future_cp') ===  3) ? 'checked' : '' }} value="3">
                    <label class="form-check-label" for="live_future_cp">
                        Ciudad de Panamá
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_df" {{ (old('live_future_df') ===  14 ) ? 'checked' : '' }} value="14">
                    <label class="form-check-label" for="live_future_df">
                        Distrito Federal
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_c" {{ (old('live_future_c') ===  4 ) ? 'checked' : '' }} value="4">
                    <label class="form-check-label" for="live_future_c">
                        Chile
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_u" {{ (old('live_future_u') ===  5 ) ? 'checked' : '' }} value="5">
                    <label class="form-check-label" for="live_future_u">
                        Uruguay
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_ca" {{ (old('live_future_ca') ===  6 ) ? 'checked' : '' }} value="6">
                    <label class="form-check-label" for="live_future_cas">
                        Caracas
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_i" {{ (old('live_future_i') ===  8 ) ? 'checked' : '' }} value="8">
                    <label class="form-check-label" for="live_future_i">
                        Israel
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_m" {{ (old('live_future_m') ===  15 ) ? 'checked' : '' }} value="15">
                    <label class="form-check-label" for="live_future_m">
                        Miami
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_ny" {{ (old('live_future_ny') ===  16 ) ? 'checked' : '' }} value="16">
                    <label class="form-check-label" for="live_future_ny">
                        New York
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_la" {{ (old('live_future_la') ===  17 ) ? 'checked' : '' }} value="17">
                    <label class="form-check-label" for="live_future_la">
                        Los Angeles
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_cor" {{ (old('live_future_cor') ===  9 ) ? 'checked' : '' }} value="9">
                    <label class="form-check-label" for="live_future_cor">
                        Córdoba
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_t" {{ (old('live_future_t') ===  10 ) ? 'checked' : '' }} value="10">
                    <label class="form-check-label" for="live_future_t">
                        Tucumán
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_ro" {{ (old('live_future_ro') ===  11 ) ? 'checked' : '' }} value="11">
                    <label class="form-check-label" for="live_future_ro">
                        Rosario
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_wherever" {{ (old('live_future_wherever') ===  18 ) ? 'checked' : '' }} value="18">
                    <label class="form-check-label" for="live_future_wherever">
                        Me da lo mismo
                    </label>
                </div>
            </div>
            <h6>* Obligatorio</h6>
        </div>
    </div>
    <div class="card ">
        <div class="card-body">
            <div class="form-group col-md-12">
                <label for="qualities_seek">¿Qué cualidad consideras que tienes tu? puedes elegir una, varias o ninguna.</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities_seek[]" id="sympathetic_seek" {{ (old('sympathetic_seek') ===  1) ? 'checked' : '' }} value="1">
                    <label class="form-check-label" for="sympathetic_seek">
                        Simpático/a
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities_seek[]" id="professional_seek" {{ (old('professional_seek') ===  2) ? 'checked' : '' }} value="2">
                    <label class="form-check-label" for="professional_seek">
                        Profesional
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities_seek[]" id="worship_seek" {{ (old('worship_seek') ===  3) ? 'checked' : '' }} value="3">
                    <label class="form-check-label" for="worship_seek">
                        Culto
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities_seek[]" id="good_mood_seek" {{ (old('good_mood_seek') ===  4) ? 'checked' : '' }} value="4">
                    <label class="form-check-label" for="good_mood_seek">
                        Buen Humor
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities_seek[]" id="organized_seek" {{ (old('organized_seek') ===  5) ? 'checked' : '' }} value="5">
                    <label class="form-check-label" for="organized_seek">
                        Ordenada/o
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities_seek[]" id="family_member_seek" {{ (old('family_member_seek') ===  6) ? 'checked' : '' }} value="6">
                    <label class="form-check-label" for="family_member_seek">
                        Familiero
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities_seek[]" id="affectionate_seek" {{ (old('affectionate_seek') ===  7) ? 'checked' : '' }} value="7">
                    <label class="form-check-label" for="affectionate_seek">
                        Cariñoso/a
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities_seek[]" id="no_smoke_seek" {{ (old('no_smoke_seek') ===  9) ? 'checked' : '' }} value="9">
                    <label class="form-check-label" for="no_smoke_seek">
                        Que no fume
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities_seek[]" id="irat_shamaim_seek" {{ (old('irat_shamaim_seek') ===  8) ? 'checked' : '' }} value="8">
                    <label class="form-check-label" for="irat_shamaim_seek">
                        Irat Shamaim
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="form-group col-md-12">
                <label for="find_partner"><h6 class="asterics">*</h6> Del 1 al 10. ¿Cuántas ganas tienes de encontrar pareja? (1 es nada de ganas - 10 es Muchísimas ganas)</label>
                <div class="col-12 ">
                    <label class="radio-inline">
                        <div class="form-check">
                            <div class="number-radio">1</div>
                            <div class="component-radio"><input class="form-check-input" type="radio" name="find_partner" id="find_partner_one" {{ (old('find_partner_one') ===  1) ? 'checked' : '' }} value="1"></div>
                        </div>
                    </label>
                    <label class="radio-inline">
                        <div class="form-check">
                            <div class="number-radio">2</div>
                            <div class="component-radio"><input class="form-check-input" type="radio" name="find_partner" id="find_partner_two" {{ (old('find_partner_two') ===  2) ? 'checked' : '' }} value="2"></div>
                        </div>
                    </label>
                    <label class="radio-inline">
                        <div class="form-check">
                            <div class="number-radio">3</div>
                            <div class="component-radio"><input class="form-check-input" type="radio" name="find_partner" id="find_partner_three" {{ (old('find_partner_three') ===  3) ? 'checked' : '' }} value="3"></div>
                        </div>
                    </label>
                    <label class="radio-inline">
                        <div class="form-check">
                            <div class="number-radio">4</div>
                            <div class="component-radio"><input class="form-check-input" type="radio" name="find_partner" id="find_partner_four" {{ (old('find_partner_four') ===  4) ? 'checked' : '' }} value="4"></div>
                        </div>
                    </label>
                    <label class="radio-inline">
                        <div class="form-check">
                            <div class="number-radio">5</div>
                            <div class="component-radio"><input class="form-check-input" type="radio" name="find_partner" id="find_partner_five" {{ (old('find_partner_five') ===  5) ? 'checked' : '' }} value="5"></div>
                        </div>
                    </label>
                    <label class="radio-inline">
                        <div class="form-check">
                            <div class="number-radio">6</div>
                            <div class="component-radio"><input class="form-check-input" type="radio" name="find_partner" id="find_partner_six" {{ (old('find_partner_six') ===  6) ? 'checked' : '' }} value="6"></div>
                        </div>
                    </label>
                    <label class="radio-inline">
                        <div class="form-check">
                            <div class="number-radio">7</div>
                            <div class="component-radio"><input class="form-check-input" type="radio" name="find_partner" id="find_partner_seven" {{ (old('find_partner_seven') ===  7) ? 'checked' : '' }} value="7"></div>
                        </div>
                    </label>
                    <label class="radio-inline">
                        <div class="form-check">
                            <div class="number-radio">8</div>
                            <div class="component-radio"><input class="form-check-input" type="radio" name="find_partner" id="find_partner_eigth" {{ (old('find_partner_eigth') ===  8) ? 'checked' : '' }} value="8"></div>
                        </div>
                    </label>
                    <label class="radio-inline">
                        <div class="form-check">
                            <div class="number-radio">9</div>
                            <div class="component-radio"><input class="form-check-input" type="radio" name="find_partner" id="find_partner_nine" {{ (old('find_partner_nine') ===  9) ? 'checked' : '' }} value="9"></div>
                        </div>
                    </label>
                    <label class="radio-inline">
                        <div class="form-check">
                            <div class="number-radio">10</div>
                            <div class="component-radio"><input class="form-check-input" type="radio" name="find_partner" id="find_partner_ten" {{ (old('find_partner_ten') ===  10) ? 'checked' : '' }} value="10"></div>
                        </div>
                    </label>
                </div>
            </div>
            <h6>* Obligatorio</h6>
        </div>
    </div>
    <div class="card upload">
        <div class="card-body">
            <div class="form-group col-md-12">
                <label for="upload_img"><h6 class="asterics">*</h6> Puedes agregar varias fotos, debes seleccionarlas todas juntas (no por separado). Entre todas las fotos no pueden exceder los <b>15 MB</b> (si tus fotos son más pesadas puedes reducirlas fácilmente <a href="https://compressjpg.com/es" target="_blank">clic aquí </a>) .</label>
                <br>
                <input id="input-id" type="file" name="files[]" accept="image/*"  multiple>
            </div>
            <h6>* Obligatorio</h6>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="form-group col-md-12">
                <label for="family_purity_laws"><h6 class="asterics">*</h6> ¿Estarías dispuesto/a a cumplir las leyes de pureza familiar judios? <a target="_blank" href="https://es.chabad.org/library/article_cdo/aid/3265466/jewish/La-pureza-familiar.htm">más info...</a></label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="family_purity_laws" id="family_purity_laws_yes" {{ (old('family_purity_laws_yes') ===  1) ? 'checked' : '' }} value="1">
                    <label class="form-check-label" for="family_purity_laws_yes">
                        Si
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="family_purity_laws" id="family_purity_laws_no" {{ (old('family_purity_laws_no') ==  2) ? 'checked' : '' }} value="2" >
                    <label class="form-check-label" for="family_purity_laws_no">
                        No
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="family_purity_laws" id="family_purity_laws_maybe" {{ (old('family_purity_laws_maybe') ==  3) ? 'checked' : '' }} value="3" >
                    <label class="form-check-label" for="family_purity_laws_maybe">
                        Tal vez
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="family_purity_laws" id="family_purity_laws_never" {{ (old('family_purity_laws_never') ==  4) ? 'checked' : '' }} value="4" >
                    <label class="form-check-label" for="family_purity_laws_never">
                        Nunca
                    </label>
                </div>
            </div>
            <h6>* Obligatorio</h6>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="form-group col-md-12">
                <label for="about_u"><h6 class="asterics">*</h6> Cuentanos algo más de ti</label>
                <input type="text" name="about_u" id="about_u" class="form-control" placeholder="Tu respuesta" value="{{old('about_u')}}">
            </div>
            <h6>* Obligatorio</h6>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="form-group col-md-12">
                <label for="about_u_partner"><h6 class="asterics">*</h6> Cuentanos algo más de lo que esperas de tu pareja</label>
                <input type="text" name="about_u_partner" id="about_u_partner" class="form-control" placeholder="Tu respuesta" value="{{old('about_u_partner')}}">
            </div>
            <h6>* Obligatorio</h6>
        </div>
    </div>
</div>
