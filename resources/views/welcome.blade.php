@extends('template')

@section('content')
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center">
            <div class="text-center">
                <h1 class="mx-auto my-0 text-uppercase">Welcome</h1>
                <h2 class="text-white-50 mx-auto mt-2 mb-5">Expert System Komputer</h2>
                <a class="btn btn-primary" href="{{ route('formGejala') }}">Mulai Diagnosa</a>
            </div>
        </div>
    </div>
@endsection