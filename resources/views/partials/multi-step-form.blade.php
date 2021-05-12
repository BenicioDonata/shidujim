
@extends('layouts.master')

@section('title','SHIDUJIM')

@section('content')
    <section>
        <div class="container col-md-8 container-multi-step">
                <div class=" img-header-form">
                    <img class="img-fluid" alt="Responsive image"  src="{{asset('images/header_img.jpeg')}}" >
                </div>
            <div class="row">
                <div class="col-md-12">
                    @include('partials.forms.shidujimForm')
                </div>
            </div>
        </div>

    </section>
@endsection
