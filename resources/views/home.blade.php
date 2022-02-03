@extends('layouts.app')
@section('title')
    Admin Homepage
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
                @yield('title')
                <div class="float-right">
                    <button class="btn btn-primary btn-sm" type="button" data-toggle="modal"
                        data-target="#new-registration">Register</button>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-responsive-sm">
                    <caption>Student List</caption>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Registration Date</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        @foreach ($students as $student)
                            <?php $i++; ?>
                            <tr>
                                <th scope="row">{{ $i }}</th>
                                <td>{{ $student->first_name . ' ' . $student->last_name }}</td>
                                <td>{{ $student->created_at->format('d-m-y') }}</td>
                                <td>{{ $student->phone_number }}</td>
                                <td>
                                    <form action="" method="POST">

                                        <a href="{{route('student.edit', ['student_id' => $student->student_id])}}" title="show">
                                            <i class="fa fa-eye text-success  fa-lg"></i>
                                        </a>

                                        <a href="" title="edit">
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
                    </tbody>
                </table>

                {!! $students->links() !!}
            </div>
        </div>
        <div id="new-registration" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New Student Registration</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="px-2 py-2">
                        <form method="post" action="{{ route('OnlineRegistration') }}">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <input type="text" name="first_name" class="form-control form-control-sm"
                                        id="validationServer01" placeholder="First Name" value="{{ old('first_name') }}">

                                    @error('first_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-3">
                                    <input type="text" name="last_name" class="form-control form-control-sm"
                                        id="validationServer02" placeholder="Last Name" value="{{ old('last_name') }}">

                                    @error('last_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-3">
                                    <input type="text" name="phone_number" class="form-control form-control-sm"
                                        id="validationServer02" placeholder="Phone Number"
                                        value="{{ old('phone_number') }}">

                                    @error('phone_number')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <select class="form-control form-control-sm" name="gender"
                                        value="{{ old('gender') }}">
                                        <option selected disabled>Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                    @error('gender')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-3">
                                    <input type="text" name="user_identification" class="form-control form-control-sm"
                                        id="validationServer04" placeholder="National/Passport No"
                                        value="{{ old('user_identification') }}">
                                    @error('user_identification')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-3">
                                    <input type="email" name="user_email" class="form-control form-control-sm"
                                        id="validationServer05" placeholder="E-mail (Optional)"
                                        value="{{ old('user_email') }}">
                                    @error('user_email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <select class="form-control form-control-sm" name="course_selection"
                                        value="{{ old('course_selection') }}">
                                        <option selected disabled>Select Course</option>
                                        @if (isset($courses) && count($courses) > 0)
                                            @foreach ($courses as $course)
                                                <option value="{{$course->id}}">{{$course->course_name}}</option>
                                            @endforeach
                                        @else
                                        <option class="text-capitalize">No Courses</option>
                                        @endif

                                    </select>
                                    @error('course_selection')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-3">
                                    <select class="form-control form-control-sm" name="course_branch" value="{{ old('course_branch') }}">
                                        <option  class="text-capitalize" disabled selected>Choose Branch</option>
                                        @if (isset($locations) && count($locations) > 0)
                                            @foreach ($locations as $location)
                                                <option value="{{$location->id}}" class="text-capitalize">{{$location->branch_name}}</option>
                                            @endforeach
                                        @else
                                        <option class="text-capitalize">No Branches</option>
                                        @endif

                                    </select>
                                    @error('course_branch')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            {{-- <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck3">
                                    <label class="form-check-label" for="invalidCheck3">
                                        Agree to terms and conditions
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div> --}}
                            <button class="btn btn-primary btn-sm mb-4" id="button1" type="submit">Admit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
