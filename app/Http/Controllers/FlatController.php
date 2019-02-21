<?php

namespace App\Http\Controllers;

use App\Model\Flat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth' , ['except' => ['index' , 'show']]);
    }
    public function index()
    {
        //$flats = Flat::orderBy('created_at' , 'desc');
        //$flats   = Flat::all();
       $flats   = Flat::orderBy('created_at' , 'desc')->paginate(10);
        //$flats = DB::table('flats')->paginate(12);
        return view('flats.index')->with('flats' , $flats);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('flats.create');
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
            'flat_location'     => 'required',
            'flat_price'        => 'required',
            'bed_price'         => 'required',
            'flat_services'     => 'required',
            'flat_description'  => 'required',
            'flat_address'      => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);
        //Handle file upload
//        if($request->hasFile('cover_image')){
//            // Get the file Name with it extention
//            $getFileNameExt = $request->file('cover_image')->getClientOriginalName();
//            // get just filename
//            $fileName = pathinfo($getFileNameExt , PATHINFO_FILENAME);
//            //get just extention
//            $extention  = $request->file('cover_image')->getClientOriginalExtension();
//            //file to store
//            $fileNameToStore = $fileName.'_'.time().'.'.$extention;
//            // Upload Image
//            $path = $request->file('cover_image')->storeAs('cover_images' , $fileNameToStore);
//        }else{
//            $fileNameToStore = 'noImage.jpg';
//        }
            $getFileNameExt = $request->file('cover_image');
            $newName = rand().'.'.$getFileNameExt->getClientOriginalExtension();
            $getFileNameExt->move(public_path('cover_images') , $newName);

            // Create Post
            $flat = new Flat();
            $flat->flat_location = $request->input('flat_location');
            $flat->flat_address = $request->input('flat_address');
            $flat->flat_price = $request->input('flat_price');
            $flat->bed_price = $request->input('bed_price');
            $flat->flat_services = $request->input('flat_services');
            $flat->flat_description = $request->input('flat_description');
            $flat->cover_image = $newName;
            $flat['id'] = Auth::user()->id;
            $flat->save();
            return redirect('/flats')->with('success'  , 'flat Created ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Flat  $flat
     * @return \Illuminate\Http\Response
     */
    public function show(Flat $flat)
    {

        $flats = Flat::find($flat->flat_id);
        $comments_flat = DB::table('flat_comments')->where('flat_id', '=', $flat->flat_id)->get();

        foreach ($comments_flat as $comment) {
            $arr_user_body[] = $comment->body;
            $arr_user_id[] = $comment->user_id;
        }
        if (!empty($arr_user_id)) {

            foreach ($arr_user_id as $id) {
                $arr_user_name[] = DB::table('users')->where('id', '=', $id)->value('name');  //to find the name by the id
            }


            $count = count($comments_flat);

            for ($i = 0; $i < $count; $i++) {
                $arr_mix_com_user[] = ["$arr_user_name[$i]" => "$arr_user_body[$i]"];
            }
            return view('flats.show', compact('flats', 'arr_mix_com_user'));
        }
        else {
            return view('flats.show', compact('flats'));
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Flat  $flat
     * @return \Illuminate\Http\Response
     */
    public function edit(Flat $flat)
    {
        $flat::find('flat_id');
        //check for correct user
        if (auth()->user()->id !== $flat->id)
        {
            return redirect('/flats')->with('error' , 'UnAuthorized page');
        }
        return view('flats.edit')->with('flat' , $flat);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Flat  $flat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$flat)
    {

        $this->validate($request , [
            'flat_location'     => 'required',
            'flat_price'        => 'required',
            'bed_price'         => 'required',
            'flat_services'     => 'required',
            'flat_description'  => 'required',
            'flat_address'      => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);
        //Handle file upload
//        if($request->hasFile('cover_image')){
//            // Get the file Name with it extention
//            $getFileNameExt = $request->file('cover_image')->getClientOriginalName();
//            // get just filename
//            $fileName = pathinfo($getFileNameExt , PATHINFO_FILENAME);
//            //get just extention
//            $extention  = $request->file('cover_image')->getClientOriginalExtension();
//            //file to store
//            $fileNameToStore = $fileName.'_'.time().'.'.$extention;
//            // Upload Image
//            $path = $request->file('cover_image')->storeAs('cover_images' , $fileNameToStore);
//        }else{
//            $fileNameToStore = 'noImage.jpg';
//        }
        $getFileNameExt = $request->file('cover_image');
        $newName = rand().'.'.$getFileNameExt->getClientOriginalExtension();
        $getFileNameExt->move(public_path('cover_images') , $newName);

        // Update Flat
        $flats = Flat::find($flat);
        $flats->flat_location = $request->input('flat_location');
        $flats->flat_address = $request->input('flat_address');
        $flats->flat_price = $request->input('flat_price');
        $flats->bed_price = $request->input('bed_price');
        $flats->flat_services = $request->input('flat_services');
        $flats->flat_description = $request->input('flat_description');
        $flats->cover_image = $newName;
        $flats['id'] = Auth::user()->id;
        $flats->save();
        return redirect('/flats')->with('success'  , 'flat Created ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Flat  $flat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flat $flat)
    {
        $flat::find('flat_id');
        //check for correct user
        if (auth()->user()->id !== $flat->id)
        {
            return redirect('/flats')->with('error' , 'UnAuthorized page');
        }

        if($flat->cover_iamge != 'noImage.jpg')
        {
            Storage::delete('cover_images/'.$flat->cover_image);
        }
        $flat->delete();
        return redirect('/flats')->with('success' , 'Flat Removed');
    }
    public  function book($flat)
    {
        $flats = Flat::find($flat);
        $flats->status = 0;
        $flats->save();
        return view('book.index');
    }
    public function search(){
        $q = \Illuminate\Support\Facades\Input::get('q');
        $flats = \App\Model\Flat::where('flat_location', 'LIKE', '%'.$q.'%')->get();
        if (count($flats) > 0)
            return view('flats.search')->withDetails($flats)->withQuery($q);
        else
            return view('flats.nodetailsfound');
    }

}
