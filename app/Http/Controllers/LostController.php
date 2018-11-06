<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lost;

class LostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$losts=Lost::orderBy('title','desc')->get();
        //$losts=Lost::all();
        //dd($losts);
        $losts=Lost::orderBy('created_at','desc')->paginate(1);
        return view('lost.indexs')->with('losts', $losts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('lost.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required'
        ]);
        //Create Post
        $lost= new Lost;
        $lost->title=$request->input('title');
        $lost->body=$request->input('body');
        $lost->user_id= auth()->user()->id;
        $lost->save();
        return redirect('/lost')->with('success','Post Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lost = Lost::find($id);
        return view('lost.show')->with('lost', $lost);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lost = Lost::find($id);
        // dd($lost);
        return view('lost.edit', compact('lost'));
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
        $lost = Lost::find($id);
        // dd($request->body);
        // dd($lost->body);
        // dd($lost);
        $lost->body = $request->body;
        $lost->save();
        // dd($lost);
        return view('lost.show', compact('lost'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lost=Lost::find($id);
        $lost->delete();
        return redirect('/lost')->with('success','Post Removed');
    }
}
