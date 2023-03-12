<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;



class FeedbackController extends Controller
{





    public function createpage(){
        return view('index');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $show=DB::table('feedback')->get();
         return view('feedback_list' ,compact('show'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        DB::table('feedback')->insert([
           'name' =>   $request->name,
           'phone' =>   $request->phone,
           'email' =>   $request->email,
           'message' =>   $request->message



        ]);
        return redirect()->route('display');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function delete( $id){
        DB::table('feedback')->where('id' , $id)->delete();
        return redirect()->route('display');
    }
    public function deleteall(){
        DB::table('feedback')->truncate();
        return redirect()->route('display');
    }
}
