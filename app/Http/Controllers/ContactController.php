<?php

namespace App\Http\Controllers;

use App\Http\Requests\createContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::paginate(10);
        return view('contact.index')->with('contacts', $contacts);
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $file=$request->file('image');
        $image="";
        if(!empty($file)){
            // \dd($file);
            $image = \sha1($file->getClientOriginalName()).".".$file->getClientOriginalExtension();
            $file->move('images/contacts',$image);
        }
        $input=$request->all();
        Contact::create([
            'name'=>$request->name,
            'family'=>$request->family,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'image'=>$image,

        ]);
        return redirect('/');
    }

    public function show($id)
    {
        $information=Contact::find($id);
        return view('contact.show')->with('contact', $information);
    }

    public function edit($id)
    {

        $data=Contact::find($id);
        return view('contact.edit')->with('contact', $data);
    }

    public function update(Request $request, $id)
    {
        $contact=Contact::find($id);
        $input=$request->all();
        $contact->update($input);
        return redirect('/');
    }

    // namayesh satle zobale
    public function recyclebin(){
        $contact = Contact::onlyTrashed()->get();
        return \view('contact.trash',\compact('contact'));

    }

    // trash kardan contact
    public function trash($id){
        Contact::find($id)->delete();
        return \redirect()->route('home');
    }

    // restore kardan az trash
    public function restore($id){
        Contact::withTrashed()->findOrFail($id)->restore();
        return \redirect()->route('recyclebin');
    }

    // delete kardan contact
    public function destroy($id)
    {
        Contact::onlyTrashed()->findOrFail($id)->forceDelete();
        return redirect()->route('recyclebin');
    }
}
