<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deadline;
use Validator, Session;

class DeadlineController extends Controller
{
    public function index() {
        $levels = Deadline::all();
        return view('manage.deadline.index')->withLevels($levels);
    }

    public function store(Request $request) {
        if($request->submit == 'Submit') {

            $validator = Validator::make($request->all(), [
                'period'=> ['required']
            ]);

            if($validator->fails()) {
                return redirect()->route('manage.deadline')->withErrors($validator);
            }

            $level = new Deadline();
            $level->period = $request->period;
           
            $level->save();
            Session::flash('msg', 'Successfully Added New Deadline!');
            return redirect()->route('manage.deadline');
        }
    }

    public function delete($level_id) {
        $level = Deadline::findOrFail($level_id);
        $level->delete();
        Session::flash('msg_del', 'Successfully Delete Deadline !');
        return redirect()->route('manage.deadline');
    }
}
