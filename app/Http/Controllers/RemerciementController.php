<?php

namespace App\Http\Controllers;

use App\Vue;
use Illuminate\Http\Request;

class RemerciementController extends Controller
{
    //
    public function index(){

        $vue = new Vue();
        $vue->vueable_id   = 1;
        $vue->vueable_type = 'App\Remerciement';
        $vue->url           = \Request::url();       ;
        $vue->session_id    =   \Request::getSession()->getId();;
        $vue->ip            =  \Request::getClientIp();;
        $vue->agent         = \Request::header('User-Agent');
        $vue->save();
        return view('remerciement');
    }

    public function index2(){
        $vue = new Vue();
        $vue->vueable_id   = 1;
        $vue->vueable_type = 'App\Newsletter';
        $vue->url           = \Request::url();       ;
        $vue->session_id    =   \Request::getSession()->getId();;
        $vue->ip            =  \Request::getClientIp();;
        $vue->agent         = \Request::header('User-Agent');
        $vue->save();
        return view('remerciement_mail');
    }
}
