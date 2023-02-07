@extends('layouts.main-layout')

@section('content')
    
    <h1>New person</h1>
    <form method="POST" action="{{ route('person.store') }}">
        @csrf
        <label for="first_name">First name:</label>
        <input type="text" name="first_name">
        <br>
        <label for="last_name">Last name:</label>
        <input type="text" name="last_name">
        <br>
        <label for="date_of_birth">Born in:</label>
        <input type="date" name="date_of_birth" >
        <br>
        <label for="height">Height:</label>
        <input type="number" name="height">

        <input type="submit" value="NEW">
    </form>

@endsection