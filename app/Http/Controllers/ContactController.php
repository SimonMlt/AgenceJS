<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    /**
     * View of contact
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('contact');
    }

    public function email(Request $request)
    {
        //Envoi de l'email
        Mail::to('contact@agencejs.com')->send(new ContactMail($request->all()));
        return response()->json(['success' => 'success']);
    }

}
