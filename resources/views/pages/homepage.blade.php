@extends('layouts.graebens')
@section('title')
    Home | Graebens Driving School
@endsection
@section('brand')
    <div>
        <img src="{{ asset('assets/logo.png') }}" alt="" class="position-absolute" style="height: 100px; z-index:3">
    </div>
@endsection
@section('content')
    <section id="homepage">
        <div id="one">
            <div class="d-flex align-items-center" id="hero" style="width:100%; height:75vh; background-image:url({{asset('assets/graebens.jpg')}}); background-size:cover; position:relative;">
                <div class="ml-4 bg-info rounded">
                    <div class="p-2">
                        <h1 class="font-weight-bold text-white">Welcome to <span class="text-white">{{config('app.name', 'Talanta')}}</span></h1>
                        <h1 class="font-weight-bold text-white font-italic h4">Put the key in the ignition.</h1>

                        <div class="d-flex">
                            <a href="{{route('OnlineRegistration')}}" class="btn btn-info"><i class="fa fa-arrow-right"></i> Get Started</a>
                            <a href="{{route('Contact')}}" class="btn btn-primary ml-4 "><i class="fa fa-phone"> </i> <span>Contact us</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="two" class="mt-4">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-xs-12 col-sm-12 col-md-6 cpl-lg-6 col-xl-6">
                        <div id="infomation">
                            <p>
                                Graebens Driving School is one of the Best Driving Schools in Kenya for more than 10 years. We have been providing Driving Lessons and Driving Instructor
                                Training since early 90s.
                            </p>
                            <p>
                                You can get started with your Driving Classes anytime and join the thousands who learn driving and obtain driving licenses with us each month in our multiple branches across the country.
                            </p>
                        </div>
                        <hr>
                        <div id="course-features">
                            <h5 class="font-weight-bold">Our Driving Course Features</h5>
                            <ul>
                                <li>
                                    One-on-one behind the wheel instruction,
                                </li>
                                <li>
                                    Flexible drive times including weekends
                                </li>
                                <li>
                                    Top notch, state-certified instructors
                                </li>
                                <li>A flexible class schedule,</li>
                                <li>
                                    Classes offered year round
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 cpl-lg-6 col-xl-6">
                        <img src="{{asset('assets/graebens.jpg')}}" alt="" class="img-fluid w-100 rounded">
                    </div>
                </div>
            </div>
        </div>

        <div id="three" class="py-4">
            <div class="bg-light">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 p-4">
                            <div class="bg-info rounded p-3">
                                <div class="p-2">
                                    <div class="h3 text-white">Why Graebens</div>
                                    <div class="h5 text-white font-italic underline">We offer our best</div>
                                    <p class="h5 text-white" style="font-family: Georgia, 'Times New Roman', Times, serif">
                                        Graebens Driving School is accredited by NTSA and our approach is standardized to give learners quality
                                        practical time on the drivers seat, have large training areas as professional instructors to walk with you.
                                        Issuance of driving license is done by NTSA Kenya.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 p-4">
                            <div class="h4 text-info">Fees Structure</div>
                            @if (isset($fees_structure))
                            <form action="{{route('fees.structure.download', ['fees_structure' => $fees_structure->fees_structure])}}" method="post">
                                @csrf
                                <button class="btn btn-sm btn-info text-white" type="submit" id="button">Download</button>
                            </form>
                            @else
                            No fees Structure
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <script>
            document.getElementById('button').addEventListener('click', (event) => {
                event.preventDefault()
                document.getElementById('button').innerHTML = "Loading...";
            });
        </script> --}}
    </section>
@endsection
