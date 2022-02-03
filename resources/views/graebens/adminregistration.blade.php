@extends('layouts.app')

@section('title')
    Admin Registration
@endsection
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            @if ($message = Session::get('success'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
        </div>
        <div class="card-body">
            @include('common.registration')
        </div>
    </div>
</div>
@endsection
