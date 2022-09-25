@extends('starter')

@section('judul',)
@section('isi')

        <link rel="stylesheet" href="style.css">

<div class="container">
    
    <img style="float: left; margin-right: 20px;" src="https://play-lh.googleusercontent.com/8ihjhDymV5YuCYebEOyu3nXnuH9Ce3YZfWcI86DPA_KjRkKTyauoPCgqS7tfAkbPqR9X" width="200" alt="">

    <h1 style="font-weight: bolder">Welcome "{{ Auth::user()->name }}"</h1>
    <ul>
        <li><a href="">Home |</a></li>
        <li><a href="{{ url('catatan') }}">Catatan Perjalanan |</a></li>
        <li><a href="{{ url('create-catatan') }}">Isi Data</a></li>
    </ul>
    <br>

    <a href="{{ url('catatan') }}"><button type="button" class="btn btn-primary">Isi catatan perjalanan!</button></a>
    <hr>
</div>


@endsection