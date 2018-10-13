@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    All Post
                </div>

                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                    
                        <tbody>
                            @foreach ($users as $item)
                            <tr>
                                <td>
                                    <a href="{{ route('users.show', $item->uuid) }}">
                                        {{$item->name}}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('users.permission.edit', $item->uuid) }}" class="btn btn-primary">permission</a>
                                    <a href="{{ route('users.role.edit', $item->uuid) }}" class="btn btn-primary"> role</a>
                                </td>
                                <td>
                                    <form action="{{ route('users.destroy', $item->uuid )}}" method="POST">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->username}}</td>
                                <td>
                                    @foreach ($item->roles as $item) {{$item->display_name}} @endforeach
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

