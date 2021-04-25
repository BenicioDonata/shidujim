<div class="form-section step5">
    <div class="card card-step5">
        <div class="card-header">
            <h5></h5>
        </div>
        <div class="card-body">
            <p></p>
        </div>
    </div>
    <div class="card ">
{{--        <div class="card-header card-form">--}}
{{--            <h5></h5>--}}
{{--        </div>--}}
        <div class="card-body">
            <div class="form-group col-md-12">
                <label for="studies"><h6 class="asterics">*</h6> Estudios seculares y judíos (Puedes elegir varios)</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies[]" id="full_primary" {{ (old('full_primary') ===  1) ? 'checked' : '' }} value="1">
                    <label class="form-check-label" for="full_primary">
                        Primario Completo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies[]" id="complete_secondary" {{ (old('complete_secondary') ===  2) ? 'checked' : '' }} value="2">
                    <label class="form-check-label" for="complete_secondary">
                        Secundario Completo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies[]" id="full_college" {{ (old('full_college') ===  3 ) ? 'checked' : '' }} value="3">
                    <label class="form-check-label" for="full_college">
                        Universitario Completo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies[]" id="postgraduate" {{ (old('postgraduate') ===  4 ) ? 'checked' : '' }} value="4">
                    <label class="form-check-label" for="postgraduate">
                        Posgrado
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies[]" id="hebrew_elementary_school" {{ (old('hebrew_elementary_school') ===  5 ) ? 'checked' : '' }} value="5">
                    <label class="form-check-label" for="hebrew_elementary_school">
                        Escuela Primaria Hebrea
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies[]" id="shiurim_one_per_week" {{ (old('shiurim_one_per_week') ===  6 ) ? 'checked' : '' }} value="6">
                    <label class="form-check-label" for="shiurim_one_per_week">
                        Shiurim 1 por semana
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies[]" id="shiurim_two_per_week" {{ (old('shiurim_two_per_week') ===  7 ) ? 'checked' : '' }} value="7">
                    <label class="form-check-label" for="shiurim_two_per_week">
                        Shiurim 2 por Semana
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies[]" id="shiurim_more_two_per_week" {{ (old('shiurim_more_two_per_week') ===  8 ) ? 'checked' : '' }} value="8">
                    <label class="form-check-label" for="shiurim_more_two_per_week">
                        Shiurim mas de dos por semana
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies[]" id="ieshiva" {{ (old('ieshiva') ===  9 ) ? 'checked' : '' }} value="9">
                    <label class="form-check-label" for="ieshiva">
                        Ieshiva/Seminario
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies[]" id="hebrew_high_school" {{ (old('hebrew_high_school') ===  10 ) ? 'checked' : '' }} value="10">
                    <label class="form-check-label" for="hebrew_high_school">
                        Secundaria Hebrea
                    </label>
                </div>
            </div>
            <h6>* Obligatorio</h6>
        </div>
    </div>
    <div class="card ">
        <div class="card-body">
            <div class="form-group col-md-6">
                 <label for="languages"><h6 class="asterics">*</h6> ¿Que idiomas hablas?</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="languages[]" id="spanish" {{ (old('spanish') ===  1) ? 'checked' : '' }} value="1">
                    <label class="form-check-label" for="spanish">
                        Español
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="languages[]" id="english" {{ (old('english') ===  2) ? 'checked' : '' }} value="2">
                    <label class="form-check-label" for="english">
                        Ingles
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="languages[]" id="hebrew" {{ (old('hebrew') ===  3) ? 'checked' : '' }} value="3">
                    <label class="form-check-label" for="hebrew">
                        Hebreo
                    </label>
                </div>
            </div>
            <h6>* Obligatorio</h6>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="form-group col-md-6">
                 <label for="name_school"><h6 class="asterics">*</h6> Nombre del Colegio Primario</label>
                <input type="text" id="name_school" class="form-control" name="name_school"  placeholder="Tu respuesta" value="{{old('name_school')}}">
            </div>
            <h6>* Obligatorio</h6>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="form-group col-md-6">
                <label for="name_secondary_school">Nombre del Colegio Secundario</label>
                <input type="text" id="name_secondary_school" class="form-control" name="name_secondary_school"  placeholder="Tu respuesta" value="{{old('name_secondary_school')}}">
            </div>
        </div>
    </div>
</div>
