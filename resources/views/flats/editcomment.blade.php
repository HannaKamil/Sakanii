








<form action="/updateComment/{{$idd->flat_comment_id}}" method="post">
    {{csrf_field()}}
    <div class="form-group">
        {{--<label for="comment">comment</label>--}}
        <textarea name="form_comment"  id="comment" class="form-control text-right" placeholder=".. اضف تعليق" required>{{$idd->body}}</textarea>
    </div>

    <div class="form-group text-right">
        <button type="submit" class="btn btn-outline-primary font-weight-bold px-4">اضف تعليق</button>

    </div>
</form>