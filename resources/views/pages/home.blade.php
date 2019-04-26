@extends('layouts.default')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@stop
@section('content')
    @foreach ($reviews as $review)
        <div class="row">
            <div class="col-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-certificate fa-5x pull-left"></i>
                        <h1>{{ $review->fundraiser_name }}</h1>
                    </div>
                    <div class="panel-body">
                        @for ($i = 1; $i <= Config::get('options.ratings.star_count'); $i++)
                            @if ($review->average_rating >= $i)
                                <i class="fa fa-star"></i>
                            @elseif ($review->average_rating >= ($i - Config::get('options.ratings.half_star')))
                                <i class="fa fa-star-half-o"></i>
                            @else
                                <i class="fa fa-star-o"></i>
                            @endif
                        @endfor
                        <a href="{{ url('/list/' . $review->fundraiser_id) }}">
                            @if ($review->num_rating == 1)
                                ({{ $review->num_rating }} Review)
                            @else
                                ({{ $review->num_rating }} Reviews)
                            @endif
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@stop

