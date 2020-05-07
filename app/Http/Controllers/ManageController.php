<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class ManageController extends Controller
{
    public function index() {
    	redirect()->route('manage.dashboard');
    }

    public function dashboard() {
    	
    	return view('manage.dashboard');
    }

    public function logout() {
    	Auth::logout();
    }
}
