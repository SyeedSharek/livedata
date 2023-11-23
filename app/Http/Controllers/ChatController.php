<?php

namespace App\Http\Controllers;

use App\Events\ChatEvant;
use Illuminate\Http\Request;



class ChatController extends Controller
{
    public function view_chat(){
        return view('customerChat');
    }

    public function broadcastMessage(Request $request){

        event(new ChatEvant($request->message, $request->username));
    }
}
