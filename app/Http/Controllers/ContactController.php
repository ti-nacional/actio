<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function sendMail(Request $request){
        $rules = [];
        $validator = new Validator($request->all(), $rules);

        if($validator){
            Mail::to('teste@teste.com')->send(new Contact($request->name, $request->email, $request->phone, $request->company, $request->userMessage));
            return redirect()->back();
        }
    }
}
