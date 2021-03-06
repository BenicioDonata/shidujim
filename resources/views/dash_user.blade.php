@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Formularios completados') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            @include('partials.filterForm')
                            @include('partials.matchForm')

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="col-md-2 q-verde">
                                        <div class="cuadrado-verde col-md-2"></div><p>En Pareja</p>
                                    </div>
                                     <div class="col-md-2 q-rojo ">
                                        <div class="cuadrado-rojo col-md-2"></div>
                                         <p>Bloqueado</p>
                                    </div>
                                    <div class="col-md-4 q-turquesa">
                                        <div class="cuadrado-turquesa col-md-2"></div>
                                        <p>Matcheados</p>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                @if($forms->isNotEmpty())
                                    <table class="table table-bordered forms-action">
                                        <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Apellido Nombre</th>
                                            <th scope="col">Sexo</th>
                                            <th scope="col">Estado Civil</th>
                                            <th scope="col">Fecha de Nacimiento</th>
                                            <th scope="col">Edad</th>
                                            <th scope="col">Celular</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Nivel Religioso</th>
                                            <th scope="col">Fuma</th>
                                            <th scope="col">Hijos</th>
                                            <th scope="col">Localidad Actual</th>
                                            <th scope="col">Acepta Hijos</th>
                                            <th scope="col">Ley de pureza</th>
                                            <th scope="col">Ultimo Comentario</th>
                                            <th scope="col">Fecha de Suscripci??n</th>
                                            <th scope="col" class="text-center">Acciones R??pidas</th>
                                            <th scope="col" class="text-center">Acci??n</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($forms as $form)
                                            <tr  bgcolor="{{!$form->is_blocked ? (!$form->is_matched ? (!$form->is_couple ? '#f8fafc' : '#20B12C'): '#33DAFF' ) : '#FF0000' }}">
                                                <td class="edit-form" data-id="{{$form->id}}" href="{{route('edit_form',$form->id)}}"> {{ucwords($form->lastname)}} {{ucwords($form->name)}}</td>
                                                <td class="edit-form" data-id="{{$form->id}}" href="{{route('edit_form',$form->id)}}">{{$form->gender->genders_title}}</td>
                                                <td class="edit-form" data-id="{{$form->id}}" href="{{route('edit_form',$form->id)}}">{{$form->maritalstatus->marital_statuses_title}}</td>
                                                <td class="edit-form" data-id="{{$form->id}}" href="{{route('edit_form',$form->id)}}">{{$form->date_of_birth}}</td>
                                                <td class="edit-form" data-id="{{$form->id}}" href="{{route('edit_form',$form->id)}}">{{$form->age}}</td>
                                                <td class="edit-form" data-id="{{$form->id}}" href="{{route('edit_form',$form->id)}}">{{$form->main_phone}}</td>
                                                <td class="edit-form" data-id="{{$form->id}}" href="{{route('edit_form',$form->id)}}">{{$form->email}}</td>
                                                <td class="edit-form" data-id="{{$form->id}}" href="{{route('edit_form',$form->id)}}">{{$form->religiouscompliancelevel->religious_compliance_lvl}}</td>
                                                <td class="edit-form" data-id="{{$form->id}}" href="{{route('edit_form',$form->id)}}">{{$form->smoker->smokers_title}}</td>
                                                <td class="edit-form" data-id="{{$form->id}}" href="{{route('edit_form',$form->id)}}">{{$form->son->sons_title}}</td>
                                                <td class="edit-form" data-id="{{$form->id}}" href="{{route('edit_form',$form->id)}}">{{$form->location->localities_title}}</td>
                                                <td class="edit-form" data-id="{{$form->id}}" href="{{route('edit_form',$form->id)}}">{{ $form->coupleson->couple_sons_title}}</td>
                                                <td class="edit-form" data-id="{{$form->id}}" href="{{route('edit_form',$form->id)}}">{{ $form->familypuritylaw->family_purity_laws_title}}</td>
                                                @php $form_comment = \App\Models\Comment::where('form_id','=',$form->id)->orderBy('id','DESC')->limit(1)->get(); @endphp
                                                <td class="edit-form" data-id="{{$form->id}}" href="{{route('edit_form',$form->id)}}">
                                                    @foreach($form_comment as $comment)
                                                          {{$comment->comment}}
                                                    @endforeach
                                                </td>
                                                <td class="edit-form" data-id="{{$form->id}}" href="{{route('edit_form',$form->id)}}">{{\Carbon\Carbon::parse(strtotime($form->created_at))->formatLocalized('%d %B %Y %H:%M:%S')}}</td>
                                                <td class="text-center" scope="row">
                                                    <a type="button" data-toggle="tooltip" data-placement="top" data-id="{{$form->id}}" title="{{!$form->is_check ? 'Sin Revisi??n' : 'Revisado'}}" class="btn {{!$form->is_check ? 'fas fa-eye-slash btn-danger' : 'far fa-eye btn-success'}} btn-sm view-data"></a>
                                                    <a type="button" data-toggle="tooltip" data-placement="top" data-id="{{$form->id}}" title="{{!$form->is_blocked ? 'Bloquear Postulante' : 'Desbloquear Postulante'}}" class="btn {{!$form->is_blocked ? 'fas fa-user-minus btn-danger' : 'fas fa-user-plus btn-warning'}} {{($form->is_matched || $form->is_couple) ? 'disabled' : ''}} btn-sm block-form-data"></a>
                                                    <a type="button" data-toggle="tooltip" data-placement="top" data-id="{{$form->id}}" title="{{!$form->is_matched ? 'Conociendo Pareja' : 'Volver a Buscar Pareja'}}" class="btn {{!$form->is_matched ? 'fas fa-user-friends btn-info' : 'fas fa-people-arrows btn-danger'}} {{($form->is_blocked || $form->is_couple) ? 'disabled' : ''}} btn-sm user-match-data"></a>
                                                    <a type="button" data-toggle="tooltip" data-placement="top" data-id="{{$form->id}}" title="{{!$form->is_couple ? 'En Pareja' : 'Sin Pareja'}}" class="btn {{!$form->is_couple ? 'far fa-heart btn-success' : 'fas fa-heart-broken btn-danger'}} {{($form->is_blocked || $form->is_matched ) ? 'disabled' : ''}} btn-sm user-couple-data"></a>
                                                    <form  method="post" id="change-status-form-{{$form->id}}"  action="{{route('status_form',$form->id)}}">
                                                        {{csrf_field()}}
                                                        {{ method_field('PUT') }}
                                                    </form>
                                                    <form  method="post" id="user-block-form-{{$form->id}}"  action="{{route('block_form',$form->id)}}">
                                                        {{csrf_field()}}
                                                        {{ method_field('PUT') }}
                                                    </form>
                                                    <form  method="post" id="user-match-form-{{$form->id}}"  action="{{route('user_match_form',$form->id)}}">
                                                        {{csrf_field()}}
                                                        {{ method_field('PUT') }}
                                                    </form>
                                                    <form  method="post" id="user-couple-form-{{$form->id}}"  action="{{route('user_couple_form',$form->id)}}">
                                                        {{csrf_field()}}
                                                        {{ method_field('PUT') }}
                                                    </form>
                                                </td>
                                                <td class="text-center" scope="row">
                                                    <a type="button" data-toggle="tooltip" data-placement="top" title="Ver Fotos Subidas" data-file="{{$form->files}}" class="btn btn-info fas fa-images btn-sm view-files"></a>
                                                    <a type="button" data-toggle="tooltip" data-placement="top" title="Ver Comentarios" class="btn btn-dark fas fa-eye btn-sm see-comments" data-id="{{$form->id}}"></a>
                                                    <a type="button" data-toggle="tooltip" data-placement="top" title="Agregar Comentario" class="btn btn-success fas fa-edit btn-sm add-comment" data-id="{{$form->id}}" data-tit="{{ucwords($form->lastname)}} {{ucwords($form->name)}}"></a>
                                                    <a type="button" data-toggle="tooltip" data-placement="top" data-id="{{$form->id}}" href="{{route('edit_form',$form->id)}}" title="Editar Formulario" class="fas fa-pencil-alt btn btn-dark btn-sm edit-form"></a>
                                                    <a type="button" data-toggle="tooltip" data-placement="top" data-id="{{$form->id}}" data-user="{{$form->lastname}} {{$form->name}}" title="Eliminar Formulario" class="btn btn-danger fas fa-trash-alt btn-sm deleteForm"></a>
                                                    <form  method="post" id="delete-form-{{$form->id}}"  action="{{route('delete_Form',$form->id)}}">
                                                        {{csrf_field()}}
                                                        {{ method_field('PUT') }}
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p>No hay formularios cargados para mostrar</p>
                            @endif
                        </div>
                            @if(Auth::user()->block_download == env('NO_BLOCKED'))
                                <a type="button" data-toggle="tooltip" data-placement="top" title="Descargar Registros" class="btn fas fa-file-download btn-success btn-sm btn-download"></a>
                                <form  method="post" id="downloadFile"  action="{{route('downloadMatchPersonForm')}}">
                                    {{csrf_field()}}
                                    <input id="collection" name="collection" hidden value="{{base64_encode(json_encode($forms))}}">
                                </form>
                            @else
                                <br>
                            @endif
                        {!! $forms->onEachSide(6)->render() !!}
                    </div>
                </div>
                @include('partials.modals.modal-image')
                @include('partials.modals.modal-comment')
                @include('partials.modals.modal-see-comment')
                @include('partials.modals.modal-delete-form')
            </div>
        </div>
    </div>
@endsection




