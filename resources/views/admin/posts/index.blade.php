@extends('layouts.admin')
@section('tab')
    Posts
@stop
@section('content')
    @if(Session::has('user_message'))
        <p class="alert alert-info">{{session('user_message')}}</p>
    @endif
    <h1><span class="badge badge-info display-1 shadow"><i class="fas fa-blog"></i> Posts</span></h1>
    <p>
        Displaying {{$posts->count()}} of {{ $posts->total() }} user(s).
    </p>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Photo</th>
            <th scope="col">Owner</th>
            <th scope="col">Category</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
        </tr>
        </thead>
        <tbody>
        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                   <td>
                        <img height="62" src="{{$post->photo ? asset('images/posts') . $post->photo->file : 'http://placehold.it/62x62'}}" alt="{{$post->name}}">

                    </td>
                    <td>{{$post->user ? $post->user->name : 'Username unknown'}}</td>
                    <td>{{$post->category ? $post->category->name : 'Category unknown'}}</td>
                    <td>
                        <a href="{{route('home.post', $post)}}">{{$post->title}}</a>

                    </td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                    <td>{{$post->deleted_at}}
                    <td>
                        @if($post->deleted_at != null)
                            <a class="btn btn-warning" href="{{route('admin.userrestore', $post->id)}}">Restore</a>
                        @else
                            {!! Form::open(['method'=>'DELETE',
                            'action'=>['App\Http\Controllers\AdminUsersController@destroy', $post->id]]) !!}
                            <div class="form-group">
                                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                            </div>
                            {!! Form::close() !!}
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-info" href="{{route('posts.show', $post->id)}}">Show</a>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    {{$posts->links()}}

@stop

