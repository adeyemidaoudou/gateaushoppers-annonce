<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vue;
use App\Message;
use App\Contact;
use App\Accueil;


class ContactController extends Controller
{
    //

    public function index(){
        $vue = new Vue();
        $vue->vueable_id   = 1;
        $vue->vueable_type = 'App\Contact';
        $vue->url           = \Request::url();       ;
        $vue->session_id    =   \Request::getSession()->getId();;
        $vue->ip            =  \Request::getClientIp();;
        $vue->agent         = \Request::header('User-Agent');
        $vue->save();

        return view('contact');
    }

}
