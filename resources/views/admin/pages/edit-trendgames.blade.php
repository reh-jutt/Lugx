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
              <h4 class="card-title">Edit the Trending Games</h4>
              <form class="forms-sample" action="{{route('admin.gametable.update', $trendgames->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="exampleInputUsername1">Game Name</label>
                  <input type="text" name="gamename" class="form-control"    id="exampleInputUsername1" placeholder="game name" value="{{$trendgames->gamename??''}}">
                  @error('gamename')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputCategory">Category</label>
                  <input type="text" name="category" class="form-control"    id="exampleInputCategory" placeholder="category" value="{{$trendgames->category??''}}">
                  @error('category')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputSalePrice">Sale Price</label>
                    <input type="text" name="saleprice" class="form-control"    id="exampleInputUsername1" placeholder="Sale Price" value="{{$trendgames->saleprice??''}}">
                    @error('saleprice')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputDiscountPrice">Discount Price</label>
                    <input type="text" name="discountprice" class="form-control"    id="exampleInputDiscountPrice" placeholder="Discount Price" value="{{$trendgames->discountprice??''}}">
                    @error('discountprice')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                <div class="form-group">
                    <label for="exampleInputimage">Image</label>
                    <input type="file" name="image" class="form-control" id="exampleInputimage" placeholder="image">
                    @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                <div class="form-check form-check-flat form-check-primary">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input"> Remember me </label>
                </div>
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
