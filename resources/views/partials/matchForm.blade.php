@yield('matchForm')
<div class="row">
    <div class="col-md-12">
        <!--BUSCADOR-->
        <div class="panel panel-busqueda " id="accordion_match">

            <div class="panel-heading">
                <h3 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion_match" href="#collapseMatch" class="collapsed" aria-expanded="false"><i class="fas fa-chevron-down"></i> Armar Matcheo</a>
                </h3>
            </div>

            <div id="collapseMatch" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                <div class="panel-body">
                <form  method="get" action="{{route('searchWordForm')}}" name="frm_match" id="frm_match">

                    <div class="row ">
                        <div class="form-group col-md-4">
                            <label for="gender"><b>Género</b></label>
                            <div class="form-check">
                                <label class="checkbox-inline" for="gender_woman">
                                    <input type="radio" name="gender" id="gender_woman" value="1"> Mujer
                                </label>
                                <label class="checkbox-inline" for="gender_man">
                                    <input type="radio" name="gender" id="gender_man" value="2"> Hombre
                                </label>
                                <label class="checkbox-inline" for="gender_any">
                                    <input type="radio" name="gender" id="gender_any"  value="3"> Ambos
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="civil_status"><b>Estado Civil</b></label>
                            <div class="form-check">
                                <label class="checkbox-inline" for="single">
                                    <input type="checkbox" name="civil_status[]" id="single" value="1"> Soltero
                                </label>
                                <label class="checkbox-inline" for="divorced">
                                    <input type="checkbox" name="civil_status[]" id="divorced" value="2"> Divorciado
                                </label>
                                <label class="checkbox-inline" for="widower">
                                    <input type="checkbox" name="civil_status[]" id="widower"  value="3"> Viudo
                                </label>
                                <label class="checkbox-inline" for="wherever">
                                    <input type="checkbox" name="civil_status[]" id="wherever"  value="4"> Me da igual
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="couple_sons"><b>Aceptan que ya tenga hijos anteriormente</b></label>
                            <div class="form-check">
                                <label class="checkbox-inline" for="couple_sons_yes">
                                    <input type="checkbox" name="couple_sons[]" id="couple_sons_yes" value="1"> Si
                                </label>
                                <label class="checkbox-inline" for="couple_sons_no">
                                    <input type="checkbox" name="couple_sons[]" id="couple_sons_no" value="2"> No
                                </label>
                                <label class="checkbox-inline" for="couple_sons_maybe">
                                    <input type="checkbox" name="couple_sons[]" id="couple_sons_maybe" value="3"> Talvez
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="religiouscompliancelevel"><b>Nivel de cumplimiento religioso</b></label>
                            <div class="form-check">
                                <label class="checkbox-inline" for="none">
                                    <input type="checkbox" name="religiouscompliancelevel[]" id="none" value="1"> Ninguno
                                </label>
                                <label class="checkbox-inline" for="kasher">
                                    <input type="checkbox" name="religiouscompliancelevel[]" id="kasher" value="2"> Kasher
                                </label>
                                <label class="checkbox-inline" for="kasher_shabat">
                                    <input type="checkbox" name="religiouscompliancelevel[]" id="kasher_shabat"  value="3"> Kasher + Shabat
                                </label>
                                <label class="checkbox-inline" for="kasher_shabat_tzniut">
                                    <input type="checkbox" name="religiouscompliancelevel[]" id="kasher_shabat_tzniut"  value="4"> Kasher + Shabat + Tzniut
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="sons"><b>Hijos</b></label>
                            <div class="form-check">
                                <label class="checkbox-inline" for="more_sons">
                                    <input type="checkbox" name="sons[]" id="more_sons" value="1"> Ya tienen hijos y quieren más
                                </label>
                                <label class="checkbox-inline" for="no_more_sons">
                                    <input type="checkbox" name="sons[]" id="no_more_sons" value="2"> Ya tienen hijos y no quieren más
                                </label>
                                <label class="checkbox-inline" for="want_sons">
                                    <input type="checkbox" name="sons[]" id="want_sons"  value="3"> Quieren tener hijos
                                </label>
                                <label class="checkbox-inline" for="dont_know">
                                    <input type="checkbox" name="sons[]" id="dont_know"  value="4"> No saben aun
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="languages"><b>Idioma</b></label>
                            <div class="form-check">
                                <label class="checkbox-inline" for="more_sons">
                                    <input type="checkbox" name="languages[]" id="spanish" value="1"> Español
                                </label>
                                <label class="checkbox-inline" for="no_more_sons">
                                    <input type="checkbox" name="languages[]" id="english" value="2"> Ingles
                                </label>
                                <label class="checkbox-inline" for="want_sons">
                                    <input type="checkbox" name="languages[]" id="hebrew"  value="3"> Hebreo
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="form-group col-md-4 tree-row">
                            <label for="count_sons"><b>Cantidad de Hijos</b></label>
                            <select class="form-control" id="count_sons" name="count_sons" tabindex="-1" aria-hidden="true" >
                                <option value="" selected>Elige</option>
                                @for($i=0; $i<11; $i++)
                                    @if($i <= 1)
                                        <option value="{{$i}}" > {{$i}}</option>
                                    @else
                                        <option value="{{$i}}" > Hasta {{ $i }} inclusive</option>
                                    @endif
                                @endfor
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="smoke"><b>Que Fumen</b></label>
                            <div class="form-check">
                                <label class="checkbox-inline" for="smoke_yes">
                                    <input type="radio" name="smoke" id="smoke_yes" value="1"> Si
                                </label>
                                <label class="checkbox-inline" for="smoke_no">
                                    <input type="radio" name="smoke" id="smoke_no" value="2"> No
                                </label>
                                <label class="checkbox-inline" for="smoke_wherever">
                                    <input type="radio" name="smoke" id="smoke_wherever" value="3"> Ambos
                                </label>
                            </div>

                        </div>
                        <div class="form-group col-md-4">
                            <label for="years_range"><b>Rango de edad</b></label>
                            <div class="input-group">
                                <input type="number" id="years_range_from"  min ="18" class="form-control col-md-2" name="years_range_from"  placeholder="Desde">
                                <span class="col-md-1"></span>
                                <input type="number" id="years_range_to" min="18" class="form-control col-md-2" name="years_range_to"  placeholder="Hasta">
                            </div>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="form-group col-md-6">
                            <label for="studies">Estudios seculares y judíos</label>
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

                    </div>

                    <div class="row ">
                        <div class="form-group col-md-6">
                            <label for="location">¿En qué Localidad Vivis Actualmente?</label>
                            <select class="form-control" id="location" name="location" tabindex="-1" aria-hidden="true" required>
                                <option value="" selected>Elige</option>
{{--                                @foreach($localities as $location)--}}
{{--                                    @if($location->id <= 13)--}}
{{--                                        <option value="{{$location->id}}" {{ old('location') == $location->id ? 'selected' : '' }} > {{ $location->localities_title }} </option>--}}
{{--                                    @endif--}}
{{--                                @endforeach--}}
                            </select>
                        </div>

                    </div>
                    <div class="row ">
                        <div class="form-group col-md-6">
                            <label for="accepted_level">¿Qué nivel seria aceptado por vos? (Puedes Elegir varios)</label>
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
                        <div class="form-group col-md-6">
                            <label for="civil_status_seeker">Estado Civil Que Buscas (Puedes elegir varios)</label>
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
                    </div>
                    <div class="row ">

                        <div class="form-group col-md-6">
                            <label for="studies_lvl_seek">¿Qué nivel de estudios te gustaría que tenga?</label>
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
                    </div>
                    <div class="row ">
                        <div class="form-group col-md-6">
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
                        <div class="form-group col-md-6">
                            <label for="live_future">¿En dónde les gustaría vivir? (Puedes elegir varios)</label>
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
                    </div>
                    <div class="row ">
                        <div class="form-group col-md-6">
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
                        <div class="form-group col-md-6 edit-level">
                            <label for="find_partner">Del 1 al 10. ¿Cuántas ganas tienes de encontrar pareja? (1 es nada de ganas - 10 es Muchísimas ganas)</label>
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
                    </div>
                    <div class="row ">
                        <div class="form-group col-md-6">
                            <label for="family_purity_laws">¿Estarías dispuesto/a a cumplir las leyes de pureza familiar judios?</label>
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
                    </div>






                        <div class="form-group" style="clear:both;">
                            <button type="submit" data-toggle="tooltip" data-placement="top" title="Empezar el Match"  class=" btn btn-dark fas fa-users"></button>
                            <a type="button" data-toggle="tooltip" data-placement="top" title="Todos los Registros" class="btn btnBuscar fas fa-list-ol" href="{{route('dash_user')}}"></a>
                        </div>
                </form>
                </div>
            </div><!--FIN BUSCADOR-->
        </div>
    </div>
</div>
