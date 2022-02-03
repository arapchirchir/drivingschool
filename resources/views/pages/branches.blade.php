@extends('layouts.graebens')
@section('title')
    Branches
@endsection
@section('content')
    <nav aria-label="Branches" class="bg-light">
        <ol class="breadcrumb p-4">
            <li class="breadcrumb-item active" aria-current="page"><a href="{{route('Default')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('Branches')}}">Our Branches</a></li>
        </ol>
    </nav>

    <section id="branches">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-8 col-xs-12 col-sm-12">
                    <table class="table table-hover table-responsive">
                        <thead>
                            <tr style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
                                <th scope="col">#</th>
                                <th scope="col">Branch Name</th>
                                <th scope="col">Opening Hours</th>
                                <th scope="col">Clossing Hours</th>
                                <th scope="col">Phone Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td class="text-uppercase">jamii villas, Ayany kibera drive (H/Office)</td>
                                <td>07:00 AM</td>
                                <td>18:00 PM</td>
                                <td>0722 819933</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td class="text-uppercase">Arcade Discounts ngong road (adams Arcade)</td>
                                <td>07:00 AM</td>
                                <td>18:00 PM</td>
                                <td>0722 819933</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td class="text-uppercase">Kawangware 56</td>
                                <td>07:00 AM</td>
                                <td>18:00 PM</td>
                                <td>0722 819933</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-12">
                    <iframe src="https://www.google.com/maps/d/embed?mid=1dw0yQ_Y8C73Bbl-2JvlBS1OWVm7Fy6vo" class="w-100" style="height: 300px"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
