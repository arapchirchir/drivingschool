@extends('layouts.graebens')
@section('title')
    Driver Assessment
@endsection
@section('content')
    <nav aria-label="Branches" class="bg-light">
        <ol class="breadcrumb p-4">
            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('Default') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('Assessment') }}">Corporate Driver Assessment</a></li>
        </ol>
    </nav>

    <section id="driver-assessment">
        <div class="container">
            <div class="d-flex align-items-center text-center">
                <div class="spinner-border text-info" role="status">
                   <span class="sr-only">Comming soon...</span>
                </div>
                <div class="h6 ml-4"> Coming soon... </div>
            </div>
        </div>
    </section>

@endsection
