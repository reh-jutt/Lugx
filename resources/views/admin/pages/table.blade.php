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
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Inverse table</h4>
                    <p class="card-description"> Add class <code>.table-dark</code></p>
                    <a href="form">Add New</a>
                    <div class="table-responsive">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th>username</th>
                                    <th>email</th>
                                    <th>password</th>
                                    <th>confirmpassword</th>
                                    <th>Image</th>
                                    <th>Edit</th>
                                    <th>Delete</th> <!-- Add an additional column for Edit button -->
                                </tr>
                            </thead>
                            <tbody> <!-- Add the tbody element here -->
                                @foreach ($formrequests as $request)
                                <tr>
                                    <td>{{$request->username}}</td>
                                    <td>{{$request->email}}</td>
                                    <td>{{$request->password}}</td>
                                    <td>{{$request->confirmpassword}}</td>
                                    <td>{{$request->image}}</td>
                                    <td><a href="{{url('/admin/edit',$request->id)}}">Edit</a></td>
                                    <td><a href="{{route('admin.delete-form',$request->id)}}">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{-- for trending games table --}}
    </div>
</div>
@endsection
