<?php

namespace App\Http\Controllers;

class PagesController extends Controller {


    public function getIndex(){
        #processw variable data or params
        #talk to the model
        #receive from the model
        #compile or process data from the model if needed
        #pass that data to the correct view

        return view('pages.welcome');
    }

    public function getAbout(){
        $first="Nazmul";
        $last="Haque";

        $fullname=$first." ".$last;
        $email='nazmul@gmail.com';
        $data=[];
        $data['fullname']=$fullname;
        $data['email']=$email;


        //return view('pages.about')->with('fullname' ,$fullname);
         //return view('pages.about')->withFullname($fullname)->withEmail($email);
        return view('pages.about')->withData($data);
    }

    public function getContact(){
        return view('pages.contact');
    }



}