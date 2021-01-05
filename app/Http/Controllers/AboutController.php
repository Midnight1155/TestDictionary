<?php

namespace App\Http\Controllers;

use App\About;
use App\AjaxCrud;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function showmessage(){
        $message = About::all();
        return view('message')->with('message', $message);
    }

    public function showforeword(){
        $foreword = About::all();
        return view('foreword')->with('foreword', $foreword);
    }

    public function showpreface(){
        $preface = About::all();
        return view('preface')->with('preface', $preface);
    }
}
