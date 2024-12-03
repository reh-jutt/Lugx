@extends('front.layers.composer.app')

@section('content')
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Edit PRofile</h3>
                    <span class="breadcrumb"><a href="{{route('Index')}}">Home</a> > Edit Profile</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        width="150px"
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                </div>
            </div>
            <div class="col-md-5 border-right">
                @auth
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile </h4>
                        </div>
                        <div class="row mt-2">

                            <p>Name : {{ auth()->user()->name }}</p>
                            <p>Surname : {{ auth()->user()->surname }}</p>
                            <p>Email : {{ auth()->user()->email }}</p>
                            <p>Phone# : {{ auth()->user()->phonenumber }}</p>
                            <p>Age : {{ auth()->user()->age }}</p>
                            <p>City : {{ auth()->user()->city }}</p>
                            <div class="mt-5 text-white"><a href="{{ route('editinfo', auth()->user()->id) }}">Edit</a></div>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
