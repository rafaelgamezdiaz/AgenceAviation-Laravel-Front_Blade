<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\GetInTouch;
use App\Category;
use Illuminate\Support\Facades\Mail;

class GetintouchController extends Controller
{
    public function sendGetInTouchMail(Request $request)
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        Mail::to('rafaelgamezdiaz@gmail.com') // contact@agence.us  mayara.ribeiro@agence.cl
            //->cc('rafaelgamezdiaz@gmail.com')
            ->send(new GetInTouch($request));
        return json_encode(["message" => "Thank's for contact us!. We will give you response in a short time.", "correo" => $request->email]);
        
    }
}
