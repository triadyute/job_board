<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['company_id', 'job_title', 'job_description', 'requirements'];
    
    protected $casts = [
        'requirements' => 'array'
    ];

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function requirement()
    {
        return $this->hasMany('App\JobRequirement');
    }
}
