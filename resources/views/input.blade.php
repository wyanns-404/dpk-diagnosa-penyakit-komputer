{{-- <!DOCTYPE html>
<html>
<head>
    <title>Input Gejala</title>
</head>
<body>
    <h1>Masukkan Gejala</h1>
    <form action="{{ route('hitungBayes') }}" method="POST">
        @csrf
        @foreach ($gejala as $g)
            <input type="checkbox" name="gejala[]" value="{{ $g->kode_gejala }}"> {{ $g->nama_gejala }}<br>
        @endforeach
        <button type="submit">Hitung</button>
    </form>
</body>
</html> --}}
@extends('template')

@section('css')
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
            
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/checkbox/css/style.css') }}">
@endsection

@section('content')
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="row justify-content-center w-100">
            <div class="col">
                <form action="{{ route('hitungBayes') }}" method="POST" >
                    @csrf
                    <div class="wrap w-100">
                        <div class="heading-title mb-4 text-center">
                            <h3>Pilih Gejala</h3>
                        </div>
                        <ul class="ks-cboxtags p-0 m-0">
                            @foreach ($gejala as $g)
                            <li>
                                <input type="checkbox" id="{{ $g->kode_gejala }}" name="gejala[]" value="{{ $g->kode_gejala }}">
                                <label style="font-size: 16px" for="{{ $g->kode_gejala }}">Apakah {{ $g->nama_gejala }} ?</label>
                            </li>
                            @endforeach
                        </ul>
                        <div class="mt-4 text-center">
                            <button class="btn btn-dark" type="submit">Start</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('javascript')
    <script src="{{ asset('assets/checkbox/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/checkbox/js/popper.js') }}"></script>
    <script src="{{ asset('assets/checkbox/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/checkbox/js/main.js') }}"></script>
@endpush