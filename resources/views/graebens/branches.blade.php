@extends('layouts.app')

@section('title')
    Branches
@endsection

@section('content')
    <section>
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
                    @error('branch_name')
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                    <div class="float-right"><button class="btn btn-primary btn-sm" type="button"
                            data-target="#branch-registration-modal" data-toggle="modal">Register Branch</button></div>
                </div>
                <div class="card-body">
                    <table class="table table-responsive">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Branch Name</th>
                                <th>Contact Information</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($branches)
                                <?php $i = 0; ?>
                                @foreach ($branches as $branch)
                                    <?php $i++; ?>
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $branch->branch_name }}</td>
                                        <td>{{ $branch->branch_contact }}</td>
                                        <td>
                                            <form action="" method="POST">

                                                <a href="{{ route('Branches.show', ['id' => $branch->id]) }}" title="show">
                                                    <i class="fa fa-eye text-success  fa-lg"></i>
                                                </a>

                                                <a href="{{ route('Branches.show', ['id' => $branch->id]) }}" title="edit">
                                                    <i class="fa fa-edit  fa-lg"></i>
                                                </a>

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" title="delete"
                                                    style="border: none; background-color:transparent;">
                                                    <i class="fa fa-trash fa-lg text-danger"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <h3>No data</h3>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="branch-registration-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Branch Registration</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="{{ route('StoreBranch') }}">
                            @csrf
                            <div class="modal-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="branch_name">Branch Name</label>
                                        <input id="branch_name" class="form-control form-control-sm" type="text" name="branch_name">
                                        @error('branch_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="branch_contact">Branch Contact</label>
                                        <input id="branch_contact" class="form-control form-control-sm" type="text" name="branch_contact">
                                        @error('branch_contact')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer"><button class="btn btn-warning btn-sm" type="submit">Save</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
