<?php

namespace App\Http\Controllers;

use App\Contact;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Console\Helper\Table;

use App\Mail\Sendmail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {

    }


    public function index()
    {
        $messages = DB::table('contacts')->get();

//        return view('contactUs.viewMsgs', compact('messages'));
        return view('contactUs.viewMsgs', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return ('hello create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $contact_usDataTable = new Contact;

        $contact_usDataTable->name = $request->form_name;
        $contact_usDataTable->email = $request->form_email;
        $contact_usDataTable->flat_address = $request->form_flat_address;
        $contact_usDataTable->message = $request->form_message;
        $contact_usDataTable->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact_id)
    {
        return view('contactUs.editView', compact('contact_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Contact $contact
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $contact_id)
    {
        DB::table('contacts')->where('contact_id', $contact_id)->update(array('name' => $request->form_name,
            'email' => $request->form_email,
            'flat_address' => $request->form_flat_address,
            'message' => $request->form_message));

        return redirect('/contactUs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact_id)
    {
        $contact_id->delete();
        return back();

//        /////////2nd way by resources///////
//
//        $messages = Contact::find($contact_id);
//        $messages->delete();
//        return redirect('/contactUs')->with('success','Data Delete');

    }

    //------------show message-------------//
    public function showMsg($id){

        $messages=    DB::table('contacts')->where('contact_id',$id)->get();
        return view('contactUs.viewOneMsg', compact('messages'));
    }


    public function formReplay(Request $request, Contact $contact_id)
    {
        return view('contactUs.replay', compact('contact_id'));


//        $ContactUS = new Contact;
//
//        $ContactUS->email = $request->form_email;
//        $ContactUS->message = $request->form_message;
//        $ContactUS->save();
//        return back();
    }



///----------------------------------------\\\
///----------------------------------------\\\
//send mail in contact us//


    public function send(Contact $contact, Request $request){

        Mail::send(new sendMail());
        return 'message sent';
//        return redirect('/contactUs')->with('success'  , 'Message Sent');




//  $emailsObj = Contact::all('email');
//    $count = $emailsObj->count();
//    for ($i=0;$i<$count;$i++) {
//        $allEmailsInDB[] = $emailsObj[$i]->email;
//    }
//
//    $data = array(
//        ///this is the content of email <-----> go to mail.blade.php VIEW...
//        'name' => 'user',
//        'msgContent' =>'We has received your note on our site soon, and work to improve this section. Thanlk You.',
//
//    );
//
//
//
//    Mail::send('contactUs.mail', $data, function ($message , Request $request) {
//    $message->from('hannakamilsedke@gmail.com', 'Hanna kamil');
//    $message->to($request->form_email)->subject ('Important message');
//
//
//    });
//    return 'message sent sucessfully!';
//


    }

    public function email(){
        return view('contactUs.replay');
    }




}