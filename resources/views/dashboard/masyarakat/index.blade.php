@extends('layouts.masyarakat')
@section('content')

<div class="card-body">
    <div class="h1 text-center font-weight-bold font-italic">Selamat Datang, {{ auth()->user()->name }}</div>
</div>

@endsection
