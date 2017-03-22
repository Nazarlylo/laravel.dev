@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{!! $category->title !!}</div>
                    <div class="panel-body">
                        {!! $category->description !!}
                    </div>
                    <div class="post-box">
                      @foreach($posts as $key=>$post)

                          <div class="title">{!! $post->title !!}</div>
                          <div class="post-photo">
                              <img src="/uploads/images/{{$post->image}}">
                          </div>
                          <div class="post-box">{!! $post->content !!}</div>
                          @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection