@extends('layouts.master')

@section('content')




        

<h1>Teachers Names</h1>
        <p class="lead">
                <ul>

                        @foreach ($teachers as $teacher)
                            
                        <li><a href="/teachers/{{$teacher->id }}" >{{$teacher->name}}</a></li>
                        
                        @endforeach
                        </ul>
        </p>
        <a class="btn btn-lg btn-primary" href="teachers/new" role="button">ADD New Teacher</a>


    

@endsection