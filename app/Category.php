<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'node',
    ];

public function nodes ()
{
  return $this->hasMany(Category::class, 'node');
}
}
