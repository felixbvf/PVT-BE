<?php

namespace Muserpol\Models\Contribution;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// use Illuminate\Database\Eloquent\Model\Contribution;

class AidCommitment extends Model
{
    use SoftDeletes;
    
     protected $dates = ['deleted_at'];
}
