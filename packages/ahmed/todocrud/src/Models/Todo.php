<?php

namespace Ahmed\Todocrud\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['title', 'completed'];
}
