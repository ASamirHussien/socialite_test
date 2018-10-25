@extends('layouts.master')

@section('content')
<h1>Posts</h1>


<div class="list-group">
      @foreach ($posts as $post)
          @include('posts.post_item')
      @endforeach 
</div>

    
@endsection