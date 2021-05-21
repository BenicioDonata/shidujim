@yield('editshidujimForm')
<form class="contact-form edit-form"  method="post"  action="{{route('updateForm',$form)}}" enctype="multipart/form-data" >
    @csrf
    {{ method_field('PUT') }}

    <input type="hidden" name="idform" id="idform" value="{{$form['form']['id']}}">

    <div class="row bg-dark">
            <div class="form-group col-md-6">
                    <label for="name"><i class="far fa-check-circle"></i> Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Tu respuesta" value="{{$form['form']['name']}}">
            </div>
            <div class="form-group col-md-6">
                    <label for="name_hebreo"><i class="far fa-check-circle"></i> Nombre en Hebreo</label>
                    <input type="text" name="name_hebrew" id="name_hebrew" class="form-control" placeholder="Tu respuesta" value="{{$form['form']['name_hebrew']}}">
            </div>

            <div class="form-group col-md-6">
                <label for="lastname"><i class="far fa-check-circle"></i> Apellido Paterno</label>
                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Tu respuesta" value="{{$form['form']['lastname']}}">
            </div>
            <div class="form-group col-md-6">
                <label for="second_lastname"><i class="far fa-check-circle"></i> Apellido Materno</label>
                <input type="text" name="second_lastname" id="second_lastname" class="form-control" placeholder="Tu respuesta" value="{{$form['form']['second_lastname']}}">
            </div>
        </div>
        <div class="row bg-dark">
            <div class="form-group col-md-6">
                <label for="date_of_birth"><i class="far fa-check-circle"></i> Fecha de Nacimiento</label>
                <input type="text" id="date_of_birth" class="form-control" name="date_of_birth"  placeholder="Tu respuesta" value="{{$form['form']['date_of_birth']}}">

            </div>
            <div class="form-group col-md-6">
                <label for="civil_status"><i class="far fa-check-circle"></i> Estado Civil</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="civil_status" id="single" {{ ($form['form']['maritalstatus_id'] ==  1) ? 'checked' : '' }} value="1">
                    <label class="form-check-label" for="single">
                        Soltero
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="civil_status" id="divorced" {{ ($form['form']['maritalstatus_id']  ==  2) ? 'checked' : '' }} value="2" >
                    <label class="form-check-label" for="divorced">
                        Divorciado
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="civil_status" id="widower" {{ ($form['form']['maritalstatus_id']  ==  3) ? 'checked' : '' }} value="3" >
                    <label class="form-check-label" for="widower">
                        Viudo
                    </label>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="gender"><i class="far fa-check-circle"></i> Género</label>
                <select class="form-control" id="gender" name="gender" tabindex="-1" aria-hidden="true" required>
                    <option value="" selected>Elige</option>
                    @foreach($genders as $gender)
                        <option value="{{$gender->id}}" {{ $form['form']['gender_id'] == $gender->id ? 'selected' : '' }} > {{$gender->genders_title }} </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="profession"><i class="far fa-check-circle"></i> Profesión</label>
                <input type="text" id="profession" class="form-control" name="profession"  placeholder="Tu respuesta" value="{{$form['form']['profession']}}">
            </div>
        </div>
        <div class="row bg-dark">
            <div class="form-group col-md-6">
                <label for="email"><i class="far fa-check-circle"></i> Tu email</label>
                <input type="email" id="email" class="form-control" name="email"  placeholder="Tu respuesta" value="{{$form['form']['email']}}">
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
                <input type="text" name="community_assists" id="community_assists" class="form-control" placeholder="Tu respuesta" value="{{$form['form']['community_assists']}}">
            </div>
            <div class="form-group col-md-6">
                <label for="module"><i class="far fa-check-circle"></i> ¿Que Rabanim te conocen?</label>
                <input type="text" name="rabanim_know" id="rabanim_know" class="form-control" placeholder="Tu respuesta" value="{{$form['form']['rabanim_know']}}">
            </div>
            <div class="form-group col-md-6">
                <label for="studies"><i class="far fa-check-circle"></i> Estudios seculares y judíos (Puedes elegir varios)</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies[]" id="full_primary" {{ (in_array(1,$form['studies'])) ? 'checked' : '' }} value="1">
                    <label class="form-check-label" for="full_primary">
                        Primario Completo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies[]" id="complete_secondary" {{ (in_array(2,$form['studies'])) ? 'checked' : '' }} value="2">
                    <label class="form-check-label" for="complete_secondary">
                        Secundario Completo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies[]" id="full_college" {{ (in_array(3,$form['studies'])) ? 'checked' : '' }} value="3">
                    <label class="form-check-label" for="full_college">
                        Universitario Completo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies[]" id="postgraduate" {{ (in_array(4,$form['studies'])) ? 'checked' : '' }} value="4">
                    <label class="form-check-label" for="postgraduate">
                        Posgrado
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies[]" id="hebrew_elementary_school" {{ (in_array(5,$form['studies'])) ? 'checked' : '' }} value="5">
                    <label class="form-check-label" for="hebrew_elementary_school">
                        Escuela Primaria Hebrea
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies[]" id="shiurim_one_per_week" {{ (in_array(6,$form['studies'])) ? 'checked' : '' }} value="6">
                    <label class="form-check-label" for="shiurim_one_per_week">
                        Shiurim 1 por semana
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies[]" id="shiurim_two_per_week" {{ (in_array(7,$form['studies'])) ? 'checked' : '' }} value="7">
                    <label class="form-check-label" for="shiurim_two_per_week">
                        Shiurim 2 por Semana
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies[]" id="shiurim_more_two_per_week" {{ (in_array(8,$form['studies'])) ? 'checked' : '' }} value="8">
                    <label class="form-check-label" for="shiurim_more_two_per_week">
                        Shiurim mas de dos por semana
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies[]" id="ieshiva" {{ (in_array(9,$form['studies'])) ? 'checked' : '' }} value="9">
                    <label class="form-check-label" for="ieshiva">
                        Ieshiva/Seminario
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies[]" id="hebrew_high_school" {{ (in_array(10,$form['studies'])) ? 'checked' : '' }} value="10">
                    <label class="form-check-label" for="hebrew_high_school">
                        Secundaria Hebrea
                    </label>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="languages"><i class="far fa-check-circle"></i> ¿Que idiomas hablas?</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="languages[]" id="spanish" {{ (in_array(1,$form['languages'])) ? 'checked' : '' }} value="1">
                    <label class="form-check-label" for="spanish">
                        Español
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="languages[]" id="english" {{ (in_array(2,$form['languages'])) ? 'checked' : '' }} value="2">
                    <label class="form-check-label" for="english">
                        Ingles
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="languages[]" id="hebrew" {{ (in_array(3,$form['languages'])) ? 'checked' : '' }} value="3">
                    <label class="form-check-label" for="hebrew">
                        Hebreo
                    </label>
                </div>
            </div>
        </div>
        <div class="row bg-dark">
            <div class="form-group col-md-6">
                <label for="name_school"><i class="far fa-check-circle"></i> Nombre del Colegio Primario</label>
                <input type="text" id="name_school" class="form-control" name="name_school"  placeholder="Tu respuesta" value="{{$form['form']['name_school']}}">
            </div>
            <div class="form-group col-md-6">
                <label for="name_secondary_school"><i class="far fa-check-circle"></i> Nombre del Colegio Secundario</label>
                <input type="text" id="name_secondary_school" class="form-control" name="name_secondary_school"  placeholder="Tu respuesta" value="{{$form['form']['name_secondary_school']}}">
            </div>
            <div class="form-group col-md-6">
                <label for="smoke"><i class="far fa-check-circle"></i> ¿Fumas?</label>
                <select class="form-control" id="smoke" name="smoke" tabindex="-1" aria-hidden="true" required>
                    <option value="" selected>Elige</option>
                    @foreach($smokers as $smoker)
                        <option value="{{$smoker->id}}" {{$form['form']['smoker_id'] == $smoker->id ? 'selected' : '' }} > {{ $smoker->smokers_title }} </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="sons"><i class="far fa-check-circle"></i> Hijos</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sons" id="more_sons" {{ ($form['form']['son_id'] ==  1) ? 'checked' : '' }} value="1">
                    <label class="form-check-label" for="more_sons">
                        Ya tengo hijos y quiero más
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sons" id="no_more_sons" {{ ($form['form']['son_id'] ==  2) ? 'checked' : '' }} value="2">
                    <label class="form-check-label" for="no_more_sons">
                        Ya tengo hijos y no quiero más
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sons" id="want_sons" {{ ($form['form']['son_id'] ==  3) ? 'checked' : '' }} value="3">
                    <label class="form-check-label" for="want_sons">
                        Si quiero tener hijos
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sons" id="dont_know" {{ ($form['form']['son_id'] ==  4) ? 'checked' : '' }} value="4">
                    <label class="form-check-label" for="dont_know">
                        No lo sé aun
                    </label>
                </div>
            </div>
        </div>
        <div class="row bg-dark">
            <div class="form-group col-md-6">
                <label for="location"><i class="far fa-check-circle"></i> ¿En qué Localidad Vivis Actualmente?</label>
                <select class="form-control" id="location" name="location" tabindex="-1" aria-hidden="true" required>
                    <option value="" selected>Elige</option>
                    @foreach($localities as $location)
                        @if($location->id <= 13)
                            <option value="{{$location->id}}" {{ $form['form']['location_id'] == $location->id ? 'selected' : '' }} > {{ $location->localities_title }} </option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="qualities"><i class="far fa-check-circle"></i> ¿Qué cualidad consideras que tienes tu? puedes elegir una, varias o ninguna.</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities[]" id="sympathetic" {{ (in_array(1,$form['quality'])) ? 'checked' : '' }} value="1">
                    <label class="form-check-label" for="sympathetic">
                        Simpático/a
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities[]" id="professional" {{ (in_array(2,$form['quality'])) ? 'checked' : '' }} value="2">
                    <label class="form-check-label" for="professional">
                        Profesional
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities[]" id="worship" {{ (in_array(3,$form['quality'])) ? 'checked' : '' }} value="3">
                    <label class="form-check-label" for="worship">
                        Culto
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities[]" id="good_mood" {{ (in_array(4,$form['quality'])) ? 'checked' : '' }} value="4">
                    <label class="form-check-label" for="good_mood">
                        Buen Humor
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities[]" id="organized" {{ (in_array(5,$form['quality'])) ? 'checked' : '' }} value="5">
                    <label class="form-check-label" for="organized">
                        Ordenada/o
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities[]" id="family_member" {{ (in_array(6,$form['quality'])) ? 'checked' : '' }} value="6">
                    <label class="form-check-label" for="family_member">
                        Familiero
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities[]" id="affectionate" {{ (in_array(7,$form['quality'])) ? 'checked' : '' }} value="7">
                    <label class="form-check-label" for="affectionate">
                        Cariñoso/a
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities[]" id="irat_shamaim" {{ (in_array(8,$form['quality'])) ? 'checked' : '' }} value="8">
                    <label class="form-check-label" for="irat_shamaim">
                        Irat Shamaim
                    </label>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="accepted_level"><i class="far fa-check-circle"></i> ¿Qué nivel seria aceptado por vos? (Puedes Elegir varios)</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="accepted_level[]" id="kasher_only_house" {{ (in_array(1,$form['acceptancelevel'])) ? 'checked' : '' }} value="1">
                    <label class="form-check-label" for="kasher_only_house">
                        Kasher solo en Casa
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="accepted_level[]" id="forever_kasher" {{ (in_array(2,$form['acceptancelevel'])) ? 'checked' : '' }} value="2">
                    <label class="form-check-label" for="forever_kasher">
                        Siempre Kasher
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="accepted_level[]" id="kasher_shabat" {{ (in_array(3,$form['acceptancelevel'])) ? 'checked' : '' }} value="3">
                    <label class="form-check-label" for="kasher_shabat">
                        Kasher siempre + Shabat
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="accepted_level[]" id="abrej" {{ (in_array(4,$form['acceptancelevel'])) ? 'checked' : '' }} value="4">
                    <label class="form-check-label" for="abrej">
                        Abrej (que estudie todo el dia)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="accepted_level[]" id="tora" {{ (in_array(5,$form['acceptancelevel'])) ? 'checked' : '' }} value="5">
                    <label class="form-check-label" for="tora">
                        Que estudie Tora medio dÍa y trabaje
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="accepted_level[]" id="kasher_shabat_study" {{ (in_array(6,$form['acceptancelevel'])) ? 'checked' : '' }} value="6">
                    <label class="form-check-label" for="kasher_shabat_study">
                        Kasher siempre + Shabat + un minimo de estudio semanal
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="accepted_level[]" id="hebrew" {{ (in_array(7,$form['acceptancelevel'])) ? 'checked' : '' }} value="7">
                    <label class="form-check-label" for="hebrew">
                        Que sepa hebreo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="accepted_level[]" id="wherever" {{ (in_array(8,$form['acceptancelevel'])) ? 'checked' : '' }} value="8">
                    <label class="form-check-label" for="wherever">
                        Me da lo mismo cumpla o no
                    </label>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="civil_status_seeker"><i class="far fa-check-circle"></i> Estado Civil Que Buscas (Puedes elegir varios)</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="civil_status_seeker[]" id="single_seeker" {{ (in_array(1,$form['maritalstatuses'])) ? 'checked' : '' }} value="1">
                    <label class="form-check-label" for="single_seeker">
                        Soltero/a
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="civil_status_seeker[]" id="divorced_seeker" {{ (in_array(2,$form['maritalstatuses']) ) ? 'checked' : '' }} value="2">
                    <label class="form-check-label" for="divorced_seeker">
                        Divorciado/a
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="civil_status_seeker[]" id="widower_seeker" {{ (in_array(3,$form['maritalstatuses'])) ? 'checked' : '' }} value="3">
                    <label class="form-check-label" for="widower_seeker">
                        Viudo/a
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="civil_status_seeker[]" id="wherever_seeker" {{ (in_array(4,$form['maritalstatuses'])) ? 'checked' : '' }} value="4">
                    <label class="form-check-label" for="wherever_seeker">
                        Me da igual
                    </label>
                </div>
            </div>
        </div>
        <div class="row bg-dark">
            <div class="form-group col-md-6">
                <label for="couple_sons"><i class="far fa-check-circle"></i> ¿Aceptarías una pareja con hijos?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="couple_sons" id="couple_sons_yes" {{ ($form['form']['coupleson_id'] ==  1) ? 'checked' : '' }} value="1">
                    <label class="form-check-label" for="couple_sons_yes">
                        Si
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="couple_sons" id="couple_sons_no" {{ ($form['form']['coupleson_id'] ==  2) ? 'checked' : '' }} value="2">
                    <label class="form-check-label" for="couple_sons_no">
                        No
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="couple_sons" id="couple_sons_maybe" {{ ($form['form']['coupleson_id'] ==  3) ? 'checked' : '' }} value="3">
                    <label class="form-check-label" for="couple_sons_maybe">
                        Tal vez
                    </label>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="studies_lvl_seek"><i class="far fa-check-circle"></i> ¿Qué nivel de estudios te gustaría que tenga?</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies_lvl_seek[]" id="full_primary_seek" {{ (in_array(1,$form['studiesseeks'])) ? 'checked' : '' }} value="1">
                    <label class="form-check-label" for="full_primary_seek">
                        Primario Completo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies_lvl_seek[]" id="complete_secondary_seek" {{ (in_array(2,$form['studiesseeks'])) ? 'checked' : '' }} value="2">
                    <label class="form-check-label" for="complete_secondary_seek">
                        Secundario Completo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies_lvl_seek[]" id="full_college_seek" {{ (in_array(3,$form['studiesseeks'])) ? 'checked' : '' }} value="3">
                    <label class="form-check-label" for="full_college_seek">
                        Universitario Completo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies_lvl_seek[]" id="postgraduate_seek" {{ (in_array(4,$form['studiesseeks'])) ? 'checked' : '' }} value="4">
                    <label class="form-check-label" for="postgraduate_seek">
                        Posgrado
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies_lvl_seek[]" id="hebrew_elementary_school_seek" {{ (in_array(5,$form['studiesseeks'])) ? 'checked' : '' }} value="5">
                    <label class="form-check-label" for="hebrew_elementary_school_seek">
                        Escuela Primaria Hebrea
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies_lvl_seek[]" id="shiurim_one_per_week_seek" {{ (in_array(6,$form['studiesseeks'])) ? 'checked' : '' }} value="6">
                    <label class="form-check-label" for="shiurim_one_per_week_seek">
                        Shiurim 1 por semana
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="studies_lvl_seek[]" id="hebrew_high_school_seek" {{ (in_array(7,$form['studiesseeks'])) ? 'checked' : '' }} value="7">
                    <label class="form-check-label" for="hebrew_high_school_seek">
                        Secundaria Hebrea
                    </label>
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
                    <label class="form-check-label" for="live_future_bs">
                        Buenos Aires
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_cp" {{ (in_array(3,$form['locations'])) ? 'checked' : '' }} value="3">
                    <label class="form-check-label" for="live_future_cp">
                        Ciudad de Panamá
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_df" {{ (in_array(14,$form['locations'])) ? 'checked' : '' }} value="14">
                    <label class="form-check-label" for="live_future_df">
                        Distrito Federal
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_c" {{ (in_array(4,$form['locations'])) ? 'checked' : '' }} value="4">
                    <label class="form-check-label" for="live_future_c">
                        Chile
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_u" {{ (in_array(5,$form['locations'])) ? 'checked' : '' }} value="5">
                    <label class="form-check-label" for="live_future_u">
                        Uruguay
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_ca" {{ (in_array(6,$form['locations'])) ? 'checked' : '' }} value="6">
                    <label class="form-check-label" for="live_future_cas">
                        Caracas
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_i" {{ (in_array(8,$form['locations'])) ? 'checked' : '' }} value="8">
                    <label class="form-check-label" for="live_future_i">
                        Israel
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_m" {{ (in_array(15,$form['locations'])) ? 'checked' : '' }} value="15">
                    <label class="form-check-label" for="live_future_m">
                        Miami
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_ny" {{ (in_array(16,$form['locations'])) ? 'checked' : '' }} value="16">
                    <label class="form-check-label" for="live_future_ny">
                        New York
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_la" {{ (in_array(17,$form['locations'])) ? 'checked' : '' }} value="17">
                    <label class="form-check-label" for="live_future_la">
                        Los Angeles
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_cor" {{ (in_array(9,$form['locations'])) ? 'checked' : '' }} value="9">
                    <label class="form-check-label" for="live_future_cor">
                        Córdoba
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_t" {{ (in_array(10,$form['locations'])) ? 'checked' : '' }} value="10">
                    <label class="form-check-label" for="live_future_t">
                        Tucumán
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_ro" {{ (in_array(11,$form['locations'])) ? 'checked' : '' }} value="11">
                    <label class="form-check-label" for="live_future_ro">
                        Rosario
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="live_future[]" id="live_future_wherever" {{ (in_array(18,$form['locations'])) ? 'checked' : '' }} value="18">
                    <label class="form-check-label" for="live_future_wherever">
                        Me da lo mismo
                    </label>
                </div>
            </div>
        </div>
        <div class="row bg-dark">
            <div class="form-group col-md-6">
                <label for="qualities_seek"><i class="far fa-check-circle"></i> ¿Qué cualidades te gustaría que tenga? Puedes elegir una, varias o ninguna.</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities_seek[]" id="sympathetic_seek" {{ (in_array(1,$form['qualityseeks'])) ? 'checked' : '' }} value="1">
                    <label class="form-check-label" for="sympathetic_seek">
                        Simpático/a
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities_seek[]" id="professional_seek" {{ (in_array(2,$form['qualityseeks'])) ? 'checked' : '' }} value="2">
                    <label class="form-check-label" for="professional_seek">
                        Profesional
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities_seek[]" id="worship_seek" {{ (in_array(3,$form['qualityseeks'])) ? 'checked' : '' }} value="3">
                    <label class="form-check-label" for="worship_seek">
                        Culto
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities_seek[]" id="good_mood_seek" {{ (in_array(4,$form['qualityseeks'])) ? 'checked' : '' }} value="4">
                    <label class="form-check-label" for="good_mood_seek">
                        Buen Humor
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities_seek[]" id="organized_seek" {{ (in_array(5,$form['qualityseeks'])) ? 'checked' : '' }} value="5">
                    <label class="form-check-label" for="organized_seek">
                        Ordenada/o
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities_seek[]" id="family_member_seek" {{ (in_array(6,$form['qualityseeks'])) ? 'checked' : '' }} value="6">
                    <label class="form-check-label" for="family_member_seek">
                        Familiero
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities_seek[]" id="affectionate_seek" {{ (in_array(7,$form['qualityseeks'])) ? 'checked' : '' }} value="7">
                    <label class="form-check-label" for="affectionate_seek">
                        Cariñoso/a
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities_seek[]" id="no_smoke_seek" {{ (in_array(9,$form['qualityseeks'])) ? 'checked' : '' }} value="9">
                    <label class="form-check-label" for="no_smoke_seek">
                        Que no fume
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="qualities_seek[]" id="irat_shamaim_seek" {{ (in_array(8,$form['qualityseeks'])) ? 'checked' : '' }} value="8">
                    <label class="form-check-label" for="irat_shamaim_seek">
                        Irat Shamaim
                    </label>
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
                    <label class="form-check-label" for="family_purity_laws_yes">
                        Si
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="family_purity_laws" id="family_purity_laws_no" {{ ($form['form']['familypuritylaw_id'] ==  2) ? 'checked' : '' }} value="2" >
                    <label class="form-check-label" for="family_purity_laws_no">
                        No
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="family_purity_laws" id="family_purity_laws_maybe" {{ ($form['form']['familypuritylaw_id'] ==  3) ? 'checked' : '' }} value="3" >
                    <label class="form-check-label" for="family_purity_laws_maybe">
                        Tal vez
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="family_purity_laws" id="family_purity_laws_never" {{ ($form['form']['familypuritylaw_id'] ==  4) ? 'checked' : '' }} value="4" >
                    <label class="form-check-label" for="family_purity_laws_never">
                        Nunca
                    </label>
                </div>
            </div>
        </div>
        <div class="row bg-dark">
            <div class="form-group col-md-6">
                <label for="about_u"><i class="far fa-check-circle"></i> Cuentanos algo más de ti</label>
                <input type="text" name="about_u" id="about_u" class="form-control" placeholder="Tu respuesta" value="{{$form['form']['about_u']}}">
            </div>
            <div class="form-group col-md-6">
                <label for="about_u_partner"><i class="far fa-check-circle"></i> Cuentanos algo más de lo que esperas de tu pareja</label>
                <input type="text" name="about_u_partner" id="about_u_partner" class="form-control" placeholder="Tu respuesta" value="{{$form['form']['about_u_partner']}}">
            </div>
        </div>
        <div class="row col-md-12">
            <div class="col-md-6">
                <div class="form-navigation">
                    <a type="button" class="previous btn float-left" href="{{route('dash_user')}}">Cancelar</a>
                    <button type="submit" class="send btn float-left"> Guardar</button>
                </div>
            </div>
        </div>
    </form>
