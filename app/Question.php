<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
  protected $fillable = [
    'user_name',
    'user_email',
    'question',
    'answer',
    'publish',
    'category_id',
  ];

  public function category()
  {
    return $this->belongsTo('App\Category');
  }


}
