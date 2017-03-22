@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">{!! $page->title !!}</div>
                <div class="panel-body">
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
