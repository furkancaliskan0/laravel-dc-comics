@extends('layouts.main-layout')

@section('content')
    
    <h1>Edit already existent person</h1>

    <form method="POST" action="{{ route('person.update', $person) }}">
        @csrf

        <label for="first_name">First name:</label>
        <input type="text" name="first_name" value="{{ $person -> first_name }}">

        <label for="last_name">Last name:</label>
        <input type="text" name="last_name" value="{{ $person -> last_name }}">

        <label for="date_of_birth">Born in:</label>
        <input type="date" name="date_of_birth" value="{{ $person -> date_of_birth }}">

        <label for="height">Height in cm:</label>
        <input type="number" name="height" value="{{ $person -> height }}">

        <input type="submit" value="UPDATE">
    </form>

@endsection