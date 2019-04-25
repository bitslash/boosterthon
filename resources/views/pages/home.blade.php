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
                        @for ($i = 1; $i <= Config::get('options.ratings.star_count'); $i++)
                            @if ($i <= $review->rating)
                                <i class="fa fa-star"></i>
                            @else
                                <i class="fa fa-star-o"></i>
                            @endif
                        @endfor
                        <p>{{ $review->reviewer_name }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop

