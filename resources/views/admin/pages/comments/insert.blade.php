@extends('admin.layout.master')
@section('content')
<form action="/admin/comment/insert" method="POST" class="form">
    {{ csrf_field() }}
    <div class="group-control">
        <label for="comment">Your comment :</label>
        <textarea type="text" name="comment" class="form-control" cols="30" rows="10">
        </textarea>
    </div>
    <input type="submit" value="Comment" class="btn btn-light">
</form> 
@endsection