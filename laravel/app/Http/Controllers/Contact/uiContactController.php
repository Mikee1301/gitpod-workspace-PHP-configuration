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

        // DB:insert('insert into contact (firstname,lastname,email,age,salary,address) values (?,?,?,?,?,?)'
        // ,[$firstname,$lastname,$email,$age,$salary,$address]);
        DB::table('contact')->insert([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'age' => $age,
            'salary' => $salary,
            'address' => $address,
            
        ]);

        return redirect('https://8000-mikee1301-gitpodworkspac-acq91b1if8r.ws-eu34.gitpod.io/addContact')->with('success','Data saved');

    }
}
