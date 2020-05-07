<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Session;
use App\Models\LevelAcademic;

class AcademicLevelController extends Controller
{
    public function index() {
        $levels = LevelAcademic::all();
        return view('manage.level_academic.index')->withLevels($levels);
    }

    public function store(Request $request) {
        if($request->submit == 'Submit') {

            $validator = Validator::make($request->all(), [
                'title_en'=> ['required'],
                'title_ar'=> ['required']
            ]);

            if($validator->fails()) {
                return redirect()->route('manage.academic_level')->withErrors($validator);
            }

            $level = new LevelAcademic();
            $level->title_en = $request->title_en;
            $level->title_ar = $request->title_ar;
            $level->save();
            Session::flash('msg', 'Successfully Added New Academic Level!');
            return redirect()->route('manage.academic_level');
        }
    }

    public function delete($level_id) {
        $level = LevelAcademic::findOrFail($level_id);
        $level->delete();
        Session::flash('msg_del', 'Successfully Delete Academic Level !');
        return redirect()->route('manage.academic_level');
    }
}
