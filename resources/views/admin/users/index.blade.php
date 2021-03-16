@extends('layouts.admin')
@section('tab')
    Users
@stop
@section('content')
    @if(Session::has('user_message'))
        <p class="alert alert-info">{{session('user_message')}}</p>
    @endif
    <h1><span class="badge badge-info display-1 shadow"><i class="fas fa-user"></i> Users</span></h1>
    <p>
        Displaying {{$users->count()}} of {{ $users->total() }} user(s).
    </p>
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
            <th scope="col">Deleted</th>
        </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>
                        <img height="62" src="{{$user->photo ? asset('images/users') . $user->photo->file : 'http://placehold.it/62x62'}}" alt="{{$user->name}}">

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
                    <td> {{ Carbon\Carbon::parse($user->created_at)->diffForHumans()}}
                    </td>

                    <td>{{$user->updated_at->diffForHumans()}}</td>
                    <td>{{$user->deleted_at}}
                    <td>
                        @if($user->deleted_at != null)
                            <a class="btn btn-warning" href="{{route('admin.userrestore', $user->id)}}">Restore</a>
                        @else
                            {!! Form::open(['method'=>'DELETE',
                            'action'=>['App\Http\Controllers\AdminUsersController@destroy', $user->id]]) !!}
                                <div class="form-group">
                                    {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                </div>
                            {!! Form::close() !!}
                        @endif
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    {{$users->links()}}

@stop

