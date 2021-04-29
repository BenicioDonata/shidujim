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
            <div class="form-group col-md-4">
                <label for="gender"><h6 class="asterics">*</h6> Género</label>
                <select class="form-control" id="gender" name="gender" tabindex="-1" aria-hidden="true" required>
                    <option value="" selected>Elige</option>
                    @foreach($genders as $gender)
                        <option value="{{$gender->id}}" {{ old('gender') == $gender->id ? 'selected' : '' }} > {{ $gender->genders_title }} </option>
                    @endforeach
                </select>
            </div>
            <h6>* Obligatorio</h6>
        </div>
    </div>
</div>
