<section id="online-registration">
    <div class="container">
        <form method="post" action="{{ route('OnlineRegistration') }}">
            @csrf
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <input type="text" name="first_name" class="form-control form-control-sm" id="validationServer01"
                        placeholder="First Name" value="{{ old('first_name') }}">

                    @error('first_name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4 mb-3">
                    <input type="text" name="last_name" class="form-control form-control-sm" id="validationServer02"
                        placeholder="Last Name" value="{{ old('last_name') }}">

                    @error('last_name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4 mb-3">
                    <input type="text" name="phone_number" class="form-control form-control-sm" id="validationServer02"
                        placeholder="Phone Number" value="{{ old('phone_number') }}">

                    @error('phone_number')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <select class="form-control form-control-sm" name="gender" value="{{ old('gender') }}">
                        <option selected disabled>Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    @error('gender')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4 mb-3">
                    <input type="text" name="user_identification" class="form-control form-control-sm" id="validationServer04" placeholder="National/Passport No"
                        value="{{ old('user_identification') }}">
                        @error('user_identification')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                </div>
                <div class="col-md-4 mb-3">
                    <input type="email" name="user_email" class="form-control form-control-sm" id="validationServer05" placeholder="E-mail (Optional)" value="{{ old('user_email') }}">
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
                        <option value="">--No data--</option>

                        @endif
                    </select>
                    @error('course_selection')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4 mb-3">
                    <select class="form-control form-control-sm" name="course_branch"
                        value="{{ old('course_branch') }}">
                        <option selected disabled>Select Branch</option>
                        @if (isset($branches) && count($branches) > 0)
                        @foreach ($branches as $branch)
                            <option value="{{$branch->id}}">{{$branch->branch_name}}</option>
                        @endforeach
                        @else
                        <option value="">--No data--</option>

                        @endif
                    </select>
                    @error('course_branch')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck3">
                    <label class="form-check-label" for="invalidCheck3">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" id="button1" type="submit">Submit</button>
        </form>
    </div>
</section>
