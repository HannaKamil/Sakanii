<?php

namespace App\Http\Controllers;

use App\Model\Flat_comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class FlatCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


//        $comments= DB::table('flat_comments')->get();




    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $flatComments = new Flat_comment;
        $flatComments->body = $request->form_comment;
        $flatComments->user_id = Auth::user()->id;
        $flatComments->flat_id = $id;
        $flatComments->save();
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Flat_comment  $flat_comment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

//        $flatComments = DB::table('flat_comments')->find($id);
//        return view('flats.show')->with('flatComments' , $flatComments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Flat_comment  $flat_comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Flat_comment $idd)
    {
        return view('flats.editcomment', compact('idd'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Flat_comment  $flat_comment
     * @return \Illuminate\Http\Response
     */



    public function update(Request $request, $idOfComment)
    {
        DB::table('flat_comments')->where('flat_comment_id', $idOfComment)->update(array('body' => $request->form_comment));

        return redirect('/flats');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Flat_comment  $flat_comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flat_comment $idd)
    {


            $idd->delete();
            return back();
    }
}