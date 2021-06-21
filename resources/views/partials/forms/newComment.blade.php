@yield('newComment')
<form  method="post" id="saveComment"  action="{{route('saveComment')}}" >
    {{csrf_field()}}
    <div class="form-group">
        <div class="row">
            <div class="col-md-12">
                <input id="form-comment" name="form-comment" hidden>
                <label for="summary-ckeditor">Comentario</label>
                <textarea class="form-control" name="summary-ckeditor" id="summary-ckeditor" ></textarea>
                <span id="caracteres"></span>
            </div>
        </div>
    </div>
</form>
