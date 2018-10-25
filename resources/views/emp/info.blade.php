@extends('layouts.app')

@section('content')

<ul>
    @foreach($names as $name)
<li>{{$name->name .' is ' . $name->notes}}</li>
    @endforeach
    </ul>


@endsection