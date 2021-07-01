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
                <form  method="get" action="{{route('matchPersonForm')}}" name="frm_match" id="frm_match">
                    <div class="row ">
                      <div class="form-group col-md-12">
                            <label for="users_banner"><b>Incluir Postulantes excluidos</b></label>
                            <div class="form-check">
                                <label class="checkbox-inline" for="users_banner_blocked">
                                    <input type="checkbox" name="users_banner[]" id="check" value="1"> Revisión
                                </label>
                                <label class="checkbox-inline" for="users_banner_blocked">
                                    <input type="checkbox" name="users_banner[]" id="blocked" value="2"> Bloqueados
                                </label>
                                <label class="checkbox-inline" for="users_banner_matched">
                                    <input type="checkbox" name="users_banner[]" id="matched" value="3"> Matcheados
                                </label>
                                <label class="checkbox-inline" for="users_banner_couple">
                                    <input type="checkbox" name="users_banner[]" id="couple" value="4"> En Pareja
                                </label>
                            </div>
                        </div>
                    </div>
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
                                    <input type="radio" name="couple_sons" id="couple_sons_yes" value="1"> Si
                                </label>
                                <label class="checkbox-inline" for="couple_sons_no">
                                    <input type="radio" name="couple_sons" id="couple_sons_no" value="2"> No
                                </label>
                                <label class="checkbox-inline" for="couple_sons_maybe">
                                    <input type="radio" name="couple_sons" id="couple_sons_maybe" value="3"> Talvez
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
                                <label class="checkbox-inline" for="kasher_shabat_tzniut">
                                    <input type="checkbox" name="religiouscompliancelevel[]" id="kasher_shabat_tora"  value="5"> Kasher + Shabat + Estudio de Torá
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
                                <label class="checkbox-inline" for="spanish">
                                    <input type="checkbox" name="languages[]" id="spanish" value="1"> Español
                                </label>
                                <label class="checkbox-inline" for="english">
                                    <input type="checkbox" name="languages[]" id="english" value="2"> Ingles
                                </label>
                                <label class="checkbox-inline" for="hebrew">
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
                            <label for="years_range"><b>Rango de edad (Pretendido)</b></label>
                            <div class="input-group">
                                <input type="number" id="years_range_from"  min ="18" class="form-control col-md-4" name="years_range_from"  placeholder="Desde">
                                <span class="col-md-1"></span>
                                <input type="number" id="years_range_to" min="18" class="form-control col-md-4" name="years_range_to"  placeholder="Hasta">
                            </div>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="form-group col-md-4">
                            <label for="years_range"><b>Rango de edad (Persona)</b></label>
                            <div class="input-group">
                                <input type="number" id="years_range_from"  min ="18" class="form-control col-md-4" name="years_range_from_person"  placeholder="Desde">
                                <span class="col-md-1"></span>
                                <input type="number" id="years_range_to" min="18" class="form-control col-md-4" name="years_range_to_person"  placeholder="Hasta">
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="studies"><b>Estudios seculares y judíos</b></label>
                            <div class="form-check">
                                <label class="checkbox-inline" for="full_primary">
                                    <input type="checkbox" name="studies[]" id="full_primary" value="1"> Primario Completo
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="complete_secondary">
                                    <input type="checkbox" name="studies[]" id="complete_secondary" value="2"> Secundario Completo
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="full_college">
                                    <input type="checkbox" name="studies[]" id="full_college" value="3"> Universitario Completo
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="postgraduate">
                                    <input type="checkbox" name="studies[]" id="postgraduate" value="4"> Posgrado
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="hebrew_elementary_school">
                                    <input type="checkbox" name="studies[]" id="hebrew_elementary_school" value="5"> Escuela Primaria Hebrea
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="shiurim_one_per_week">
                                    <input type="checkbox" name="studies[]" id="shiurim_one_per_week" value="6"> Shiurim 1 por semana
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="shiurim_two_per_week">
                                    <input type="checkbox" name="studies[]" id="shiurim_two_per_week" value="7"> Shiurim 2 por Semana
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="shiurim_more_two_per_week">
                                    <input type="checkbox" name="studies[]" id="shiurim_more_two_per_week" value="8"> Shiurim mas de dos por semana
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="ieshiva">
                                    <input type="checkbox" name="studies[]" id="ieshiva" value="9"> Ieshiva/Seminario
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="hebrew_high_school">
                                    <input type="checkbox" name="studies[]" id="hebrew_high_school" value="10"> Secundaria Hebrea
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="location"><b>Localidad en la que viven actualmente</b></label>
                            <div class="form-check">
                                <label class="checkbox-inline" for="buenos_aires">
                                    <input type="checkbox" name="location[]" id="buenos_aires" value="1"> Buenos Aires
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="ciudad_de_mexico">
                                    <input type="checkbox" name="location[]" id="ciudad_de_mexico" value="2"> Ciudad de México
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="ciudad_de_panama">
                                    <input type="checkbox" name="location[]" id="ciudad_de_panama" value="3"> Ciudad de Panamá
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="chile">
                                    <input type="checkbox" name="location[]" id="chile" value="4"> Chile
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="uruguay">
                                    <input type="checkbox" name="location[]" id="uruguay" value="5"> Uruguay
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="caracas">
                                    <input type="checkbox" name="location[]" id="caracas" value="6"> Caracas
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="estados_unidos">
                                    <input type="checkbox" name="location[]" id="estados_unidos" value="7"> Estados Unidos
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="israel">
                                    <input type="checkbox" name="location[]" id="israel" value="8"> Israel
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="cordoba">
                                    <input type="checkbox" name="location[]" id="cordoba" value="9"> Córdoba
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="tucuman">
                                    <input type="checkbox" name="location[]" id="tucuman" value="10"> Tucumán
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="rosario">
                                    <input type="checkbox" name="location[]" id="rosario" value="11"> Rosario
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="otros_lugares_de_argentina">
                                    <input type="checkbox" name="location[]" id="otros_lugares_de_argentina" value="12"> Otros Lugares de Argentina
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="otros">
                                    <input type="checkbox" name="location[]" id="otros" value="13"> Otros
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="form-group col-md-4">
                            <label for="accepted_level"><b>Niveles de Aceptación</b></label>
                            <div class="form-check">
                                <label class="checkbox-inline" for="kasher_only_house">
                                    <input type="checkbox" name="accepted_level[]" id="kasher_only_house" value="1"> Kasher solo en Casa
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="forever_kasher">
                                    <input type="checkbox" name="accepted_level[]" id="forever_kasher" value="2"> Siempre Kasher
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="kasher_shabat">
                                    <input type="checkbox" name="accepted_level[]" id="kasher_shabat" value="3"> Kasher siempre + Shabat
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="abrej">
                                    <input type="checkbox" name="accepted_level[]" id="abrej" value="4"> Abrej (que estudie todo el dia)
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="tora">
                                    <input type="checkbox" name="accepted_level[]" id="tora" value="5"> Que estudie Tora medio dÍa y trabaje
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="kasher_shabat_study">
                                    <input type="checkbox" name="accepted_level[]" id="kasher_shabat_study" value="6"> Kasher siempre + Shabat + un minimo de estudio semanal
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="hebrew">
                                    <input type="checkbox" name="accepted_level[]" id="hebrew" value="7"> Que sepa hebreo
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="wherever">
                                    <input type="checkbox" name="accepted_level[]" id="wherever" value="8"> Me da lo mismo cumpla o no
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="qualities"><b>Cualidades</b></label>
                            <div class="form-check">
                                <label class="checkbox-inline" for="sympathetic">
                                    <input type="checkbox" name="s[]" id="sympathetic" value="1"> Simpático/a
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="professional">
                                    <input type="checkbox" name="qualities[]" id="professional" value="2"> Profesional
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="worship">
                                    <input type="checkbox" name="qualities[]" id="worship" value="3"> Culto
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="good_mood">
                                    <input type="checkbox" name="qualities[]" id="good_mood" value="4"> Buen Humor
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="organized">
                                    <input type="checkbox" name="qualities[]" id="organized" value="5"> Ordenada/o
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="family_member">
                                    <input type="checkbox" name="qualities[]" id="family_member" value="6"> Familiero
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="affectionate">
                                    <input type="checkbox" name="qualities[]" id="affectionate" value="7"> Cariñoso/a
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="irat_shamaim">
                                    <input type="checkbox" name="qualities[]" id="irat_shamaim" value="8"> Irat Shamaim
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="live_future"><b>Dónde le gustaría vivir</b></label>
                            <div class="form-check">
                                <label class="checkbox-inline" for="live_future_bs">
                                    <input type="checkbox" name="live_future[]" id="live_future_bs" value="1"> Buenos Aires
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="live_future_cp">
                                    <input type="checkbox" name="live_future[]" id="live_future_cp" value="2"> Ciudad de Panamá
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="live_future_df">
                                    <input type="checkbox" name="live_future[]" id="live_future_df" value="3"> Distrito Federal
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="live_future_c">
                                    <input type="checkbox" name="live_future[]" id="live_future_c" value="4"> Chile
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="live_future_u">
                                    <input type="checkbox" name="live_future[]" id="live_future_u" value="5"> Uruguay
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="live_future_ca">
                                    <input type="checkbox" name="live_future[]" id="live_future_ca" value="6"> Caracas
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="live_future_ca">
                                    <input type="checkbox" name="live_future[]" id="live_future_i" value="8"> Israel
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="live_future_m">
                                    <input type="checkbox" name="live_future[]" id="live_future_m" value="15"> Miami
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="live_future_ny">
                                    <input type="checkbox" name="live_future[]" id="live_future_ny" value="16"> New York
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="live_future_la">
                                    <input type="checkbox" name="live_future[]" id="live_future_la" value="17"> Los Angeles
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="live_future_cor">
                                    <input type="checkbox" name="live_future[]" id="live_future_cor" value="9"> Córdoba
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="live_future_t">
                                    <input type="checkbox" name="live_future[]" id="live_future_t" value="10"> Tucumán
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="live_future_ro">
                                    <input type="checkbox" name="live_future[]" id="live_future_ro" value="11"> Rosario
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="checkbox-inline" for="live_future_wherever">
                                    <input type="checkbox" name="live_future[]" id="live_future_wherever" value="18"> Me da lo mismo
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="form-group col-md-4">
                            <label for="find_partner"><b>Rango de ganas de encontrar una pareja (1 al 10)</b></label>
                            <div class="input-group">
                                <input type="number" id="feel_range_from_person"  min ="1"  min ="10" class="form-control col-md-4" name="feel_range_from"  placeholder="Desde">
                                <span class="col-md-1"></span>
                                <input type="number" id="feel_range_to_person" min="1"  min ="10"class="form-control col-md-4" name="feel_range_to"  placeholder="Hasta">
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="family_purity_laws"><b>Disponibilidad para cumplir las leyes de pureza familiar judios</b></label>
                            <div class="form-check">
                                <label class="checkbox-inline" for="family_purity_laws_yes">
                                    <input type="checkbox" name="family_purity_laws[]" id="family_purity_laws_yes" value="1"> Si
                                </label>
                                <label class="checkbox-inline" for="family_purity_laws_no">
                                    <input type="checkbox" name="family_purity_laws[]" id="family_purity_laws_no" value="2"> No
                                </label>
                                <label class="checkbox-inline" for="couple_sons_maybe">
                                    <input type="checkbox" name="family_purity_laws[]" id="couple_sons_maybe" value="3"> Talvez
                                </label>
                                <label class="checkbox-inline" for="family_purity_laws_never">
                                    <input type="checkbox" name="family_purity_laws[]" id="family_purity_laws_never" value="4"> Nunca
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group fg-buttom">
                        <button type="submit" data-toggle="tooltip" data-placement="top" title="Matchear Filtrado"  class=" btn btn-dark fas fa-users"></button>
                        <a type="button" data-toggle="tooltip" data-placement="top" title="Todos los Registros" class="btn btnBuscar fas fa-list-ol" href="{{route('dash_user')}}"></a>
                    </div>
                </form>
                </div>
            </div><!--FIN BUSCADOR-->
        </div>
    </div>
</div>
