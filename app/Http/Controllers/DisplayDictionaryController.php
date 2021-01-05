<?php

namespace App\Http\Controllers;

use App\AjaxCrud;
use Illuminate\Http\Request;

class DisplayDictionaryController extends Controller
{
    public function index()
    {
        return view('DictionaryDataDisplay');
    }

    public function show($Kadazan)
    {
        $dic_data = AjaxCrud::where ('Kadazan', $Kadazan)->firstorFail();
        return view('DictionaryDataDisplay')->with('dic_data', $dic_data);
    }
}
