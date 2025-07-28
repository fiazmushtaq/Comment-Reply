<?php

namespace App\Http\Controllers;

use App\Models\commentmodel;

use Illuminate\Http\Request;

class CommentmodelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'comment' => 'required'
        ]);

        commentmodel::create([
            'comment' => $request->comment
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(commentmodel $commentmodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(commentmodel $commentmodel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, commentmodel $commentmodel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(commentmodel $commentmodel)
    {
        //
    }
}
