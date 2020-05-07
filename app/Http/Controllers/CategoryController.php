<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Validator, Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->paginate(10);
        return view('manage.category.index')->withCategories($categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_en'=> ['required', 'min:3'],
            'title_ar'=> ['required', 'min:3'],
            'short_description_en'=> ['required', 'min:5'],
            'short_description_ar'=> ['required', 'min:5']
        ]);

        if($validator->fails()) {
            return redirect()->route('category.create')->withErrors($validator);
        }

        $category = new Category();
        $category->title_en = $request->title_en;
        $category->title_ar = $request->title_ar;
        $category->short_description_en = $request->short_description_en;
        $category->short_description_ar = $request->short_description_ar;

        $category->save();

        Session::flash('msg', 'Successfully Added New Category');
        return redirect()->route('category.edit', $category->id);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::where('id', $id)->with('level_assign')->first();
        return view('manage.category.show')->withCategory($category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('manage.category.edit')->withCategory($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title_en'=> ['required', 'min:3'],
            'title_ar'=> ['required', 'min:3'],
            'short_description_en'=> ['required', 'min:5'],
            'short_description_ar'=> ['required', 'min:5']
        ]);

        if($validator->fails()) {
            return redirect()->route('category.create')->withErrors($validator);
        }

        $category = Category::findOrFail($id);
        $category->title_en = $request->title_en;
        $category->title_ar = $request->title_ar;
        $category->short_description_en = $request->short_description_en;
        $category->short_description_ar = $request->short_description_ar;

        $category->save();

        Session::flash('msg', 'Successfully Updated Category');
        return redirect()->route('category.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        Session::flash('msg_del', 'Successfully Deleted Category');
        return redirect()->route('category.index');
    }
}
