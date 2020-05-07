<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Deadline;
use App\Models\LevelAcademic;
use App\Models\LevelAssign;
use Validator, Session;

class LevelsAssignController extends Controller
{
    public function update($updated_id) {
        $category = Category::where('id', $updated_id)->with('level_assign')->first();
        $levels_assign = LevelAssign::with('levels', 'deadlines')->orderBy('id', 'desc')->get();
        
        $deadlines = DeadLine::whereNotIn('id', $category->level_assign->pluck('level_id'))->get();
        $levels = LevelAcademic::whereNotIn('id', $category->level_assign->pluck('level_id'))->get();
        return view('manage.levels_assign.update', [
            'category'=> $category,
            'updated_id'=> $updated_id,
            'deadlines'=> $deadlines,
            'levels'=> $levels,
            'levels_assign'=> $levels_assign
        ]);
    }

    public function store(Request $request, $updated_id) {
        if(is_numeric($updated_id)) {
            if($request->submit == 'Submit') {
                    $validator = Validator::make($request->all(), 
                    [
                        'level_id'=> 'numeric',
                        'deadline_id'=> 'numeric',
                        'cost'=> 'required'
                    ]);

                    if($validator->fails()) {
                        return redirect()->route('manage.levels_assign.update', $updated_id)->withErrors($validator);
                    }

                    $level_assign = new LevelAssign();
                    $level_assign->level_id = $request->level_id;
                    $level_assign->deadline_id = $request->deadline_id;
                    $level_assign->cat_id = $updated_id;
                    $level_assign->cost = $request->cost;
                    $level_assign->save();

                    Session::flash('msg', 'Successfully Added New Price');
                    return redirect()->route('manage.levels_assign.update', $updated_id);
                
            } elseif($request->submit == 'Cancel') {
                return redirect()->route('category.edit', $updated_id);
            }
        }
    }

    public function delete($updated_id) {
        $level_assign = LevelAssign::findORFail($updated_id);
        $level_assign->delete();

        Session::flash('msg_del', 'Successfully Deleted Price');
        return redirect()->back();
    }
}
