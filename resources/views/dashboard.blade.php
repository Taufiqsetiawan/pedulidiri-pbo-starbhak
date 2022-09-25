@extends('starter')

@section('judul',)
@section('isi')
   

<div class="container">
    
    <img style="float: left; margin-right: 20px;" src="https://play-lh.googleusercontent.com/8ihjhDymV5YuCYebEOyu3nXnuH9Ce3YZfWcI86DPA_KjRkKTyauoPCgqS7tfAkbPqR9X" width="200" alt="">

    <h1 style="font-weight: bolder">Welcome "{{ Auth::user()->name }}"</h1>
    <p style="color: blue">Hubungi kami | Tentang Kami | Data diri</p>
    <br>

    <a href="{{ url('catatan') }}"><button type="button" class="btn btn-primary">Isi catatan perjalanan!</button></a>
    <hr>
</div>


@endsection