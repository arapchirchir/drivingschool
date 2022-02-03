@extends('layouts.graebens')
@section('title')
    Online Registration
@endsection
@section('content')
    <nav aria-label="Branches" class="bg-light">
        <ol class="breadcrumb p-4">
            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('Default') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('OnlineRegistration') }}">Online Registration</a></li>
        </ol>
    </nav>

    @include('common.registration')

@endsection
