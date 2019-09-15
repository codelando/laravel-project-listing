<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    protected $fillable = ['name', 'short_desc', 'long_desc', 'image', 'active', 'featured', 'active_at'];

    protected $hidden = ['country_id'];

    protected $casts = [
      'active' => 'boolean',
      'featured' => 'boolean',
    ];

    protected $dates = [
      'active_at',
    ];
}
