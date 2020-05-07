<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LevelAcademic extends Model
{
    protected $table = 'academic_levels';
    protected $fillable = ['title_en', 'title_ar'];
    public $timestamps = false;

    public function deadlines() {
        return $this->belongsToMany('App\Models\Deadline', 'level_assign', 'level_id', 'deadline_id');
    }

    public function level_assign() {
        return $this->hasMany('App\Models\LevelAssign', 'level_id');
    }
}
