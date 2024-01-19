<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use App\Models\Contact;

class MainController extends Controller
{

    public function index()
    {
        $session = session();
        return view("index");

    }

    public function query(Request $request)
    {
        $session = session();
        return view("query");
    }

    public function query1(Request $request)
    {
        $session = session();
        $session->put("contact", $request->get("contact"));
        return view("query1");
    }

    public function contacts(Request $request)
    {
        $session = session();
        $session->put("wall", $request->get("wall"));
        return view("contacts");
    }

    public function contacts_chek(Request $request)
    {
        $session = session();
        $path = $request->file('file')->store('uploads', 'public');
        $session->put('name', $request->post('name'));
        $session->put('phone', $request->post('phone'));
        $session->put('photo', $path);

        $contact = new Contact();

        $contact->name = $session->get('name');
        $contact->phone = $session->get('phone');
        $contact->contact = $session->get('contact');
        $contact->wall = $session->get('wall');
        $contact->photo = $session->get('photo');
        $contact->successfull = 'Заявка в обработке';

        $contact->save();

        $session->put('seccess', true);

        return redirect()->route('home', ['success' => '']);
    }
}
