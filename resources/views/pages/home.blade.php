@extends('layouts.main-layout')

@section('content')
    
    <h1>People</h1>
    <h5>
        <a href="{{ route('person.create')}}">
            Create new
        </a>
    </h5>
    <ul>
        @foreach ($people as $person)
            <li>
                <a href="{{ route('person.show', $person) }}">
                    {{ $person -> first_name }} - {{ $person -> last_name }} 
                </a>
                -
                <a href="{{ route('person.delete', $person) }}">X</a>
            </li>
        @endforeach
    </ul>

@endsection



