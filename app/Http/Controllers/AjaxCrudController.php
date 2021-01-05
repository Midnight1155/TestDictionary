<?php

namespace App\Http\Controllers;

use App\Glossary;
use Illuminate\Http\Request;
use App\AjaxCrud;
use Yajra\DataTables\DataTables;
use Validator;

class AjaxCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.ViewDictionaryData');
    }
    public function getdata()
    {
        //$dictionarydata = AjaxCrud::select('Kadazan', 'Dusun', 'Malay', 'English');
        $dictionarydata = AjaxCrud::get();
        return Datatables::of($dictionarydata)->make(true);
    }

    public function getdata2(Request $request)
    {
        if($request->ajax())
        {
            $data = AjaxCrud::get();
            return Datatables::of($data)
                ->addColumn('action', function($data){
                    $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
                    $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('Admin.UpdateData');

    }

    public function getdata3(Request $request)
    {
        if($request->ajax()) {
            $data = AjaxCrud::get();
            return Datatables::of($data)->make(true);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data = request()->validate([
            'Kadazan' => 'required | unique:dictionary_data,Kadazan',
            'Malay' => 'required',
            'English' => 'required'
        ]);

        AjaxCrud::create($data);
        /*
        $newdata = new AjaxCrud();
        $newdata->Kadazan = request('Kadazan');
        $newdata->Centre = request('Centre');
        $newdata->Malay = request('Malay');
        $newdata->English = request('English');
        $newdata->save();
        */
        return back();
        //dd($newdata);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(request()->ajax())
        {
            $data = AjaxCrud::findOrFail($id);
            return response()->json(['result' => $data]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AjaxCrud $ajaxCrud)
    {
        $rules = array(
            'kadazan'        =>  'required',
            'malay'         =>  'required',
            'english'         =>  'required'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = array(
            'kadazan'    =>  $request->Kadazan,
            'malay'     =>  $request->Malay,
            'centre'     =>  $request->Centre,
            'english'     =>  $request->English
        );

        AjaxCrud::whereId($request->hidden_id)->update($form_data);

        return response()->json(['success' => 'Data is successfully updated']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = AjaxCrud::findOrFail($id);
        $data->delete();
    }
}
