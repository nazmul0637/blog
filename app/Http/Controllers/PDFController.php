<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use PDF;
use App\Post;

class PDFController extends Controller
{
    public function getPostPdf(){

        $posts=Post::all();
        $pdf=PDF::loadView('posts.pdf',['posts'=>$posts]);
        return $pdf->download('posts.pdf');
    }
}
