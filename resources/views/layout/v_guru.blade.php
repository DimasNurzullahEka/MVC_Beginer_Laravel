@extends('layout.v_template')
@section('title','Guru')
@section('content')
    {{-- <h1>Selamat Datang Di Halaman Guru</h1> --}}
    {{-- {{dd($guru)}} --}}
    @foreach ($guru as $data)
    <h3>  NIM:{{$data['nim']}}</h3> <br>
    <h3>  Nama:{{$data['nama']}}</h3> <br>
    <h3>   Prodi:{{$data['prodi']}}</h3> <br>

    @endforeach

@endsection
