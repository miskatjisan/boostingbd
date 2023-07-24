<?php

namespace App\Http\Controllers;

use App\Models\Contact; 
use Illuminate\Http\Request;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::orderBy('id','desc')->paginate(5);
        return view('admin.contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'worktype' => 'required',
            'budget' => 'required',
            'details' => 'required',
        ]);
        $contact = new Contact;
            $contact->userID = $request->input('userID') ;
            $contact->name = $request->input('name');
            $contact->phone = $request->input('phone');
            $contact->email = $request->input('email');
            $contact->worktype = $request->input('worktype');
            $contact->budget = $request->input('budget');
            $contact->details = $request->input('details');
            
            $save = $contact->save();
        if ($save){
                return redirect()->back()->with('success','আপনার অনুরোধটি পেন্ডিং আছে আপনার ওয়েবসাইটের আপডেট চলে যাবে শিগ্রই ');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('admin.contacts.show',compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('admin.contacts.edit',compact('contact'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'worktype' => 'required',
            'budget' => 'required',
            'details' => 'required',
        ]);

        $contact->fill($request->post())->save();
        return redirect()->route('contacts.index')->with('success','Contact Has Been updated successfully');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('admin.contacts.index')->with('success','Contact has been deleted successfully');
    }
}
