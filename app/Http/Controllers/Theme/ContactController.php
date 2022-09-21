<?php

namespace App\Http\Controllers\Theme;

use App\Http\Controllers\Controller;
use App\Mail\ContactUsMail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {

        return view('theme.contact');
    }

    public function store(Request $request)
    {
        if (empty($request->name) || empty($request->email) || empty($request->phone) || empty($request->msg)) {
            return redirect()->back()->with([
                'error' => '',
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'msg' => $request->msg,
            ]);
        }
        try{
            \Mail::to(setting()->email)->send(new ContactUsMail((object)[
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'msg' => $request->msg,
            ]));
            return redirect()->back()->with('send-email', '');
        }catch (\Exception |\Error $e){
            dd($e->getMessage());
            return redirect()->back()->with('send-email-invalid', '');
        }



    }
}
