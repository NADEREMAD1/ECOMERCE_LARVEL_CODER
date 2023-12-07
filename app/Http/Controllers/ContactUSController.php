<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactUSController extends Controller
{
   public function show_contact() {
    return view('User.contact_us');
   }
   public function create(Request $request) {

 $Contact  = Contact::Create([
        'name'=> $request -> name,
        'email'=> $request -> email,
        'phone'=> $request -> phone,
        'subject'=> $request -> subject,
    ]);
    if ($Contact) {
        // Data was successfully saved
        return back()->with('success', 'تم إرسال البيانات بنجاح.');
    } else {
        // Data was not saved
        return back()->with('error', 'حدثت مشكلة أثناء محاولة إرسال البيانات.');
    }

   }
}
