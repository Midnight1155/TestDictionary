<?php

namespace App\Http\Controllers;

use App\AjaxCrud;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dic_datas = AjaxCrud::inRandomOrder()->take(6)->get();
        $wordofday = AjaxCrud::inRandomOrder()->select('Kadazan')->take(1)->get();
        foreach ($wordofday as $wofday){
            $wod = $wofday->Kadazan;
        }
        $wordofdayresult = AjaxCrud::select('English')->where ('Kadazan',$wod)->get();
        return view('home')->with([
            'dic_datas'=>$dic_datas,
            'wordofday'=>$wordofday,
            'wordofdayresult'=>$wordofdayresult,
        ]);
    }


}
