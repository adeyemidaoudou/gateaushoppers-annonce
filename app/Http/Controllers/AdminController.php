<?php

namespace App\Http\Controllers;

use App\Accueil;
use App\Contact;
use App\Message;
use App\Vue;
use Illuminate\Http\Request;
use Stevebauman\Location\Location;

class AdminController extends Controller
{
    //

    public  function index(){

        $numMessages = Message::all()->count();
        $numVuesAccueil = Accueil::find(1)->views->count();
        $numVuesContact = Contact::find(1)->views->count();
        $messageNonLus = Message::where('isRead',false)->count();
        $page = 'Accueil';

        //accueil
        $distinctDatesAccueil= $this->getDifferentDate('App\Accueil');
        $vuesAccueil = $this->getVuesOnPage('App\Accueil', $distinctDatesAccueil);

       // return $this->getVuesOnDate('App\Accueil', $distinctDatesAccueil[0]);

       // return $distinctDates ;
       // return dd($numVuesAccueil);

        return view('admin/index', ['numMessages'=>$numMessages , 'numVuesAccueil' =>$numVuesAccueil ,
            'messageNonLus' => $messageNonLus , 'numVuesContact' =>$numVuesContact , 'distinctDatesAccueil' =>$distinctDatesAccueil,
            'vuesAccueil' =>$vuesAccueil , 'page' =>$page
            ]);
    }

    public function messages($id_subject){
        $messages = Message::where('subject_id', $id_subject)->get();
        $page = 'Accueil';
        return view('admin/messages', ['messages'=> $messages, 'page'=>$page]);
    }

    public function contact(){
        return view('contact');
    }

    public function remerciement(){
        return view('remerciement');
    }

    public function show($id){
        $message = Message::find($id);
        $message->isRead = true;
        $message->save();
        return view('admin/message', ['message' => $message]);

    }


    public function users_ip($page,$date){

        $date2=[];
         array_push($date2,$date);

        $vues = $this->getRawVuesOnDate('App\\'.$page,$date);
        //return $vues[0]->ip;
        $location = [];
        $i=0;
        foreach ($vues as $vue){
            $location[$i]= \Location::get($vue->ip);
            $i++;
        }

       // return $location;

        $data = [$vues, $location];

       // return $data[1];

        return view('admin.users_ip',['data'=>$data ,'page' =>$page, 'date' =>$date]);
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

    public function getRawVuesOnDate($page, $date){

        $vues = Vue::where('vueable_type', $page)->get();

       // return $vues;
        $i=0;
        $results = [];
        foreach ($vues as $vue){
            if($vue->created_at->format('d-m-Y') == $date){
                $results[$i] = $vue;
                $i++;
            }
        }
        return $results;

    }
}
