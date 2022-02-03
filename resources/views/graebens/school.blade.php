@extends('layouts.app')
@section('title')
    School Information
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
                School Information
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                Fees Structure
                                <form action="{{route('fees.structure')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input type="file" name="fees_structure" class="form-control-sm form-control-file">
                                        <p class="text-danger">@error('fees_structure')
                                            {{$message}}
                                        @enderror</p>
                                    </div>
                                    <button class="btn btn-info btn-sm" type="submit">Upload</button>
                                </form>
                            </div>
                            <div class="col-md-6">
                                @if (isset($fees_structure))
                                    <form action="{{route('fees.structure.download', ['fees_structure' => $fees_structure->fees_structure])}}" method="post">
                                        @csrf
                                        <button class="btn btn-primary" type="submit">Fees Structure</button>
                                    </form>
                                @else
                                    Fees Structure unavailable
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
