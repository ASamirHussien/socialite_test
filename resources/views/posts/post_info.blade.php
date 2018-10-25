@extends('layouts.master')

@section('content')
    


<div class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">{{$post->title}}</h5>
      <small>{{$post->created_at?$post->created_at->diffForHumans():'---'}}</small>
    </div>
    <p class="mb-1">{{$post->body}}</p>
    <small>{{$post->auther_name}}</small>
</div>
<br/>
<h4>Comments</h4>
@foreach ($comments as $comment)
<div class="list-group-item list-group-item-action flex-column align-items-start">
        
        <p class="mb-1">{{$comment->body}}</p>
    <div class="d-flex w-100 justify-content-between">
          <small class="mb-1">{{$comment->auther_name}}</small>
          <small>{{$comment->created_at?$comment->created_at->diffForHumans():'---'}}</small>
        </div>
       
    </div>
@endforeach


<br/>


<form class="needs-validation" method="POST" action="/posts/{{$post->id}}/comment">
    {{ csrf_field() }}
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <div class="input-group">
          <input type="text" class="form-control" id="auther" name="auther" placeholder="Auther Name" required>
        </div>
      </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
          <div class="input-group">
            <textarea type="text" class="form-control" id="body" name="body" placeholder="Comment..." required></textarea>
          </div>
        </div>
      </div>
    <input class="btn btn-primary" type="submit" value="Add">
  </form>

@endsection