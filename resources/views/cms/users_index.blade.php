@extends('cms.cms_master')
@section('cms_content')
@include('utils.cms_header', ['title' => 'Site Users'])
<div class="row">
    <div class="col">
        <p>
        <a href="{{ url('cms/users/create') }}" class="btn btn-primary">
                <i class="fas fa-plus-circle"></i>
                Add User 
            </a>
        </p>
    </div>
</div>
<div class="row">
    <div class="col-12 mt-5">
        <table class="table table-bordered">
            <thead>
                <tr>
                    {{--<th>#ID</th> --}}
                    <th>Name</th>
                    <th>Email</th>
                   <th>kind</th>
                   <th>operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
              {{--  <td>{{ $user->id }}</td> --}}
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->kind }}</td>
                <td> <a href="{{ url('cms/users/' . $user->id . '/edit') }}">
                        <i class="far fa-edit"></i>
                        Edit</a>
                        |
                    <a href="{{ url('cms/users/' .$user->id) }}">
                            <i class="fas fa-eraser"></i>
                            Delete</a></td>
                </tr>
                @endforeach
            
            </tbody>
        </table>
    </div>
</div>
@endsection