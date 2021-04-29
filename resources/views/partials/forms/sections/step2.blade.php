<div class="form-section step2">
    <div class="card card-step2">
        <div class="card-header">
            <span></span>
        </div>
        <div class="card-body">
            <p></p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="form-group col-md-6">
                 <label for="name"><h6 class="asterics">*</h6> Nombre</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Tu respuesta" value="{{old('name')}}">
            </div>
            <h6>* Obligatorio</h6>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="form-group col-md-6">
                <label for="name_hebreo"><h6 class="asterics">*</h6> Nombre en Hebreo</label>
                <input type="text" name="name_hebrew" id="name_hebrew" class="form-control" placeholder="Tu respuesta" value="{{old('name_hebreo')}}">
            </div>
            <h6>* Obligatorio</h6>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="form-group col-md-6">
                 <label for="lastname"><h6 class="asterics">*</h6> Apellido Paterno</label>
                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Tu respuesta" value="{{old('lastname')}}">
            </div>
            <h6>* Obligatorio</h6>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="form-group col-md-6">
                 <label for="second_lastname"><h6 class="asterics">*</h6> Apellido Materno</label>
                 <input type="text" name="second_lastname" id="second_lastname" class="form-control" placeholder="Tu respuesta" value="{{old('second_lastname')}}">
            </div>
            <h6>* Obligatorio</h6>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="form-group col-md-6">
                 <label for="date_of_birth"><h6 class="asterics">*</h6> Fecha de Nacimiento</label>
                <input type="text" id="date_of_birth" class="form-control" name="date_of_birth"  placeholder="Tu respuesta" value="{{old('date_of_birth')}}">
            </div>
            <h6>* Obligatorio</h6>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="form-group col-md-6">
                 <label for="profession"><h6 class="asterics">*</h6> Profesión</label>
                <input type="text" id="profession" class="form-control" name="profession"  placeholder="Tu respuesta" value="{{old('profession')}}">
            </div>
            <h6>* Obligatorio</h6>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="form-group col-md-6">
                 <label for="email"><h6 class="asterics">*</h6> Tu email</label>
                 <input type="email" id="email" class="form-control" name="email"  placeholder="Tu respuesta" value="{{old('email')}}">
            </div>
            <h6>* Obligatorio</h6>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="form-group col-md-6">
                 <label for="main_phone"><h6 class="asterics">*</h6> Teléfono Celular (Pais + Ciudad + Numero)</label>
                 <input type="number" id="main_phone" class="form-control" name="main_phone" min="0"   placeholder="Tu respuesta" value="{{old('main_phone')}}">
            </div>
            <h6>* Obligatorio</h6>
        </div>
    </div>
    <div class="card ">
        <div class="card-body">
            <div class="form-group col-md-4">
                <label for="count_sons"><h6 class="asterics">*</h6> Tenes hijos, cuantos? </label>
                <select class="form-control" id="count_sons" name="count_sons" tabindex="-1" aria-hidden="true" >
                    <option value="" selected>Elige</option>
                    @for($i=0; $i<11; $i++)
                        <option value="{{$i}}" > {{ $i }} </option>
                    @endfor
                </select>
            </div>
            <h6>* Obligatorio</h6>
        </div>
    </div>
    <div class="card ">
        <div class="card-body">
            <div class="form-group col-md-6">
                 <label for="religiouscompliancelevel"><h6 class="asterics">*</h6> Cual es tu nivel de cumplimiento religioso?</label>
                <select class="form-control" id="religiouscompliancelevel" name="religiouscompliancelevel" tabindex="-1" aria-hidden="true" >
                    <option value="" selected>Elige</option>
                    @foreach($religiouscompliancelevels as $religiouscompliancelevel)
                        <option value="{{$religiouscompliancelevel->id}}" {{ old('religiouscompliancelevel') == $religiouscompliancelevel->id ? 'selected' : '' }} > {{ $religiouscompliancelevel->religious_compliance_lvl }} </option>
                    @endforeach
                </select>
            </div>
            <h6>* Obligatorio</h6>
        </div>
    </div>
</div>
