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

                            <div class="table-responsive">
                                @if($forms->isNotEmpty())
                                    <table class="table table-bordered forms-action">
                                        <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Apellido Nombre</th>
                                            <th scope="col">Sexo</th>
                                            <th scope="col">Estado Civil</th>
                                            <th scope="col">Fecha de Nacimiento</th>
                                            <th scope="col">Celular</th>
                                            <th scope="col">Email</th>
                                            <th scope="col" class="c">Revisión</th>
                                            <th scope="col" class="text-center">Acción</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($forms as $form)
                                            <tr>
                                                <td>{{$form->lastname}} {{$form->name}}</td>
                                                <td>{{$form->gender->genders_title}}</td>
                                                <td>{{$form->maritalstatus->marital_statuses_title}}</td>
                                                <td>{{$form->date_of_birth}}</td>
                                                <td>{{$form->main_phone}}</td>
                                                <td>{{$form->email}}</td>
                                                <td>
                                                    <a type="button" data-toggle="tooltip" data-placement="top" data-id="{{$form->id}}" title="{{!$form->is_check ? 'Sin Revisión' : 'Revisado'}}" class="btn {{!$form->is_check ? 'fas fa-eye-slash btn-danger' : 'far fa-eye btn-success'}} btn-sm view-data"></a>
{{--                                                    <a type="button" data-toggle="tooltip" data-placement="top" data-id="{{$form->id}}" href="{{route('edit_form',$form->id)}}" title="Editar Formulario" class="far fa-edit btn btn-dark btn-sm edit-form"></a>--}}
                                                    <form  method="post" id="change-status-form-{{$form->id}}"  action="{{route('status_form',$form->id)}}">
                                                        {{csrf_field()}}
                                                        {{ method_field('PUT') }}
                                                    </form>
                                                </td>
                                                <td class="text-center" scope="row">
                                                    <a type="button" data-toggle="tooltip" data-placement="top" title="Fotos Subidas" data-file="{{$form->files}}" class="btn btn-info fas fa-images btn-sm view-files"></a>
{{--                                                    <a type="button" data-toggle="tooltip" data-placement="top" title="Matchear Usuarios" class="btn btn-dark fas fa-users btn-sm" href="{{route('dash_user')}}"></a>--}}
{{--                                                    <a type="button" data-toggle="tooltip" data-placement="top" title="Dejar Comentarios" class="btn btn-success fas fa-torah btn-sm" href="{{route('dash_user')}}"></a>--}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p>No hay formularios cargados para mostrar</p>
                            @endif

                            <a type="button" data-toggle="tooltip" data-placement="top" title="Descargar Registros" class="btn fas fa-file-download btn-success btn-sm btn-download"></a>
                            <form  method="post" id="downloadFile"  action="{{route('downloadMatchPersonForm')}}">
                                @csrf
                                <input id="collection" name="collection" hidden value="{{base64_encode(json_encode($forms))}}">
                            </form>
                            {!! $forms->render() !!}
                        </div>
                    </div>
                </div>
                @include('partials.modals.modal-image')
            </div>
        </div>
    </div>
@endsection




