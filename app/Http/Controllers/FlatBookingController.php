<?php

namespace App\Http\Controllers;

use App\Model\Flat;
use App\Model\Flat_booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class FlatBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Flat $id)
    {
        $flat = Flat::find($id);
        return view('book.index')->with('flat' , $flat);
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
    public function store(Request $request)
    {
        $this->validate($request , [
            'book_duration'     => 'required',
        ]);
        $flat = Flat::find('flat_id');
        $book = new Flat_booking();
        $book->book_duration = $request->input('book_duration');
        $book['id'] = Auth::user()->id;
        $book->flat_id = $flat;
        $book->save();
        return redirect('/flats')->with('success'  , 'flat Created ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Flat_booking  $flat_booking
     * @return \Illuminate\Http\Response
     */
    public function show(Flat_booking $flat_booking)
    {
        return view('book.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Flat_booking  $flat_booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Flat_booking $flat_booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Flat_booking  $flat_booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flat_booking $flat_booking)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Flat_booking  $flat_booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flat_booking $flat_booking)
    {
        //
    }
}