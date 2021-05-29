@yield('shidujimForm')
<form class="contact-form" id="shidujimform"  method="post"  action="{{route('upload')}}" enctype="multipart/form-data">
    @csrf

    @include('partials.forms.sections.step0')
    @include('partials.forms.sections.step1')
    @include('partials.forms.sections.step2')
    @include('partials.forms.sections.step4')
    @include('partials.forms.sections.step5')
    @include('partials.forms.sections.step6')
    @include('partials.forms.sections.step7')
    @include('partials.forms.sections.step8')

    <div class="row col-md-12">
        <div class="col-md-6">
            <div class="form-navigation">
                <button type="button" class="previous btn float-left"> Atras</button>
                <button type="button" class="next btn float-left"> Siguiente</button>
                <button type="submit" class="send btn float-left"> Enviar</button>
            </div>
        </div>
{{--        <div class="col-md-6 progress-div-bar">--}}
{{--            <div class="progress">--}}
{{--                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--            </div>--}}
{{--            <p></p>--}}
{{--        </div>--}}
    </div>

</form>
