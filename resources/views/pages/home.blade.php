@extends('layouts.default')
@section('styles')
    <link rel="stylesheet" href="css/home.css">
@stop
@section('content')
    <div class="row">
        @foreach ($reviews as $review)
            <div class="col-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>{{ $review->fundraiser_name }}</h1>
                    </div>
                    <div class="panel-body">
                        {{ $review->reviewer_name }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop

