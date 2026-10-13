@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')
    <h1>Detail Mahasiswa</h1>

    <p>Nama: {{ $data['nama'] }}</p>
    <p>NIM: {{ $data['nim'] }}</p>
    <p>IPK: {{ number_format($data['ipk'], 2, ',', '.') }}</p>

    @if ($data['ipk'] >= 3.5)
        <p>Keterangan: Cum Laude</p>
    @elseif ($data['ipk'] >= 3.0)
        <p>Keterangan: Baik</p>
    @else
        <p>Keterangan: Perlu ditingkatkan</p>
    @endif

    <a href="{{ route('mahasiswa.daftar') }}">
        Kembali ke Daftar Mahasiswa
    </a>
@endsection