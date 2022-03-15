<?php

namespace App\Http\Controllers\Contact;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class uiContactController extends Controller
{
    public function viewform(){
        return view('contactView');
    }
    public function index(){
        $contact = DB::select('select * from contact');
        return view('contactView',['contact' => $contact]);
    }

    public function contactform(){
        return view('contactForm');
    }

    public function contactSave(Request $request){

        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $age = $request->input('age');
        $salary = $request->input('salary');
        $address = $request->input('address');

        DB::insert('insert into contact (firstName,lastName,email,age,salary,address) values (?,?,?,?,?,?)'
        ,[$firstname,$lastname,$email,$age,$salary,$address]);
        return redirect('https://8000-mikee1301-gitpodworkspac-acq91b1if8r.ws-eu34.gitpod.io/addContact')->with('success','Data saved');

    }

    public function contactEdit($id){
        $contact = DB::select('select * from contact where id = ?',[$id]);
        return view('contactEdit',['contact'=>$contact]);
    }
    public function contactUpdate(Request $request, $id){
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $age = $request->input('age');
        $salary = $request->input('salary');
        $address = $request->input('address');

        DB::update('update contact set firstName = ?,lastName = ?,email = ?,age = ?,salary = ?,address = ? where id = ?'
        ,[$firstname,$lastname,$email,$age,$salary,$address,$id]);

        return redirect('https://8000-mikee1301-gitpodworkspac-acq91b1if8r.ws-eu34.gitpod.io/contactview')->with('success','Data updated');
    }

    public function contactDelete($id){
        DB::delete('delete from contact where id = ?',[$id]);
        return redirect('https://8000-mikee1301-gitpodworkspac-acq91b1if8r.ws-eu34.gitpod.io/contactview')->with('success','Data deleted');
    }
}
