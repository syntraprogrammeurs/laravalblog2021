@extends('layouts.admin')
@section('tab')
    Edit user
@stop
@section('content')
    <h1>Edit User</h1>
        <div class="row">
            <div class="col-8 img-thumbnail">
                {!! Form::open(['method'=>'PATCH', 'action'=>['App\Http\Controllers\AdminUsersController@update',$user->id],
                'files'=>true])
                 !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name',$user->name,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'E-mail:') !!}
                    {!! Form::text('email',$user->email,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('is_active', 'Status:') !!}
                    {!! Form::select('is_active',array(1=>'Active', 0=>'Not Active'),$user->is_active,
                    ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Select roles: (hou de CTRL toets ingedrukt om meerdere roles te selecteren') !!}
                    {!! Form::select('roles[]',$roles,$user->roles->pluck('id')->toArray(),['class'=>'form-control',
                    'multiple'=>'multiple'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'Password:') !!}
                    {!! Form::password('password',['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('photo_id', 'Photo:') !!}
                    {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
                </div>
                <div class="d-flex">
                    <div class="form-group mr-1">
                        {!! Form::submit('Update user',['class'=>'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                    {!! Form::open(['method'=>'DELETE', 'action'=>['App\Http\Controllers\AdminUsersController@destroy',
                    $user->id]]) !!}
                        <div class="form-group">
                            {!! Form::submit('Delete user',['class'=>'btn btn-danger']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="col-4 img-thumbnail d-flex justify-content-center align-items-center">
                <img class="img-fluid img-thumbnail" src="{{$user->photo ? asset($user->photo->file) : 'http://place-hold
               .it/400x400'}}" alt="">
            </div>
        </div>
    @include('includes.form_error')
@stop

