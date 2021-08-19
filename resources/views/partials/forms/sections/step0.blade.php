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
            <div class="form-group col-md-8">
                <label for="gender"><h6 class="asterics">*</h6> Género</label>
                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                    <div class="flex justify-center pt-8">
                        <img class="logo-mujer" alt="Logo mujer" src=" {{ asset('images/mujer.jpg') }}" width="100" height="100" />
                        <img class="logo-varon" alt="Logo varon" src=" {{ asset('images/varon.jpg') }}" width="100" height="100" />
                        <input type="hidden" id="gender" name="gender" value="{{old('gender')}}">
                    </div>
                </div>

{{--                <select class="form-control" id="gender" name="gender" tabindex="-1" aria-hidden="true" required>--}}
{{--                    <option value="" selected>Elige</option>--}}
{{--                    @foreach($genders as $gender)--}}
{{--                        <option value="{{$gender->id}}" {{ old('gender') == $gender->id ? 'selected' : '' }} > {{ $gender->genders_title }} </option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
            </div>
            <h6>* Obligatorio</h6>
        </div>
    </div>
</div>
