@extends('cms.cms_master')
@section('cms_content')
@include('utils.cms_header', ['title' => 'Menu'])
<div class="row">
    <div class="col">
        <p>
        <a href="{{ url('cms/menu/create') }}" class="btn btn-primary">
                <i class="fas fa-plus-circle"></i>
                Add Menu Link 
            </a>
        </p>
    </div>
</div>
<div class="row">
    <div class="col">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Menu Link</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach($menu as $menu_item)
                <tr>
                <td>{{ $menu_item['link'] }}</td>
                <td>
                <a href="{{ url('cms/menu/' . $menu_item['id'] . '/edit') }}">
                        <i class="far fa-edit"></i>
                        Edit</a>
                        |
                    <a href="{{ url('cms/menu/' .$menu_item['id']) }}">
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