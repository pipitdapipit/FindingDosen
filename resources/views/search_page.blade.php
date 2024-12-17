@extends('layout.layout')

@section('title', 'FindingDosen')

@section('content')


<div class="container mt-5">
    <form method="GET" class="d-flex" role="search" action="/search-page">
        @csrf
        <input name="search" id="search" class="form-control me-1" type="search" placeholder="Search Lecturer..." aria-label="Search">

        <select name="option" id="option" class="form-select ms-2 me-3" aria-label="Default select example">
            <option value="All" selected>All Course</option>
            <option value="Compilation Techniques">Compilation Techniques</option>
            <option value="Data Mining">Data Mining</option>
            <option value="Entrepreneurship: Market Validation">Entrepreneurship: Market Validation</option>
            <option value="Geographical Information System">Geographical Information System</option>
            <option value="Operating System">Operating System</option>
            <option value="Web Programming">Web Programming</option>
        </select>
        <button class="btn btn-outline-success" type="submit">Find</button>
    </form>
    <hr>

    @if ($dosens)
        <div class="container text-center">
            <div class="row row-cols-2 row-cols-lg-4 g-5 g-lg-5">
                @foreach ($dosens as $dosen)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="https://via.placeholder.com/85x50" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-center">{{ $dosen->name }}</h5>
                            <p class="card-text d-flex justify-content-center">{{ $dosen->course }}, {{ $dosen->course }}, {{ $dosen->course }}</p>
                            <a href="/search-page/{{ $dosen->id }}" class="btn btn-primary d-flex justify-content-center">View Lecture</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    @else
        <p>No Data</p>
    @endif


</div>

@endsection

<form method="GET" class="d-flex" role="search" action="/">
    @csrf
    <select name="pilih" id="pilih" class="form-select-sm" aria-label="Default select example">
        <option value="All" selected>Course</option>
        <option value="Computer Science">Compute Science</option>
        <option value="Accounting">Accounting</option>
        <option value="Entrepreneur">Entrepreneur</option>
        <option value="Business">Business</option>
        <option value="Mechanical Engineering">Mechanical Engineering</option>
        <option value="Pharmacy">Pharmacy</option>
    </select>
    <button class="btn btn-outline-success" type="submit">Find</button>
</form>
