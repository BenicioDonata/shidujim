@yield('editshidujimForm')
<form class="contact-form edit-form"  method="post"  action="" enctype="multipart/form-data" >
    @csrf

        <div class="row bg-dark">
            <div class="form-group col-md-6">
                    <label for="name"> Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Tu respuesta" value="{{$form->name}}">
            </div>
            <div class="form-group col-md-6">
                    <label for="name_hebreo">Nombre en Hebreo</label>
                    <input type="text" name="name_hebrew" id="name_hebrew" class="form-control" placeholder="Tu respuesta" value="{{$form->name_hebrew}}">
            </div>
        </div>
        <div class="row bg-dark">
            <div class="form-group col-md-6">
                <label for="lastname">Apellido Paterno</label>
                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Tu respuesta" value="{{$form->name_hebrew}}">
            </div>
            <div class="form-group col-md-6">
                <label for="second_lastname">Apellido Materno</label>
                <input type="text" name="second_lastname" id="second_lastname" class="form-control" placeholder="Tu respuesta" value="{{$form->name_hebrew}}">
            </div>
        </div>
        <div class="row bg-dark">
            <div class="form-group col-md-6">
                <label for="date_of_birth"> Fecha de Nacimiento</label>
                <input type="text" id="date_of_birth" class="form-control" name="date_of_birth"  placeholder="Tu respuesta" value="{{$form->name_hebrew}}">
            </div>
            <div class="form-group col-md-6">
                <label for="civil_status"> Estado Civil</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="civil_status" id="single" {{ (old('single') ===  1) ? 'checked' : '' }} value="1">
                    <label class="form-check-label" for="single">
                        Soltero
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="civil_status" id="divorced" {{ (old('divorced') ==  2) ? 'checked' : '' }} value="2" >
                    <label class="form-check-label" for="divorced">
                        Divorciado
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="civil_status" id="widower" {{ (old('widower') ==  3) ? 'checked' : '' }} value="3" >
                    <label class="form-check-label" for="widower">
                        Viudo
                    </label>
                </div>
            </div>
        </div>
        <div class="row bg-dark">
            <div class="form-group col-md-6">
                <label for="profession">Profesión</label>
                <input type="text" id="profession" class="form-control" name="profession"  placeholder="Tu respuesta" value="{{old('profession')}}">
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" name="email"  placeholder="Tu respuesta" value="{{old('email')}}">
            </div>
        </div>
        <div class="row bg-dark">
            <div class="form-group col-md-6">
                <label for="main_phone">Teléfono Celular (Pais + Ciudad + Numero)</label>
                <input type="number" id="main_phone" class="form-control" name="main_phone" min="0"   placeholder="Tu respuesta" value="{{old('main_phone')}}">
            </div>
            <div class="form-group col-md-6">
                <label for="count_sons"> Tenes hijos, cuantos? </label>
                <select class="form-control" id="count_sons" name="count_sons" tabindex="-1" aria-hidden="true" >
                    <option value="" selected>Elige</option>
                    @for($i=0; $i<11; $i++)
                        <option value="{{$i}}" > {{ $i }} </option>
                    @endfor
                </select>
            </div>
        </div>
        <div class="row bg-dark">
            <div class="form-group col-md-6">
                <label for="religiouscompliancelevel">Cual es tu nivel de cumplimiento religioso?</label>
                <select class="form-control" id="religiouscompliancelevel" name="religiouscompliancelevel" tabindex="-1" aria-hidden="true" >
                    <option value="" selected>Elige</option>
                    @foreach($religiouscompliancelevels as $religiouscompliancelevel)
                        <option value="{{$religiouscompliancelevel->id}}" {{ old('religiouscompliancelevel') == $religiouscompliancelevel->id ? 'selected' : '' }} > {{ $religiouscompliancelevel->religious_compliance_lvl }} </option>
                    @endforeach
                </select>  </div>
            <div class="form-group col-md-6">
                <label for="accepted_level"> Que nivel seria aceptado por vos? (Puedes Elegir varios)</label>
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
        </div>
        <div class="row bg-dark">
            <div class="form-group col-md-6">
                <label for="reference_one"> Referencia 1 </label>
                <input type="text" name="reference_one" id="reference_one" class="form-control" placeholder="Tu respuesta" value="{{old('reference_one')}}">
            </div>
            <div class="form-group col-md-6">
                <label for="reference_two">Referencia 2</label>
                <input type="text" name="reference_two" id="reference_two" class="form-control" placeholder="Tu respuesta" value="{{old('reference_two')}}">
            </div>
        </div>
        <div class="row bg-dark">
            <div class="form-group col-md-6">
                <label for="community_assists"> A que comunidad asistís?</label>
                <input type="text" name="community_assists" id="community_assists" class="form-control" placeholder="Tu respuesta" value="{{old('community_assists')}}">
            </div>
            <div class="form-group col-md-6">
                <label for="module">Que Rabanim te conocen?</label>
                <input type="text" name="rabanim_know" id="rabanim_know" class="form-control" placeholder="Tu respuesta" value="{{old('rabanim_know')}}">
            </div>
        </div>
        <div class="row bg-dark">
            <div class="form-group col-md-6">
                <label for="community_assists"> A que comunidad asistís?</label>
                <input type="text" name="community_assists" id="community_assists" class="form-control" placeholder="Tu respuesta" value="{{old('community_assists')}}">
            </div>
            <div class="form-group col-md-6">
                <label for="module">Que Rabanim te conocen?</label>
                <input type="text" name="rabanim_know" id="rabanim_know" class="form-control" placeholder="Tu respuesta" value="{{old('rabanim_know')}}">
            </div>
        </div>
        <div class="row bg-dark">
            <div class="form-group col-md-6">
                <label for="community_assists"> A que comunidad asistís?</label>
                <input type="text" name="community_assists" id="community_assists" class="form-control" placeholder="Tu respuesta" value="{{old('community_assists')}}">
            </div>
            <div class="form-group col-md-6">
                <label for="module">Que Rabanim te conocen?</label>
                <input type="text" name="rabanim_know" id="rabanim_know" class="form-control" placeholder="Tu respuesta" value="{{old('rabanim_know')}}">
            </div>
        </div>
        <div class="row bg-dark">
            <div class="form-group col-md-6">
                <label for="studies">Estudios seculares y judíos (Puedes elegir varios)</label>
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
            <div class="form-group col-md-6">
                <label for="languages">Que idiomas hablas?</label>
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
        </div>
        <div class="row bg-dark">
            <div class="form-group col-md-6">
                <label for="name_school"> Nombre del Colegio Primario</label>
                <input type="text" id="name_school" class="form-control" name="name_school"  placeholder="Tu respuesta" value="{{old('name_school')}}">
            </div>
            <div class="form-group col-md-6">
                <label for="name_secondary_school">Nombre del Colegio Secundario</label>
                <input type="text" id="name_secondary_school" class="form-control" name="name_secondary_school"  placeholder="Tu respuesta" value="{{old('name_secondary_school')}}">
            </div>
        </div>
        <div class="row bg-dark">
            <div class="form-group col-md-6">
                <label for="smoke">Fumas?</label>
                <select class="form-control" id="smoke" name="smoke" tabindex="-1" aria-hidden="true" required>
                    <option value="" selected>Elige</option>
                    @foreach($smokers as $smoker)
                        <option value="{{$smoker->id}}" {{ old('smoke') == $smoker->id ? 'selected' : '' }} > {{ $smoker->smokers_title }} </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="sons">Hijos</label>
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
        </div>
        <div class="row bg-dark">
            <div class="form-group col-md-6">
                <label for="location">En que Localidad Vivis Actualmente??</label>
                <select class="form-control" id="location" name="location" tabindex="-1" aria-hidden="true" required>
                    <option value="" selected>Elige</option>
                    @foreach($localities as $location)
                        @if($location->id <= 13)
                            <option value="{{$location->id}}" {{ old('location') == $location->id ? 'selected' : '' }} > {{ $location->localities_title }} </option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="qualities">Que cualidad consideras que tienes tu? puedes elegir una, varias o ninguna.</label>
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
        <div class="row bg-dark">
            <div class="form-group col-md-6">
                <label for="name_school"> Nombre del Colegio Primario</label>
                <input type="text" id="name_school" class="form-control" name="name_school"  placeholder="Tu respuesta" value="{{old('name_school')}}">
            </div>
            <div class="form-group col-md-6">
                <label for="name_secondary_school">Nombre del Colegio Secundario</label>
                <input type="text" id="name_secondary_school" class="form-control" name="name_secondary_school"  placeholder="Tu respuesta" value="{{old('name_secondary_school')}}">
            </div>
        </div>
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


    <div class="row col-md-12">
        <div class="col-md-6">
            <div class="form-navigation">
                <button type="button" class="previous btn float-left"> Cancelar</button>
                <button type="submit" class="send btn float-left"> Guardar</button>
            </div>
        </div>
    </div>



    {{--    `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,--}}
{{--    `second_lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,--}}
{{--    `gender_id` int(10) unsigned NOT NULL,--}}
{{--    `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,--}}
{{--    `maritalstatus_id` int(10) unsigned NOT NULL,--}}
{{--    `profession` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,--}}
{{--    `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,--}}
{{--    `main_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,--}}
{{--    `count_sons` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,--}}
{{--    `religiouscompliancelevel_id` int(10) unsigned NOT NULL,--}}
{{--    `reference_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,--}}
{{--    `reference_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,--}}
{{--    `community_assists` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,--}}
{{--    `rabanim_know` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,--}}
{{--    `name_school` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,--}}
{{--    `name_secondary_school` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,--}}
{{--    `smoker_id` int(10) unsigned NOT NULL,--}}
{{--    `son_id` int(10) unsigned NOT NULL,--}}
{{--    `location_id` int(10) unsigned NOT NULL,--}}
{{--    `coupleson_id` int(10) unsigned NOT NULL,--}}
{{--    `years_range_from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,--}}
{{--    `years_range_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,--}}
{{--    `find_partner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,--}}
{{--    `familypuritylaw_id` int(10) unsigned NOT NULL,--}}
{{--    `about_u` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,--}}
{{--    `about_u_partner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,--}}
{{--    `is_check` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',--}}
{{--    `deleted_at` timestamp NULL DEFAULT NULL,--}}
{{--    `created_at` timestamp NULL DEFAULT NULL,--}}
{{--    `updated_at` timestamp NULL DEFAULT NULL,--}}


</form>
