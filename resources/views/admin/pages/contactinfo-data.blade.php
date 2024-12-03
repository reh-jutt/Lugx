@extends('admin.layout.component.app')
@section('content')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Basic Tables </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
            </nav>
        </div>

        {{-- for trending games table --}}
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Contact Info Data</h4>
                    {{-- <p class="card-description"> Add class <code>.table-dark</code></p> --}}
                    <a href="{{route('contactinfo')}}">Add New</a>
                    <div class="table-responsive">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th>Phone #</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Contact Info Details</th>
                                    <th>Edit</th>
                                    <th>Delete</th> <!-- Add an additional column for Edit button -->
                                </tr>
                            </thead>
                            <tbody> <!-- Add the tbody element here -->
                                @foreach ($contactinfo as $request)
                                <tr>
                                    <td>{{$request->phone}}</td>
                                    <td>{{$request->email}}</td>
                                    <td>{{$request->address}}</td>
                                    <td>{{$request->contactinfodescription}}</td>
                                    <td><a href="{{route('admin.contactinfo.edit',$request->id)}}">Edit</a></td>
                                    <td><a href="{{route('admin.contactinfo.delete',$request->id)}}">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
