<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fundraiser extends Model
{
    public $timestamps = false;
    protected $table = 'fundraisers';
    protected $fillable = ['fundraiser_name'];
}
