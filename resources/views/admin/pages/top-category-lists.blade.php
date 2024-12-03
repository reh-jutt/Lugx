@extends('admin.layout.component.app')
@section('content')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Basic Lists </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Lists</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Basic Lists</li>
                </ol>
            </nav>
        </div>

        {{-- for trending games table --}}
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Top Categories Games Lists</h4>
                    {{-- <p class="card-description"> Add class <code>.table-dark</code></p> --}}
                    <a href="{{route('topgames')}}">Add New</a>
                    <div class="table-responsive">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Edit</th>
                                    <th>Delete</th> <!-- Add an additional column for Edit button -->
                                </tr>
                            </thead>
                            <tbody> <!-- Add the tbody element here -->
                                @foreach ($topplayed as $request)
                                <tr>
                                    <td>{{$request->category}}</td>
                                    <td>{{$request->image}}</td>
                                    <td><a href="{{route('admin.topgamelist.edit',$request->id)}}">Edit</a></td>
                                    <td><a href="{{route('admin.topgamelist.delete',$request->id)}}">Delete</a></td>
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
