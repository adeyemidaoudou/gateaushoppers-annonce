<?php

namespace App\Http\Controllers;

use App\Remerciement;
use App\Vue;
use App\Message;
use App\Accueil;
use App\Contact;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    //

    public function index(){

        $vue = new Vue();
        $vue->vueable_id   = 1;
        $vue->vueable_type = 'App\Accueil';
        $vue->url           = \Request::url();       ;
        $vue->session_id    =   \Request::getSession()->getId();;
        $vue->ip            =  \Request::getClientIp();;
        $vue->agent         = \Request::header('User-Agent');
        $vue->save();

        return view('welcome');
    }

    public function statistiques($page){

        $numMessages = Message::all()->count();
        $numVuesAccueil = Accueil::find(1)->views->count();
        $numVuesContact = Contact::find(1)->views->count();
        $numVuesRemerciement = Remerciement::find(1)->views->count();
        $messageNonLus = Message::where('isRead',false)->count();

        //accueil
        $distinctDatesAccueil= $this->getDifferentDate('App\\'.$page);
        $vuesAccueil = $this->getVuesOnPage('App\\'.$page, $distinctDatesAccueil);

        // return $this->getVuesOnDate('App\Accueil', $distinctDatesAccueil[0]);

        // return $distinctDates ;
        // return dd($numVuesAccueil);

        return view('admin.accueil_stat', ['numMessages'=>$numMessages , 'numVuesAccueil' =>$numVuesAccueil ,
            'messageNonLus' => $messageNonLus , 'numVuesContact' =>$numVuesContact ,'numVuesRemerciement'=>$numVuesRemerciement , 'distinctDatesAccueil' =>$distinctDatesAccueil,
            'vuesAccueil' =>$vuesAccueil, 'page' =>$page
        ]);
       }


    public function getDifferentDate($page){
        $vues = Vue::where('vueable_type', $page)->get();
        $date_diff = array();
        $i=0;
        $date_diff[$i]=$vues[0]->created_at->format('d-m-Y');
        foreach ($vues as $vue){
            if($vue->created_at->format('d-m-Y') != $date_diff[$i]){
                $i++;
                $date_diff[$i]= $vue->created_at->format('d-m-Y');
            }
        }

        return $date_diff;
    }

    public function getVuesOnDate($page,$date){

        $vues = Vue::where('vueable_type', $page)->get();

        $i=0;
        foreach ($vues as $vue){
            if($vue->created_at->format('d-m-Y') == $date){
                $i++;
            }
        }

        return $i;
    }

    public function getVuesOnPage($page, $dates){

        $vues = [];
        $i=0;
        foreach ($dates as $date){
            $vues[$i] = $this->getVuesOnDate($page,$date);
            $i++;
        }

        return $vues;

    }
}
