<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
use App\DataTables\BlogDataTable;
use App\Models\Author;

class BlogController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(BlogDataTable $dataTable)
    {
        return $dataTable->render('webadmin.blogs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors=Author::all();
        return view('webadmin.authors.create',compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('hi');
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'status' => 'required',

        ]);
 //dd($request);
        $blog              = new Blog();
        $blog->author_id = $request->author_id;
        $blog->name        = $request->name;
        $blog->description = $request->description;
        $blog->status      = $request->status;
        $blog->save();

        return redirect()->route('webadmin.blogs.index')
                        ->with('success','Blog created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('webadmin.blogs.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $blogs=Blog::all();
        $blog = Blog::find($id);
         $blog['author']=Author::all();
         return view('webadmin.blogs.edit',compact('blog','authors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        // dd($request);
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'status' => 'required',

        ]);
        $blog              = new Blog();
        $blog->update($request->all());
        $blog = Blog::find($id);
        $input        = $request->all();
        $blog->update($input);

        return redirect()->route('webadmin.blogs.index')
                        ->with('success','Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('webadmin.blogs.index')
                        ->with('success','Blog deleted successfully');
    }

}
