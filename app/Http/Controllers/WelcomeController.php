<?php namespace App\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: guilhermefavoreto
 * Date: 10/22/2015
 * Time: 8:10 PM
 */

class WelcomeController extends Controller {

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('welcome');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}

