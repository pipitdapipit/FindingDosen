@extends('layout.layout')

@section('title', 'FindingDosen')

@section('content')

@if ($lecture)
    <div class="container mt-5 text-center">
        <img src="https://via.placeholder.com/300x300" class="rounded-circle mb-5" alt="...">
        <h3>Name: {{ $lecture->name }}</h3>
        <hr>
        <h3>Email: {{ $lecture->email }}</h3>
        <hr>
        <h3>Phone Number: {{ $lecture->phone_num }}</h3>
        <hr>
        <h3>Date Of Birth: {{ $lecture->DOB }}</h3>
        <hr>
        <h3>Course: {{ $lecture->course }}</h3>

    </div>
@else
    <p>No Data</p>
@endif

@endsection
