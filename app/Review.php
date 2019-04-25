<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $timestamps = false;
    protected $table = 'reviews';
    protected $fillable = ['fundraiser_id', 'rating', 'reviewer_name', 'reviewer_email'];
}
