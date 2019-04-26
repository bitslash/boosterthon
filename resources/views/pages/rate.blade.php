@extends('layouts.default')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/rate.css') }}">
@stop
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
    <script src="{{ asset('js/search.js') }}"></script>
    <script src="{{ asset('js/rate.js') }}"></script>
@stop
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row">
    <div class="col-10 offset-1">
        <form method="post" action="{{ url('/rate') }}">
            @csrf
            <input type="hidden" name="rating" id="rating" />
            @isset($fundraiser_name)
                <input type="hidden" name="fundraiser_name" id="fundraiser_name" value="{{ $fundraiser_name }}">
                <h1>{{ $fundraiser_name }}</h1>
            @else
                <div class="form-group">
                    <label for="fundraiser">Fundraiser Name</label>
                    <input type="text" class="form-control typeahead" name="fundraiser_name" id="fundraiser_name" placeholder="Name of fundraiser" maxlength="128" autocomplete="off" data-provide="typeahead" data-url="{{ url('autocomplete') }}">
                </div>
            @endisset
            <div class="form-group">
                <label>Your rating</label>
                <div id="fake_rating">
                    <i class="fa fa-star fa-2x"></i>
                    <i class="fa fa-star fa-2x"></i>
                    <i class="fa fa-star fa-2x"></i>
                    <i class="fa fa-star fa-2x"></i>
                    <i class="fa fa-star fa-2x"></i>
                </div>
            </div>
            <div class="form-group">
                <label for="name">Your name</label>
                <input type="text" class="form-control" name="reviewer_name" id="reviewer_name" placeholder="First Last">
            </div>
            <div class="form-group">
                <label for="email">Your email address</label>
                <input type="email" class="form-control" name="reviewer_email" id="reviewer_email" placeholder="name@example.com" maxlength="320">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@stop


