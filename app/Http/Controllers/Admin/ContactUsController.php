<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use App\Mail\ReplyContactMail;
  use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
class ContactUsController extends Controller
{

      public function __construct() {
           
        $this->middleware('AdminRole:ContactUs_show', [
            'only' => ['index', 'show'],
        ]);
        $this->middleware('AdminRole:ContactUs_add', [
            'only' => ['create', 'store'],
        ]);
        $this->middleware('AdminRole:ContactUs_edit', [
            'only' => ['edit', 'update'],
        ]);
        
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $Contacts=ContactUs::get();
     return view('admin.Contacts.index',compact('Contacts'));
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
           

            $validator = Validator::make($request->all(), [
            'email' => 'required|exists:contact_us,email',
        ]);
         



        if (!is_array($validator) && $validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $contact = ContactUs::where('email', $request->email)->first();
        $contact->reply = $request->reply;
        $contact->is_replied = true;
        $contact->save();

         Mail::to($contact->email)->send(new ReplyContactMail(['message' => $request->reply]));
         

        session()->flash('success', 'تم الرد علي الرسالة بنجاح');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
            $Contacts=ContactUs::where('id',$id)->first();
     return view('admin.Contacts.show',compact('Contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

     public function reply(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'contact' => 'required|exists:contacts,id',
        ]);
        if (!is_array($validator) && $validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $contact = ContactUs::where('id', $request->contact)->first();
        $contact->reply = $request->reply;
        $contact->is_replied = true;
        $contact->save();

         Mail::to($contact->email)->send(new ReplyContactMail(['message' => $request->reply]));
         

        session()->flash('success', 'تم الرد علي الرسالة بنجاح');
        return redirect()->back();
    }
}
