@extends('layouts.app')

@section('content')

<ul>
    @foreach($names as $name)
<li><a href="/emp/{{$name->id}}">{{$name->name .' is ' . $name->notes}}</a></li>
    @endforeach
    </ul>


@endsection