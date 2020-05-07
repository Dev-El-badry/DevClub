<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deadline extends Model
{
    protected $table = 'deadlines';
    protected $fillable = ['period'];
    public $timestamps = false;

    public function levels() {
        return $this->belongsToMany('App\Models\LevelAcademic', 'level_assign', 'deadline_id', 'level_id');
    }
    public function level_assign() {
        return $this->hasMany('App\Models\LevelAssign', 'deadline_id');
    }
}
