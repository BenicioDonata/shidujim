@yield('editshidujimForm')
<form class="contact-form edit-form" method="post"  action="{{route('updateForm',$form)}}" enctype="multipart/form-data" >
    @csrf
    {{ method_field('PUT') }}

    <input type="hidden" name="idform" id="idform" value="{{$form['form']['id']}}">
    @include('partials.forms.sections_edit.step0')
    @include('partials.forms.sections_edit.step1')
    @include('partials.forms.sections_edit.step2')
    @include('partials.forms.sections_edit.step3')
    @include('partials.forms.sections_edit.step4')
    @include('partials.forms.sections_edit.step5')
    @include('partials.forms.sections_edit.step6')
    @include('partials.forms.sections_edit.step7')

    <div class="row col-md-12">
        <div class="col-md-12">
            <div class="form-navigation">
                <button type="button" class="previous btn float-left"> Atras</button>
                <button type="button" class="next btn float-left"> Siguiente</button>
                <button type="submit" class="send btn float-right"> Guardar</button>

            </div>
        </div>
    </div>
</form>
