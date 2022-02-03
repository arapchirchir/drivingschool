@extends('layouts.app')

@section('title')
    Courses
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
                    @error('course_name')
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="text-danger">{{ $message }}</div>
                    </div>
                    @enderror
                    <div class="float-left">
                        <caption>Course list</caption>
                    </div>
                    <div class="float-right"><button class="btn btn-primary btn-sm" type="button"
                            data-target="#course-registration-modal" data-toggle="modal">Register Course</button></div>
                </div>
                <div class="card-body">
                    <table class="table table-responsive">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Course Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($courses)
                                <?php $i = 0; ?>
                                @foreach ($courses as $course)
                                    <?php $i++; ?>
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $course->course_name }}</td>
                                        <td>
                                            <form action="" method="POST">

                                                <a href="{{ route('GraebensCourses.show', ['id' => $course->id]) }}" title="show">
                                                    <i class="fa fa-eye text-success  fa-lg"></i>
                                                </a>

                                                <a href="{{ route('GraebensCourses.show', ['id' => $course->id]) }}" title="edit">
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
            <div id="course-registration-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Course Registration</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="{{ route('StoreCourse') }}">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="course_name">Course</label>
                                    <input id="course_name" class="form-control" type="text" name="course_name">
                                    @error('course_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
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
