<?php

namespace App\Http\Controllers;

use App\AjaxCrud;
use App\Search;
use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    public function index(){
        return view('search');
    }

    public function autocomplete(Request $request){
        $data = Search::select("column1")
            ->where("column1", "LIKE", "%{$request->input('search')}%")->take(10)->get();
        return response()->json($data);
    }

    // this function here sends the results to autocomplete event change according to requirements
    public function result(Request $request){
        $term = $request->term;
        $items = Search::where('Kadazan', 'LIKE', '%'.$term.'%')->take(10)->get();
        if(count($items) == 0){
            $searchResult[]="Item not Found!"; // if the search item is not in the database the autocomplete would display no item found
            return $searchResult;
        }else{
            foreach($items as $key => $value){
                $searchResult[] = $value->Kadazan; //fetches the phone name and sends to autocomplete, change according to requirements
            }
            return $searchResult;
            //return view('search')->with('search_result', $searchResult);
        }
        //

    }
    // this function here sends the results to phoneresults.blade.php
    public function phone(Request $request){

        $term = $request->input('SearchItem');

        $items = Search::where('Kadazan', 'LIKE', $term.'%')->get();

        $phonename = $items->Kadazan;
        $overview = $items->Malay;

        return view('phoneresults', compact('phonename','overview'));
    }

    public function search(Request $request){
        //echo $request->searchmodel;
        $searchmodel = $request->searchmodel;
        //return $searchresults = Search::all();

        if($searchmodel!=""){
            return  $searchresults= DB::table('dictionary_data')
                ->where('Kadazan', 'like', '%'. $searchmodel . '%')
                ->take(10)
                ->get();
        }
    }

    public function searchdict(){
        $dic_data = AjaxCrud::where ('Kadazan', $Kadazan)->firstorFail();
        return view('DictionaryDataDisplay')->with('dic_data', $dic_data);
    }
}
