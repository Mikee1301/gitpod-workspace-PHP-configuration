<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ContactModel;

class ContactController extends Controller
{
     public function contact(){
        return response()->json(ContactModel::get(),200);
     }
}
