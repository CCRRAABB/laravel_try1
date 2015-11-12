<?php

namespace App\Http\Controllers;
use App\Article;
//use App\database;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    //


   public  function about(){
     /*the first way of convey values
       $name1= 'crab1';
       $name2= 'crab2';
       return view('Page/about')->with([
              'first'=>$name1,
              'last'=>$name2
           ]);
     */
       /*
        //the second way
       $data=[];
       $data['first']='crab1';
       $data['last']='crab2';
       return view('Page/about',$data);
       */
/*
       $first='crab1';
       $last=2;
       return view('Page/about',compact('first','last'));
*/
       //$people=['david','lily','tina'];
       DB::update('update articles set body="update one!" where id=1');
        $article=DB::select('select * from articles where id=1');
        return $article;
       //$people=[];
       //return view('Page/about',compact('people'));
   }
}

