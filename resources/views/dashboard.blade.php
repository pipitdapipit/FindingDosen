@extends('layout.layout')

@section('title', 'FindingDosen')

@section('content')

<div class="container-fluid banner" style="padding-top: 4%">
    <div class="container text-center">
        <h2 class="display-5">Welcome to <span style="color: #4CC9FE">FindingDosen</span></h2>
        <img src="img/dash_img.jpg" alt="" style="width: 100%; background-size: cover; gap">
        <a href="/search-page" style="text-decoration: none;">
            <div class="d-grid gap-2 mt-2">
                <button class="btn btn-outline-success btn-lg" type="button">Search</button>
            </div>
        </a>
    </div>
</div>

@endsection
