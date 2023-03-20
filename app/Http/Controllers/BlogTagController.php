<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogTag;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
use App\DataTables\BlogTagsDataTable;

class BlogTagController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(BlogTagsDataTable $dataTable)
    {
        return $dataTable->render('webadmin.blogtags.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('webadmin.blogtags.create');
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
        // $blogtag = new BlogTag();
        // $$blogtag->name = $request->name;
        // $$blogtag->slug = $request->name;
        // $$blogtag->save();

        BlogTag::create($request->all());

        return redirect()->route('webadmin.blogtags.index')
                        ->with('success','Blog Tag created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(BlogTag $blogcategory)
    {
        return view('webadmin.blogtags.show',compact('blogtag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogTag $blogtag)
    {
        return view('webadmin.blogtags.edit',compact('blogtag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogTag $blogtag)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $blogtag->update($request->all());

        return redirect()->route('webadmin.blogtags.index')
                        ->with('success','Blog Tag updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogTag $blogtag)
    {
        $blogtag->delete();
        return redirect()->route('webadmin.blogtags.index')
                        ->with('success','Blog Tag deleted successfully');
    }
}
