@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Listado de Usuarios') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            @include('partials.filter')


                            <div class="table-responsive">
                            @if($users->isNotEmpty())
                                <table class="table table-bordered users-action">
                                    <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Tipo</th>
                                        <th scope="col " class="text-center">Acción</th>
                                        <th scope="col " class="text-center">Administrador</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                            <tr>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->userstatus->user_statuses_title}}</td>
                                                <td>{{$user->usertype->user_types_title}}</td>
                                                <td class="text-center actions" scope="row">
                                                        <div class="input-group">
                                                            <form  method="post"  action="{{route('status_user',$user->id)}}">
                                                                {{csrf_field()}}
                                                                {{ method_field('PUT') }}
                                                                <button type="submit" data-toggle="tooltip" data-placement="top" title="{{($user->userstatus->id == env('DESHABILITADO')) ? 'Activar Usuario' : 'Deshabilitar Usuario'}}" class=" {{($user->userstatus->id == env('DESHABILITADO')) ? 'fas fa-lock-open' : 'fas fa-lock'}}  btn btn-success btn-sm " ></button>
                                                            </form>
                                                            <form  method="post"  action="{{route('status_user_delete',$user->id)}}">
                                                                {{csrf_field()}}
                                                                {{method_field('delete')}}
                                                                <button type="submit" data-toggle="tooltip" data-placement="top" title="Eliminar usuario" class="fas fa-trash btn btn-danger btn-sm "></button>
                                                            </form>
                                                        </div>
                                                </td>
                                                <td class="text-center" scope="row">
                                                    <div class="input-group">
                                                        <form  method="post"  action="{{route('status_user_admin',$user->id)}}">
                                                            {{csrf_field()}}
                                                            {{ method_field('PUT') }}
                                                            <button type="submit" data-toggle="tooltip" data-placement="top" title="{{($user->usertype->id == env('USUARIO')) ? 'Activar como Admin' : 'Deshabilitar Admin'}}" class="{{($user->usertype->id == env('USUARIO')) ? 'fas fa-user-check' : 'fas fa-user-times'}} btn btn-success btn-sm "></button>
                                                        </form>
                                                        <form  method="post"  action="{{route('status_user_not_download',$user->id)}}">
                                                            {{csrf_field()}}
                                                            {{method_field('PUT')}}
                                                            <button type="submit" data-toggle="tooltip" data-placement="top" title="{{($user->block_download == env('NO_BLOCKED')) ? 'Bloquear Download File' : 'Activar Download File'}}" class="{{($user->block_download == env('NO_BLOCKED')) ? 'fas fa-file-download btn btn-primary' : 'fas fa-file-excel btn btn-danger'}}  btn-sm "></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            @else
                                <p>No hay usuarios para mostrar</p>
                            @endif
                        {!! $users->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
