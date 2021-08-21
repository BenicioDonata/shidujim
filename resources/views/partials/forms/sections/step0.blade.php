<div class="form-section step0">
    <div class="card card-step0">
        <div class="card-header">
            <span></span>
        </div>
        <div class="card-body">
            <p></p>
        </div>
    </div>
    <div class="card ">
        <div class="card-body">
            <div class="form-group col-md-12">
                <label for="gender"><h6 class="asterics">*</h6> Yo Soy...</label>
                <div class="row ">
                    <div class=" col-md-3  offset-md-3 img-div-center">
                            <img id="mujer" class="logo-mujer" alt="Logo mujer" src=" {{ asset('images/mujer.jpg') }}" width="130" height="130" />
                    </div>
{{--                        <div class="col-md-2"></div>--}}
                    <div class=" col-md-3 div-top img-div-center">
                        <img id="varon" class="logo-varon" alt="Logo varon" src=" {{ asset('images/varon.jpg') }}" width="130" height="130" />
                        <input type="hidden" id="gender" name="gender" value="{{old('gender')}}">
                    </div>
                </div>
            </div>
            <h6>* Obligatorio</h6>
        </div>
    </div>
</div>
