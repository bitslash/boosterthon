@extends('layouts.default')
@section('styles')
    <link rel="stylesheet" href="css/rate.css">
@stop
@section('content')
<div class="row">
    <div class="col-10 offset-1">
        <form method="post" action="{{ url('/rate') }}">
            @csrf
            <input type="hidden" name="rating" id="rating" />
            <div class="form-group">
                <label for="fundraiser">Fundraiser Name</label>
                <input type="text" class="form-control" name="fundraiser_name" id="fundraiser_name" placeholder="Name of fundraiser" maxlength="128">
            </div>
            <div class="form-group">
                <label for="rating">Your rating</label>
                <div>
                    <i class="fa fa-star-o fa-2x"></i>
                    <i class="fa fa-star-o fa-2x"></i>
                    <i class="fa fa-star-o fa-2x"></i>
                    <i class="fa fa-star-o fa-2x"></i>
                    <i class="fa fa-star-o fa-2x"></i>
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


