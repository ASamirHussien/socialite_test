@extends('layouts.master')

@section('content')
    

<form method="POST" action="/teachers">
    {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
          <label for="level">Level</label>
          <select class="form-control" id="level" name="level">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <div class="form-group">
          <label for="notes">Notes</label>
          <textarea class="form-control" id="notes" rows="3" name="notes"></textarea>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Add</button>
        </div>

        @include('layouts.errors')
      </form>


@endsection