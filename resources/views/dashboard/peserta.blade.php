@extends('layouts.dashboard')

@section('title')
    Home
@endsection

@section('content')
    Selamat Datang {{ Auth::user()->name }}
@endsection
