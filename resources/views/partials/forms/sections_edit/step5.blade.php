<div class="form-section step5">
    <div class="row bg-dark">
        <div class="form-group col-md-6">
            <label for="about_u"><i class="far fa-check-circle"></i> Cuentanos algo más de ti</label>
            <textarea type="text" name="about_u" id="about_u" class="form-control" placeholder="respuesta" maxlength="254" >{{$form['form']['about_u']}}"</textarea>
        </div>
        <div class="form-group col-md-6">
            <label for="about_u_partner"><i class="far fa-check-circle"></i> Cuentanos algo más de lo que esperas de tu pareja</label>
            <textarea type="text" name="about_u_partner" id="about_u_partner" class="form-control" placeholder="respuesta" maxlength="254" >{{$form['form']['about_u_partner']}}"</textarea>
        </div>
    </div>
    <div class="row bg-dark">
        <div class="form-group col-md-6">
            <label for="date_check"><i class="far fa-check-circle"></i> Fecha de Revisión</label>
            <input type="text" name="date_check" id="date_check" class="form-control" placeholder="fecha" disabled value="{{$form['form']['date_check']}}">
        </div>
        <div class="form-group col-md-6">
            <label for="date_blocked"><i class="far fa-check-circle"></i> Fecha de Bloqueo</label>
            <input type="text" name="date_blocked" id="date_blocked" class="form-control" placeholder="fecha" disabled value="{{$form['form']['date_blocked']}}">
        </div>
        <div class="form-group col-md-6">
            <label for="date_matched"><i class="far fa-check-circle"></i> Fecha de Matcheo de Pareja</label>
            <input type="text" name="date_matched" id="date_matched" class="form-control" placeholder="fecha" disabled value="{{$form['form']['date_matched']}}">
        </div>
        <div class="form-group col-md-6">
            <label for="date_couple"><i class="far fa-check-circle"></i> Fecha de Consolidación de Pareja</label>
            <input type="text" name="date_couple" id="date_couple" class="form-control" placeholder="fecha" disabled value="{{$form['form']['date_couple']}}">
        </div>
    </div>
</div>
