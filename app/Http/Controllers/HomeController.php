<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.view');
    }
    // public function searchItems(Request $request)
    // {
    //     if($request->search){
    //         $searchItems = Item::where('name','LIKE','%'.$request->search.'%')->latest()->pagninate(15);
    //         return view('frontend.view');
    //     }else{

    //     }
    // }
}
