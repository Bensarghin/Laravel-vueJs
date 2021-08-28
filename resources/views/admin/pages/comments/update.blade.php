@extends('admin.layout.master')
@section('content')
<form action="/admin/comments/update={{$comment->id}}" method="POST" class="form">
    {{ csrf_field() }}
    <div class="form_group">
        <label for="comment">Your comment :</label>
        <textarea name="comment" class="form-control" cols="30" rows="10">
            {{$comment->content}}
        </textarea>
    </div>
    <input type="submit" value="Comment" class="btn btn-dark">
</form> 

@endsection
