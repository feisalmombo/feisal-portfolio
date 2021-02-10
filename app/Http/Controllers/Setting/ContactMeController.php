<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\ContactMe;
use Carbon\Carbon;
use DB;
use Auth;

class ContactMeController extends Controller
{
    protected $activeMenu = ['setting','contact'];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = ContactMe::All();
        $data['title'] = 'Contacts';
        $data['contacts'] = $contacts;
        $data['active'] = $this->activeMenu;
        
        return view('setting.contact.index', $data);
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
        $validator = Validator::make(request()->all(),[
            'name' => 'required|string|min:6',
            'email' => 'required|email|unique:contact_mes,email',
            'subject' => 'required',
            'message' => 'required',
        ]);
        if($validator -> fails()){
            return redirect('/#contact')->withErrors($validator);
        }
        $contact = new ContactMe;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        return redirect('/#contact')->with('message','Comment sent successful, we will notify you via your email');
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
        $contact = ContactMe::findOrFail($id);
        $contact->delete();
        
        return redirect()->back()->with('message','Comment Successful deleted');
    }
}
