@extends('admin.layout.component.app')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Contact Info LUGX  </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        {{-- <li class="breadcrumb-item"><a href="#">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form elements</li>
          </ol> --}}
                </nav>
            </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Update Contact Info LUGX</h4>
                            <form class="forms-sample" action="{{route('admin.contactinfo.update', $contactinfo->id)}}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputContact">Contact Discription</label>
                                    <input type="text" name="contactinfodescription" class="form-control" id="exampleInputCategory"
                                        placeholder="Contact Info Description" value="{{$contactinfo->contactinfodescription??''}}">
                                    @error('contactinfodescription')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputCategory">Address</label>
                                    <input type="text" name="address" class="form-control" id="exampleInputaddress"
                                        placeholder="address" value="{{$contactinfo->address??''}}">
                                    @error('address')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPhone#">Phone Number</label>
                                    <input type="text" name="phone" class="form-control" id="exampleInputphone"
                                        placeholder="Phone Number" value="{{$contactinfo->phone??''}}">
                                    @error('phone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputemail"
                                        placeholder="email" value="{{$contactinfo->email??''}}">
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- <div class="form-check form-check-flat form-check-primary">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input"> Remember me </label>
                                </div> --}}
                                <button type="submit" class="btn btn-primary mr-2">Update</button>
                                <button class="btn btn-dark">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection()
