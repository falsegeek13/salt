@extends('layouts.main')
@section('container')
    <div class="container" style="height: 300px">
        <h4 class="text-center mt-5">Hello, {{ auth()->user()->name }}</h4>
    </div>
@endsection