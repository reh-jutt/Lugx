@extends('admin.layout.component.app')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Trending Games </h3>
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
                            <h4 class="card-title">Add new trending games</h4>
                            <form class="forms-sample" action="{{ route('addtrendinggame') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputGamename1">Game Name</label>
                                    <input type="text" name="gamename" class="form-control" id="exampleInputGamename1"
                                        placeholder="game name">
                                    @error('gamename')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputCategory">Select Category</label>
                                    <select name="category_id" class="form-select" id="basicSelect">
                                        <option value="">Select</option>
                                        @foreach ($gamecategory as $data)
                                            <option value="{{ $data->id ?? '' }}">{{ $data->name ?? '' }}</option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputSalePrice">Sale Price</label>
                                    <input type="text" name="saleprice" class="form-control" id="exampleInputSalePrice"
                                        placeholder="Sale Price">
                                    @error('saleprice')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputDiscountPrice">Discount Price</label>
                                    <input type="text" name="discountprice" class="form-control"
                                        id="exampleInputDiscountPrice" placeholder="Discount Price">
                                    @error('discountprice')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputimage">Image</label>
                                    <input type="file" name="image" class="form-control" id="exampleInputimage"
                                        placeholder="image">
                                    @error('image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                {{-- <div class="form-check form-check-flat form-check-primary">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input"> Remember me </label>
                                </div> --}}
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
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
