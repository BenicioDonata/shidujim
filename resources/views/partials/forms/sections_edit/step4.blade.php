<div class="form-section step4">
    <div class="row bg-dark">
        <div class="form-group col-md-6">
            <label for="qualities_seek"><i class="far fa-check-circle"></i> ¿Qué cualidades te gustaría que tenga? (Puedes elegir una, varias o ninguna).</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="qualities_seek[]" id="sympathetic_seek" {{ (isset($form['qualityseeks']) && (in_array(1,$form['qualityseeks']))) ? 'checked' : '' }} value="1">
                <label class="form-check-label" for="sympathetic_seek"> Simpático/a </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="qualities_seek[]" id="professional_seek" {{ (isset($form['qualityseeks']) && (in_array(2,$form['qualityseeks']))) ? 'checked' : '' }} value="2">
                <label class="form-check-label" for="professional_seek"> Profesional </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="qualities_seek[]" id="worship_seek" {{ (isset($form['qualityseeks']) && (in_array(3,$form['qualityseeks']))) ? 'checked' : '' }} value="3">
                <label class="form-check-label" for="worship_seek"> Culto </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="qualities_seek[]" id="good_mood_seek" {{ (isset($form['qualityseeks']) && (in_array(4,$form['qualityseeks']))) ? 'checked' : '' }} value="4">
                <label class="form-check-label" for="good_mood_seek"> Buen Humor </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="qualities_seek[]" id="organized_seek" {{ (isset($form['qualityseeks']) && (in_array(5,$form['qualityseeks']))) ? 'checked' : '' }} value="5">
                <label class="form-check-label" for="organized_seek"> Ordenada/o </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="qualities_seek[]" id="family_member_seek" {{ (isset($form['qualityseeks']) && (in_array(6,$form['qualityseeks']))) ? 'checked' : '' }} value="6">
                <label class="form-check-label" for="family_member_seek"> Familiero </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="qualities_seek[]" id="affectionate_seek" {{ (isset($form['qualityseeks']) && (in_array(7,$form['qualityseeks']))) ? 'checked' : '' }} value="7">
                <label class="form-check-label" for="affectionate_seek"> Cariñoso/a </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="qualities_seek[]" id="no_smoke_seek" {{ (isset($form['qualityseeks']) && (in_array(8,$form['qualityseeks']))) ? 'checked' : '' }} value="9">
                <label class="form-check-label" for="no_smoke_seek"> Que no fume </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="qualities_seek[]" id="irat_shamaim_seek" {{ (isset($form['qualityseeks']) && (in_array(9,$form['qualityseeks']))) ? 'checked' : '' }} value="8">
                <label class="form-check-label" for="irat_shamaim_seek"> Irat Shamaim </label>
            </div>
        </div>
        <div class="form-group col-md-6 edit-level">
            <label for="find_partner"><i class="far fa-check-circle"></i> Del 1 al 10. ¿Cuántas ganas tienes de encontrar pareja? (1 es nada de ganas - 10 es Muchísimas ganas)</label>
            <div class="col-12 ">
                <label class="radio-inline">
                    <div class="form-check">
                        <div class="number-radio">1</div>
                        <div class="component-radio"><input class="form-check-input" type="radio" name="find_partner" id="find_partner_one" {{ ($form['form']['find_partner'] ==  1) ? 'checked' : '' }} value="1"></div>
                    </div>
                </label>
                <label class="radio-inline">
                    <div class="form-check">
                        <div class="number-radio">2</div>
                        <div class="component-radio"><input class="form-check-input" type="radio" name="find_partner" id="find_partner_two" {{ ($form['form']['find_partner'] ==  2) ? 'checked' : '' }} value="2"></div>
                    </div>
                </label>
                <label class="radio-inline">
                    <div class="form-check">
                        <div class="number-radio">3</div>
                        <div class="component-radio"><input class="form-check-input" type="radio" name="find_partner" id="find_partner_three" {{ ($form['form']['find_partner'] ==  3) ? 'checked' : '' }} value="3"></div>
                    </div>
                </label>
                <label class="radio-inline">
                    <div class="form-check">
                        <div class="number-radio">4</div>
                        <div class="component-radio"><input class="form-check-input" type="radio" name="find_partner" id="find_partner_four" {{ ($form['form']['find_partner'] ==  4) ? 'checked' : '' }} value="4"></div>
                    </div>
                </label>
                <label class="radio-inline">
                    <div class="form-check">
                        <div class="number-radio">5</div>
                        <div class="component-radio"><input class="form-check-input" type="radio" name="find_partner" id="find_partner_five" {{ ($form['form']['find_partner'] ==  5) ? 'checked' : '' }} value="5"></div>
                    </div>
                </label>
                <label class="radio-inline">
                    <div class="form-check">
                        <div class="number-radio">6</div>
                        <div class="component-radio"><input class="form-check-input" type="radio" name="find_partner" id="find_partner_six" {{ ($form['form']['find_partner'] ==  6) ? 'checked' : '' }} value="6"></div>
                    </div>
                </label>
                <label class="radio-inline">
                    <div class="form-check">
                        <div class="number-radio">7</div>
                        <div class="component-radio"><input class="form-check-input" type="radio" name="find_partner" id="find_partner_seven" {{ ($form['form']['find_partner'] ==  7) ? 'checked' : '' }} value="7"></div>
                    </div>
                </label>
                <label class="radio-inline">
                    <div class="form-check">
                        <div class="number-radio">8</div>
                        <div class="component-radio"><input class="form-check-input" type="radio" name="find_partner" id="find_partner_eigth" {{ ($form['form']['find_partner'] ==  8) ? 'checked' : '' }} value="8"></div>
                    </div>
                </label>
                <label class="radio-inline">
                    <div class="form-check">
                        <div class="number-radio">9</div>
                        <div class="component-radio"><input class="form-check-input" type="radio" name="find_partner" id="find_partner_nine" {{ ($form['form']['find_partner'] ==  9) ? 'checked' : '' }} value="9"></div>
                    </div>
                </label>
                <label class="radio-inline">
                    <div class="form-check">
                        <div class="number-radio">10</div>
                        <div class="component-radio"><input class="form-check-input" type="radio" name="find_partner" id="find_partner_ten" {{ ($form['form']['find_partner'] ==  10) ? 'checked' : '' }} value="10"></div>
                    </div>
                </label>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="family_purity_laws"><i class="far fa-check-circle"></i> ¿Estarías dispuesto/a a cumplir las leyes de pureza familiar judios?</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="family_purity_laws" id="family_purity_laws_yes" {{ ($form['form']['familypuritylaw_id'] ==  1) ? 'checked' : '' }} value="1">
                <label class="form-check-label" for="family_purity_laws_yes"> Si </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="family_purity_laws" id="family_purity_laws_no" {{ ($form['form']['familypuritylaw_id'] ==  2) ? 'checked' : '' }} value="2" >
                <label class="form-check-label" for="family_purity_laws_no"> No </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="family_purity_laws" id="family_purity_laws_maybe" {{ ($form['form']['familypuritylaw_id'] ==  3) ? 'checked' : '' }} value="3" >
                <label class="form-check-label" for="family_purity_laws_maybe"> Tal vez </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="family_purity_laws" id="family_purity_laws_never" {{ ($form['form']['familypuritylaw_id'] ==  4) ? 'checked' : '' }} value="4" >
                <label class="form-check-label" for="family_purity_laws_never"> Nunca </label>
            </div>
        </div>
    </div>
</div>
