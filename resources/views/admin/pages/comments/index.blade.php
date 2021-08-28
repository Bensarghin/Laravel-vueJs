@extends('admin.layout.master')
@section('content')
<h3>list of users comments on news.</h3>
<a href="/admin/comments/insert">to add comment +</a>
<table class="table table-dark table-striped table-bordered text-center">
    <tr>
        <td>ID</td>
        <td>Comment</td>
        <td></td>
        <td></td>
    </tr>
    @foreach ($comment as $uComment)
    <tr>
        <td>{{$uComment->id}}</td>
        <td>{{$uComment->content}}</td>
        <td><a href="/admin/comments/update={{$uComment->id}}" class="btn btn-light">edit</a></td>
        <td><a href="" class="btn btn-danger">delete</a></td>
    </tr> 
    @endforeach

</table> 
@endsection