<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class welcomeController extends Controller {

    public function index(){
        return 'hello';
    }

    public function contact(){
        return view('contact');
    }
}