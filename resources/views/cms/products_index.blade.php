@extends('cms.cms_master')
@section('cms_content')
@include('utils.cms_header', ['title' => 'Products'])
<div class="row">
    <div class="col">
        <p>
        <a href="{{ url('cms/products/create') }}" class="btn btn-primary">
                <i class="fas fa-plus-circle"></i>
                Add Product
            </a>
        </p>
    </div>
</div>
<div class="row">
    <div class="col">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product Title</th>
                    <th>Product Image</th>
                    <th>Last Update</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                <td>{{ $product['ptitle'] }}</td>
                <td><img width="70" src="{{ asset('images/' . $product['pimage']) }}"></td>
                <td>{{ date('d/m/Y', strtotime($product['updated_at'])) }}</td>
                <td>
                <a href="{{ url('cms/products/' . $product['id'] . '/edit') }}">
                        <i class="far fa-edit"></i>
                        Edit</a>
                        |
                    <a href="{{ url('cms/products/' .$product['id']) }}">
                            <i class="fas fa-eraser"></i>
                            Delete</a>
                </td>
               
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection