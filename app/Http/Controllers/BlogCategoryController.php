<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
use App\DataTables\BlogCategoriesDataTable;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(BlogCategoriesDataTable $dataTable)
    {
        return $dataTable->render('webadmin.blogcategories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('webadmin.blogcategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'name' => 'required',
        ]);
        // $blogcategory = new BlogCategory();
        // $blogcategory->name = $request->name;
        // $blogcategory->slug = $request->name;
        // $blogcategory->save();

        // BlogCategory::create($request->all());

        return redirect()->route('webadmin.blogcategories.index')
                        ->with('success','Blog Category created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(BlogCategory $blogcategory)
    {
        return view('webadmin.blogcategories.show',compact('blogcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogCategory $blogcategory)
    {
        return view('webadmin.blogcategories.edit',compact('blogcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogCategory $blogcategory)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $blogcategory->update($request->all());

        return redirect()->route('webadmin.blogcategories.index')
                        ->with('success','Blog Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogCategory $blogcategory)
    {
        // dd('hi');
        $blogcategory->delete();
        return redirect()->route('webadmin.blogcategories.index')
                        ->with('success','Blog Category deleted successfully');
    }
}
