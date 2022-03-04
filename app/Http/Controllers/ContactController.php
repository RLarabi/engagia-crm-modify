<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    //

    public function demo(Request $request)
    {

        $validation = Validator::make($request->all(), [

            'full_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'society' => 'required',

        ], [

            'full_name.required' => 'Le nom est obligatoire.',

            'email.required' => 'L\'email est obligatoire.',

            'email.email' => 'L\'email n\'est pas valide.',

            'phone.required' => 'Le téléphone est obligatoire',

            'society.required' => 'Le nom de la société est obligatoire',

        ]);

        if($validation->fails()) {

            return response()
            ->json(['errors' => $validation->errors()->all()]);

        }

        Mail::to('mehdi.aitmouh.dev@gmail.com')
        ->send(new DemoMail($request->except('_token')));

        return response()
        ->json(['success' => 'La demande à été envoyé.']);

    }

}
