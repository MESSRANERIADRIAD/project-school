<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Message;



class MessageController extends Controller
{
    public function newsletter(Request $request)
    {
    $data = $request->validate([
        'email' =>'required|email'
    ]); 

    Newsletter::create($data);

    return back();
       
}
public function contact(Request $request)
{
$data = $request->validate([
    'name' =>'required|string|max:191',
    'email' =>'required|email|max:191',
    'subject' =>'nullable|string|max:191',
    'message' =>'required|string|max:10000',
]); 

Message::create($data);

return back();
   
}
}
