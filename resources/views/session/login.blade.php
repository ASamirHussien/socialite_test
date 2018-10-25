@extends('layouts.master')

@section('content')
<form method="POST" action="/login">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{old('email')}}">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div> 
    <button type="submit" class="btn btn-primary">Login</button>
    @include('layouts.errors')
  </form>
@endsection