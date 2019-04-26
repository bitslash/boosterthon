@extends('layouts.default')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">
@stop
@section('content')
    <h1>{{ $fundraiser_name }}</h1>
    <div class="row reviews">
        @foreach ($reviews as $review)
            <div class="col-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row review">
                            <span class="rating">
                                @for ($i = 1; $i <= Config::get('options.ratings.star_count'); $i++)
                                    @if ($review->rating >= $i)
                                        <i class="fa fa-star"></i>
                                    @else
                                        <i class="fa fa-star-o"></i>
                                    @endif
                                @endfor
                            </span>
                            <span class="date">
                                {{ Carbon\Carbon::parse($review->created_at)->format('m/d/Y h:ma') }}
                            </span>
                            <span class="name">
                                <a href="mailto:{{ $review->reviewer_email }}?subject={{ Config::get('options.email.review_subject') }}">{{ $review->reviewer_name }}</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop
