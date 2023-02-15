@extends('dashboard.layouts.app')
@section('content')

<div class="main-panel mx-5 my-5">
    <div class="content-wrapper mt-5">
      <div class="page-header">
        <h3 class="page-title">Edit Product</h3>
      </div>
      <div class="row">
        <div class="col-lg-12 ">
          <div class="card">
            <div class="card-body">
              <form action="/dashboard/products/{{ $product->id }}" method="POST" class="mb-5" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required
                                value="{{ old('name', $product->name) }}">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="price" class="form-label">Product Price</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required
                                value="{{ old('price', $product->price) }}">
                            @error('price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="desc_product" class="form-label">Description of Product</label>
                            <input type="text" class="form-control @error('desc_product') is-invalid @enderror" id="desc_product" name="desc_product" required value="{{ old('desc_product', $product->desc_product) }}">
                            @error('desc_product')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Image Product</label>
                            <input type="hidden" name="oldImage" value="{{ $product->image }}">

                            @if ($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}"class="upload-preview img-fluid mb-3 col-sm-5 d-block">
                            @else
                            <img class="upload-preview img-fluid mb-3 col-sm-5">
                            @endif

                            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                            @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/dashboard/products" class="btn btn-danger">Cancel</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<script>
    function previewImage() {
        const image = document.querySelector('#image')
        const imagePreview = document.querySelector('.upload-preview')

        imagePreview.style.display = 'block';

        const imgreader = new FileReader();
        imgreader.readAsDataURL(image.files[0]);

        imgreader.onload = function(imgEvent) {
            imagePreview.src = imgEvent.target.result;
        }
    }
</script>
@endsection
