@extends('dashboard.layouts.app')
@section('content')
    <div class="row">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Products</h1>
        </div>


        <div class="table-responsive rounded mb-3 ">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <a href="/dashboard/products/create" class="btn btn-primary mb-3"><i data-feather="plus-circle" class="me-2"></i>Add Product</a>
            <table class="data-table align-items-center justify-content-center table mb-0 tbl-server-info">
                <thead class="bg-white text-uppercase">
                    <tr class="ligth ligth-data">
                        <th>No</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Desc. of Product</th>
                        <th>Product Preview</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="ligth-body">
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->desc_product }}</td>
                            <td><img src="{{ asset('storage/' . $product->image) }}" alt="img-product" class="img-preview" ></td>
                            <td>
                                <a href="/dashboard/products/{{ $product->id }}" class="badge align-items-center bg-info" ><span
                                        data-feather="eye"></span></a>
                                <a href="/dashboard/products/{{ $product->id }}/edit" class="badge align-items-center bg-warning" ><span
                                        data-feather="edit"></span></a>
                                <form action="/dashboard/products/{{ $product->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge align-items-center bg-danger border-0"
                                        onclick="return confirm('Are you sure want to delete this product?')">
                                        <span data-feather="x-circle"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection
