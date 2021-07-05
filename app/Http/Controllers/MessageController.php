<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
    public function servicesPatisserie(Request $request){
        $message = new Message();
        $message->name = $request->name ;
        $message->subject_id = $request->subject_id ;
        $message->email = $request->email ;
        $message->message = $request->message ;
        $message->isRead = false ;

      if(  $message->save())
        return redirect()->route('remerciement');

    }


}
