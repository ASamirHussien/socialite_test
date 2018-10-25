@extends('layouts.master')

@section('content')

{{--
@if (Auth::check())
    {{Auth::user()->name}}
        
    @endif
--}}

@guest
    hello    
    guest
    

@endguest
@auth
    hello
    {{Auth::user()->name}}
    {{Auth::user()->id}}
    {{Auth::id()}}
@endauth
<form method="POST" action="/register">
    {{ csrf_field() }}
    <div class="form-group">
            <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter name" value="{{old('name')}}">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{old('email')}}">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div> 
    <div class="form-group">
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
    @include('layouts.errors')
  </form>
@endsection