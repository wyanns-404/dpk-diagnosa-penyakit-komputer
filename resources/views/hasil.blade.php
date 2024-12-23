@extends('template')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/progres.css') }}">
@endsection

@section('content')
<div class="container px-4 px-lg-5 d-flex flex-column h-100 align-items-center justify-content-center">
    @php
        $totalProbabilitas = array_sum(array_column($hasil, 'probabilitas'));
    @endphp

    @if ($totalProbabilitas > 0)
        <div class="row justify-content-center w-100 flex-wrap gap-3">
            @foreach ($hasil as $h)
                @if ($h['probabilitas'] > 0)
                <div class="box">
                    <div class="content justify-content-start">
                        <div class="percent" data-text="{{ round($h['probabilitas'] * 100, 2) }}%" style="--num: {{ round($h['probabilitas'] * 100) }}">
                            <div class="dot"></div>
                            <svg>
                                <circle cx="70" cy="70" r="70"></circle>
                                <circle cx="70" cy="70" r="70"></circle>
                            </svg>
                        </div>
                        <div class="number text-center">
                            <h2>{{ $h['kerusakan'] }}</h2>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>

        @if ($hasil[0]['probabilitas'] > 0)
        <div class="row justify-content-center w-100">
            <div class="hasil mt-3 p-3">
                <b>{{ $hasil[0]['kerusakan'] }}</b>
            </div>
        </div>

        <div class="row justify-content-center w-100">
            <div class="hasil mt-3 p-3">
                <b>Solusi</b> {{ $hasil[0]['solusi'] }}
            </div>
        </div>
        @endif
    @else
        <div class="row justify-content-center w-100">
            <div class="hasil mt-3 p-3" role="alert">
                Tidak ditemukan kerusakan yang sesuai berdasarkan gejala yang Anda pilih.
            </div>
        </div>
    @endif
</div>
@endsection

@push('javascript')
@endpush
