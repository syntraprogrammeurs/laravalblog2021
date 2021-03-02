@extends('layouts.admin')
@section('content')
    <h1>Post Comments</h1>
    <p>Display {{$comments->count()}} of {{$comments->total()}}</p>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="row">Id</th>
            <th scope="row">Author</th>
            <th scope="row">E-mail</th>
            <th scope="row">Body</th>
            <th scope="row">Created_at</th>
            <th scope="row">Updated_at</th>
            <th scope="row">Actions</th>
        </tr>
        </thead>
        <tbody>
        @if($comments)
            @foreach($comments as $comment)
                <tr>
                    <td>{{$comment->id}}</td>
                    <td>{{$comment->user->name}}</td>
                    <td>{{$comment->user->email}}</td>
                    <td>{{$comment->body}}</td>
                    <td>{{$comment->created_at->diffForHumans()}}</td>
                    <td>{{$comment->updated_at->diffForHumans()}}</td>
                    <td>
                        <div class="d-flex">
                            {!! Form::open(['method'=>'PATCH','action'=>['App\Http\Controllers\PostComments@update',$comment->id]])!!}
                            @if($comment->is_active)
                                <input type="hidden" name="is_active" value="0">
                                <div class="form-group">
                                    {!! Form::button('<i class="fas fa-unlock"></i>', ['type'=>'submit',
                                    'class'=>'btn btn-success
                                    mr-1']) !!}
                                </div>
                            @else
                                <input type="hidden" name="is_active" value="1">
                                <div class="form-group">
                                    {!! Form::button('<i class="fas fa-lock"></i>', ['type'=>'submit','class'=>'btn
                                    btn-danger mr-1']) !!}
                                </div>
                            @endif
                            {!! Form::close() !!}
                            <div class="form-group">
                                <a class="btn btn-info mr-1" href="{{route('home.post', $comment->post->slug)}}"><i class="fas
                          fa-eye">
                                        Post</i></a>
                            </div>
                          <div class="form-group">
                              <a class="btn btn-success" href=""><i class="fas fa-eye"> Replies</i></a>
                          </div>

                        </div>
                    </td>
                </tr>
            @endforeach
        @endif

        </tbody>

    </table>
    <p>{{$comments->links()}}</p>
@stop
