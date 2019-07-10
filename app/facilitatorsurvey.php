<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class facilitatorsurvey extends Model
{
  protected $fillable = [
    'user_id', 'objectives', 'explain', 'describe', 'list', 'materials', 'prepare', 'delivery', 'modules',
  ];
}
