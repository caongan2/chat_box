<?php

namespace App\Http\Controllers;

use App\Events\Message;
use App\Models\Message as Mes;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function fetchMessage()
    {
        $userId = Auth::id();

        $data = Mes::all();
        return response()->json([
            'data' => $data,
            'auth' => $userId
        ]);
    }

    public function send(Request $request)
    {
        $msg = \App\Models\Message::create([
            'sender' => Auth::id(),
            'receiver' => 5,
            'content' => $request->msg
        ]);
        event(new Message($msg));
        return response()->json(['stt' =>'ok']);
    }
}
