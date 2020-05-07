<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LevelAssign extends Model
{
    protected $table = 'level_assign';
    public $timestamps = false;
    protected $fillable = ['cat_id', 'level_id', 'deadline_id'];

    public function category() {
        return $this->belongsTo('App\Models\Category', 'cat_id');
    }

    public function levels() {
        return $this->belongsTo('App\Models\LevelAcademic', 'level_id');
    }

    public function deadlines() {
        return $this->belongsTo('App\Models\Deadline', 'deadline_id');
    }

    
}
