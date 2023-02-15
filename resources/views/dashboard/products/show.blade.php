@extends('dashboard.layouts.app')
@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title mb-3"> Show Data Product </h3>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name" class="form-label">Product Name</label>
                                <input type="text" class="form-control" id="name" name="name" readonly
                                    value="{{ old('name', $product->name) }}">
                            </div>
                            <div class="form-group">
                                <label for="price" class="form-label">Product Price</label>
                                <input type="text" class="form-control" id="price" name="price" readonly
                                    value="{{ old('price', $product->price) }}">
                            </div>
                            <div class="form-group">
                                <label for="desc_product" class="form-label">Description of Product</label>
                                <input type="text" class="form-control" id="desc_product" name="desc_product" readonly
                                    value="{{ old('desc_product', $product->desc_product) }}">
                            </div>
                            <div class="form-group">
                                <img src="{{ asset('storage/' . $product->image) }}" alt="" class="img-preview my-3">
                            </div>
                            
                            <a href="/dashboard/products" class="btn btn-danger">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
