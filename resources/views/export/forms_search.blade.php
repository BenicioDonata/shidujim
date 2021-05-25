<table>
    <thead>
    <tr>
        <th># Formulario</th>
        <th>Nombre</th>
        <th>Nombre Hebreo</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Genero</th>
        <th>Fecha de Nacimiento</th>
        <th>Estado Civil</th>
        <th>Profesion</th>
        <th>Email</th>
        <th>Celular</th>
        <th>Cantidad de Hijos Que tiene</th>
        <th>Nivel de Cumplimiento Religioso</th>
        <th>Comunidad a la que asiste</th>
        <th>Rabanim que lo conoce</th>
        <th>Estudios seculares y judíos</th>
        <th>Idioma que habla</th>
        <th>Colegio rimario</th>
        <th>Colegio Secundario</th>
        <th>Fuma</th>
        <th>Hijos</th>
        <th>Localidad que Vive Actualmente</th>
        <th>Cualidades que tiene</th>
        <th>Nivel Aceptado</th>
        <th>Estado Civil que le gustaria que tenga</th>
        <th>Aceptarías que ya tenga hijos anteriormente</th>
        <th>Qué nivel de estudios te gustaría que tenga</th>
        <th>Rango de edad que le gustaria</th>
        <th>En dónde les gustaría vivir</th>
        <th>Qué cualidades te gustaría que tenga</th>
        <th>Cuántas ganas tienes de encontrar pareja</th>
        <th>fotos</th>
        <th>Estarías dispuesto/a a cumplir las leyes de pureza familiar judios</th>
        <th>Cuentanos algo más de ti</th>
        <th>Cuentanos algo más de lo que esperas de tu pareja</th>
        <th>Fecha de Suscripción</th>
    </tr>
    </thead>
    <tbody>

    @foreach($data as $form)

        <tr>
            <td>{{ $form->id}}</td>
            <td>{{ $form->name}}</td>
            <td>{{ $form->name_hebrew}}</td>
            <td>{{ $form->lastname}}</td>
            <td>{{ $form->second_lastname}}</td>
            <td>{{ $form->gender->genders_title}}</td>
            <td>{{ $form->date_of_birth}}</td>
            <td>{{ $form->maritalstatus->marital_statuses_title}}</td>
            <td>{{ $form->profession}}</td>
            <td>{{ $form->email}}</td>
            <td>{{ $form->main_phone}}</td>
            <td>{{ $form->count_sons}}</td>
            <td>{{ $form->religiouscompliancelevel->religious_compliance_lvl}}</td>
            <td>{{ $form->community_assists}}</td>
            <td>{{ $form->rabanim_know}}</td>
            @php $form_studies = \App\Models\FormStudy::where('form_id','=',$form->id)->get(); @endphp
            <td>@foreach($form_studies as $study)
                    @php $studies = \App\Models\Study::where('id','=',$study->study_id)->get(); @endphp
                    @foreach($studies as $data)
                        {{$data['studies_title']}} *
                    @endforeach
            @endforeach</td>
            @php $form_languages = \App\Models\FormLanguage::where('form_id','=',$form->id)->get(); @endphp
            <td>@foreach($form_languages as $language)
                    @php $languages = \App\Models\Language::where('id','=',$language->language_id)->get(); @endphp
                    @foreach($languages as $data)
                        {{$data['languages_title']}} *
                    @endforeach
                @endforeach</td>
            <td>{{ $form->name_school}}</td>
            <td>{{ $form->name_secondary_school}}</td>
            <td>{{ $form->smoker->smokers_title}}</td>
            <td>{{ $form->son->sons_title}}</td>
            <td>{{ $form->location->localities_title}}</td>
            @php $form_quality = \App\Models\FormQuality::where('form_id','=',$form->id)->get(); @endphp
            <td>@foreach($form_quality as $quality)
                    @php $qualities = \App\Models\Quality::where('id','=',$quality->quality_id)->get(); @endphp
                    @foreach($qualities as $data)
                        {{$data['qualities_title']}} *
                    @endforeach
                @endforeach</td>
            @php $form_acceptance_level = \App\Models\FormAcceptanceLevel::where('form_id','=',$form->id)->get(); @endphp
            <td>@foreach($form_acceptance_level as $acceptance_level)
                    @php $acceptances_level = \App\Models\AcceptanceLevel::where('id','=',$acceptance_level->acceptance_level_id)->get(); @endphp
                    @foreach($acceptances_level as $data)
                        {{$data['acceptance_levels_title']}} *
                    @endforeach
                @endforeach</td>
            @php $form_civil_status = \App\Models\FormCivilStatus::where('form_id','=',$form->id)->get(); @endphp
            <td>@foreach($form_civil_status as $civil_status)
                    @php $civils_status = \App\Models\MaritalStatus::where('id','=',$civil_status->marital_status_id)->get(); @endphp
                    @foreach($civils_status as $data)
                        {{$data['marital_statuses_title']}} *
                    @endforeach
                @endforeach</td>
            <td>{{ $form->coupleson->couple_sons_title}}</td>
            @php $form_studies_lvl = \App\Models\FormStudyLvlSeek::where('form_id','=',$form->id)->get(); @endphp
            <td>@foreach($form_studies_lvl as $study_lvl)
                    @php $studies_lvl = \App\Models\Study::where('id','=',$study_lvl->study_id)->get(); @endphp
                    @foreach($studies_lvl as $data)
                        {{$data['studies_title']}} *
                    @endforeach
                @endforeach</td>
            <td>Desde {{ $form->years_range_from}} Hasta {{ $form->years_range_to}}</td>
            @php $form_lives_future = \App\Models\FormLocality::where('form_id','=',$form->id)->get(); @endphp
            <td>@foreach($form_lives_future as $live_future)
                    @php $lives_future = \App\Models\Location::where('id','=',$live_future->location_id)->get(); @endphp
                    @foreach($lives_future as $data)
                        {{$data['localities_title']}} *
                    @endforeach
                @endforeach</td>

            @php $form_qualities_seek = \App\Models\FormQuality::where('form_id','=',$form->id)->get(); @endphp
            <td>@foreach($form_qualities_seek as $quality)
                    @php $qualities = \App\Models\Quality::where('id','=',$quality->quality_id)->get(); @endphp
                    @foreach($qualities as $data)
                        {{$data['qualities_title']}} *
                    @endforeach
                @endforeach</td>
            <td>{{ $form->find_partner}} puntos</td>
            @php $form_files= \App\Models\File::where('form_id','=',$form->id)->get(); @endphp
            @php $i = 0 @endphp
            <td width="25" height="100">@foreach($form_files as $file)
                @if($i < 1)
                    <img src="images/upload_forms/{{$file->files_name}}" alt="{{$file->files_name}}" width="100" height="100">
                    @php $i++ @endphp
                @endif
            @endforeach</td>
            <td>{{ $form->familypuritylaw->family_purity_laws_title}}</td>
            <td>{{ $form->about_u}}</td>
            <td>{{ $form->about_u_partner}}</td>
            <td>{{\Carbon\Carbon::parse(strtotime($form->created_at))->formatLocalized('%d %B %Y')}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
