<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    public $timestamps = false;
    protected $fillable = ['title_en', 'title_ar', 'short_description_en', 'short_description_ar'];

    public function level_assign() {
        return $this->hasMany('App\Models\LevelAssign', 'cat_id');
    }
}
