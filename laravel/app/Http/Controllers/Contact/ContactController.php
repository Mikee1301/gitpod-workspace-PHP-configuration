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

     public function contactByID($id){
         return response()->json(ContactModel::find($id),200);
     }
      public function contactSave(Request $request){
         $contact = ContactModel::create($request->all());
         return response()->json($contact, 201);
      }
      public function contactUpdate(Request $request, ContactModel $contact){
         $contact->update($request->all());
         return response()->json($contact, 200);
      }
      public function contactDelete(Request $request, ContactModel $contact){
         $contact->delete();
         return response()->json(null,204);
     }
}
