@extends('layouts.graebens')
@section('title')
    Courses
@endsection
@section('content')
    <nav aria-label="Branches" class="bg-light">
        <ol class="breadcrumb p-4">
            <li class="breadcrumb-item active" aria-current="page"><a href="{{route('Default')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('Courses')}}">Our Courses</a></li>
        </ol>
    </nav>
    <div class="container">
        <div class="row d-flex">
            <div class="col-2">
                <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="img-fluid">
            </div>
            <div class="col-10">
                <ul>
                    <li class="h5" style="font-family: Times">
                        We are accredited by the National Transport and Service Board(NTSA) and our professional instructors
                        are ready to walk this journey with you.
                    </li>
                    <li class="h5" style="font-family: Times">
                        Our fees are standardized and we give enough practical time for our learners
                    </li>
                    <li class="h5" style="font-family: Times">
                        In order to receive a driving licence, you need to have an Identity card and have completed a 1 month
                        training from us. <br> <span class="font-italic text-uppercase font-weight-bold">nb: Issuance of Driving Licence is done by NTSA Kenya</span>
                    </li>
                </ul>
                <div class="h5 text-capitalize">below is a description of the driving license classes we offer</div>
            </div>
        </div>

        <hr class="solid">

        {{-- Course Description --}}
        <div id="class-description">
            <div class="row d-flex">
                <div class="col-xm-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="h5 font-weight-bold">License Category</div>
                </div>
                <div class="col-xm-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="h5 font-weight-bold">Description of Vehicle to Operate and Restrictions</div>
                </div>
                <div class="col-xm-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="h5 font-weight-bold">Requirements</div>
                </div>
            </div>
            {{-- Category One --}}

            <div class="row d-flex">
                <div class="col-xm-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="h6">Category A2</div>
                </div>
                <div class="col-xm-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="h6">
                        <ul>
                            <li>Enables one to ride a motorcycle above 50cc</li>
                            <li>Can carry a maximum load of 60 Kg (for up to 400cc)</li>
                            <li>Can carry a passenger</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xm-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="h6">18 Years of age and above and hold a National/Passport Identification</div>
                </div>
            </div>
            {{-- Category Two --}}

            <div class="row d-flex table-hover">
                <div class="col-xm-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="h6">Category B <span class="font-weight-bold">Light</span></div>
                </div>
                <div class="col-xm-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="h6">
                        Light Vehicles (Saloon Cars )
                    </div>
                </div>
                <div class="col-xm-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="h6">18 Years of age and above and hold a National/Passport Identification</div>
                </div>
            </div>
            {{-- Category Three --}}

            <div class="row d-flex">
                <div class="col-xm-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="h6">Category B3 <span class="font-weight-bold">Professional</span></div>
                </div>
                <div class="col-xm-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="h6">
                        <ul>
                            <li>Minimum age of 21 years</li>
                            <li>Equipped with a manual or automatic gear box</li>
                            <li>Can carry up to a maximum of 7 passengers</li>
                            <li>
                                Enables one to drive a light vehicle (passenger car) with a maximum Gross Vehicle Weight
                                (GVW) of 3500 kg with one light trailer (not exceeding 750 kg)
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xm-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="h6">18 Years of age and above and hold a National/Passport Identification</div>
                </div>
            </div>
            {{-- Category Four --}}

            <div class="row d-flex">
                <div class="col-xm-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="h6">Category C1<span class="font-weight-bold"></span></div>
                </div>
                <div class="col-xm-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="h6 text-capitalize">
                        Light trucks
                    </div>
                </div>
                <div class="col-xm-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="h6">18 Years of age and above and hold a National/Passport Identification</div>
                </div>
            </div>
            {{-- Category Five --}}

            <div class="row d-flex">
                <div class="col-xm-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="h6">Category D1<span class="font-weight-bold"></span></div>
                </div>
                <div class="col-xm-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="h6 text-capitalize">
                        Van
                        <ul class="mt-2">
                            <li>Enables one to drive a van with a maximum of 14 passengers.</li>
                            <li>Equipped with manual or automatic gearbox</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xm-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="h6">18 Years of age and above and hold a National/Passport Identification</div>
                </div>
            </div>
        </div>

        <hr class="solid">
        <div id="other-courses">
            <div class="text-center text-capitalize h3 text-primary"><span></span> Other courses <span></span></div>
            <div class="h5">Refresher Course</div>
        </div>

        <hr class="solid">
        {{-- <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                    aria-selected="true">Category A2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                    aria-selected="false">Category B</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                    aria-selected="false">Category B Professional</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#category-1" role="tab" aria-controls="category-1"
                    aria-selected="false">Category 1</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                Motor bikes
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                Light Trucks
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                Category B Professional
            </div>
            <div class="tab-pane fade" id="category-1" role="tabpanel" aria-labelledby="category-1-tab">
                Category 1
            </div>
        </div> --}}
    </div>

@endsection
