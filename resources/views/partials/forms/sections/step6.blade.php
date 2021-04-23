<div class="form-section step6">
    <div class="card card-step6">
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
            <div class="form-group col-md-4">
                 <label for="smoke"><h6 class="asterics">*</h6> ¿Fumas?</label>
                <select class="form-control" id="smoke" name="smoke" tabindex="-1" aria-hidden="true" required>
                    <option value="" selected>Elige</option>
                    @foreach($smokers as $smoker)
                        <option value="{{$smoker->id}}" {{ old('smoke') == $smoker->id ? 'selected' : '' }} > {{ $smoker->smokers_title }} </option>
                    @endforeach
                </select>
            </div>
            <h6>* Obligatorio</h6>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="form-group col-md-6">
                <label for="sons"><h6 class="asterics">*</h6> Hijos</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sons" id="more_sons" {{ (old('more_sons') ===  1) ? 'checked' : '' }} value="1">
                    <label class="form-check-label" for="more_sons">
                        Ya tengo hijos y quiero más
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sons" id="no_more_sons" {{ (old('no_more_sons') ===  2) ? 'checked' : '' }} value="2">
                    <label class="form-check-label" for="no_more_sons">
                        Ya tengo hijos y no quiero más
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sons" id="want_sons" {{ (old('want_sons') ===  3) ? 'checked' : '' }} value="3">
                    <label class="form-check-label" for="want_sons">
                        Si quiero tener hijos
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sons" id="dont_know" {{ (old('dont_know') ===  4) ? 'checked' : '' }} value="4">
                    <label class="form-check-label" for="dont_know">
                        No lo sé aun
                    </label>
                </div>
            </div>
            <h6>* Obligatorio</h6>
        </div>
    </div>
    <div class="card ">
        <div class="card-body">
            <div class="form-group col-md-6">
                <label for="location"><h6 class="asterics">*</h6> ¿En qué Localidad Vivis Actualmente?</label>
                <select class="form-control" id="location" name="location" tabindex="-1" aria-hidden="true" required>
                    <option value="" selected>Elige</option>
                    @foreach($localities as $location)
                        @if($location->id <= 13)
                        <option value="{{$location->id}}" {{ old('location') == $location->id ? 'selected' : '' }} > {{ $location->localities_title }} </option>
                        @endif
                    @endforeach
                </select>
            </div>
            <h6>* Obligatorio</h6>
        </div>
    </div>
    <div class="card ">
        <div class="card-body">
            <div class="form-group col-md-12">
                <label for="qualities">¿Qué cualidad consideras que tienes tu? puedes elegir una, varias o ninguna.</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities[]" id="sympathetic" {{ (old('sympathetic') ===  1) ? 'checked' : '' }} value="1">
                    <label class="form-check-label" for="sympathetic">
                        Simpático/a
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities[]" id="professional" {{ (old('professional') ===  2) ? 'checked' : '' }} value="2">
                    <label class="form-check-label" for="professional">
                        Profesional
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities[]" id="worship" {{ (old('worship') ===  3) ? 'checked' : '' }} value="3">
                    <label class="form-check-label" for="worship">
                        Culto
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities[]" id="good_mood" {{ (old('good_mood') ===  4) ? 'checked' : '' }} value="4">
                    <label class="form-check-label" for="good_mood">
                        Buen Humor
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities[]" id="organized" {{ (old('organized') ===  5) ? 'checked' : '' }} value="5">
                    <label class="form-check-label" for="organized">
                        Ordenada/o
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities[]" id="family_member" {{ (old('family_member') ===  6) ? 'checked' : '' }} value="6">
                    <label class="form-check-label" for="family_member">
                        Familiero
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities[]" id="affectionate" {{ (old('affectionate') ===  7) ? 'checked' : '' }} value="7">
                    <label class="form-check-label" for="affectionate">
                        Cariñoso/a
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities[]" id="irat_shamaim" {{ (old('irat_shamaim') ===  8) ? 'checked' : '' }} value="8">
                    <label class="form-check-label" for="irat_shamaim">
                        Irat Shamaim
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="card ">
        <div class="card-body">
            <div class="form-group col-md-12">
                <label for="accepted_level"><h6 class="asterics">*</h6> Que nivel seria aceptado por vos? (Puedes Elegir varios)</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="accepted_level[]" id="kasher_only_house" {{ (old('kasher_only_house') ===  1) ? 'checked' : '' }} value="1">
                    <label class="form-check-label" for="kasher_only_house">
                        Kasher solo en Casa
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="accepted_level[]" id="forever_kasher" {{ (old('forever_kasher') ===  2) ? 'checked' : '' }} value="2">
                    <label class="form-check-label" for="forever_kasher">
                        Siempre Kasher
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="accepted_level[]" id="kasher_shabat" {{ (old('kasher_shabat') ===  3) ? 'checked' : '' }} value="3">
                    <label class="form-check-label" for="kasher_shabat">
                        Kasher siempre + Shabat
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="accepted_level[]" id="abrej" {{ (old('abrej') ===  4) ? 'checked' : '' }} value="4">
                    <label class="form-check-label" for="abrej">
                        Abrej (que estudie todo el dia)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="accepted_level[]" id="tora" {{ (old('tora') ===  5) ? 'checked' : '' }} value="5">
                    <label class="form-check-label" for="tora">
                        Que estudie Tora medio dÍa y trabaje
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="accepted_level[]" id="kasher_shabat_study" {{ (old('kasher_shabat_study') ===  5) ? 'checked' : '' }} value="5">
                    <label class="form-check-label" for="kasher_shabat_study">
                        Kasher siempre + Shabat + un minimo de estudio semanal
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="accepted_level[]" id="hebrew" {{ (old('hebrew') ===  6) ? 'checked' : '' }} value="6">
                    <label class="form-check-label" for="hebrew">
                        Que sepa hebreo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="accepted_level[]" id="wherever" {{ (old('wherever') ===  7) ? 'checked' : '' }} value="7">
                    <label class="form-check-label" for="wherever">
                        Me da lo mismo cumpla o no
                    </label>
                </div>
            </div>
            <h6>* Obligatorio</h6>
        </div>
    </div>
</div>
