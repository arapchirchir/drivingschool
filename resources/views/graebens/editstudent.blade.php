@extends('layouts.app')
@section('title')
    Student Update
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
                Student details update
            </div>
            <div class="card-body">
                @foreach ($registration as $student_details)
                <form action="{{route('student.update', ['student_id' => $student_details->student_id])}}" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" class="form-control form-control-sm" value="{{$student_details->first_name}}">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" class="form-control form-control-sm" value="{{$student_details->last_name}}">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="phone_number">Phone Number</label>
                            <input type="text" name="phone_number" class="form-control form-control-sm" value="{{$student_details->phone_number}}">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="user_identification">Identification/Passport No.</label>
                            <input type="text" name="user_identification" class="form-control form-control-sm" value="{{$student_details->user_identification}}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="user_email">Email</label>
                            <input type="text" name="user_email" class="form-control form-control-sm" value="{{$student_details->user_email}}">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="course_selection">Course Selection</label>
                            <select name="course_selection" id="course_selection" class="form-control form-control-sm">
                                <option value="{{$student_details->course_selection}}">{{$student_details->id}}</option>
                                @foreach ($couses as $course)
                                    <option value="{{$course->id}}">{{$course->course_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="course_branch">Branch</label>
                            <select name="course_branch" id="course_branch" class="form-control form-control-sm">
                                <option value="{{$student_details->course_branch}}" selected>{{$student_details->branch_name}}</option>
                                @foreach ($branch as $key => $branch)
                                    <option value="{{$branch->id}}">{{$branch->branch_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success btn-sm" type="submit">Update</button>
                        <a href="{{URL::previous()}}" class="btn btn-sm btn-primary">Return</a>
                    </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
@endsection
