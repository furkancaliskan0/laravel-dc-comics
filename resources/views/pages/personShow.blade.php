@extends('layouts.main-layout')

@section('content')
    
    <h1>First name: {{ $person -> first_name }}</h1>
    <h2>Last name: {{ $person -> last_name }}</h2>
    <h3>
        Born in: {{ $person -> date_of_birth }}
    </h3>
    <h4>
        Height: {{ $person -> height }} cm
    </h4>

@endsection