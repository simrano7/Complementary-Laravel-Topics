<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category_data=Category::get();
        // print_r($category_data);
        return view("categories.index",compact("category_data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("categories.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // print_r($request->category_name);
        Category::create([
            "category_name"=>"test",
            "category_name"=>$request->category_name,
            "description"=>$request->description
        ]);
        return redirect()->route("category.create")->with("success","Data inserted");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $category_data=Category::where("id",$id)->first();
       return view("categories.show",compact("category_data"));
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category_data=Category::findorfail($id);
        // print_r($category_data);
        return view("categories.edit",compact("category_data"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Category::where("id",$id)->update([
            "category_name"=>$request->category_name,
            "description"=>$request->description
        ]);
        return redirect()->route("category.index")->with("msg","Updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::findorfail($id)->delete();
        return redirect()->route("category.index")->with("msg","Data deleted!!");
    }
}
