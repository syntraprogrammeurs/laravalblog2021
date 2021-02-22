@extends('layouts.admin')
@section('tab')
    Users
@stop
@section('content')
    <h1>Users</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Photo</th>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Role</th>
            <th scope="col">Active</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
        </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>
                        <img height="62" src="{{$user->photo ? asset($user->photo->file) : 'http://placehold.it/62x62'}}" alt="{{$user->name}}">

                    </td>
                    <td>
                        <a href="{{route('users.edit', $user->id)}}"> {{$user->name}}</a>

                    </td>
                    <td>{{$user->email}}</td>
                    <td>
                        @foreach($user->roles as $role)
                            <span class="badge badge-pill badge-info">{{$role->name}}</span>
                        @endforeach
                    </td>
                    <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    {{$users->links()}}
@stop

