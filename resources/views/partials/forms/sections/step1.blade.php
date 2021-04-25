<div class="form-section step1">
    <div class="card card-step1">
        <div class="card-header">
            <h5></h5>
        </div>
        <div class="card-body">
            <p></p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="form-group col-md-6">
                <label for="civil_status"><h6 class="asterics">*</h6> Estado Civil</label>
                <div class="single">
                    <label id="single" for="single">¿Eres Soltero?</label>
                    <label class="checkbox-inline" for="single_yes">
                        <input type="radio" name="civil_status" id="single_yes" {{ (old('single_yes') ===  1) ? 'checked' : '' }} value="1"> Si
                    </label>
                    <label class="checkbox-inline" for="single_no">
                        <input  type="radio" name="civil_status" id="single_no" value="0"> No
                    </label>
                </div>
                <div class="divorced">
                    <label id="divorced" for="divorced">¿Eres Divorciado?</label>
                    <label class="checkbox-inline" for="divorced_yes">
                        <input type="radio" name="civil_status" id="divorced_yes" {{ (old('divorced_yes') ===  1) ? 'checked' : '' }} value="2"> Si
                    </label>
                    <label class="checkbox-inline" for="divorced_no">
                        <input  type="radio" name="civil_status" id="divorced_no" value="0"> No
                    </label>
                </div>
                <div id="widower" class="widower">
                    <label for="widower">¿Eres Viudo?</label>
                    <label class="checkbox-inline" for="widower_yes">
                        <input type="radio" name="civil_status" id="widower_yes" {{ (old('widower_yes') ===  1) ? 'checked' : '' }} value="3"> Si
                    </label>
                    <label class="checkbox-inline" for="widower_no">
                        <input  type="radio" name="civil_status" id="widower_no" value="0"> No
                    </label>
                </div>
            </div>
            <h6>* Obligatorio</h6>
        </div>
    </div>
</div>
