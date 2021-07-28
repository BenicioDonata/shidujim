<div class="form-section step7">
    <div class="row bg-dark">
        <div class="form-group col-md-6">
            <label for="about_u"><i class="far fa-check-circle"></i> Comentarios </label>
            @foreach($form['form']['comments'] as $comment)
                <div class="form-group col-md-12">
                    <label><b>{{$comment->user->name}} comento el {{$comment->created_at}}</b></label><br/>
                    <label>{{$comment->comment}}</label>
                </div>
            @endforeach
        </div>
    </div>

</div>
