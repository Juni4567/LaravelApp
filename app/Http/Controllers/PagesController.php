<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //About page controller
    public function about(){
        $juni = 'Junaid Anwar';
        return view('pages.about')->with([
            'first' => 'Junaid',
            'last' => 'Anwar'
        ]);
    }

    //Contact Page controller
    public function contact(){
        $first = 'Junaid';
        return view('pages.contact')->with('first', $first);
    }
}