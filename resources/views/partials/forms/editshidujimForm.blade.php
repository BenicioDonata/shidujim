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
                <label for="gender">Género</label>
                <select class="form-control" id="gender" name="gender" tabindex="-1" aria-hidden="true" required>
                    <option value="" selected>Elige</option>
                    @foreach($genders as $gender)
                        <option value="{{$gender->id}}" {{ old('gender') == $gender->id ? 'selected' : '' }} > {{ $gender->genders_title }} </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="profession">    Profesión</label>
                <input type="text" id="profession" class="form-control" name="profession"  placeholder="Tu respuesta" value="{{old('profession')}}">
            </div>
        </div>
        <div class="row bg-dark">
            <div class="form-group col-md-6">
                <label for="email">Tu email</label>
                <input type="email" id="email" class="form-control" name="email"  placeholder="Tu respuesta" value="{{old('email')}}">
            </div>
            <div class="form-group col-md-6">
                <label for="main_phone">Teléfono Celular (Pais + Ciudad + Numero)</label>
                <input type="number" id="main_phone" class="form-control" name="main_phone" min="0"   placeholder="Tu respuesta" value="{{old('main_phone')}}">
            </div>
        </div>
        <div class="row bg-dark">
            <div class="form-group col-md-6">
                <label for="count_sons">Tenes hijos, cuantos? </label>
                <select class="form-control" id="count_sons" name="count_sons" tabindex="-1" aria-hidden="true" >
                    <option value="" selected>Elige</option>
                    @for($i=0; $i<11; $i++)
                        <option value="{{$i}}" > {{ $i }} </option>
                    @endfor
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="religiouscompliancelevel">Cual es tu nivel de cumplimiento religioso?</label>
                <select class="form-control" id="religiouscompliancelevel" name="religiouscompliancelevel" tabindex="-1" aria-hidden="true" >
                    <option value="" selected>Elige</option>
                    @foreach($religiouscompliancelevels as $religiouscompliancelevel)
                        <option value="{{$religiouscompliancelevel->id}}" {{ old('religiouscompliancelevel') == $religiouscompliancelevel->id ? 'selected' : '' }} > {{ $religiouscompliancelevel->religious_compliance_lvl }} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row bg-dark">
            <div class="form-group col-md-6">
                <label for="community_assists">A que comunidad asistís?</label>
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
                <label for="languages">¿Que idiomas hablas?</label>
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
                <label for="name_school">Nombre del Colegio Primario</label>
                <input type="text" id="name_school" class="form-control" name="name_school"  placeholder="Tu respuesta" value="{{old('name_school')}}">
            </div>
            <div class="form-group col-md-6">
                <label for="name_secondary_school">Nombre del Colegio Secundario</label>
                <input type="text" id="name_secondary_school" class="form-control" name="name_secondary_school"  placeholder="Tu respuesta" value="{{old('name_secondary_school')}}">
            </div>
        </div>
        <div class="row bg-dark">
            <div class="form-group col-md-6">
                <label for="smoke">¿Fumas?</label>
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
                <label for="location">¿En qué Localidad Vivis Actualmente?</label>
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
        <div class="row bg-dark">
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
        <div class="row bg-dark">
            <div class="form-group col-md-6">
                <label for="couple_sons">¿Aceptarías que ya tenga hijos anteriormente?</label>
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
        <div class="row bg-dark">
            <div class="form-group col-md-6">
                <label for="years_range">¿Qué rango de edad te gustaría que tenga?</label>
                <div class="input-group">
                    <input type="number" id="years_range_from"  min ="18" class="form-control col-md-2" name="years_range_from"  placeholder="Desde" value="{{old('years_range_from')}}">
                    <span class="col-md-1"></span>
                    <input type="number" id="years_range_to" min="18" class="form-control col-md-2" name="years_range_to"  placeholder="Hasta" value="{{old('years_range_to')}}">
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
        <div class="row bg-dark">
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
        <div class="row bg-dark">
            <div class="form-group col-md-6">
                <label for="upload_img">Sube al menos una foto tuya, la misma tiene que ser actual.</label>
                <br>
                <input id="input-id" type="file" name="files[]" accept="image/*"  multiple></div>
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
        <div class="row bg-dark">
            <div class="form-group col-md-6">
                <label for="about_u">Cuentanos algo más de ti</label>
                <input type="text" name="about_u" id="about_u" class="form-control" placeholder="Tu respuesta" value="{{old('about_u')}}">
            </div>
            <div class="form-group col-md-6">
                <label for="about_u_partner"> Cuentanos algo más de lo que esperas de tu pareja</label>
                <input type="text" name="about_u_partner" id="about_u_partner" class="form-control" placeholder="Tu respuesta" value="{{old('about_u_partner')}}">
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
